<div class="form-group">
    {!! Form::label('name_doctor', 'Nombre:') !!}
    {!! Form::text('name_doctor', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del doctor']) !!}
    @error('name_doctor')
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