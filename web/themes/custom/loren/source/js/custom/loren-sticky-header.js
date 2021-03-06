/**
 * @file
 * A JavaScript file for the theme.
 *
 */

(function (Drupal, $) {

// Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('.sticky-header').outerHeight();

  $(window).scroll(function(event){
    didScroll = true;
  });

  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
      return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
      // Scroll Down
      $('.sticky-header').removeClass('nav-down').removeClass('hide-nav').addClass('nav-up');
    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        $('.sticky-header').removeClass('nav-up').addClass('nav-down');
      }
    }

    if (st === 0) {
      $('.sticky-header').removeClass('nav-up').removeClass('nav-down');
    }

    lastScrollTop = st;
  }

} (Drupal, jQuery));
