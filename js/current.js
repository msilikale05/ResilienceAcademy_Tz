
var fixed_menu = true;
window.jQuery = window.$ = jQuery;

function fullwidthslider() {
	"use strict";

	var full_slider_w = jQuery(window).width();
	if (jQuery(window).width() > 767) {
		var full_slider_h = jQuery(window).height();
	} 
	else {
		var full_slider_h = jQuery(window).width()*0.7;
	}
	full_slider_h = 940;

	jQuery('.full_slider .flexslider, .full_slider .flexslider li').css({'width': full_slider_w, 'height': full_slider_h});
	jQuery('.full_slider, .full_slider .flexslider li img.slide_bg').attr('style', 'height: '+full_slider_h+'px');		
	jQuery('.full_slider').css({'min-height': full_slider_h + 'px'});
	jQuery('.full_slider_caption .container').css({'padding-bottom': full_slider_h*0.079 + 'px'});
};

jQuery(document).ready(function() {
	"use strict";
	
	fullwidthslider();
	
		
	
	jQuery('.full_slider .flexslider li img.slide_bg').each(function(){
		jQuery(this).parent().attr('style', 'background-image:url('+$(this).attr('src')+');');		
	});
			
	jQuery('.flexslider').flexslider({
        slideshow: false,
		animation: "fade",
		controlNav: false,
		directionNav: true
    });
				
});

jQuery(window).load(function(){
	"use strict";
		
	fullwidthslider();

	
	jQuery('.full_slider').removeClass('preloader');
	jQuery('.next_section').removeClass('hide');
});


jQuery(window).resize(function(){	
	"use strict";
	
	fullwidthslider();
			
});

