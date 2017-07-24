<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 23/07/2017
 * Time: 22:30
 */
?>

@extends('site.template.index')

@section('styles')
@endsection

@section('styles')
@endsection

@section('content')
    <div class="content-top">
        <div class="container">
            <div class="content-top-at">
                <a href="{{ url('/products') }}" class="product-in hvr-shutter-in-horizontal">see all products</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content-grid">
            <h3 class="future">Recent Products</h3>
            <div class="clearfix"></div>
            <ul id="flexiselDemo1">
                @foreach($products as $product)
                <li>
                    <div class="men-grid">
                        <a href="#"><img class="img-responsive" src="{{ asset($product['image']) }}" alt=""></a>
                        <div class="value-in">
                            <p>{{ $product['name'] }}</p>
                            <span>R$ {{ $product['price'] }}</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="down-top ">
                            <select class="drop-down">
                                <option value="" class="size">SIZE</option>
                                <option value="1">Large</option>
                                <option value="2">Medium</option>
                                <option value="3">Small</option>
                            </select>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <script type="text/javascript">
                $(window).load(function () {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 2000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 2
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{ asset('js/site/plugin/flexisel/jquery.flexisel.js') }}"></script>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <h2>about us</h2>
            <p>Trekking Store - The Simplest store build with laravel framework.
                Developed by Wilterson Garcia for Grupo Polvo developers test.</p>
            <i class="fa fa-trophy fa-3x"></i>
            <i class="round"> </i>
        </div>
    </div>
@endsection

