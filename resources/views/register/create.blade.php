@extends('layouts.adminlte')

@section('content')

<!-- parametro buscar -->
    <div class="card card-primary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Parametros de Busqueda</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
        
            <div class="card-body" style="display: block;">
                <form role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name"> Nombre y Apellido:</label>
                          <input id="name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="cedula">Cedula:</label>
                          <input id="cedula" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                          <label for="direccion">Direccion:</label>
                          <input id="direccion" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="codigo">Codigo:</label>
                          <input id="codigo" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                    <button id="adicionar" class="btn btn-success" type="button">Buscar</button>
                </div>
                </form>
                <!-- /.row -->
            </div>
        
          <!-- /.card-body 
          <div class="card-footer" style="display: block;">
            
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div> -->
    </div>

<!--<div class="row">-->

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Registro de Bombonas</h3>
        </div>
        
        <form role="form">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="name"> Nombre y Apellido:</label>
                      <input id="name" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="cedula">Cedula:</label>
                      <input id="cedula" class="form-control" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="direccion">Direccion:</label>
                      <input id="direccion" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="codigo">Codigo:</label>
                      <input id="codigo" class="form-control" type="text">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col-4">
                      <label for="">Bombona:</label>
                      <select class="form-control" name="bombona" id="bombona">
                          <option value="" selected>Seleccione una opci&oacute;n</option>
                          <option value="Autogas">Autogas</option>
                          <option value="Hermagas">Hermagas</option>
                          <option value="Danielgas">Danielgas</option>
                          <option value="Pdvsagas">Pdvsagas</option>
                          <option value="Digas">Digas</option>
                      </select>
                    </div>
                    <div class="form-group col-4">
                      <label for="">Kilo:</label>
                      <select class="form-control" name="kilo" id="kilo">
                          <option value="" selected>Seleccione una opci&oacute;n</option>
                          <option value="10 Kg">10 Kg</option>
                          <option value="18 Kg">18 Kg</option>
                          <option value="43 Kg">43 Kg</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Cantidad:</label>
                      <input id="cantidad" class="form-control" type="text" placeholder="Cantidad">
                    </div>
                </div>
                <div class="form-group">
                    <button id="adicionar" class="btn btn-success" type="button">Agregar</button>
                </div>
                <div class="form-group">
                    <p>Elementos en la Tabla:
                      <div id="adicionados"></div>
                    </p>
                    <table  id="mytable" class="table table-bordered table-hover ">
                      <tr class="text-center">
                        
                        <th>Bombona</th>
                        <th>Kilo</th>
                        <th>Cantidad</th>
                        <th>Acción</th>
                      </tr>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
    
@section('script')
<script>
    $('.select2bs4').select({
        theme: 'bootstrap4'
    });

    $(document).ready(function() {
        //obtenemos el valor de los input
        $('#adicionar').click(function() {
          var bombona = document.getElementById("bombona").value;
          var kilo = document.getElementById("kilo").value;
          var cantidad = document.getElementById("cantidad").value;
          var i = 1; //contador para asignar id al boton que borrara la fila
          var fila = '<tr id="row' + i + '"><td>' + bombona + '</td><td>' + kilo + '</td><td>' + cantidad + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>';
          i++;

          $('#mytable tr:first').after(fila);
            $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
            var nFilas = $("#mytable tr").length;
            $("#adicionados").append(nFilas - 1);
            //le resto 1 para no contar la fila del header
            document.getElementById("kilo").value ="";
            document.getElementById("cantidad").value = "";
            document.getElementById("bombona").value = "";
            document.getElementById("bombona").focus();
          });
        $(document).on('click', '.btn_remove', function() {
          var button_id = $(this).attr("id");
            //cuando da click obtenemos el id del boton
            $('#row' + button_id + '').remove(); //borra la fila
            //limpia el para que vuelva a contar las filas de la tabla
            $("#adicionados").text("");
            var nFilas = $("#mytable tr").length;
            $("#adicionados").append(nFilas - 1);
          });
        });
</script>
@endsection

@endsection
