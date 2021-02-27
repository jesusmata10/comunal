@extends('layouts.adminlte')

@section('content')
<!--<div class="row">
    <div class="col-12">-->
  
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                Registro de Persona
            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        
         <!--<form role="form">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">
                            bombonas:
                        </label>
                        <input class="form-control" id="name" name="name" placeholder="bombona" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kilo">
                            kilos:
                        </label>
                        <input class="form-control" id="kilo" name="kilo" placeholder="kilos" type="text">
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="cantidad">
                            cantidad:
                        </label>
                        <input class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="fechanac">
                            Fecha:
                        </label>
                        <input class="form-control" id="fechanac" name="fechanac" placeholder="Fecha" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nacionalidad">
                            Nacionalidad:
                        </label>
                        <input class="form-control" id="nacionalidad" name="nacionalidad" placeholder="nacionalidad" type="text">
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>
                            Genero:
                        </label>
                        <select class="custom-select">
                            <option>
                            </option>
                            <option>
                                Mujer
                            </option>
                            <option>
                                Hombre
                            </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kilo">
                            Email:
                        </label>
                        <input class="form-control" id="kilo" name="kilo" placeholder="kilos" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kilo">
                            Status:
                        </label>
                        <input class="form-control" id="kilo" name="kilo" placeholder="kilos" type="text">
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <div class="form-group">
                            <label>
                                Date range:
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt">
                                        </i>
                                    </span>
                                </div>
                                <input class="form-control float-right" id="reservation" type="text">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label>
                            Fecha:
                        </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt">
                                    </i>
                                </span>
                            </div>
                            <input class="form-control" data-inputmask-alias="datemask" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false" type="text">
                            </input>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Fecha:</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                            </div>
                        
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary" type="submit">
                    Enviar
                </button>
            </div>
        </form> 
    </div> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container-fluid">
  <form class="for">
   <div class="form-group">
    <p>
      <label>Bombona:</label> <br>
      <input id="bombona" class="form-control" type="text" placeholder="bombona..."><br>
    </p>
    <p>
      <label>Kilo:</label> <br>
      <input id="kilo" class="form-control" type="text" placeholder="kilo..."><br>
    </p>
    <p>
      <label>Cantidad:</label> <br>
      <input id="cantidad" class="form-control" type="text" placeholder="Cedúla"> <br>
    </p>
    <button id="adicionar" class="btn btn-success" type="button">Agregar</button>
  </div>
</form>

<p>Elementos en la Tabla:
  <div id="adicionados"></div>
</p>
<table  id="mytable" class="table table-bordered table-hover ">
  <tr>
    <th>Bombona</th>
    <th>Kilo</th>
    <th>Cantidad</th>
    <th>Acción</th>

  </tr>
</table>

</div>





<script>
$(document).ready(function() {
//obtenemos el valor de los input

$('#adicionar').click(function() {
  var bombona = document.getElementById("bombona").value;
  var kilo = document.getElementById("kilo").value;
  var cantidad = document.getElementById("cantidad").value;
  var i = 1; //contador para asignar id al boton que borrara la fila
  var fila = '<tr id="row' + i + '"><td>' + bombona + '</td><td>' + kilo + '</td><td>' + cantidad + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila

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

<!--</div>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container">
  <form>
   <div class="form-group">
    <p>
      <label>Entre su bombona:</label> <br>
      <input id="bombona" class="form-control" type="text" placeholder="bombona..."><br>
    </p>
    <p>
      <label>Entre su kilo:</label> <br>
      <input id="kilo" class="form-control" type="text" placeholder="kilo..."><br>
    </p>
    <p>
      <label>Entre su C&eacute;dula:</label> <br>
      <input id="cantidad" class="form-control" type="text" placeholder="Cedúla"> <br>
    </p>
    <button id="adicionar" class="btn btn-success" type="button">Adicionar a la tabla</button>
  </div>
</form>

<p>Elementos en la Tabla:
  <div id="adicionados"></div>
</p>
<table  id="mytable" class="table table-bordered table-hover ">
  <tr>
    <th>Nobmre</th>
    <th>kilos</th>
    <th>C&eacute;dula</th>
    <th>Eliminar</th>

  </tr>
</table>

</div>

</div>-->
@endsection
