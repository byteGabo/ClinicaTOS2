<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un paciente">
    </div>

    @if ($patients->count())
    <div class="card-body">
        <table class="table table-striped table-sm table-responsive">
            <thead>
                 <tr>
                     <th>ID</th>
                     <th>Nombre</th>
                     <th>DPI</th>
                     <th>Genero</th>
                     <th>Fecha de nacimiento</th>
                     <th>Email</th>
                     <th>Dirección</th>
                     <th>Telefono</th>
                     <th>Estado</th>
                     <th colspan="2"></th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                   <tr>
                       <td>{{$patient->id}}</td>
                       <td>{{$patient->name}}</td>
                       <td>{{$patient->dpi}}</td>
                       <td>{{$patient->gender}}</td>
                       <td>{{$patient->day_of_birth}}</td>
                       <td>{{$patient->email}}</td>
                       <td>{{$patient->address}}</td>
                       <td>{{$patient->phone}}</td>  
                       @if ($patient->is_active==1)
                       <td class="bg-success">Activo</td>
                       @else
                       <td class="bg-danger">No Activo</td>
                       @endif                                      
                       <td width="10px">
                           <a class="btn btn-primary btn-sm" href="{{route('admin.doctors.edit', $patient)}}">Editar</a>
                       </td>
                       <td width="10px">
                           <form action="{{route('admin.doctors.destroy', $patient)}}" method="POST">
                          @csrf
                          @method('DELETE')
                             <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                         </form>
                       </td>
                   </tr>
                    
                @endforeach
 
            </tbody>
 
        </table>
    </div>
    <div class="card-footer">
        {{$patients->links()}}
    </div>

    @else
        <div class="card-body">
            <strong>No hay ningún registro con ese nombre...</strong>
        </div>
    @endif

   
</div>