<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pickup</title>
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
        <meta name="keywords" content="pickup , ride" />
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
        <!--custom css-->
    </head>

    <body>
        <section class="head">
            <div class="head-logo">
                <img src="{{asset('assets/img/pickup logo-compress.png')}}">
                <div class="head-text-wrapper">
                    <p class="head-text" >
                       Get Your First<br> Cabpooling Experience<br> With Us For <b><span  id="free">Free</span></b>,<br> Anywhere In Mumbai!
                    </p>
                    <img src="{{asset('assets/img-phone/group.png')}}" class="back-img">
                </div>
                
            </div>
        </section>
        <section class="body">
           <div class="text-head" data-targetid="what_is_pickup_ans" data-img="what_img">
               What is PickUp?
               <img src="{{asset('assets/img/down arrow.png')}}" id="what_img"/>
           </div>
           <div class="text-head-answer" id="what_is_pickup_ans">
                <img src="{{asset('assets/img-phone/what.png')}}">
                <p>
                    PickUp is a cabpooling platform where you book an air-conditioned ride to any destination at an affordable rate. If we find a passenger along the way, we hook them with the same ride. And if we don’t, you still ride at the same rate! With just 2 travellers with you and the driver, we have ensured that you get the privacy and spatial comfort you need while travelling.
                </p>
           </div>

           <div class="text-head" data-targetid="why_ans" data-img="why_img">
               Why the free ride?
               <img src="{{asset('assets/img/down arrow.png')}}" id="why_img"/>
           </div>
           <div class="text-head-answer" id="why_ans">
                <img src="{{asset('assets/img-phone/why.png')}}">
                <p>
                    Why not! While daily commute in the city has gotten progressively hectic, we have combined top-notch cars with reliable drivers to give you a remarkable first-hand experience in carpooling. Let’s build a trusted community wherein people can share a ride with comfort and ease; a community that not just shares but also gives back to the environment. Give us a shot in bringing about a change in your daily commute. We are hoping this free ride could be that change.
                </p>
           </div>

           <div class="text-head" data-targetid="how_ans" data-img="how_img">
               How to book your ride?
               <img src="{{asset('assets/img/down arrow.png')}}" id="how_img"/>
           </div>
           <div class="text-head-answer" id="how_ans">
                <p>
               Step 1: Request a Pick Up<br>
                -      Select the destination on our app. Within minutes, we’ll match you with a ride and the app will notify you with the price based on km and the estimated time for your pickup.<br>

                <br>Step 2: Get Picked Up<br>
                -          We’ll text you when your pickup arrives. Just hop in and pay via our various payment methods.<br>

                <br>Step 3: Review Your Co-Passengers<br>
                -      Rate your co-passengers on the app based on your experience to help us build a better community.
                </p>
           </div>

           <div class="text-head" data-targetid="chose_ans" data-img="chose_img">
               Why Chose Us?
               <img src="{{asset('assets/img/down arrow.png')}}" id="chose_img"/>
           </div>
           <div class="text-head-answer" id="chose_ans">
                <p>
               -      Save Money – Our competitive pricing module allows us to give you a bang for your buck. We charge a highly affordable flat fee of  ₹ 100 for the first 12 km followed by  ₹ 6 per km.
            
                <br><br>-      Convenience  – Get a ride for yourself with just 2 clicks in our app.  Using our 3-people-per-car policy we deliver a comfortable and stress free travelling experience.

                <br><br>-      Secure – It is important for us to make you feel safe while travelling. Our drivers are selected after a rigorous background check and every passenger’s rating is provided seamlessly.
     
                <br><br>-       Eco-friendly – Greenify the surroundings with us by decreasing fuel consumption and curbing air and noise pollution.
                </p>
           </div>
          
        </section>
        <div class="mobile-num-block">
            <form class="wrapper" method="POST">
                <input type="hidden" value="{{csrf_token()}}" name="_token">
                <input placeholder="Enter Your Mobile No." type="number" name="phone" id="phone_num" required/>
                <button>Get My Free Ride</button>
            </form>
            @if(session()->has('error'))
                <div id="help-text" class="error">
                    {{session('error')}}
                </div>
            @elseif(session()->has('registered'))
                 <div id="help-text" class="success">
                    @if(session()->has('msg'))
                        {{session('msg')}}
                    @else
                    You have already registered
                    @endif
                </div>
            @endif
        </div>
        <!--section class="footer">
            <div>HELP</div>
            <div>CENTER</div>
            <div>ABOUT US</div>
        </section-->
        <link href="{{asset('assets/css/style-phone.css')}}" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="{{asset('assets/js/script-phone.js')}}"></script>

        <div class="body-padding">
        </div>

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