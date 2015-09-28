<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    

        <title>Pickup Admin</title>

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

        <!-- Vendor CSS -->
        <link href="{{asset('admin_assets/vendors/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
        <link href="{{asset('admin_assets/vendors/animate-css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin_assets/vendors/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
        <link href="{{asset('admin_assets/vendors/bootgrid/jquery.bootgrid.min.css')}}" rel="stylesheet">

            
        <!-- CSS -->
        <link href="{{asset('admin_assets/css/app.min.css')}}" rel="stylesheet">

        
        
    </head>
    <body>
        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
            
                <li class="logo hidden-xs">
                    <a href="{{URL::route('admin::home')}}">Admin Panel</a>
                </li>
                
                <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                    <li id="top-search">
                        <a class="tm-search" href="#"></a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href="#"></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li>
                                <a data-action="fullscreen" href="#"><i class="md md-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-action="clear-localstorage" href="#"><i class="md md-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href="#"><i class="md md-settings"></i> Other Settings</a>
                            </li>
                            <li>
                                <a href="{{URL::Route('logout')}}"><i class="md md-history"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                   
                    </ul>
                </li>
            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>
        
        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner">
                    <div class="si-inner">
                        <div class="profile-menu">
                            <a href="#">
                                <div class="profile-pic">
                                    <img src="http://graph.facebook.com/{{Auth::user()->fbid}}/picture?type=square" alt="">
                                </div>
                                
                                <div class="profile-info">
                                    {{Auth::user()->first_name}}
                                    
                                    <i class="md md-arrow-drop-down"></i>
                                </div>
                            </a>
                            
                            <ul class="main-menu">
                                <li>
                                    <a href="{{URL::Route('logout')}}"><i class="md md-history"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                        
                        <ul class="main-menu">
                            @if(!isset($menu))
                            <?php  $menu="";?>
                            @endif
                            @if(!isset($submenu))
                            <?php  $submenu="";?>
                            @endif
                            <li {{($menu=="home")?'class="active"':''}}><a href="{{route('admin::home')}}"><i class="md md-home"></i> Home</a></li>
                            <li class="sub-menu {{($menu=='user')?'active toggled':''}}">
                                <a href="#"><i class="md md-person"></i> Users</a>

                                <ul>
                                    <li><a {!!($submenu=="user.all")?'class="active"':''!!} href="{{route('admin::user')}}">See all Users</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu {{($menu=='driver')?'active toggled':''}}">
                                <a href="#"><i class="md md-directions-car"></i> Drivers</a>

                                <ul>
                                    <li><a {!!($submenu=="driver.add")?'class="active"':''!!} href="{{route('admin::driver.add')}}">Add new Driver</a></li>
                                    <li><a {!!($submenu=="driver")?'class="active"':''!!} href="{{route('admin::driver')}}">See Drivers</a></li>
                                    <li><a {!!($submenu=="driver_map")?'class="active"':''!!} href="{{route('admin::driver.map')}}">Show Driver Map</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu {{($menu=='group')?'active toggled':''}}">
                                <a href="#"><i class="md md-group-work"></i> Ride Groups</a>

                                <ul>
                                    <li><a {!!($submenu=="group.new")?'class="active"':''!!} href="{{route('admin::group.new')}}">New Groups</a></li>
                                    <li><a {!!($submenu=="group.active")?'class="active"':''!!} href="{{route('admin::group.active')}}">Active Groups</a></li>
                                    <li><a {!!($submenu=="group.finished")?'class="active"':''!!} href="{{route('admin::group.finished')}}">Finished Groups</a></li>
                                </ul>
                            </li>
                            <li {{($menu=="email")?'class="active"':''}}><a href="{{route('admin::email.icici')}}"><i class="md md-email    "></i> Send Email </a></li>

                        </ul>
                    </div>
                </div>
            </aside>
            
            
            <section id="content">
                <div class="container">
                   
                   @yield('content')
                    
                </div>
            </section>
        </section>
        
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">IE SUCKS!</h1>
                <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
                <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
            </div>   
        <![endif]-->
        
        <!-- Javascript Libraries -->
        <script>
        @if(isset($user))
        var username = "{{Auth::user()->first_name}}";
        @endif
        </script>
       
        <script src="{{asset('admin_assets/js/jquery-2.1.1.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/bootstrap.min.js')}}"></script>
        
        <script src="{{asset('admin_assets/vendors/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/flot/plugins/curvedLines.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/sparklines/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/easypiechart/jquery.easypiechart.min.js')}}"></script>
        
        <script src="{{asset('admin_assets/vendors/fullcalendar/lib/moment.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/auto-size/jquery.autosize.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/nicescroll/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/waves/waves.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/bootstrap-growl/bootstrap-growl.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/input-mask/input-mask.min.js')}}"></script>
        
        <script src="{{asset('admin_assets/js/flot-charts/curved-line-chart.js')}}"></script>
        <script src="{{asset('admin_assets/js/flot-charts/line-chart.js')}}"></script>
        <script src="{{asset('admin_assets/js/charts.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/bootgrid/jquery.bootgrid.min.js')}}"></script>
        <script src="{{asset('admin_assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
        
        <script src="{{asset('admin_assets/js/charts.js')}}"></script>
        <script src="{{asset('admin_assets/js/functions.js')}}"></script>
        
        @yield('script')
        
    </body>
  </html>