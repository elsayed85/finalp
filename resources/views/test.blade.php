<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
        <preview-component></preview-component>
    </div>
    <script>
        window.PUSHER_APP_KEY = '{{ config('broadcasting.connections.pusher.key') }}';
        window.APP_DEBUG = {{ config('app.debug') ? 'true' : 'false' }};
    </script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key={{ config('googlemaps.key') }}"
    async></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
