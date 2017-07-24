<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 23/07/2017
 * Time: 22:29
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>{{ $title or 'Trekking Store - The Simplest Store' }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Store, Trekking, Laravel, PHP Development"/>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.css" rel="stylesheet" type="text/css" media="all"/>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Theme Style -->
    <link href="{{ asset('css/site/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--//theme-style-->

    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <!--//fonts-->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.6/sweetalert2.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/site/plugin/easing/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>

    @yield('styles')
</head>
<body>
<!--header-->
@include('site.includes.top-menu')

@include('site.includes.header')

<div class="content" id="content">
    @yield('content')
</div>

<!-- Footer -->
@include('site.includes.footer')

@yield('scripts')
</body>
</html>

