<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $categories = [
            [
                'name' => 'Novels',
                'image' => 'categories/novels.png'
            ],

            [
                'name' => 'Religion',
                'image' => 'categories/religion.png'

            ],
            [
                'name' => 'Scientific',
                'image' => 'categories/scientific.png'

            ],
            [
                'name' => 'Art',
                'image' => 'categories/art.png'

            ]

            ];
            foreach($categories as $category){
                Category::create($category);
            };
    }
}
