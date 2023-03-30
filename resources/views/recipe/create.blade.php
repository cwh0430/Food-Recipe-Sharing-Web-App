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
    <form action="#" method="POST">
      @csrf

      <input type="text" name="title" placeholder="Insert the Recipe Title" style="width:80%;" />

      <h2>Cooking Steps</h2>

      <div id="steps">
        <div class="step">
          <label for="step1">Step 1</label>
          <input type="text" name="steps[]" id="step1">
        </div>
      </div>

      <button type="button" id="add-step">Add Another Step</button>



      <h2>Adding Ingredients</h2>

      <div id="ingredients">
        <div class="ingedient">
          <label for="ingredient1">Ingredient</label>
          <input type="text" name="ingredients[]" id="ingredient1">
          <input type="text" name="unit" id="unit">
          <input type="text" name="amount" id="amount">


        </div>
      </div>

      <button type="button" id="add-ingredient">Add Another Ingredient</button>

      <button type="submit">Save</button>
    </form>
  </div>


  <script src="{{ asset('js/create.js') }}"></script>

</body>

</html>