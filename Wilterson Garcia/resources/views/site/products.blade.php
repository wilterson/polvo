<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 23/07/2017
 * Time: 23:53
 */
?>

@extends('site.template.index')

@section('styles')
@endsection

@section('scripts')
    <script type="application/javascript">
        var uri = "{{ route('sells.store')}}"
    </script>
    <script src="{{ asset('js/site/buy.js') }}"></script>
@endsection

@section('content')
    <div class="container">
        <div class="content-product">
            <h3 class="future-men">All Products</h3>

            @foreach($products as $product)
            <div class="col-md-4 col-d product-container">
                <div class="men-grid in-men">
                    <a href="#"><img class="img-responsive" src="{{ asset($product['image']) }}" alt=""></a>
                    <div class="value-in">
                        <p>{{ $product['name'] }}</p>
                        <span>R$ {{ $product['price'] }}</span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="down-top">
                        <a href="" class="btn-add-to-cart" id="{{ $product['id'] }}" data-cart-add="716934999" data-cart-quantity="1">
                            add to cart
                            <i class="fa fa-plus"></i>
                        </a>
                        <input type="hidden" id="csrf_token" value="{{ csrf_token() }}">
                        <input type="checkbox" name="add-cart" class="add-cart hidden" />
                        <select class="drop-down">
                            <option value="" class="size">SIZE</option>
                            <option value="1">Large</option>
                            <option value="2">Medium</option>
                            <option value="3">Small</option>
                        </select>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>

        <div class="col-md-12 text-center" style="margin: 50px 0">
            <a class="hvr-shutter-in-horizontal btn-buy" id="buy-items">Proceed to Buy</a>
        </div>
    </div>
@endsection

