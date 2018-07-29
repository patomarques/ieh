jQuery(document).ready(function($){
    $(".slider").slick({
        dots: true,
        speed: 600,
        autoplay: false,
        arrows: true,
        nextArrow: '<i class="icon-arrow-right"></i>',
        prevArrow: '<i class="icon-arrow-left"></i>',
        draggable: true,
        pauseOnHover: true
    });
});