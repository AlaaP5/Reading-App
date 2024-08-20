<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Evaluation;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ratings = [
            
                'user_id' => 2,
                'book_id' =>2,
                'rating' => 4.0,
                'body' => 'very nice book i recommend it for reading in your free times but the plot is twisted'

        ];

        Evaluation::create($ratings);
    }
}
