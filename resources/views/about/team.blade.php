@extends('layouts.app')
<!DOCTYPE html>
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

        .column {
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

        .container {
            padding: 10px 16px;
        }

        .container::after,
        .row::after {
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
            width: 50%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

@section('content')
    <div class="about-section">
        <h1>About Our Team</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div>
    <br><br><br>
    <h2 style="text-align:center">Our Team Members</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                    <img src="https://wallpapers-clan.com/wp-content/uploads/2022/09/genshin-impact-hu-tao-pfp-31.jpg"
                        alt="Hu Tao" style="width:20%; float:left; margin-right:5%;">
                    <h2>Hu Tao</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>hutao@example.com</p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <img src="https://wallpapers-clan.com/wp-content/uploads/2022/09/genshin-impact-hu-tao-pfp-31.jpg"
                        alt="Hu Tao" style="width:20%; float:left; margin-right:5%;">
                    <h2>Hu Tao</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>hutao@example.com</p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <img src="https://wallpapers-clan.com/wp-content/uploads/2022/09/genshin-impact-hu-tao-pfp-31.jpg"
                        alt="Hu Tao" style="width:20%; float:left; margin-right:5%;">
                    <h2>Hu Tao</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>hutao@example.com</p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <img src="https://wallpapers-clan.com/wp-content/uploads/2022/09/genshin-impact-hu-tao-pfp-31.jpg"
                        alt="Hu Tao" style="width:20%; float:left; margin-right:5%;">
                    <h2>Hu Tao</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>hutao@example.com</p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <img src="https://wallpapers-clan.com/wp-content/uploads/2022/09/genshin-impact-hu-tao-pfp-31.jpg"
                        alt="Hu Tao" style="width:20%; float:left; margin-right:5%;">
                    <h2>Hu Tao</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>hutao@example.com</p><br><br>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
@endsection

</html>
