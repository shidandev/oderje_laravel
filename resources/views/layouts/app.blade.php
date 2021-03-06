<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Oderje') }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/oderje-favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome 5 icon-->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('extra-css')

</head>
<body>

    @include('partials.nav')

    @yield('content')

    @include('partials.navbtm')


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    @yield('extra-js')
</body>

</html>
