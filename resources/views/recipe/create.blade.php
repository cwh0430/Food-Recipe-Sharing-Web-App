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

<body style="margin-top: 5%">
  <div class="container">
    <form action="/create" method="POST">
      @csrf

      <input type="text" name="name" placeholder="Insert the Recipe Title" style="width:80%;" />


      <textarea name="desc" placeholder="Brief Description of the Recipe"></textarea>


      <input type="url" name="image" placeholder="Paste your Image url here">


      <h2>Cooking Steps</h2>

      <div id="steps">
        <div class="step">
          <label for="step1">Step 1</label>
          <input type="text" name="steps[]" id="step1">
        </div>
      </div>


      <input type="button" id="add-step" value="Add Another Step">



      <h2>Adding Ingredients</h2>

      <div id="ingredients">
        <div class="ingedient">
          <label for="ingredient1">Ingredient</label>
          <input type="text" name="ingredients[]" id="ingredient1" placeholder="Ingredient Name">
          <input type="text" name="unit[]" id="unit" placeholder="unit">
          <input type="text" name="quantity[]" id="quantity" placeholder="quantity">
          <input type="text" name="additionalInfo[]" id="additionalInfo"
            placeholder="additional Information (optional)">



        </div>
      </div>


      <button type="button" id="add-ingredient">Add Another Ingredient</button>

      <input type="submit" value="Create">
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