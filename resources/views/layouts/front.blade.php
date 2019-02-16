<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Google Calender</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="site-url" content="{{ asset('/') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel='stylesheet' href="{{ asset('front/css/bootstrap.min.css')}}">
        <link rel='stylesheet' href="{{ asset('front/css/bootstrap-theme.min.css')}}">
        <link rel='stylesheet' href="{{ asset('front/css/style.css')}}">
    </head>
    <body class="app header-fixed aside-menu-hidden sidebar-lg-show">
            @yield('content')
    </body>
    <script src="{{ asset('front/js/bootstrap/jquery.min.js')}}"></script>
    <script src="{{ asset('front/js/bootstrap/bootstrap.min.js')}}"></script>
    <script  src="{{ asset('front/js/calendar/index.js')}}"></script>
    

</html>

