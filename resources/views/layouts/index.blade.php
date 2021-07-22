<!DOCTYPE HTML>
<!--
 Cube by FreeHTML5.co
 Twitter: http://twitter.com/gettemplateco
 URL: http://freehtml5.co
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cube &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords"
        content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
 <script src="js/respond.min.js"></script>
 <![endif]-->

</head>

<body>

    <div class="gtco-loader"></div>

    <div id="page">

        <nav class="gtco-nav" role="navigation">
            <div class="gtco-container">

                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div id="gtco-logo">
                            <a href="index.html">
                                <img src="{{asset('images/logo.png')}}" alt="Free HTML5 Website Template by FreeHTML5.co">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <!-- <li><a href="about.html">About</a></li>		 -->
                            <!-- <li><a href="portfolio.html">Portfolio</a></li> -->
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        @yield('main')

        <footer id="gtco-footer" class="gtco-section" role="contentinfo">

            <div class="gtco-copyright">
                <div class="gtco-container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <p><small>&copy; 2016 Free HTML5. All Rights Reserved. </small></p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>
                                <small>
                                    Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
                                    Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; 
                                    <a href="http://unsplash.com" target="_blank">Unsplash</a>
                                </small> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/magnific-popup-options.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
