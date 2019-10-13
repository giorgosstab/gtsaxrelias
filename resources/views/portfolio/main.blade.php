<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="Revex, Agency, Business, Company" />
        <meta name="description" content="Responsive Agency HTML Template" />
        <meta name="author" content="" />

        <!-- Title -->
        <title>Revex | Agency HTML Template</title>

        <!-- JQuery -->
        {{Html::script('assets/js/jquery.min.js')}}

        <!-- Bootstrap CSS -->
        {{Html::style('assets/css/bootstrap.min.css')}}

        <!-- FontAwesome Icon -->
        {{Html::style('assets/css/font-awesome.css')}}

        <!-- Custom CSS Styles -->
        {{Html::style('assets/css/style.css')}}

        <!-- Topbar loader JS -->
        {{Html::script('assets/js/prettify.min.js')}}
        {{Html::script('assets/js/topbar.min.js')}}
        {{Html::script('assets/js/loader.js')}}

        <!--extra style-->
        @yield('extra-css')

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon"/>
    </head>
    <body class="top-body" id="main_content">
        <!--nav-->
        @include('portfolio.layouts.navbar')

        @yield('content')

        <!--footer-->
        @include('portfolio.layouts.footer')

        <!-- Bootstrap -->
        {{ Html::script('assets/js/bootstrap.min.js') }}

        <!-- Owl Carousel -->
        {{ Html::script('assets/js/owl.carousel.min.js') }}

        <!-- Custom Script -->
        {{ Html::script('assets/js/script.js') }}

        <!--extra script-->
        @yield('extra-script')
    </body>
</html>
