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
        <link rel="stylesheet" href={{ URL::asset("templates/fashion/css/components.css") }}>        
        <link rel="stylesheet" href={{ URL::asset("templates/fashion/css/icons.css") }}>
        <link rel="stylesheet" href={{ URL::asset("templates/fashion/css/responsee.css") }}>
        <link rel="stylesheet" href={{ URL::asset("templates/fashion/css/template-style.css") }}>
        <!-- CUSTOM STYLE -->
        <link rel="stylesheet" src={{ URL::asset("templates/fashion/css/template-style.css") }}>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <script src={{ URL::asset("templates/fashion/js/jquery-1.8.3.min.js") }}></script>
        <script src={{ URL::asset("templates/fashion/js/jquery-ui.min.js") }}></script>
    </head>
    <body class="size-1140">        
        @include('templates.fashion.header')
        @yield('content')
        @include('templates.fashion.footer')
    </body>
</html>
@yield('scripts')