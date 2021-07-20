jQuery(document).ready(function($) {

	// For Slider
	$( '.wpsisac-slick-slider' ).each(function( index ) {
		
		var slider_id   	= $(this).attr('id');
		var nav_id 			= null;
		var slider_nav_id 	= $(this).attr('data-slider-nav-for');
		var slider_conf 	= $.parseJSON( $(this).closest('.wpsisac-slider-wrp').find('.wpsisac-slider-conf').text());
		
		// For Navigation
		if( typeof(slider_nav_id) != 'undefined' && slider_nav_id != '' ) {
			nav_id = '.'+slider_nav_id;
		}
		
		if( typeof(slider_id) != 'undefined' && slider_id != '' ) {

			jQuery('#'+slider_id).slick({
				dots			: (slider_conf.dots) == "true" ? true : false,
				infinite		: (slider_conf.loop) == "true" ? true : false,
				arrows			: (slider_conf.arrows) == "true" ? true : false,
				speed			: parseInt(slider_conf.speed),
				autoplay		: (slider_conf.autoplay) == "true" ? true : false,
				autoplaySpeed	: parseInt(slider_conf.autoplay_interval),
				fade 			: (slider_conf.fade) == "true" ? true : false,
				slidesToShow	: 1,
				slidesToScroll	: 1,
				adaptiveHeight 	: false,
				rtl             : (slider_conf.rtl) == "true" ? true : false,
				mobileFirst    	: (Wpsisac_Pro.is_mobile == 1) ? true : false,
				asNavFor		: nav_id
			});
		}
		
		// For Navigation
		if( typeof(slider_nav_id) != 'undefined' ) {
			jQuery('.'+slider_nav_id).slick({
				slidesToShow 	: parseInt(slider_conf.slider_nav_column),
				slidesToScroll 	: 1,
				asNavFor 		: '#'+slider_id,
				dots 			: false,
				arrows 			: true,
				centerMode 		: true,
				focusOnSelect 	: true,
				rtl 			: (slider_conf.rtl) == "true" ? true : false,
				infinite 		: (slider_conf.loop) == "true" ? true : false,
				responsive 		: [
				{
					breakpoint 	: 767,
					settings 	: {
						slidesToShow 	: (parseInt(slider_conf.slider_nav_column) > 3) ? 3 : parseInt(slider_conf.slider_nav_column),
						slidesToScroll 	: 1,
					}
				},
				{
					breakpoint 	: 640,
					settings   	: {
						slidesToShow 	: (parseInt(slider_conf.slider_nav_column) > 2) ? 2 : parseInt(slider_conf.slider_nav_column),
						slidesToScroll 	: 1,
						centerMode 		: false,
					}
				},
				{
					breakpoint	: 479,
					settings	: {
						slidesToShow 	: (parseInt(slider_conf.slider_nav_column) > 2) ? 2 : parseInt(slider_conf.slider_nav_column),
						slidesToScroll 	: 1,
						centerMode 		: false,
					}
				}
				]
			});
		}
	});

	// For Carousel Slider
	$( '.wpsisac-slick-carousal-slider' ).each(function( index ) {
		
		var slider_id   = $(this).attr('id');
		var slider_conf = $.parseJSON( $(this).closest('.wpsisac-slick-carousal-wrp').find('.wpsisac-slider-conf').text());
		
		jQuery('#'+slider_id).slick({
			dots			: (slider_conf.dots) == "true" ? true : false,
			infinite		: (slider_conf.loop) == "true" ? true : false,
			arrows			: (slider_conf.arrows) == "true" ? true : false,
			speed			: parseInt(slider_conf.speed),
			autoplay		: (slider_conf.autoplay) == "true" ? true : false,
			autoplaySpeed	: parseInt(slider_conf.autoplay_interval),
			slidesToShow	: parseInt(slider_conf.slidestoshow),
			slidesToScroll	: parseInt(slider_conf.slidestoscroll),
			centerMode 		: (slider_conf.centermode) == "true" ? true : false,
			rtl             : (slider_conf.rtl) == "true" ? true : false,
			mobileFirst    	: (Wpsisac_Pro.is_mobile == 1) ? true : false,
			responsive 		: [{
				breakpoint 	: 1023,
				settings 	: {
					slidesToShow 	: (parseInt(slider_conf.slidestoshow) > 3) ? 3 : parseInt(slider_conf.slidestoshow),
					slidesToScroll 	: 1,
				}
			},{
				breakpoint	: 767,	  			
				settings	: {
					slidesToShow 	: (parseInt(slider_conf.slidestoshow) > 2) ? 2 : parseInt(slider_conf.slidestoshow),
					slidesToScroll 	: 1,
					centerMode 		: false,
				}
			},
			{
				breakpoint	: 479,
				settings	: {
					slidesToShow 	: 1,
					slidesToScroll 	: 1,
					dots 			: false,
					centerMode 		: false,
				}
			},
			{
				breakpoint	: 319,
				settings	: {
					slidesToShow 	: 1,
					slidesToScroll 	: 1,
					dots 			: false,
					centerMode 		: false,
				}
			}]
		});
	});

	// For Variable width
	$( '.wpsisac-slick-variable' ).each(function( index ) {
		
		var slider_id   = $(this).attr('id');
		var slider_conf = $.parseJSON( $(this).closest('.wpsisac-slick-carousal-wrp').find('.wpsisac-slider-conf').text());
		
		jQuery('#'+slider_id).slick({
			dots			: (slider_conf.dots) == "true" ? true : false,
			infinite		: (slider_conf.loop) == "true" ? true : false,
			arrows			: (slider_conf.arrows) == "true" ? true : false,
			speed			: parseInt(slider_conf.speed),
			autoplay		: (slider_conf.autoplay) == "true" ? true : false,
			autoplaySpeed	: parseInt(slider_conf.autoplay_interval),
			slidesToShow	: 1,
			slidesToScroll	: 1,
			centerMode 		: true,
			rtl             : (slider_conf.rtl) == "true" ? true : false,
			mobileFirst    	: (Wpsisac_Pro.is_mobile == 1) ? true : false,
			variableWidth 	: false,
			responsive 		: [{
				breakpoint 	: 1023,
				settings 	: {
					slidesToShow 	: 1,
					slidesToScroll 	: 1,
				}
			},{
				breakpoint 	: 766,	  			
				settings	: {
					slidesToShow 	: 1,
					slidesToScroll 	: 1,
					centerMode 		: true,
					variableWidth 	: false,
				}
			},{
				breakpoint 	: 479,
				settings 	: {
					dots 			: false,
					centerMode 		: false,
				}
			},{
				breakpoint	: 319,
				settings	: {
					dots			: false,
					centerMode 		: false,
				}
			}]
		});
	});
});