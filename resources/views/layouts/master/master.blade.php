<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="SmartVietSolution thiết kế website chuyên nghiệp theo chuẩn SEO">
        <meta name="keywords" content="thiết kế web chuyên nghiệp,thiết kế web giá rẻ, thiết kế web chuẩn SEO">
        <meta name="author" content="SmartVietSolution">
        <meta name="csrf-token" content="<?php echo csrf_token() ?>">
        <link rel="icon" href={{ URL::asset("favicon.png") }} type="image/png">
        <link href={{ URL::asset("cssmin/bootstrap.min.css") }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("cssmin/style.min.css") }}?v={{ time() }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("cssmin/linecons.min.css") }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("cssmin/font-awesome.min.css") }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("cssmin/responsive.min.css") }}?v={{ time() }} rel="stylesheet" type="text/css">
        <link href={{ URL::asset("cssmin/animate.min.css") }} rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200" rel="stylesheet" type="text/css">
        <script type="text/javascript" src={{ URL::asset("jsmin/jquery.1.8.3.min.js") }}></script>
        <!-- Begin ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- End ajax -->
        <script type="text/javascript" src={{ URL::asset("jsmin/bootstrap.min.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("jsmin/jquery-scrolltofixed.min.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("jsmin/jquery.easing.1.3.min.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("jsmin/jquery.isotope.min.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("jsmin/wow.min.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("jsmin/classie.min.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("jsmin/contactform.min.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("jsmin/jquery.mask.min.js") }}></script>
    </head>
    <body>
        @include('layouts.master.header')
        @yield('content')
        @include('layouts.master.footer')
    </body>
</html>
@yield('scripts')
