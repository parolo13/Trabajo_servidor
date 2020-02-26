@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('users')}}">Ir al listado de usuarios</a> <br>
                    <a href="{{route('equipo')}}">Ir al listado de equipos</a> <br>
                    <a href="{{route('ligas')}}">Ir al listado de ligas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
