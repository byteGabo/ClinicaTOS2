@extends('adminlte::page')

@section('title', 'GoClinic')

@section('content_header')
    <h1>Modificar Paciente</h1>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
        </div>   
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($patient, ['route'=>['admin.patients.update', $patient], 'method' => 'put']) !!}
                
            @include('admin.patients.partials.form')

            {!! Form::submit('Modificar Paciente', ['class'=>'btn btn-primary']) !!}
            
            {!! Form::close() !!}
 
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop