<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/nasarna-live/nasarna/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 23:50:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <link rel="icon" href="{{asset('logo.svg')}}">
    <title>@yield('title')</title>
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/flaticon.css')}}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet"> --}}
    
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/odometer-theme-default.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    @yield('style')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        @if(!Route::is('loginuser','registeruser'))
        <header id="header" class="wpo-site-header wpo-header-style-3">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6 col-sm-7 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li><i class="fi flaticon-call"></i>+{{$data->telpon}}</li>
                                    <li><i class="fi flaticon-envelope"></i>{{$data->email}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-5 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li><a href="{{route('loginuser')}}">Masuk</a></li>
                                    <li><a href="{{route('registeruser')}}">Daftar</a></li>
                                    <li><a class="theme-btn" href="donate.html">Donor Yuk</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end topbar -->
            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('assets/images/logo-3.png')}}" alt="logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('home')}}">Home</a></li>

                            <li><a href="{{route('about')}}">Tentang Kami</a></li>

                            <li class="menu-item-has-children">
                                <a href="#">Kasus</a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('permohonan')}}">Buat Permohonan</a></li>
                                    <li><a href="{{route('kasus')}}">Kasus</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="#">Event</a></li>

                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="donate.html">Donor</a></li>
                                    <li><a href="volunteer.html">Volunteer</a></li>
                                    <li><a href="error.html">404 Page</a></li>
                                </ul>
                            </li>
                            
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog right sidebar</a></li>
                                    <li><a href="blog-left.html">Blog left sidebar</a></li>
                                    <li><a href="blog-fulwidth.html">Blog fullwidth</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-single.html">Blog details right sidebar</a></li>
                                            <li><a href="blog-single-left.html">Blog details left sidebar</a></li>
                                            <li><a href="blog-single-fluid.html">Blog details fullwidth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->
                    <div class="cart-search-contact">
                        <div class="mini-cart">
                            <button class="cart-toggle-btn"> <i class="fi flaticon-shopping-bag"></i> <span
                                    class="cart-count">02</span></button>
                            <div class="mini-cart-content">
                                <div class="mini-cart-title">
                                    <p>Shopping Cart</p>
                                </div>
                                <div class="mini-cart-items">
                                    <div class="mini-cart-item clearfix">
                                        <div class="mini-cart-item-image">
                                            <a href="#"><img src="assets/images/shop/mini/img-1.jpg"
                                                    alt="Hoodie with zipper"></a>
                                        </div>
                                        <div class="mini-cart-item-des">
                                            <a href="#">Hoodie with zipper</a>
                                            <span class="mini-cart-item-price">$25.15</span>
                                            <span class="mini-cart-item-quantity">x 1</span>
                                        </div>
                                    </div>
                                    <div class="mini-cart-item clearfix">
                                        <div class="mini-cart-item-image">
                                            <a href="#"><img src="assets/images/shop/mini/img-2.jpg"
                                                    alt="Hoodie with zipper"></a>
                                        </div>
                                        <div class="mini-cart-item-des">
                                            <a href="#">Hoodie with zipper</a>
                                            <span class="mini-cart-item-price">$12.99</span>
                                            <span class="mini-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini-cart-action clearfix">
                                    <span class="mini-checkout-price">$255.12</span>
                                    <a href="#" class="theme-btn-s4">View Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-search-form-wrapper">
                            <button class="search-toggle-btn"><i class="fi flaticon-magnifying-glass"></i></button>
                            <div class="header-search-form">
                                <form>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here...">
                                        <button type="submit"><i class="fi flaticon-magnifying-glass"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        @endif


        @yield('content')

        @if(!Route::is('loginuser','registeruser'))
        <div class="wpo-ne-footer">
            <!-- start wpo-news-letter-section -->
            <section class="wpo-news-letter-section">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <div class="wpo-newsletter">
                                <h3>Follow us For ferther information</h3>
                                <div class="wpo-newsletter-form">
                                    <form>
                                        <div>
                                            <input type="text" placeholder="Enter Your Email" class="form-control">
                                            <button type="submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </section>
            <!-- end wpo-news-letter-section -->
            <!-- start wpo-site-footer -->
            <footer class="wpo-site-footer">
                <div class="wpo-upper-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget about-widget">
                                    <div class="logo widget-title">
                                        <img src="assets/images/logo-3.png" alt="blog">
                                    </div>
                                    <p>
                                        {{$data->deskripsi_perusahaan}}
                                    </p>
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-google"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-sm-6">
                                <div class="widget link-widget resource-widget">
                                    <div class="widget-title">
                                        <h3>Top News</h3>
                                    </div>
                                    <div class="news-wrap">
                                        <div class="news-img">
                                            <img src="assets/images/footer/img-1.jpg" alt="">
                                        </div>
                                        <div class="news-text">
                                            <h3>Education for all poor children</h3>
                                            <span>12 Nov, 2020</span>
                                        </div>
                                    </div>
                                    <div class="news-wrap">
                                        <div class="news-img">
                                            <img src="assets/images/footer/img-2.jpg" alt="">
                                        </div>
                                        <div class="news-text">
                                            <h3>Education for all poor children</h3>
                                            <span>12 Nov, 2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-2 col-md-3 col-sm-6">
                                <div class="widget link-widget">
                                    <div class="widget-title">
                                        <h3>Useful Links</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Our Causes</a></li>
                                        <li><a href="#">Our Mission</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Our Event</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                                <div class="widget market-widget wpo-service-link-widget">
                                    <div class="widget-title">
                                        <h3>Contact </h3>
                                    </div>
                                    <p>online store with lots of cool and exclusive wpo-features</p>
                                    <div class="contact-ft">
                                        <ul>
                                            <li><i class="fi flaticon-pin"></i>{{$data->alamat}}</li>
                                            <li><i class="fi flaticon-call"></i>{{$data->telpon}}</li>
                                            <li><i class="fi flaticon-envelope"></i>{{$data->email}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container -->
                </div>
                <div class="wpo-lower-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <p class="copyright">&copy; 2020 Nasarna. All rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end wpo-site-footer -->
        </div>
        @endif
    </div>
    <!-- end of page-wrapper -->
    <!-- All JavaScript files
    ================================================== -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Plugins for this template -->
    <script src="{{asset('assets/js/jquery-plugin-collection.js')}}"></script>
    <!-- Custom script for this template -->
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/nasarna-live/nasarna/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 23:51:03 GMT -->

</html>
