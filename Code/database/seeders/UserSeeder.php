<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                "name" => "Rea",
                "email" => "read@example.com",
                "password" => "reaxamplecom",
            ],
            [
                "name" => "Da",
                "email" => "da@example.com",
                "password" => "daamplecom",
            ],
            [
                "name" => "K'Da",
                "email" => "K'da@example.com",
                "password" => "daasdfghfmplecom",
            ],

        ];
        foreach ($users as $user) {
            User::create($user);
        };
    }
}
