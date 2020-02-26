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
<form method="POST" action="{{url('usuarios')}}">
{!! csrf_field() !!}
<label for="name">Nombre:</label>
<input type="text" name="name" id="name" placeholder="Pablo Rodriguez" value="{{ old('name')}}">
<br>
<label for="email">Email</label>
<input type="email" name="email" id="email" placeholder="ejemplo@ejemplo.com" value="{{ old('email')}}">
<br>
<label for="password">Contraseña</label>
<input type="password" name="password" id="password" placeholder="Mayor a 6 caracteres">
<br>
<label for="profession_id">Profesion</label>
<select name="profession_id" id="profession_id">
@foreach ($profesions as $profesion)
<option value="{{ $profesion->id }}">{{ $profesion->title }}</option>
@endforeach
</select>
<button type="submit">Crear usuario</button>
    </form>
<a href="{{route('users')}}">Regresar al listado de usuarios</a>
</body>
</html>