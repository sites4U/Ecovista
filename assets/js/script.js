document.addEventListener('DOMContentLoaded', function () {

	// Header START
	$('.anchor-link').on('click', function() {
		var href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: $(href).offset().top
		}, {
			duration: 1100
		});
		$('.header-mobile').removeClass('is-active');
	});

	$('.nav-top').on('click', function() {
		var href = $(this).attr('href');
		$('html, body').animate({
			scrollTop: 0
		}, {
			duration: 1100
		});
	});

	function scrollUp() {
		if($(this).scrollTop() > 1500) {
			$('.nav-top').addClass('is-active');
		}
		else {
			$('.nav-top').removeClass('is-active');
		}
	}
	function headerFixed() {
		if($(this).scrollTop() > 125) {
			$('.header-bottom').addClass('is-fixed');
		}
		else {
			$('.header-bottom').removeClass('is-fixed');
		}
	}

	$(document).on('scroll', function() {
		scrollUp();
		headerFixed();
	});
	scrollUp();
	headerFixed();

	$('.hamburger').on('click', function() {
		$('.header-mobile').addClass('is-active');
	});
	$('.header-mobile-close').on('click', function() {
		$('.header-mobile').removeClass('is-active');
	});
	// Header END
	
	// Banner START
	const swiperBanner = new Swiper('.swiper-banner', {
		speed: 700,
		spaceBetween: 0,
		slidesPerView: 1,
		pagination: {
			enabled: true,
			el: '.swiper-banner .swiper-pagination',
			clickable: true,
		},
		navigation: {
			enabled: true,
			nextEl: '.swiper-banner .swiper-button-next',
			prevEl: '.swiper-banner .swiper-button-prev',
			clickable: true,
		},
	});
	// Banner END

	// Reviews START
	const swiperReviews = new Swiper('.swiper-reviews', {
		speed: 1500,
		spaceBetween: 50,
		slidesPerView: 1,
		pagination: {
			enabled: true,
			el: '.swiper-reviews .swiper-pagination',
			clickable: true,
		},
		effect: 'coverflow',
	});
	// Reviews END


	// Gallery START
	var gridGutter = 20;
	
	if (window.matchMedia('(max-width: 575px)').matches) {
		gridGutter = 15;
	}

	var $grid = $('.grid').masonry({
		itemSelector: '.grid-item',
		columnWidth: '.grid-sizer',
		percentPosition: true,
		gutter: gridGutter
	});

	$grid.imagesLoaded().progress( function() {
		$grid.masonry('layout');
	});

	$('.grid-item a').magnificPopup({
		type: 'image',
		mainClass: 'mfp-with-zoom',
		gallery: {
			enabled:true
		},
		zoom: {
			enabled: true,
		
			duration: 300,
			easing: 'ease-in-out',
		
			opener: function(openerElement) {
			  return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		  }
	});

	$('.gallery-tab a').on('click', function(e) {
		e.preventDefault();
		var thHref = $(this).attr('href');
		$('.grid').addClass('hidden');
		$(thHref).removeClass('hidden');
		$('.gallery-tab a').removeClass('is-active');
		$(this).addClass('is-active');
		var $grid = $('.grid').masonry({
			itemSelector: '.grid-item',
			columnWidth: '.grid-sizer',
			percentPosition: true,
			gutter: gridGutter
		});
	});
	// Gallery END

	// Partners START
	const swiperPartners = new Swiper('.swiper-partners', {
		speed: 1500,
		spaceBetween: 20,
		scrollbar: {
			el: '.swiper-partners .swiper-scrollbar',
			dragSize: '56px',
			draggable: true
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			420: {
				slidesPerView: 2,
			},
			670: {
				slidesPerView: 3,
			},
			992: {
				slidesPerView: 4,
			}
		}
		
	});
	// Partners END

	

}, false);