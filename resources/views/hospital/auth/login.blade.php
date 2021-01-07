<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name') }} | hospital login</title>

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
            <div class="bg-gd-dusk">
                <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                    <!-- Header -->
                    <div class="py-30 px-5 text-center">
                        <a class="link-effect font-w700" href="{{ route('home') }}">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">{{ config('app.name') }}</span>
                        </a>
                        <h1 class="h2 font-w700 mt-50 mb-10">Hospital Dashboard</h1>
                        <h2 class="h4 font-w400 text-muted mb-0">Please sign in</h2>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <div class="row justify-content-center px-5">
                        <div class="col-sm-8 col-md-6 col-xl-4">
                            <form class="js-validation-signin" method="POST" action="{{ localUrl(route('hospital.login')) }}">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
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
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="login-password"
                                                name="password">
                                            <label for="login-password">{{ __('Password') }}</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row gutters-tiny">
                                    <div class="col-12 mb-10">
                                        <button type="submit"
                                            class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Sign In
                                        </button>
                                    </div>
                                    <div class="col-sm-6 mb-5">
                                        <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary"
                                            href="{{ route('hospital.password.reset') }}">
                                            <i class="fa fa-warning text-muted mr-5"></i> Forgot password
                                        </a>
                                    </div>
                                    <div class="col-sm-6 mb-5">
                                        <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary" href="{{ route('hospital.register') }}">
                                            <i class="fa fa-plus text-muted mr-5"></i> New Account
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign In Form -->
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
