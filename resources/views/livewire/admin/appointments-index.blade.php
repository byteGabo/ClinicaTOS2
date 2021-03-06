<div class="card">

    <div class="card-header">
        <h3>Busquedas:</h3>
       <div class="row">
        <div class="col">
            <input wire:model="search4" class="form-control" placeholder="busqueda por DPI">
           </div>
           <div class="col">
            <input wire:model="search" class="form-control" placeholder="busqueda por nombre">
           </div>
           <div class="col">
            <input wire:model="search2" class="form-control" placeholder="busqueda por status">
           </div>
           <div class="col">
            <input wire:model="search3" class="form-control" placeholder="busqueda por Doctor">
           </div>
       </div>
        
    </div>

    @if ($appointments->count())
    <div class="card-body">
        <table class="table table-striped table-sm table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Sintomas</th>
                    <th>Enfermedades</th>
                    <th>Doctor</th>
                    <th>Status</th>
                    <th>Cita creada por</th>
                  
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                <tr>
                    <td>{{$appointment->id}}</td>
                    <td>{{$appointment->name_patient}}</td>
                    <td>{{$appointment->date_at}}</td>
                    <td>{{$appointment->time_at}}</td>
                    <td>{{$appointment->symtoms}}</td>
                    <td>{{$appointment->sick}}</td>
                    <td>{{$appointment->name_doctor}} </td>
                    <td class="bg-success"><strong>{{$appointment->name_status}}</strong></td>
                    <td>{{$appointment->name}}</td>
                  
                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.appointments.edit', $appointment)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.appointments.destroy', $appointment)}}" method="POST">
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
        {{$appointment->links}}
    </div>

    @else 
    <div class="card-body">
        <strong>No hay ningun registro...</strong>
    </div>
        
    @endif

   
    
</div>
