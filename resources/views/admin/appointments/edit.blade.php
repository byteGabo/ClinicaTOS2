@extends('adminlte::page')

@section('title', 'Editar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
    <strong>{{session('info')}}</strong>
    </div>   
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($appointment,['route' => ['admin.appointments.update', $appointment],'method' => 'put']) !!}            
            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('note', 'Observaciones') !!}
                {!! Form::text('note', null, ['class' => 'form-control', 'placeholder' => 'Opcional']) !!}
                @error('note')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
            <div class="form-group">
                {!! Form::label('date_at', 'Ingrese fecha de la cita:') !!}
                <br>
                {!! Form::date('date_at', \Carbon\Carbon::now()) !!}
                @error('date_at')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
            </div>
            <div class="form-group">
                {!! Form::label('time_at', 'Ingrese hora de la cita (24 horas):') !!}
                {!! Form::time('time_at', null, ['class'=>'form-control']) !!}
                @error('time_at')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('symtoms', 'Sintomas:') !!}
                {!! Form::textarea('symtoms', null, ['class'=>'form-control','placeholder'=>'Ingrese sintomas del paciente(separado por comas)','style'=>'height:100px']) !!}
                @error('symtoms')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
                {!! Form::label('sick', 'Enfermedades recientes:') !!}
                {!! Form::textarea('sick', null, ['class'=>'form-control','placeholder'=>'(opcional)','style'=>'height:100px']) !!}
                @error('sick')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            
            <div class="form-group">
                {!! Form::label('doctor_id', 'Asigne un Doctor') !!}
                {!! Form::select('doctor_id', $doctors, null, ['class'=>'form-control','disabled']) !!}
                @error('doctor_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <div class="form-group">
                {!! Form::label('patient_id', 'Asigne un paciente') !!}
                {!! Form::select('patient_id', $patients, null, ['class'=>'form-control','disabled']) !!}
                @error('patient_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            <br>
            <div class="form-group">
                {!! Form::label('status_id', 'Status de la cita:') !!}
                {!! Form::select('status_id', $statuses, true, ['class'=>'form-control']) !!}
                @error('status_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            {!! Form::submit('Editar Cita', ['class'=>'btn btn-primary float-right']) !!}
            
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