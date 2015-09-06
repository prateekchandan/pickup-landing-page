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
        @yield('meta')
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
        <link rel="manifest" href="{{asset('assets/img/icon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('assets/img/icon/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">
        <!--bootstrap css-->
        <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!--custom css-->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
        <!--flex slider css-->
        <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet">
        <!--google web fonts css-->
        <!-- icons css-->
        <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!--animated css-->
        <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
        <!--owl carousel css-->
        <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet" type="text/css" media="screen">
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="{{asset('assets/js/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target="#navigation" data-offset="80">

        @yield('body')

        <!--back to top-->
        <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
        <!--back to top end-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-67243120-1', 'auto');
          ga('send', 'pageview');

        </script>
        <script>
            var contact_url="{{route('contact-us')}}";
        </script>
        <!--script files-->
        <script src="{{asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/moderniz.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery-migrate.min.js')}}" type="text/javascript"></script> 
        <script src="{{asset('assets/js/jquery.easing.1.3.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.flexslider-min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.sticky.js')}}" type="text/javascript"></script>        
        <script src="{{asset('assets/js/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.stellar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/easypiechart.js')}}"></script>
        <script src="{{asset('assets/js/jquery.isotope.min.js')}}" type="text/javascript"></script>
        <!--image loads plugin -->
        <script src="{{asset('assets/js/jquery.imagesloaded.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jquery.countdown.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/contact_me.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/jqBootstrapValidation.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/revolution-custom.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/isotope-custom.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/pace.min.js')}}" type="text/javascript"></script>
        
        @yield('script')

    </body>
</html>
