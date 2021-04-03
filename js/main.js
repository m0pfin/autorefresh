(function($) {
	"use strict"
	
	$(window).on('scroll', function() {
		// Fixed Nav
		var wScroll = $(this).scrollTop();
		wScroll > $('header').height() ? $('#nav-header').addClass('fixed') : $('#nav-header').removeClass('fixed');
		
		// Back to top appear
		wScroll > 740 ? $('#back-to-top').addClass('active') : $('#back-to-top').removeClass('active')
	});
	
	// Back to top
	$('#back-to-top').on("click", function(){
		$('body,html').animate({
            scrollTop: 0
        }, 500);
	});
	
	// Mobile Toggle Btn
	$('#nav-header .nav-collapse-btn').on('click',function(){
		$('#main-nav').toggleClass('nav-collapse');
	});
	
	// Search Toggle Btn
	$('#nav-header .search-collapse-btn').on('click',function(){
		$(this).toggleClass('active');
		$('.search-form').toggleClass('search-collapse');
	});

	// Owl Carousel
	$('#owl-carousel-1').owlCarousel({
		loop:true,
		margin:0,
		dots : false,
		nav: true,
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		autoplay : true,
		responsive:{
			0:{
				items:1
			},
			992:{
				items:2
			},
		}
	});
	
	$('#owl-carousel-2').owlCarousel({
		loop:false,
		margin:15,
		dots : false,
		nav: true,
		navContainer: '#nav-carousel-2',
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		autoplay : false,
		responsive:{
			0:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
		}
	});
	
	$('#owl-carousel-3').owlCarousel({
		items:1,
		loop:true,
		margin:0,
		dots : false,
		nav: true,
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		autoplay : true,
	});
	
	$('#owl-carousel-4').owlCarousel({
		items:1,
		loop:true,
		margin:0,
		dots : true,
		nav: false,
		autoplay : true,
	});

})(jQuery);