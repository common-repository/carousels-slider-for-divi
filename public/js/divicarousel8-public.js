(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	 $(".swiper-container").length && $(".swiper-container").each(function(e){
    
        var swiperOptions = {
            // Optional parameters
            slidesPerView: 2,
            direction: 'horizontal',
            loop: true,
            speed: 400,
            spaceBetween: 10,
            effect: 'slide',
            coverflowEffect: {
              rotate: 35,
              slideShadows: false,
            },
            autoplay: {
            delay: 3000,
          },
      
            // If we need pagination
            pagination: {
              el: '.swiper-pagination',
            },
      
            // Navigation arrows
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
      
            // And if we need scrollbar
            scrollbar: {
              el: '.swiper-scrollbar',
            }
          };
          
          new Swiper(".swiper-container", swiperOptions);
      });


})( jQuery );