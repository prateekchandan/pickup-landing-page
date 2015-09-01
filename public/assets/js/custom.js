var bookSlider;
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
function IsPhone(phone){
  var regex=/^(\+91|0)?[7-9]\d{9}$/;
  return regex.test(phone);
}

$(window).load(function() {
    $('.book-flex-slider').flexslider({
        slideshow: false,
        directionNav: false,
        animation: "slide",
        controlNav:false,
        slideshowSpeed: 200,
        after:function(){
          $('#book_flex_next').off("click").click(nextSlide);
        }
    });
    $("#home-input").on('keyup',function(){
        $("#home-location").val("");
    });
    $("#office-input").on('keyup',function(){
        $("#office-location").val("");
    });
    $("#email-input").on('keyup',function(){
        if(IsEmail($("#email-input").val()))
          $("#email-error").html("");
    });
    $(".phone-input").on('keyup',function(){
        if(IsPhone($(this).val()))
          $(".phone-error").html("");
    });
    bookSlider = $('.book-flex-slider').data('flexslider');
    var slide = 0;
    $('#book_flex_next').click(nextSlide);

    function nextSlide(){
      $('#book_flex_next').off("click");
      console.log(slide);
      if(slide==0){
        if($("#home-location").val()==""){
          $('#home-error').html("Invalid/Empty Home Location");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        $('#home_icon').removeClass('active');
        $('#office_icon').addClass('active');
      }
      else if(slide==1){
        if($("#office-location").val()==""){
          $('#office-error').html("Invalid/Empty Office Location");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        $('#office_icon').removeClass('active');
        $('#email_icon').addClass('active');
      }
      else if(slide==2){
        var email = $("#email-input").val();
        if(!IsEmail(email)){
          $('#email-error').html("Invalid/Empty Email");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        $('#email_icon').removeClass('active');
        $('#phone_icon').addClass('active');
        $('#book_next_icon').removeClass('fa-angle-right');
        $('#book_next_icon').addClass('fa-save');
      }
      else if(slide==3){
        var phone = $(".phone-input").last().val();
        if(!IsPhone(phone)){
          $('.phone-error').html("Invalid/Empty Phone Number");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        submitUser();
        return;
      }
      $('.book-flex-slider').flexslider('next');
      
      slide++;
      slide = slide % 4;
    }

    function submitUser(){
      
    }
});



/* ==============================================
portfolio gallery slide
=============================================== */
$(window).load(function() {
    $('.portfolio-slide').flexslider({
        slideshowSpeed: 5000,
        directionNav: false,
        animation: "fade",
        controlNav:true
    });
});



/* ==============================================
Sticky Navbar
=============================================== */

$(document).ready(function(){
    $(".sticky").sticky({topSpacing:0});
});




/* ==============================================
Auto Close Responsive Navbar on Click
=============================================== */

function close_toggle() {
if ($(window).width() <= 768) {
  $('.navbar-collapse a').on('click', function(){
      $('.navbar-collapse').collapse('hide');
  });
}
else {
 $('.navbar .navbar-default a').off('click');
}
}
close_toggle();

$(window).resize(close_toggle); 


    
/* ==============================================
Smooth Scroll To Anchor
=============================================== */
$(function() {
	  $('.scrollto a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 50
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});


       /*=========================*/
     /*========tooltip and popovers====*/
     /*==========================*/
    $("[data-toggle=popover]").popover();
    
    $("[data-toggle=tooltip]").tooltip();


/*=========================*/
     /*========Animation on scroll with wow.js====*/
     /*==========================*/
     
   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        mobile:       true
      }
    );
    wow.init();
    
    
    /*=========================*/
     /*========on hover dropdown navigation====*/
     /*==========================*/
     
     
     $(document).ready(function() {

    $('.js-activated').dropdownHover({
        instantlyCloseOthers: false,
        delay: 0
    }).dropdown();

});

 //parallax
$(document).ready(function () {
    $(window).stellar({
        horizontalScrolling: false,
        responsive: true/*,
         scrollProperty: 'scroll',
         parallaxElements: false,
         horizontalScrolling: false,
         horizontalOffset: 0,
         verticalOffset: 0*/
    });
});

/* ==============================================
 Counter Up
 =============================================== */
jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 100,
        time: 800
    });
});
//owl carousel for testimonials
$(document).ready(function() {
 
  $("#testi-carousel").owlCarousel({
      // Most important owl features
    items : 1,
    itemsCustom : false,
    itemsDesktop : [1199,1],
    itemsDesktopSmall : [980,1],
    itemsTablet: [768,1],
    itemsTabletSmall: false,
    itemsMobile : [479,1],
    singleItem : false,
    startDragging : true
  });
 
});


/***=================easy pie charts================================= */
$('.chart').each(function () {
    var $this = $(this);
    var color = $(this).data('scale-color');

    setTimeout(function () {
        $this.filter(':visible').waypoint(function (direction) {
            $(this).easyPieChart({
                barColor: color,
                trackColor: '#fff',
                onStep: function (from, to, percent) {
                    jQuery(this.el).find('.percent').text(Math.round(percent));
                }
            });
        }, {offset: '100%'});
    }, 500);

});


//back to top

$(document).ready(function () {

    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

});
/* ==============================================
 mb.YTPlayer for video bg
 =============================================== */

jQuery(function () {
    jQuery(".player").mb_YTPlayer();
});

 $(window).scroll(function(){      
        /* -------------------
        Header Animation
        ---------------------*/
        if ($(this).scrollTop() > 5){  
            $('.navbar-transparent').addClass("navbar-bg");
        }
        else{
            $('.navbar-transparent').removeClass("navbar-bg");
        }
    });








