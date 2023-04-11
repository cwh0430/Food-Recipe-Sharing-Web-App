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
            [
                'name' => "Juicy Roasted Chicken",
                'desc' => "This roasted chicken recipe is the way my grandmother used to make it. This method results in the juiciest chicken! We loved to nibble on the celery after it was cooked.",
                'image' => "https://www.allrecipes.com/thmb/ZNARl52mibyF1XHwwIb5A1czmkY=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/83557-juicy-roast-chicken-mfs495-1-3d0f1e3e54104d43b24d4b480d2839ba.jpg"
            ],
            [
                'name' => "Slow Cooker Texas Pulled Pork",
                'desc' => "This Texas-style pulled pork recipe has a tangy barbeque sauce that's easy to make in the slow cooker. I like to serve the shredded pork on toasted buttered rolls. My family's favorite!",
                'image' => "https://www.allrecipes.com/thmb/O7mGZDBSo5uQTeCRNOYOdWxxB7c=/282x188/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/92462_Slow-Cooker-Texas-Pulled-Pork_psychedilemma_4560053_original-1x1-1-e3c3aa5d5a10431b8b5cb589174c0060.jpg"
            ],
            [
                'name' => "Mom's Fabulous Chicken Pot Pie with Biscuit Crust",
                'desc' => "This chicken pot pie with biscuits is easy to make with leftover chicken or rotisserie chicken from the supermarket for a cozy, comforting dinner. It's full of fresh vegetables for added flavor but you can use frozen vegetables for even quicker prep.",
                'image' => "https://www.allrecipes.com/thmb/TNcxINTRtx1TihK07snP75RCYlY=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/216758_MomsFabulousChickenPotPiewithBiscuitCrustRecipe_mfs_12760-7e1c79a8db8e4cf3bd761d341df23553.jpg"
            ],
            [
                'name' => "Easy Meatloaf",
                'desc' => "This meatloaf recipe doesn't take long to make at all, and it's very good!",
                'image' => "https://www.allrecipes.com/thmb/9-R0x6fa6CAWu7fxXVhCWuAbVqs=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/16354-easy-meatloaf-mfs-74-3d9368335f824e31ab2564932cc26fa3.jpg"
            ],
            [
                'name' => "Slow-Cooker Corned Beef and Cabbage",
                'desc' => "Cook this corned beef in a crock pot all day, and you're guaranteed success — no more dry corned beef! Serve with soda bread for a warm and satisfying meal.",
                'image' => "https://www.allrecipes.com/thmb/E8XCGciJUttm5eefyZMi6FT9KSw=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/2152835-422dbdf413094ce19c4bbe862a7f2414.jpg"
            ],
            [
                'name' => "Korean Ground Beef Bowl",
                'desc' => "This Korean beef bowl is quick and easy to make. The ingredients can easily be adjusted to suit your taste. Serve over warm rice or spiralized vegetables.",
                'image' => "https://www.allrecipes.com/thmb/4PIcvZvGnfgoJvVoQW7lXoLWbG8=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/5759837-b2371603be79499c9e1cfa7eeefc7b25.jpg"
            ],
            [
                'name' => "Honey Glazed Chicken",
                'desc' => "This honey chicken recipe was given to me by a friend. I've used this recipe for years, and my family requests it often. It's a light meal that everyone will enjoy. Serve with steamed rice.",
                'image' => "https://www.allrecipes.com/thmb/AhQLcq-BHeoRO4EGdnw941Z_w0A=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/231939_Honey-Glazed-Chicken_Adam-Vaccarezza_4564886_original-4x3-1-acb1de801b6541b69e06bf7b731c1b60.jpg"
            ],
            [
                'name' => "Wonderful Fried Fish Tacos",
                'desc' => "Fish tacos are a taste of pure textural wizardry -- the tender bite of fish, the crispy crunch of cabbage, and the kick of creamy white sauce will put a spell on you. One bite and you're hooked. Lucky for you, we've got a world of fish taco recipes to explore! Grilled fish tacos, baked fish tacos, blackened fish tacos, and fried fish tacos. We have salmon tacos, halibut tacos, shrimp tacos, cod tacos, and tilapia tacos. These top-rated tacos are just some of our very favorite fish taco recipes. Enjoy them on warm corn tortillas topped with all the fixings. And don't forget the fresh limes!",
                'image' => "https://www.allrecipes.com/thmb/-uonZRoBLJIJEVkQbJi1aBRLXK4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/1456535_Wonderful-Fried-Fish-Tacos_12759_Photo-by-bd.weld_-2000-0926338570bb4bd29c46ec58faba54e7.jpg"
            ],
            [
                'name' => "Air Fryer Lobster Tails with Lemon-Garlic Butter",
                'desc' => "Air fry lobster tails for an elegant meal for two at home. They come out succulent and meaty. Delicious with lemony garlic butter and parsley.",
                'image' => "https://www.allrecipes.com/thmb/34IkVRuLTuVzn-Dn1_cE36LonT4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/7617251-f11380e6987e48a8b9158c751a985fac.jpg"
            ],
            [
                'name' => "Pasta Fagioli",
                'desc' => "This easy pasta fagioli recipe is typical Italian hearty winter fare. Serve in bowls with a grating of Parmesan cheese, crusty bread, and salad",
                'image' => "https://www.allrecipes.com/thmb/ujHDpu3cElFNC3LfgXyMFXM0zwA=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/23842-easy-pasta-fagioli-Beauty-3x4-1-59be7d781ce742ff800ec384a6b4df9e.jpg"
            ],
            [
                'name' => "Pork Chops",
                'desc' => "Pork chops are the champs of weeknight cooking. We've gathered the best ways to cook pork chops so they stay tender, moist, and delicious.",
                'image' => "https://www.allrecipes.com/thmb/uhL_cP-GT4Ybm9nrJ-YWgLOyf3U=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/277708-southern-smothered-pork-chops-in-brown-gravy-DDMFS-4x3-1-ba69c8e7138c48beb9675843ed44a69a.jpg"
            ],
            [
                'name' => "Simple Beef Stroganoff",
                'desc' => "This rich and creamy ground beef stroganoff with egg noodles is super simple to prepare, and ready to serve in under 30 minutes making it a great choice for busy weeknights. Garnish with freshly chopped parsley for added color and flavor.",
                'image' => "https://www.allrecipes.com/thmb/nnfE4fPUjuLYurTurhdD-lA9w4s=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/16311-simple-beef-stroganoff-DDMFS-4x3-1e966286eef54c0f96c882e569926eb3.jpg"
            ],
            [
                'name' => "Deep Fried Turkey",
                'desc' => "Learn how to deep-fry turkey for Thanksgiving without all the fuss. This deep-fried turkey recipe is simple — no injecting, no marinades, no complicated rubs. If you like a more traditional tasting turkey, this is the one for you!",
                'image' => "https://www.allrecipes.com/thmb/0uMysfKN0Meg-No275k7hgDXctc=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/215412-simple-deep-fried-turkey-vat-01-4x3-1-fc3078f38cd542a5a223d9c53ef25596.jpg"
            ],
            [
                'name' => "Swedish Meatball Sauce",
                'desc' => "A rich and creamy Swedish meatball sauce makes a comforting meal when served over pre-cooked meatballs. This quick and easy recipe makes a generous amount of sauce for 10 ounces of frozen meatballs. Serve over egg noodles or rice.",
                'image' => "https://www.allrecipes.com/thmb/oHmUXCWDydewIf7dCZucTlmhnxU=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/218894-easy-swedish-meatball-sauce-DDMFS-4x3-c64ad3203fce47aab73434d4205aa3fa.jpg"
            ],
            [
                'name' => "Chicken Piccata with Artichoke Hearts",
                'desc' => "After eating chicken piccata in many restaurants and finding many that were 'greasy,' I came up with this recipe through much trial and error. It has wonderful flavor and is even better the next day! I like to serve it over angel hair pasta or linguine.",
                'image' => "https://www.allrecipes.com/thmb/n-hzxbAtuLfoVhYAO3VPLidWqm4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/8306384-52e00c6e52784a8cb75173a4e3b2c14c.jpg"
            ],
            [
                'name' => "Simple Broiled Haddock",
                'desc' => "This haddock recipe is very quick and easy to make. A blend of seasonings spices up the mild flavor of this wonderfully light and flaky white fish.",
                'image' => "https://www.allrecipes.com/thmb/FZ6w-sMwT_JXUoVo0ayO_v-Lkg0=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/4535513-6c4baac83f90418084c377567106a708.jpg"
            ],
            [
                'name' => "Savory Sea Scallops and Angel Hair Pasta",
                'desc' => "This scallop pasta dish is a very simple, easy-to-prep meal that you will most likely be asked to make again! The taste, if carefully prepared and not overcooked, is incredible.",
                'image' => "https://www.allrecipes.com/thmb/Z4A6NthtaEl6QxKroCWqE0jeTjg=/282x188/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/8248413-29ef09d6a2da41c79218987366431f95.jpg"
            ],
            [
                'name' => "Easy Baked Chicken Tenders",
                'desc' => "These baked chicken tenders have a deliciously crispy panko bread crumb coating for that extra crunch factor without the guilt of frying! You can marinate the tenders in light buttermilk in the refrigerator for 1 hour instead of dipping in the beaten egg.",
                'image' => "https://www.allrecipes.com/thmb/xwBabvTPDd09TOU1H3O1zcNaRCk=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/273852-EasyBakedChikenTenders-3X2-0354-1c36a6289fac49ac8dba9c598602116a.jpg"
            ],
            [
                'name' => "Parmesan Crusted Tilapia Fillets",
                'desc' => "This recipe for Parmesan-crusted tilapia is quick and easy with plenty of flavor! Even my husband (who doesn't like fish that much) went back for seconds. Works well in low-carb diets.",
                'image' => "https://www.allrecipes.com/thmb/h1BNUUWu7EN2VEBOAgQ7uFfHb-8=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/1122696-parmesan-crusted-tilapia-fillets-Sherri-1x1-1-5d86199d7d7a490d9ef98a3e9a667f3b.jpg"
            ],
            [
                'name' => "Super Easy Chicken and Dumplings",
                'desc' => "This recipe for easy chicken and dumplings could not be more simple and it tastes great too!",
                'image' => "https://www.allrecipes.com/thmb/UM_lWzvjCu4ExYNMS4xFVFhwhIo=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/8572612-super-easy-chicken-and-dumplings-celeste-4x3-1-d27ec58c56d645e78aa20d981c6973a1.jpg"
            ],
            [
                'name' => "Creamy Garlic Chicken Pasta",
                'desc' => "This creamy garlic chicken pasta features farfalle tossed in a garlicky mushroom sauce with sautéed chicken.",
                'image' => "https://www.allrecipes.com/thmb/99jYv3npw90u6JFXgCkGDMDQv3w=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/233312creamy-garlic-chicken-pastafabeveryday4x3-bafa6565fa9e40bea0adfc0a9ac49158.jpg"
            ],
            [
                'name' => "Broccoli Chicken Divan",
                'desc' => "Chicken Divan with broccoli is a quick and easy casserole that's sure to be a hit with the family!",
                'image' => "https://www.allrecipes.com/thmb/PiKO2E6vAg_c_6UXs65MQgnPZzs=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/8854-BroccoliChickenDivan-DDMFS-4x3-f0a68f9c9e4c4c1bac5179fc8d305f23.jpg"
            ],
            [
                'name' => "Baked Salmon Fillets Dijon",
                'desc' => "Learn how long to bake salmon at 400 degrees F with this easy recipe for delicious salmon fillets coated with Dijon-style mustard and seasoned bread crumbs drizzled with butter.",
                'image' => "https://www.allrecipes.com/thmb/6zWlU6ojV9VN0vKiUpfOFHzgXm4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Baked-Salmon-Fillets-with-Dijon-Mustard-2000-23028416a7824c19b31ec4c851598111.jpg"
            ],
            [
                'name' => "Quick and Easy Chicken Spaghetti",
                'desc' => "This chicken spaghetti recipe is quick and easy to make. This dish has a wonderful Southern snap and yet is smooth and hearty! A great way to use last night's leftover chicken!",
                'image' => "https://www.allrecipes.com/thmb/Ynl18ReDt9CvwsgFL6yIgDtN0RQ=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/26286-QuickAndEasyChickenSpaghetti-ddmfs-4X3-0844-4bc9cd72b38b44f6aaa5c04709ca7d3e.jpg"
            ],
            [
                'name' => "Southern Fried Chicken Livers",
                'desc' => "Mom made us fried chicken livers because they were cheap, and now the convenience stores sell them in the South! Use a fry screen — these things can pop and will burn you! Serve with pepper gravy or a packet of chicken gravy.",
                'image' => "https://www.allrecipes.com/thmb/pNBknqdyeK-qaW3GQDl8FQ89ISs=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/6394507-b5623700b6b64188bc40737c09b0cdd9.jpg"
            ],
            [
                'name' => "Sirloin Steak with Garlic Butter",
                'desc' => "This sirloin steak recipe is served with very garlicky butter that makes this steak melt-in-your-mouth wonderful! I have never tasted any other steak that came even close to this recipe. If you are having steak, don't skimp on flavor to save a few calories.",
                'image' => "https://www.allrecipes.com/thmb/oHIGwiHzU_5fro3PsoDpA_KlYA0=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/1023331-sirloin-steak-with-garlic-butter-Cindy-Capps-Lepp-1x1-1-163c35fb36274d4d8c2456e829f3801a.jpg"
            ],
            [
                'name' => "Smoked Sausage Skillet",
                'desc' => "Looking for a quick sausage recipe for dinner? You'll have dinner on the table in no time with this one-skillet sausage and veggie dish served over rice.",
                'image' => "https://www.allrecipes.com/thmb/9u9PU7pcWtEO1HNs46ouE1VUCzE=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/3485679-cc7318539dd9438aab7d0ac79be51612.jpg"
            ],
            [
                'name' => "Baked Chicken Schnitzel",
                'desc' => "Chicken schnitzel is a breeze to make in the oven. Plus, this method uses less oil and has easier cleanup. The breaded chicken breasts are baked until golden and crispy on the outside, yet they're still tender and juicy on the inside. Serve schnitzels with lemon wedges and a German-style potato salad.",
                'image' => "https://www.allrecipes.com/thmb/Q-MU5NpyMAHw04NBws5T3-oKAf8=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/244950-baked-chicken-schnitzle-kims-cooking-now-5349279-4x3-2257bfa79bd541dd8dbd692c2482b9fe.jpg"
            ],
            [
                'name' => "Grilled Greek Yogurt-Marinated Chicken",
                'desc' => "This Greek yogurt-marinated chicken infused with lemon is delicious. There is something special about what yogurt does to chicken in its smoky, sizzling time over charcoal. It imparts a tanginess that enhances all the other flavors and grills to a caramelized dark brown without tasting burnt.",
                'image' => "https://www.allrecipes.com/thmb/XcnR7RbmZ0ikvMlguuQYjULeCzs=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/1011044-85546a25f4e248d1b735212e5f069a70.jpg"
            ],
            [
                'name' => "Tteokbokki (Korean Spicy Rice Cakes)",
                'desc' => "It is made with rice cakes (garaetteok, cylinder-shaped rice cake), fish cakes, boiled egg, and seasoned with chile paste. The rice cakes are chewy and tender. It looks super spicy and, originally, it is! But you can control the amount of chile paste. You might be able to find it easily at food vendors on the street of Korea. There are always delicious dukbokki boiling and ready to go. Garnish with sesame seeds if you like.",
                'image' => "https://www.allrecipes.com/thmb/gpTRv0SjGIYp-aoF0Ubr0RtLB_s=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/8001954-2c9fe28de46d4f27a7e02ab4044c1951.jpg"
            ],
        ]);
    }
}