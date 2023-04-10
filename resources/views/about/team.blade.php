@extends('layouts.app')
<!DOCTYPE html>
<html>

<head>
    <title>FoodBank | About Our Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column2 {
            float: left;
            /* width: 33.3%; */
            width: 50%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container2 {
            padding: 10px 16px;
            /* float: right; */
        }

        .container2::after,
        .row2::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            transition: 0.5s;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column2 {
                width: 100%;
                display: block;
            }
        }

        img {
            width: 28%;
            float: left;
            margin-left: 5%;
            margin-right: 5%;
        }
    </style>
</head>

@section('content')
    <div class="about-section">
        <h1>About Our Team</h1>
        <p style="text-align: justify">Our team working on FoodBank is a group of highly skilled and motivated individuals
            with a passion for creating an exceptional user experience. The team consists of web developers, designers, and
            content creators who work collaboratively to design, develop and maintain the website. Each member of the team
            brings a unique set of skills and expertise to the project, allowing us to create a website that is not only
            visually appealing but also functional and easy to use.</p>
        <p style="text-align: justify">Our developers have a deep understanding of web technologies and programming languages
            such as PHP, JavaScript, and CSS, allowing them to build a robust and scalable web application. They work
            closely with our designers to ensure that the website's user interface and user experience are optimized for
            maximum usability.</p>
    </div>
    <br><br><br>
    <h2 style="text-align:center">Our Team Members</h2>
    <div class="row2">
        <div class="column2">
            <div class="card">
                <div class="container2">
                    <img src="https://wallpapers-clan.com/wp-content/uploads/2022/09/genshin-impact-hu-tao-pfp-31.jpg"
                        alt="Hu Tao">
                    <h2>Hu Tao</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Hu Tao's antics and eccentricity belies her role as the 77th Director of the FoodBank and her talent
                        as a poet.</p>
                    <p><b>hutao@foodbank.com</b></p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <div class="container2">
                    <img src="https://static.wikia.nocookie.net/55074577-6f6c-441d-9384-ba26b4f23336/scale-to-width/755"
                        alt="Zhongli">
                    <h2>Zhong Li</h2>
                    <p class="title">Assistance</p>
                    <p>A consultant of the FoodBank, he is later revealed to be the billionaire.</p>
                    <p><b>zhongli@foodbank.com</b></p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <div class="container2">
                    <img src="https://i.pinimg.com/736x/aa/32/6a/aa326aa917ea8e66d904a89f4d0a4b3a.jpg" alt="Yoimiya">
                    <h2>Naganohara Yoimiya</h2>
                    <p class="title">Designer</p>
                    <p>She was coined as the "Queen of the Summer Festival," as they believe summer is not the same without
                        her. The best girl!</p>
                    <p><b>yoimiya@foodbank.com</b></p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <div class="container2">
                    <img src="https://videogames.si.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTk0OTA1MDMxNzc2OTM3MTIy/genshin-impact-raiden-shogun.jpg"
                        alt="Raiden">
                    <h2>Raiden Shogun</h2>
                    <p class="title">Discipline Manager</p>
                    <p>With the might of lightning at her disposal, she commits herself to the solitary pursuit of eternity.
                    </p>
                    <p><b>raiden@foodbank.com</b></p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <div class="container2">
                    <img src="https://i.pinimg.com/originals/bb/e6/6c/bbe66ccdca956f081f2d0750a44b6172.jpg" alt="Itto">
                    <h2>Arataki Itto</h2>
                    <p class="title">Entertainment Manager</p>
                    <p>Fast as the wind and mighty as thunder, he is an intrepid man with Oni blood running through his
                        veins.</p>
                    <p><b>itto@foodbank.com</b></p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
@endsection

</html>



{{-- <!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column2 {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container2 {
            padding: 0 16px;
        }

        .container2::after,
        .row2::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column2 {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

@section('content')
    <div class="about-section">
        <h1>About Us Page</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div><br><br><br>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row2">
        <div class="column2">
            <div class="card">
                <img src="https://wallpapers-clan.com/wp-content/uploads/2022/09/genshin-impact-hu-tao-pfp-31.jpg"
                    alt="Jane" style="width:100%">
                <div class="container2">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jane@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <img src="https://static.wikia.nocookie.net/55074577-6f6c-441d-9384-ba26b4f23336/scale-to-width/755"
                    alt="Mike" style="width:100%">
                <div class="container2">
                    <h2>Mike Ross</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mike@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <img src="https://i.pinimg.com/736x/aa/32/6a/aa326aa917ea8e66d904a89f4d0a4b3a.jpg" alt="John"
                    style="width:100%">
                <div class="container2">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <img src="https://videogames.si.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTk0OTA1MDMxNzc2OTM3MTIy/genshin-impact-raiden-shogun.jpg"
                    alt="John" style="width:100%">
                <div class="container2">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <img src="https://i.pinimg.com/originals/bb/e6/6c/bbe66ccdca956f081f2d0750a44b6172.jpg" alt="John"
                    style="width:100%">
                <div class="container2">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
@endsection

</html> --}}
