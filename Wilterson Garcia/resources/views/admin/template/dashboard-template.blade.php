<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 05/07/2017
 * Time: 13:25
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/admin/AdminLTE.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/skins/skin-black.css') }}" />

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('css/admin/plugins/bootstrap-datepicker/bootstrap-datepicker3.css') }}" />
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('css/admin/plugins/datatables/dataTables.bootstrap.min.css') }}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('css/admin/plugins/select2/select2.min.css') }}" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="{{ asset('css/admin/custom-style.css') }}" />

    @yield('styles')
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

    @include('admin.includes.header-bar')

    @include('admin.includes.menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('pagetitle-and-breadcrumbs')

        <!-- Main content -->
        <section class="content">
            @yield('estatistics')

            @yield('content')
        </section>
        <!-- /.content -->
    </div>

    @include('admin.includes.footer')

</div>
<!-- ./wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- datepicker -->
<script src="{{ asset('js/admin/plugins/datepicker/bootstrap-datepicker.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('js/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('js/admin/plugins/select2/select2.full.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('js/admin/adminlte.min.js') }}"></script>

@yield('scripts')
</body>
</html>

