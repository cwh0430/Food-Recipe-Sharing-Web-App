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
                    @if ($index > 0)
                    <input type="submit" class="remove-step-btn btn btn-danger" value="Remove"
                        style="display:block; margin-right:0; margin-left:auto; margin-top:5px; margin-bottom:5px;">
                    @endif
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

                @foreach ($recipe->getIngredients as $index => $ingredient)

                <div class="form-group ingredient">
                    <label for="ingredient{{$index}}">Ingredient Name</label>
                    <input type="text" name="ingredients[{{$index}}]" id="ingredient{{$index}}" class="form-control"
                        placeholder="Ingredient Name" value="{{$ingredient->name}}">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="unit{{$index}}">Unit</label>
                            <input type="text" name="unit[{{$index}}]" id="unit{{$index}}" class="form-control"
                                placeholder="unit" value="{{$ingredient->pivot->unit}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="quantity{{$index}}">Quantity</label>
                            <input type="text" name="quantity[{{$index}}]" id="quantity{{$index}}" class="form-control"
                                placeholder="quantity" value="{{$ingredient->pivot->quantity}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="additionalInfo{{$index}}">Additional Information (optional)</label>
                        <input type="text" name="additionalInfo[{{$index}}]" id="additionalInfo{{$index}}"
                            class="form-control" placeholder="additional Information (optional)"
                            value="{{$ingredient->pivot->additionalInfo}}">
                    </div>

                    @if ($index > 0)
                    <input type="submit" class="remove-ing-btn btn btn-danger" value="Remove"
                        style="display:block; margin-right:0; margin-left:auto; margin-top:5px; margin-bottom:5px;">

                    @endif
                </div>
                @endforeach

            </div>




    </div>

    {{-- Add More Ingredient Button --}}
    <div class="text-center" style="margin-top:50px;">
        <input type="button" id="add-ingredient" value="Add Another Ingredient" class="btn btn-primary">
    </div>

    <hr style="border:1px solid #ccc; margin-top:70px; margin-bottom:70px;" />


    {{-- Update the Recipe Button --}}
    <div class="text-center" style="margin:30px 30px">
        <input type="submit" value="Update" class="btn btn-warning btn-lg mt-6">
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