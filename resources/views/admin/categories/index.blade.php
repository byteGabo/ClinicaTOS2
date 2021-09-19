@extends('adminlte::page')

@section('title', 'Especialidades')

@section('content_header')
    <h1>Listado de Especialidades</h1>
@stop

@section('content')
    @if (session('info'))
     <div class="alert alert-success">
         <strong>{{session('info')}}</strong>
         </div>   
    @endif
    <div class="card">
        <div class="card-header">   
            <a class="btn btn-secondary float-right" href="{{route('admin.categories.create')}}">Agregar nueva especialidad</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de la especialidad</th>
                        <th colspan="2"></th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name_category}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>
@stop
