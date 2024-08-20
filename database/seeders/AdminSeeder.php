<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => "Alaa",
                'email' => 'alaa@gmail.com',
                'birthDay' => '2002-01-30',
                'role_id' => 1,
                'password' => Hash::make('3012002'),
                'StatusCode' => true,
                'image' => 'users/me.jpg'
            ],
            [
                'name' => "Ahmad",
                'email' => 'ahmad@gmail.com',
                'birthDay' => '2003-11-10',
                'role_id' => 1,
                'password' => Hash::make('10112003'),
                'StatusCode' => true,
                'image' => 'users/me.jpg'
            ],
            [
                'name' => "omar",
                'email' => 'omar@gmail.com',
                'birthDay' => '2003-05-09',
                'role_id' => 1,
                'password' => Hash::make('11111111'),
                'StatusCode' => true,
                'image' => 'users/gg.jpg'
            ],
            [
                'name' => "Ali",
                'email' => 'ali@gmail.com',
                'birthDay' => '2001-05-09',
                'role_id' => 2,
                'password' => Hash::make('11111111'),
                'StatusCode' => true,
                'image' => 'users/gg.jpg'
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
