const navLinks = document.querySelectorAll(".navbar__link");

navLinks.forEach((link) => {
    if (link.href === window.location.href) {
        // Kiểm tra xem link.closest("li") có phải là một phần tử hợp lệ hay không
        const closestListItem = link.closest("li");
        if (closestListItem) {
            document.querySelectorAll(".navbar--active").forEach((item) => {
                item.classList.remove("navbar--active");
            });
            closestListItem.classList.add("navbar--active");
        }
    }
});
