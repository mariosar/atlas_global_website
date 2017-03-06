jQuery(document).ready(function(){
	"use strict";
	jQuery(".property-type li a").on('click',function(){
		var property_type = jQuery(this).attr('data-id');
		jQuery(".property-type li a").removeClass("active");
		jQuery(this).addClass("active");
		jQuery(".carousel.slide.carousel-slide-recent-property").css('display','none');
		jQuery("div[data-target="+property_type+"]").css('display','block');

		if( property_type == 'All'){
			jQuery(".carousel.slide.carousel-slide-recent-property").css('display','block');
		}

		if( property_type == 'All'){
			jQuery(".property-list-list").css('display','block');
			jQuery(".carousel-slide-recent-property").css('display','block');
		} else {
			jQuery(".property-list-list").css('display','none');
			jQuery(".carousel-slide-recent-property").css('display','none');
			jQuery("div[data-target="+property_type+"]").css('display','block');
		}		
	});
	var elements = $("i.fa");
	$(window).scroll(function(){
		var scroll = window.scrollY;
		console.log(scroll);
		var posY = window.scrollY + $(window).height() * 4 / 5.5;
		elements.each(function(){
			var element = $(this);
			var pos = element.offset().top;
			if(pos < posY){
				element.addClass('active');
			}
		});
		if(scroll > 200){
			$(".back-to-top").fadeIn();
		} else {
			$(".back-to-top").fadeOut();
		}
	});
	if( $(window).width() > 600 ){
		$('body.cyprus .inner-page-header-area').parallax({imageSrc: '/images/backgrounds/cyprus.jpg', positionY: "-600px"});
		$('body.portugal .inner-page-header-area').parallax({imageSrc: '/images/backgrounds/portugal_real_estate.jpg', positionY: "-100px"});
		$('body.malta .inner-page-header-area').parallax({imageSrc: '/images/backgrounds/malta.jpg'});
		$('body.spain .inner-page-header-area').parallax({imageSrc: '/images/backgrounds/resort.jpg', positionY: "-300px"});
		$('body.golden-visa .inner-page-header-area').parallax({imageSrc: '/images/backgrounds/residency.jpg'});
		$('body.services .inner-page-header-area').parallax({imageSrc: '/images/backgrounds/portugal_night.jpg'});
		$('body.about_us .inner-page-header-area').parallax({imageSrc: '/images/backgrounds/portugal_wide.jpg', positionY: "-150px"});	
		$('body.contact .inner-page-header-area').parallax({imageSrc: '/images/backgrounds/portugal_night.jpg'});
		$('body.index .image_header.active_image').parallax({imageSrc: '/images/backgrounds/architecture.jpg', positionY: "-160px"});
	}

	$(".back-to-top").unbind().on('click', function(){
		$("html, body").animate({scrollTop: 0}, "slow");
	});

	$("#amenities-img").children('.image').css('display', 'none');
	$("select[name=country]").on('change', function(){
		var val = $(this).val();
		$(".country-info").slideUp();
		$('*[data-value="' + val + '"]').slideDown();
		$("#amenities-img").children('.image').delay(200).fadeOut();
		$('*[data-img-value="' + val + '"]').delay(200).fadeIn();
	});
	var val = $("select[name=country]").val();
	$('*[data-value="' + val + '"]').slideDown();
	$('*[data-img-value="' + val + '"]').fadeIn();
});