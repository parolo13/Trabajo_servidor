<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de ligas</title>
</head>
<body>
    <h1>Liga #{{$ligas->id}}</h1>
<h2>Nombre de la liga: {{$ligas->nombre}}</h2>
<h2>Pais de la liga: {{$ligas->pais}}</h2>
<h2>Division de la liga: {{$ligas->division}}</h2>
<h2>Continente de la liga: {{$ligas->continente}}</h2>
<h2>Numero de equipos de la liga: {{$ligas->numero_equipos}}</h2>
<a href="{{route('ligas')}}">Regresar al listado de ligas</a>
</body>
</html>