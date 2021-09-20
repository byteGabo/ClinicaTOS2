<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un doctor">
            </div>
            <div class="col">
                <a class="btn btn-danger float-right" href="{{route('admin.doctors.pdf')}} ">Crear PDF</a>
            </div>
        </div>
    </div>

    @if ($doctors->count())
    <div class="card-body">
        <table class="table table-striped table-sm table-responsive">
            <thead>
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Fecha de nacimiento</th>
                     <th>Email</th>
                     <th>Dirección</th>
                     <th>Telefono</th>
                     <th>Estado</th>
                     <th>Especialidad</th>
                     <th colspan="2"></th>
                 </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                   <tr>
                       <td>{{$doctor->id}}</td>
                       <td>{{$doctor->name_doctor}}</td>
                       <td>{{$doctor->day_of_birth}}</td>
                       <td>{{$doctor->email}}</td>
                       <td>{{$doctor->address}}</td>
                       <td>{{$doctor->phone}}</td>
                       @if ($doctor->is_active==1)
                       <td class="bg-success">Activo</td>
                       @else
                       <td class="bg-danger">No Activo</td>
                       @endif
                       <td>{{$doctor->name_category}} </td>
                   
                  
                       <td width="10px">
                           <a class="btn btn-primary btn-sm" href="{{route('admin.doctors.edit', $doctor)}}">Editar</a>
                       </td>
                       <td width="10px">
                           <form action="{{route('admin.doctors.destroy', $doctor)}}" method="POST">
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
        {{$doctors->links()}}
    </div>

    @else
        <div class="card-body">
            <strong>No hay ningún registro con ese nombre...</strong>
        </div>
    @endif

   
</div>
