// Search form

const searchInput = document.getElementById("search__form");

searchInput.addEventListener("focus", () => {
    searchInput.removeAttribute("placeholder");
});

searchInput.addEventListener("blur", () => {
    searchInput.setAttribute("placeholder", "Search products...");
});
