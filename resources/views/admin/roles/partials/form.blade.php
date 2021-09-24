<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control','placeholder' => 'Ingrese un nombre para el rol']) !!}
    @error('name')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror
</div>

<h2 class="h3">Listado de Permisos</h2>

@foreach ($permissions as $permission)

<div>
    <label>
        {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr1'])!!}
        {{$permission->description}}
    </label>
</div>
    
@endforeach