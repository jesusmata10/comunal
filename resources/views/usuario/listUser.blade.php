@extends('layouts.adminlte')

@section('content')
<div class="container-fluid">
    <br>
        <table class="table table-striped table-bordered nowrap" id="example" style="width:100%;">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        E-mail
                    </th>
                    <th>
                        Creado
                    </th>
                    <th>
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                <tr>
                    <td>
                        {{ $users->id }}
                    </td>
                    <td>
                        {{ $users->name }}
                    </td>
                    <td>
                        {{ $users->email }}
                    </td>
                    <td>
                        {{ $users->created_at }}
                    </td>
                    <td>
                        <button class="btn btn-info" type="">
                            Editar
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </br>
</div>
@endsection
