<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>@yield('title') | Mainichi Halal Food Shop</title>
    <meta name="description" content="Halal Food Japan Beef Store - Mainichi Halal Food Shop. Developed by A. H. M. Azimul Haque.">
    <meta name="keywords" content="Mainichi Halal Food Shop">
    <meta charset="utf-8">
    <meta name="author" content="A. H. M. Azimul Haque">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicons//manifest.json') }}">
    <meta name="msapplication-TileColor" content="#252525">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicons/ms-icon-144x144.png') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="#252525">
    <meta name="theme-color" content="#252525">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="google-site-verification" content="hG6zSbHNlZzqpReVDwBBhXUimK0gdvg4YHC185Nl1-A" />

    <meta name="og:image" content="{{ asset('images/slider/slide1.jpg?rand=1234') }}">

    <!-- animation -->
    
    <!-- animation -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/animate.css') }}" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/bootstrap.css') }}" />
    <!-- et line icon -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/et-line-icons.css') }}" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/font-awesome.min.css') }}" />
    <!-- revolution slider -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/extralayers.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/settings.css') }}" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/magnific-popup.css') }}" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/owl.transitions.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/full-slider.css') }}" />
    <!-- text animation -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/text-effect.css') }}" />
    <!-- hamburger menu  -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/menu-hamburger.css') }}" />
    <!-- common -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/style.css') }}" />
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('vendor/hcode/css/responsive.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('vendor/hcode/css/app.css') }}" /> --}}
    <!--[if IE]>
            <link rel="stylesheet" href="{{ asset('vendor/hcode/css/style-ie.css') }}" />
        <![endif]-->
    <!--[if IE]>
            <script src="{{ asset('vendor/hcode/js/html5shiv.js') }}"></script>
        <![endif]-->
    @yield('css')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148875857-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-148875857-1');
    </script>
</head>

<body>

    @include('partials._nav')

    <main style="min-height: 400px;">
        @yield('content')
    </main>

    <!-- footer -->
    <footer>
        <div class=" bg-white footer-top">
            <div class="container">
                <div class="row margin-four">
                    <!-- phone -->
                    <div class="col-md-4 col-sm-4 text-center">
                        <i class="icon-phone small-icon black-text"></i>
                        <h6 class="black-text margin-two no-margin-bottom"><a href="tel:04-7481-4515">04-7481-4515</a></h6>
                    </div>
                    <!-- end phone -->
                    <!-- address -->
                    <div class="col-md-4 col-sm-4 text-center">
                        <i class="icon-map-pin small-icon black-text"></i>
                        <h6 class="black-text margin-two no-margin-bottom">1.15.3 Yachiyodai Higashi, Yachiyo-shi, Chiba Prefecture 276-0032, Japan.</h6>
                    </div>
                    <!-- end address -->
                    <!-- email -->
                    <div class="col-md-4 col-sm-4 text-center">
                        <i class="icon-envelope small-icon black-text"></i>
                        <h6 class="margin-two no-margin-bottom">
                            <a href="mailto:info@mainichihalalfood.com" class="black-text">info@mainichihalalfood.com</a>
                        </h6>
                    </div>
                    <!-- end email -->
                </div>
            </div>
        </div>
        <div class="container footer-middle">
            <div class="row">
                <div class="col-md-3 col-sm-3 footer-link1 xs-display-none">
                    <!-- headline -->
                    <h5>About Us</h5>
                    <!-- end headline -->
                    <!-- text -->
                    <p class="footer-text">Start your journey with <b>Mainichi Halal Food Shop</b> and we will keep providing you with the best products available, in shaa Allah!</p>
                    <!-- end text -->
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4 footer-link2 col-md-offset-3">
                    
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4  footer-link3">
                    
                </div>
                <div class="col-md-2 col-sm-3 col-xs-4  footer-link4">
                    <!-- headline -->
                    <h5>Mainichi Halal Food Shop</h5>
                    <!-- end headline -->
                    <!-- link -->
                    <ul>
                        <li>
                            <a href="{{ route('index.about') }}">About Us</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('index.contact') }}">Contact</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('index.publications') }}">Publications</a>
                        </li>
                        <li>
                            <a href="{{ route('index.directors') }}">People</a>
                        </li> --}}
                    </ul>
                    <!-- end link -->
                </div>
            </div>
            <div class="wide-separator-line bg-mid-gray no-margin-lr margin-three no-margin-bottom"></div>
            <div class="row margin-four no-margin-bottom">
                <div class="col-md-6 col-sm-12 sm-text-center sm-margin-bottom-four">
                    <!-- link -->
                    <ul class="list-inline footer-link text-uppercase">
                        <li>
                            <a href="{{ route('index.privacy') }}">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{ route('index.terms') }}">Terms of Service</a>
                        </li>
                        <li>
                            <a href="{{ route('index.about') }}">About US</a>
                        </li>
                        {{-- 
                        <li>
                            <a href="{{ route('index.publications') }}">Publications</a>
                        </li>
                        <li>
                            <a href="{{ route('index.disasterdata') }}">Data</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('index.contact') }}">Contact</a>
                        </li>
                    </ul>
                    <!-- end link -->
                </div>
                <div class="col-md-6 col-sm-12 footer-social text-right sm-text-center">
                    <!-- social media link -->
                    <a target="_blank" href="https://www.facebook.com/#!">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a target="_blank" href="https://twitter.com/">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/#!">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <!-- end social media link -->
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark-gray footer-bottom">
            <div class="container">
                <div class="row margin-three">
                    <!-- copyright -->
                    <div class="col-md-6 col-sm-6 col-xs-12 gray-text text-left letter-spacing-1 xs-text-center xs-margin-bottom-one">
                        &copy; {{ date('Y') }} <a href="http://loencebd.com/" style="text-decoration: none;" class="gray-text">App Lab Bangladesh</a>.
                    </div>
                    <!-- end copyright -->
                    <!-- logo -->
                    <div class="col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center">
                        <a href="{{ route('product.index') }}">
                            <img src="{{ asset('images/logo-light.png') }}" alt="" />
                        </a>
                    </div>
                    <!-- end logo -->
                </div>
            </div>
        </div>
        <!-- scroll to top -->
        <a href="javascript:;" class="scrollToTop">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- scroll to top End... -->
    </footer>
    <!-- end footer -->

    <!-- javascript libraries / javascript files set #1 -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/bootstrap-hover-dropdown.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/skrollr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/smooth-scroll.js') }}"></script>
    <!-- jquery appear -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.appear.js') }}"></script>
    <!-- animation -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/wow.min.js') }}"></script>
    <!-- page scroll -->
    {{-- <script type="text/javascript" src="{{ asset('vendor/hcode/js/page-scroll.js') }}"></script> --}}
    <!-- easy piechart-->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.easypiechart.js') }}"></script>
    <!-- parallax -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.parallax-1.1.3.js') }}"></script>
    <!--portfolio with shorting tab -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.isotope.min.js') }}"></script>
    <!-- owl slider  -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup  -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/popup-gallery.js') }}"></script>
    <!-- text effect  -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/text-effect.js') }}"></script>
    <!-- revolution slider  -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.revolution.js') }}"></script>
    <!-- counter  -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/counter.js') }}"></script>
    <!-- countTo -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.countTo.js') }}"></script>
    <!-- fit videos  -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/jquery.fitvids.js') }}"></script>
    <!-- imagesloaded  -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- hamburger menu-->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/classie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/hamburger-menu.js') }}"></script>
    <!-- setting -->
    <script type="text/javascript" src="{{ asset('vendor/hcode/js/main.js') }}"></script>
    @include('partials._messages')
    @yield('js')
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
          $('[title]').tooltip();
      });
    </script>
</body>

<!-- Mirrored from www.themezaa.com/html/h-code/portfolio-short-description.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Sep 2018 20:27:12 GMT -->

</html>