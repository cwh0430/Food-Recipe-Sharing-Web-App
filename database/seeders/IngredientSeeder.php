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
            [
                'recipe_id' => 1,
                'name' => 'Spaghetti',
                'quantity' => '8',
                'units' => 'ounces',
                'additionalInfo' => 'uncooked thick'
            ],
            [
                'recipe_id' => 1,
                'name' => 'Vegetable Oil',
                'quantity' => '1',
                'units' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Scallops',
                'quantity' => '1',
                'units' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Butter',
                'quantity' => '2',
                'units' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Garlic',
                'quantity' => '3',
                'units' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 1,
                'name' => 'Lemon Zest',
                'quantity' => '2',
                'units' => 'teaspoons',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 1,
                'name' => 'Red Pepper Flakes',
                'quantity' => '1',
                'units' => 'pinch',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Dry Sherry',
                'quantity' => '1/3',
                'units' => 'pinch',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Heavy Cream',
                'quantity' => '1',
                'units' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Salt',
                'quantity' => 'for serving',
                'units' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Pepper',
                'quantity' => 'for serving',
                'units' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Lemon',
                'quantity' => '1',
                'units' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 1,
                'name' => 'Italian Parsley',
                'quantity' => '2',
                'units' => 'tablespoons',
                'additionalInfo' => 'chipped, divided'
            ],
            [
                'recipe_id' => 1,
                'name' => 'Parmigiano-Reggiano Cheese',
                'quantity' => 'for serving',
                'units' => '-',
                'additionalInfo' => 'freshly grated'
            ],

        ]);
    }
}