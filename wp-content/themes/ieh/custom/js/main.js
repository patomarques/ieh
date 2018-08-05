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

    //menu fixed automatic when scroll
    window.onload = function() { watcherToFixedMenu() };
    window.onscroll = function() { watcherToFixedMenu() };

    var next_section     = document.getElementById('home-quem-somos');
    var menu_fixed       = document.getElementById('menu-home-content');
    var menu_fixed_col   = document.getElementById('menu-fixed-col');
    var contentSize      = next_section.offsetTop;

    function watcherToFixedMenu() {
        if (window.pageYOffset > (contentSize + 20)) {
            menu_fixed.classList.add("menu-fixed");
            menu_fixed_col.classList.add('col-lg-10');
            menu_fixed_col.classList.remove('col-lg-12');
        } else {
            menu_fixed.classList.remove("menu-fixed");
            menu_fixed_col.classList.remove('col-lg-10');
            menu_fixed_col.classList.add('col-lg-12');
        }
    }
});