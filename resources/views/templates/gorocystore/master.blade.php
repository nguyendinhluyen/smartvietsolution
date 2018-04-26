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
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href={{ URL::asset("templates/gorocystore/css/bootstrap.css") }} rel="stylesheet" type="text/css" media="all" />
        <link href={{ URL::asset("templates/gorocystore/css/style.css") }} rel="stylesheet" type="text/css" media="all" />
        <link href={{ URL::asset("templates/gorocystore/css/font-awesome.css") }} rel="stylesheet" type="text/css" media="all" />
        <script src={{ URL::asset("templates/gorocystore/js/jquery-1.11.1.min.js") }}></script>
        <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src={{ URL::asset("templates/gorocystore/js/move-top.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("templates/gorocystore/js/easing.js") }}></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
    </head>
    <body>
        @include('templates.gorocystore.header')
        @yield('content')
        @include('templates.gorocystore.footer')
    </body>
</html>