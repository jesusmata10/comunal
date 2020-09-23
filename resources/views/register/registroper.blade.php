@extends('layouts.adminlte')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">
                Registro de Persona
            </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">
                            Nombres
                        </label>
                        <input class="form-control" id="name" placeholder="Nombre" type="text" name="name">
                        </input>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellido">
                            Apellidos
                        </label>
                        <input class="form-control" id="apellido" placeholder="Apellidos" type="text" name="apellido">
                        </input>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">
                        File input
                    </label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input class="custom-file-input" id="exampleInputFile" type="file">
                                <label class="custom-file-label" for="exampleInputFile">
                                    Choose file
                                </label>
                            </input>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">
                                Upload
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="exampleCheck1" type="checkbox">
                        <label class="form-check-label" for="exampleCheck1">
                            Check me out
                        </label>
                    </input>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
