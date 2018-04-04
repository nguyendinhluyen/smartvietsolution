<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
        <link rel="stylesheet" href={{ URL::asset("templates/eleganter/css/components.css") }}>
        <link rel="stylesheet" href={{ URL::asset("templates/eleganter/css/icons.css") }}>
        <link rel="stylesheet" href={{ URL::asset("templates/eleganter/css/responsee.css") }}>
        <link rel="stylesheet" href={{ URL::asset("templates/eleganter/owl-carousel/owl.carousel.css") }}>
        <link rel="stylesheet" href={{ URL::asset("templates/eleganter/owl-carousel/owl.theme.css") }}>
        <link rel="stylesheet" href={{ URL::asset("templates/eleganter/css/template-style.css") }}>
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src={{ URL::asset("templates/eleganter/js/jquery-1.8.3.min.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("templates/eleganter/js/jquery-ui.min.js") }}></script>
    </head>
    <body class="size-1140">
        @include('templates.eleganter.header')
        @yield('content')
        @include('templates.eleganter.footer')
    </body>
</html>
<script type="text/javascript" src={{ URL::asset("templates/eleganter/js/responsee.js") }}></script>
<script type="text/javascript" src={{ URL::asset("templates/eleganter/owl-carousel/owl.carousel.js") }}></script>
<script type="text/javascript" src={{ URL::asset("templates/eleganter/js/template-scripts.js") }}></script>
