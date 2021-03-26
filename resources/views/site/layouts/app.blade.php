<!DOCTYPE html>
<html>

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>@yield('title' , config('app.name'))</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/site/css/bootstrap.min.css") }}">

    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/animate.css') }}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset("/site/css/animate.css") }}">

    <!-- hover css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/hover-min.css') }}">

    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/owl.carousel.css') }}">

    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/off-canvas.css') }}">

    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/fonts/flaticon.css') }}">

    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/rsmenu-main.css') }}">

    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/magnific-popup.css') }}">

    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/rsmenu-transitions.css') }}">

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/style.css') }}">

    <!-- Spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/spacing.css') }}">

    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/responsive.css') }}">

    @yield('css')
</head>

<body>

    {{-- <!-- Preloader area start here -->
    <div id="loading" class="icon-preloader">
        <div class="loader">
            <div class="animate3">
                <img src="{{ asset('/site/images/logo.svg/') }}" alt="Preloader Image animate3">
            </div>
        </div>
    </div>
    <!--End preloader here --> --}}

    <!--Header Section Start-->

    <header id="rs-header" class="transparent-header">
        <!-- Toolbar Start -->
        <div class="toolbar-area hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-7 col-xs-12">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="fa fa-envelope-o"></i><a href="#">mail@mail.com</a></li>
                                <li><i class="fa fa-phone"></i><a href="#">0615894984198</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12">
                        <div class="toolbar-sl-share">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- Toolbar End -->

        <!-- Header Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-3">
                        <div class="logo-area">
                            <a href="{{ route('home') }}">
                                REVIVE
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-9 mobile-menu-area">
                        <div class="rs-menu-area display-flex-center">
                            <div class="main-menu">
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="{{ route('features') }}">Features</a></li>
                                        {{-- <li><a href="chatbot.html">ChatBot</a> </li> --}}
                                        <li> <a href="{{ route('contact') }}">Contact</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Menu End -->
    </header>
    <!--Header Section End-->

    @yield('main')

    <!-- Footer Start -->
    <footer id="rs-footer" class="rs-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 single-footer-column mb-md-30">
                        <div class="about-widget pr-20">
                            <div class="footer-info">
                                <p class="footer-desc">Lorem ipsum dolor sit amet, conse turini adipiscing elit, sed do
                                    eiusmod tempor in cididunt ut labore. </p>
                            </div>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 single-footer-column">
                        <h4 class="footer-title">Contact Us</h4>
                        <div class="contact-text">mansoura, knah el swees<br>
                            <a href="#">98494894</a>,
                            <a href="#">mail@mail.com</a>,
                            <a href="#">www.project.com</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 single-footer-column mb-md-30">
                        <div class="footer-menu">
                            <h4 class="footer-title">Navigate</h4>
                            <div class="row">
                                <div class="col-lg-6 pr-0">
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="features.html">Features</a></li>
                                        <li><a href="chatbot.html">ChatBot</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright text-center">
                    <p>© Copyrights 2021</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->



    <!-- modernizr js -->
    <script src="{{ asset("/site/js/modernizr-2.8.3.min.js") }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('/site/js/jquery.min.js') }}"></script>
    <!-- counter top js -->
    <script src="{{ asset('/site/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/site/js/waypoints.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('/site/js/bootstrap.min.js') }}"></script>

    <!-- owl.carousel js -->
    <script src="{{ asset('/site/js/owl.carousel.min.js') }}"></script>

    <!-- magnific popup -->
    <script src="{{ asset('/site/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- wow js -->
    <script src="{{ asset('/site/js/wow.min.js') }}"></script>

    <!-- rsmenu js -->
    <script src="{{ asset('/site/js/rsmenu-main.js') }}"></script>

    <!-- plugins js -->
    <script src="{{ asset('/site/js/plugins.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('/site/js/main.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $(function() {
        @if($msg = session('success'))
            Swal.fire({
                position: 'top-end',
                icon: "success",
                showConfirmButton: false,
                timer: 3000,
                text: "{{ $msg }}"
            })
        @endif

        @if($msg = session('failed'))
            Swal.fire({
                position: 'top-end',
                icon: "failed",
                showConfirmButton: false,
                timer: 3000,
                text: "{{ $msg }}"
            })
        @endif
        });
    </script>

    @yield('js')
</body>

</html>
