<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name') }} | {{ __('Confirm Password') }}</title>

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
    <form action="{{ localUrl(route('logout')) }}" method="post" id="logout">
        @csrf
    </form>
    <div id="page-container" class="main-content-boxed">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-image" style="background-image: url({{ asset('/assets/media/photos/photo2@2x.jpg') }});">
                <div class="hero-static content content-full bg-white-op-90 js-appear-enabled animated fadeIn"
                    data-toggle="appear" data-class="animated fadeIn">
                    <!-- Avatar -->
                    <div class="py-30 px-5 text-center">
                        <a class="link-effect text-pulse font-w700" href="{{ route('home') }}">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">{{ config('app.name') }}</span>
                        </a>
                        <h2 class="h4 font-w400 text-muted mb-30">
                            {{ __('Please confirm your password before continuing.') }}</h2>
                        <img class="img-avatar img-avatar96" src="{{ auth()->user()->avatar }}" alt="">
                    </div>
                    <!-- END Avatar -->

                    <!-- Unlock Content -->
                    <div class="row justify-content-center px-5">
                        <div class="col-sm-8 col-md-6 col-xl-4">
                            <form class="js-validation-lock" action="{{ localUrl(route('password.confirm')) }}"
                                method="post" novalidate="novalidate">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password">
                                            <label for="password">Password</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-success">
                                        <i class="si si-lock-open mr-10"></i> Continue
                                    </button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                    <a class="btn btn-block btn-noborder btn-rounded btn-alt-secondary"
                                        onclick="document.getElementById('logout').submit();">
                                        <i class="si si-logout text-muted mr-10"></i> Sign Out
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Unlock Content -->
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
