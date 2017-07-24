<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 24/07/2017
 * Time: 06:08
 */
?>

@extends('admin.template.dashboard-template')

@section('title')
    Detalhes da Venda
@endsection

@section('pagetitle-and-breadcrumbs')
    <section class="content-header">
        <h1>
            Venda
            <small>Detalhes da Venda</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Vendas</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Detalhes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p>
                        <label>Numero do Pedido</label>
                        <h4>{{ $sell['sell_cod'] }}</h4>
                    </p>

                    <br/>
                    <p>
                        <label>Comprador</label>
                        <span>{{ $sell['buyer'] }}</span>
                    </p>

                    <p>
                        <label>Data da Compra</label>
                        <span>{{ $sell['date'] }}</span>
                    </p>

                    <h3>Produtos</h3>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>SKU</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prods as $product)
                                <tr>
                                    <td>{{ $product['id'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['sku'] }}</td>
                                    <td>{{ $product['category'] }}</td>
                                    <td>{{ $product['price'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h3>Total da Compra: R$ {{ $sell['total'] }}</h3>
                    <br/>
                    <div class="text-left">
                        <a href="{{ route('sells.index') }}" class="btn btn-flat btn-primary">
                            <i class="fa fa-arrow-left"></i> Voltar
                        </a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="application/javascript" src="{{ asset('js/admin/sells.js')}}"></script>
@endsection

