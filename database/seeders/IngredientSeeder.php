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
        DB::table('ingredients')->insert([
            ['name' => 'Spaghetti'],
            ['name' => 'Vegetable Oil'],
            ['name' => 'Scallops'],
            ['name' => 'Butter'],
            ['name' => 'Garlic'],
            ['name' => 'Lemon Zest'],
            ['name' => 'Red Pepper Flakes'],
            ['name' => 'Dry Sherry'],
            ['name' => 'Heavy Cream'],
            ['name' => 'Salt'],
            ['name' => 'Pepper'],
            ['name' => 'Lemon'],
            ['name' => 'Italian Parsley'],
            ['name' => 'Parmigiano-Reggiano Cheese'],
        ]);
    }
}