<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{

    public function run(): void
    {
        $notes = [
            [
                'book_id' => 1,
                'user_id' => 2,
                'page' => 5,
                'body' => 'very interesting point that is so useful i need to marck this',
            ],
            [
                'book_id' => 1,
                'user_id' => 2,
                'page' => 7,
                'body' => 'very interesting point that is so useful i need to marck this',
            ],
            [
                'book_id' => 2,
                'user_id' => 2,
                'page' => 5,
                'body' => 'very interesting point that is so useful i need to marck this',
            ],
            [
                'book_id' => 2,
                'user_id' => 2,
                'page' => 7,
                'body' => 'very interesting point that is so useful i need to marck this',
            ],
        ];

        foreach($notes as $note){
            Note::create($note);
        }
    }
}
