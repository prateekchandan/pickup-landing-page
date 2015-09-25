<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.landingsumo.com/demos/Theme%2012/assets/img/favicon.ico">

    <title>Pickup</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/nivo-lightbox.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nivo-themes/default/default.css')}}" type="text/css">
    
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
            <a href="#testimonials" class="smoothScroll">Testimonials</a>
            <a href="#buy" class="smoothScroll">Buy Now</a>
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

                <div class="phone-register centered">
                    <p>INTRODUCING AIR-CONDITIONED CABS THAT ARE COMFY, SECURE AND AFFORDABLE</p>
                    <form role="form"  method="post"> 
                        <input type="hidden" value="{{csrf_token()}}" name="_token">
                        <input type="number" name="phone" class="subscribe-input" placeholder="Enter Your Mobile No." required>
                        <button class='btn btn-submit subscribe-submit' type="submit">Get My Free Ride</button>
                    </form>
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
            <img src="{{asset('assets/img/why.png')}}" class="full-width">

            <div class="row mtb centered">
                <div class="col-md-10 col-md-offset-1">
                   <h2>Why The Free Ride?</h2>
                    <p>Why Not! While daily office commute in the city has gotten progressively hectic, we have combined top-notch cars with reliable drivers to give you a remarkable first-hand experience in cabpooling.<br>
                    Let's build a trusted community wherein people can share a ride with comfort and ease; a community that not just shares but also gives back to environment. Give us a shot in bringing about a change in your daily commute.</p>
                    
                </div>
            </div><!--/row -->
            <div class="go aligncenter centered">
                <a href="#why_free" class="smoothScroll">Here's how you can book your next ride? <i class="icon ion-arrow-down-b"></i></a>
            </div>
        </div><!--/container -->
    </div><!--/slides -->
    
    <!-- ********** TESTIMONIALS ********** -->
    <section id="testimonials"></section>
    <div id="t">
        <div class="container">
            <div class="row mt">
                <div class="col-lg-8 col-lg-offset-2 centered">
                    <!-- Carousel
                    ================================================== -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="assets/img/ui-01.jpg" class="img-circle aligncenter" width="120" alt="First slide">
                          <h3>Mark Turin</h3>
                          <hr class="aligncenter">
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                        <div class="item">
                          <img src="assets/img/ui-02.jpg" class="img-circle aligncenter" width="120"  alt="Second slide">
                          <h3>Sarah Schmidt</h3>
                          <hr class="aligncenter">
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                        <div class="item">
                          <img src="assets/img/ui-03.jpg" width="120" class="img-circle aligncenter" alt="Third slide">
                          <h3>Phil Carsons</h3>
                          <hr class="aligncenter">
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                      </div>
                    </div><!-- /.carousel -->
                </div><!--/col-lg-8 -->
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/T -->
    
    <!-- ********** DOWNLOAD APP ********** -->
      <section id="buy"></section>
    <div id="g">
        <div class="container">
            <div class="row mtb">
                <h1 class="centered">Download Our App</h1>
                <hr class="aligncenter">
                <p class="centered">Lorem Ipsum is simply dummy text of the<br/>printing and typesetting industry.</p>
                <div class="col-md-6 col-md-offset-3 mt centered">
                    <button class="btn btn-lg btn-apple">App Store</button><button class="btn btn-lg btn-android">Play Store</button>
                </div>
            </div><!--/row -->
        </div><!--/container -->
    </div><!--/G -->
    
    
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
    
    <script>
    /*
        // Nivo Lightbox initialization
        $('#showcase a').nivoLightbox({
            effect: 'fadeScale',
            keyboardNav: true,
        });*/
    </script>
    
    
  </body>
</html>
