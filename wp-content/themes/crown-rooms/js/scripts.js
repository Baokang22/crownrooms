(function ($, root, undefined) {

	$(function () {
/*
		'use strict';

		// DOM ready, take it away
		$('.menu')

		// sliders
		$('.home-slider').owlCarousel({
			items: 1,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeOut: 2500,
			autoplayHoverPause: false
		});
		$('.accommodation-slider').owlCarousel({
			items: 1,
			loop: true,
			// margin: 10,
			autoplay: true,
			autoplayTimeOut: 2500,
			autoplayHoverPause: false
		});
		$('.barandrestaurant-slider').owlCarousel({
			items: 1,
			loop: true,
			margin: 10,
			autoplay: true,
			autoplayTimeOut: 2500,
			autoplayHoverPause: false,
			// autoWidth: true
		});
		$('.our-reviews-slider').owlCarousel({
			items: 1,
			loop: true,
			// margin: 10,
			autoplay: true,
			autoplayTimeOut: 2500,
			autoplayHoverPause: false,
			nav: true,
			navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"]
		});
		// scroll menu triggers
		var controller1 = new ScrollMagic.Controller({ globalSceneOptions: { duration: $('#tab-home').height() } });
		new ScrollMagic.Scene({ triggerElement: "#tab-home" })
			.setClassToggle("#home", "active")
			.addTo(controller1);

		var controller2 = new ScrollMagic.Controller({ globalSceneOptions: { duration: $('#tab-restaurant').height() } });
		new ScrollMagic.Scene({ triggerElement: "#tab-restaurant" })
			.setClassToggle("#restaurant", "active")
			.addTo(controller2);

		var controller3 = new ScrollMagic.Controller({ globalSceneOptions: { duration: $('#tab-getintouch').height() } });
		new ScrollMagic.Scene({ triggerElement: "#tab-getintouch" })
			.setClassToggle("#getintouch", "active")
			.addTo(controller3);

		var controller4 = new ScrollMagic.Controller({ globalSceneOptions: { duration: $('#tab-parking').height() } });
		new ScrollMagic.Scene({ triggerElement: "#tab-parking" })
			.setClassToggle("#parking", "active")
			.addTo(controller4);

		var controller4 = new ScrollMagic.Controller({ globalSceneOptions: { duration: $('#tab-our-reviews').height() } });
		new ScrollMagic.Scene({ triggerElement: "#tab-our-reviews" })
			.setClassToggle("#reviews", "active")
			.addTo(controller4);
		// menu trigger end

		$(window).scroll(function () {

			if ($(window).scrollTop() >= 100) {
				$('.header').addClass('shrink');
			} else {
				$('.header').removeClass('shrink');
			}
		});

		$('#toggle').click(function () {
			$(this).toggleClass('active');
			$('#overlay').toggleClass('open');
		});
		$('.menu-item a').click(function () {
			$(this).removeClass('active');
			$('#overlay').removeClass('open');
		});

		// Select all links with hashes
		$('a[href*="#"]')
			// Remove links that don't actually link to anything
			.not('[href="#"]')
			.not('[href="#0"]')
			.click(function (event) {
				// On-page links
				if (
					location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
					&&
					location.hostname == this.hostname
				) {
					// Figure out element to scroll to
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					// Does a scroll target exist?
					if (target.length) {
						// Only prevent default if animation is actually gonna happen
						event.preventDefault();
						$('html, body').animate({
							scrollTop: target.offset().top - 150
						}, 1000, function () {
							// Callback after animation
							// Must change focus!
							var $target = $(target);
							$target.focus();
							if ($target.is(":focus")) { // Checking if the target was focused
								return false;
							} else {
								$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
								$target.focus(); // Set focus again
							};
						});
					}
				}
			});
*/
	});

})(jQuery, this);


