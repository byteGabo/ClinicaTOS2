@extends('adminlte::page')

@section('title', 'Citas')

@section('content_header')
    <a class="btn btn-success float-right" href="{{route('admin.appointments.create')}}"><strong>+</strong> Crear nueva cita</a>
    <h1>Listado de Citas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
        </div>   
    @endif
    @livewire('admin.appointments-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop