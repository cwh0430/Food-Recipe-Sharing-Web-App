@extends('layouts.app')

@section('content')

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

    <script>
        const addStepButton = document.querySelector('#add-step');
        const stepsContainer = document.querySelector('#steps');
      
        let stepCount = 1;
      
        addStepButton.addEventListener('click', () => {
          stepCount++;
      
          const newStep = `
            <div class="step">
              <label for="step${stepCount}">Step ${stepCount}</label>
              <input type="text" name="steps[]" id="step${stepCount}">
            </div>
          `;
      
          stepsContainer.insertAdjacentHTML('beforeend', newStep);
        });
    </script>
</div>

@endsection