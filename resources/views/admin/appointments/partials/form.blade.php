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
    {!! Form::select('doctor_id', $doctors, null, ['class'=>'form-control']) !!}
    @error('doctor_id')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>
<div class="form-group">
    {!! Form::label('patient_id', 'Asigne un paciente') !!}
    {!! Form::select('patient_id', $patients, null, ['class'=>'form-control']) !!}
    @error('patient_id')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>
<div>
    <a class="btn btn-secondary float-right" href="{{route('admin.patients.create')}}">Crear paciente</a>
</div>
<br>
<div class="form-group">
    {!! Form::label('status_id', 'Status de la cita:') !!}
    {!! Form::select('status_id', $statuses, true, ['class'=>'form-control']) !!}
    @error('status_id')
    <span class="text-danger">{{$message}}</span>
@enderror
</div>