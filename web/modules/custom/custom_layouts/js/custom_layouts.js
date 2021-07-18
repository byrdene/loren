/**
 * @file
 * Utilities for the module
 */

(function (Drupal, $) {

Drupal.behaviors.customLayouts = {
  attach: function (context) {
    $noBG = $('.layout-paragraph.no-background');
    $hasBG = $('.layout-paragraph.background');

    if ($noBG.length > 0) {
      $('.layout-paragraph.no-background').each( function() {
        $(this).parent().addClass('no-background');
      });
    }

    if ($hasBG.length > 0) {
      $('.layout-paragraph.background').each( function() {
        $(this).parent().addClass('background');
      });
    }

  }
};

} (Drupal, jQuery));

