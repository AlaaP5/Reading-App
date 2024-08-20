<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            CasesSeeder::class,
            ConditionSeeder::class,
            AuthorSeeder::class,
            CategorySeeder::class,
            TypeSeeder::class,
            BookSeeder::class,
            NoteSeeder::class,
            EvaluationSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            ComplaintSeeder::class
        ]);
    }
}
