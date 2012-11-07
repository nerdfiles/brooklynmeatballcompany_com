
;(function($) {
  
  var BMC = {};

  BMC.init = function() {
    BMC.maptoggle();
    BMC.menuorbital();
    BMC.stickynav();
  };

  ///////////////////////////////////////////////////
  
  BMC['stickynav'] = function() {
    var $menuNav = $('#bmc-menu-nav ul');
    $menuNav.on('mouseover', function(e) {
      //$menuNav.prop('class', (!$menuNav.hasClass('focus')) ? 'focus' : '');
    });
    $menuNav.on('mouseout', function(e) {
      $menuNav.removeClass('focused');
    });
    $menuNav.find('a').on('blur', function(e) {
      $menuNav.addClass('focused');
    });
    $menuNav.waypoint(function(event, direction) {
      if (direction === 'down') {
        $menuNav.addClass('sticky');
      } else {
        $menuNav.removeClass('sticky');
      }
      $(window).scroll(function() {
        //if ( $menuNav.hadClass('sticky') ) {
          $menuNav.css({
              'top': ($(this).scrollTop()/12) + "px"
          });
       //}
      });
    }, { offset: '30%' });
  };

  BMC['menuorbital'] = function() {
    $('#bmc-menu-nav ul a').on('click', function(e) {
      var stage = 'html,body',
          target = this.hash,
          $target = $(target);
      e.preventDefault();
      $(stage).stop().animate({
        'scrollTop': $target.offset().top
      }, 500, function() {
        window.location.hash = target
      });

    });
  };
  
  BMC['maptoggle'] = function() {
    $('div.home iframe').addClass('hidden').hide();
    $('div.home header').prepend('<a href="#showmap" class="showmap" title="Yes, the idea here is that business cards should bear graphene film covers with Google Maps overlays. How sweet would that be?">Show on map</a>');
    $('div.home header a.showmap').on('click', function(e) {
      e.preventDefault();
      $('div.home iframe').prop('class', 
        (!$('div.home iframe').hasClass('hidden')) ? 
          (function() { 
            $('div.home')
              .animate({
                'height': '223px'
              }, 300);

            $('div.home iframe')
              .animate({
                'height': '223px'
              }, 300)
              .fadeOut(); 

            $('div.home .page, div.home header h2').fadeIn();

            $('div.home a.showmap').text('Show on map');

            return 'hidden'; 
          })() : 
          (function() { 
            $('div.home')
              .animate({
                'height': '500px'
              }, 300);
            $('div.home iframe')
              .animate({
                'height': '500px'
              }, 300)
              .fadeIn(); 

            $('div.home .page, div.home header h2').fadeOut();

            $('div.home a.showmap').text('Hide map');

            return ''; 
          })()
        )
    });
  };

  ///////////////////////////////////////////////////

  $(document).ready(function() {
    BMC.init();
  });

})(jQuery);
