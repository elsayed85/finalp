<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name') }} | Hospital Reset Password</title>
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset("/assets/media/favicons/favicon.png") }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset("/assets/media/favicons/favicon-192x192.png") }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset("/assets/media/favicons/apple-touch-icon-180x180.png") }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset("/assets/css/codebase.min.css") }}">

</head>

<body>

    <div id="page-container" class="main-content-boxed side-trans-enabled">

        <!-- Main Container -->
        <main id="main-container" style="min-height: 389px;">

            <!-- Page Content -->
            <div class="bg-gd-lake">
                <div class="hero-static content content-full bg-white js-appear-enabled animated fadeIn"
                    data-toggle="appear">
                    <!-- Header -->
                    <div class="py-30 px-5 text-center">
                        <a class="link-effect font-w700" href="{{ route('home') }}">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">{{ config('app.name') }}</span>
                        </a>
                        <h1 class="h2 font-w700 mt-50 mb-10">Hospital | Reset Password</h1>
                        <h2 class="h4 mt-50 mb-10">Don’t worry, we’ve got your back</h4>

                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @else
                            <h2 class="h4 font-w400 text-muted mb-0">Please enter your email</h2>
                            @endif

                    </div>
                    <!-- END Header -->

                    <!-- Reminder Form -->
                    <div class="row justify-content-center px-5">
                        <div class="col-sm-8 col-md-6 col-xl-4">
                            <form class="js-validation-reminder" method="POST"
                                action="{{ localUrl(route('hospital.password.request')) }}" novalidate="novalidate">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="login-username" name="email" value="{{ old('email') }}">
                                            <label for="login-username">{{ __('E-Mail Address') }}</label>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                        <i class="fa fa-asterisk mr-10"></i> Password Reminder
                                    </button>
                                    <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary"
                                        href="{{ route('hospital.login') }}">
                                        <i class="si si-login text-muted mr-10"></i> Sign In
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Reminder Form -->
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
    <script src="{{ asset("/assets/js/codebase.core.min.js") }}"></script>

    <script src="{{ asset("/assets/js/codebase.app.min.js") }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset("/assets/js/plugins/jquery-validation/jquery.validate.min.js") }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset("/assets/js/pages/op_auth_signin.min.js") }}"></script>
</body>

</html>
