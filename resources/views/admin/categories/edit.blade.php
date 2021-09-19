@extends('adminlte::page')

@section('title', 'Editar Especialidad')

@section('content_header')
    <h1>Editar Especialidad</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>

    </div>

@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($category,['route' => ['admin.categories.update', $category], 'method' => 'put'])!!}
            <div class="form-group">
                {!! Form::label('name_category', 'Nombre especialidad') !!}
                {!! Form::text('name_category', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la especialidad']) !!}

                @error('name_category')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            {!! Form::submit('Actualizar especialidad', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

