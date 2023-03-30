<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_ingredients')->insert([
            [
                'recipe_id' => 1,
                'ingredient_id' => 1,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => 'uncooked thick'
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 2,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 3,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 4,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 5,
                'quantity' => '3',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 6,
                'quantity' => '2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 7,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 8,
                'quantity' => '1/3',
                'unit' => 'pinch',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 9,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 10,
                'quantity' => 'for serving',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 11,
                'quantity' => 'for serving',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 12,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 13,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => 'chipped, divided'
            ],
            [
                'recipe_id' => 1,
                'ingredient_id' => 14,
                'quantity' => 'for serving',
                'unit' => '-',
                'additionalInfo' => 'freshly grated'
            ],

        ]);
    }
}