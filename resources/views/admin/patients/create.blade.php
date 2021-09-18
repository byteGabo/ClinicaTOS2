@extends('adminlte::page')

@section('title', 'GoClinic')

@section('content_header')
    <h1>Crear nuevo paciente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.patients.store']) !!}
                <div class="form-group">
                    {!! Form::label('name_patient', 'Nombre:') !!}
                    {!! Form::text('name_patient', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del paciente']) !!}
                    @error('name_patient')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('dpi', 'DPI:') !!}
                    {!! Form::text('dpi', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el dpi del paciente']) !!}
                    @error('dpi')
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
                    {!! Form::label('sick', 'Enfermedades:') !!}
                    {!! Form::textarea('sick', null, ['class'=>'form-control','placeholder'=>'Coloque los padecimientos','style'=>'height:100px']) !!}
                    @error('sick')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('medicaments', 'Medicamentos:') !!}
                    {!! Form::textarea('medicaments', null, ['class'=>'form-control','placeholder'=>'Coloque los medicamentos que utiliza el paciente (separelos con comas)','style'=>'height:100px']) !!}
                    @error('sick')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('alergy', 'Alergias:') !!}
                    {!! Form::textarea('alergy', null, ['class'=>'form-control','placeholder'=>'Coloque las alergias del paciente (separelos con comas)','style'=>'height:100px']) !!}
                    @error('sick')
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
            
            

            {!! Form::submit('Crear Paciente', ['class'=>'btn btn-primary']) !!}

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