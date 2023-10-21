// Login form

var account = document.getElementById("account");
var loginForm = document.getElementById("login__form");
var usernameInput = document.getElementById("login-form__uname");
var passwordInput = document.getElementById("login-form__psw");

account.addEventListener("click", function () {
    if (loginForm.style.display === "block") {
        loginForm.style.display = "none";
        usernameInput.value = "";
        passwordInput.value = "";
    } else {
        loginForm.style.display = "block";
    }
});

// Username form

const unameInput = document.getElementById("login-form__uname");

unameInput.addEventListener("focus", () => {
    unameInput.removeAttribute("placeholder");
});

unameInput.addEventListener("blur", () => {
    unameInput.setAttribute("placeholder", "Username");
});

// psw form

const pswInput = document.getElementById("login-form__psw");

pswInput.addEventListener("focus", () => {
    pswInput.removeAttribute("placeholder");
});

pswInput.addEventListener("blur", () => {
    pswInput.setAttribute("placeholder", "Password");
});
