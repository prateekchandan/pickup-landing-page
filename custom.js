$(window).load(function() {
	"use strict";
    /* ==============================================
    PRELOADER
    =============================================== */
    var preloaderDelay = 800;
    var preloaderFadeOutTime = 1000;

    function hidePreloader() {
        var loadingAnimation = $('#loading-animation');
        var preloader = $('.main');

        loadingAnimation.fadeOut();
        preloader.delay(preloaderDelay).fadeOut(preloaderFadeOutTime, function() {
        	jQuery('.animate').waypoint(function() {
        	     var animation = jQuery(this).attr("data-animate");
        	     jQuery(this).addClass(animation);
        	     jQuery(this).addClass('animated');
        	}, { offset: '80%' }); 
         });
    }
    
    hidePreloader();
    
});

/* DOCUMENT READY  ----------- */
jQuery(document).ready(function() {
		
"use strict";	
	
	/* ==============================================
	DIV's POSITION
	=============================================== */
	
	var windowHeight = $(window).height();
	var homePageHeight = $('#homepage').height();
	
	if (windowHeight >= homePageHeight){
		$('#homepage').css("padding-top", (((windowHeight-homePageHeight)/2)-20));
		$('#homepage').css("padding-bottom", (((windowHeight-homePageHeight)/2)-20));
	}
	
	$(window).resize(function() {		
		var windowHeight = $(window).height();
		var homePageHeight = $('#homepage').height();
	
		if (windowHeight >= homePageHeight){
			$('#homepage').css("padding-top", ((windowHeight-homePageHeight)/2));
			$('#homepage').css("padding-bottom", ((windowHeight-homePageHeight)/2));
		}
	});

	/* ==============================================
	/*	COUNTDOWN
	=============================================== */
	var now = new Date();
	var date = new Date('2015','08','10');
	var difference = date - now - (30*24*60*60*1000); //fix a gap of 30 days
	var countTo = difference + now.valueOf();
	//var countTo = 25 * 24 * 60 * 60 * 1000 + now.valueOf();
	$('.timer').countdown(countTo, function(event) {
		var $this = $(this);
		switch(event.type) {
			case "seconds":
			case "minutes":
			case "hours":
			case "days":
			case "weeks":
			case "daysLeft":
				$this.find('h1.'+event.type).html(event.value);
				break;
			case "finished":
				$this.hide();
				break;
		}
	});	
	
	/* ==============================================
	/*	SUSCRIPTION FORM
	=============================================== */
    $('.success-message').hide();
    $('.error-message').hide();

    $('.subscribe form').submit(function() {
        var postdata = $('.subscribe form').serialize();
        $.ajax({
            type: 'POST',
            url: '../php/sendmail.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if(json.valid == 0) {
                    $('.success-message').hide();
                    $('.error-message').hide();
                    $('.error-message').html(json.message);
                    $('.error-message').fadeIn().delay(3000).fadeOut();
                }
                else {
                    $('.success-message').hide();
                    $('.error-message').hide();
                    $('.subscribe form').hide().delay(3000).fadeIn();
                    $('.subscribe form input').val('');
                    $('.success-message').html(json.message);
                    $('.success-message').fadeIn().delay(2000).fadeOut();
                }
            }
        });
        return false;
    });
	
	/* ==============================================
    /* LOAD THE ANIMATIONS IF THE BROWSER IS NOT IE
	================================================== */	
	if( !device.tablet() && !device.mobile() ) { //Load the animations if the device is not a mobile or tablet
		$('head').append('<!--[if !IE]><!--><link rel="stylesheet" type="text/css" media="screen" href="../css/animate.css"><!--<![endif]-->');
	}		

}); /* END DOCUMENT READY  ----------- */
