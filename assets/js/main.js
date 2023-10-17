// Background header slider
const backgroundImages = [
    "url(../../assets/images/rev-home-1.jpg)",
    "url(../../assets/images/rev-home-2.jpg)",
];

let currentImageIndex = 0;
const header = document.getElementById("header");

function prevBackground() {
    currentImageIndex =
        (currentImageIndex - 1 + backgroundImages.length) %
        backgroundImages.length;
    updateBackground();
}

function nextBackground() {
    currentImageIndex = (currentImageIndex + 1) % backgroundImages.length;
    updateBackground();
}

setInterval(() => {
    nextBackground();
}, 5000);

function updateBackground() {
    header.style.backgroundImage = backgroundImages[currentImageIndex];
}

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

// Filter product trending
function filterProducts(category, button) {
    const products = document.querySelectorAll(".product");
    products.forEach((product) => {
        const categories = product.getAttribute("data-category");
        if (categories) {
            const categoriesArray = categories.split(" ");
            if (categoriesArray.includes(category)) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        }
    });
    const buttons = document.querySelectorAll(".trending__btn");
    buttons.forEach((btn) => {
        btn.classList.remove("trending--active");
    });

    button.classList.add("trending--active");
}

window.addEventListener("load", function () {
    const allItemsButton = document.querySelector(
        ".trending__btn.trending--active"
    );
    if (allItemsButton) {
        filterProducts("all", allItemsButton);
    }
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

// Email form

const emailInput = document.getElementById("email__form");

emailInput.addEventListener("focus", () => {
    emailInput.removeAttribute("placeholder");
});

emailInput.addEventListener("blur", () => {
    emailInput.setAttribute("placeholder", "Enter your email...");
});
