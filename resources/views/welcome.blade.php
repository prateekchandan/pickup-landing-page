<!DOCTYPE html>
<html lang="en">
  <head>

    <!--
        /***********************************************************/

         mmmmm  mmmmm    mmm  m    m m    m mmmmm 
         #   "#   #    m"   " #  m"  #    # #   "#
         #mmm#"   #    #      #m#    #    # #mmm#"
         #        #    #      #  #m  #    # #     
         #      mm#mm   "mmm" #   "m "mmmm" #  
        

        If you are reading this , then contact us . We will hire you
        /***********************************************************/

        -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pickup is a cabpooling platform where you book a ride to any destination at an affordable rate.">
    <meta name="author" content="Pickup Team">
    <meta name="keywords" content="pickup , ride" />
    <title>Pickup</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/nivo-lightbox.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nivo-themes/default/default.css')}}" type="text/css">
    <link href="{{asset('admin_assets/vendors/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
    
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/icon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/icon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/icon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/icon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/icon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/icon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/icon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/icon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/icon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/img/icon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/icon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/icon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/icon/favicon-16x16.png')}}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">

    <!-- Menu -->
    <nav class="menu" id="theMenu">
        <div class="menu-wrap">
            <h1 class="logo"><a href="#home">PICKUP</a></h1>
            <i class="ion-android-close menu-close"></i>
            <a href="#home" class="smoothScroll">Home</a>
            <a href="#about" class="smoothScroll">What is Pickup</a>
            <a href="#why_free" class="smoothScroll">Why Free Ride</a>
            <a href="#how_to_book" class="smoothScroll">How to Book Ride</a>
            <a href="#why_chose" class="smoothScroll">Why Chose Us</a>
        </div>
        
        <!-- Menu button -->
        <div id="menuToggle"><i class="ion-navicon"></i> Menu</div>
    </nav>

      <!-- ********** HEADER ********** -->
      <section id="home"></section>
      <div id="h">
        <div class="row centered logo_bar">
            <img src="{{asset('assets/img/pickup logo.png')}}">
        </div>

        <div class="container">
            <div class="row centered">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Get Your First Cabpooling Experience <br>With Us For <b>Free</b>, Anywhere In Mumbai! </h2>
                </div>
                <img src="{{asset('assets/img/static.png')}}" id="bck-img">

                <div class="phone-register centered" id="phone-register">
                    <p>INTRODUCING AIR-CONDITIONED CABS THAT ARE COMFY, SECURE AND AFFORDABLE</p>
                    <form role="form"  method="post"> 
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <input type="hidden" name="platform" value="web">
                        <input type="text" pattern="[7-9][0-9]{9}"  id="input-phone" name="phone" class="subscribe-input" placeholder="Enter Your Mobile No." required
                         oninvalid="setCustomValidity('Please Enter a valid 10-digit phone number')"
                        onchange="try{setCustomValidity('')}catch(e){}">
                        <button class='btn btn-submit subscribe-submit' type="submit">Get My Free Ride</button>
                    </form>
                     @if(session()->has('error'))
                        <div class="text-danger" id="hint-text"><small>
                            {{session('error')}}
                        </small></div>
                    @elseif(session()->has('registered'))
                         <div class="text-success" id="hint-text"><small>
                            @if(session()->has('msg'))
                                {{session('msg')}}
                            @else
                            You have already registered
                            @endif
                        </small></div>
                    @endif
                </div>
                <div class="go aligncenter">
                    <a href="#about" class="smoothScroll">What is PickUp? <i class="icon ion-arrow-down-b"></i></a>
                </div>
            </div>
        </div><!--/container -->
      </div><!--/H -->

    <!-- ********** ICONS ********** -->    
    <section id="about"></section>
    <div id="g">  
        <div class="container">
            <img src="{{asset('assets/img/what.png')}}" class="full-width">

            <div class="row mtb centered">
                <div class="col-md-10 col-md-offset-1">
                   <h2>What is Pickup?</h2>
                    <p>Pickup is a cabpooling platform where you book a ride to any destination at an affordable rate. If we find a passenger along the way, we hook them with the same ride. And if we don't, you still ride at the same rate! With just 2 travellers with you and the driver, we have ensured that you get the privacy and spatial comfort you need while travelling.</p>
                    <br>
                    <h3>GET AIR-CONDITIONED CABS AT JUST RS.99/-!</h3>
                    <p>Thats right! We charge a mere Rs 99 for the first 12km and Rs. 6 per km thereafter. The more you ride with us, the better the perks get.</p>
                </div>
            </div><!--/row -->
            <div class="go aligncenter centered">
                <a href="#why_free" class="smoothScroll">Why the free ride? <i class="icon ion-arrow-down-b"></i></a>
            </div>
        </div><!--/container -->
    </div><!--/G -->
    

    <!-- ********** SHOWCASE ********** -->
    <section id="why_free"></section>
    <div id="">
        <div class="container">
            <img src="{{asset('assets/img/why.png')}}" class="full-width">

            <div class="row mtb centered">
                <div class="col-md-10 col-md-offset-1">
                   <h2>Why The Free Ride?</h2>
                    <p>Why Not! While daily office commute in the city has gotten progressively hectic, we have combined top-notch cars with reliable drivers to give you a remarkable first-hand experience in cabpooling.<br>
                    Let's build a trusted community wherein people can share a ride with comfort and ease; a community that not just shares but also gives back to environment. Give us a shot in bringing about a change in your daily commute.</p>
                    
                </div>
            </div><!--/row -->
            <div class="go aligncenter centered">
                <a href="#how_to_book" class="smoothScroll">Here's how you can book your next ride? <i class="icon ion-arrow-down-b"></i></a>
            </div>
        </div><!--/container -->
    </div><!--/slides -->

    <section id="how_to_book"></section>
    <div id="">
        <div class="container">

            <div class="row mtb centered">
                <div class="col-md-10 col-md-offset-1">
                   <div id="how-carousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="{{asset('assets/img/how-1.png')}}" class="aligncenter" alt="First slide">
                          <div class="indicators">
                              <span class="ind-item ind-item-active"><span>1</span></span>
                              <span class="ind-item" onclick="gotoSlide(1)"><span>2</span></span>
                              <span class="ind-item" onclick="gotoSlide(2)"><span>3</span></span>
                          </div>
                          <p>Here's how you can book your next ride:</p>
                          <h2>REQUEST A PICKUP</h2>
                          <p>Select the destination on our app. Within moments, we'll match you with a ride and app will notify you with the price based on km and the estimated time for your pickup.</p>
                        </div>
                        <div class="item">
                          <img src="{{asset('assets/img/how-2.png')}}" class="aligncenter" alt="First slide">
                          <div class="indicators">
                              <span class="ind-item" onclick="gotoSlide(0)"><span>1</span></span>
                              <span class="ind-item ind-item-active" ><span>2</span></span>
                              <span class="ind-item" onclick="gotoSlide(2)"><span>3</span></span>
                          </div>
                          <p>Here's how you can book your next ride:</p>
                          <h2>GET PICKED UP</h2>
                          <p>We'll text you when your pickup arrives.
                            <br>
                            Just hop in and pay via our various payments method.
                          </p>
                        </div>
                        <div class="item">
                          <img src="{{asset('assets/img/how-3.png')}}" class="aligncenter" alt="First slide">
                          <div class="indicators">
                              <span class="ind-item " onclick="gotoSlide(0)"><span>1</span></span>
                              <span class="ind-item" onclick="gotoSlide(1)"><span>2</span></span>
                              <span class="ind-item ind-item-active"><span>3</span></span>
                          </div>
                          <p>Here's how you can book your next ride:</p>
                          <h2>REVIEW YOUR CO-PASSENGERS</h2>
                          <p>Rate your co-passengers on the app based on your experience to help us build a better community.</p>
                        </div>
                      </div>
                    </div><!-- /.carousel -->
                </div>
            </div><!--/row -->
            <div class="go aligncenter centered">
                <a href="#why_chose" class="smoothScroll">Why Chose us? <i class="icon ion-arrow-down-b"></i></a>
            </div>
        </div><!--/container -->
    </div><!--/slides -->
    
    <!-- ********** SHOWCASE ********** -->
    <section id="why_chose"></section>
    <div id="">
        <div class="container">
            <div class="row mtb centered">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <h2 class="mb">Why Chose Us?</h2>
                    </div>
                    <div class="row mt">
                        <div class="col-md-6">
                            <div class="col-md-4" style="margin-top:30px">
                                 <img src="{{asset('assets/img/save-money.png')}}" style="max-width:200px">
                            </div>
                            <div class="col-md-8 text-left">
                                <p><b>Save Money</b></p>
                                <p>Our competitive price module allows us to give you a bang for your buck. We charge a highly affordable flat fee of Rs. 100 for the first 12km followed by Rs. 6 per km</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4" style="margin-top:30px">
                                 <img src="{{asset('assets/img/convinience.png')}}" style="max-width:200px">
                            </div>
                            <div class="col-md-8 text-left">
                                <p><b>Convenience</b></p>
                                <p>Get a ride for yourself with just 2 clicks in our app. Using our 3-people-per-car policy we deliver a comfortable and stress free experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt">
                        <div class="col-md-6">
                            <div class="col-md-4" style="margin-top:30px">
                                 <img src="{{asset('assets/img/secure.png')}}" style="max-width:200px">
                            </div>
                            <div class="col-md-8 text-left">
                                <p><b>Secure</b></p>
                                <p>It is important for us to make you feel safe while travelling. Our drivers are selected after a rigorous background check and every passenger's rating is provided seamlessly.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4" style="margin-top:30px">
                                 <img src="{{asset('assets/img/eco-friendly.png')}}" style="max-width:200px">
                            </div>
                            <div class="col-md-8 text-left">
                                <p><b>Eco-Friendly</b></p>
                                <p>Greenify the surroundings with us by decreasing fuel consumption and curbing air and noise pollution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/slides -->

   
    
    <!-- ********** DOWNLOAD APP ********** -->
    <section id="download"></section>
    <div id="g">
        <div class="container">
            <div class="row mtb">
                <h1 class="centered">Download Our App</h1>
                <hr class="aligncenter">
                <div class="col-md-6 col-md-offset-3 mt centered">
                    <button class="btn btn-lg btn-android" onclick="document.getElementById('input-phone').focus()">Play Store</button>
                </div>
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/G -->
    
    <div class="contact-sec-2">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                            <i class="ion-ios-telephone icon"></i>
                            <p>+91 99 20 255 390</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                            <i class="ion-email icon"></i>
                            <p>support@getpickup.in</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                            <i class="ion-home icon"></i>
                            <p>Powai , Mumbai<br>400076, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <footer class="centerd">
        &copy; 2015.Pickup. All right reserved
    </footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/nivo-lightbox.min.js"></script>
    <script src="{{asset('admin_assets/vendors/sweet-alert/sweet-alert.min.js')}}"></script>
    <script>
   @if(session()->has('registered'))
        @if(session()->has('msg'))
            swal("{{session('msg')}}", "We will be soon contacting you to get your ride details and about more imformation", "success")
            
        @endif
                            
    @endif
    </script>
    
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-67243120-1', 'auto');
          ga('send', 'pageview');

          window.history.pushState("", "Clean URL", "/");
        </script>
    
  </body>
</html>
