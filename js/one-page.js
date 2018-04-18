(function($) {
    "use strict";


	//onepage Page scrolling
    $('.menu-box >ul').onePageNav({
        filter: ':not(.external)',
        scrollThreshold: 0.25
    });


})(jQuery);