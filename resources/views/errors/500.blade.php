<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title> {{ __('Server Error') }} </title>

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset("/assets/media/favicons/favicon.png") }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset("/assets/media/favicons/favicon-192x192.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/assets/media/favicons/apple-touch-icon-180x180.png") }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset("/assets/css/codebase.min.css") }}">

</head>

<body>
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="hero bg-white">
                <div class="hero-inner">
                    <div class="content content-full">
                        <div class="py-30 text-center">
                            <div class="display-3 text-flat">
                                <i class="fa fa-times-circle-o"></i> 500
                            </div>
                            <h1 class="h2 font-w700 mt-30 mb-10">Oops.. You just found an error page..</h1>
                            <h2 class="h3 font-w400 text-muted mb-50">We are sorry but your request contains bad syntax
                                and cannot be fulfilled..</h2>
                            <a class="btn btn-hero btn-rounded btn-alt-secondary" href="{{ route('home') }}">
                                <i class="fa fa-arrow-left mr-10"></i> Back to all Errors
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <script src="{{ asset("/assets/js/codebase.core.min.js") }}"></script>

    <script src="{{ asset("/assets/js/codebase.app.min.js") }}"></script>
</body>

</html>
