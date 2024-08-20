<?php

namespace App\Services;

use App\Events\SendNotificationEvent;
use App\Models\Complaint;
use App\Models\Solution;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class SolutionService
{
    public function store($request)
    {
        $id = Auth::id();
        $input = $request->all();
        $input['user_id'] = $id;
        Solution::create($input);
        $complaint = Complaint::find($input['complaint_id']);
        $user = User::find($complaint->user_id);
            if (!empty($user->fcm_token)) {
                Event::dispatch(new SendNotificationEvent('تم الرد على الشكوى', $user));
            }
        return response()->json(['message' => 'The Solution is added Successfully'], 201);
    }


    public function update($id, $request)
    {
        $user_id = Auth::id();
        $solution = Solution::find($id);
        if (empty($solution)) {
            return response()->json(['message' => 'The solution is Not Found'], 404);
        }
        if ($solution->user_id == $user_id) {
            $solution->update([
                'body' => ($request->body) ? $request->body : $solution->body
            ]);
            return response()->json(['message' => 'The solution is updated Successfully'], 200);
        }
        return response()->json(['message' => 'you can not update this an solution'], 403);
    }
}
