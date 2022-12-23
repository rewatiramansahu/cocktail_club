// JavaScript Document
var $ = jQuery.noConflict();
    
/*************************** Owl Carousel ****************************/

$(document).ready(function() {
	
	$("#cate-carousel, #brand-carousel").owlCarousel({
        autoplay: false,
        items : 6, 
		navText: false,
		dots: false,       
		nav : true,
		mouseDrag:true,
		lazyLoad : false,
		responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        800:{
            items:4
        },
        1000:{
            items:6
        }
    	}
      });

	$("#pro-carousel, #pro-carousel2").owlCarousel({
        autoplay: false,
        items : 5, 
		navText: false,
		dots: false,       
		nav : true,
		mouseDrag:true,
		lazyLoad : false,
		responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
            items:4
        },
        1000:{
            items:5
        }
    	}
      });	 
	           
 });

 $(document).ready(function() {   
	$('.add').click(function () {
			if ($(this).prev().val() < 10) {
			$(this).prev().val(+$(this).prev().val() + 1);
			}
	});
	$('.sub').click(function () {
			if ($(this).next().val() > 1) {
			if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
			}
	});	

    $('.quantity-lst li').on("click", function() {
        $(this).addClass("active");
        $(this).siblings(".quantity-lst li").removeClass("active");
    });
	
});

$(window).on('load',function(){
	$('#ageModal').modal('show');
});





