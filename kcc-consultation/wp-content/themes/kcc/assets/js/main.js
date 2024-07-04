(function($) {
  $(document).ready(function() {
      // Initialize WOW.js
      new WOW().init();

      // Sidemenu
      $("#openNav").click(function() {
          $('.sidenav').addClass('open');
          $('.overlay').fadeIn();
          $('body').addClass('ovh');
      });

      $(".closebtn,.overlay").click(function() {
          $('.sidenav').removeClass('open');
          $('.overlay').fadeOut();
          $('body').removeClass('ovh');
      });

      var $mediaElements = $('.vision');
      $('.tabs-sec .tab-a').click(function(e) {
          e.preventDefault();
          var filterVal = $(this).data('filter');
          $(".tabs-sec .tab-a").not(this).removeClass("active");
          $(this).toggleClass("active");
          $mediaElements.removeClass("active").filter('.' + filterVal).addClass("active");
      });

      $("#nav-icon").click(function() {
          $('#nav-icon').toggleClass('nav-icon_open');
          $('.sidenav').toggleClass('open');
          $(this).toggleClass('open');
          $('body').toggleClass('ovh');
      });

      // Initialize sliders
      $('.slider-head').owlCarousel({
          autoplay: true,
          rtl: true,
          loop: true,
          dots: true,
          nav: false,
          items: 1,
      });

      $('.partner_slider').owlCarousel({
          items: 6,
          autoplay: true,
          rtl: true,
          loop: true,
          margin: 18,
          nav: false,
          dots: true,
          responsive: {
              0: { items: 1 },
              480: { items: 2 },
              768: { items: 2 },
              991: { items: 3 },
              1199: { items: 4 },
              1200: { items: 6 }
          }
      });

      $('.side-new').owlCarousel({
          autoplay: false,
          loop: true,
          rtl: true,
          nav: false,
          dots: false,
          margin: 20,
          center: true,
          responsive: {
              0: { items: 1 },
              480: { items: 1 },
              768: { items: 2 },
              992: { items: 3 },
              1200: { items: 3 },
              1400: { items: 3 }
          }
      });

      // Remove wow class on smaller screens
      if ($(window).width() <= 991) {
          $(".wow").removeClass("wow");
      }
  });

  if ($(window).width() <= 991) {
    $('.dropdown-head .dropdown-toggle').removeAttr("href");  
}

  $(window).on("load", function() {
      $('body,html').scrollTop(0);
      $(".loader").fadeOut(500, function() {
          $('body').css("overflow", "visible");
      });
  });
})(jQuery);
