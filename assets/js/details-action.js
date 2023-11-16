// Lấy các phần tử DOM của các nút và nội dung tương ứng
const buttons = document.querySelectorAll(".label__action button");
const contents = document.querySelectorAll(".label__content > *");

// Ẩn toàn bộ nội dung ban đầu ngoại trừ phần Description
contents.forEach((content, index) => {
    if (index !== 0) {
        content.style.display = "none";
    }
});

// Gắn sự kiện click cho các nút
buttons.forEach((button, index) => {
    button.addEventListener("click", () => {
        contents.forEach((content, i) => {
            content.style.display = index === i ? "block" : "none";
        });

        // Thêm lớp "label--active" vào nút được bấm và loại bỏ khỏi các nút khác
        buttons.forEach((btn, i) => {
            btn.classList.toggle("label--active", i === index);
        });
    });
});
