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
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <link href={{ URL::asset("templates/bigstore/css/bootstrap.css") }} rel='stylesheet' type='text/css' />
        <link href={{ URL::asset("templates/bigstore/css/style.css") }} rel='stylesheet' type='text/css' />
        <script src={{ URL::asset("templates/bigstore/js/jquery-1.11.1.min.js") }}></script>
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src={{ URL::asset("templates/bigstore/js/move-top.js") }}></script>
        <script type="text/javascript" src={{ URL::asset("templates/bigstore/js/easing.js") }}></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <link href={{ URL::asset("templates/bigstore/css/font-awesome.css") }} rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
        <!--- start-rate---->
        <script src={{ URL::asset("templates/bigstore/js/jstarbox.js") }}></script>
        <link rel="stylesheet" href={{ URL::asset("templates/bigstore/css/jstarbox.css") }} type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
                jQuery('.starbox').each(function() {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                        if (starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' ' + val);
                            return val;
                        }
                    })
                });
            });
        </script>
        <!---End-rate---->
    </head>
    <body>
        @include('templates.bigstore.header')
        @yield('content')
        @include('templates.bigstore.modal')
        @include('templates.bigstore.footer')        
    </body>
</html>