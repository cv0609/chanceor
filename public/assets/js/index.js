// Toggle Menu Functionaliy Start
$(document).ready(function () {
  $(".menu-toggle-btn").click(function () {
    $("body").addClass("menuToggle");
  });
  $(".menu-close-btn").click(function () {
    $("body").removeClass("menuToggle");
  });
});  
// Toggle Menu Functionaliy End

// Header Scroll JS Start
  $(document).ready(function () {
    $(window).scroll(function () {
      var header = $("header");
      header.toggleClass("fixed-header", $(window).scrollTop() > 0);
    });
  });
  // Header Scroll JS End

// Slick Slider JS End
$('.home_reviews_wrap').slick({
  dots: true,
  infinite: true,
  speed: 400,         
  cssEase: 'ease-in-out', 
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000, 
  slide: 'div',
  cssEase: 'linear', 
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
// Slick Slider JS End

// League Pages Tabs JS Start
$('.tab').on('click', function (evt) {
  evt.preventDefault();
    $('.tab').removeClass('active');
  $(this).addClass('active');
  var sel = $(this).attr('data-toggle-target');  
  $('.tab-content').removeClass('active');
  $(sel).addClass('active');
});
$(".profile").click(function(){
  $(this).find(".dropdown").slideToggle();
});
// League Pages Tabs JS Start