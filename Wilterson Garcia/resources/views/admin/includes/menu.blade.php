<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 05/07/2017
 * Time: 14:34
 */
?>

<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('images/perfil.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Wilterson Garcia</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU PRINCIPAL</li>
            <li class="active">
                <a href="{{ route('adminHome') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>Produtos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('products.index') }}"><i class="fa fa-search"></i> Ver Todos</a></li>
                    <li><a href="{{ route('products.create') }}"><i class="fa fa-plus"></i> Add Produto</a></li>
                </ul>
            </li>

            <li class="">
                <a href="{{ route('sells.index') }}">
                    <i class="fa fa-usd"></i> <span>Vendas</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>