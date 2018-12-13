<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{asset('demo/default/media/img/logo/favicon.ico')}}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themeCss.css') }}" rel="stylesheet">
    @stack('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script src="{{ asset('js/libs.js') }}"></script>
    <script src="{{ asset('js/libs/lodash.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')

</head>
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"
        style="display: none">
    @include('layouts.header')
    <div class="container-fluid">
        @yield('content')
    </div>

    @include('layouts/footer')
    @if(!auth()->check())
        @include('modals.user-flow')
    @endif
</body>
</html>