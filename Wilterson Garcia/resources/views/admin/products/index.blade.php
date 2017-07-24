<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 24/07/2017
 * Time: 01:33
 */
?>

@extends('admin.template.dashboard-template')

@section('title')
    Produtos
@endsection

@section('pagetitle-and-breadcrumbs')
    <section class="content-header">
        <h1>
            Produtos
            <small>Todos os Produtos</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Productos</li>
        </ol>
    </section>
@endsection

@section('content')
    @if(Session::has('return'))
        <div class="alert alert-dismissable {{(Session::get('return')->success) ? 'alert-success' : 'alert-danger'}}">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{ Session::get('return')->message }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Produtos</h3>

                    <div class="pull-right">
                        <a href="{{ route('products.create') }}" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus"></i> Adicionar
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table data-order='[[ 0, "asc" ]]' id="products-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>SKU</th>
                            <th>Categoria</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product['id'] }}</td>
                                <td>{{ $product['name'] }}</td>
                                <td>{{ $product['sku'] }}</td>
                                <td>{{ $product['category'] }}</td>
                                <td>{{ $product['description'] }}</td>
                                <td>R$ {{ $product['price'] }}</td>
                                <td>
                                    <a href="" class="btn btn-xs btn-flat btn-danger"><i class="fa fa-trash"></i></a>
                                    <a href="" class="btn btn-xs btn-flat btn-info"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="application/javascript" src="{{ asset('js/admin/products.js')}}"></script>
@endsection