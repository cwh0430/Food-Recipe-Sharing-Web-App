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
  <div class="container">
    <form action="#" method="POST">
      @csrf

      <h2>Cooking Steps</h2>

      <div id="steps">
        <div class="step">
          <label for="step1">Step 1</label>
          <input type="text" name="steps[]" id="step1">
        </div>
      </div>
      
      <button type="button" id="add-step">Add Another Step</button>
      <button type="submit">Save</button>
    </form>
  </div>


  <script src="{{ asset('js/create.js') }}"></script>

</body>

</html>