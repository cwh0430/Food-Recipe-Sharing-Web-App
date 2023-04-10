const addStepButton = document.querySelector("#add-step");
const stepsContainer = document.querySelector("#steps");
let stepCount = document.querySelectorAll(".step").length;

const addIngredientButton = document.querySelector("#add-ingredient");
const ingredientsContainer = document.querySelector("#ingredients");
let ingredientCount = document.querySelectorAll(".ingredient").length;

addStepButton.addEventListener("click", () => {
    stepCount++;

    const newStep = `
    <div class="step">
      <label for="step${stepCount}">Step ${stepCount}</label>
      <input type="text" name="steps[]" id="step${stepCount}" class="form-control">
      <input type="submit" class="remove-step-btn btn btn-danger" value="Remove" style="display:block; margin-right:0; margin-left:auto; margin-top:5px; margin-bottom:5px;">
    </div>
  `;

    stepsContainer.insertAdjacentHTML("beforeend", newStep);
});

stepsContainer.addEventListener("click", (event) => {
    if (event.target.classList.contains("remove-step-btn")) {
        event.target.parentElement.remove();
        renumberSteps();
    }
});

function renumberSteps() {
    stepCount = document.querySelectorAll(".step").length;
    const stepLabels = stepsContainer.querySelectorAll(".step label");
    stepLabels.forEach((label, index) => {
        label.innerText = `Step ${index + 1}`;
    });
}

addIngredientButton.addEventListener("click", () => {
    ingredientCount++;

    const newIng = `
    <div class="form-group ingredient">
      <label for="ingredient${ingredientCount}">Ingredient Name</label>
      <input type="text" name="ingredients[${ingredientCount}]" id="ingredient${ingredientCount}" class="form-control" placeholder="Ingredient Name">

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="unit${ingredientCount}">Unit</label>
          <input type="text" name="unit[${ingredientCount}]" id="unit${ingredientCount}" class="form-control" placeholder="unit">
        </div>

        <div class="form-group col-md-6">
          <label for="quantity${ingredientCount}">Quantity</label>
          <input type="text" name="quantity[${ingredientCount}]" id="quantity${ingredientCount}" class="form-control" placeholder="quantity">
        </div>
      </div>

      <div class="form-group">
        <label for="additionalInfo${ingredientCount}">Additional Information (optional)</label>
        <input type="text" name="additionalInfo[${ingredientCount}]" id="additionalInfo${ingredientCount}" class="form-control"
          placeholder="additional Information (optional)">
      </div>

      <input type="submit" class="remove-ing-btn btn btn-danger" value="Remove" style="display:block; margin-right:0; margin-left:auto; margin-top:5px; margin-bottom:5px;">
    </div>
  `;

    const ingredientContainer = document.createElement("div");
    ingredientContainer.classList.add("ingredient");
    ingredientContainer.innerHTML = newIng;
    ingredientsContainer.appendChild(ingredientContainer);
});

ingredientsContainer.addEventListener("click", (event) => {
    if (event.target.classList.contains("remove-ing-btn")) {
        event.target.parentElement.remove();
    }
});
