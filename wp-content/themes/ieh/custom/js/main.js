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

    //watch height size of screen and set backgroung img home
    var windowHeight = window.innerHeight;
    if($('#background-img-home').length > 0){
        $('#background-img-home').css('height', windowHeight);
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

            //alert("Right Offset: " + offsetRight);
            //alert("Left Offset: " + offsetLeft);
            $('.box-proporcional-img').css('padding-right', offsetRight);
        }

    });
})( jQuery );

//set image header background (DOMjs)
function setImagemHeaderBackground(imagem_bg, text_home, pageClassName){
    //document.getElementById('background-img-home').style.backgroundImage = 'url(' + imagem_bg + ')';
    document.getElementById('text-home').textContent = text_home;
    document.getElementById('background-img-home').classList.add(pageClassName);
    document.getElementById('box-text-home').classList.add('content-text-bottom');
}

function whynot(){
    alert('cxll');
}