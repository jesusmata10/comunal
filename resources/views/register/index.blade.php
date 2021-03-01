
@extends('layouts.adminlte')

@section('content')
<!--<div class="row">-->

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Registro de Persona</h3>
    </div>
<form role="form">
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">
                    Nombres:
                </label>
                <input class="form-control" id="name" name="name" placeholder="bombona" type="text">
                </input>
            </div>
            <div class="form-group col-md-6">
                <label for="kilo">
                    Apellido:
                </label>
                <input class="form-control" id="kilo" name="kilo" placeholder="kilos" type="text">
                </input>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="cantidad">
                    Cedula:
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
</div> 