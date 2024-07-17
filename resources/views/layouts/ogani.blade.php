<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Halal Food Japan Beef Store - Mainichi Halal Food Shop. Developed by A. H. M. Azimul Haque.">
    <meta name="keywords" content="Mainichi Halal Food Shop">
    <meta charset="utf-8">
    <meta name="author" content="A. H. M. Azimul Haque">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Mainichi Halal Food Shop</title>

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
    <meta name="msapplication-TileColor" content="#F6FB7A">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicons/ms-icon-144x144.png') }}">
    <meta name="apple-mobile-web-app-status-bar-style" content="#F6FB7A">
    <meta name="theme-color" content="#F6FB7A">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="og:image" content="{{ asset('images/slider/slide1.jpg?rand=1234') }}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/ogani/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/ogani/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/ogani/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/ogani/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/ogani/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/ogani/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/ogani/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/ogani/css/style.css') }}" type="text/css">
    @yield('css')
    <style type="text/css">
        .fixed-header {
            display: none;
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

        .header__menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            /*display: flex;*/
        }

        .header__menu ul li {
            margin-right: 20px;
        }

        .header__menu ul li a {
            text-decoration: none;
            /*color: #333;*/
        }
    </style>
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var mainHeader = document.getElementById('main-header');
            var fixedHeader = document.getElementById('fixed-header');
            var mainHeaderHeight = mainHeader.offsetHeight;

            if (window.scrollY > mainHeaderHeight) {
                fixedHeader.style.display = 'block';
            } else {
                fixedHeader.style.display = 'none';
            }
        });
    </script>
</head>

<body>
    
    @include('partials._ogani-nav')

    <div style="min-height: 400px;">
        @yield('content')
    </div>

    @include('partials._ogani-footer')

    <!-- Js Plugins -->
    <script src="{{ asset('vendor/ogani/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendor/ogani/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/ogani/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vendor/ogani/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendor/ogani/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('vendor/ogani/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('vendor/ogani/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/ogani/js/main.js') }}"></script>
    @include('partials._messages')
    @yield('js')
    <script>
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
          $('[title]').tooltip();
      });
    </script>


</body>

</html>