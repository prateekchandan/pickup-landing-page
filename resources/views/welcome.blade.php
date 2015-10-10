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

    <link href="{{asset('assets/css/sweet-alert.css')}}" rel="stylesheet">
    
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

  <body >

    <!-- Menu -->
    <nav class="menu" id="theMenu">
        <div class="menu-wrap">
            <h1 class="logo"><a href="#" onclick="return gotopage(1);">PICKUP</a></h1>
            <i class="ion-android-close menu-close"></i>
            <a href="#" class="smoothScroll" onclick="return gotopage(1);">Home</a>
            <a href="#" class="smoothScroll" onclick="return gotopage(2);">What is Pickup</a>
            <a href="#" class="smoothScroll" onclick="return gotopage(3);">Why Free Ride</a>
            <a href="#" class="smoothScroll" onclick="return gotopage(4);">How to Book Ride</a>
            <a href="#" class="smoothScroll" onclick="return gotopage(5);">Why Chose Us</a>
            <a href="#" class="smoothScroll" onclick="return gotopage(6);">Get our App</a>
        </div>
        
        <!-- Menu button -->
        <div id="menuToggle"><i class="ion-navicon"></i> Menu</div>
    </nav>

    <div class="sec sec-active" id="f1">
        <div class="row centered logo_bar" style="height:12%">
            <img src="{{asset('assets/img/pickup logo.png')}}">
        </div>

        <div style="height:58%">
            <div class="row centered" style="height:100%">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Get Your First Cabpooling Experience <br>With Us For <b>Free</b>, Anywhere In Mumbai! </h2>
                </div>
                <img src="{{asset('assets/img/static.png')}}" id="bck-img">

            </div>
        </div><!--/container -->
         <!-- The mobile number registration part-->
        <div class="phone-register centered" id="phone-register" style="height:20%">
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
              </small>
            </div>
          @elseif(session()->has('registered'))
            <div class="text-success" id="hint-text"><small>
              @if(session()->has('msg'))
                {{session('msg')}}
              @else
                You have already registered
              @endif
              </small>
            </div>
           @endif
        </div>

        <div class="go aligncenter ft ft-active" style="height:10%" onclick="return gotopage(2);">
          <a href="#" onclick="return gotopage(2);">What is PickUp? <i class="icon ion-arrow-down-b"></i></a>
      </div>
    </div><!--/H -->

    <!-- ********** ICONS ********** -->    
    <div class="sec" id="f2">  
        <div class="row centered logo_bar" style="height:8%">
            <img src="{{asset('assets/img/pickup logo.png')}}" style="height:100%">
        </div>
        <div style="height:62%">
            <div class="aligncenter" style="height:50%">
              <img src="{{asset('assets/img/what.png')}}" style="height:100%">
            </div>

            <div class="centered" style="height:50%">
                <div class="col-md-12">
                   <h2 class="text-head">What is Pickup?</h2>
                    <p class="body-text">Pickup is a cabpooling platform where you book a ride to any destination at an affordable rate. If we find a passenger along the way, we hook them with the same ride. And if we don't, you still ride at the same rate! With just 2 travellers with you and the driver, we have ensured that you get the privacy and spatial comfort you need while travelling.</p>
                    <h3 class="text-head">GET AIR-CONDITIONED CABS AT JUST RS.99/-!</h3>
                    <p class="body-text">Thats right! We charge a mere Rs 99 for the first 12km and Rs. 6 per km thereafter. The more you ride with us, the better the perks get.</p>
                </div>
            </div><!--/row -->
        </div><!--/container -->
        <div class="phone-register centered" id="phone-register" style="height:20%">
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
              </small>
            </div>
          @elseif(session()->has('registered'))
            <div class="text-success" id="hint-text"><small>
              @if(session()->has('msg'))
                {{session('msg')}}
              @else
                You have already registered
              @endif
              </small>
            </div>
           @endif
        </div>

        <div class="go aligncenter ft ft-active" style="height:10%" onclick="return gotopage(3);">
          <a href="#" onclick="return gotopage(3);">Why the free ride? <i class="icon ion-arrow-down-b"></i></a>
      </div>
    </div><!--/G -->
    

    <!-- ********** SHOWCASE ********** -->
    <div class="sec" id="f3">
        <div class="row centered logo_bar" style="height:8%">
            <img src="{{asset('assets/img/pickup logo.png')}}" style="height:100%">
        </div>
        <div style="height:62%">
            <div class="aligncenter" style="height:60%">
              <img src="{{asset('assets/img/why.png')}}" style="height:100%">
            </div>

            <div class="row centered" style="height:40%">
                <div class="col-md-12">
                   <h2 class="text-head">Why The Free Ride?</h2>
                    <p class="body-text">Why Not! While daily office commute in the city has gotten progressively hectic, we have combined top-notch cars with reliable drivers to give you a remarkable first-hand experience in cabpooling.
                    Let's build a trusted community wherein people can share a ride with comfort and ease; a community that not just shares but also gives back to environment. Give us a shot in bringing about a change in your daily commute.</p>
                    
                </div>
            </div><!--/row -->
        </div><!--/container -->
        <div class="phone-register centered" id="phone-register" style="height:20%">
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
              </small>
            </div>
          @elseif(session()->has('registered'))
            <div class="text-success" id="hint-text"><small>
              @if(session()->has('msg'))
                {{session('msg')}}
              @else
                You have already registered
              @endif
              </small>
            </div>
           @endif
        </div>

        <div class="go aligncenter ft ft-active" style="height:10%" onclick="return gotopage(4);">
          <a href="#" onclick="return gotopage(4);">Here's how you can book your next ride? <i class="icon ion-arrow-down-b"></i></a>
      </div>
    </div><!--/slides -->

    <div class="sec aligncenter" id="f4">
        <div class="row centered logo_bar" style="height:8%">
            <img src="{{asset('assets/img/pickup logo.png')}}" style="height:100%">
        </div>
        <div style="height:62%">
          <div id="how-carousel" class="carousel slide" data-ride="carousel" style="height:55%" data-interval="false">
            <div class="carousel-inner" style="height:100%">
              <div class="item active" style="height:100%">
                <img src="{{asset('assets/img/how-1.png')}}" class="slide-image aligncenter" alt="First slide">
              </div>
              <div class="item" style="height:100%">
                <img src="{{asset('assets/img/how-2.png')}}" class="slide-image aligncenter" alt="First slide">
              </div>
              <div class="item" style="height:100%">
                <img src="{{asset('assets/img/how-3.png')}}" class="slide-image aligncenter" alt="First slide">
              </div>
            </div>
          </div>
          <div>
            <div class="indicators" style="height:15%">
              <span class="ind-item ind-item-active" id="ind-item0" onclick="gotoSlide(0)"><span>1</span></span>
              <span class="ind-item" id="ind-item1" onclick="gotoSlide(1)"><span>2</span></span>
              <span class="ind-item" id="ind-item2" onclick="gotoSlide(2)"><span>3</span></span>
            </div>
            <p style="margin:0px">Here's how you can book your next ride:</p>
          </div>
          <div id="how1-carousel" class="carousel slide" data-ride="carousel" style="height:30%" data-interval="false">
            <div class="carousel-inner">
              <div class="item active">
                <h2 class="text-head">REQUEST A PICKUP</h2>
                <p class="body-text" style="margin:0px">Select the destination on our app. Within moments, we'll match you with a ride and app will notify you with the price based on km and the estimated time for your pickup.</p>
              </div>
              <div class="item">
                <h2 class="text-head">GET PICKED UP</h2>
                <p class="body-text" style="margin:0px">We'll text you when your pickup arrives.
                  <br> Just hop in and pay via our various payments method.
                </p>
              </div>
              <div class="item">
                <h2 class="text-head">REVIEW YOUR CO-PASSENGERS</h2>
                <p class="body-text" style="margin:0px">Rate your co-passengers on the app based on your experience to help us build a better community.</p>
              </div>
            </div>
          </div>
        </div><!--/container -->
        <div class="phone-register centered" id="phone-register" style="height:20%;">
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
              </small>
            </div>
          @elseif(session()->has('registered'))
            <div class="text-success" id="hint-text"><small>
              @if(session()->has('msg'))
                {{session('msg')}}
              @else
                You have already registered
              @endif
              </small>
            </div>
           @endif
        </div>

        <div class="go aligncenter ft ft-active" style="height:10%" onclick="return gotopage(5);">
          <a href="#" onclick="return gotopage(5);">Why Chose us? <i class="icon ion-arrow-down-b"></i></a>
      </div>
    </div><!--/slides -->
    
    <!-- ********** SHOWCASE ********** -->
    <div class="sec" id="f5">
        <div class="row centered logo_bar" style="height:8%">
            <img src="{{asset('assets/img/pickup logo.png')}}" style="height:100%">
        </div>
        <div style="height:62%">
            <div class="row centered" style="height:100%">
                <div class="col-md-10 col-md-offset-1" style="height:100%">
                    <div class="row" style="height:16%">
                        <h2>Why Chose Us?</h2>
                    </div>
                    <div class="row " style="height:42%">
                        <div class="col-xs-6 why-box" >
                            <div class="col-xs-4">
                                 <img src="{{asset('assets/img/save-money.png')}}" class="icon-img">
                            </div>
                            <div class="col-xs-8 text-left">
                                <p><b>Save Money</b></p>
                                <p  class="body-text">Our competitive price module allows us to give you a bang for your buck. We charge a highly affordable flat fee of Rs. 100 for the first 12km followed by Rs. 6 per km</p>
                            </div>
                        </div>
                        <div class="col-xs-6 why-box">
                            <div class="col-xs-4" style="margin-top:30px">
                                 <img src="{{asset('assets/img/convinience.png')}}" class="icon-img">
                            </div>
                            <div class="col-xs-8 text-left">
                                <p><b>Convenience</b></p>
                                <p class="body-text">Get a ride for yourself with just 2 clicks in our app. Using our 3-people-per-car policy we deliver a comfortable and stress free experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="height:42%">
                        <div class="col-xs-6 why-box">
                            <div class="col-xs-4" style="margin-top:30px">
                                 <img src="{{asset('assets/img/secure.png')}}" class="icon-img">
                            </div>
                            <div class="col-xs-8 text-left">
                                <p><b>Secure</b></p>
                                <p class="body-text">It is important for us to make you feel safe while travelling. Our drivers are selected after a rigorous background check and every passenger's rating is provided seamlessly.</p>
                            </div>
                        </div>
                        <div class="col-xs-6 why-box">
                            <div class="col-xs-4" style="margin-top:30px">
                                 <img src="{{asset('assets/img/eco-friendly.png')}}" class="icon-img">
                            </div>
                            <div class="col-xs-8 text-left">
                                <p><b>Eco-Friendly</b></p>
                                <p class="body-text">Greenify the surroundings with us by decreasing fuel consumption and curbing air and noise pollution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/row -->
        </div><!--/container -->
        <div class="phone-register centered" id="phone-register" style="height:20%">
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
              </small>
            </div>
          @elseif(session()->has('registered'))
            <div class="text-success" id="hint-text"><small>
              @if(session()->has('msg'))
                {{session('msg')}}
              @else
                You have already registered
              @endif
              </small>
            </div>
           @endif
        </div>

        <div class="go aligncenter ft ft-active" style="height:10%" onclick="return gotopage(6);">
          <a href="#" onclick="return gotopage(6);">Download APP <i class="icon ion-arrow-down-b"></i></a>
        </div>
    </div><!--/slides -->

   
    
    <!-- ********** DOWNLOAD APP ********** -->
    <div class="sec" id="f6">
        <div class="row centered logo_bar" style="height:8%">
            <img src="{{asset('assets/img/pickup logo.png')}}" style="height:100%">
        </div>
        <div style="height:35%">
            <div class="row pb">
                <h1 class="centered">Download Our App</h1>
                <hr class="aligncenter">
                <h3 class="centered mt">Coming Soon on</h3>
                <div class="col-md-6 col-md-offset-3 centered">
                    <button class="btn btn-lg btn-android" onclick="document.getElementById('input-phone').focus()">Play Store</button>
                </div>
            </div><!--/row -->
        </div><!--/container -->
        <div style="height:27%">
            <div class="container text-center">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="contact-col wow animated flipInY animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                            <i class="ion-ios-telephone icon"></i>
                            <p>+91 99 20 255 390</p>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="contact-col wow animated flipInY animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                            <i class="ion-email icon"></i>
                            <p>support@getpickup.in</p>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="contact-col wow animated flipInY animated" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInY;">
                            <i class="ion-home icon"></i>
                            <p>Powai , Mumbai<br>400076, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="phone-register centered" id="phone-register" style="height:20%">
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
              </small>
            </div>
          @elseif(session()->has('registered'))
            <div class="text-success" id="hint-text"><small>
              @if(session()->has('msg'))
                {{session('msg')}}
              @else
                You have already registered
              @endif
              </small>
            </div>
           @endif
        </div>

        <div class="aligncenter ft ft-active" style="height:10%;padding:15px">
           &copy; 2015.Pickup. All right reserved
        </div>
    </div><!--/G -->
    
   

    <footer class="centerd" style="display:none">
     
     
      <div class="go aligncenter ft" id="b4">
          <a href="#why_chose" class="smoothScroll"> <i class="icon ion-arrow-down-b"></i></a>
      </div>
      <div class="aligncenter ft" id="b6">
          &copy; 2015.Pickup. All right reserved
      </div>
        <!-- &copy; 2015.Pickup. All right reserved -->
    </footer>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/retina-1.1.0.js')}}"></script>
    <script src="{{asset('assets/js/classie.js')}}"></script>
    <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
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
    

    <script type="text/javascript">
      var divs=['f1','f2','f3','f4','f5','f6'];
      var blocks=['b1','b2','b3','b4','b5','b6'];
      $('input, textarea').placeholder();
     
      var pageno=1;
      function nextpage(){
        if(pageno<6)
          temppage = pageno+1;
        gotopage(temppage);
      }

      function prevpage(){
        if(pageno>1)
          temppage = pageno-1;
        gotopage(temppage);
      }

      var isChange = true;
      function gotopage(pg){
        /*if(!isChange)
            return;*/
        $('#f'+pageno).removeClass('sec-active');
        pageno=pg;
        $('#f'+pageno).addClass('sec-active');
        isChange=false; 
        setTimeout(function(){isChange=true;}, 500);
        return false;
      }

    $(window).mousewheel(function(event) {
        if(event.deltaY<0)
          nextpage();
        else
          prevpage();
    });

    $(document).keydown(function(e) {
      switch(e.which) {
          case 38: // up
          prevpage();
          break;
          case 40: // down
          nextpage();
          break;

          default: return; // exit this handler for other keys
      }
      e.preventDefault(); // prevent the default action (scroll / move caret)
  });
    $('.subscribe-input').keyup(function(){
      val = $(this).val();
      $('.subscribe-input').val(val);
    })
    </script>
  </body>
</html>
