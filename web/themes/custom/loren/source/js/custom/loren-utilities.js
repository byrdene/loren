/**
 * @file
 * A JavaScript file for the theme.
 *
 */

(function (Drupal, $) {

  var event = (navigator.userAgent.match(/iPhone/i)) ? "touchstart" : "click";

  /**
   * Set the Practice Area functions
   *
   */
  function setPracticeArea() {

    // Attach click function for button toggle
    $('.more-info-trigger').each(function() {

      // Add aria values to start
      $(this).attr('aria-expanded', 'false');
      $(this).parent().parent().find('.more-info').attr('aria-hidden', 'true');

      $(this)
        .off(event)
        .on(event, function(e) {

          // Add accordion functionality
          $(this).toggleClass('open').parent().parent().find('.more-info').slideToggle('500');
          $(this).parent().parent().toggleClass('is-visible');
          $(this).parent().parent().parent().find('.practice-area').addClass('gray-out');

          // But "reset" any other Person whose bio accordions might already be open
          $('.more-info-trigger').not(this).removeClass('open');
          $('.more-info-trigger').not(this).parent().parent().removeClass('is-visible');
          $('.more-info-trigger').not(this).parent().parent().find('.more-info').hide();

          // And remove the gray-out class if it is no longer needed
          if ($('.is-visible').length < 1) {
            $(this).parent().parent().parent().find('.practice-area').removeClass('gray-out');
          }

          // Amend aria values as needed
          if ($(this).hasClass('open')) {
            $(this).attr('aria-expanded', 'true')
              .parent().parent().find('.more-info').attr('aria-hidden', 'false');

          } else {
            $(this).attr('aria-expanded', 'false')
              .parent().parent().find('.more-info').attr('aria-hidden', 'true');

          }
        });

    });

    // Everything should be closed on page load
    $('.practice-area-grid .more-info').hide();
  }

  // Call functions
  setPracticeArea();

  Drupal.behaviors.lorenUtilities = {
    attach: function (context) {

      $( window ).on( "load ", function( event ) {
        // code here
      });

      $( window ).on( "load resize orientationchange", function( event ) {
        setTimeout(function( event ) {
          // code here

        }, 100);
      });

    }
  };

} (Drupal, jQuery));
