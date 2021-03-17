@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">

        @if (session('status'))
            <div class="alert alert-success desva">
                {{ session('status') }}
            </div>
        @endif
        @if (session('status_error'))
            <div class="alert alert-danger desva">
                {{ session('status_error') }}
            </div>
        @endif
        
        <div id="criterioBusqueda" class="alert alert-danger desva" style="display: none" role="alert">
            Debe elegir un criterio de busqueda
        </div>

        @if ($search == 'v' && $datatable->isEmpty())
            <div id="sinResultados" class="alert alert-danger desva" role="alert">
                No se han encontrado resultados para su búsqueda
            </div>
        @endif

        <form  action="" method="GET" role="form" id="formCircuito" name="formCircuito">
            {{ csrf_field() }}
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Criterios de B&uacute;squeda</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Proceso</label>
                            <select class="form-control" name="proceso_id" id="proceso_id">
                                <option value="" selected>Seleccione una opci&oacute;n</option>
                                {{--@foreach($procesos as $items)
                                    <option value="{{ $items->id }}">{{ $items->descripcion }}</option>
                                @endforeach--}}
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <div class="form-group">
                                <label for="fecha">Fecha:</label>
                                <div class="input-group date" id="fecha" data-target-input="nearest">
                                <div class="input-group-append" data-target="#fecha">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                    <input type="date" class="form-control" data-target="#fecha" name="fecha" id="fecha"/>
                                </div>
                            </div>                     
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="">Estatus</label>
                            <select class="form-control" name="estatus" id="estatus">
                                <option value="" selected>Seleccione una opci&oacute;n</option>
                                <option value="1">ACTIVO</option>
                                <option value="0">INACTIVO</option>
                            </select>
                        </div>
                    </div>
                    <input name="search" id="search" type="hidden" value="v">
                </div>
                <div class="card-footer">
                    <div class="float-right">
                       
                            <button type="button" onClick="buscar()" class="btn btn-outline-primary"><i class="fa fa-search"></i> Buscar</button>
                            <a href="{{ url('/periodosPlan') }}" type="button" class="btn btn-outline-primary"><i class="fa fa-eye"></i> Ver Todos</a>
                        
                        <button type="reset" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Limpiar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

<div class="row">
    <div class="col-12">

        <div class="card card-primary">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        
                            <a href="{{ url('periodosPlan/create') }}" type="button" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Nuevo</a>
                        
                            <button type="button" onClick="reports('pdf')" class="btn btn-outline-primary"><i class="fa fa-file"></i> Pdf</button>
                            <button type="button" onClick="reports('excel')" class="btn btn-outline-primary"><i class="fa fa-file"></i> Excel</button>
                        
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-12">

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th style="width:20px">N°</th>
                                    <th>Proceso</th>
                                    <th>Periodo</th>
                                    <th>Estatus</th>
                                    <th style="width:100px">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @php
                                  $i = 0;
                                @endphp
                                   {{--}} @foreach($datatable as $key => $items)
                                        <tr class="text-center">
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $items->descripcion }}</td>
                                            <td><b>Desde</b> {!! \Carbon\Carbon::parse($items->fecha_inicio)->format('d/m/Y') !!} <b>hasta</b> {!! \Carbon\Carbon::parse($items->fecha_fin)->format('d/m/Y') !!}</td>
                                            <td>
                                                @if ($items->estatus == 1) ACTIVO @else INACTIVO @endif
                                            </td>
                                            <td>
                                                <div>
                                                    @can('editar')
                                                        <a href="{{ url('/periodosPlan/'.$items->id.'/edit') }}" type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach--}}
                                
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

@section('script')
    <script type="text/javascript">

        setTimeout(function() {
            $(".desva").fadeOut(1500)
        },3000)

        function buscar()
          {

            var formIndex = document.forms['formCircuito'];

            var vproceso_id = document.getElementById("proceso_id").value;
            var vfecha = document.getElementById("fecha").value;
            var vestatus = document.getElementById("estatus").value;

            if (vproceso_id === '' &&  vfecha === '' &&  vestatus === '') {
                $('#criterioBusqueda').show(); 
                setTimeout(function() {
                    $(".desva").fadeOut(1500);
                },3000);
            } else {
              formIndex.submit();
            }
          }
    $("#example2").DataTable({
          "responsive": true,
          "autoWidth": false,
          "language": {
                "lengthMenu": "Mostrar registros _MENU_ por página",
                "zeroRecords": "No se encontró información",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente"
                }
            }
        });
        function reports(type) {
            var link = window.location.search
            var inicio = link.indexOf('&')

            if (inicio == -1) {
                cadena = ''
            } else {
                var cadena = link.substring(inicio)
            }

            if (type == 'pdf') {
                window.open('{{ url("/periodosPlanPdf") }}' + '?' + cadena, '_blank')
            } else {
                window.open('{{ url("/periodosPlanExcel") }}' + '?' + cadena, '_blank')
            }
        }
    </script>
@endsection

@endsection
