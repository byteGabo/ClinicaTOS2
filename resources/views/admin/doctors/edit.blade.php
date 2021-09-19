@extends('adminlte::page')

@section('title', 'Editar Doctor')

@section('content_header')
    <h1>Modificar Doctor</h1>
@stop

@section('content')
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
            </div>   
        @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($doctor,['route' => ['admin.doctors.update', $doctor],'method' => 'put']) !!}

            @include('admin.doctors.partials.form')
            

            {!! Form::submit('Actualizar Doctor', ['class'=>'btn btn-primary']) !!}

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