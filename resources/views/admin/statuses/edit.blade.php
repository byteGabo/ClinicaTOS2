@extends('adminlte::page')

@section('title', 'Editar Status')

@section('content_header')
    <h1>Editar status</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>

    </div>

@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($status,['route' => ['admin.statuses.update', $status], 'method' => 'put'])!!}
            <div class="form-group">
                {!! Form::label('name_status', 'Nombre del Status') !!}
                {!! Form::text('name_status', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del status']) !!}

                @error('name_status')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            {!! Form::submit('Actualizar Status', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

