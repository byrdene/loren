!function(t,o){t.behaviors.smoothScroll={attach:function(t){o(document).on("click",'a[href^="#"]',function(t){t.preventDefault(),o("html, body").animate({scrollTop:o(o.attr(this,"href")).offset().top+40},750),o(".sticky-header").addClass("hide-nav")})}}}(Drupal,jQuery);
//# sourceMappingURL=loren-smooth-scroll.js.map
