const addStepButton = document.querySelector("#add-step");
const stepsContainer = document.querySelector("#steps");

let stepCount = document.querySelectorAll(".step").length;

addStepButton.addEventListener("click", () => {
    stepCount++;

    const newStep = `
    <div class="step">
      <label for="step${stepCount}">Step ${stepCount}</label>
      <input type="text" name="steps[]" id="step${stepCount}">
      <button type="submit" class="btn btn-secondary">Remove</button>
    </div>
  `;

    stepsContainer.insertAdjacentHTML("beforeend", newStep);
});

stepsContainer.addEventListener("click", (event) => {
    if (event.target.classList.contains("remove-btn")) {
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
