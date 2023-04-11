@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
</head>

<body style="margin-top: 10%">
  <div class="container">
    <form action="/create" method="POST">
      @csrf


      {{-- Recipe Section title --}}
      <div class="text-center">
        <h1 style="margin-bottom:50px; ">New Recipe</h1>
      </div>


      {{-- Recipe Name --}}
      <div class="form-group">
        <label for="name">Recipe Title</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Insert the Recipe Title" />
        {{-- Recipe Name Error Message --}}
        @if ($errors->has('name'))
        <span class="text-danger">{{ str_replace('name', 'title', $errors->first('name')) }}</span>
        @endif
      </div>




      {{-- Recipe Description --}}
      <div class="form-group">
        <label for="desc">Brief Description</label>
        <textarea name="desc" id="desc" class="form-control" placeholder="Brief Description of the Recipe"
          style="height:100px;"></textarea>

        {{-- Recipe Description Error Message --}}
        @if ($errors->has('desc'))
        <span class="text-danger">{{ str_replace('desc', 'description', $errors->first('desc')) }}</span>
        @endif
      </div>



      {{-- Recipe Image Url --}}
      <div class="form-group">
        <label for="image">Image URL</label>
        <input type="url" name="image" id="image" class="form-control" placeholder="Paste your Image url here">
        {{-- Recipe Image Error Message --}}
        @if ($errors->has('image'))
        <span class="text-danger">{{ str_replace('image', 'image url', $errors->first('image')) }}</span>
        @endif
      </div>



      <hr style="border:1px solid #ccc; margin-top:70px; margin-bottom:70px;" title="Cooking Steps" />

      {{-- Steps Title --}}
      <div class="text-center">
        <h1 style="margin-bottom:50px;">Cooking Steps</h1>
      </div>

      {{-- Step Textbox --}}
      <div id="steps">
        <div class="step" style="margin-bottom: 30px;">
          <label for="step1">Step 1</label>
          <input type="text" name="steps[]" id="step1" class="form-control">
          {{-- Steps Textbox Error Message --}}
          @if ($errors->has('steps.*'))
          <span class="text-danger">{{ str_replace('steps.'.count($errors->get('steps.*')), 'step',
            $errors->first('steps.*')) }}</span>
          @endif
        </div>
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
          <input type="text" name="ingredients[0]" id="ingredient0" class="form-control" placeholder="Ingredient Name">
          {{-- Ingredient Error Message --}}
          @if ($errors->has('ingredients.*'))
          <span class="text-danger">{{ str_replace('ingredients.'.count($errors->get('ingredients.*')), 'ingredient',
            $errors->first('ingredients.*')) }}</span>
          @endif

        </div>

        {{-- Ingredient Unit --}}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="unit1">Unit</label>
            <input type="text" name="unit[0]" id="unit0" class="form-control" placeholder="unit">
            {{-- Unit Error Message --}}
            @if ($errors->has('unit.*'))
            <span class="text-danger">{{ str_replace('unit.'.count($errors->get('unit.*')), 'unit',
              $errors->first('unit.*')) }}</span>
            @endif
          </div>


          {{-- Ingredient Quantity --}}
          <div class="form-group col-md-6">
            <label for="quantity1">Quantity</label>
            <input type="text" name="quantity[0]" id="quantity0" class="form-control" placeholder="quantity">
            {{-- Quantity Error Message --}}
            @if ($errors->has('quantity.*'))
            <span class="text-danger">{{ str_replace('quantity.'.count($errors->get('quantity.*')), 'quantity',
              $errors->first('quantity.*')) }}</span>
            @endif
          </div>
        </div>



        {{-- Additional Info for Ingredient --}}
        <div class="form-group">
          <label for="additionalInfo1">Additional Information (optional)</label>
          <input type="text" name="additionalInfo[0]" id="additionalInfo0" class="form-control"
            placeholder="additional Information (optional)">
          {{-- Additional Info Error Message --}}
          @if ($errors->has('additionalInfo.*'))
          <span class="text-danger">{{ str_replace('additionalInfo.'.count($errors->get('additionalInfo.*')),
            'additional information',
            $errors->first('additionalInfo.*')) }}</span>
          @endif
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

  </div>



</body>

<script src="{{ asset('js/create.js') }}"></script>


</html>