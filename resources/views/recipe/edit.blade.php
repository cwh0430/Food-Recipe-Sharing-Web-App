@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
</head>

<body style="margin-top: 10%">
    <div class="container">
        <form action="#" method="POST">
            @csrf


            {{-- Recipe Section title --}}
            <div class="text-center">
                <h1 style="margin-bottom:50px; ">Edit Recipe</h1>
            </div>


            {{-- Recipe Name --}}
            <div class="form-group">
                <label for="name">Recipe Title</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$recipe->name}}"
                    placeholder="Insert the Recipe Title" />
            </div>


            {{-- Recipe Description --}}
            <div class="form-group">
                <label for="desc">Brief Description</label>
                <textarea name="desc" id="desc" class="form-control" placeholder="Brief Description of the Recipe"
                    style="height:100px;">{{$recipe->desc}}</textarea>
            </div>


            {{-- Recipe Image Url --}}
            <div class="form-group">
                <label for="image">Image URL</label>
                <input type="url" name="image" id="image" class="form-control" value="{{$recipe->image}}"
                    placeholder="Paste your Image url here">
            </div>


            <hr style="border:1px solid #ccc; margin-top:70px; margin-bottom:70px;" title="Cooking Steps" />

            {{-- Steps Title --}}
            <div class="text-center">
                <h1 style="margin-bottom:50px;">Cooking Steps</h1>
            </div>


            {{-- Step Textbox --}}
            <div id="steps">
                @foreach ($recipe->getSteps as $index => $step)
                <div class="step" style="margin-bottom: 30px;">
                    <label for="step1">Step {{$index + 1}}</label>
                    <input type="text" name="steps[]" id="step{{$index+1}}" class="form-control"
                        value="{{$step->steps_desc}}">
                </div>
                @endforeach
            </div>


            {{-- Add More Step Button --}}
            <div class="text-center" style="margin-top:50px;">
                <input type="button" id="add-step" value="Add Another Step" class="btn btn-primary">
            </div>


            <hr style="border:1px solid #ccc; margin-top:70px; margin-bottom:70px;" />


            {{-- Ingredient Title --}}
            <div class="text-center">
                <h1 style="margin-bottom:50px;">Ingredients Information</h1>
            </div>

            {{-- Ingredient name --}}
            <div id="ingredients">
                <div class="form-group ingredient">
                    <label for="ingredient1">Ingredient Name</label>
                    <input type="text" name="ingredients[0]" id="ingredient0" class="form-control"
                        placeholder="Ingredient Name">
                </div>

                {{-- Ingredient Unit --}}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="unit1">Unit</label>
                        <input type="text" name="unit[0]" id="unit0" class="form-control" placeholder="unit">
                    </div>

                    {{-- Ingredient Quantity --}}
                    <div class="form-group col-md-6">
                        <label for="quantity1">Quantity</label>
                        <input type="text" name="quantity[0]" id="quantity0" class="form-control"
                            placeholder="quantity">
                    </div>
                </div>

                {{-- Additional Info for Ingredient --}}
                <div class="form-group">
                    <label for="additionalInfo1">Additional Information (optional)</label>
                    <input type="text" name="additionalInfo[0]" id="additionalInfo0" class="form-control"
                        placeholder="additional Information (optional)">
                </div>
            </div>

            {{-- Add More Ingredient Button --}}
            <div class="text-center" style="margin-top:50px;">
                <input type="button" id="add-ingredient" value="Add Another Ingredient" class="btn btn-primary">
            </div>

            <hr style="border:1px solid #ccc; margin-top:70px; margin-bottom:70px;" />


            {{-- Create the Recipe Button --}}
            <div class="text-center" style="margin:30px 30px">
                <input type="submit" value="Create" class="btn btn-success btn-lg mt-6">
            </div>
        </form>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
        @endif
    </div>


    <script src="{{ asset('js/create.js') }}"></script>

</body>

</html>