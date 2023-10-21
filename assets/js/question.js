// Name form

const nameInput = document.getElementById("question-form__name");

nameInput.addEventListener("focus", () => {
    nameInput.removeAttribute("placeholder");
});

nameInput.addEventListener("blur", () => {
    nameInput.setAttribute("placeholder", "Name");
});

// Email form

const emailInput = document.getElementById("question-form__email");

emailInput.addEventListener("focus", () => {
    emailInput.removeAttribute("placeholder");
});

emailInput.addEventListener("blur", () => {
    emailInput.setAttribute("placeholder", "Email");
});
