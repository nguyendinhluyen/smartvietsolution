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
        <!-- Bootstrap -->
        <script src={{ URL::asset("templates/boxify/js/modernizr.custom.js") }}></script>
        <link href={{ URL::asset("templates/boxify/css/bootstrap.min.css") }} rel="stylesheet">
        <link href={{ URL::asset("templates/boxify/css/jquery.fancybox.css") }} rel="stylesheet">
        <link href={{ URL::asset("templates/boxify/css/flickity.css") }} rel="stylesheet">
        <link href={{ URL::asset("templates/boxify/css/animate.css") }} rel="stylesheet">        
        <link href={{ URL::asset("templates/boxify/css/styles.css") }} rel="stylesheet">
        <link href={{ URL::asset("templates/boxify/css/queries.css") }} rel="stylesheet">
        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" type="text/css">
    </head>
    <body>
        @yield('content')
    </body>
</html>
@yield('scripts')
