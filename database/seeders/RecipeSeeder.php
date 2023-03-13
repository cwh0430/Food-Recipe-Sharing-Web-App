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
            [
                'name' => "Chicken Tinola",
                'desc' => "Tinola is an easy, one-pot soup from the Philippines. Chicken, chayote squash (or papaya!), bok choy, and spinach are simmered with fresh ginger in a savory broth that's often served with white rice.",
                'image' => "https://www.allrecipes.com/thmb/46ue8L5rZjSI8STgt-QVzgowdAk=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/212929-chicken-tinola-4x3-1-167b1eadea9a448d8e00dac30c501d66.jpg"
            ],
            [
                'name' => "Italian Sausage, Peppers, and Onions",
                'desc' => "This simple and delicious one-pan sausage and peppers recipe has been used in our family for years and years now. Serve in a roll, or use as a topping for pizza or pasta. For an extra kick, try using 1/2 sweet Italian sausage and 1/2 hot sausage!",
                'image' => "https://www.allrecipes.com/thmb/AXpMe3_aJxi6v2Vv5FfJQKtIfF4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/76808-ItalianSausagePepperAndOnions-mfs-2X3-0041-9fa23470face472a863402ef18ae1176.jpg"
            ],
            [
                'name' => "Indian Chicken Curry",
                'desc' => "This Indian-inspired creamy chicken curry recipe is similar to a curry I had in India. The aromatic spices and flavors are a delight to the senses! Delicious with fresh naan and basmati rice.",
                'image' => "https://www.allrecipes.com/thmb/3R5MWGAATFGvGy22rGNfdowuGxM=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/46822-Indian-Chicken-Curry-103300-4x3-1-971fa9fa8465495cb3e848ba87245bb3.jpg"
            ],
            [
                'name' => "One Pan Orecchiette Pasta",
                'desc' => "This delicious orecchiette pasta recipe only has a handful of ingredients, is very cheap to make, and most importantly, only uses one pan or pot for the entire procedure. Every year when it's time to go back to school I get inundated with requests from students to post recipes that are super-easy, cost pennies, and require a bare minimum of kitchen equipment — this is one of them!",
                'image' => "https://www.allrecipes.com/thmb/8wm0xH4I0swyR-U5LG8bm5Mcsys=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/4541124-eaedf7a106ba4a6dbf04aaa4810f1ba3.jpg"
            ],
            [
                'name' => "Honey-Garlic Chicken Thighs",
                'desc' => "This recipe for honey-garlic chicken thighs is one of my family's favorites. It's garlic-sweet and the cilantro tops it off.",
                'image' => "https://www.allrecipes.com/thmb/umzqubmIKOPKs_Idb23e3T3iM28=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/9041978-ede73b1c25b24c2587aa743802c4d4f9.jpg"
            ],
            [
                'name' => "Easy Homemade Shrimp Fried Rice",
                'desc' => "This is a quick and easy shrimp fried rice recipe that my kids all love! This recipe is best warm and fresh, but will keep airtight in the refrigerator for up to 5 days or in the freezer for up to 4 months. Reheat gently, as desired.",
                'image' => "https://www.allrecipes.com/thmb/SpBVsr5830glWjj-z-QgeNdlNQI=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/7664895-easy-homemade-shrimp-fried-rice-rfj-4x3-1-58aaca8230e84467a4087cb8c5ac0652.jpg"
            ],
            [
                'name' => "Homemade Mac and Cheese",
                'desc' => "This mac and cheese recipe with a buttered bread crumb topping is creamy and comforting. It's easy to make the cheese sauce from scratch on your stovetop, starting with a roux and adding milk, Cheddar, and Parmesan, resulting in a rich, decadent sauce that coats every nook and cranny of the noodles. Serve this comfort-food macaroni and cheese casserole with grilled meats, sloppy Joes, fried chicken or alongside a salad for a meatless dinner.",
                'image' => "https://www.allrecipes.com/thmb/55m3_k4qDl5NZsToQ6eNyOcQBT0=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/11679-homemade-mac-and-cheese-chef-mo-3x2-1-f0f5582e8dd549d18e56b95cece93045.jpg"
            ],
            [
                'name' => "Basic Air Fryer Hot Dogs",
                'desc' => "These air fryer hot dogs in toasted buns turn out perfectly crisp in minutes with the help of your air fryer. Top with ketchup, mustard, relish, chili, or condiments of choice.",
                'image' => "https://www.allrecipes.com/thmb/GtHfTQ8549b7aYBGh5rL5elHNDM=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/268494-basic-air-fryer-hot-dogs-BuckwheatQueen-4x3-84d84c97b9084e75ad49d8d6154494ca.jpg"
            ],
            [
                'name' => "Slow Cooker Beef Stew",
                'desc' => "This easy slow cooker beef stew recipe made with potatoes, carrots, celery, broth, herbs, and spices is hearty and comforting. You won't be slow to say 'yum'!",
                'image' => "https://www.allrecipes.com/thmb/QPQ_1-OXob5DPGA3NTF5_Ct1T8M=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/14685-slow-cooker-beef-stew-mfs-315-e5994bd0cf47400caffbaf273504b72b.jpg"
            ],
            [
                'name' => "World's Best Lasagna",
                'desc' => "This lasagna recipe takes a little work, but it is so satisfying and filling that it's worth it!",
                'image' => "https://www.allrecipes.com/thmb/MkKfYU4oim55CLp39DDuNMuyThA=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/23600-worlds-best-lasagna-armag-4x3-1-b24f9ad518d74090bf197828492c64a6.jpg"
            ],
            [
                'name' => "Corned Beef and Cabbage",
                'desc' => "What's more Irish than a traditional recipe for corned beef and cabbage? Serve with mustard or horseradish if desired.",
                'image' => "https://www.allrecipes.com/thmb/QsRLg0dz4OBy6jVkCCbrpH7LQbI=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/16310-corned-beef-cabbage-mfs-051-0d8fdf850e3546a9be2a72315763aac9.jpg"
            ],
            [
                'name' => "Sloppy Joes",
                'desc' => "These crowd-pleasing Sloppy Joe sandwiches will take you back to your childhood! This is my mom's recipe and it always gets compliments!",
                'image' => "https://www.allrecipes.com/thmb/3k_RHFaM3L163SadypQ1uDjDiN8=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/24264-sloppy-joes-dianne-3x2-1-16a5c18a55b94454b36a5424c9dd0c40.jpg"
            ],
            [
                'name' => "Roasted Pork Loin",
                'desc' => "Succulent pork loin with fragrant garlic, rosemary, and wine.",
                'image' => "https://www.allrecipes.com/thmb/K-pOiuuX1fUXhR4xx6swovJGSYs=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/21766-Roasted-pork-loin-115-c7b7edab20fa41baaf80ac8f1e8d3288.jpg"
            ],
            [
                'name' => "Chicken Parmesan",
                'desc' => "My version of chicken Parmesan is a little different than what they do in the restaurants, with less sauce and a crispier crust.",
                'image' => "https://www.allrecipes.com/thmb/sirh4TOulpyomenihIBWbojMF20=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/223042-Chicken-Parmesan-mfs_001-b5a42a1bd4564f0a880b9030a33e24d3.jpg"
            ],
            [
                'name' => "Seafood Fettuccine",
                'desc' => "Delicious seafood Alfredo recipe with a creamy Parmesan sauce, shrimp, scallops, and fettuccine pasta.",
                'image' => "https://www.allrecipes.com/thmb/n-4yqPxCVjpykc8R_pri2TalJD8=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/1000718-seafood-fettuccine-Eddie-Stroud-4x3-1-461e8bcf296f4c5ebab1647816c82907.jpg"
            ],
        ]);
    }
}