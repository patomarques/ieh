jQuery(document).ready(function($){
    if($('.slider').length > 0){
        $(".slider").slick({
            dots: true,
            speed: 1200,
            autoplay: true,
            arrows: true,
            nextArrow: '<i class="icon-arrow-right"></i>',
            prevArrow: '<i class="icon-arrow-left"></i>',
            draggable: true,
            pauseOnHover: true
        });
    }
    //watcherToFixedMenu();

    $('a[href*=#]').click(function(event){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - 100
        }, 500);
        event.preventDefault();
    });

//    $('aside').toggleClass('open');
    $(function() {
        $('.toggle-overlay').click(function() {
            $('aside').toggleClass('open');
        });
    });

    $('#menu-bars-x').click(function(){
        $(this).toggleClass('open');
        $('aside').toggleClass('open');
    });
    //$('.fm-scale').css('display', 'hidden !important');

    // $('.button_container').on('click', function(){
    //    console.log('nada');
    //    $('html').toggle('container-screen');
    // });
});

window.onscroll = function() { watcherToFixedMenu() };

function watcherToFixedMenu() {
    var next_section     = document.getElementById('home-quem-somos');
    var menu_fixed       = document.getElementById('menu-home-content');
    var menu_fixed_col   = document.getElementById('menu-fixed-col');
    var page_content     = document.getElementById('page-content');
//    var contentSize      = page_content.offsetTop;

    //menu fixed automatic when scroll
    if(typeof(next_section) != 'undefined' && next_section != null){
        contentSize      = next_section.offsetTop;
        window.onload = function() { watcherToFixedMenu(contentSize) };
        window.onscroll = function() { watcherToFixedMenu(contentSize) };
    }

    if(typeof(page_content) != 'undefined' && page_content != null){
        contentSize      = page_content.offsetTop;
        window.onload = function() { watcherToFixedMenu(contentSize) };
        window.onscroll = function() { watcherToFixedMenu(contentSize) };
    }

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

//set image header background (DOMjs)
function setImagemHeaderBackground(imagem_bg, text_home, pageClassName){
    document.getElementById('background-img-home').style.backgroundImage = 'url(' + imagem_bg + ')';
    document.getElementById('text-home').textContent = text_home;
    document.getElementById('background-img-home').classList.add(pageClassName);
    document.getElementById('box-text-home').classList.add('content-text-bottom');
}