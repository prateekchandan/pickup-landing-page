<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        
        <!-- Vendor CSS -->
        <link href="{{asset('admin_assets/vendors/animate-css/animate.min.css')}}" rel="stylesheet">
            
        <!-- CSS -->
        <link href="{{asset('admin_assets/css/app.min.css')}}" rel="stylesheet">
    </head>
    
    <body class="login-content">
        <!-- Login -->

        <div class="lc-block toggled" id="l-login" >
            @if(Session::has('msg'))
            <div style="color:#f44336">{{Session::get('msg')}}</div>
            <br>
            @endif
            <a class="btn bgm-indigo waves-effect btn-lg" href="{{route('fblogin')}}">
           <i class="md md-accessibility"></i>
            <span> Login with Facebook</span>
            </a>
        </div>
        
     
        
        <!-- Javascript Libraries -->
        <script src="{{asset('admin_assets/js/jquery-2.1.1.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
        
        <script src="{{asset('admin_assets/vendors/waves/waves.min.js')}}"></script>
        
        <script src="{{asset('admin_assets/js/functions.js')}}"></script>

       
    </body>
</html>