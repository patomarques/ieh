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

    $('a[href*=#].link-menu').click(function(event){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - 80
        }, 2000);
        event.preventDefault();
    });

    $(function() {
        $('.toggle-overlay').click(function() {
            $('aside').toggleClass('open');
        });
    });

    $('#menu-bars-x').click(function(){
        $(this).toggleClass('open');
        $('aside').toggleClass('open');
    });


    $("a[href='#back-to-top']").click(function() {
        // $("html, body").animate({ scrollTop: 0 }, "slow");
        // return false;
        $('html, body').animate({
            scrollTop: $("#page-content").offset().top
        }, 600);

    });

    //console.log($('.home').length);
    if($('.home').length == 0){
        $(".square-content").click(function(e) {
            e.preventDefault();
            var scrollToSection = $(this).data('scroll');

            $('html, body').animate({
                scrollTop: $("#" + scrollToSection).offset().top - 120
            }, 600);
            return false;
        });
    }




    // $('#btn-call-modal').on('click', function(e){
    //     e.preventDefault();
    //     console.log('yay');
    //     $('#modal-fale-conosco').on('shown.bs.modal', function () {
    //         //$('#myInput').trigger('focus')
    //     })
    //     return false;
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