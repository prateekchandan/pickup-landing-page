@extends('template.onePageTemplate')

@section('meta')
<meta name="keywords" content="pickup , ride" />
@endsection

@section('body')
        <section id="home" class="full-screen-dem parallax" data-stellar-background-ratio="0.5">
            <div class="home-content text-center">
                <div class="container">
                    <h1 class=" slide-logo">Pickup</h1>
                    <div class="main-flex-slider">
                        <ul class="slides">
                            <li>
                                <h1>LET'S WORK TOGETHER</h1>

                            </li>
                        </ul>
                    </div> 
                    <h2 class="slide-btm-text">Pickup FOR DESIGN AGENCIES - BUSINESS AND CORPORATE</h2>
                    <div class="home-arrow-down text-center">
                        <p class="scrollto"><a href="#bookRide" class="btn btn-lg btn-theme-color">
                        <i class="fa fa-gift fa-lg"></i>
                        Get your free ride
                        </a></p>
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
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#bookRide">Book Your Ride</a></li>

                            <li><a href="#contact">Contact</a></li>

                        </ul>

                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
        </section><!--navigation section end here-->
        <section id="about" class="padding-80">

            <!--about page content-->
            <div class="about-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>We love what we do?</span></h4>
                        <h2 class="large section-title">
                        <?php
                        if(DB::connection()->getDatabaseName())
						{
						   echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
						}?>
						
About us</h2>
                    </div><!--section heading-->             

                </div><!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-duration="0.3s">
                                <div class="about-box-icon">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Creative ideas </h4>
                                    <p>
                                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-delay="0.5">
                                <div class="about-box-icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Clean Code</h4>
                                    <p>
                                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                    </div><!--about services row end--> 
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-delay="0.6s">
                                <div class="about-box-icon">
                                    <i class="fa fa-image"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Unique Designs </h4>
                                    <p>
                                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="about-box wow animated fadeInDown" data-wow-delay="0.8s">
                                <div class="about-box-icon">
                                    <i class="fa fa-hand-o-up"></i>
                                </div>
                                <div class="about-box-text">
                                    <h4>Creative Team </h4>
                                    <p>
                                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa
                                    </p>
                                </div>
                            </div><!--about us box end-->
                        </div>
                    </div><!--about services row end--> 
                    <div class="about-section-more">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="about-more-info wow animated fadeInUp" data-wow-delay="0.3s">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="skills-wrapper wow animated bounceIn" data-wow-delay="0.6s">
                                    <h3 class="heading-progress">Web Design <span class="pull-right">88%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 88%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="88" role="progressbar">
                                        </div>
                                    </div>
                                    <h3 class="heading-progress">Web Development <span class="pull-right">78%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 78%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="78" role="progressbar">
                                        </div>
                                    </div>
                                    <h3 class="heading-progress">Marketing <span class="pull-right">82%</span></h3>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 82%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" role="progressbar">
                                        </div>
                                    </div>                    
                                </div>
                            </div>
                        </div>
                        <div class="row easy-pie-chart-row">
                            <div class="col-sm-3 text-center">
                                <div class="progress-circle">

                                    <div class="chart" data-percent="95" data-scale-color="#f7505a">
                                        <span>95%</span>
                                        <canvas height="120" width="120"></canvas>
                                    </div>
                                    <p class="progress-text">HTML5 / CSS3</p>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center">
                                <div class="progress-circle">

                                    <div class="chart" data-percent="85" data-scale-color="#f7505a">
                                        <span>85%</span>
                                        <canvas height="120" width="120"></canvas>
                                    </div>
                                    <p class="progress-text">WORDPRESS</p>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center">
                                <div class="progress-circle">

                                    <div class="chart" data-percent="75" data-scale-color="#f7505a">
                                        <span>75%</span>
                                        <canvas height="120" width="120"></canvas>
                                    </div>
                                    <p class="progress-text">Jquery</p>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center">
                                <div class="progress-circle">

                                    <div class="chart" data-percent="89" data-scale-color="#f7505a">
                                        <span>89%</span>
                                        <canvas height="120" width="120"></canvas>
                                    </div>
                                    <p class="progress-text">Photoshop</p>
                                </div>
                            </div>

                        </div>

                    </div><!--section about 3 end-->
                </div>
            </div>

            <div class="purchase-now parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="wow animated fadeInLeft" data-wow-delay="0.3s">Using Design as a <strong>Business</strong> Strategy</h1>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn btn-lg btn-theme-color wow animated bounceIn" data-wow-delay="0.6s"> Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--page about content end here-->            
        </section>
        <!--about section end here-->

        <!--section services start here-->

        <section id="services" class="padding-80">


            <div class="services-section-1">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>What we do?</span></h4>
                        <h2 class="large section-title">Our Services</h2>
                    </div><!--section heading-->             

                </div><!--container-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="margin-btm-40">
                                <h4>Flexibility built in</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. Donec vitae dolor lectus. Etiam facilisis rutrum vestibulum. In at ligula vitae lectus porta posuere vel vel est. Aliquam interdum mi vitae arcu fermentum iaculis. Sed feugiat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 wow animated fadeInLeft" data-wow-delay="0.3s">

                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-image"></i>
                                    </div> 
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Website design</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. 
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-plane"></i>
                                    </div> 
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Marketing </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. 
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-leaf"></i>
                                    </div> 
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Logo design </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. 
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-paper-plane"></i>
                                    </div> 
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Search engine optimization(seo) </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. 
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                        </div>
                        <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.6s">

                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-image"></i>
                                    </div> 
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Website design</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. 
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-plane"></i>
                                    </div> 
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Marketing </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. 
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-leaf"></i>
                                    </div> 
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Logo design </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. 
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                            <div class="row margin-btm-20">
                                <div class="col-md-2">
                                    <div class="services-icon">
                                        <i class="fa fa-paper-plane"></i>
                                    </div> 
                                </div>
                                <div class="col-md-10">
                                    <div class="services-info">
                                        <h3>Search engine optimization(seo) </h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget viverra augue. Nunc dignissim rutrum tempor. 
                                        </p>
                                    </div>
                                </div>
                            </div><!--.services row end-->
                        </div>
                    </div>
                </div>
            </div><!--services section 1 end-->
            <div class="services-section-2 parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Subscribe to Newsletter</h1>
                            <form class="newsletter-form">
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <div class="input-group">
                                            <label class="sr-only" for="subscribe-email">Email address</label>
                                            <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-theme-color btn-lg">OK</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--services section 1 end-->
        </section>
        <!--section services end here-->


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
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="animated fadeInDown" data-wow-delay=".3s">
                            	<div class="col-md-10 col-md-offset-1 book_icon_set">
			                        <div class="col-md-3 active" id="home_icon">
			                       		<i class="fa fa-map-marker fa-3x"></i>
			                        </div>
			                        <div class="col-md-3" id="office_icon">
			                            <i class="fa fa-map-marker fa-3x"></i>
			                        </div>
			                        <div class="col-md-3" id="email_icon">
			                            <i class="fa fa-envelope fa-3x"></i>
			                        </div>
			                        <div class="col-md-3" id="phone_icon">
			                            <i class="fa fa-mobile-phone fa-3x"></i>
			                        </div>
			                    </div>
			                    <div class="col-md-12">
			                    	<div class="book-flex-slider">
			                    		<form>
					                        <ul class="slides">
					                            <li>
		                                            <input type="text" id="home-input" class="colour-input"  placeholder="Enter your Home Address" autocomplete="false">
		                                            <span id="home-error" class="error_text"></span>
		                                            <input type="hidden" id="home-location">
					                            </li>
					                            <li>
			                                            <input type="text" id="office-input" class="colour-input"  placeholder="Enter your Office Address" autocomplete="false">
			                                            <span id="office-error" class="error_text"></span>
			                                            <input type="hidden" id="office-location">
					                            </li>
					                            <li>
			                                        <input type="email" id="email-input" class="colour-input"  placeholder="Enter your email id" autocomplete="false">
			                                        <span id="email-error" class="error_text"></span>
					                            </li>
					                            <li>
			                                        <input type="text" id="phone-input" class="phone-input colour-input"  placeholder="Enter your 10 digit mobile number" autocomplete="false">
			                                        <span id="phone-error" class="phone-error error_text"></span>
					                            </li>

					                        </ul>
					                    </form>
				                    </div> 
	                            </div>
	                            <div class=" col-md-12">
	                                <div class="book_flex_next" id="book_flex_next">
	                                    <i class="fa fa-angle-right fa-2x" id="book_next_icon"></i>
	                                </div>
	                            </div>
                                
                            </div><!--pricing wrapper-->
                        </div><!--price col-->
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
                        <div class="col-md-8">
                            <h4>Get in touch</h4>
                            <form name="sentMessage" id="contactForm" method="post" novalidate>
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
                        <div class="col-md-4">
                            <h4>Contact info</h4>
                            <div class="contact-info wow animated fadeInRight" data-wow-delay=".6s">
                                <p><i class="fa fa-home"></i> 124,Munna wali Dhani Jaipur, India</p>
                                <p><i class="fa fa-home"></i> +91 141-1234567890</p>
                                <p><b>Fax:</b> +91 1234567890</p>
                                <p><i class="fa fa-envelope"></i> <a href="#">mail@domain.com</a></p>
                                <p><i class="fa fa-clock-o"></i> Monday-Friday 9:30-5:30pm</p>
                                <hr>
                                <h4>Elsewhere</h4>
                                <ul class="list-inline social-colored"> 
                                    <li><a href="#"><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus icon-plus" data-toggle="tooltip" title="" data-original-title="Google pluse" data-placement="top"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin icon-in" data-toggle="tooltip" title="" data-original-title="Linkedin" data-placement="top"></i></a></li>

                                </ul> <!--colored social-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--Contact-sec-1 end-->

        </section><!--contact section end-->
        <div id="map-canvas" style="width:100%; height: 350px;"></div>
        <div class="contact-sec-2">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                            <i class="fa fa-phone"></i>
                            <p>+91 0141 123456789</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                            <i class="fa fa-envelope"></i>
                            <p>mail@Domain.com</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                            <i class="fa fa-home"></i>
                            <p>124,munnawali jaipur<br>302012, india</p>
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
                            <li><a href="demo-default.html">Home</a></li>
                            <li><a href="blog-list.html">Latest news</a></li>
                            <li><a href="typography.html">Typography</a></li>
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