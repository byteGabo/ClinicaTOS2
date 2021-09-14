<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="busqueda">
    </div>

    @if ($appointments->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Sintomas</th>
                    <th>Enfermedades</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                <tr>
                    <td>{{$appointment->id}}</td>
                    <td>{{$appointment->title}}</td>
                    <td>{{$appointment->date_at}}</td>
                    <td>{{$appointment->time_at}}</td>
                    <td>{{$appointment->syntoms}}</td>
                    <td>{{$appointment->sick}}</td>
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
