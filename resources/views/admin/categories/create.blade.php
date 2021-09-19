@extends('adminlte::page')

@section('title', 'Crear Especialidad')

@section('content_header')
    <h1>Crear nueva especialidad</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store'])!!}
                <div class="form-group">
                    {!! Form::label('name_category', 'Nombre especialidad') !!}
                    {!! Form::text('name_category', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la especialidad']) !!}

                    @error('name_category')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

                {!! Form::submit('Crear especialidad', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
