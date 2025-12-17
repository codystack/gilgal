


(function($) {
	'use strict';

    //====== Slick Slider 
    if ($('.testimonial-slider-active').length) {
        $('.testimonial-slider-active').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 800,
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<div class="prev"><i class="far fa-angle-left"></i></div>',
            nextArrow: '<div class="next"><i class="far fa-angle-right"></i></div>'
        });
    }
    if ($('.testimonial-slider').length) {
        $('.testimonial-slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 800,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<div class="prev"><i class="far fa-angle-left"></i></div>',
            nextArrow: '<div class="next"><i class="far fa-angle-right"></i></div>',
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    }

    // ===== Accordion Class Toggle
        
    $('.accordion .accordion-header').on('click', function (event) {
        event.preventDefault();
        var $parent = $(this).parent();
        if ($parent.hasClass('accordion-active')) {
            $parent.removeClass('accordion-active');
        } else {
            $('.accordion .accordion-box').removeClass('accordion-active');
            $parent.addClass('accordion-active');
        }
    });


})(window.jQuery);