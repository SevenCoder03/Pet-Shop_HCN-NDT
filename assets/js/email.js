// Email form

const emailInput = document.getElementById("email__form");

emailInput.addEventListener("focus", () => {
    emailInput.removeAttribute("placeholder");
});

emailInput.addEventListener("blur", () => {
    emailInput.setAttribute("placeholder", "Enter your email...");
});
