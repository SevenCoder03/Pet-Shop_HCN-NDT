// Lấy danh sách tất cả các thẻ <a> trong navbar
const navLinks = document.querySelectorAll(".navbar__link");

// Lặp qua từng liên kết
navLinks.forEach((link) => {
    // Kiểm tra nếu href của liên kết khớp với URL trang hiện tại
    if (link.href === window.location.href) {
        document.querySelectorAll(".navbar--active").forEach((item) => {
            item.classList.remove("navbar--active");
        });
        // Thêm lớp 'navbar--active' cho thẻ <li> của liên kết
        link.closest("li").classList.add("navbar--active");
    }
});
