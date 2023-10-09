// Search form

const searchInput = document.getElementById("search__form");

searchInput.addEventListener("focus", () => {
    searchInput.removeAttribute("placeholder");
});

searchInput.addEventListener("blur", () => {
    searchInput.setAttribute("placeholder", "Search products...");
});

// Brands Hover

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
