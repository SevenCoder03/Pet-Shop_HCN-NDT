// Search form

const searchInput = document.getElementById("search__form");

searchInput.addEventListener("focus", () => {
    searchInput.removeAttribute("placeholder");
});

searchInput.addEventListener("blur", () => {
    searchInput.setAttribute("placeholder", "Search products...");
});

// Login form

var account = document.getElementById("account");
var loginForm = document.getElementById("login__form");

account.addEventListener("click", function () {
    if (loginForm.style.display === "block") {
        loginForm.style.display = "none";
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

// Brands hover

const brandList = document.querySelectorAll(".brands__item");

brandList.forEach((brands__item) => {
    brands__item.addEventListener("mouseenter", () => {
        brandList.forEach((otherBrand) => {
            if (otherBrand !== brands__item) {
                otherBrand.style.filter = "grayscale(100%) opacity(0.8)";
            }
        });
    });

    brands__item.addEventListener("mouseleave", () => {
        brandList.forEach((otherBrand) => {
            otherBrand.style.filter = "none";
        });
    });
});
