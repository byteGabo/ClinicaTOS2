@extends('adminlte::page')

@section('title', 'GoClinic')

@section('content_header')

<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.statuses.create')}}">Nuevo Status</a>
    <h1>Lista de status</h1>
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
                        <td>ID</td>
                        <td>Nombre del status</td>
                        <td colspan="2"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statuses as $status)
                        <tr>
                            <td>{{$status->id}}</td>
                            <td>{{$status->name}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.statuses.edit',$status)}}">Editar</a>
                            </td>
                            <td width="10p">
                                <form action="{{route('admin.statuses.destroy',$status)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

