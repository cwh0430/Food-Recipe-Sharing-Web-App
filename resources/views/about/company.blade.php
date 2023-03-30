@extends('layouts.app')



<!DOCTYPE html>
<html>

<head>
    <title>FoodBank | About Our Company</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

@section('content')

    <body>

        <!-- Header -->
        <header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
            <img class="w3-image"
                src="https://staticcookist.akamaized.net/wp-content/uploads/sites/22/2021/09/beef-burger.jpg"
                alt="Hamburger Catering" width="1600" height="800">
            <div class="w3-display-bottomleft w3-padding-large w3-opacity">
                <h1 class="w3-xxlarge" style="color:white">FoodBank</h1>
            </div>
        </header>

        <!-- Page content -->
        <div class="w3-content" style="max-width:1100px">

            <!-- About Section -->
            <div class="w3-row w3-padding-64" id="about">
                <div class="w3-col m6 w3-padding-large w3-hide-small">
                    <img src="https://images.pexels.com/photos/376464/pexels-photo-376464.jpeg?cs=srgb&dl=pexels-ash-376464.jpg&fm=jpg"
                        class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
                </div>

                <div class="w3-col m6 w3-padding-large">
                    <h1 class="w3-center">About FoodBank</h1><br>
                    <h5 class="w3-center">Tradition since 1889</h5>
                    <p class="w3-large">Welcome to FoodBank, your one-stop destination for mouth-watering recipes that are
                        sure to tantalize your taste buds! FoodBank is a food recipe website that was founded in 2015 by a
                        group of food enthusiasts who shared a passion for cooking and exploring different cuisines. The
                        founders, who were also concerned about food insecurity in their community, wanted to create a
                        platform that not only provided delicious recipes but also helped to address hunger in their local
                        area.</p>

                    <p class="w3-large">With this goal in mind, the founders decided to donate a portion of their website's
                        advertising
                        revenue and profits to local food banks and charities that provide meals to those in need. Since its
                        inception, FoodBank has grown to become a popular website for food lovers around the world, offering
                        a wide variety of recipes ranging from traditional to contemporary cuisine.</p>

                    <p class="w3-large">At FoodBank, we believe that everyone deserves access to healthy and nutritious
                        meals, which is why
                        we have made it our mission to help fight hunger while providing tasty and easy-to-follow recipes
                        that anyone can make at home. So why not join us in our mission to make the world a better place,
                        one recipe at a time! <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
                    <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                        temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <hr>

            <!-- Menu Section -->
            <div class="w3-row w3-padding-64" id="menu">
                <div class="w3-col l6 w3-padding-large">
                    <h1 class="w3-center">Our Goal</h1><br>
                    <h4>Bread Basket</h4>
                    <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>

                    <h4>Honey Almond Granola with Fruits</h4>
                    <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>

                    <h4>Belgian Waffle</h4>
                    <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>

                    <h4>Scrambled eggs</h4>
                    <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

                    <h4>Blueberry Pancakes</h4>
                    <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
                </div>

                <div class="w3-col l6 w3-padding-large">
                    <img src="https://www.seriouseats.com/thmb/RLhIA1_2ZVdLa-uPVV9YRt75g20=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__recipes__images__2017__07__20170728-sunny-side-up-eggs-vicky-wasik-d07c5480d72e49cc85689c1d6d88495e.jpg"
                        class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
                </div>
            </div>

            <hr>

            <!-- Contact Section -->
            <div class="w3-container w3-padding-64" id="contact">
                <h1>Contact</h1><br>
                <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater
                    the food to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact
                    us.</p><br>
                <p class="w3-text-blue-grey w3-large"><b>FoodBank, Bandar Sungai Long, 43200 Kajang, Selangor</b></p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.2048698349545!2d101.79221021470437!3d3.0396735977863787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc34a8e31363c7%3A0x3bf51032c9d94ecd!2sUTAR%20KA%20Block!5e0!3m2!1sen!2smy!4v1678591593371!5m2!1sen!2smy"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe><br><br><br>
                <p>You can also contact us by phone 03-12345678 or email foodbank@foodbank.com, or you can send us feedback
                    through the <a href="{{ route('feedback') }}">feedback form</a>.</p>


                {{-- <form action="/action_page.php" target="_blank">
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
                    <p><input class="w3-input w3-padding-16" type="number" placeholder="How many people" required
                            name="People"></p>
                    <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date and time" required
                            name="date" value="2020-11-16T20:00"></p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements"
                            required name="Message"></p>
                    <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
                </form> --}}
            </div>

            <!-- End page content -->
        </div>

    </body>
@endsection

</html>
