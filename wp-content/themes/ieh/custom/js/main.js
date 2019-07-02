(function ($) {
  $('a[href*=#]').click(function(event){
    $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    event.preventDefault();
  });

  //if ( window.location.pathname !== '/' ) {

    var jump = function(e)
    {
      if (e){
        e.preventDefault();
        var target = $(this).attr("href");
      }else{
        var target = location.hash;
      }

      $('html,body').animate(
          {
            scrollTop: $(target).offset().top
          },2000,function()
          {
            location.hash = target;
          });

    };

    jQuery('html, body').hide();

    $('a[href^=#]').bind("click", jump);

    if (location.hash){
      setTimeout(function(){
        $('html, body').scrollTop(0).show();
        jump();
      }, 0);
    }else{
      $('html, body').show();
    }

  //}

})(jQuery);


jQuery(document).ready(function ($) {

  if ($('.tiny-slider-inner').length) {
    //banner slider (home)
    var slider = tns({
      container: '.tiny-slider-inner',
      items: 1,
      slideBy: 'page',
      autoplay: true,
      autoplayButtonOutput: false,
      controlsContainer: ".customized-arrows",
      controlsPosition: 'bottom',
      nav: false,
      //centerMode: true,
      accessibility: true,
      mouseDrag: true
      // autoHeight: true,
      // autoWidth: false
      //center: true,
    });

    slider.play();
  }

  //orderna os apoiadores
  $(".list-parceiros-apoiadores li").sort(sort_li).appendTo('.list-parceiros-apoiadores');
  function sort_li(a, b) {
    return ($(b).data('ordem')) < ($(a).data('ordem')) ? 1 : -1;
  }

  //orderna as linhas de ação (boxes)
  if ($("squaregrid").length > 0) {
    $("squaregrid .item").sort(sort_li).appendTo('squaregrid');
    function sort_li(a, b) {
      return ($(b).data('ordem')) < ($(a).data('ordem')) ? 1 : -1;
    }
  }

  //orderna as linhas de ação (content blocks)
  if ($(".container-linhas-acao").length > 0) {
    $(".container-linhas-acao .row-nossos-projetos").sort(sort_li).appendTo('.container-linhas-acao');
    function sort_li(a, b) {
      return ($(b).data('ordem')) < ($(a).data('ordem')) ? 1 : -1;
    }
  }

  if ($('.slider').length > 0) {
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

  $(function () {
    $('.toggle-overlay').click(function () {
      $('aside').toggleClass('open');
    });
  });

  if ($(window).width() < 992) {
    $('#menu-bars-x').click(function () {
      $(this).toggleClass('open');
      $('aside').toggleClass('open');
      $('.home-begin-content').toggleClass('hide-fake');
    });
  }

  $("a[href='#back-to-top']").click(function () {
    $('html, body').animate({
      scrollTop: $("#page-content").offset().top
    }, 600);
  });

  if ($('.home').length === 0) {
    $(".square-content").click(function (e) {
      e.preventDefault();
      var scrollToSection = $(this).data('scroll');

      $('html, body').animate({
        scrollTop: $("#" + scrollToSection).offset().top - 120
      }, 600);
      return false;
    });
  }
});

(function ($) {

  $(window).load(function () {
    if ($('.page-o-que-fazemos').length > 0 && $(window).width() > 800) {

      var divReference = document.getElementById('content-text-oq-fazemos');

      // Get all offsets
      var offset = divReference.getBoundingClientRect();

      // Offset of the div from the right side of the viewport
      var offsetRight = document.documentElement.clientWidth - offset.right;

      // Offset of the div from the left side of the viewport
      //var offsetLeft = offset.left;

      $('.box-proporcional-img').css('padding-right', offsetRight);
    }

    $('a[href*=#].link-menu').click(function (event) {
      event.preventDefault();
      distanteTop = 0;
      if (screen.width < 768) {
        distanteTop = -80;
      }

      $section = $.attr(this, 'href').split("#");
      $section = '#' + $section[1];
      $('#menu-bars-x').click();

      if($($section).length > 0){
        $('html, body').animate({
          scrollTop: $($section).offset().top - distanteTop
        }, 2000);
      }

    });
  });

  if ($('#background-img-home').length > 0) {
    var windowHeight = window.innerHeight;
    $('#background-img-home').css('height', windowHeight);
  }
})(jQuery);

//set background baner-im-home height
(function ($) {
  function setBgImgHeader() {
    var bg_img_content = $('#background-img-home');
    if (bg_img_content.length > 0) {
      bg_img_content.css('height', window.innerHeight);
    }
  }

  $(document).on('load', function () {
    setBgImgHeader();
  });

  $(window).on('resize', function () {
    setBgImgHeader();
  });
})(jQuery);