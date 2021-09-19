@extends('adminlte::page')

@section('title', 'GoClinic')

@section('content_header')

    <a class="btn btn-secondary float-right" href="{{route('admin.doctors.create')}} ">Ingresar nuevo Doctor</a>
    <h1>Listado de Doctores</h1>
@stop

@section('content')
@if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
            </div>   
        @endif
    <div class
    @livewire('admin.doctors-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop