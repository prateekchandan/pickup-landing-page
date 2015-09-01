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
                        <p class="scrollto"><a href="#about" class="btn btn-lg btn-theme-color">Get your free ride</a></p>
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
                            <li><a href="#work">Work</a></li>

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
                        <h2 class="large section-title">About us</h2>
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




        <!--our work section start here-->
        <section id="work" class="padding-80">

            <div class="work-section-1">
                <div class="container">
                    <div class="section-heading text-center">
                        <h4 class="small section-title"><span>Latest portfolio</span></h4>
                        <h2 class="large section-title">Our work</h2>
                    </div><!--section heading-->
                </div>                
                <div class="container">
                    <ul class="filter list-inline">
                        <li><a class="active" href="#" data-filter="*">Show All</a></li>
                        <li><a href="#" data-filter=".photography">Photography</a></li>
                        <li><a href="#" data-filter=".illustration">illustration</a></li>
                        <li><a href="#" data-filter=".branding">branding</a></li>
                        <li><a href="#" data-filter=".web-design">web design</a></li>
                    </ul>
                    <div class="row">
                        <div class="portfolio-box iso-call work-col-4">
                            <div class="project-post photography branding">
                                <a href="single-work.html">
                                        <div class="image-wrapper">
                                            <img src="{{asset('assets/img/sec-img2.jpg')}}" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Graphics Design
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->
                            <div class="project-post illustration web-design">
                               <a href="single-work.html">
                                        <div class="image-wrapper">
                                            <img src="{{asset('assets/img/sec-img2.jpg')}}" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Illustrate
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->
                            <div class="project-post photography web-design">
                               <a href="single-work.html">
                                        <div class="image-wrapper">
                                            <img src="{{asset('assets/img/sec-img3.jpg')}}" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Logo Design
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->

                            <div class="project-post branding">
                                <a href="single-work.html">
                                        <div class="image-wrapper">
                                            <img src="{{asset('assets/img/sec-img4.jpg')}}" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            HTML5
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->
                            <div class="project-post  illustration">
                                <a href="single-work.html">
                                        <div class="image-wrapper">
                                            <img src="{{asset('assets/img/sec-img5.jpg')}}" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Magento
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->

                            <div class="project-post  branding">
                                <a href="single-work.html">
                                        <div class="image-wrapper">
                                            <img src="{{asset('assets/img/sec-img6.jpg')}}" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Photoshop
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->


                            <div class="project-post   web-design">
                                <a href="single-work.html">
                                        <div class="image-wrapper">
                                            <img src="{{asset('assets/img/sec-img7.jpg')}}" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                           Illustrate
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->

                            <div class="project-post  branding">
                                 <a href="single-work.html">
                                        <div class="image-wrapper">
                                            <img src="{{asset('assets/img/sec-img8.jpg')}}" class="img-responsive" alt="work-1">
                                            <div class="image-overlay">
                                                <p>
                                                    View Detail
                                                </p>
                                            </div><!--.image-overlay-->
                                        </div><!--.image-wrapper-->                                      
                                    </a>
                                    <div class="work-sesc">
                                        <p>
                                            Wordpress
                                        </p>
                                    </div><!--.work-desc-->
                            </div><!--project post-->
                        </div>
                    </div>
                </div><!--container-->


            </div><!--work section 1-->
            <!--testimonials-->
               <div class="testi parallax " data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div id="testi-carousel" class="owl-carousel">
                                <div>
                                    <img src="{{asset('assets/img/t-1.jpg')}}" alt="">
                                    <h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                    </h4>
                                    <p>Kris watson</p>
                                </div><!--testimonials item like paragraph-->
                                <div>
                                    <img src="{{asset('assets/img/t-2.jpg')}}" alt="">
                                    <h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                    </h4>
                                    <p>Daniel faulkner</p>
                                </div><!--testimonials item like paragraph-->
                                <div>
                                    <img src="{{asset('assets/img/t-3.jpg')}}" alt="">
                                    <h4>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                    </h4>
                                    <p> Steve Smith</p>
                                </div><!--testimonials item like paragraph-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--testimonials-->
            <div class="work-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center margin-btm-40">
                            <div class="section-heading text-center">
                                <h4 class="small section-title"><span>Super creative heroes</span></h4>
                                <h2 class="large section-title">Our team</h2>
                            </div>
                        </div>                                            
                    </div><!--.row-->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="person">
                                <img src="{{asset('assets/img/team-1.jpg')}}" class="img-responsive" alt="">
                                <div class="person-desc">
                                    <h4>Daniel Smith</h4>
                                    <em>Creative Designer</em>
                                    <p>
                                        Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.
                                    </p>
                                </div>
                            </div>
                        </div><!--team-col-->
                        <div class="col-sm-4">
                            <div class="person">
                                <img src="{{asset('assets/img/team-2.jpg')}}" class="img-responsive" alt="">
                                <div class="person-desc">
                                    <h4>maria Smith</h4>
                                    <em>Team manager</em>
                                    <p>
                                        Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.
                                    </p>
                                </div>
                            </div>
                        </div><!--team-col-->
                        <div class="col-sm-4">
                            <div class="person">
                                <img src="{{asset('assets/img/team-3.jpg')}}" class="img-responsive" alt="">
                                <div class="person-desc">
                                    <h4>Daniel Smith</h4>
                                    <em>Creative Designer</em>
                                    <p>
                                        Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.
                                    </p>
                                </div>
                            </div>
                        </div><!--team-col-->
                    </div>
                </div><!--.container-->
            </div><!--team section end-->
            <!--fun facts-->
            <div class=" fun-facts parallax" id="numbers" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">34565</h2>
                                <h4>Projects Complete</h4>
                            </div>
                        </div><!--fun col-->
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">1599</h2>
                                <h4>Happy Customers</h4>
                            </div>
                        </div><!--fun col-->
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">99999</h2>
                                <h4>Songs Listen</h4>
                            </div>
                        </div><!--fun col-->
                        <div class="col-md-3 margin-btm-20">
                            <div class="fact-inner">
                                <h2 class="counter">1255</h2>
                                <h4>Cups of coffee</h4>
                            </div>
                        </div><!--fun col-->
                    </div>
                </div>
            </div>
            <!--fun facts-->
        </section><!--#work-section-->

        <!--our work section end-->


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

@endsection