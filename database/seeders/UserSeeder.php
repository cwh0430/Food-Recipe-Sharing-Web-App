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
                'password' => '$2y$10$P8DSRIQce52ck1Ql8vvSMemWXw.9nEmgyyL/cXmqTRSuzF2PRZDSi',

            ],
            [
                'name' => "cwh0430",
                'email' => "cwh0430@1utar.my",
                'isAdmin' => 0,
                'password' => '$2y$10$P8DSRIQce52ck1Ql8vvSMemWXw.9nEmgyyL/cXmqTRSuzF2PRZDSi',

            ],

        ]);
    }
}