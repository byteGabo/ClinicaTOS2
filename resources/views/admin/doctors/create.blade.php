@extends('adminlte::page')

@section('title', 'GoClinic')

@section('content_header')
    <h1>Registrar nuevo doctor</h1>
@stop

@section('content')
        @if (session('info'))
             <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
            </div>   
        @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.doctors.store']) !!}

            @include('admin.doctors.partials.form')
            
            {!! Form::submit('Crear Doctor', ['class'=>'btn btn-primary']) !!}

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