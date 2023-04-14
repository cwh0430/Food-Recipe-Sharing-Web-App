<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "WHuey",
                'email' => "abc@def.com",
                'isAdmin' => 1,
                'password' => '$2y$10$owu8QkmeukvFGH9c7PoEaOHlsbZO9xCvnt27Uo.N8y48HtOE5ME2q',

            ],
            [
                'name' => "cwh0430",
                'email' => "cwh0430@1utar.my",
                'isAdmin' => 0,
                'password' => '$2y$10$P8DSRIQce52ck1Ql8vvSMemWXw.9nEmgyyL/cXmqTRSuzF2PRZDSi',

            ],
            [
                'name' => "hon",
                'email' => "hon@gmail.com",
                'isAdmin' => 1,
                'password' => '$2y$10$wJuY9wBBHxEaXYAxEzV9t./QTTQzod140dTPtdoBsGYa5N8DAOGwS',

            ],
            [
                'name' => "kenny",
                'email' => "kenny@gmail.com",
                'isAdmin' => 0,
                'password' => '$2y$10$ppHrpGJyTe/kA0RbH.tjMOYg7ynJf7t0r4xRBNcUdSaoBW2C5K2DG',

            ],
            [
                'name' => "test",
                'email' => "test@gmail.com",
                'isAdmin' => 1,
                'password' => '$2y$10$k24RzSeWYz3cJerNjZJDUOLH5IIem75HgV4soTxAITXe0YULvFejC',

            ],

        ]);
    }
}