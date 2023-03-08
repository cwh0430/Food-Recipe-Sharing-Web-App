<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            [
                'name' => "Creamy Bay Scallop Spaghetti",
                'desc' => "This scallop pasta dinner with a creamy sauce is fast and easy. I cook the scallops a bit longer than many chefs, but that gives the dish more flavor and they're still tender and moist. I think you'll agree, the sherry sauce benefits significantly from the longer cook time.",
                'image' => "https://www.allrecipes.com/thmb/maqHC-2u-1NwE2L8BbR14zNgy7Q=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/255021-Creamy-Bay-Scallop-Spaghetti-ddmfs-1X1-5115-913f57505bcc4f98ab624d86612bad05.jpg"
            ],
            [
                'name' => "Tuna Fish Salad",
                'desc' => "This tuna fish is excellent served on top of a green salad or between two pieces of bread with fresh lettuce. Sprinkle a little paprika on top to add a little flavor and color.",
                'image' => "https://www.allrecipes.com/thmb/i1bsA8KjhPem3OoJ7cl2b-NPbNM=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/16468-tuna-fish-salad-DDMFS-beauty-4x3-BG-2952-a26f4ca9aaf64d238b7fc0b15ddec402.jpg"
            ],
            [
                'name' => "The Best Thai Coconut Soup",
                'desc' => "This Thai coconut soup is full of authentic, bold, and delicious Thai flavors. This is the best Thai soup recipe out there — you won't be disappointed with this one! Serve over steamed rice.",
                'image' => "https://www.allrecipes.com/thmb/Jct7Wotooma8V52djekcZhFtDQs=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/2319909-the-best-thai-coconut-soup-Aja-1x1-1-d2385a72da884e75a7364d6ecca5680e.jpg"
            ],
            [
                'name' => "Chef John's Chicken Meatballs",
                'desc' => "My take on an A16 Cookbook recipe by Chef Nate. Perfectly tender, moist, and flavorful meatballs that taste just like the real thing or maybe even better!",
                'image' => "https://www.allrecipes.com/thmb/wfvQ9eHBZlSfuSYjaAx4BR34JGM=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/8543040-Chef-Johns-Chicken-Meatballs-1x1-1-2000-53d79cbc2e554b65a151c173ef63305a.jpg"
            ],
            [
                'name' => "Baked Dijon Salmon",
                'desc' => "This mustard-crusted salmon is a wonderful way to prepare fresh salmon fillets in the oven. Be sure to make extra — your family will be begging for more!",
                'image' => "https://www.allrecipes.com/thmb/L5PsWZrL4BC2cf3eUI7Zaf_QhuM=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/21176-baked-dijon-salmon-mfs-1-fd980409247d464a95ac9dcb259ae290.jpg"
            ],
        ]);
    }
}