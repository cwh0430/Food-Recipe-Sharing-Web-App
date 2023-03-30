@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodBank | FAQ</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
</head>

<body style="margin-top: 5%">
    <main>
        <h1 class="faq-heading" style="font-size:50px"><b>Frequently Asked Questions</b></h1>
        <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h1 class="faq-page">How can I share my own recipe?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>To be able to share your own recipe on the website, you might need to sign in to our website
                        first. Next, press on the "create own recipe" button and fill in all the necessary recipe
                        information. After submit the recipe, you will need to wait for the approval of the admins.
                        And... DONE! Your recipe will be up on our website!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">How do I report bugs?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>You can report any existing bugs through our <a href="{{ route('feedback') }}">feedback form</a>,
                        and also can tell us how you feel about our website there ^_^</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
                <h1 class="faq-page">Can I save recipes so I can find them easily after?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Yes, you can save the recipes you like through clicking the love-shape button, and they will be
                        save in the favourite page. You can found them in the favourite page after you login to your
                        account.</p>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/faq.js') }}"></script>
</body>

</html>
