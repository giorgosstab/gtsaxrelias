<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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

    <!-- FontAwesome Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />

    <!-- Custom CSS Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon"/>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="root"></div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<!-- Custom Script -->
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
