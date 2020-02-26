<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Crear usuario</title>
</head>
<body>
    @if($errors->any())
    <div class="alert alert-danger">
        <h5>Por favor corrige los siguientes errores</h5>

        <ul>
            @foreach ($errors->all() as $error)
        <li>{{$error}}</li>   
            @endforeach
        </ul>
</div>
    @endif
<form method="POST" action="{{url('equipo')}}">
{!! csrf_field() !!}
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" id="nombre" placeholder="Real Betis" value="{{ old('nombre')}}">
<br>
<label for="pais">Pais:</label>
<input type="pais" name="pais" id="pais" placeholder="España" value="{{ old('pais')}}">
<br>
<label for="division">Division:</label>
<input type="division" name="division" id="division" placeholder="1" value="{{ old('division')}}">
<br>
<label for="continente">Continente:</label>
<input type="continente" name="continente" id="continente" placeholder="Europa" value="{{ old('continente')}}">
<br>
<label for="numero_jugadores">Numero de jugadores:</label>
<input type="numero_jugadores" name="numero_jugadores" id="numero_jugadores" placeholder="20" value="{{ old('numero_jugadores')}}">
<br>
<button type="submit">Crear Equipo</button>
    </form>
<a href="{{route('equipo')}}">Regresar al listado de equipos</a>
</body>
</html>