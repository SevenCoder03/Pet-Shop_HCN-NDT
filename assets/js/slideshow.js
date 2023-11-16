var imgSlideshow = document.querySelector(".slideshow__img");
var listImg = document.querySelectorAll(".slideshow__list img");
var prevBtn = document.querySelector(".prev");
var nextBtn = document.querySelector(".next");
var indexSlideshow = document.getElementById("slideshow__index");

var currentIndex = 0;

function updateImgByIndex(index) {
    document.querySelectorAll(".slideshow__item").forEach((item) => {
        item.classList.remove("active");
    });

    currentIndex = index;
    imgSlideshow.src = listImg[index].getAttribute("src");
    listImg[index].parentElement.classList.add("active");
    indexSlideshow.innerHTML = currentIndex + 1;
}

listImg.forEach((imgElement, index) => {
    imgElement.addEventListener("click", (e) => {
        imgSlideshow.style.opacity = "0";

        setTimeout(() => {
            updateImgByIndex(index);
            imgSlideshow.style.opacity = "1";
        }, 400);
    });
});

prevBtn.addEventListener("click", (e) => {
    if (currentIndex == 0) {
        currentIndex = listImg.length - 1;
    } else {
        currentIndex--;
    }

    imgSlideshow.style.animation = "";
    imgSlideshow.style.opacity = "0";
    setTimeout(() => {
        updateImgByIndex(currentIndex);
        imgSlideshow.style.opacity = "1";
        imgSlideshow.style.animation = "slideLeft 1s ease-in-out forwards";
    }, 400);
});

nextBtn.addEventListener("click", (e) => {
    if (currentIndex == listImg.length - 1) {
        currentIndex = 0;
    } else {
        currentIndex++;
    }

    imgSlideshow.style.animation = "";
    imgSlideshow.style.opacity = "0";
    setTimeout(() => {
        updateImgByIndex(currentIndex);
        imgSlideshow.style.opacity = "1";
        imgSlideshow.style.animation = "slideRight 1s ease-in-out forwards";
    }, 400);
});
