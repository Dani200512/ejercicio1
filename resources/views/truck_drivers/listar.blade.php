<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listar truck_driver</h1>

    @foreach ($truck_drivers as $truck_driver)
    <tr>
        <br>
        <td>{{$truck_driver->nombre}}</td>
        <br>
        <td>{{$truck_driver->poblacion}}</td>
        <br>
        <td>{{$truck_driver->telefono}}</td>
        <br>
        <td>{{$truck_driver->direccion}}</td>
        <br>
        <td>{{$truck_driver->salario}}</td>
        <br>
        <td><a href="{{route('truck_driver.show',$truck_driver->id)}}">Mostrar</a></td>
        <td><a href="{{route('truck_driver.edit',$truck_driver->id)}}">Editar</a></td>

        <td>
        <form action="{{route('truck_driver.destroy',$truck_driver->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>

@endforeach
</body>
</html>
