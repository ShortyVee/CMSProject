/**
 * Remove sticky footer.js.
 */

(function() {

  jQuery(document).ready(function($) {
    var height = $('.content-wrapper').height();
    if (height > 725) {
      $('.footer').removeClass('navbar-fixed-bottom');
    }

    $(window).resize(function() {
      var navbar = $('.logged-in .navbar.navbar-fixed-top');
      var screenWidth = $( window ).width();
      if (screenWidth <= 768) {
        navbar.css('position', 'static');
        $('body').css('padding-top', '0');
      }
      else {
        navbar.css('position', 'fixed');
        $('body').css('padding-top', '110px');
      }
    }).trigger('resize');
    
  });

})( jQuery );