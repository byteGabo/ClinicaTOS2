<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body{
        position: relative;
        width: 29.7cm;
        height: 42cm;
        margin: 0 auto;
        color: #001028;
        background: #ffffff;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        font-family: Arial;
    }
    h1 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: #5D6975;
        font-size: 2.4em;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
        margin: 0 0 20px 0;
    }
    table{
        width: 90%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 20px;
    }
    table tr:nth-child(2n-1) td {
        background: #F5F5F5;
    }
    table th,
    table td {
        text-align: center;
    }
    table th {
        padding: 5px 20px;
        color: #5D6975;
        border-bottom: 1px solid #C1CED9;
        white-space: nowrap;        
        font-weight: normal;
    }
    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
    
    </style>  
</head>
<body>
    <header class="clearfix">
        <div id="company" class="clearfix">
            <div><strong>Go</strong>Clinic</div>
            <div><a href="admin@goclinic.com">admin@goclinic.com</a></div>
        </div>

    </header>
  
        <h1>Listado de Doctores Activos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Fecha Nacimiento</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th>Especialidad</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                <tr>
                    <td>{{$doctor->name_doctor}}</td>
                    <td>{{$doctor->gender}}</td>
                    <td>{{$doctor->day_of_birth}}</td>
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->address}}</td>
                    <td>{{$doctor->phone}}</td>
                    @if ($doctor->is_active==1)
                    <td>Activo</td>
                    @else
                    <td>No Activo</td>
                    @endif
                    <td>{{$doctor->name_category}} </td>
                </tr>                
                @endforeach
            </tbody>
          </table>
   
</body>
</html>