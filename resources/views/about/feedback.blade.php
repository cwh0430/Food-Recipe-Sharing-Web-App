@extends('layouts.app')

<!DOCTYPE html>
<html>

<head>
    <title>FoodBank | Feedback</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style>
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
    </style>
</head>


@section('content')

    <body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <div style="padding:50px; width:60%; margin:0 auto;">
            <h1 style="text-align:center; font-weight:bold; font-size: 40px">Feedback</h1><br><br>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">First Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Last Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Country</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="none">Select Your Country</option>
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                        <option value="russia">Russia</option>
                        <option value="japan">Japan</option>
                        <option value="india">India</option>
                        <option value="china">China</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="singapore">Singapore</option>
                        <option value="korea">Korea</option>
                        <option value="mond">Mondstadt</option>
                        <option value="liyue">Liyue</option>
                        <option value="inazuma">Inazuma</option>
                        <option value="sumeru">Sumeru</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Phone Number</label>
                    <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="012-3456789"
                        pattern="[0-9]{3}-[0-9]{7}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Your experience on our website</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="experience" id="inlineRadio1"
                            value="Very Satisfied">
                        <label class="form-check-label" for="inlineRadio1">Very Satisfied</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="experience" id="inlineRadio2"
                            value="Satisfied">
                        <label class="form-check-label" for="inlineRadio2">Satisfied</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="experience" id="inlineRadio3" value="Okay">
                        <label class="form-check-label" for="inlineRadio3">Okay</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="experience" id="inlineRadio4"
                            value="Unsatisfied">
                        <label class="form-check-label" for="inlineRadio4">Unsatisfied</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="experience" id="inlineRadio5"
                            value="Very Unsatisfied">
                        <label class="form-check-label" for="inlineRadio5">Very Unsatisfied</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tell us how we can improve: </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <button class="button">Submit</button>
            </form>
        </div>

    </body>
@endsection

</html>
