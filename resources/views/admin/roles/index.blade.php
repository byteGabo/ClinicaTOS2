@extends('adminlte::page')

@section('title', 'Listado de roles')

@section('content_header')
    <a class="btn btn-secondary float-right" href="{{route('admin.roles.create')}} ">Ingresar nuevo rol</a>
    <h1>Listado de roles</h1>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
        </div>   
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                    <tr>
                        <td>{{$rol->id}}</td>
                        <td>{{$rol->name}}</td>
                        <td width="10px">
                            <a href="{{route('admin.roles.edit',$rol)}}" class="btn btn-sm btn-primary">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.roles.destroy',$rol),}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop