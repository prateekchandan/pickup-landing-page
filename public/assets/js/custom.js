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
          $('#book_flex_prev').off("click").click(prevSlide);
        }
    });
    $("#home-input").on('keyup',function(){
      $('#book_server_msg').html("");
        $("#home-location").val("");
    });
    $("#office-input").on('keyup',function(){
        $("#office-location").val("");
    });
    $("#name-input").on('keyup',function(){
          $("#name-error").html("");
    });
    $("#email-input").on('keyup',function(){
        if(IsEmail($("#email-input").val()))
          $("#email-error").html("");
    });
    $(".phone-input").on('keyup',function(){
        if(IsPhone($(this).val()))
          $(".phone-error").html("");
    });
    $('#time-input').on('change',function(){
         if($(this).val()==""){
            $('#time-error').html("Please select a time");
         }else{
            $('#book_flex_next').click();
         }
    });
    bookSlider = $('.book-flex-slider').data('flexslider');
    var slide = 0;
    var submitData={};
    $('#book_flex_next').click(nextSlide);
    $('#book_flex_prev').click(prevSlide);

    function nextSlide(){
      $('#book_flex_next').off("click");
      $('#book_flex_prev').off("click");
      console.log(slide);
      if(slide==0){
        if($("#home-location").val()==""){
          $('#home-error').html("Invalid/Empty Home Location");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        $('#book_flex_prev').show();
        $('#home_icon').removeClass('active');
        $('#office_icon').addClass('active');
        submitData['home_text'] = $('#home-input').val();
        submitData['home_location'] = $('#home-location').val();
      }
      else if(slide==1){
        if($("#office-location").val()==""){
          $('#office-error').html("Invalid/Empty Office Location");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        $('#office_icon').removeClass('active');
        $('#name_icon').addClass('active');
        submitData['office_text'] = $('#office-input').val();
        submitData['office_location'] = $('#office-location').val();
      }
      else if(slide==2){
        if($('#name-input').val()==""){
          $('#name-error').html("Empty Name Not allowed");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        submitData['name'] = $('#name-input').val();
        $('#name_icon').removeClass('active');
        $('#email_icon').addClass('active');
      }
      else if(slide==3){
        var email = $("#email-input").val();
        if(!IsEmail(email)){
          $('#email-error').html("Invalid/Empty Email");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        $('#email_icon').removeClass('active');
        $('#time_icon').addClass('active');
        submitData['email'] = email;
      }
      else if(slide==4){
        if($('#time-input').val()==""){
          $('#time-error').html("Please select a time");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        submitData['office_time'] = $('#time-input').val();
          $('#time_icon').removeClass('active');
          $('#phone_icon').addClass('active');
          $('#book_next_icon').removeClass('fa-angle-right');
          $('#book_next_icon').addClass('fa-save');
      }
      else if(slide==5){
        var phone = $(".phone-input").last().val();
        if(!IsPhone(phone)){
          $('.phone-error').html("Invalid/Empty Phone Number");
          $('#book_flex_next').click(nextSlide);
          return;
        }
        submitData['phone'] = phone;

        submitUser();
        $('#book_flex_next').click(nextSlide);
        return;
      }
      $('.book-flex-slider').flexslider('next');
      
      slide++;
      slide = slide % 6;
    }

    function prevSlide(){
      $('#book_flex_prev').off("click");
      $('#book_flex_next').off("click");
      if(slide==5){
          $('#time_icon').addClass('active');
          $('#phone_icon').removeClass('active');
          $('#book_next_icon').addClass('fa-angle-right');
          $('#book_next_icon').removeClass('fa-save');
      }
      else if(slide==4){
          $('#email_icon').addClass('active');
          $('#time_icon').removeClass('active');
      }
      else if(slide==3){
         $('#name_icon').addClass('active');
        $('#email_icon').removeClass('active');
      }
      else if(slide==2){
        $('#office_icon').addClass('active');
        $('#name_icon').removeClass('active');
      }
      else if(slide==1){
        $('#home_icon').addClass('active');
        $('#office_icon').removeClass('active');
        $('#book_flex_prev').hide();
      }
      $('.book-flex-slider').flexslider('previous');
      slide--;
      slide = slide % 6;
    }
    function submitUser(){
      submitData['_token']=$("#_token").val();
      console.log(submitData);
       $.ajax({
                url: "./add-user",
                type: "POST",
                data: submitData,
                cache: false,
                success: function(data) {
                    console.log(data);
                    if(typeof(Storage) !== "undefined") {
                        localStorage.setItem("register", "1");
                        localStorage.setItem("email",submitData['email']);
                    }
                    $('#book-body').html('<div class="animated fadeInDown text-center" data-wow-delay=".3s"><h2>Thankyou for registering '+submitData['name']+'</h2><p>You will be shortly contacted by us. Please contact us for further queries</p></div>');
                },
                error: function(data) {
                    // Fail message
                    $('#book_server_msg').html("<div class='alert alert-danger'>");
                    $('#book_server_msg > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#book_server_msg > .alert-danger').append("<strong>Sorry , it seems that the user is already registered.");
                    $('#book_server_msg > .alert-danger').append('</div>');
                    //clear all fields
                    submitData={};
                    $('#user_add_form').trigger("reset");
                    $('.book-flex-slider').flexslider(0);
                    $('#book_next_icon').addClass('fa-angle-right');
                    $('#book_next_icon').removeClass('fa-save');
                    $('#book_flex_prev').hide();
                    $('#phone_icon').removeClass('active');
                    $('#time_icon').removeClass('active');
                    $('#home_icon').addClass('active');
                    $('.error_text').html("");
                    $("#office-location").val("");
                    $("#home-location").val("");
                    slide = 0;
                },
            })
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

    $('.featureHead a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 100
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









