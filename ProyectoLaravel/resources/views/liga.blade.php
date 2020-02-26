<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    



    <title>Lista de usuarios</title>
</head>
<body>
  <a href="{{ route('home')}}" class="btn btn-primary ">Regresar al home</a>
    <div class="d-flex justify-content-between mb-3">

        <h1 class="pb-1">{{$tittle}}</h1>
        @if (\Auth::user()->is_admin == true)
        <p>
        <a href="{{ route('ligas.create')}}" class="btn btn-primary ">Nueva Liga</a>
        </p>
        @endif
    </div>


   
@if ($ligas->isNotEmpty())
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Pais</th>
            <th scope="col">Division</th>
            <th scope="col">Continente</th>
            <th scope="col">Numero de equipos</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($ligas as $liga)
                
          <tr>
          <th scope="row">{{$liga->id}}</th>
            <td>{{$liga->nombre}}</td>
            <td>{{$liga->pais}}</td>
            <td>{{$liga->division}}</td>
            <td>{{$liga->continente}}</td>
            <td>{{$liga->numero_equipos}}</td>
            <td>
             
              
                <form action="{{route('destroy3',$liga)}} " method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{route('ligas.show',['ligas'=>$liga])}}" class="btn btn-link"><i class="fas fa-eye"></i></span></a>
                    @if (\Auth::user()->is_admin === true)
                    <a href="{{route('edit3',['ligas'=>$liga])}}" class="btn btn-link"><i class="fas fa-pencil-alt"></i></span></a>
                    <button type="submit" class="btn btn-link"><i class="fas fa-trash"></i></button>
                    @endif
    </form>
    
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
      @else
      <p>No hay ligas registradas.</p>
      @endif
</body>
</html>