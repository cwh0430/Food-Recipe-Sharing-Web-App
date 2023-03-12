<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient')->insert([
            ['name' => 'Spaghetti'],
            ['name' => 'Vegetable Oil'],
            ['name' => 'Scallops'],
            ['name' => 'Butter'],
            ['name' => 'Garlic'],
            ['name' => 'Grated Lemon Zest'],


        ]);
    }
}