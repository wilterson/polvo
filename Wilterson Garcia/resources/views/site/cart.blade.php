<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 24/07/2017
 * Time: 00:15
 */
?>

@extends('site.template.index')

@section('content')
    <div class="container">
        <div class="check-out">
            <h2>Checkout</h2>
            <table>
                <tr>
                    <th>ITEM</th>
                    <th>PRICES</th>
                    <th>DELIVERY DETAILS</th>
                </tr>
                <tr>
                    <td class="ring-in">
                        <a href="single.html" class="at-in">
                            <img src="images/17.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="sed">
                            <h5>Sed ut perspiciatis unde</h5>
                            <p>#A00087J</p>
                            <p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas) </p>
                        </div>
                        <div class="clearfix"></div>
                    </td>
                    <td>$100.00</td>
                    <td>FREE SHIPPING</td>
                </tr>

                <tr>
                    <td class="ring-in">
                        <a href="single.html" class="at-in">
                            <img src="images/17.jpg" class="img-responsive" alt="">
                        </a>
                        <div class="sed">
                            <h5>Sed ut perspiciatis unde</h5>
                            <p>#A00087J</p>
                            <p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas) </p>
                        </div>
                        <div class="clearfix"></div>
                    </td>
                    <td>$100.00</td>
                    <td>FREE SHIPPING</td>
                </tr>
            </table>
            <p class="compra-total">Total: R$ 550,00 </p>

            <a href="#" class=" hvr-shutter-in-horizontal">BUY</a>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection