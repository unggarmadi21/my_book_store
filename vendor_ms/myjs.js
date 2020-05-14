(function ($) {

	// Parralax
	$(window).scroll(function () {
		var myScroll = $(this).scrollTop();

		//features
		if (myScroll > $('.brands').offset().top - 3000) {
			$('.brands .img-fluid').each(function (i) {
				setTimeout(function () {
					$('.brands .img-fluid').eq(i).addClass('run');
				}, 200 * i + 1);
			});
		}

		//product
		if (myScroll > $('.figure').offset().top - 6500) {
			$('.figure .figure-img').each(function (i) {
				setTimeout(function () {
					$('.figure .figure-img').eq(i).addClass('run');
				}, 200 * i + 1);
			});
		}


	});


	// Smooth scrolling using jQuery easing
	$('a.js-scroll[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: (target.offset().top - 54)
				}, 1000, "easeInOutExpo");
				return false;
			}
		}
	});

	// Closes responsive menu when a scroll trigger link is clicked
	$('.js-scroll').click(function () {
		$('.navbar-collapse').collapse('hide');
	});


	// Activate scrollspy to add active class to navbar items on scroll
	$('body').scrollspy({
		target: '#nav',
		offset: 60
	});

	// Collapse Navbar
	var navbarCollapse = function () {
		if ($("#nav").offset().top > 100) {
			$("#nav").addClass("navbar-shrink");
		} else {
			$("#nav").removeClass("navbar-shrink");
		}
	};
	// Collapse now if page is not at top
	navbarCollapse();
	// Collapse the navbar when page is scrolled
	$(window).scroll(navbarCollapse);

	$("#navbarNav").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#product div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });


})(jQuery);
