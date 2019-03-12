jQuery(document).ready(function ($) {
    "use strict";
    jQuery('.menu-opener').on('click', function () {
        jQuery(this).toggleClass('menu-opener-show');
        jQuery('.menu-container').toggleClass('menu-container-hidden');
    });

    jQuery('.clients-slider-container').owlCarousel({
        items: 8,
        margin: 10,
        autoplay: true
    });

});
