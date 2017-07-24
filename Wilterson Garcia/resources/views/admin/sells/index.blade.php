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
    Vendas
@endsection

@section('pagetitle-and-breadcrumbs')
    <section class="content-header">
        <h1>
            Vendas
            <small>Todas as Vendas</small>
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
                    <h3 class="box-title">Lista das Vendas</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table data-order='[[ 0, "asc" ]]' id="sells-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Comprador</th>
                            <th>Data da Venda</th>
                            <th>Total</th>
                            <th>Detalhes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sells as $sell)
                            <tr>
                                <td>{{ $sell['id'] }}</td>
                                <td>{{ $sell['buyer'] }}</td>
                                <td>{{ $sell['date'] }}</td>
                                <td>R$ {{ $sell['total'] }}</td>
                                <td>
                                    <a href="{{ route('sells.show', ['id'=> $sell['id'] ]) }}" class="btn btn-xs btn-flat btn-primary"><i class="fa fa-eye"></i></a>
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
    <script type="application/javascript" src="{{ asset('js/admin/sells.js')}}"></script>
@endsection
