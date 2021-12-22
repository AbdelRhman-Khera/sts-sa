<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        <style type="text/css">@media only screen and (max-width: 800px) {}

    </style>
    </style>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Home — best it solutions</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('temp/assets/img/fav/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('temp/assets/img/fav/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('temp/assets/img/fav/favicon-16x16.png') }}">
    <link rel="mask-icon" href="{{ asset('temp/assets/img/fav/safari-pinned-tab.svg') }}" color="#fa7070">

    <meta name="msapplication-TileColor" content="#fa7070">
    <meta name="theme-color" content="#7052fb">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ asset('temp/dependencies/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('temp/dependencies/fontawesome/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('temp/dependencies/swiper/css/swiper.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('temp/dependencies/wow/css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('temp/dependencies/magnific-popup/css/magnific-popup.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('temp/dependencies/components-elegant-icons/css/elegant-icons.min.css') }}"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('temp/dependencies/simple-line-icons/css/simple-line-icons.css') }}"
        type="text/css">



    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('temp/assets/css/app.css') }}" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">


</head>

<body id="home-version-1" class="home-version-4" data-style="default">

    <a href="#main_content" data-type="section-switch" class="return-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <div class="page-loader">
        <div class="loader">
            <!-- Loader -->
            <div class="blobs">
                <div class="blob-center"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                </defs>
            </svg>

        </div>
    </div><!-- /.page-loader -->
    <div id="main_content">


        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
        <header class="site-header header_trans-fixed" data-top="992">
            <div class="container">
                <div class="header-inner">
                    <div class="toggle-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <!-- /.toggle-menu -->

                    <div class="site-mobile-logo">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('temp/assets/img/sts-logo.png') }}" alt="site logo"
                                class="main-logo">
                            <img src="{{ asset('temp/assets/img/logo-two.png') }}" alt="site logo"
                                class="sticky-logo">
                        </a>
                    </div>

                    <nav class="site-nav">
                        <div class="close-menu">
                            <span>Close</span>
                            <i class="ei ei-icon_close"></i>
                        </div>

                        <div class="site-logo">
                            <a href="{{ route('home') }}" class="logo">
                                <img src="{{ asset('temp/assets/img/sts-logo.png') }}" alt="site logo"
                                    class="main-logo">
                                <img src="{{ asset('temp/assets/img/logo-two.png') }}" alt="site logo"
                                    class="sticky-logo">
                            </a>
                        </div>
                        <!-- /.site-logo -->

                        <div class="menu-wrapper" data-top="992">
                            <ul class="site-main-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('service') }}">Service</a></li>
                                <li><a href="{{ route('faq') }}">Faq's</a></li>
                                <!-- <li class="menu-item-has-children">
                                    <a href="#">Pages</a>

                                    <ul class="sub-menu">
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('service') }}">Service</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="portfolio.html">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-one.html">Style One</a></li>
                                                <li><a href="portfolio-two.html">Style Two</a></li>
                                                <li><a href="portfolio-three.html">Style Three</a></li>
                                                <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('faq') }}">Faq's</a></li>
                                        <li><a href="error.html">Error 404</a></li>
                                        <li><a href="signin.html">Sing In</a></li>
                                        <li><a href="signup.html">Sing Up</a></li>
                                    </ul>
                                </li> -->

                                <!-- <li><a href="{{ route('contact') }}">Contact</a></li> -->
                            </ul>
                            <div class="nav-right">
                                <a href="{{ route('contact') }}" class="nav-btn">Hire US</a>
                            </div>
                        </div>
                        <!-- /.menu-wrapper -->

                    </nav><!-- /.site-nav -->
                </div><!-- /.header-inner -->
            </div><!-- /.container -->
        </header><!-- /.site-header -->
        @yield('content')
    <!--=========================-->
    <!--=        Footer         =-->
    <!--=========================-->
    <footer id="footer">
        <div class="container">
            <div class="footer-inner wow pixFadeUp">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget footer-widget">
                            <h3 class="widget-title">Company</h3>

                            <ul class="footer-menu">
                                <li><a href="{{ route('home') }}#revolutionize">benefits</a></li>
                                <li><a href="{{ route('home') }}#revolutionize">pricing</a></li>
                                <li><a href="{{ route('faq') }}">faqs</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Get In Touch</a></li>
                            </ul>
                        </div>
                        <!-- /.widget footer-widget -->
                    </div>
                    <!-- /.col-lg-3 col-md-6 -->

                    <div class="col-lg-3 col-md-6">
                        <div class="widget footer-widget">
                            <h3 class="widget-title">Services</h3>

                            <ul class="footer-menu">
                                <li><a href="#" onclick="return false;">web developement</a></li>
                                <li><a href="#" onclick="return false;">mobile Development</a></li>
                                <li><a href="#" onclick="return false;">UI/UX design</a></li>
                                <li><a href="#" onclick="return false;">branding</a></li>
                                <li><a href="#" onclick="return false;">SAP</a></li>
                            </ul>
                        </div>
                        <!-- /.widget footer-widget -->
                    </div>
                    <!-- /.col-lg-3 col-md-6 -->

                    <div class="col-lg-3 col-md-6">
                        <div class="widget footer-widget">
                            <h3 class="widget-title">Digital Experience</h3>

                            <ul class="footer-menu">
                                <li><a href="#" onclick="return false;">Automation</a></li>
                                <li><a href="#" onclick="return false;">Dashboards and KPIs</a></li>
                                <li><a href="#" onclick="return false;">Data Management</a></li>
                                <li><a href="#" onclick="return false;">Integrations</a></li>
                                <li><a href="#" onclick="return false;">customers engagement</a></li>
                            </ul>
                        </div>
                        <!-- /.widget footer-widget -->
                    </div>
                    <!-- /.col-lg-3 col-md-6 -->

                    <div class="col-lg-3 col-md-6">
                        <div class="widget footer-widget">
                            <h3 class="widget-title">Our Address</h3>


                            <ul>
                                <li>
                                    Al Salam Axis, First New Cairo, Cairo Governorate, Egypt
                                </li>
                                <hr>
                                <li>
                                    7674 Al Kharj Rd, Ghubairah, Riyadh 12664 4350, Saudi Arabia
                                </li>
                            </ul>


                            <ul class="footer-social-link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- /.widget footer-widget -->
                    </div>
                    <!-- /.col-lg-3 col-md-6 -->
                </div>
                <!-- /.row -->

            </div><!-- /.footer-inner -->

            <div class="site-info">
                <div class="copyright">
                    <p>© 2020 All Rights Reserved Design by <a href="#" target="_blank">STS-SA</a></p>
                </div>

                <!-- <ul class="site-info-menu">
                    <li><a href="#">Privacy & Policy.</a></li>
                    <li><a href="#">Faq.</a></li>
                    <li><a href="#">Terms.</a></li>
                </ul> -->
            </div><!-- /.site-info -->
        </div><!-- /.container -->
    </footer><!-- /#footer -->


</div><!-- /#site -->

    <!-- Dependency Scripts -->
    <script src="{{ asset('temp/dependencies/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('temp/dependencies/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('temp/dependencies/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('temp/dependencies/jquery.appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('temp/dependencies/wow/js/wow.min.js') }}"></script>
    <script src="{{ asset('temp/dependencies/countUp.js/countUp.min.js') }}"></script>
    <script src="{{ asset('temp/dependencies/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('temp/dependencies/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('temp/dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('temp/dependencies/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('temp/dependencies/gmap3/js/gmap3.min.js') }}"></script>
    <script type='text/javascript'
        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&#038;ver=2.1.6'></script>


    <!-- Site Scripts -->
    <script src="{{ asset('temp/assets/js/header.js') }}"></script>
    <script src="{{ asset('temp/assets/js/app.js') }}"></script>

</body>

</html>
