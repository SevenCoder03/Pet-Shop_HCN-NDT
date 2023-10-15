$(document).ready(function () {
    $(".categories__list").slick({
        infinite: true,
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        draggable: false,
        prevArrow: $(".prev"),
        nextArrow: $(".next"),
    });
});
