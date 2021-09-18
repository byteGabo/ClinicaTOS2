@extends('adminlte::page')

@section('title', 'GoClinic')

@section('content_header')
<a class="btn btn-secondary float-right" href="{{route('admin.doctors.create')}} ">Ingresar nuevo Paciente</a>
    <h1>Lista de pacientes</h1>
@stop

@section('content')
    @livewire('admin.patients-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop