<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="SmartVietSolution chuyên cung cấp dịch vụ website, dịch vụ">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="<?php echo csrf_token() ?>">        
        <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
        <link href={{ URL::asset("css/bootstrap.css") }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("css/style.css") }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("css/linecons.css") }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("css/font-awesome.css") }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("css/responsive.css") }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("css/animate.css") }} rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200" rel="stylesheet" type="text/css">                
        <script type="text/javascript" src={{ URL::asset("js/jquery.1.8.3.min.js") }}></script>        
        <!-- Begin ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- End ajax -->        
        <script type="text/javascript" src={{ URL::asset("js/bootstrap.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("js/jquery-scrolltofixed.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("js/jquery.easing.1.3.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("js/jquery.isotope.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("js/wow.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("js/classie.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("js/contactform.js") }}></script>        
    </head>
    <body>
        @include('layouts.master.header')
        @yield('content')
        @include('layouts.master.footer')
    </body>
</html>
@yield('scripts')
