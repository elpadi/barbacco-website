jQuery(document).ready(function() {

	/**
	*	DATE PLACEHOLDER
	**/
	var fullDate = new Date();
	var twoDigitMonth = fullDate.getMonth()+1+"";
		if(twoDigitMonth.length==1) {
			twoDigitMonth="0" +twoDigitMonth;
		}
	var twoDigitDate = fullDate.getDate()+"";
		if(twoDigitDate.length==1) {
			twoDigitDate="0" +twoDigitDate;
		}
	var currentDate = twoDigitMonth + "/" + twoDigitDate + "/" + fullDate.getFullYear();
			
	jQuery(".reservations-wrap #date-otw_widget-2, .modal-content #date-otw_widget-2").attr("placeholder", "").val(currentDate)/* .focus().blur() */;
	
	
	/**
	*	TAB SWITCHER
	**/
	//jQuery("#menusContentWrapper .tab-content .tab:first").show(); //Show first tab content
	
	jQuery('body.page-template-menus .the-page-submenu-titles a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('body.page-template-menus .barbacco-section-content .tab-content ' + currentAttrValue).fadeIn(400).siblings().hide();
        jQuery('body.page-template-menus #header-wrap .tab-content ' + currentAttrValue).fadeIn(400).siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('body.page-template-menus .the-page-submenu-titles ul li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
	

	/**
	*	ADDING CLASS ACTIVE TO MENU TAB'S FIRST ITEM
	**/
	jQuery('body.page-template-menus .the-page-submenu-titles ul li:first-child').addClass('active');
	jQuery('body.page-template-menus .barbacco-section-content .tab-content .tab:first-child').addClass('active');
	jQuery('body.page-template-menus #header-wrap .tab-content .tab:first-child').addClass('active');
	/* jQuery('body.page-template-menus #headerWrapper .tab-content .tab:first-child').addClass('active'); */
	
	
	/**
	*	DESKTOP DOWN NARROW SCROLL
	**/
	/* function isTouchDevice() {
		return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
	} */
	function isTouchDevice() {
		return 'ontouchstart' in document.documentElement;
	}
	
	//if ( isTouchDevice() === false ) {
	//if ( jQuery(window).width() > 1199) {
	if ( !isTouchDevice() ) {
		jQuery('#header-wrap .narrow-down').show();
		
		jQuery(".narrow-down").click(function() {
			jQuery('html, body').animate({
				scrollTop: jQuery(".barbacco-sec-content, body.home #footer-wrapper").offset().top
			}, 500);
		});
		
		if ( jQuery(window).width() > 1439) {
			var navOffset = jQuery("#header-wrap .narrow-down").offset().top-550;
		} else {
			var navOffset = jQuery("#header-wrap .narrow-down").offset().top-350;
		}
		jQuery(window).scroll(function() {
			var scrollPos = jQuery(window).scrollTop();
			
			if (scrollPos > navOffset) {
				jQuery("#header-wrap .narrow-down").hide();
			} else {
				jQuery("#header-wrap .narrow-down").show();
			}
		});
	}
	
	
	jQuery('a[data-toggle="collapse"]').click(function(e){
		//e.preventDefault()
		if (jQuery(window).width() >= 768){  
			e.stopPropagation();
		}
	});

	
	jQuery( window ).on( 'resize', function() {
		window_width = jQuery( window ).width();
		
		if ( window_width > 991 ) {
			var max_height = 0;
			jQuery( '#footer-wrapper .row .col-xs-12.col-md-3' ).each( function(){
				if ( jQuery( this ).height() > max_height ) {
					max_height = jQuery( this ).height();
				}
			});
			jQuery( '#footer-wrapper .row .col-xs-12.col-md-3' ).height( max_height );
		}
	}).resize();
	
})