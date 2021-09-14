@extends('adminlte::page')

@section('title', 'GoClinic')

@section('content_header')
    <h1>Registrar nuevo doctor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.doctors.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del doctor']) !!}
                @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <div class="form-group">
                {!! Form::label('gender', 'Genero:') !!}
                {!! Form::select('gender', ['M'=> 'Masculino','F'=>'Femenino'], null,['class'=>'form-control']) !!}
                @error('gender')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <div class="form-group">
                {!! Form::label('day_of_birth', 'Fecha de Nacimiento:') !!}
                {!! Form::date('day_of_birth', \Carbon\Carbon::now()) !!}
                @error('day_of_birth')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo Electronico:') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un correo electronico']) !!}
                @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
                {!! Form::label('address', 'Dirección:') !!}
                {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un direccón']) !!}
                @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
                {!! Form::label('phone', 'Numero de teléfono:') !!}
                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Ingrese un teléfono']) !!}
                @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
                <p class="font-weight-bold">Estado</p>
                <label>
                    {!! Form::radio('is_active', 1, true) !!}
                    Activo
                </label>
                <label>
                    {!! Form::radio('is_active', 2, false) !!}
                    No Activo
                </label>
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Especialidad:') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                @error('category_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

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