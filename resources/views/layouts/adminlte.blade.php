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
                        <div class="col-md-8">
                            @yield('breadcrumbs')
                        </div>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
                            <li class="nav-item has-treeview">
                                <a class="nav-link active" href="">
                                    <i class="nav-icon fas fa-tachometer-alt">
                                    </i>
                                    <p>
                                        <i class="right fas fa-angle-left">
                                        </i>
                                        Consejo Comunal
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Jefe de Hogar
                                                <span class="right badge badge-danger">
                                                    Offline
                                                </span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Pagina Inactiva
                                                <span class="right badge badge-danger">
                                                    Offline
                                                </span>
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a class="nav-link active" href="">
                                    <i class="nav-icon fas fa-tachometer-alt">
                                    </i>
                                    <p>
                                        PDVSA-GAS
                                        <i class="right fas fa-angle-left">
                                        </i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/register/pdvsa') }}">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Pagina Activa
                                                <span class="right badge badge-success">
                                                    Offline
                                                </span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Pagina Inactiva
                                                <span class="right badge badge-danger">
                                                    Offline
                                                </span>
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
                                                <span class="right badge badge-danger">
                                                    Offline
                                                </span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="far fa-circle nav-icon">
                                            </i>
                                            <p>
                                                Pagina Inactiva
                                                <span class="right badge badge-danger">
                                                    Offline
                                                </span>
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
                                            Offline
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
                                                Usuarios
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
                                        <span class="right badge badge-danger">
                                            Offline
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
                <!-- /.content-header -->
                <!-- Contenido principal -->
                <div class="content">
                    <br>
                        @yield('content')
                    </br>
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
                    <a href="https://adminlte.io/themes/v3/pages/UI/modals.html" target="_blank">
                        AdminLTE.io
                    </a>
                    .
                </strong>
                All rights reserved.
            </footer>

            <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">Buscar</button>

            <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Buscar:</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form role="form">
                                <div class="form-group">
                                  <label>Cedula:</label>
                                  <input id="kilo" class="form-control" type="text">
                                </div>
                            
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                        </form>
                    </div>
                   
                </div>
                    
            </div>-->
        </div>

         @include('layouts.parciales.script')

         @yield('script')
        <script src="{{ asset('js/app.js') }}">
        </script>
        <script src="/plugins/jquery/jquery.min.js"></script>
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
        <script type="text/javascript">
            $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false;

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template");
  previewNode.id = "";
  var previewTemplate = previewNode.parentNode.innerHTML;
  previewNode.parentNode.removeChild(previewNode);

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  });

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
  });

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
  });

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1";
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
  });

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0";
  });

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
  };
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true);
  };
        </script>
    </body>
</html>
