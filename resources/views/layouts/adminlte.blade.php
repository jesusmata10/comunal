<!DOCTYPE doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <meta content="ie=edge" http-equiv="x-ua-compatible">
                    <title>
                        {{ config('app.name', 'Laravel') }}
                    </title>
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
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-home">
                            </i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user-friends">
                            </i>
                            Contactos
                        </a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt">
                            </i>
                            {{ __('Salir') }}
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a class="brand-link" href="#">
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
                            <li class="nav-item has-treeview">
                                <a class="nav-link active" href="">
                                    <i class="nav-icon fas fa-tachometer-alt">
                                    </i>
                                    <p>
                                        Registro
                                        <i class="right fas fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Pagina Activa
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('registroper.index') }}">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Pagina Inactiva
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a class="nav-link active" href="#">
                                    <i class="nav-icon fas fa-tachometer-alt">
                                    </i>
                                    <p>
                                        Consultas
                                        <i class="right fas fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
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
                                <a class="nav-link active" href="#">
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
                            <li class="nav-item has-treeview">
                                <a class="nav-link active" href="#">
                                    <i class="nav-icon fas fa-tools">
                                    </i>
                                    <p>
                                        Configuración
                                        <i class="right fas fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/usuario/listUser') }}">
                                            <i class="far fa-user nav-icon">
                                            </i>
                                            <p>
                                                User
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="far fa-envelope nav-icon">
                                            </i>
                                            <p>
                                                Email
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="nav-icon fas fa-tags">
                                    </i>
                                    <p>
                                        Pruebas
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
                <!-- /.content-header -->
                <!-- Contenido principal -->
                <div class="content">
                    <br>
                    @yield('content')
                </div>
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
        <script src="{{ asset('js/app.js') }}">
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable( {
                    "language": {
                                "sProcessing":     "Procesando...",
                                "sLengthMenu":     "Mostrar _MENU_ registros",
                                "sZeroRecords":    "No se encontraron resultados",
                                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                                "sInfoPostFix":    "",
                                "sSearch":         "Buscar:",
                                "sUrl":            "",
                                "sInfoThousands":  ",",
                                "sLoadingRecords": "Cargando...",
                                "oPaginate": {
                                    "sFirst":    "Primero",
                                    "sLast":     "Último",
                                    "sNext":     "Siguiente",
                                    "sPrevious": "Anterior"
                                },
                                "oAria": {
                                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                },
                                "buttons": {
                                    "copy": "Copiar",
                                    "colvis": "Visibilidad"
                                }
                            },  
                    responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal( {
                                header: function ( row ) {
                                    var data = row.data();
                                    return 'Detalle para '+data[0]+' '+data[1];
                                }
                            } ),
                            renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                                tableClass: 'table'
                            } ),
                            
                        }
                    }
                    
                } );
            } );
        </script>
    </body>
</html>
