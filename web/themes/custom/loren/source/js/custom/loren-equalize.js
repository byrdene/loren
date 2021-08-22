/**
 * @file
 * A JavaScript file to equalize practice area boxes
 *
 */

(function (Drupal, $) {

  var event = (navigator.userAgent.match(/iPhone/i)) ? "touchstart" : "click";

  /**
   * Equalize Person Details
   *
   */
  function equalizePracticeAreas() {
    var eqDetails = $('.practice-area-grid');
    if(eqDetails.length > 0)  {
      eqDetails.imagesLoaded(function() {
        eqDetails.equalize({children: '.practice-area .practice-area-box', reset: true });
      });
    }
  }

  equalizePracticeAreas();

  Drupal.behaviors.lorenEqualize = {
    attach: function (context) {

      $( window ).on( "load resize orientationchange", function( event ) {
        setTimeout(function( event ) {

          // Equalize Practice Area boxes
          equalizePracticeAreas();

        }, 100);
      });

    }
  };

} (Drupal, jQuery));
