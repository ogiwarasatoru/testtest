jQuery(document).ready(function($) {

  /* ---------------------------------------------------------------------- */
  /* Css lazyload
  /* ---------------------------------------------------------------------- */
  $('#font-awesome-css').attr('rel', 'stylesheet')

  /* ---------------------------------------------------------------------- */
  /* LP header message height
  /* ---------------------------------------------------------------------- */
  $(window).on('load resize', function() {
    var tm = $('.header-target-message').outerHeight(true)
    var t = $('.header-title').outerHeight(true)
    var st = $('.header-sub-title').height();
    var bt = $('.header-btn').outerHeight(true)
  $('.header-message').css('height',tm+t+st+bt+'px');
  });

  /* ---------------------------------------------------------------------- */
  /* Loading animation
  /* ---------------------------------------------------------------------- */
  $('.loading-wrapper').fadeOut(2500)
  $('.loading-wrapper-section').fadeOut(2500)

  /* ---------------------------------------------------------------------- */
  /* Image sliders
  /* ---------------------------------------------------------------------- */
  var slider = $('#bxslider');
    slider.bxSlider({
      mode: slider.data('animation'),
      speed: slider.data('speed'),
      pager: slider.data('pager'),
      controls: slider.data('controls'),
      useCSS: false,
      auto: !0,
      infiniteLoop: !0,
      onSlideAfter: function() {
          slider.startAuto()
      }
  })

  /* ---------------------------------------------------------------------- */
  /* Text sliders
  /* ---------------------------------------------------------------------- */
  var textSlider = $('#flexslider');
    textSlider.flexslider({
      selector: '#slides li',
      animation: textSlider.data('animation'),
      slideshowSpeed: textSlider.data('speed'),
      animationSpeed: 700,
      slideshow: textSlider.data('slideshow'),
      pauseOnAction: !1,
      keyboardNav: !0,
      controlNav: !1,
      directionNav: !1
  })

  /* ---------------------------------------------------------------------- */
  /* Featured list slider
  /* ---------------------------------------------------------------------- */
  $('#featured-slider').slick({
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    cssEase: 'ease',
      speed: 500,
      autoplaySpeed: 6000,
      responsive: [{
      breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          }
        }
      ]
  });

  /* ---------------------------------------------------------------------- */
  /* Page box
  /* ---------------------------------------------------------------------- */
  $('.pagebox-list').mosaic({animation:'slide'});

  /* ---------------------------------------------------------------------- */
  /* Match height
  /* ---------------------------------------------------------------------- */
  $('.archive-list, .user-profile, .box-list').matchHeight()

  /* ---------------------------------------------------------------------- */
  /* Nav fixed
  /* ---------------------------------------------------------------------- */
  $(window).scroll(function () {
    var nav = $('.scroll-nav');
    if($(window).scrollTop() > 200) {
      nav.addClass('nav-fixed');
    } else {
      nav.removeClass('nav-fixed');
    }
  });

  /* ---------------------------------------------------------------------- */
  /* heade cta fixed
  /* ---------------------------------------------------------------------- */
  $(window).scroll(function () {
    var nav = $('.header-cta-scroll');
    if($(window).scrollTop() > 200) {
      nav.addClass('nav-fixed');
    } else {
      nav.removeClass('nav-fixed');
    }
  });

  /* ---------------------------------------------------------------------- */
  /* Testimonial slider
  /* ---------------------------------------------------------------------- */
  $('#slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '#slider-nav'
  });

  $('#slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '#slider-for',
    speed: 150,
    arrows: true,
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        arrows: false
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }
     ]
  });

  /* ---------------------------------------------------------------------- */
  /* CTA popup
  /* ---------------------------------------------------------------------- */
  // Share mobile margin
  $(window).on('load resize', function() {
    var w = $(window).width();
    var x = 768;
    var sh = $('.share-mobile').innerHeight();

    if ( w < x ) {
       $('.footer').css('margin-bottom',sh);
    } else {
       $('.footer').css('margin-bottom','0');
    }
  });

  // CTA popup fade
  $(window).on("scroll", function() {
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();

    if ( (scrollHeight - scrollPosition) / scrollHeight <= 0.05 ) {
      $('#cta-popup-fade').removeClass('display-none');
      }
  });

  // CTA popup click margin
  $('#cta-popup-btn').on('click', function() {
    if ( $('.cta-popup').hasClass('popup-max') ) {
      $('.cta-popup-icon').removeClass('fa-times').addClass('fa-chevron-up');
      $('.cta-popup').removeClass('popup-max').addClass('popup-min');
        } else {
      $('.cta-popup-icon').removeClass('fa-chevron-up').addClass('fa-times');
      $('.cta-popup').removeClass('popup-min').addClass('popup-max');
    }
  });

  // CTA popup mobile fadeIn
  $(window).scroll(function(){
      if ($(this).scrollTop() > 200) {
          $('.cta-popup-mobile').fadeIn();
      }
      else {
          $('.cta-popup-mobile').fadeOut();
      }
  });

  /* ---------------------------------------------------------------------- */
  /* LP mobile cta margin
  /* ---------------------------------------------------------------------- */
  $(window).on('load resize', function() {
    var w = $(window).width();
    var x = 768;
    var sh = $('.lp-mobile-cta').innerHeight();

    if ( w < x ) {
       $('.footer').css('margin-bottom',sh);
    } else {
       $('.footer').css('margin-bottom','0');
    }
  });

  /* ---------------------------------------------------------------------- */
  /* Side fixed
  /* ---------------------------------------------------------------------- */
  if ( $('.side-widget-fixed').length ) {
  $('.side-widget-fixed').fitSidebar({
      wrapper: '.container',
      responsiveWidth : 769
  });

   $(window).scroll(function () {
     var widget    = $(".side-widget-fixed");
     var widgetTop = widget.offset();
      if($(window).scrollTop() > widgetTop.top) {
         widget .addClass("widget-fixed");
      } else {
         widget .removeClass("widget-fixed");
      }
   });
  }

  /* ---------------------------------------------------------------------- */
  /* Video section height
  /* ---------------------------------------------------------------------- */
  $(window).on('load resize', function() {
  h = $(window).height();
  $(".video-section").css("height", h + "px");
  });

  /* ---------------------------------------------------------------------- */
  /* Modal global nav lp
  /* ---------------------------------------------------------------------- */
  var inst = $( '[data-remodal-id=modal-global-nav-lp]' ).remodal();
  $( ".exit-remodal a" ).on( "click",function() {
  inst.close();
  return false;
  } );

// end jQuery
});