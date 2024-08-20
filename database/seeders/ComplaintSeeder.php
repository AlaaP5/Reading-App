<?php

namespace Database\Seeders;

use App\Models\Complaint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplaintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $complaints = [
            [
                'user_id' => 4,
                'body' => 'is this book suitable for children ?'
            ],
            [
                'user_id' => 4,
                'body' => 'where can i buy this book ?'
            ],
            [
                'user_id' => 4,
                'body' => 'is this book recommended?'
            ],
            [
                'user_id' => 4,
                'body' => 'very nice book what about more books of that author ?'
            ]
        ];
            foreach($complaints as $complaint ){
                Complaint::create($complaint);
            }
    }
}
