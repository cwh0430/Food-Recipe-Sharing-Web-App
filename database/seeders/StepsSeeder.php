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
            [
                'recipe_id' => 2,
                'steps_num' => 1,
                'steps_desc' => 'Combine tuna, mayonnaise, celery, onion, parsley, lemon juice, garlic powder, salt, and pepper in a large bowl; mix well. Season with paprika; refrigerate until chilled.'
            ],
            [
                'recipe_id' => 3,
                'steps_num' => 1,
                'steps_desc' => 'Heat oil in a large pot over medium heat. Add ginger, curry paste, and lemongrass; cook and stir in the hot oil for 1 minute.'
            ],
            [
                'recipe_id' => 3,
                'steps_num' => 2,
                'steps_desc' => 'Gradually stir in chicken broth, then stir in fish sauce and brown sugar; reduce heat to low and simmer for 15 minutes.'
            ],
            [
                'recipe_id' => 3,
                'steps_num' => 3,
                'steps_desc' => 'Add coconut milk and mushrooms; cook and stir until mushrooms are soft, about 5 minutes.'
            ],
            [
                'recipe_id' => 3,
                'steps_num' => 4,
                'steps_desc' => 'Add shrimp; cook until no longer translucent, about 5 minutes. Stir in lime juice; season with salt and garnish with cilantro.'
            ],
            [
                'recipe_id' => 4,
                'steps_num' => 1,
                'steps_desc' => 'Mix chicken and pork together on a plate or tray, and place in the freezer for about 15 minutes, or until firm and very cold. Partially frozen is okay.'
            ],
            [
                'recipe_id' => 4,
                'steps_num' => 2,
                'steps_desc' => 'Add breadcrumbs to the bowl of a food processor (this should be crumbled from the inside of a loaf of fresh or day old French bread – no crust!). Add sauteed onions, egg, white wine, garlic, parsley, salt, pepper, chili flakes, and crushed fennel seeds. Add chilled chicken mixture on top.'
            ],
            [
                'recipe_id' => 4,
                'steps_num' => 3,
                'steps_desc' => 'Pulse on and off in the food processor as shown until the mixture resembles ground meat. Stopping occasionally and scraping the bowl of food processor during the process is recommended.'
            ],
            [
                'recipe_id' => 4,
                'steps_num' => 4,
                'steps_desc' => 'Transfer mixture to fridge and chill for 1 hour before shaping.'
            ],
            [
                'recipe_id' => 4,
                'steps_num' => 5,
                'steps_desc' => 'Preheat the oven to 425 degrees F (220 degrees C). Line a baking sheet with foil and lightly grease with olive oil.'
            ],
            [
                'recipe_id' => 4,
                'steps_num' => 6,
                'steps_desc' => 'Divide mixture into 12 portions, and place on the prepared baking sheet. Use damp hands to roll into smooth balls.'
            ],
            [
                'recipe_id' => 4,
                'steps_num' => 7,
                'steps_desc' => 'Bake in the preheated oven until meatballs are cooked through, about 18 minutes. For some additional browning, turn broiler to high, and broil meatballs for 1 to 2 minutes.'
            ],
            [
                'recipe_id' => 4,
                'steps_num' => 8,
                'steps_desc' => 'Meatballs can be served immediately, or transferred into tomato sauce set over low heat. Simmer gently for about 20 minutes to flavor sauce.'
            ],
            [
                'recipe_id' => 5,
                'steps_num' => 1,
                'steps_desc' => 'Preheat the oven to 400 degrees F (200 degrees C).'
            ],
            [
                'recipe_id' => 5,
                'steps_num' => 2,
                'steps_desc' => 'Stir together butter, mustard, and honey in a small bowl. Set aside.'
            ],
            [
                'recipe_id' => 5,
                'steps_num' => 3,
                'steps_desc' => 'Mix together bread crumbs, pecans, and parsley in another bowl.'
            ],
            [
                'recipe_id' => 5,
                'steps_num' => 4,
                'steps_desc' => 'Brush each salmon fillet lightly with honey mustard mixture.'
            ],
            [
                'recipe_id' => 5,
                'steps_num' => 5,
                'steps_desc' => 'Sprinkle the tops of fillets with bread crumb mixture.'
            ],
            [
                'recipe_id' => 5,
                'steps_num' => 6,
                'steps_desc' => 'Bake salmon in the preheated oven until it flakes easily with a fork, 12 to 15 minutes. Season with salt and pepper, and garnish with a wedge of lemon.'
            ],
            [
                'recipe_id' => 6,
                'steps_num' => 1,
                'steps_desc' => 'Heat oil in a large pot over medium heat. Add onion and garlic; cook and stir until fragrant, about 2 minutes.'
            ],
            [
                'recipe_id' => 6,
                'steps_num' => 2,
                'steps_desc' => 'Add ginger and fish sauce; cook and stir for 1 to 2 minutes. Stir in chicken and cook for 5 minutes.'
            ],
            [
                'recipe_id' => 6,
                'steps_num' => 3,
                'steps_desc' => 'Pour in chicken broth and cook for 5 minutes. Add squash and simmer until chicken is no longer pink in the center, about 10 minutes. Season with salt and pepper.'
            ],
            [
                'recipe_id' => 6,
                'steps_num' => 4,
                'steps_desc' => 'Add bok choy and spinach; cook until spinach is just wilted, 1 to 2 minutes. Serve hot.'
            ],
            [
                'recipe_id' => 7,
                'steps_num' => 1,
                'steps_desc' => 'Cook sausage in a large skillet over medium heat until brown on all sides, 5 to 7 minutes. Remove from skillet, and slice.'
            ],
            [
                'recipe_id' => 7,
                'steps_num' => 2,
                'steps_desc' => 'Melt butter in the same skillet. Stir in onions and garlic, and cook 2 to 3 minutes. Mix in bell peppers, season with basil and oregano, and stir in 1/4 cup wine. Continue to cook and stir until peppers and onions are tender, 5 to 7 minutes.'
            ],
            [
                'recipe_id' => 7,
                'steps_num' => 3,
                'steps_desc' => 'Return sausage slices to the skillet. Reduce heat to low, cover, and simmer 15 minutes, or until sausage is heated through, adding more wine if needed.'
            ],
            [
                'recipe_id' => 8,
                'steps_num' => 1,
                'steps_desc' => 'Heat olive oil in a skillet over medium heat. Sauté onion until lightly browned.'
            ],
            [
                'recipe_id' => 8,
                'steps_num' => 2,
                'steps_desc' => 'Stir in garlic, curry powder, cinnamon, paprika, bay leaf, ginger, sugar, and salt. Continue stirring for 2 minutes.'
            ],
            [
                'recipe_id' => 8,
                'steps_num' => 3,
                'steps_desc' => 'Add chicken pieces, tomato paste, yogurt, and coconut milk. Bring to a boil, reduce heat, and simmer for 20 to 25 minutes.'
            ],
            [
                'recipe_id' => 8,
                'steps_num' => 4,
                'steps_desc' => 'Remove bay leaf, and stir in lemon juice and cayenne pepper. Simmer 5 more minutes.'
            ],
            [
                'recipe_id' => 9,
                'steps_num' => 1,
                'steps_desc' => 'Heat olive oil in a large, deep skillet over medium heat. Add onion with a pinch of salt; cook and stir until onion has softened and turned translucent, about 5 minutes. Stir in sausage and cook until browned, 5 to 7 minutes.'
            ],
            [
                'recipe_id' => 9,
                'steps_num' => 2,
                'steps_desc' => 'Pour 1 1/2 cups chicken broth into sausage mixture and bring to a boil while scraping the browned bits of food off of the bottom of the pan with a wooden spoon. Add orecchiette pasta; cook and stir pasta in hot broth, adding remaining broth when liquid is absorbed, until pasta is cooked through and most of the broth is absorbed, about 15 minutes.'
            ],
            [
                'recipe_id' => 9,
                'steps_num' => 3,
                'steps_desc' => 'Stir arugula into sausage-pasta mixture until arugula wilts. Ladle pasta into bowls and sprinkle with Parmigiano-Reggiano cheese.'
            ],
            [
                'recipe_id' => 10,
                'steps_num' => 1,
                'steps_desc' => 'Season chicken on both sides with salt and pepper.'
            ],
            [
                'recipe_id' => 10,
                'steps_num' => 2,
                'steps_desc' => 'Cover the bottom of a cast iron skillet with olive oil and bring to medium-high heat. Add chicken and brown on one side, 3 to 5 minutes. Flip chicken and add onion and garlic; continue to cook until chicken is mostly (but not fully) cooked and onion and garlic are soft, 5 to 7 minutes more. Remove chicken to a plate.'
            ],
            [
                'recipe_id' => 10,
                'steps_num' => 3,
                'steps_desc' => 'Add honey, soy sauce, onion powder, and garlic powder to the skillet. Stir and scrape the bottom of the pan with a wooden spoon to get garlic and onion to mix with the liquid.'
            ],
            [
                'recipe_id' => 10,
                'steps_num' => 4,
                'steps_desc' => 'Put chicken back into the pan, cover, and reduce heat to medium. Cook until no longer pink in the center and juices run clear, about 10 more minutes, turning once halfway through. An instant-read thermometer inserted into the center of a thigh should read at least 165 degrees F (74 degrees C).'
            ],
            [
                'recipe_id' => 10,
                'steps_num' => 5,
                'steps_desc' => 'Place on a serving tray and drizzle liquid from the pan on top. Sprinkle with chopped cilantro before serving.'
            ],
            [
                'recipe_id' => 11,
                'steps_num' => 1,
                'steps_desc' => 'Heat sesame oil and olive oil in a large nonstick skillet or wok over medium-high heat. Add shrimp and cook until they are bright pink on the outside and the meat is opaque, about 3 minutes, flipping halfway through.'
            ],
            [
                'recipe_id' => 11,
                'steps_num' => 2,
                'steps_desc' => 'Remove shrimp from the skillet using a slotted spoon, allowing oils and cooking juices to remain in the skillet. Place shrimp on a plate and set aside.'
            ],
            [
                'recipe_id' => 11,
                'steps_num' => 3,
                'steps_desc' => 'Add peas and carrots and corn to the skillet and cook, stirring intermittently, until vegetables begin to soften, about 2 minutes. Add garlic; cook and stir for 1 minute. Push vegetables to the side of the skillet, pour eggs into the other side, and cook to scramble, stirring as necessary, 3 to 4 minutes.'
            ],
            [
                'recipe_id' => 11,
                'steps_num' => 4,
                'steps_desc' => 'Stir shrimp, rice, and green onions into the skillet. Drizzle evenly with soy sauce, season with salt and pepper, and stir to combine. Cook until shrimp is reheated through, about 2 minutes.'
            ],
            [
                'recipe_id' => 12,
                'steps_num' => 1,
                'steps_desc' => 'Preheat the oven to 350 degrees F (175 degrees C). Grease an 8-inch square baking dish.'
            ],
            [
                'recipe_id' => 12,
                'steps_num' => 2,
                'steps_desc' => 'Make the macaroni and cheese: Bring a large pot of lightly salted water to a boil. Add macaroni and simmer, stirring occasionally, until tender yet firm to the bite, about 8 minutes; it will finish cooking in the oven. Drain and transfer to the prepared baking dish.'
            ],
            [
                'recipe_id' => 12,
                'steps_num' => 3,
                'steps_desc' => 'While the macaroni is cooking, melt 1/4 cup butter in a medium skillet over low heat. Whisk in flour and stir until the mixture becomes paste-like and light golden brown, 3 to 5 minutes.'
            ],
            [
                'recipe_id' => 12,
                'steps_num' => 4,
                'steps_desc' => 'Gradually whisk 2 1/2 cups milk into the flour mixture, and bring to a simmer. Stir in shredded Cheddar and finely grated Parmesan cheeses; season with salt and pepper. Cook and stir over low heat until cheese is melted and sauce has thickened, 3 to 5 minutes, adding up to 1/2 cup more milk if needed. Pour cheese sauce over macaroni and stir until well combined.'
            ],
            [
                'recipe_id' => 12,
                'steps_num' => 5,
                'steps_desc' => 'Make the bread crumb topping: Melt 2 tablespoons butter in a skillet over medium heat. Add bread crumbs; cook and stir until well coated and browned. Spread bread crumbs over macaroni and cheese, then sprinkle with paprika.'
            ],
            [
                'recipe_id' => 12,
                'steps_num' => 6,
                'steps_desc' => 'Bake in the preheated oven until topping is golden brown and macaroni and cheese is bubbling, about 30 minutes.'
            ],
            [
                'recipe_id' => 13,
                'steps_num' => 1,
                'steps_desc' => 'Preheat an air fryer to 400 degrees F (200 degrees C).'
            ],
            [
                'recipe_id' => 13,
                'steps_num' => 2,
                'steps_desc' => 'Place buns in a single layer in the air fryer basket; cook in the preheated air fryer until crisp, about 2 minutes. Remove buns to a plate.'
            ],
            [
                'recipe_id' => 13,
                'steps_num' => 3,
                'steps_desc' => 'Place hot dogs in a single layer in the air fryer basket; cook for 3 minutes. Serve hot dogs in toasted buns.'
            ],
            [
                'recipe_id' => 14,
                'steps_num' => 1,
                'steps_desc' => 'Gather ingredients.'
            ],
            [
                'recipe_id' => 14,
                'steps_num' => 2,
                'steps_desc' => 'Place meat in slow cooker.'
            ],
            [
                'recipe_id' => 14,
                'steps_num' => 3,
                'steps_desc' => 'Mix flour, salt, and pepper together in a small bowl. Pour over meat, and stir until meat is coated.'
            ],
            [
                'recipe_id' => 14,
                'steps_num' => 4,
                'steps_desc' => 'Add beef broth, carrots, potatoes, onion, celery, Worcestershire sauce, paprika, garlic, and bay leave; stir to combine.'
            ],
            [
                'recipe_id' => 14,
                'steps_num' => 5,
                'steps_desc' => 'Cover, and cook until beef is tender enough to cut with a spoon, on Low for 8 to 12 hours, or on High for 4 to 6 hours.'
            ],
            [
                'recipe_id' => 15,
                'steps_num' => 1,
                'steps_desc' => 'Cook sausage, ground beef, onion, and garlic in a Dutch oven over medium heat until well browned. Stir in crushed tomatoes, tomato sauce, tomato paste, and water. Season with sugar, 2 tablespoons parsley, basil, 1 teaspoon salt, Italian seasoning, fennel seeds, and pepper. Simmer, covered, for about 1 1/2 hours, stirring occasionally.'
            ],
            [
                'recipe_id' => 15,
                'steps_num' => 2,
                'steps_desc' => 'Bring a large pot of lightly salted water to a boil. Cook lasagna noodles in boiling water for 8 to 10 minutes. Drain noodles, and rinse with cold water. In a mixing bowl, combine ricotta cheese with egg, remaining 2 tablespoons parsley, and 1/2 teaspoon salt.'
            ],
            [
                'recipe_id' => 15,
                'steps_num' => 3,
                'steps_desc' => 'Preheat the oven to 375 degrees F (190 degrees C).'
            ],
            [
                'recipe_id' => 15,
                'steps_num' => 4,
                'steps_desc' => 'To assemble, spread 1 1/2 cups of meat sauce in the bottom of a 9x13-inch baking dish. Arrange 6 noodles lengthwise over meat sauce. Spread with 1/2 of the ricotta cheese mixture. Top with 1/3 of the mozzarella cheese slices. Spoon 1 1/2 cups meat sauce over mozzarella, and sprinkle with 1/4 cup Parmesan cheese. Repeat layers, and top with remaining mozzarella and Parmesan cheese. Cover with foil: to prevent sticking, either spray foil with cooking spray or make sure the foil does not touch the cheese.'
            ],
            [
                'recipe_id' => 16,
                'steps_num' => 1,
                'steps_desc' => 'Place corned beef in a Dutch oven and cover with water. Add spice packet, cover, and bring to a boil. Reduce heat and simmer until corned beef is just about fork-tender, about 2 hours.'
            ],
            [
                'recipe_id' => 16,
                'steps_num' => 2,
                'steps_desc' => 'While the corned beef is simmering, cut potatoes in half. Peel carrots and cut into 3-inch pieces. Cut cabbage into small wedges.'
            ],
            [
                'recipe_id' => 16,
                'steps_num' => 3,
                'steps_desc' => 'When corned beef has cooked for 2 hours, add potatoes and carrots; cook until vegetables are almost tender and meat is fork-tender, about 10 minutes. Add cabbage and cook until tender, about 15 more minutes.'
            ],
            [
                'recipe_id' => 16,
                'steps_num' => 4,
                'steps_desc' => 'Remove meat and let rest for 15 minutes. Leave broth and vegetables in the Dutch oven.Slice meat across the grain. Serve with vegetables and broth.'
            ],
            [
                'recipe_id' => 17,
                'steps_num' => 1,
                'steps_desc' => 'Heat a large skillet over medium heat. Cook and stir lean ground beef in the hot skillet until some of the fat starts to render, 3 to 4 minutes. Add onion and bell pepper; continue to cook until vegetables have softened and beef is cooked through, 3 to 5 more minutes.'
            ],
            [
                'recipe_id' => 17,
                'steps_num' => 2,
                'steps_desc' => 'Stir in ketchup, brown sugar, mustard, and garlic powder; season with salt and pepper. Reduce heat to low and simmer for 20 to 30 minutes.'
            ],
            [
                'recipe_id' => 17,
                'steps_num' => 3,
                'steps_desc' => 'Divide meat mixture evenly among hamburger buns.'
            ],
            [
                'recipe_id' => 18,
                'steps_num' => 1,
                'steps_desc' => 'Gather all ingredients.'
            ],
            [
                'recipe_id' => 18,
                'steps_num' => 2,
                'steps_desc' => 'Preheat oven to 350 degrees F (175 degrees C).'
            ],
            [
                'recipe_id' => 18,
                'steps_num' => 3,
                'steps_desc' => 'Crush garlic with rosemary, salt, and pepper in a mortar and pestle to make a paste.'
            ],
            [
                'recipe_id' => 18,
                'steps_num' => 4,
                'steps_desc' => 'Pierce meat with a sharp knife in several places and press garlic paste into the openings. Rub pork loin with the remaining garlic mixture and olive oil. Set into an oven-safe pan.'
            ],
            [
                'recipe_id' => 18,
                'steps_num' => 5,
                'steps_desc' => 'Place pork loin into the preheated oven, turning and basting with pan liquids every 30 minutes. Cook until the pork is no longer pink in the center, 90 minutes to 2 hours. An instant-read thermometer inserted into the center should read 145 degrees F (63 degrees C). Remove roast to a platter and keep warm.'
            ],
            [
                'recipe_id' => 18,
                'steps_num' => 6,
                'steps_desc' => 'Place pan onto the stove over medium-high heat and pour wine into it. Heat wine and stir to loosen browned bits from the bottom of the pan. Simmer for 3 to 5 minutes.'
            ],
            [
                'recipe_id' => 18,
                'steps_num' => 7,
                'steps_desc' => 'Slice pork loin and serve with pan juices.'
            ],
            [
                'recipe_id' => 19,
                'steps_num' => 1,
                'steps_desc' => "Pound the boneless chicken breasts out to an even width so they cook evenly. Basically, you're pounding the thick part down to the size of the thin part, about a half-inch thick."
            ],
            [
                'recipe_id' => 19,
                'steps_num' => 2,
                'steps_desc' => "Salt and pepper the chicken well. Then don't bother with salting the flour and bread crumbs."
            ],
            [
                'recipe_id' => 19,
                'steps_num' => 3,
                'steps_desc' => 'Use Panko bread crumbs mixed with a little finely grated Parmesan cheese. When you fry the breaded chicken, the Parmesan will give it an extra crunch and exciting flavor.'
            ],
            [
                'recipe_id' => 19,
                'steps_num' => 4,
                'steps_desc' => 'Before frying, let the breaded chicken sit on the counter for about 15 minutes to allow the coating to adhere to the chicken breast.'
            ],
            [
                'recipe_id' => 19,
                'steps_num' => 5,
                'steps_desc' => "THE KEY: Don't drown the poor breaded and fried chicken in sauce and smother it in cheese. Too much of a good thing is too much. You did all the work creating a crisp coating, why make it soggy with too much sauce and cheese?"
            ],
            [
                'recipe_id' => 19,
                'steps_num' => 6,
                'steps_desc' => "Be sure your oven is completely preheated to 450 F. You'll want the cheese to brown slightly and the breading to crisp up before the chicken gets overcooked, and a nice hot oven is the way to go."
            ],
            [
                'recipe_id' => 20,
                'steps_num' => 1,
                'steps_desc' => 'Fill a large pot with lightly salted water and bring to a rolling boil. Cook fettuccine at a boil until tender yet firm to the bite, about 8 minutes.'
            ],
            [
                'recipe_id' => 20,
                'steps_num' => 2,
                'steps_desc' => 'Meanwhile, melt butter in a large nonstick skillet over medium-high heat. Stir in green onions and garlic; cook for 1 minute. Stir in shrimp and scallops; cook for 3 minutes, then reduce the heat to medium-low.'
            ],
            [
                'recipe_id' => 20,
                'steps_num' => 3,
                'steps_desc' => 'Pour in half-and-half and season with salt and pepper; stir constantly and bring to a simmer, making sure it does not boil. Gradually stir in 1/2 cup Parmesan; cook and stir for 1 more minute, then remove from the heat.'
            ],
            [
                'recipe_id' => 20,
                'steps_num' => 4,
                'steps_desc' => 'Drain pasta. Add to the skillet and toss with sauce until thoroughly coated. Sprinkle remaining Parmesan over top and serve immediately.'
            ],
            [
                'recipe_id' => 21,
                'steps_num' => 1,
                'steps_desc' => 'Preheat the oven to 350 degrees F (175 degrees C).'
            ],
            [
                'recipe_id' => 21,
                'steps_num' => 2,
                'steps_desc' => 'Place chicken in a roasting pan; season generously inside and out with onion powder, salt, and pepper. Place 3 tablespoons of butter in chicken cavity; arrange dollops of remaining butter on the outside of chicken. Cut celery into 3 or 4 pieces; place in the chicken cavity.'
            ],
            [
                'recipe_id' => 21,
                'steps_num' => 3,
                'steps_desc' => 'Bake chicken uncovered in the preheated oven until no longer pink at the bone and the juices run clear, about 1 hour and 15 minutes. An instant-read thermometer inserted into the thickest part of the thigh, near the bone, should read 165 degrees F (74 degrees C).'
            ],
            [
                'recipe_id' => 21,
                'steps_num' => 4,
                'steps_desc' => 'Remove from the oven and baste with drippings. Cover with aluminum foil and allow to rest for about 30 minutes before serving.'
            ],
            [
                'recipe_id' => 22,
                'steps_num' => 1,
                'steps_desc' => 'Pour vegetable oil into the bottom of a slow cooker. Place pork roast into the slow cooker; pour in barbeque sauce, vinegar, and chicken broth. Stir in brown sugar, yellow mustard, Worcestershire sauce, chili powder, onion, garlic, and thyme. Cover and cook on Low for 10 to 12 hours or High for 5 to 6 hours until pork shreds easily with a fork.'
            ],
            [
                'recipe_id' => 22,
                'steps_num' => 2,
                'steps_desc' => 'Remove pork from the slow cooker, and shred the meat using two forks. Return shredded pork to the slow cooker, and stir to combine with juices.'
            ],
            [
                'recipe_id' => 22,
                'steps_num' => 3,
                'steps_desc' => 'Spread the inside of both halves of hamburger buns with butter. Toast buns, butter-side down, in a skillet over medium heat until golden brown. Spoon pulled pork into toasted buns.'
            ],
            [
                'recipe_id' => 23,
                'steps_num' => 1,
                'steps_desc' => 'Gather your ingredients and preheat the oven to 350 degrees F (175 degrees C).'
            ],
            [
                'recipe_id' => 23,
                'steps_num' => 2,
                'steps_desc' => 'Melt butter in a skillet over medium-low heat. Add onion, celery, and carrots and cook, stirring occasionally, until tender, about 15 minutes.'
            ],
            [
                'recipe_id' => 23,
                'steps_num' => 3,
                'steps_desc' => 'Stir in peas, flour, parsley, and thyme and cook, stirring constantly, until the flour coats the vegetables and begins to fry, about 5 minutes.'
            ],
            [
                'recipe_id' => 23,
                'steps_num' => 4,
                'steps_desc' => 'Whisk in chicken broth and half-and-half, and cook until the sauce is thick and bubbling. Stir in cooked chicken, and season with salt and pepper.'
            ],
            [
                'recipe_id' => 23,
                'steps_num' => 5,
                'steps_desc' => 'Transfer chicken, vegetables, and sauce into a 7x11-inch baking dish. Arrange biscuits on top of the filling.'
            ],
            [
                'recipe_id' => 23,
                'steps_num' => 6,
                'steps_desc' => 'Beat egg yolk with water in a small bowl. Brush mixture over the biscuits.'
            ],
            [
                'recipe_id' => 23,
                'steps_num' => 7,
                'steps_desc' => 'Bake in the preheated oven until the biscuits are golden brown and the pie filling is bubbly, 20 to 25 minutes.'
            ],
            [
                'recipe_id' => 23,
                'steps_num' => 8,
                'steps_desc' => 'Remove from the oven and let rest for 10 minutes before serving.'
            ],
            [
                'recipe_id' => 24,
                'steps_num' => 1,
                'steps_desc' => 'Preheat the oven to 350 degrees F (175 degrees C). Lightly grease a 9x5-inch loaf pan.'
            ],
            [
                'recipe_id' => 24,
                'steps_num' => 2,
                'steps_desc' => 'Combine ground beef, onion, milk, bread crumbs and egg in a large bowl; season with salt and pepper. Transfer into prepared loaf pan.'
            ],
            [
                'recipe_id' => 24,
                'steps_num' => 3,
                'steps_desc' => 'Mix ketchup, brown sugar, and mustard together in a small bowl until well combined; pour over meatloaf and spread it evenly over the top.'
            ],
            [
                'recipe_id' => 24,
                'steps_num' => 4,
                'steps_desc' => 'Bake in the preheated oven until no longer pink in the center, about 1 hour.'
            ],
            [
                'recipe_id' => 25,
                'steps_num' => 1,
                'steps_desc' => 'Place potatoes, carrots, and onion into the bottom of a slow cooker; add water and place brisket on top of vegetables.'
            ],
            [
                'recipe_id' => 25,
                'steps_num' => 2,
                'steps_desc' => 'Pour beer over brisket; sprinkle over spices from the packet and cover.'
            ],
            [
                'recipe_id' => 25,
                'steps_num' => 3,
                'steps_desc' => 'Cook on High for 7 hours; stir in the cabbage and cook for 1 more hour.'
            ],
            [
                'recipe_id' => 26,
                'steps_num' => 1,
                'steps_desc' => 'Heat a large skillet over medium-high heat. Add beef and cook, stirring and crumbling into small pieces until browned, 5 to 7 minutes. Drain excess grease.'
            ],
            [
                'recipe_id' => 26,
                'steps_num' => 2,
                'steps_desc' => 'Stir in garlic, ginger, and sesame oil and cook until fragrant, about 2 minutes. Stir in soy sauce, brown sugar, and red pepper. Cook until beef absorbs some sauce, about 7 minutes. Add 1/2 of chopped green onions.'
            ],
            [
                'recipe_id' => 26,
                'steps_num' => 3,
                'steps_desc' => 'Serve over hot cooked rice; garnish with sesame seeds and remaining green onions.'
            ],
            [
                'recipe_id' => 27,
                'steps_num' => 1,
                'steps_desc' => 'Gather all ingredients.'
            ],
            [
                'recipe_id' => 27,
                'steps_num' => 2,
                'steps_desc' => 'Whisk honey, soy sauce, and red pepper flakes in a bowl; set aside.'
            ],
            [
                'recipe_id' => 27,
                'steps_num' => 3,
                'steps_desc' => 'Heat olive oil in a skillet over medium heat; cook and stir chicken in hot oil until lightly brown, about 5 minutes.'
            ],
            [
                'recipe_id' => 27,
                'steps_num' => 4,
                'steps_desc' => 'Pour honey mixture into the skillet; continue to cook and stir until chicken is no longer pink in the center and sauce is thickened, about 5 minutes more.'
            ],
            [
                'recipe_id' => 27,
                'steps_num' => 5,
                'steps_desc' => 'Serve hot and enjoy!'
            ],
            [
                'recipe_id' => 28,
                'steps_num' => 1,
                'steps_desc' => 'In a shallow bowl, whisk together beer, flour, and salt.'
            ],
            [
                'recipe_id' => 28,
                'steps_num' => 2,
                'steps_desc' => 'Rinse fish, and pat dry. Cut into 10 equal pieces.'
            ],
            [
                'recipe_id' => 28,
                'steps_num' => 3,
                'steps_desc' => 'In a large saucepan, heat 1 inch oil to 360 degrees F (168 degrees C). Using a fork, coat fish pieces in batter. Slide coated fish into hot oil in batches; adjust heat to maintain oil temperature. Fry until golden, about 2 minutes. Lift out with a slotted spoon, and drain briefly on paper towels; keep warm. Repeat to fry remaining fish.'
            ],
            [
                'recipe_id' => 28,
                'steps_num' => 4,
                'steps_desc' => 'Stack 2 tortillas. Place a piece of fish and 1/2 cup cabbage in the center of the tortillas. Garnish with mayonnaise, lime wedges and salsa'
            ],
            [
                'recipe_id' => 29,
                'steps_num' => 1,
                'steps_desc' => 'Preheat an air fryer to 380 degrees F (195 degrees C).'
            ],
            [
                'recipe_id' => 29,
                'steps_num' => 2,
                'steps_desc' => 'Butterfly lobster tails by cutting lengthwise through the centers of the hard top shells and meat with kitchen shears. Cut to, but not through, the bottoms of the shells. Spread tail halves apart. Place tails in the air fryer basket with lobster meat facing up.'
            ],
            [
                'recipe_id' => 29,
                'steps_num' => 3,
                'steps_desc' => 'Melt butter in a small saucepan over medium heat. Add lemon zest and garlic; heat until garlic is fragrant, about 30 seconds.'
            ],
            [
                'recipe_id' => 29,
                'steps_num' => 4,
                'steps_desc' => 'Transfer 2 tablespoons of butter mixture to a small bowl; brush this onto lobster tails. Discard any remaining brushed butter to avoid contamination from uncooked lobster. Season lobster with salt and pepper.'
            ],
            [
                'recipe_id' => 29,
                'steps_num' => 5,
                'steps_desc' => 'Cook in the preheated air fryer until lobster meat is opaque, 5 to 7 minutes.'
            ],
            [
                'recipe_id' => 29,
                'steps_num' => 6,
                'steps_desc' => 'Spoon reserved butter from the saucepan over lobster meat. Top with parsley and serve with lemon wedges.'
            ],
            [
                'recipe_id' => 30,
                'steps_num' => 1,
                'steps_desc' => 'Heat olive oil in a saucepan over medium heat. Add carrot, celery, and onion; cook and stir until soft. Add garlic and sauté briefly. Stir in tomato sauce, chicken broth, parsley, basil, and pepper; simmer for 20 minutes.'
            ],
            [
                'recipe_id' => 30,
                'steps_num' => 2,
                'steps_desc' => 'Bring a large pot of lightly salted water to a boil. Add ditalini pasta and cook for 8 minutes or until al dente; drain.'
            ],
            [
                'recipe_id' => 30,
                'steps_num' => 3,
                'steps_desc' => 'Add beans and cooked pasta to soup; simmer until heated through, 1 or 2 minutes.'
            ],
            [
                'recipe_id' => 31,
                'steps_num' => 1,
                'steps_desc' => "If your endgame is crispy or fried, use thin pork chops. Thin pork chops are around ⅛ to ¼ inch thick, can be boneless or bone-in, and are perfect for pan- or deep-frying. Thin pork chops cook up fast, and they're also a great staple to stockpile in your freezer, since they thaw relatively quickly."
            ],
            [
                'recipe_id' => 31,
                'steps_num' => 2,
                'steps_desc' => "Look for pork cutlets, which are cut from the pork loin and may contain meat from the tenderloin, sirloin, or a combination (called center-cut). Pork cutlets from the tenderloin are very tender, while cutlets from the sirloin tend to be tougher and should be pounded at home before cooking. Pounding breaks up the connective tissue of the meat to help tenderize it."
            ],
            [
                'recipe_id' => 31,
                'steps_num' => 3,
                'steps_desc' => "If you're cooking several pork cutlets at once, consider buying a whole pork tenderloin and trimming it into medallions at home. You should be able to cut about 12 cutlets from one 1-lb. tenderloin — but don't hesitate to ask your butcher for help."
            ],
            [
                'recipe_id' => 31,
                'steps_num' => 4,
                'steps_desc' => "You can cook thin pork chops in several different ways. Dredge them in flour seasoned with salt and pepper before pan-frying to create a flavorful crust. If you prefer a thicker, heartier crust, you can assemble a basic breading station of flour, eggs, and bread crumbs or panko, then dip the pork chop into each one before cooking."
            ],
            [
                'recipe_id' => 31,
                'steps_num' => 5,
                'steps_desc' => "Cook time for thin pork chops depends on the recipe, but it generally ranges from 4 to 8 minutes total. If you bread the pork chops, the cook time will be on the high side of this range."
            ],
            [
                'recipe_id' => 32,
                'steps_num' => 1,
                'steps_desc' => 'Gather all ingredients.'
            ],
            [
                'recipe_id' => 32,
                'steps_num' => 2,
                'steps_desc' => 'Sauté ground beef in a large skillet over medium heat until browned and crumbly; 5 to 10 minutes.'
            ],
            [
                'recipe_id' => 32,
                'steps_num' => 3,
                'steps_desc' => 'At the same time, fill a large pot with lightly salted water and bring to a rapid boil. Cook egg noodles at a boil until tender yet firm to the bite, 7 to 9 minutes. Drain and set aside.'
            ],
            [
                'recipe_id' => 32,
                'steps_num' => 4,
                'steps_desc' => 'Drain and discard any fat from the cooked beef. Stir condensed soup and garlic powder into the beef. Simmer for 10 minutes, stirring occasionally.'
            ],
            [
                'recipe_id' => 32,
                'steps_num' => 5,
                'steps_desc' => 'Remove beef from the heat. Add egg noodles and stir to combine. Stir in sour cream and season with salt and pepper.'
            ],
            [
                'recipe_id' => 32,
                'steps_num' => 6,
                'steps_desc' => 'Serve hot and enjoy!'
            ],
            [
                'recipe_id' => 33,
                'steps_num' => 1,
                'steps_desc' => 'Heat oil in a large stockpot or turkey fryer to 350 degrees F (175 degrees C). Make sure the fryer is located outdoors in a safe area, preferably on dirt or pavement, and far away from buildings, wooden decks, or other objects. Keep a fire extinguisher handy, just in case.'
            ],
            [
                'recipe_id' => 33,
                'steps_num' => 2,
                'steps_desc' => 'Ensure that the turkey is completely thawed. Cut any extra skin away from the neck area and make sure neck hole is at least 1 inch in diameter.'
            ],
            [
                'recipe_id' => 33,
                'steps_num' => 3,
                'steps_desc' => 'Pat the bird completely dry with paper towels, then rub liberally with salt and pepper on both the outside and the inside.'
            ],
            [
                'recipe_id' => 33,
                'steps_num' => 4,
                'steps_desc' => 'Place turkey into a drain basket, neck-side first. Working slowly and carefully, gently lower the basket into the hot oil to completely cover the turkey.'
            ],
            [
                'recipe_id' => 33,
                'steps_num' => 5,
                'steps_desc' => 'Maintain the temperature of the oil at 350 degrees F (175 degrees C), and cook turkey for 3 1/2 minutes per pound, about 35 minutes.'
            ],
            [
                'recipe_id' => 33,
                'steps_num' => 6,
                'steps_desc' => 'Carefully remove basket from oil, and drain turkey. Insert a meat thermometer into the thickest part of the thigh; the internal temperature must be 180 degrees F (80 degrees C). Allow to rest for 15 minutes before slicing.'
            ],
            [
                'recipe_id' => 34,
                'steps_num' => 1,
                'steps_desc' => 'Gather all ingredients.'
            ],
            [
                'recipe_id' => 34,
                'steps_num' => 2,
                'steps_desc' => 'Whisk together stock, cream, flour, soy sauce, 1/2 teaspoon pepper, and 1/2 teaspoon rosemary in a large saucepan over low heat until smooth.'
            ],
            [
                'recipe_id' => 34,
                'steps_num' => 3,
                'steps_desc' => 'Cook, stirring occasionally, until thickened, about 10 minutes.'
            ],
            [
                'recipe_id' => 34,
                'steps_num' => 4,
                'steps_desc' => 'Stir in thawed meatballs, and continue cooking until meatballs are heated through, about 5 more minutes. An instant-read thermometer inserted into the center of the meatballs should read at least 160 degrees F (71 degrees C).'
            ],
            [
                'recipe_id' => 34,
                'steps_num' => 5,
                'steps_desc' => 'Taste and adjust seasonings before serving.'
            ],
            [
                'recipe_id' => 35,
                'steps_num' => 1,
                'steps_desc' => 'Mix together the flour, garlic powder, salt, pepper, and Italian seasoning on a plate. One by one, dredge the chicken pieces lightly in the prepared flour mixture.'
            ],
            [
                'recipe_id' => 35,
                'steps_num' => 2,
                'steps_desc' => 'Heat the olive oil in a large skillet over medium-high heat. Cook the chicken pieces for 2 minutes per side, or until nicely browned. Remove from the skillet and set aside.'
            ],
            [
                'recipe_id' => 35,
                'steps_num' => 3,
                'steps_desc' => 'Using the same skillet, cook and stir the garlic and onion until translucent, about 5 minutes.'
            ],
            [
                'recipe_id' => 35,
                'steps_num' => 4,
                'steps_desc' => 'Pour the white wine into the skillet, turn the heat to high, and cook until the wine reduces by half, 4 to 5 minutes.'
            ],
            [
                'recipe_id' => 35,
                'steps_num' => 5,
                'steps_desc' => 'Add the chicken broth, lemon juice, artichoke hearts, reserved artichoke liquid, and browned chicken to the skillet.'
            ],
            [
                'recipe_id' => 35,
                'steps_num' => 6,
                'steps_desc' => 'Reduce the heat to medium and cook until the sauce thickens, about 20 minutes. Stir in the capers and butter.'
            ],
            [
                'recipe_id' => 36,
                'steps_num' => 1,
                'steps_desc' => "Set an oven rack about 6 inches from the heat source and preheat the oven's broiler. Line a baking sheet with aluminum foil; spray with cooking spray."
            ],
            [
                'recipe_id' => 36,
                'steps_num' => 2,
                'steps_desc' => "Arrange haddock fillets on the prepared baking sheet."
            ],
            [
                'recipe_id' => 36,
                'steps_num' => 3,
                'steps_desc' => "Mix onion powder, paprika, garlic powder, black pepper, salt, and cayenne pepper in a small bowl; sprinkle seasoning over fish, then dot with butter."
            ],
            [
                'recipe_id' => 36,
                'steps_num' => 4,
                'steps_desc' => "Broil in the preheated oven until fish flakes easily with a fork, 6 to 8 minutes. Serve with lemon wedges."
            ],
            [
                'recipe_id' => 37,
                'steps_num' => 1,
                'steps_desc' => 'Bring a large pot of lightly salted water to a boil. Add angel hair pasta and cook, uncovered, for 4 to 5 minutes or until al dente; drain.'
            ],
            [
                'recipe_id' => 37,
                'steps_num' => 2,
                'steps_desc' => "While pasta is cooking, melt butter in a large skillet over medium heat. Stir in garlic and cook just until fragrant and softened, about 1 minute. Slice any scallops over 3/4-inch thick in half so they'll cook evenly."
            ],
            [
                'recipe_id' => 37,
                'steps_num' => 3,
                'steps_desc' => 'Stir scallops, basil, and parsley into the skillet. Cook and gently stir just until scallops feel slightly firm when pressed with a finger, about 2 to 3 minutes. Scallops will become tough and chewy if overcooked.'
            ],
            [
                'recipe_id' => 37,
                'steps_num' => 4,
                'steps_desc' => 'Reduce heat to low; stir in lemon juice and season with salt and pepper. Pour in cream if you like a thicker sauce and cook just until the sauce begins to simmer.'
            ],
            [
                'recipe_id' => 37,
                'steps_num' => 5,
                'steps_desc' => 'Ladle scallops and sauce over hot pasta and sprinkle Parmesan cheese over top.'
            ],
            [
                'recipe_id' => 38,
                'steps_num' => 1,
                'steps_desc' => 'Gather all ingredients.'
            ],
            [
                'recipe_id' => 38,
                'steps_num' => 2,
                'steps_desc' => 'Preheat the oven to 450 degrees F (230 degrees C). Line a baking sheet with aluminum foil and spray with cooking spray.'
            ],
            [
                'recipe_id' => 38,
                'steps_num' => 3,
                'steps_desc' => 'Place egg in a shallow dish. Place panko, garlic powder, onion powder, paprika, salt, and pepper into a large zip-top freezer bag and mix well.'
            ],
            [
                'recipe_id' => 38,
                'steps_num' => 4,
                'steps_desc' => 'Dip 2 chicken strips into egg, then place into panko mixture and shake to coat. Place coated chicken pieces onto the prepared baking sheet. Repeat with remaining chicken.'
            ],
            [
                'recipe_id' => 38,
                'steps_num' => 5,
                'steps_desc' => 'Spray each chicken tender with cooking spray twice.'
            ],
            [
                'recipe_id' => 38,
                'steps_num' => 6,
                'steps_desc' => 'Bake tenders in the preheated oven for 7 minutes. Flip and continue to bake on opposite side until no longer pink in the centers, about 7 minutes more. Remove from the oven.  '
            ],
            [
                'recipe_id' => 38,
                'steps_num' => 7,
                'steps_desc' => "Set an oven rack about 6 inches from the heat source and preheat the oven's broiler."
            ],
            [
                'recipe_id' => 38,
                'steps_num' => 8,
                'steps_desc' => "Broil tenders in the preheated oven for extra crunch, about 1 to 2 minutes more."
            ],
            [
                'recipe_id' => 39,
                'steps_num' => 1,
                'steps_desc' => 'Preheat the oven to 400 degrees F (200 degrees C). Line a baking sheet with aluminum foil.'
            ],
            [
                'recipe_id' => 39,
                'steps_num' => 2,
                'steps_desc' => 'Whisk Parmesan cheese, parsley, paprika, salt, and pepper together in a shallow dish.'
            ],
            [
                'recipe_id' => 39,
                'steps_num' => 3,
                'steps_desc' => 'Coat tilapia fillets with olive oil and press into the Parmesan cheese mixture. Arrange coated fillets on the prepared baking sheet.'
            ],
            [
                'recipe_id' => 39,
                'steps_num' => 4,
                'steps_desc' => 'Bake in the preheated oven until the fish flakes easily with a fork, 10 to 12 minutes.'
            ],
            [
                'recipe_id' => 40,
                'steps_num' => 1,
                'steps_desc' => 'Stir condensed soup, chicken broth, and shredded chicken together in a large saucepan over medium-high heat until it begins to simmer.'
            ],
            [
                'recipe_id' => 40,
                'steps_num' => 2,
                'steps_desc' => 'Cut each biscuit into quarters, and gently stir into the simmering soup.'
            ],
            [
                'recipe_id' => 40,
                'steps_num' => 3,
                'steps_desc' => 'Reduce heat to medium-low, cover, and simmer until biscuits are no longer doughy in the center, 10 to 15 minutes.'
            ],
            [
                'recipe_id' => 41,
                'steps_num' => 1,
                'steps_desc' => 'Bring a large pot of lightly salted water to a boil. Cook farfalle at a boil, stirring occasionally, until cooked through yet firm to the bite, about 12 minutes; drain and transfer farfalle back to the pot.'
            ],
            [
                'recipe_id' => 41,
                'steps_num' => 2,
                'steps_desc' => 'Heat vegetable oil in a large skillet over medium heat; cook chicken in hot oil until no longer pink in the center and juices run clear, 5 to 8 minutes per side. Transfer chicken to a cutting board and slice into thin strips.'
            ],
            [
                'recipe_id' => 41,
                'steps_num' => 3,
                'steps_desc' => 'Melt 2 tablespoons butter in the same skillet; cook and stir onions in melted butter until transparent, 5 to 10 minutes. Stir mushrooms and chicken strips into onions; cook and stir until heated through, about 5 minutes. Remove the skillet from heat.'
            ],
            [
                'recipe_id' => 41,
                'steps_num' => 4,
                'steps_desc' => 'Melt 1/4 cup butter in another large skillet; stir flour into melted butter until dissolved, about 1 minute. Slowly whisk milk into flour mixture until smooth; add garlic, salt, and pepper. Bring to a boil for 1 minute; reduce heat.'
            ],
            [
                'recipe_id' => 41,
                'steps_num' => 5,
                'steps_desc' => 'Stir chicken mixture and farfalle into garlic sauce; cook and stir over medium-low heat until heated through, 2 to 3 minutes.'
            ],
            [
                'recipe_id' => 42,
                'steps_num' => 1,
                'steps_desc' => 'Preheat the oven to 450 degrees F (230 degrees C).'
            ],
            [
                'recipe_id' => 42,
                'steps_num' => 2,
                'steps_desc' => 'Place broccoli in a saucepan with enough water to cover. Bring to a boil and cook until tender, about 5 minutes. Drain.'
            ],
            [
                'recipe_id' => 42,
                'steps_num' => 3,
                'steps_desc' => 'Place the cooked broccoli in a 9 inch pie plate. Top with the chicken. In a bowl, mix the soup and milk, and pour over the chicken. Sprinkle with Cheddar cheese. Mix the melted butter with the bread crumbs, and sprinkle over the cheese.'
            ],
            [
                'recipe_id' => 42,
                'steps_num' => 4,
                'steps_desc' => 'Bake in the preheated oven until casserole is bubbly and the top is golden brown, about 15 minutes.'
            ],
            [
                'recipe_id' => 43,
                'steps_num' => 1,
                'steps_desc' => 'Preheat the oven to 400 degrees F (200 degrees C). Line a shallow baking pan with aluminum foil.'
            ],
            [
                'recipe_id' => 43,
                'steps_num' => 2,
                'steps_desc' => 'Place salmon fillets skin-side down on the prepared baking pan. Spread a thin layer of mustard on top of each fillet; season with salt and pepper. Top with bread crumbs, then drizzle with melted butter.'
            ],
            [
                'recipe_id' => 43,
                'steps_num' => 3,
                'steps_desc' => 'Bake in the preheated oven until salmon flakes easily with a fork, about 15 minutes.'
            ],
            [
                'recipe_id' => 44,
                'steps_num' => 1,
                'steps_desc' => 'Bring a large pot of lightly salted water to a boil. Cook angel hair pasta in the boiling water, stirring occasionally, until tender yet firm to the bite, 4 to 5 minutes.'
            ],
            [
                'recipe_id' => 44,
                'steps_num' => 2,
                'steps_desc' => 'Add chopped chicken, condensed soup, diced tomatoes with chile peppers, processed cheese, mushrooms, salt, and pepper.'
            ],
            [
                'recipe_id' => 44,
                'steps_num' => 3,
                'steps_desc' => 'Cook and stir over low heat until cheese is melted and mixture is heated through, about 5 minutes.'
            ],
            [
                'recipe_id' => 45,
                'steps_num' => 1,
                'steps_desc' => 'Place chicken livers in a colander; rinse with cold water and drain well. Blot dry with paper towels.'
            ],
            [
                'recipe_id' => 45,
                'steps_num' => 2,
                'steps_desc' => 'Whisk egg and milk together in a shallow dish until blended.'
            ],
            [
                'recipe_id' => 45,
                'steps_num' => 3,
                'steps_desc' => 'Place flour, garlic powder, salt, and pepper into a zip-top bag; shake to combine.'
            ],
            [
                'recipe_id' => 45,
                'steps_num' => 4,
                'steps_desc' => 'Heat oil in a deep fryer or large saucepan to 375 degrees F (190 degrees C).'
            ],
            [
                'recipe_id' => 45,
                'steps_num' => 5,
                'steps_desc' => 'Dip chicken livers in egg mixture to coat, then transfer, one at a time, into flour mixture, shaking the bag to coat completely.'
            ],
            [
                'recipe_id' => 45,
                'steps_num' => 6,
                'steps_desc' => 'Gently place coated livers, a few at a time, into hot oil; cover with a splatter screen and cook until crisp and golden brown, 5 to 6 minutes.'
            ],
            [
                'recipe_id' => 46,
                'steps_num' => 1,
                'steps_desc' => 'Preheat an outdoor grill for high heat and lightly oil the grate.'
            ],
            [
                'recipe_id' => 46,
                'steps_num' => 2,
                'steps_desc' => 'Melt butter in a small saucepan over medium-low heat; stir in minced garlic and garlic powder. Set aside.'
            ],
            [
                'recipe_id' => 46,
                'steps_num' => 3,
                'steps_desc' => 'Season both sides of each steak with salt and pepper.'
            ],
            [
                'recipe_id' => 46,
                'steps_num' => 4,
                'steps_desc' => 'Place steaks on preheated grill and cook 4 to 5 minutes per side. An instant-read thermometer inserted into the center should read 140 degrees F (60 degrees C) for medium doneness.'
            ],
            [
                'recipe_id' => 46,
                'steps_num' => 5,
                'steps_desc' => 'Transfer steaks to warmed plates; brush the tops liberally with garlic butter and allow to rest for 2 to 3 minutes before serving.'
            ],
            [
                'recipe_id' => 47,
                'steps_num' => 1,
                'steps_desc' => 'Heat olive oil and crushed garlic in a large skillet. Stir in smoked sausage slices and cook until browned on all sides.'
            ],
            [
                'recipe_id' => 47,
                'steps_num' => 2,
                'steps_desc' => 'Add pepper, onion, broccoli, chicken broth, and tomato sauce. Simmer until vegetables are tender and the liquid is absorbed, about 10 minutes.'
            ],
            [
                'recipe_id' => 47,
                'steps_num' => 3,
                'steps_desc' => 'In the meantime, cook rice according to package instructions.'
            ],
            [
                'recipe_id' => 47,
                'steps_num' => 4,
                'steps_desc' => 'Stir cooked rice into the skillet, sprinkle with cheese, and serve.'
            ],
            [
                'recipe_id' => 48,
                'steps_num' => 1,
                'steps_desc' => 'Gather all ingredients.'
            ],
            [
                'recipe_id' => 48,
                'steps_num' => 2,
                'steps_desc' => 'Preheat the oven to 425 degrees F (220 degrees C). Line a large baking sheet with aluminum foil and drizzle olive oil over foil. Place the baking sheet in the oven as it preheats.'
            ],
            [
                'recipe_id' => 48,
                'steps_num' => 3,
                'steps_desc' => 'Meanwhile, place chicken breasts between 2 sheets of plastic wrap on a solid, level surface. Firmly pound with the smooth side of a meat mallet to 1/4-inch thickness. Season both sides with salt and pepper.'
            ],
            [
                'recipe_id' => 48,
                'steps_num' => 4,
                'steps_desc' => 'Mix flour and paprika together in a shallow bowl. Whisk eggs, salt, and pepper together in a second shallow bowl. Mix bread crumbs and lemon zest together in a third shallow bowl.'
            ],
            [
                'recipe_id' => 48,
                'steps_num' => 5,
                'steps_desc' => 'Dredge one piece of chicken in flour; shake off excess. Dip into beaten egg. Lift up so excess egg drips back in the bowl. Press into bread crumbs to coat both sides. Place the breaded chicken, unstacked, onto a plate. Repeat with remaining chicken.'
            ],
            [
                'recipe_id' => 48,
                'steps_num' => 6,
                'steps_desc' => 'Remove the baking sheet from the oven. Arrange chicken in a single layer on the hot sheet. Drizzle more olive oil over each piece.'
            ],
            [
                'recipe_id' => 48,
                'steps_num' => 7,
                'steps_desc' => 'Bake in the preheated oven for 5 to 6 minutes. Flip chicken and continue baking until no longer pink in the center and the breading is lightly browned, 5 to 6 minutes more. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C).'
            ],
            [
                'recipe_id' => 49,
                'steps_num' => 1,
                'steps_desc' => 'Whisk together yogurt, garlic, lemon juice and zest, olive oil, paprika, herbes de Provence, salt, and black pepper in a medium bowl. Pour into a large resealable plastic bag. Add chicken; stir to coat. Squeeze out excess air and seal the bag. Marinate in the refrigerator for at least 3 hours.'
            ],
            [
                'recipe_id' => 49,
                'steps_num' => 2,
                'steps_desc' => 'Preheat an outdoor grill for medium-high heat and lightly oil the grate.'
            ],
            [
                'recipe_id' => 49,
                'steps_num' => 3,
                'steps_desc' => 'Make sauce: Stir together yogurt, lemon juice, and harissa in a small bowl until combined. Set aside.'
            ],
            [
                'recipe_id' => 49,
                'steps_num' => 4,
                'steps_desc' => 'Remove chicken to a plate or baking sheet lined with paper towels; discard marinade. Pat chicken dry with more paper towels. Season with a pinch of salt.'
            ],
            [
                'recipe_id' => 49,
                'steps_num' => 5,
                'steps_desc' => 'Grill chicken, skin-side down, on the preheated grill for 2 minutes. Turn over each piece and move to indirect heat. Continue grilling, turning often, with the lid down until well browned and meat is no longer pink in the center, 30 to 35 minutes. An instant-read thermometer inserted into the thickest part of the thigh, near the bone, should read 165 degrees F (74 degrees C).'
            ],
            [
                'recipe_id' => 49,
                'steps_num' => 6,
                'steps_desc' => 'Serve chicken with sauce on the side.'
            ],
            [
                'recipe_id' => 50,
                'steps_num' => 1,
                'steps_desc' => 'Combine water and anchovies in a saucepan and bring to a boil. Cook for 10 minutes. Remove anchovies.'
            ],
            [
                'recipe_id' => 50,
                'steps_num' => 2,
                'steps_desc' => 'Combine chile paste, sugar, soy sauce, and corn syrup in a bowl to make the sauce.'
            ],
            [
                'recipe_id' => 50,
                'steps_num' => 3,
                'steps_desc' => 'Add rice cakes and onion to the anchovy water in the saucepan. Add sauce. Bring to a boil and cook for 5 minutes, stirring occasionally. Add spring onion and boil 3 minutes more.'
            ],
        ]);
    }
}