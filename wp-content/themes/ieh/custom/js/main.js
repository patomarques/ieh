jQuery(document).ready(function($){
    //orderna os apoiadores
    $(".list-parceiros-apoiadores li").sort(sort_li).appendTo('.list-parceiros-apoiadores');
    function sort_li(a, b) {
        return ($(b).data('ordem')) < ($(a).data('ordem')) ? 1 : -1;
    }

    //orderna as linhas de ação (boxes)
    if($("squaregrid").length > 0){
        $("squaregrid .item").sort(sort_li).appendTo('squaregrid');
        function sort_li(a, b) {
            return ($(b).data('ordem')) < ($(a).data('ordem')) ? 1 : -1;
        }
    }

    //orderna as linhas de ação (content blocks)
    if($(".container-linhas-acao").length > 0){
        $(".container-linhas-acao .row-nossos-projetos").sort(sort_li).appendTo('.container-linhas-acao');
        function sort_li(a, b) {
            return ($(b).data('ordem')) < ($(a).data('ordem')) ? 1 : -1;
        }
    }

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

    $(function() {
        $('.toggle-overlay').click(function() {
            $('aside').toggleClass('open');
        });
    });

    $('#menu-bars-x').click(function(){
        $(this).toggleClass('open');
        $('aside').toggleClass('open');
        $('.home-begin-content').toggleClass('hide-fake');
    });


    $("a[href='#back-to-top']").click(function() {
        $('html, body').animate({
            scrollTop: $("#page-content").offset().top
        }, 600);
    });

    if($('.home').length === 0){
        $(".square-content").click(function(e) {
            e.preventDefault();
            var scrollToSection = $(this).data('scroll');

            $('html, body').animate({
                scrollTop: $("#" + scrollToSection).offset().top - 120
            }, 600);
            return false;
        });
    }
});

(function($) {

    $(window).load(function() {
        //Remove text 'Maps Html' from Home Maps
        jQuery('a:contains("HTML5 Maps for WordPress")').remove();

        if($('.page-o-que-fazemos').length > 0 && $(window).width() > 800){
            // Select a div with the id 'mydiv'
            var divReference = document.getElementById('content-text-oq-fazemos');

            // Get all offsets
            var offset = divReference.getBoundingClientRect();

            // Offset of the div from the right side of the viewport
            var offsetRight = document.documentElement.clientWidth - offset.right;

            // Offset of the div from the left side of the viewport
            var offsetLeft = offset.left;

            $('.box-proporcional-img').css('padding-right', offsetRight);
        }

        $('a[href*=#].link-menu').click(function(event){
            event.preventDefault();
            distanteTop = 0;
            if(screen.width < 768){
                distanteTop = -80;
            }

            $section = $.attr(this, 'href').split("#");
            $section = '#' + $section[1];
            console.log($( $section ));
            $('#menu-bars-x').click();
            $('html, body').animate({
                scrollTop: $( $section ).offset().top - distanteTop
            }, 2000);
            event.preventDefault();
        });
    });

    if($('#background-img-home').length > 0){
        var windowHeight = window.innerHeight;
        $('#background-img-home').css('height', windowHeight);
    }
})( jQuery );

//set image header background (DOMjs)
function setImagemHeaderBackground(imagem_bg, text_home, pageClassName){
    document.getElementById('text-home').textContent = text_home;
    document.getElementById('background-img-home').classList.add(pageClassName);
    document.getElementById('box-text-home').classList.add('content-text-bottom');
}