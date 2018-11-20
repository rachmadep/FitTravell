<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FitTravel') }}</title>

    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- strock gap icons -->
    <link rel="stylesheet" href="{{ asset('vendors/Stroke-Gap-Icons-Webfont/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!--    owl-carousel-->
    <link rel="stylesheet" href="{{ asset('vendors/owlcarousel/owl.carousel.css') }}"> 
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui-1.11.4/jquery-ui.min.css') }}">
    <!-- Main Css  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">    
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.png">


</head>
<body>
<!-- .hidden-bar -->
    <section class="side-menu" id="sidebarCollapse">

        <button class="close-button" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><i class="fa fa-times"></i></button>

        <div class="side-menu-widget about-widget">
            @guest
                
            <h3 class="title playball-font">Welcome to FitTravel</h3><!-- /.title playball-font -->
            <div class="title-box">
                <h4>Please Login</h4>
                <span class="decor-line inline"></span>
            </div><!-- /.title-box -->
            <form method="POST" action="{{ route('login')}}" class="clearfix">
                @csrf
                <label for="">Email</label>
                <input name="email" class="form-control" type="text" placeholder="Enter email address" />
                <label for="">Password</label>
                <input name="password" class="form-control" type="Password" placeholder="Password" />
                <button type="submit" class="res-btn">Login</button>
            </form>
            <hr>
            <div class="title-box">
                <h4>Don't you have account? </h4><br>
                <h4>Register here</h4>
                <span class="decor-line inline"></span>
                
            </div><!-- /.title-box -->
            <form method="POST" action="{{ route('register') }}" class="clearfix">
                @csrf
                <label for="">Name</label>
                <input class="form-control" name="name" type="text" placeholder="Enter your name" />
                <label for="">Email</label>
                <input class="form-control" name="email" type="text" placeholder="Enter email address" />
                 <label for="">Phone</label>
                <input class="form-control" name="phone" type="text" placeholder="Enter phone number" />
                <label for="">Password</label>
                <input class="form-control" name="password" type="Password" placeholder="Password" />
                <label for="">Confirm Password</label>
                <input class="form-control" name="password_confirmation" type="Password" placeholder="Confirm Password" />
                <button type="submit" class="res-btn">Register</button>
            </form>

            @else
            <h3 class="title playball-font">Welcome to FitTravel</h3><!-- /.title playball-font -->
            <hr>
            <a href="/profile/{{ Auth::user()->id }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                <i class="icon icon-User"></i> Profile
            </a>
            <hr>
            <a href="/order" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                <i class="icon icon-ShoppingCart"></i> My Order
            </a>
            <hr>
            <a href="/logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">
                <i class="icon icon-ShoppingCart"></i> Logout
            </a>
            <hr>

            @endguest
        </div><!-- /.side-menu-widget -->
        
        
    </section><!-- /.side-menu -->
    
    <nav class="navbar navbar-default transBg-main-menu-header _fixed-header _light-header stricky" id="main-navigation-wrapper">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <img alt="Awesome Image" src="/img/logo.png" class="default-logo">
                    <img src="/img/logo.png" alt="Awesome Logo" class="secondary-logo">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav ">
                    <li>
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="glyphicon glyphicon-chevron-down"></span></a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour Destination <span class="glyphicon glyphicon-chevron-down"></span></a>
                        <ul class="dropdown-submenu dropdown-menu">
                            <li><a href="#">Jawa</a></li>
                            <li><a href="#">Bali</a></li>
                            <li><a href="#">Flores</a></li>
                            <li><a href="#">Kalimantan</a></li>
                            <li><a href="#">Sumatera</a></li>
                            <li><a href="#">Yogyakarta</a></li>
                            <li><a href="#">Sulawesi</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tour Category <span class="glyphicon glyphicon-chevron-down"></span></a>
                        <ul class="dropdown-submenu dropdown-menu">
                            <li><a href="#">Treaking & Camping</a></li>
                            <li><a href="#">Cultur Festival</a></li>
                            <li><a href="#">Honeymoon</a></li>
                            <li><a href="#">Hoping Island</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="glyphicon glyphicon-chevron-down"></span></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav right-side-nav">
                    
                    <li class="dropdown">
                        <a href="#"><span class="phone-only">Search</span> <i class="icon icon-Search"></i></a>
                        <ul class="dropdown-submenu has-search-form align-right">
                            <li>
                                <form action="#" class="navbar-form">
                                    <input type="text" placeholder="Enter Your Keyword" />
                                    <button type="submit"><i class="icon icon-Search"></i></button>
                                </form><!-- /.navbar-form -->
                            </li>
                        </ul>
                    </li>
                    @guest
                    <li>
                        <a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><span class="phone-only"></span><i class="fa fa-user"></i> Login</a>
                    </li>
                    @else
                    <li>
                        <a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><span class="phone-only"></span><i class="fa fa-user"></i> Account</a>
                    </li>
                    @endguest
                    {{-- <li>
                        <a role="button" data-toggle="collapse" href="#sidebarCollapse" aria-expanded="false" aria-controls="sidebarCollapse"><span class="phone-only">Side Menu</span><i class="fa fa-bars"></i></a>
                    </li> --}}
                </ul><!-- /.nav navbar-right -->
                <form action="#" class="nav-search-form row">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Type here for search">
                        <span class="input-group-addon">
                            <button type="submit"><i class="icon icon-Search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="no-js" id="loader-wrapper">
        <div id="loader"></div>
     
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
     
    </div>

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!-- Welcome banner  style-->
<div class="nasir-subscribe-form-row row">
    <div class="container">
        <div class="row this-dashed">
            <div class="this-texts">
                <h2>STAY TUNED WITH US</h2>
                <h3>Get our updated offers, discounts, events and much more!</h3>
            </div>
            <form class="this-form input-group" action="#" method="post">
                <input type="email" class="form-control" placeholder="Enter your email address">
                <span class="input-group-addon">
                    <button type="submit" class="res-btn">subscribe<i class="fa fa-arrow-right"></i></button>
                </span>
            </form>
        </div>
    </div>
</div>
<!-- Welcome banner  style-->

<footer>
    <section class="clearfix footer-wrapper">
        <section class="container clearfix footer-pad">   

            <div class="widget about-us-widget col-md-4 col-sm-6">
                <a href="/"><img src="img/logo.png" alt="" class="img-responsive"></a>
                <p>Lorem ipsum dolor sit amet, consecte- tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                <a href="aboutus.html">Read More <i class="fa fa-angle-double-right"></i></a>
                <ul class="nav">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>  
                </ul>
            </div>

            <div class="widget widget-links col-md-2 col-sm-6">
                <h4 class="widget_title">Information</h4>
                <div class="widget-contact-list"> 
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Travel News</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Press Center</a></li>
                    </ul>  
                </div>
            </div>

            <div class="widget widget-links col-md-2 col-sm-6">
                <h4 class="widget_title">Our Menu</h4>
                <div class="widget-contact-list"> 
                    <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">Tour Destination</a></li>
                       <li><a href="#">Tour Category</a></li>
                       <li><a href="#">Contact Us</a></li>
                    </ul>  
                </div>
            </div>
            
            <div class="widget get-in-touch col-md-4 col-sm-6">
                <h4 class="widget_title">Get In Touch</h4>
                <div class="widget-contact-list">
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <div class="fleft location_address">
                                <b>FitTravel</b><br>Jl. Grafika No. 2 Bulaksumur Yogyakarta
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <div class="fleft contact_no">
                                <a href="tel:+018655248503">+ 01865 524 8503</a>  /  <a href="tel:+12549547854">1254 954 7854</a>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <div class="fleft contact_mail">
                                <a href="mailto:info@fittravel.tk">info@fittravel.tk</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </section> 

    <section class="container clearfix footer-b-pad">
    <div class="footer-copy">
        <div class="pull-left fo-txt">
            <p>Copyright © FitTravel 2018. All rights reserved. </p>
       </div>
    </div>
    </section> 
</footer>

<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

<script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.bxslider.js') }}"></script>
<!-- owl carousel  -->   
<script src="{{ asset('vendors/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/zebra_datepicker.js') }}"></script>
<!-- jQuery ui js -->
<script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('vendors/jquery-ui-1.11.4/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@yield('script')

</body>
</html>
