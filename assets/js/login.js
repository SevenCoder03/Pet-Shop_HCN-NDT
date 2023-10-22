// Login form

var account = document.getElementById("account");
var loginForm = document.getElementById("login__form");
const unameInput = document.getElementById("login-form__uname");
const pswInput = document.getElementById("login-form__psw");

account.addEventListener("click", function () {
    if (loginForm.style.display === "block") {
        loginForm.style.display = "none";
        unameInput.value = "";
        pswInput.value = "";
    } else {
        loginForm.style.display = "block";
    }
});

// Username form

unameInput.addEventListener("focus", () => {
    unameInput.removeAttribute("placeholder");
});

unameInput.addEventListener("blur", () => {
    unameInput.setAttribute("placeholder", "Username");
});

// psw form

pswInput.addEventListener("focus", () => {
    pswInput.removeAttribute("placeholder");
});

pswInput.addEventListener("blur", () => {
    pswInput.setAttribute("placeholder", "Password");
});

// Eye psw
const eyeOpen = document.querySelector(".login-form__eye-open");
const eyeClose = document.querySelector(".login-form__eye-close");

eyeOpen.addEventListener("click", function () {
    eyeOpen.classList.add("hidden");
    eyeClose.classList.remove("hidden");
    pswInput.setAttribute("type", "password");
});

eyeClose.addEventListener("click", function () {
    eyeClose.classList.add("hidden");
    eyeOpen.classList.remove("hidden");
    pswInput.setAttribute("type", "text");
});

// Eye psw 2
const pswInput2 = document.querySelector(".login-form__psw-2");
const eyeOpen2 = document.querySelector(".eye-open-2");
const eyeClose2 = document.querySelector(".eye-close-2");

eyeOpen2.addEventListener("click", function () {
    eyeOpen2.classList.add("hidden");
    eyeClose2.classList.remove("hidden");
    pswInput2.setAttribute("type", "password");
});

eyeClose2.addEventListener("click", function () {
    eyeClose2.classList.add("hidden");
    eyeOpen2.classList.remove("hidden");
    pswInput2.setAttribute("type", "text");
});
