(function($) {	
    function BestsellerSlideshow() {
        $('#slideshow_bestseller').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 196,
            minItems: 4,
            controlNav: false,
            directionNav: true,
            maxItems: 4,
            start: function(slider){
              $('body').removeClass('loading');
            }
      });
    }
	
    $(window).bind('load', function() {
    	BestsellerSlideshow();
    });
})(jQuery);