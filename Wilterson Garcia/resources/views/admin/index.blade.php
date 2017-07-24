<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 05/07/2017
 * Time: 14:07
 */
?>

@extends('admin.template.dashboard-template')

@section('pagetitle-and-breadcrumbs')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@endsection


@section('estatistics')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ $productsCount }}</h3>

                    <p>Produtos Cadastrados</p>
                </div>
                <div class="icon">
                    <i class="fa fa-cart"></i>
                </div>
                <a href="{{ route('products.index') }}" class="small-box-footer">Ver Todos <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $sellsCount }}</h3>

                    <p>Compras Efetuadas</p>
                </div>
                <div class="icon">
                    <i class="fa fa-usd"></i>
                </div>
                <a href="{{ route('sells.index') }}" class="small-box-footer">Ver Todas <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection


@section('content')
    <!-- Main row -->
    <div class="row">

    </div>
    <!-- /.row (main row) -->
@endsection