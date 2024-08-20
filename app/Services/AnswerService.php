<?php

namespace App\Services;

use App\Events\SendNotificationEvent;
use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class AnswerService
{
    public function store($request)
    {
        $id = Auth::id();
        $input = $request->all();
        $input['user_id'] = $id;
        Answer::create($input);
        $question = Question::find($input['question_id']);
        $user = User::find($question->user_id);
            if (!empty($user->fcm_token)) {
                Event::dispatch(new SendNotificationEvent('تمت الإجابة على سؤالك', $user));
            }
        return response()->json(['message' => 'The answer is added Successfully'], 201);
    }


    public function update($id, $request)
    {
        $user_id = Auth::id();
        $answer = Answer::find($id);
        if (empty($answer)) {
            return response()->json(['message' => 'The answer is Not Found'], 404);
        }
        if ($answer->user_id == $user_id) {
            $answer->update([
                'body' => ($request->body) ? $request->body : $answer->body
            ]);
            return response()->json(['message' => 'The answer is updated Successfully'], 200);
        }
        return response()->json(['message' => 'you can not update this an answer'], 403);
    }
}
