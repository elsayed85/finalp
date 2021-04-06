@php
$authuser = auth()->user();
@endphp
<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} Dashboard - @yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="MedicApp">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1"><!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset("/assets/medical/img/favicon.ico") }}"><!-- Plugins CSS -->

    @yield('css_before')

    <link rel="stylesheet" href="{{ asset("/assets/medical/css/bootstrap/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/icofont.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/simple-line-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/jquery.typeahead.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/datatables.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/bootstrap-select.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/Chart.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/morris.css") }}">
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/leaflet.css") }}"><!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset("/assets/medical/css/style.css") }}">

    @livewireStyles
    @yield('css_after')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
        @auth()
        window.patient_userId = "{{ auth()->id() }}";
        @endauth
    </script>

</head>

<body class="vertical-layout boxed">
    <form action="{{ localUrl(route('logout')) }}" method="post" id="logout">
        @csrf
    </form>
    @include('patient.includes.loader')

    <div class="page-box">

        <div class="app-container">
            @include('patient.includes.top-menu.main')
            @include('patient.includes.sidebar.main')
            @include('patient.includes.main-content.main')
            @include('patient.includes.footer')
        </div>
    </div>
    </div>
    </div>

    @yield('js_before')

    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <script src="{{ asset('/assets/js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset("/assets/medical/js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/jquery-migrate-1.4.1.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/popper.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/jquery.typeahead.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/datatables.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/jquery.barrating.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/Chart.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/raphael-min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/morris.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/echarts.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/echarts-gl.min.js") }}"></script>
    <script src="{{ asset("/assets/medical/js/main.js") }}"></script>

    @livewireScripts

    @yield('js_after')
</body>

</html>
