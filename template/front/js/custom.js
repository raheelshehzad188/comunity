(function($) {
	
	/*---Owl-carousel----*/

	// ___Owl-carousel-icons
	var owl = $('.owl-carousel-icons');
	owl.owlCarousel({
		loop: true,
		rewind: false,
		margin: 25,
		animateIn: 'fadeInDowm',
		animateOut: 'fadeOutDown',
		autoplay: false,
		autoplayTimeout: 5000, 
		autoplayHoverPause: true,
		dots: false,
		nav: true,
		autoplay: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			},
			600: {
				items: 2,
				nav: true
			},
			1300: {
				items: 3,
				nav: true
			}
		}
	})
 // ___Owl-carousel-icons

})(jQuery);

