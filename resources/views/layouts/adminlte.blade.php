<!DOCTYPE doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <meta content="ie=edge" http-equiv="x-ua-compatible">
                    <title>
                        {{ config('app.name', 'Laravel') }}
                    </title>
                    <script defer="" src="{{ asset('js/app.js') }}">
                    </script>
                    <!-- Styles -->
                    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                        <!-- Font Awesome Icons -->
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <i class="fas fa-bars">
                            </i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="index3.html">
                            Home
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="#">
                            Contactos
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Salir') }}
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                <!-- SEARCH FORM -->
                <!-- <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input aria-label="Search" class="form-control form-control-navbar" placeholder="Search" type="search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search">
                                    </i>
                                </button>
                            </div>
                        </input>
                    </div>
                </form>
                Right navbar links -->
                {{--
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments">
                            </i>
                            <span class="badge badge-danger navbar-badge">
                                3
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                                <!-- Message Start -->
                                <div class="media">
                                    <img alt="User Avatar" class="img-size-50 mr-3 img-circle" src="dist/img/user1-128x128.jpg">
                                        <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                                {{ Auth::user()->name }}
                                                <span class="float-right text-sm text-danger">
                                                    <i class="fas fa-star">
                                                    </i>
                                                </span>
                                            </h3>
                                            <p class="text-sm">
                                                Call me whenever you can...
                                            </p>
                                            <p class="text-sm text-muted">
                                                <i class="far fa-clock mr-1">
                                                </i>
                                                4 Hours Ago
                                            </p>
                                        </div>
                                    </img>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="#">
                                <!-- Message Start -->
                                <div class="media">
                                    <img alt="User Avatar" class="img-size-50 img-circle mr-3" src="dist/img/user8-128x128.jpg">
                                        <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                                John Pierce
                                                <span class="float-right text-sm text-muted">
                                                    <i class="fas fa-star">
                                                    </i>
                                                </span>
                                            </h3>
                                            <p class="text-sm">
                                                I got your message bro
                                            </p>
                                            <p class="text-sm text-muted">
                                                <i class="far fa-clock mr-1">
                                                </i>
                                                4 Hours Ago
                                            </p>
                                        </div>
                                    </img>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                            </div>
                            <a class="dropdown-item" href="#">
                                <!-- Message Start -->
                                <div class="media">
                                    <img alt="User Avatar" class="img-size-50 img-circle mr-3" src="dist/img/user3-128x128.jpg">
                                        <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                                Nora Silvester
                                                <span class="float-right text-sm text-warning">
                                                    <i class="fas fa-star">
                                                    </i>
                                                </span>
                                            </h3>
                                            <p class="text-sm">
                                                The subject goes here
                                            </p>
                                            <p class="text-sm text-muted">
                                                <i class="far fa-clock mr-1">
                                                </i>
                                                4 Hours Ago
                                            </p>
                                        </div>
                                    </img>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item dropdown-footer" href="#">
                                See All Messages
                            </a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell">
                            </i>
                            <span class="badge badge-warning navbar-badge">
                                15
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-header">
                                15 Notifications
                            </span>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-envelope mr-2">
                                </i>
                                4 new messages
                                <span class="float-right text-muted text-sm">
                                    3 mins
                                </span>
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-users mr-2">
                                </i>
                                8 friend requests
                                <span class="float-right text-muted text-sm">
                                    12 hours
                                </span>
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-file mr-2">
                                </i>
                                3 new reports
                                <span class="float-right text-muted text-sm">
                                    2 days
                                </span>
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item dropdown-footer" href="#">
                                See All Notifications
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-slide="true" data-widget="control-sidebar" href="#" role="button">
                            <i class="fas fa-th-large">
                            </i>
                        </a>
                    </li>
                </ul>
                --}}
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a class="brand-link" href="index3.html">
                    <img alt="AdminLTE Logo" class="brand-image img-circle elevation-3" src="/img/home1.png" style="opacity: .8">
                        <span class="brand-text font-weight-light">
                            AdminLTE 3
                        </span>
                    </img>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img alt="User Image" class="brand-image img-circle elevation-3" src="/img/avatar1.png" style="opacity: .8">
                            </img>
                        </div>
                        <div class="info">
                            <a class="d-block" href="#">
                                {{ Auth::user()->name }}
                            </a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a class="nav-link active" href="#">
                                    <i class="nav-icon fas fa-tachometer-alt">
                                    </i>
                                    <p>
                                        Página de inicio
                                        <i class="right fas fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Pagina Activa
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Pagina Inactiva
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="nav-icon fas fa-th">
                                    </i>
                                    <p>
                                        Enlaces simple
                                        <span class="right badge badge-danger">
                                            Nuevo
                                        </span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">
                                    Página de inicio
                                </h1>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item">
                                        <a href="#">
                                            Home
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Página de inicio
                                    </li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Contenido principal -->
                <div class="content">
                    @yield('content')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Titulo de Tarjeta
                                        </h5>
                                        <p class="card-text">
                                            Algún texto de ejemplo rápido para construir sobre el título de la tarjeta y constituir la mayor parte del contenido de la tarjeta.
                  content.
                                        </p>
                                        <a class="card-link" href="#">
                                            Card link
                                        </a>
                                        <a class="card-link" href="#">
                                            Another link
                                        </a>
                                    </div>
                                </div>
                                <div class="card card-primary card-outline">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Titulo de Tarjeta
                                        </h5>
                                        <p class="card-text">
                                            Algún texto de ejemplo rápido para construir sobre el título de la tarjeta y constituir la mayor parte del contenido de la tarjeta.
                  content.
                                        </p>
                                        <a class="card-link" href="#">
                                            Card link
                                        </a>
                                        <a class="card-link" href="#">
                                            Another link
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="m-0">
                                            Featured
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            Tratamiento de título especial
                                        </h6>
                                        <p class="card-text">
                                            Con el texto de apoyo a continuación como una introducción natural a contenido adicional.
                                        </p>
                                        <a class="btn btn-primary" href="#">
                                            Ir a
                                        </a>
                                    </div>
                                </div>
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="m-0">
                                            Featured
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            Tratamiento de título especial
                                        </h6>
                                        <p class="card-text">
                                            Con el texto de apoyo a continuación como una introducción natural a contenido adicional.
                                        </p>
                                        <a class="btn btn-primary" href="#">
                                            Ir a
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>
                        Titulo
                    </h5>
                    <p>
                        Contenido
                    </p>
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Santa Teresa del Tuy
                </div>
                <!-- Default to the left -->
                <strong>
                    Copyright © 2014-2019
                    <a href="https://adminlte.io">
                        AdminLTE.io
                    </a>
                    .
                </strong>
                All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->
    </body>
</html>
