<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de equipos</title>
</head>
<body>
    <h1>Equipos #{{$equipo->id}}</h1>
    <h2>Nombre del equipo: {{$equipo->nombre}}</h2>
    <h2>Pais del equipo: {{$equipo->pais}}</h2>
    <h2>Division del equipo: {{$equipo->division}}</h2>
    <h2>Continente del equipo: {{$equipo->continente}}</h2>
    <h2>Numero de jugadores del equipo: {{$equipo->numero_jugadores}}</h2>
<a href="{{route('equipo')}}">Regresar al listado de equipos</a>
</body>
</html>