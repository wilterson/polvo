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
            <small>Adicionar Produto</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('products.index') }}"><i class="fa fa-cart"></i> Produtos</a></li>
            <li class="active">Novo Produto</li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="POST" class="create-category container-fluid">
            {{ csrf_field() }}
            <div class="col-md-8 col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Informações do Produto</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="nome" class="col-sm-2 control-label">Nome</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nome" name="name" placeholder="Nome do Produto"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sku" class="col-sm-2 control-label">SKU</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="sku" id="sku" placeholder="SKU do Produto"/>
                            </div>

                            <label for="preco" class="col-sm-2 control-label">Preço</label>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="price" id="nome" placeholder="Preço"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="descricao" class="col-sm-2 control-label">Breve Descrição</label>

                            <div class="col-sm-10">
                                <textarea name="description" id="descricao" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Publicar</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group row">
                            <label for="categoria" class="col-sm-2 control-label">Categoria</label>

                            <div class="col-sm-10">
                                <select id="categoria" name="category" class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Selecione</option>
                                    <option value="roupas">Roupas</option>
                                    <option value="calcados">Calçados</option>
                                    <option value="acessorios">Acessórios</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="imagem" class="col-sm-2 control-label">Imagem</label>

                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" id="imagem"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-primary btn-flat">Cadastrar Produto</button>
                                <a href="{{ route('products.index') }}" class="btn btn-danger btn-flat">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script type="application/javascript" src="{{ asset('js/admin/products.js')}}"></script>
@endsection

