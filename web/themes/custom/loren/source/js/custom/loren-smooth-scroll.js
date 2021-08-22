/**
 * @file
 * Smooth scrolling.
 *
 */
(function (Drupal, $) {

  Drupal.behaviors.smoothScroll = {
    attach: function (context) {

      $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
      });

    }
  };

} (Drupal, jQuery));
