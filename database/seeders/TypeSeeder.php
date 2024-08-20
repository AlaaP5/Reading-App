<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'fantasy',
                'category_id' => '1',
                'image' => 'types/fantasy.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Horror',
                'category_id' => '1',
                'image' => 'types/horror.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Romance',
                'category_id' => '1',
                'image' => 'types/romance.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Islamic',
                'category_id' => '2',
                'image' => 'types/islamic.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Christianity',
                'category_id' => '2',
                'image' => 'types/christianity.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Jews',
                'category_id' => '2',
                'image' => 'types/jews.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Math',
                'category_id' => '3',
                'image' => 'types/math.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Chemistry',
                'category_id' => '3',
                'image' => 'types/chemistry.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Plant',
                'category_id' => '3',
                'image' => 'types/plant.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Cinema',
                'category_id' => '4',
                'image' => 'types/cinema.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Acting',
                'category_id' => '4',
                'image' => 'types/acting.png',
                'bonus' => 1.0
            ],
            [
                'name' => 'Painting',
                'category_id' => '4',
                'image' => 'types/painting.png',
                'bonus' => 1.0
            ],

        ];
        foreach ($types as $type) {
            Type::create($type);
        };
    }
}
