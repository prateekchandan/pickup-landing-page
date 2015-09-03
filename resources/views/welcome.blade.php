@extends('template.onePageTemplate')

@section('meta')
<meta name="keywords" content="pickup , ride" />
@endsection

@section('body')
        <section id="home" class="full-screen-dem parallax" data-stellar-background-ratio="0.5">
            <div class="parallax-overlay">
                <img src="{{asset('assets/img/logo1.png')}}" id="site-header-logo">
            </div>
            <div class="home-content text-center">
                <div class="container" style="margin-top: 150px;">
                    <div class="main-flex-slider">
                        <ul class="slides">
                            <li>
                                <h1>DAILY COMMUTE PERFECTED</h1>

                            </li>
                        </ul>
                    </div> 
                    <h2 class="slide-btm-text">On Demand Affordable Shared Cabs</h2>
                    <div class="home-arrow-down text-center">
                        <p class="scrollto"><a href="#bookRide" class="btn btn-lg btn-theme-color">
                        <i class="fa fa-gift fa-lg"></i>
                        Get your free ride
                        </a></p>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <i class="fa fa-cab theme_color fa-5x"></i>
                            <p class="main_page_text">Book a ride on your phone</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-user theme_color fa-5x"></i>
                            <p class="main_page_text">Get picked up on your corner by a professionally chauffeured vehicle</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-users theme_color fa-5x"></i>
                            <p class="main_page_text">Share your ride with others going the same way</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-rupee theme_color fa-5x"></i>
                            <p class="main_page_text">Save cash and reduce your carbon footprint</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="navigation">
            <div class="navbar navbar-default navbar-static-top sticky" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img class="navbar-brand" src="{{asset('assets/img/logo.png')}}">
                    </div>
                    <div class="navbar-collapse collapse">

                        <ul class="nav navbar-nav navbar-right scrollto">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#features">Features</a></li>
                            <li><a href="#bookRide">Book Your Ride</a></li>

                            <li><a href="#contact">Contact</a></li>

                        </ul>

                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
        </section><!--navigation section end here-->
        <section id="features" class="padding-80" style="height:400%">
 			
                <div class="container one-four-screen" id="feature-1">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 featureHead">
                            <div class="col-xs-3">
                                <a href="#feature-1"><i class=" theme_color fa fa-gears fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-2"><i class="fa fa-clock-o fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-3"><i class="fa fa-database fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-4"><i class="fa fa-rupee fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row"  style="margin-top:100px">
                        <div class="col-md-6 wow animated fadeInLeft" data-wow-delay="0.3s">
                            <div class="col-md-8 col-md-offset-3"  style="margin-top:60px">
                                 <div class="features_heading">COMFORTABLE</div>
                                    <p class="features-text">
                                        Your comfortable cab ride is now available for daily use
                                    </p>
                                   
                            </div>
                           
                        </div>
                        <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.6s">
                            <img class="feature-img" src="{{asset('assets/img/john_relaxing.png')}}">
                        </div>
                    </div>
                </div>

                <div class="container one-four-screen" id="feature-2">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 featureHead">
                            <div class="col-xs-3">
                                <a href="#feature-1"><i class="fa fa-gears fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-2"><i class="theme_color fa fa-clock-o fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-3"><i class="fa fa-database fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-4"><i class="fa fa-rupee fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row"  style="margin-top:80px">
                        <div class="col-md-6 wow animated fadeInLeft text-right" data-wow-delay="0.3s">
                            <img class="feature-img" src="{{asset('assets/img/john_computer_time.png')}}">
                        </div>
                        <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.6s">
                            <div class="col-md-8 col-md-offset-3"  style="margin-top:100px">
                                 <div class="features_heading">RELIABLE</div>
                                    <p class="features-text">
                                        Your know you would be picked for office no matter what
                                    </p>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
                <div class="container one-four-screen" id="feature-3">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 featureHead">
                            <div class="col-xs-3">
                                <a href="#feature-1"><i class="fa fa-gears fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-2"><i class="fa fa-clock-o fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-3"><i class="theme_color fa fa-database fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-4"><i class="fa fa-rupee fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row"  style="margin-top:100px">
                        <div class="col-md-6 wow animated fadeInLeft" data-wow-delay="0.3s">
                            <div class="col-md-8 col-md-offset-3"  style="margin-top:60px">
                                 <div class="features_heading">CONVINIENT</div>
                                    <p class="features-text">
                                        Your will pe picked up right from your door and dropped to your office
                                    </p>
                                   
                            </div>
                           
                        </div>
                        <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.6s">
                            <img class="feature-img" src="{{asset('assets/img/john_computer_work.png')}}">
                        </div>
                    </div>
                </div>

                <div class="container one-four-screen" id="feature-4">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 featureHead">
                            <div class="col-xs-3">
                                <a href="#feature-1"><i class="fa fa-gears fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-2"><i class="fa fa-clock-o fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-3"><i class="fa fa-database fa-4x"></i></a>
                            </div>
                            <div class="col-xs-3">
                                <a href="#feature-4"><i class="theme_color  fa fa-rupee fa-4x"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row"  style="margin-top:80px">
                        <div class="col-md-6 wow animated fadeInLeft text-right" data-wow-delay="0.3s">
                            <img class="feature-img" src="{{asset('assets/img/john_money_saving.png')}}">
                        </div>
                        <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.6s">
                            <div class="col-md-8 col-md-offset-3"  style="margin-top:100px">
                                 <div class="features_heading">AFFORDABLE</div>
                                    <p class="features-text">
                                        Save more than 50% on your cab rides , book regular to save even more. No more surprise cost
                                    </p>
                            </div>
                           
                        </div>
                    </div>
                </div>
        </section>
        <!--feature section end here-->



        <!--pricing table section start here-->


        <section id="bookRide" class="padding-80 full-screen-section">



            <div class="bookRide-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title">
                        	<i class="fa fa-gift fa-7x"></i>
                        </h4>
                        <h2 class="large section-title">BOOK YOUR FREE RIDE</h2>
                    </div><!--section heading-->
                </div><!--section heading-->
                <div class="container">
                    <div class="row" id="book-body">
                        
                        	@if(is_null(session("registered")))
                        	<div class="col-md-6 col-md-offset-3">
	                            <div class="animated fadeInDown" data-wow-delay=".3s">
	                            	<div class="col-md-10 col-md-offset-1 book_icon_set">
				                        <div class="col-xs-2 active" id="home_icon">
				                       		<i class="fa fa-home fa-3x"></i>
				                        </div>
				                        <div class="col-xs-2" id="office_icon">
				                            <i class="fa fa-building fa-3x"></i>
				                        </div>
				                        <div class="col-xs-2" id="name_icon">
				                            <i class="fa fa-user fa-3x"></i>
				                        </div>
				                        <div class="col-xs-2" id="email_icon">
				                            <i class="fa fa-envelope fa-3x"></i>
				                        </div>
                                        <div class="col-xs-2" id="time_icon">
                                            <i class="fa fa-clock-o fa-3x"></i>
                                        </div>
				                        <div class="col-xs-2" id="phone_icon">
				                            <i class="fa fa-mobile-phone fa-3x"></i>
				                        </div>
				                    </div>
				                    <div class="col-md-12">
				                    	<form id="user_add_form">
				                    		<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
				                    		<div class="book-flex-slider">
						                        <ul class="slides">
						                            <li>
			                                            <input tabindex="-1" type="text" name="home_text" id="home-input" class="colour-input"  placeholder="Enter your Home Address" autocomplete="false">
			                                            <span id="home-error" class="error_text"></span>
			                                            <input type="hidden" id="home-location" name="home_location">
						                            </li>
						                            <li>
				                                            <input tabindex="-1" type="text" id="office-input" name="office_text" class="colour-input"  placeholder="Enter your Office Address" autocomplete="false">
				                                            <span id="office-error" class="error_text"></span>
				                                            <input type="hidden" id="office-location" name="office_location">
						                            </li>
						                            <li>
				                                        <input tabindex="-1" type="text" id="name-input" name="name" class="colour-input"  placeholder="Enter your name" autocomplete="false">
				                                        <span id="name-error" class="error_text"></span>
						                            </li>
						                            <li>
				                                        <input tabindex="-1" type="email" id="email-input" name="email" class="colour-input"  placeholder="Enter your email id" autocomplete="false">
				                                        <span id="email-error" class="error_text"></span>
						                            </li>
                                                    <li>
                                                        <select tabindex="-1" placeholder="Select Time Slot" id="time-input" name="office_time" class="colour-input">
                                                            <option value="">Select your office Timings</option>
                                                            <option value="16:00:00">4:00 - 4:30</option>
                                                            <option value="16:30:00">4:30 - 5:00</option>
                                                            <option value="17:00:00">5:00 - 5:30</option>
                                                            <option value="17:30:00">5:30 - 6:00</option>
                                                            <option value="18:00:00">6:00 - 6:30</option>
                                                            <option value="18:30:00">6:30 - 7:00</option>
                                                            <option value="19:00:00">7:00 - 7:30</option>
                                                            <option value="19:30:00">7:30 - 8:00</option>
                                                            <option value="20:00:00">8:00 - 8:30</option>
                                                            <option value="20:30:00">8:30 - 9:00</option>
                                                            <option value="21:00:00">9:00 - 9:30</option>
                                                        </select>
                                                        <span id="time-error" class="error_text"></span>
                                                    </li>
						                            <li>
				                                        <input tabindex="-1" type="text" id="phone-input" name="phone" class="phone-input colour-input"  placeholder="Enter your 10 digit mobile number" autocomplete="false">
				                                        <span id="phone-error" class="phone-error error_text"></span>
						                            </li>

						                        </ul>
					                    	</div> 
						                </form>
		                            </div>
		                            <div class=" col-md-12 text-center">
		                                <span class="book_flex_next" id="book_flex_prev" style="display:none">
		                                    <i class="fa fa-angle-left fa-2x" id="book_prev_icon"></i>
		                                </span>
                                        <span class="book_flex_next" id="book_flex_next">
                                            <i class="fa fa-angle-right fa-2x" id="book_next_icon"></i>
                                        </span>
		                            </div>
		                            <div class="col-md-12" id="book_server_msg">
		                            </div>
	                                
	                            </div><!--pricing wrapper-->
	                        </div><!--price col-->
                            @else
                            <div class="animated fadeInDown text-center" data-wow-delay=".3s">
                            	<h2>You are already registered from {{session("email")}}</h2>
                            	<p>Please <a href="#contact">contact us</a> for any queries</p>
                            </div>
                            @endif
                       
                    </div>
                </div>
            </div><!--price section one end here-->


           

        </section> <!--pricing table section end here-->




     


        <section id="contact" class="padding-80">


            <div class="contact-sec-1">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>we Love to here from you  </span></h4>
                        <h2 class="large section-title">Contact Us</h2>
                    </div><!--section heading-->
                </div><!--.container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Get in touch</h4>
                            <form name="sentMessage" id="contactForm" method="post" novalidate>
                            	<input type="hidden" name="_token" id="_token1" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>Name<span>*</span></label>
                                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="row control-group">
                                            <div class="form-group col-xs-12 controls">
                                                <label>Email Address<span>*</span></label>
                                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>Message<span>*</span></label>
                                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <br>
                                <div id="success"></div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <button type="submit" class="btn btn-theme-color btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <!--contact form-->
                        </div>
                       
                    </div>
                </div>
            </div><!--Contact-sec-1 end-->

        </section><!--contact section end-->
        <div class="contact-sec-2">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                            <i class="fa fa-phone"></i>
                            <p>+91 8268430474</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                            <i class="fa fa-envelope"></i>
                            <p>support@getpickup.in</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                            <i class="fa fa-home"></i>
                            <p>Powai , Mumbai<br>40076, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Contact-sec-1 end-->


        <section id="footer" class="padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 copyright">
                        <span>&copy;2015.Pickup. All right reserved</span>
                    </div>
                    <div class="col-md-6 col-sm-6 footer-nav">
                        <ul class="list-inline">
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--footer end-->

         <script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

var placeSearch, autocomplete1, autocomplete2;

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete1 = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('home-input')),
      {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete1.addListener('place_changed', fillInAddress1);

  autocomplete2 = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('office-input')),
      {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete2.addListener('place_changed', fillInAddress2);

  geolocate();
}

// [START region_fillform]
function fillInAddress1() {
	$('#home-location').val("");
  // Get the place details from the autocomplete object.
  var place = autocomplete1.getPlace();
  console.log(place);
  var check = checkInPlace(place);
  
  if(!check){
  	$('#home-error').html("Sorry! We are only supporting in Bombay Now");
  	$('#home-input').val("");
  	return;
  }
  $('#home-error').html("");
   $('#home-location').val(place.geometry.location.G+","+place.geometry.location.K);
   $('#book_flex_next').click();
}
function checkInPlace(place){
	var check = false;
	for (var i = place.address_components.length - 1; i >= 0; i--) {
  	var part = place.address_components[i];
  	if(part.types[0]=="administrative_area_level_2")
  	{
  		if(part.short_name=="Mumbai Suburban"||part.short_name=="Thane"||part.short_name=="Kalyan"||part.short_name=="Mumbai")
  			check=true;
  		break;
  	}
  };
  return check;
}
function fillInAddress2() {
  // Get the place details from the autocomplete object.
  $('#office-location').val("");
  var place = autocomplete2.getPlace();
 
  var check = checkInPlace(place);
  
  if(!check){
  	$('#office-input').val("");
  	$('#office-error').html("Sorry! We are only supporting in Bombay Now");
  	return;
  }
  	$('#office-error').html("");
   $('#office-location').val(place.geometry.location.G+","+place.geometry.location.K);
   $('#book_flex_next').click();
}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      console.log(position);
      autocomplete1.setBounds(circle.getBounds());
      autocomplete2.setBounds(circle.getBounds());
    });
  }
}
// [END region_geolocation]

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>

@endsection