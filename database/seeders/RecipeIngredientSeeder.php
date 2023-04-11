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
            [
                'recipe_id' => 2,
                'ingredient_id' => 15,
                'quantity' => '5',
                'unit' => 'ounces',
                'additionalInfo' => 'drained'
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 16,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 17,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 18,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 19,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 20,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 21,
                'quantity' => '1/4',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 10,
                'quantity' => '1/8',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 22,
                'quantity' => '1/8',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 2,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 2,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 24,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 25,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 26,
                'quantity' => '1',
                'unit' => 'stalk',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 27,
                'quantity' => '4',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 28,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 29,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 30,
                'quantity' => '13.5',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 31,
                'quantity' => '1/2',
                'unit' => 'pound',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 32,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'peeled and deveined'
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 33,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 3,
                'ingredient_id' => 34,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 35,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'boneless, skinless , cut into 1-inch pieces'
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 36,
                'quantity' => '3',
                'unit' => 'ounces',
                'additionalInfo' => 'diced'
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 37,
                'quantity' => '3',
                'unit' => 'ounces',
                'additionalInfo' => 'crumbled'
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 38,
                'quantity' => '1/3',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 39,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => 'beaten'
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 40,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 5,
                'quantity' => '3',
                'unit' => 'cloves',
                'additionalInfo' => 'finely minced'
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 41,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 42,
                'quantity' => '1 1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 43,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 44,
                'quantity' => '1/4',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 45,
                'quantity' => '1/4',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 4,
                'ingredient_id' => 46,
                'quantity' => '4',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 4,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'melted'
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 47,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 48,
                'quantity' => '1 1/2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 49,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 50,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'finely chopped'
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 51,
                'quantity' => '4',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 52,
                'quantity' => '4',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 11,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 5,
                'ingredient_id' => 12,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => 'for garnish'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 60,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 18,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 24,
                'quantity' => '1 1/2',
                'unit' => 'inches',
                'additionalInfo' => 'peeled and thinly sliced'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 28,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 61,
                'quantity' => '3',
                'unit' => 'pounds',
                'additionalInfo' => 'rinsed and patted dry'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 27,
                'quantity' => '28',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 62,
                'quantity' => '1',
                'unit' => 'chayote',
                'additionalInfo' => 'peeled and cut into bite-sized pieces'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 63,
                'quantity' => '1',
                'unit' => 'head',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 6,
                'ingredient_id' => 64,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 65,
                'quantity' => '6',
                'unit' => 'links',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 4,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 66,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 67,
                'quantity' => '1/2',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 5,
                'quantity' => '4',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 68,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 69,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 70,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 71,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 7,
                'ingredient_id' => 40,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 53,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 18,
                'quantity' => '1',
                'unit' => 'small',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 72,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 73,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 74,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 75,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 76,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 77,
                'quantity' => '2',
                'unit' => '-',
                'additionalInfo' => 'skinless, boneless, cut into bite-size pieces'
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 78,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 79,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 30,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 20,
                'quantity' => '1/2',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 8,
                'ingredient_id' => 80,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 53,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'onion',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 81,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => 'casings removed'
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 82,
                'quantity' => '3 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'divided, or as needed'
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 83,
                'quantity' => '1 1/4',
                'unit' => 'cups',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 84,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ' roughly chopped or to taste'
            ],
            [
                'recipe_id' => 9,
                'ingredient_id' => 14,
                'quantity' => '1/3',
                'unit' => 'pinch',
                'additionalInfo' => 'finely grated or to taste'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 35,
                'quantity' => '8',
                'unit' => '',
                'additionalInfo' => 'boneless'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 53,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => 'or as needed'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'medium',
                'additionalInfo' => 'finely chopped'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 5,
                'quantity' => '7',
                'unit' => 'cloves',
                'additionalInfo' => 'chopped, or to taste'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 48,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 85,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 86,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => ' or to taste'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 21,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => ' or to taste'
            ],
            [
                'recipe_id' => 10,
                'ingredient_id' => 34,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 52,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 53,
                'quantity' => '1',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 54,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'peeled and deveined'
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 55,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 56,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'finely minced, or more to taste'
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 39,
                'quantity' => '3',
                'unit' => 'large',
                'additionalInfo' => 'lightly beaten'
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 57,
                'quantity' => '4',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 58,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => 'thinly sliced '
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 59,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 10,
                'quantity' => '1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 11,
                'ingredient_id' => 43,
                'quantity' => '1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 87,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 88,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 89,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 90,
                'quantity' => '2 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'or more as needed'
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 91,
                'quantity' => '2',
                'unit' => 'cups',
                'additionalInfo' => 'shredded sharp'
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 92,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'finely grated'
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 88,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 49,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 12,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => 'grounded'
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 93,
                'quantity' => '4',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 13,
                'ingredient_id' => 94,
                'quantity' => '4',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 95,
                'quantity' => '2',
                'unit' => 'pounds',
                'additionalInfo' => 'cut into 1-inch pieces'
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 89,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 10,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 22,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 96,
                'quantity' => '1 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 97,
                'quantity' => '4',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 98,
                'quantity' => '3',
                'unit' => 'medium',
                'additionalInfo' => 'diced'
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 18,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 17,
                'quantity' => '1',
                'unit' => 'stalk',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 99,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'grounded'
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 5,
                'quantity' => '1',
                'unit' => 'clove',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 14,
                'ingredient_id' => 74,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 65,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 100,
                'quantity' => '3/4',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'crushed'
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 101,
                'quantity' => '28',
                'unit' => 'ounces',
                'additionalInfo' => 'canned'
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 46,
                'quantity' => '6.5',
                'unit' => 'teaspoons',
                'additionalInfo' => 'canned'
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 78,
                'quantity' => '6',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 102,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 76,
                'quantity' => '2',
                'unit' => 'tablspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 41,
                'quantity' => '4',
                'unit' => 'tablspoons',
                'additionalInfo' => 'chopped, divided'
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 103,
                'quantity' => '1 1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 10,
                'quantity' => '1 1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'divided, or to taste'
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 104,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 45,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 22,
                'quantity' => '1/4',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 105,
                'quantity' => '12',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 106,
                'quantity' => '16',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 39,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 107,
                'quantity' => '3/4',
                'unit' => 'pound',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 15,
                'ingredient_id' => 92,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 16,
                'ingredient_id' => 108,
                'quantity' => '3',
                'unit' => 'pounds',
                'additionalInfo' => 'corned'
            ],
            [
                'recipe_id' => 16,
                'ingredient_id' => 109,
                'quantity' => '10',
                'unit' => 'small',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 16,
                'ingredient_id' => 97,
                'quantity' => '5',
                'unit' => 'medium',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 16,
                'ingredient_id' => 110,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 100,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 18,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 69,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 111,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 29,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 112,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 21,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 17,
                'ingredient_id' => 113,
                'quantity' => '6',
                'unit' => '-',
                'additionalInfo' => 'split'
            ],
            [
                'recipe_id' => 18,
                'ingredient_id' => 5,
                'quantity' => '3',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 18,
                'ingredient_id' => 114,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 18,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 18,
                'ingredient_id' => 11,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 18,
                'ingredient_id' => 115,
                'quantity' => '2',
                'unit' => 'pounds',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 18,
                'ingredient_id' => 53,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 18,
                'ingredient_id' => 40,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 77,
                'quantity' => '4',
                'unit' => '-',
                'additionalInfo' => 'skinless, boneless'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 43,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 39,
                'quantity' => '2',
                'unit' => 'large',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 116,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => 'or more as needed'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 92,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => 'divided'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 89,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => 'or more if needed'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 53,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'or as needed'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 46,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 117,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'cut into small cubes'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 118,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 119,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 19,
                'ingredient_id' => 53,
                'quantity' => '2',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 120,
                'quantity' => '16',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 4,
                'quantity' => '1 1/2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 58,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 5,
                'quantity' => '4',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 32,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'peeled and deveined'
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 121,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 122,
                'quantity' => '2',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 11,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 92,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => 'freshly grated'
            ],
            [
                'recipe_id' => 20,
                'ingredient_id' => 123,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 1,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => 'uncooked thick'
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 2,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 3,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 4,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 5,
                'quantity' => '3',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 6,
                'quantity' => '2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 7,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 8,
                'quantity' => '1/3',
                'unit' => 'pinch',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 9,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 10,
                'quantity' => 'for serving',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 11,
                'quantity' => 'for serving',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 12,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 13,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => 'chipped, divided'
            ],
            [
                'recipe_id' => 21,
                'ingredient_id' => 14,
                'quantity' => 'for serving',
                'unit' => '-',
                'additionalInfo' => 'freshly grated'
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 15,
                'quantity' => '5',
                'unit' => 'ounces',
                'additionalInfo' => 'drained'
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 16,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 17,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 18,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 19,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 20,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 21,
                'quantity' => '1/4',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 10,
                'quantity' => '1/8',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 22,
                'quantity' => '1/8',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 22,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 2,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 24,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 25,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 26,
                'quantity' => '1',
                'unit' => 'stalk',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 27,
                'quantity' => '4',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 28,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 29,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 30,
                'quantity' => '13.5',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 31,
                'quantity' => '1/2',
                'unit' => 'pound',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 32,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'peeled and deveined'
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 33,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 23,
                'ingredient_id' => 34,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 35,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'boneless, skinless , cut into 1-inch pieces'
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 36,
                'quantity' => '3',
                'unit' => 'ounces',
                'additionalInfo' => 'diced'
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 37,
                'quantity' => '3',
                'unit' => 'ounces',
                'additionalInfo' => 'crumbled'
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 38,
                'quantity' => '1/3',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 39,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => 'beaten'
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 40,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 5,
                'quantity' => '3',
                'unit' => 'cloves',
                'additionalInfo' => 'finely minced'
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 41,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 42,
                'quantity' => '1 1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 43,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 44,
                'quantity' => '1/4',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 45,
                'quantity' => '1/4',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 24,
                'ingredient_id' => 46,
                'quantity' => '4',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 4,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'melted'
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 47,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 48,
                'quantity' => '1 1/2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 49,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 50,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'finely chopped'
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 51,
                'quantity' => '4',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 52,
                'quantity' => '4',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 11,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 25,
                'ingredient_id' => 12,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => 'for garnish'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 60,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 18,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 24,
                'quantity' => '1 1/2',
                'unit' => 'inches',
                'additionalInfo' => 'peeled and thinly sliced'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 28,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 61,
                'quantity' => '3',
                'unit' => 'pounds',
                'additionalInfo' => 'rinsed and patted dry'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 27,
                'quantity' => '28',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 62,
                'quantity' => '1',
                'unit' => 'chayote',
                'additionalInfo' => 'peeled and cut into bite-sized pieces'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 63,
                'quantity' => '1',
                'unit' => 'head',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 26,
                'ingredient_id' => 64,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 65,
                'quantity' => '6',
                'unit' => 'links',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 4,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 66,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 67,
                'quantity' => '1/2',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 5,
                'quantity' => '4',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 68,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 69,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 70,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 71,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 27,
                'ingredient_id' => 40,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 124,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 89,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 10,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 125,
                'quantity' => '1 1/2',
                'unit' => 'pounds',
                'additionalInfo' => 'cubed'
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 2,
                'quantity' => '1',
                'unit' => 'quart',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 126,
                'quantity' => '20',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 110,
                'quantity' => '5',
                'unit' => 'cups',
                'additionalInfo' => 'shredded'
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 75,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 127,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 28,
                'ingredient_id' => 10,
                'quantity' => '1',
                'unit' => 'lime',
                'additionalInfo' => 'cut into wedges'
            ],
            [
                'recipe_id' => 29,
                'ingredient_id' => 53,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 29,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'onion',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 29,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 29,
                'ingredient_id' => 81,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => 'casings removed'
            ],
            [
                'recipe_id' => 29,
                'ingredient_id' => 82,
                'quantity' => '3 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'divided, or as needed'
            ],
            [
                'recipe_id' => 29,
                'ingredient_id' => 83,
                'quantity' => '1 1/4',
                'unit' => 'cups',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 29,
                'ingredient_id' => 84,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ' roughly chopped or to taste'
            ],
            [
                'recipe_id' => 29,
                'ingredient_id' => 14,
                'quantity' => '1/3',
                'unit' => 'pinch',
                'additionalInfo' => 'finely grated or to taste'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 35,
                'quantity' => '8',
                'unit' => '',
                'additionalInfo' => 'boneless'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 53,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => 'or as needed'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'medium',
                'additionalInfo' => 'finely chopped'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 5,
                'quantity' => '7',
                'unit' => 'cloves',
                'additionalInfo' => 'chopped, or to taste'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 48,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 85,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 86,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => ' or to taste'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 21,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => ' or to taste'
            ],
            [
                'recipe_id' => 30,
                'ingredient_id' => 34,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 52,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 53,
                'quantity' => '1',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 54,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'peeled and deveined'
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 55,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 56,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'finely minced, or more to taste'
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 39,
                'quantity' => '3',
                'unit' => 'large',
                'additionalInfo' => 'lightly beaten'
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 57,
                'quantity' => '4',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 58,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => 'thinly sliced '
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 59,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 10,
                'quantity' => '1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 31,
                'ingredient_id' => 43,
                'quantity' => '1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 87,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 88,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 89,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 90,
                'quantity' => '2 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'or more as needed'
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 91,
                'quantity' => '2',
                'unit' => 'cups',
                'additionalInfo' => 'shredded sharp'
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 92,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'finely grated'
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 88,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 49,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 32,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => 'grounded'
            ],
            [
                'recipe_id' => 33,
                'ingredient_id' => 93,
                'quantity' => '4',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 33,
                'ingredient_id' => 94,
                'quantity' => '4',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 95,
                'quantity' => '2',
                'unit' => 'pounds',
                'additionalInfo' => 'cut into 1-inch pieces'
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 89,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 10,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 22,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 96,
                'quantity' => '1 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 97,
                'quantity' => '4',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 98,
                'quantity' => '3',
                'unit' => 'medium',
                'additionalInfo' => 'diced'
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 18,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 17,
                'quantity' => '1',
                'unit' => 'stalk',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 99,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'grounded'
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 5,
                'quantity' => '1',
                'unit' => 'clove',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 34,
                'ingredient_id' => 74,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 65,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 100,
                'quantity' => '3/4',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'crushed'
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 101,
                'quantity' => '28',
                'unit' => 'ounces',
                'additionalInfo' => 'canned'
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 46,
                'quantity' => '6.5',
                'unit' => 'teaspoons',
                'additionalInfo' => 'canned'
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 78,
                'quantity' => '6',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 102,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 76,
                'quantity' => '2',
                'unit' => 'tablspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 41,
                'quantity' => '4',
                'unit' => 'tablspoons',
                'additionalInfo' => 'chopped, divided'
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 103,
                'quantity' => '1 1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 10,
                'quantity' => '1 1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'divided, or to taste'
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 104,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 45,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 22,
                'quantity' => '1/4',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 105,
                'quantity' => '12',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 106,
                'quantity' => '16',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 39,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 107,
                'quantity' => '3/4',
                'unit' => 'pound',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 35,
                'ingredient_id' => 92,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 36,
                'ingredient_id' => 108,
                'quantity' => '3',
                'unit' => 'pounds',
                'additionalInfo' => 'corned'
            ],
            [
                'recipe_id' => 36,
                'ingredient_id' => 109,
                'quantity' => '10',
                'unit' => 'small',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 36,
                'ingredient_id' => 97,
                'quantity' => '5',
                'unit' => 'medium',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 36,
                'ingredient_id' => 110,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 100,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 18,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 69,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 111,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 29,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 112,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 21,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 37,
                'ingredient_id' => 113,
                'quantity' => '6',
                'unit' => '-',
                'additionalInfo' => 'split'
            ],
            [
                'recipe_id' => 38,
                'ingredient_id' => 5,
                'quantity' => '3',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 38,
                'ingredient_id' => 114,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 38,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 38,
                'ingredient_id' => 11,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 38,
                'ingredient_id' => 115,
                'quantity' => '2',
                'unit' => 'pounds',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 38,
                'ingredient_id' => 53,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 38,
                'ingredient_id' => 40,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 77,
                'quantity' => '4',
                'unit' => '-',
                'additionalInfo' => 'skinless, boneless'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 43,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 39,
                'quantity' => '2',
                'unit' => 'large',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 116,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => 'or more as needed'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 92,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => 'divided'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 89,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => 'or more if needed'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 53,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'or as needed'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 46,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 117,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'cut into small cubes'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 118,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 119,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 39,
                'ingredient_id' => 53,
                'quantity' => '2',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 120,
                'quantity' => '16',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 4,
                'quantity' => '1 1/2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 58,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 5,
                'quantity' => '4',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 32,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'peeled and deveined'
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 121,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 122,
                'quantity' => '2',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 11,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 92,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => 'freshly grated'
            ],
            [
                'recipe_id' => 40,
                'ingredient_id' => 123,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 60,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 18,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 24,
                'quantity' => '1 1/2',
                'unit' => 'inches',
                'additionalInfo' => 'peeled and thinly sliced'
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 28,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 61,
                'quantity' => '3',
                'unit' => 'pounds',
                'additionalInfo' => 'rinsed and patted dry'
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 27,
                'quantity' => '28',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 62,
                'quantity' => '1',
                'unit' => 'chayote',
                'additionalInfo' => 'peeled and cut into bite-sized pieces'
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 63,
                'quantity' => '1',
                'unit' => 'head',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 41,
                'ingredient_id' => 64,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 65,
                'quantity' => '6',
                'unit' => 'links',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 4,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 66,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 67,
                'quantity' => '1/2',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 5,
                'quantity' => '4',
                'unit' => 'cloves',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 68,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 69,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 70,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 71,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 42,
                'ingredient_id' => 40,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 53,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 18,
                'quantity' => '1',
                'unit' => 'small',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 72,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 73,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 74,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 75,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => 'grated'
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 76,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 77,
                'quantity' => '2',
                'unit' => '-',
                'additionalInfo' => 'skinless, boneless, cut into bite-size pieces'
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 78,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 79,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 30,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 20,
                'quantity' => '1/2',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 43,
                'ingredient_id' => 80,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 44,
                'ingredient_id' => 53,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 44,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'onion',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 44,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 44,
                'ingredient_id' => 81,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => 'casings removed'
            ],
            [
                'recipe_id' => 44,
                'ingredient_id' => 82,
                'quantity' => '3 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'divided, or as needed'
            ],
            [
                'recipe_id' => 44,
                'ingredient_id' => 83,
                'quantity' => '1 1/4',
                'unit' => 'cups',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 44,
                'ingredient_id' => 84,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ' roughly chopped or to taste'
            ],
            [
                'recipe_id' => 44,
                'ingredient_id' => 14,
                'quantity' => '1/3',
                'unit' => 'pinch',
                'additionalInfo' => 'finely grated or to taste'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 35,
                'quantity' => '8',
                'unit' => '',
                'additionalInfo' => 'boneless'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 53,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => 'or as needed'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'medium',
                'additionalInfo' => 'finely chopped'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 5,
                'quantity' => '7',
                'unit' => 'cloves',
                'additionalInfo' => 'chopped, or to taste'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 48,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 85,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 86,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => ' or to taste'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 21,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => ' or to taste'
            ],
            [
                'recipe_id' => 45,
                'ingredient_id' => 34,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 52,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 53,
                'quantity' => '1',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 54,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => 'peeled and deveined'
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 55,
                'quantity' => '1',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 56,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'finely minced, or more to taste'
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 39,
                'quantity' => '3',
                'unit' => 'large',
                'additionalInfo' => 'lightly beaten'
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 57,
                'quantity' => '4',
                'unit' => 'cups',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 58,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => 'thinly sliced '
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 59,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 10,
                'quantity' => '1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'or more to taste'
            ],
            [
                'recipe_id' => 46,
                'ingredient_id' => 43,
                'quantity' => '1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'or to taste'
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 87,
                'quantity' => '8',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 88,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 89,
                'quantity' => '3',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 90,
                'quantity' => '2 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'or more as needed'
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 91,
                'quantity' => '2',
                'unit' => 'cups',
                'additionalInfo' => 'shredded sharp'
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 92,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'finely grated'
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 88,
                'quantity' => '2',
                'unit' => 'tablespoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 49,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 47,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'pinch',
                'additionalInfo' => 'grounded'
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 53,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => 'or as desired'
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 77,
                'quantity' => '6',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 10,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 22,
                'quantity' => '-',
                'unit' => '-',
                'additionalInfo' => 'to taste'
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 89,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'tablespoon',
                'additionalInfo' => 'grounded'
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 39,
                'quantity' => '2',
                'unit' => 'large',
                'additionalInfo' => 'beaten'
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 49,
                'quantity' => '2',
                'unit' => 'cups',
                'additionalInfo' => 'seasoned'
            ],
            [
                'recipe_id' => 48,
                'ingredient_id' => 12,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => 'zested'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 95,
                'quantity' => '2',
                'unit' => 'pounds',
                'additionalInfo' => 'cut into 1-inch pieces'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 89,
                'quantity' => '1/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 10,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 22,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 96,
                'quantity' => '1 1/2',
                'unit' => 'cups',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 97,
                'quantity' => '4',
                'unit' => 'medium',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 98,
                'quantity' => '3',
                'unit' => 'medium',
                'additionalInfo' => 'diced'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 18,
                'quantity' => '1',
                'unit' => 'medium',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 17,
                'quantity' => '1',
                'unit' => 'stalk',
                'additionalInfo' => 'chopped'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 99,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 23,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => 'grounded'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 5,
                'quantity' => '1',
                'unit' => 'clove',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 49,
                'ingredient_id' => 74,
                'quantity' => '1',
                'unit' => 'large',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 65,
                'quantity' => '1',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 100,
                'quantity' => '3/4',
                'unit' => 'pound',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 18,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => 'minced'
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 5,
                'quantity' => '2',
                'unit' => 'cloves',
                'additionalInfo' => 'crushed'
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 101,
                'quantity' => '28',
                'unit' => 'ounces',
                'additionalInfo' => 'canned'
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 46,
                'quantity' => '6.5',
                'unit' => 'teaspoons',
                'additionalInfo' => 'canned'
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 78,
                'quantity' => '6',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 102,
                'quantity' => '1/2',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 76,
                'quantity' => '2',
                'unit' => 'tablspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 41,
                'quantity' => '4',
                'unit' => 'tablspoons',
                'additionalInfo' => 'chopped, divided'
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 103,
                'quantity' => '1 1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 10,
                'quantity' => '1 1/2',
                'unit' => 'teaspoons',
                'additionalInfo' => 'divided, or to taste'
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 104,
                'quantity' => '1',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 45,
                'quantity' => '1/2',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 22,
                'quantity' => '1/4',
                'unit' => 'teaspoon',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 105,
                'quantity' => '12',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 106,
                'quantity' => '16',
                'unit' => 'ounces',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 39,
                'quantity' => '1',
                'unit' => '-',
                'additionalInfo' => ''
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 107,
                'quantity' => '3/4',
                'unit' => 'pound',
                'additionalInfo' => 'sliced'
            ],
            [
                'recipe_id' => 50,
                'ingredient_id' => 92,
                'quantity' => '3/4',
                'unit' => 'cup',
                'additionalInfo' => ''
            ],
        ]);
    }
}