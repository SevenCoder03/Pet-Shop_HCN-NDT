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
