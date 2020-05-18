( function(jQuery) {
  'use strict';



  	/*-------------------------------------------------------------------------------
	  Detect mobile device 
	-------------------------------------------------------------------------------*/


	
	var mobileDevice = false; 

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
	  	jQuery('html').addClass('mobile');
	  	mobileDevice = true;
	}

	else{
		jQuery('html').addClass('no-mobile');
		mobileDevice = false;
	}



    /*-------------------------------------------------------------------------------
	  Window load
	-------------------------------------------------------------------------------*/



	jQuery(window).on('load', function(){
	
		var wow = new WOW({
			offset: 150,          
			mobile: false
		  }
		);
		
		wow.init();
	
	});

	var navbar=jQuery('.navbar:not(.navbar-fixed)');
	var navbarResponsive=jQuery('.navbar-responsive');
	var navbarMobile=jQuery('.nav-mobile');
	
	
	/*-------------------------------------------------------------------------------
	  Loader 
	-------------------------------------------------------------------------------*/
	
    jQuery(".animsition").animsition({
		inClass: 'fade-in',
        outClass: 'fade-out-up-sm',
		inDuration: 1200,
		outDuration: 800,
		linkElement: '.navbar li a, .nav-mobile li a',
		// e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
		loading: true,
		loadingParentElement: 'body', //animsition wrapper element
		loadingClass: 'spinner',
	    loadingInner: '<div class="double-bounce1"></div><div class="double-bounce2"></div>', // e.g '<img src="loading.svg" />'
		timeout: true,
		timeoutCountdown: 5000,
		onLoadEvent: true,
		browser: [ 'animation-duration', '-webkit-animation-duration'],
		// "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
		// The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		overlay : false,
		overlayClass : 'animsition-overlay-slide',
		overlayParentElement : 'body',
		transition: function(url){ window.location.href = url; }
	  });
	
	
	


	/*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/



	navbar.affix({
	  offset: {
	    top: 1
	  }
	});


	navbar.on('affix.bs.affix', function() {
		if (!navbar.hasClass('affix')){
			navbar.addClass('animated slideInDown');
		}
	});

	navbar.on('affixed-top.bs.affix', function() {
	  	navbar.removeClass('animated slideInDown');
	  	
	});

	jQuery('.nav-mobile-list .menu-item-has-children > a').on('click',function(){
		jQuery(this).closest('li').toggleClass('current');
		jQuery(this).closest('li').children('ul').slideToggle(200);
		return false;
	});



	/*-------------------------------------------------------------------------------
	 Navbar collapse
	-------------------------------------------------------------------------------*/



	jQuery('.collapse').on('show.bs.collapse', function () {
		navbar.addClass('affix');
	});

	jQuery('.collapse').on('hidden.bs.collapse', function () {
		if (navbar.hasClass('affix-top')){
			navbar.removeClass('affix');
		}
	});

	navbar.on('affixed-top.bs.affix', function() {
		if (jQuery('.collapse').hasClass('in')){
			navbar.addClass('affix');
		}	
	});



	/*-------------------------------------------------------------------------------
	  Smooth scroll to anchor
	-------------------------------------------------------------------------------*/



    jQuery('.js-target-scroll').on('click', function() {
        var target = jQuery(this.hash);
        if (target.length) {
            jQuery('html,body').animate({
                scrollTop: (target.offset().top - navbar.outerHeight())
            }, 1000);
            return false;
        } 
    });
	
	
	
	/*-------------------------------------------------------------------------------
	  Video pop-up
	-------------------------------------------------------------------------------*/



	jQuery('.js-video-play').magnificPopup({
	    type: 'iframe',
	    removalDelay: 300
    });




	/*-------------------------------------------------------------------------------
	  Isotope
	-------------------------------------------------------------------------------*/



    jQuery('.isotope').each(function() {		
		var $container = jQuery(this);
		$container.imagesLoaded( function(){
			$container.isotope({		 
				itemSelector: '.isotope-item',
				percentPosition: true,
				layoutMode: 'masonry',	
				masonry: {
				  columnWidth: '.isotope-item'
				}	
			});	
		});
    }); 



    /*-------------------------------------------------------------------------------
	  Isotope Filter
	-------------------------------------------------------------------------------*/



	jQuery('.filter li a').on('click', function() {
		jQuery('.filter .active').removeClass('active');
		jQuery(this).closest('li').addClass('active');
		var selector = jQuery(this).attr('data-filter');
		jQuery('.isotope').isotope({
			filter: selector,
			animationOptions: {
				duration: 500,
				queue: false
			}
		});
		return false;
	});

	/*-------------------------------------------------------------------------------
	  Counter
	-------------------------------------------------------------------------------*/



	function counter() {
		
		if (typeof jQuery.fn.jQuerySimpleCounter !== 'undefined') {
		
			jQuery(".stat-number:in-viewport").each(function() {
				
				if (!jQuery(this).hasClass("animated")) {
					jQuery(this).addClass("animated");
					jQuery(this).jQuerySimpleCounter({
						start: 0,
						end: jQuery(this).attr("data-value"),
						duration: 2000
					});	
				}
			
			});
			
		}
	}



	/*-------------------------------------------------------------------------------
	  Windows scroll
	-------------------------------------------------------------------------------*/



	jQuery(window).on('scroll',function() {
		counter();
	});



	/*-------------------------------------------------------------------------------
	  Popup Gallery
	-------------------------------------------------------------------------------*/



	jQuery('.js-gallery').each(function(){
		jQuery(this).magnificPopup({
			delegate: 'a:not(.link)',
		    type: 'image',
		    removalDelay: 300,
		    tLoading: 'Loading image #%curr%...',
		    gallery: {
		       enabled: true,
		       navigateByImgClick: true,
		       preload:[0,1]
		    },
		    image: {
		       tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		       titleSrc: function(item) {
		          return item.el.attr('title') + '<small></small>';
		       }
		    }

		});
	});



	/*-------------------------------------------------------------------------------
	  Partners Carousel
	-------------------------------------------------------------------------------*/



	jQuery(".js-partners-carousel").owlCarousel({
		items : 5,
	    itemsDesktop : [1199,3],
	    itemsDesktopSmall : [980,2],
	    itemsTablet: [768,1],
	    itemsMobile : [479,1],
	    pagination:true,
	 	autoHeight : true
	});



	/*-------------------------------------------------------------------------------
	  Clients Carousel
	-------------------------------------------------------------------------------*/



	jQuery(".js-client-carousel").owlCarousel({
		items : 2,
	    itemsDesktop : [1199,1],
	    itemsDesktopSmall : [980,1],
	    itemsTablet: [768,1],
	    itemsMobile : [479,1],
	    pagination:true,
	 	autoHeight : true
	});




		/*-------------------------------------------------------------------------------
		  Subscribe Form
		-------------------------------------------------------------------------------*/
	    if (jQuery('#mc-form').length) {
	       jQuery('#mc-form').each(function () {
	            jQuery(this).validate({
	                errorClass: 'error wobble-error',
	                submitHandler: function (form) {
	                    jQuery('#mc-form .btn').attr('disabled', true);
	                    jQuery.ajax({
	                        type: "POST",
	                        url: virgo_obj.ajaxurl,
	                        data: 'action=virgo_mailchimp_send&' + jQuery(form).serialize(),
	                        success: function (res) {
	                            jQuery('#mc-notification').html(res);
	                            jQuery('#mc-form .btn').attr('disabled', false);

	                        },

	                        error: function (res) {
	                            jQuery('#mc-notification').html(res);
	                            jQuery('#mc-form .btn').attr('disabled', false);

	                        }
	                    });
	                }
	            });
	        });
	    }


	 /*-------------------------------------------------------------------------------
	  CF7 Form
	-------------------------------------------------------------------------------*/

	jQuery(".wpcf7-submit").click(function(event) {
		jQuery( document ).ajaxComplete(function() {
			myclass = jQuery(".wpcf7-response-output").hasClass("wpcf7-validation-errors") ? "alert" : "succes";
			alert (myclass);
			    jQuery.colorbox({
			 	className: myclass,
			   	opacity:"0.05",
			   	width:"350px",
			   	height:"200px",
			   	html:jQuery(".wpcf7-response-output").html()
			});
			jQuery('#success').modal('show');
			jQuery(".wpcf7-response-output").css( "display", "none" );
		});
	});


	/*-------------------------------------------------------------------------------
	  Ajax Form
	-------------------------------------------------------------------------------*/



if (jQuery('.js-ajax-form').length) {
        jQuery('.js-ajax-form').each(function () {
            jQuery(this).validate({
                errorClass: 'error wobble-error',
                submitHandler: function (form) {
                	jQuery('.js-ajax-form .btn').attr('disabled', true);
                	jQuery('.js-ajax-form .btn').addClass('disabled');
                    jQuery.ajax({
                        type: "POST",
                        url: virgo_obj.ajaxurl,
                        data: 'action=virgo_mail_send&' + jQuery(form).serialize(),
                        success: function (res) {
                            if (res == '1') {
                                jQuery('.modal').modal('hide');
                                jQuery('#success').modal('show');
                                jQuery('.js-ajax-form .btn').attr('disabled', false);
                                jQuery('.js-ajax-form .btn').removeClass('disabled');
                            } else {
                                jQuery('.modal').modal('hide');
                                jQuery('#error').modal('show');
                                jQuery('.js-ajax-form .btn').attr('disabled', false);
                                jQuery('.js-ajax-form .btn').removeClass('disabled');
                            }
                        },

                        error: function () {
                            jQuery('.modal').modal('hide');
                            jQuery('#error').modal('show');
                            jQuery('.js-ajax-form .btn').attr('disabled', false);
                                jQuery('.js-ajax-form .btn').removeClass('disabled');
                        }
                    });
                }
            });
        });
    }
})(jQuery);

