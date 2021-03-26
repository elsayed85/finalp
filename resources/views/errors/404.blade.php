<!DOCTYPE html>
<html>

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>404</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/font-awesome.min.css') }}">

    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/site/css/animate.css') }}">

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

</head>

<body>

    {{-- <!-- Preloader area start here -->
    <div id="loading" class="icon-preloader">
        <div class="loader">
            <div class="animate3">
                <img src="{{ asset('/site/images/logo.svg') }}" alt="Preloader Image animate3">
            </div>
        </div>
    </div>
    <!--End preloader here --> --}}

    <div class="error">
        <div class="container">
            <div class="content-wrap text-center">
                <div class="title-part">
                    <h1 class="title white-color mb-15">404</h1>
                    <div class="sub-title white-color">Page Not Found</div>
                </div>
                <div class="button-part">
                    <a class="back-btn" href="{{ route('home') }}">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>
