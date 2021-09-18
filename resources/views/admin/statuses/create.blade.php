@extends('adminlte::page')

@section('title', 'GoClinic')

@section('content_header')
    <h1>Crear nuevo status</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>

    </div>

@endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.statuses.store']) !!}

            <div class="form-group">
                {!! Form::label('name_status', 'Nombre') !!}
                {!! Form::text('name_status', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del status']) !!}
                @error('name_status')
                 <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            

            {!! Form::submit('Crear status', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

