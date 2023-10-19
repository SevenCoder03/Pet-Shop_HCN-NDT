// Background header slider
const backgroundImages = [
    "url(./assets/images/rev-home-1.jpg)",
    "url(./assets/images/rev-home-2.jpg)",
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
