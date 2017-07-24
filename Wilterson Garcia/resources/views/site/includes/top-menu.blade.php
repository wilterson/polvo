<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 23/07/2017
 * Time: 23:19
 */
?>

<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="{{ asset('images/menu.png') }}" alt=""> </span>
                <ul class="icon1 sub-icon1">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('allProducts') }}"> Products</a></li>
                    <li><a href="{{ route('login') }}"> Login</a></li>
                </ul>
                <!--script-->
                <script>
                    $("span.menu").click(function () {
                        $(".top-nav ul").slideToggle(500, function () {
                        });
                    });
                </script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
