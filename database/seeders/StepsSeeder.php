<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StepsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert([
            [
                'recipe_id' => 1,
                'steps_num' => 1,
                'steps_desc' => 'Bring a large pot of lightly salted water to a boil. Cook spaghetti in the boiling water, stirring occasionally until tender yet firm to the bite, about 10 minutes or 1 minute less than directed on the package.'
            ],
            [
                'recipe_id' => 1,
                'steps_num' => 2,
                'steps_desc' => 'Meanwhile, heat oil in a large skillet over high heat. When oil just starts to smoke, add scallops and move them into a single layer. Let sear on high for about 1 minute. Toss to turn.'
            ],
            [
                'recipe_id' => 1,
                'steps_num' => 3,
                'steps_desc' => 'Add butter and stir scallops until butter melts. Stir in garlic.'
            ],
            [
                'recipe_id' => 1,
                'steps_num' => 4,
                'steps_desc' => 'Add lemon zest and red pepper flakes. Stir in sherry and cook and stir until alcohol cooks off, about 1 minute.'
            ],
            [
                'recipe_id' => 1,
                'steps_num' => 5,
                'steps_desc' => 'Pour in cream. When mixture begins to simmer, reduce heat to medium-low. Add salt, pepper, and lemon juice.'
            ],
            [
                'recipe_id' => 1,
                'steps_num' => 6,
                'steps_desc' => 'Drain pasta. Transfer to skillet with scallops; bring to a simmer. Add 1/2 of the chopped parsley. Cook until pasta is heated through and tender, about 1 minute.'
            ],
        ]);
    }
}