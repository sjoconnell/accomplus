/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        $(".plugin-pages").children().addClass("animated fadeInLeft");

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired

          $(".about-read").click(function(){
            $(this).parent().find(".about-profile-text-hidden").toggle();
            $(this).toggleClass("hidden-bottom");
            if ($(this).find("p").text() === "read more") {
            $(this).find("p").text("read less");
            } else {
              $(this).find("p").text("read more");
            }

          });

          $(".about-contact").hover(function(){
            $(this).parent().find(".email-hidden").toggle();
          });

          $(document).ready(function () {
            //initialize swiper when document ready  
            var mySwiper = new Swiper ('.main-slider', {
              // Optional parameters
              loop: true,
              nextButton: '.next-button',
              prevButton: '.prev-button',
              autoplay: 4000,
              autoplayDisableOnInteraction: false,
              effect: 'fade',

            });        
          });

          $(document).ready(function () {
            //initialize swiper when document ready  
            var mySwiper = new Swiper ('.small-slider', {
              // Optional parameters
              loop: true,
              autoplay: 6000,
              autoplayDisableOnInteraction: true,
              effect: 'fade',
              pagination: '.swiper-pagination',
              paginationType: 'bullets',
              paginationClickable: true,

            });        
          });

      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
