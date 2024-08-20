<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;


class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'user_id' => 1,
                'question_id' =>1,
                'body' => 'you can check it from the image of the book if it is marked as +18 or not!'
            ],
            [
                'user_id' => 1,
                'question_id' => 2,
                'body' => "sorry but we don't sell books  !"
            ],
            [
                'user_id' => 1,
                'question_id' =>1,
                'body' => 'yes it is it has a very good rating you can check our clients rating for more feedbacks about this book !'
            ],
            [
                'user_id' => 1,
                'question_id' =>2,
                'body' => 'yes click on the author name to visit it page and check more books of that author!'
            ],
        ];
        foreach($answers as $answer){
            Answer::create($answer);
        }

    }
}
