@extends('adminlte::page')

@section('title', 'Crear Cita')

@section('content_header')
    <h1>Crear cita nueva</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
    <strong>{{session('info')}}</strong>
    </div>   
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.appointments.store']) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}

            @include('admin.appointments.partials.form')
            {!! Form::submit('Crear Cita', ['class'=>'btn btn-primary float-right']) !!}
            
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