/**
 * @file
 * Smooth scrolling.
 *
 */
(function (Drupal, $) {

  Drupal.behaviors.smoothScroll = {
    attach: function (context) {

      // Anchor link navigation
      $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top
        }, 750);

        // hide sticky header but do it after the sticky header functions run
        $('.sticky-header').addClass('hide-nav');

      });

    }
  };

} (Drupal, jQuery));
