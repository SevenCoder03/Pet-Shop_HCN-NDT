$(document).ready(function () {
    $(".categories__list").slick({
        infinite: true,
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: false,
        prevArrow: $(".prev-1"),
        nextArrow: $(".next-1"),
    });
});

$(document).ready(function () {
    $(".list-dog").slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: false,
        prevArrow: $(".prev-2"),
        nextArrow: $(".next-2"),
    });
});

$(document).ready(function () {
    $(".list-cat").slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: false,
        prevArrow: $(".prev-3"),
        nextArrow: $(".next-3"),
    });
});

$(document).ready(function () {
    $(".viewed__list").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: false,
        prevArrow: $(".prev-4"),
        nextArrow: $(".next-4"),
    });
});
