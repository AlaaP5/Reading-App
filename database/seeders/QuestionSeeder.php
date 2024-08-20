<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'user_id' => 4,
                'book_id' =>2,
                'body' => 'is this book suitable for children ?'
            ],
            [
                'user_id' => 4,
                'book_id' =>2,
                'body' => 'where can i buy this book ?'
            ],
            [
                'user_id' => 4,
                'book_id' =>3,
                'body' => 'is this book recommended?'
            ],
            [
                'user_id' => 4,
                'book_id' =>3,
                'body' => 'very nice book what about more books of that author ?'
            ]
        ];
            foreach($questions as $question ){
                Question::create($question);
            }
    }
}
