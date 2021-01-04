<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <meta name="description" content="">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset("/assets/media/favicons/favicon.png") }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset("/assets/media/favicons/favicon-192x192.png" ) }}
    ">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset("/assets/media/favicons/apple-touch-icon-180x180.png") }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset("/assets/css/codebase.min.css") }}">
    @yield('css')

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ asset("/assets/css/themes/flat.min.css") }}> -->

    <!--
            Basic RTL CSS Overwrites (Please consider moving it in an external CSS file - it is added inline just for demostration)

            The UI elements will play nice with RTL in most cases. This file is provided as a get started point for RTL projects,
            so please have in mind that a few elements might require some further CSS adjustments.

            Moreover, .float-left/.float-right and .text-left/.text-right classes will come in handy
        -->
    <style>
        /* Set Text Direction to RTL */
        html {
            direction: rtl;
            text-align: right;
        }

        body {
            text-align: right;
        }

        /* Sidebar Mini */
        @media (min-width: 992px) {
            .sidebar-o.sidebar-mini #sidebar .sidebar-content {
                -webkit-transform: translateX(0) translateY(0) translateZ(0);
                transform: translateX(0) translateY(0) translateZ(0);
            }

            .sidebar-r.sidebar-o.sidebar-mini #sidebar .sidebar-content {
                -webkit-transform: translateX(-166px) translateY(0) translateZ(0);
                transform: translateX(-166px) translateY(0) translateZ(0);
            }

            .sidebar-r.sidebar-o.sidebar-mini #sidebar:hover .sidebar-content {
                -webkit-transform: translateX(0) translateY(0) translateZ(0);
                transform: translateX(0) translateY(0) translateZ(0);
            }
        }

        /* Main Sidebar Navigation */
        .nav-main a {
            padding-right: 40px;
            padding-left: 18px;
        }

        .nav-main a>i {
            right: 19px;
            left: auto;
        }

        .nav-main a.nav-submenu {
            padding-right: 40px;
            padding-left: 35px;
        }

        .nav-main a.nav-submenu::before,
        .nav-main a.nav-submenu::after {
            right: auto;
            left: 15px;
        }

        .nav-main a.nav-submenu::before {
            content: '\f105';
        }

        .nav-main a.nav-submenu::after {
            -webkit-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .nav-main ul {
            padding-right: 40px;
            padding-left: 0;
        }

        .nav-main ul a,
        .nav-main ul a.nav-submenu {
            padding-right: 0;
            padding-left: 8px;
        }

        .nav-main ul a>i {
            margin-right: 0;
            margin-left: 15px;
        }

        .nav-main ul ul {
            padding-right: 12px;
        }

        /* Main Header Navigation */
        @media (min-width: 992px) {
            .nav-main-header a>i {
                margin-right: 0;
                margin-left: 8px;
            }

            .nav-main-header a.nav-submenu {
                padding-right: 14px;
                padding-left: 28px;
            }

            .nav-main-header a.nav-submenu::before {
                right: auto;
                left: 6px;
            }

            .nav-main-header ul {
                right: 0;
                left: auto;
            }

            .nav-main-header ul a.nav-submenu::before {
                content: '\f104';
            }

            .nav-main-header ul ul {
                right: 100%;
                left: auto;
            }

            .nav-main-header>li:last-child ul {
                right: auto;
                left: 0;
            }

            .nav-main-header>li:last-child ul a.nav-submenu::before {
                content: '\f105';
            }

            .nav-main-header>li:last-child ul ul {
                right: auto;
                left: 100%;
            }
        }
    </style>
    <!-- END Stylesheets -->
</head>

<body>
    <form action="{{ route('logout') }}" method="post" id="patient_logout">
        @csrf
    </form>
    <form action="{{ route('admin.logout') }}" method="post" id="admin_logout">
        @csrf
    </form>
    <div id="page-container"
        class="sidebar-inverse side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed enable-page-overlay">
        <!-- Sidebar -->
        <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow bg-black-op-10">
                    <div class="content-header-section text-center align-parent">
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                            data-toggle="layout" data-action="sidebar_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Sidebar -->

                        <!-- Logo -->
                        <div class="content-header-item">
                            <a class="link-effect font-w700" href="">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">code</span><span
                                    class="font-size-xl text-primary">base</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Main Navigation -->
                <div class="content-side content-side-full">
                    <!--
                        Mobile navigation, desktop navigation can be found in #page-header

                        If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                        -->
                    <ul class="nav-main">
                        <li>
                            <a class="active" href="">
                                <i class="si si-home"></i>Home
                            </a>
                        </li>
                        <li class="nav-main-heading">Heading</li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-puzzle"></i>Dropdown
                            </a>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Link #1</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Link #2</a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Dropdown</a>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">Link #1</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Link #2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Vital</li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="si si-wrench"></i>Page
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="si si-wrench"></i>Page
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="si si-wrench"></i>Page
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Main Navigation -->
            </div>
            <!-- Sidebar Content -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700 mr-5" href="{{ route('home') }}">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">{{ config('app.name') }}</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="content-header-section">
                    <ul class="nav-main-header nav-main-header-no-icons">
                        <li>
                            <a class="active" href="{{ route('home') }}">
                                <i class="si si-home"></i>Home
                            </a>
                        </li>
                        <li class="nav-main-heading">Heading</li>
                        <li class="nav-main-heading">Vital</li>
                        @guest
                        <li>
                            <a href="{{ route('login') }}">
                                <i class="si si-wrench"></i>
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">
                                <i class="si si-wrench"></i>
                                Register
                            </a>
                        </li>
                        @endguest

                        @auth
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-puzzle"></i>{{ auth()->user()->name }}
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('patient.home') }}">
                                        <i class="si si-wrench"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a onclick="document.getElementById('patient_logout').submit();">
                                        <i class="si si-wrench"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endauth

                        @auth("admin")
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                <i class="si si-puzzle"></i>{{ auth()->guard("admin")->user()->name }}
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('patient.home') }}">
                                        <i class="si si-wrench"></i>
                                        Admin Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a onclick="document.getElementById('admin_logout').submit();">
                                        <i class="si si-wrench"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endauth
                    </ul>
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                    <!-- END Toggle Sidebar -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header">
                <div class="content-header content-header-fullrow">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Close Search Section -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-secondary px-15" data-toggle="layout"
                                    data-action="header_search_off">
                                    <i class="fa fa-times"></i>
                                </button>
                                <!-- END Close Search Section -->
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary px-15">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            @yield('content')
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-white opacity-0">
            <div class="content content-full">
                <!-- Footer Navigation -->
                <div class="row items-push-2x mt-30">
                    <div class="col-6 col-md-4">
                        <h3 class="h5 font-w700">Heading</h3>
                        <ul class="list list-simple-mini font-size-sm">
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #1</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #2</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #3</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #4</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #5</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #6</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4">
                        <h3 class="h5 font-w700">Heading</h3>
                        <ul class="list list-simple-mini font-size-sm">
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #1</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #2</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #3</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #4</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #5</a>
                            </li>
                            <li>
                                <a class="link-effect font-w600" href="javascript:void(0)">Link #6</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="h5 font-w700">Company LTD</h3>
                        <div class="font-size-sm mb-30">
                            1080 Sunshine Valley, Suite 2563<br>
                            San Francisco, CA 85214<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </div>
                        <h3 class="h5 font-w700">Our Newsletter</h3>
                        <form>
                            <div class="input-group">
                                <input type="email" class="form-control" id="ld-subscribe-email"
                                    name="ld-subscribe-email" placeholder="Your email..">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Footer Navigation -->

                <!-- Copyright Info -->
                <div class="font-size-sm clearfix border-t pt-20 pb-10">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600"
                            href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase</a> &copy;
                        <span class="js-year-copy"></span>
                    </div>
                </div>
                <!-- END Copyright Info -->
            </div>
        </footer>
        <!-- END Footer -->
    </div>

    <!-- Codebase JS -->
    <script src="{{ asset("/assets/js/codebase.core.min.js"></script>
    <script src="{{ asset("/assets/js/codebase.app.min.js"></script>
    @yield('js')
</body>

</html>
