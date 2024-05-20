<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Camionero</title>
</head>
<body>
    <form action="{{route('truck_driver.update', $truck_driver)}}"  method="POST" >

        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input name="nombre" type="text" value="{{ old('nombre', $truck_driver->nombre) }}">
            <br>
        </label>
        <br>
        <label>
            Poblacion:
            <br>
            <input name="poblacion" type="text" value="{{ old('poblacion', $truck_driver->poblacion) }}">
            <br>
        </label>
        <br>
        <label>
            Telefono:
            <br>
            <input name="telefono" type="number" value="{{ old('telefono', $truck_driver->telefono) }}">
            <br>
        </label>
        <br>
        <label>
            Dirección:
            <br>
            <input name="direccion" type="text" value="{{ old(' dirección', $truck_driver->dirección) }}">
            <br>
        </label>
        <br>

        <label>
            Salario:
            <br>
            <input name="salario" type="number" value="{{ old(' salario', $truck_driver->salario) }}">
            <br>
        </label>
        <br>

        <button  type="submit">Actualizar Camionero</button>
</body>
</html>
