$(document).ready(function(){
  var owl = $('.owl-carousel');
	owl.owlCarousel({
  	items:1,
  	lazyLoad:true,
    loop:true,
    autoplay:false,
    autoplayTimeout:6000,
		autoplayHoverPause:false,
    nav:false,
    dots:false,
    margin:10,
    responsiveClass:true,
    responsive:{
	    0:{
        items:1,
        loop:true,
        nav:false
	    },
	    600:{
        items:2,
        loop:true,
        nav:false
	    },
	    1000:{
        items:3,
        loop:true,
        nav:false
	    }
    }
	});
	$('.slider-arrow-left').click(function(){
    owl.trigger('prev.owl.carousel', [300]);
	});
  $('.slider-arrow-right').click(function(){
	  owl.trigger('next.owl.carousel', [300]);
	});
});