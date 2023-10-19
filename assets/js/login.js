// Login form

var account = document.getElementById("account");
var loginForm = document.getElementById("login__form");
var usernameInput = document.getElementById("uname__form");
var passwordInput = document.getElementById("psw__form");

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

const unameInput = document.getElementById("uname__form");

unameInput.addEventListener("focus", () => {
    unameInput.removeAttribute("placeholder");
});

unameInput.addEventListener("blur", () => {
    unameInput.setAttribute("placeholder", "Username");
});

// psw form

const pswInput = document.getElementById("psw__form");

pswInput.addEventListener("focus", () => {
    pswInput.removeAttribute("placeholder");
});

pswInput.addEventListener("blur", () => {
    pswInput.setAttribute("placeholder", "Password");
});
