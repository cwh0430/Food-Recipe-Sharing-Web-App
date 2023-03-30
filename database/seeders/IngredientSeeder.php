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
            ['name' => 'spaghetti'],
            ['name' => 'vegetable oil'],
            ['name' => 'scallops'],
            ['name' => 'butter'],
            ['name' => 'garlic'],
            ['name' => 'lemon zest'],
            ['name' => 'red pepper flakes'],
            ['name' => 'dry sherry'],
            ['name' => 'heavy cream'],
            ['name' => 'salt'],
            ['name' => 'pepper'],
            ['name' => 'lemon'],
            ['name' => 'italian parsley'],
            ['name' => 'parmigiano-reggiano cheese'],

        ]);
    }
}