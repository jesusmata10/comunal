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
    <!--<form role="form">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">
                            Nombres:
                        </label>
                        <input class="form-control" id="name" name="name" placeholder="Nombre" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellido">
                            Apellidos:
                        </label>
                        <input class="form-control" id="apellido" name="apellido" placeholder="Apellidos" type="text">
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="cedula">
                            Cedula:
                        </label>
                        <input class="form-control" id="cedula" name="cedula" placeholder="cedula" type="text">
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
                        <label for="apellido">
                            Email:
                        </label>
                        <input class="form-control" id="apellido" name="apellido" placeholder="Apellidos" type="text">
                        </input>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="apellido">
                            Status:
                        </label>
                        <input class="form-control" id="apellido" name="apellido" placeholder="Apellidos" type="text">
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
    <div class="card-body">
        <form role="form">
            <div class="form-group">
                <div class="row">
                    <div class="form-group">
                        <label class="form-label">
                            Entre su Nombre:
                        </label>
                        <input class="form-control" id="nombre" placeholder="Nombre..." type="text">
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>
                            Entre su Apellido:
                        </label>
                        <input class="form-control" id="apellido" placeholder="Apellido..." type="text">
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>
                            Entre su Cédula:
                        </label>
                        <input class="form-control" id="cedula" placeholder="Cedúla" type="text">
                        </input>
                    </div>
                </div>
                <div>
                    <button class="btn btn-success" id="adicionar" type="button">
                        Agregar
                    </button>
                </div>
            </div>
            <div id="adicionados">
                Elementos en la Tabla:
            </div>
            <table class="table table-striped table-bordered nowrap" id="mytable">
                <tr>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Apellidos
                    </th>
                    <th>
                        Cédula
                    </th>
                    <th>
                        Eliminar
                    </th>
                </tr>
            </table>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        //obtenemos el valor de los input

        $('#adicionar').click(function() {
          var nombre = document.getElementById("nombre").value;
          var apellido = document.getElementById("apellido").value;
          var cedula = document.getElementById("cedula").value;
          var i = 1; //contador para asignar id al boton que borrara la fila
          var fila = '<tr id="row' + i + '"><td>' + nombre + '</td><td>' + apellido + '</td><td>' + cedula + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>'; //esto seria lo que contendria la fila
            console.log(nombre+apellido+cedula);
          i++;

          $('#mytable tr:first').after(fila);
            $("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
            var nFilas = $("#mytable tr").length;
            $("#adicionados").append(nFilas - 1);
            //le resto 1 para no contar la fila del header
            document.getElementById("apellido").value ="";
            document.getElementById("cedula").value = "";
            document.getElementById("nombre").value = "";
            document.getElementById("nombre").focus();
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
      <label>Entre su Nombre:</label> <br>
      <input id="nombre" class="form-control" type="text" placeholder="Nombre..."><br>
    </p>
    <p>
      <label>Entre su Apellido:</label> <br>
      <input id="apellido" class="form-control" type="text" placeholder="Apellido..."><br>
    </p>
    <p>
      <label>Entre su C&eacute;dula:</label> <br>
      <input id="cedula" class="form-control" type="text" placeholder="Cedúla"> <br>
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
    <th>Apellidos</th>
    <th>C&eacute;dula</th>
    <th>Eliminar</th>

  </tr>
</table>

</div>

</div>-->
@endsection
