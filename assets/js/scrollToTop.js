// Scroll To Top
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var scrollToTopButton = document.getElementById("scrollToTopButton");

    if (
        document.body.scrollTop > 300 ||
        document.documentElement.scrollTop > 300
    ) {
        scrollToTopButton.classList.add("show");
    } else {
        scrollToTopButton.classList.remove("show");
    }
}

document.getElementById("scrollToTopButton").onclick = function () {
    scrollToTop();
};

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}
