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

      <div class="text-center">
        <h1 style="margin-bottom:50px; ">New Recipe</h1>
      </div>


      <div class="form-group">
        <label for="name">Recipe Title</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Insert the Recipe Title" />
      </div>


      <div class="form-group">
        <label for="desc">Brief Description</label>
        <textarea name="desc" id="desc" class="form-control" placeholder="Brief Description of the Recipe"
          style="height:100px;"></textarea>
      </div>


      <div class="form-group">
        <label for="image">Image URL</label>
        <input type="url" name="image" id="image" class="form-control" placeholder="Paste your Image url here">
      </div>


      <hr style="border:1px solid #ccc; margin-top:70px; margin-bottom:70px;" title="Cooking Steps" />

      <div class="text-center">
        <h1 style="margin-bottom:50px;">Cooking Steps</h1>
      </div>

      <div id="steps">
        <div class="step" style="margin-bottom: 30px;">
          <label for="step1">Step 1</label>
          <input type="text" name="steps[]" id="step1" class="form-control">
        </div>
      </div>


      <div class="text-center" style="margin-top:50px;">
        <input type="button" id="add-step" value="Add Another Step" class="btn btn-primary">
      </div>


      <hr style="border:1px solid #ccc; margin-top:70px; margin-bottom:70px;" />


      <div class="text-center">
        <h1 style="margin-bottom:50px;">Ingredients Information</h1>
      </div>

      <div id="ingredients">
        <div class="form-group ingredient">
          <label for="ingredient1">Ingredient Name</label>
          <input type="text" name="ingredients[0]" id="ingredient0" class="form-control" placeholder="Ingredient Name">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="unit1">Unit</label>
            <input type="text" name="unit[0]" id="unit0" class="form-control" placeholder="unit">
          </div>

          <div class="form-group col-md-6">
            <label for="quantity1">Quantity</label>
            <input type="text" name="quantity[0]" id="quantity0" class="form-control" placeholder="quantity">
          </div>
        </div>

        <div class="form-group">
          <label for="additionalInfo1">Additional Information (optional)</label>
          <input type="text" name="additionalInfo[0]" id="additionalInfo0" class="form-control"
            placeholder="additional Information (optional)">
        </div>
      </div>


      {{-- <div id="ingredients">
        <div class="ingedient">
          <label for="ingredient1">Ingredient</label>
          <input type="text" name="ingredients[0]" id="ingredient0" placeholder="Ingredient Name">
          <input type="text" name="unit[0]" id="unit0" placeholder="unit">
          <input type="text" name="quantity[0]" id="quantity0" placeholder="quantity">
          <input type="text" name="additionalInfo[0]" id="additionalInfo0"
            placeholder="additional Information (optional)">



        </div>
      </div> --}}

      <div class="text-center" style="margin-top:50px;">
        <input type="button" id="add-ingredient" value="Add Another Ingredient" class="btn btn-primary">
      </div>

      <hr style="border:1px solid #ccc; margin-top:70px; margin-bottom:70px;" />


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