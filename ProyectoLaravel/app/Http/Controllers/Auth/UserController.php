<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use Session;

use Auth;

use App\User;
use App\Profession;
use App\Equipo;
use App\Liga;


class UserController extends Controller
{	
    public function index(){
        $users=User::all();

        return view('users',[
            'users' =>$users,
            'tittle'=>'Usuarios dinamico'
        ]);
    }

    public function show(User $user)
    {
        return view('detalles', compact('user'));
    }
    
    public function create(){
        $profesions=Profession::all();
        return view('create',compact('profesions'));  
    }

    public function store(){

        $data = request()->validate([
            'name'=>'required',
            'email'=>['required','email','unique:users,email'],
            'password' => 'required| min:6',
            'profession_id'=> 'required'
        ],[
            'name.required'=>'El campo nombre es obligatorio',
            'email.required'=>'El campo email es obligatorio',
            'email.email'=>'El campo email no es válido',
            'email.unique'=>'Este email ya está en uso',
            'password.required'=>'El campo contraseña es obligatorio',
            'password.min'=>'El campo contraseña debe de tener al menos 6 caracteres',
            'profession_id.required'=>'El campo profesion no puede estar vacio'
        ]);
        User::create([
            'name' => $data['name'],
            'email'=> $data['email'],
            'password'=> bcrypt($data['password']),
            'profession_id'=>$data['profession_id']
        ]);

        return redirect('usuarios');
    }

    public function edit(User $user){
        $profesions=Profession::all();

        return view('editar',compact('user','profesions'));
    }

    public function update(User $user){
        $data = request()->validate([
            'name'=>'required',
            'email'=>['required','email','unique:users,email,'.$user->id],
            'password' => '',
            'profession_id' =>'required'
        ],[
            'name.required'=>'El campo nombre es obligatorio',
            'email.required'=>'El campo email es obligatorio',
            'email.email'=>'El campo email no es válido',
            'email.unique'=>'Este email ya está en uso',
            'profession_id.required'=>'El campo profesion no puede estar vacio'
        ]);
        if($data['password'] != null){
            $data['password']= bcrypt($data['password']);
        }else{
            unset($data['password']);
        }
        
        $user->update($data);


        return redirect("usuarios/{$user->id}");
    }

    public function destroy(User $user){
        $user->delete();

        return redirect('usuarios');

    }







    public function index2(){
        $equipos=Equipo::all();

        return view('equipos',[
            'equipos' =>$equipos,
            'tittle'=>'Equipos dinamico'
        ]);
    }

    public function show2(Equipo $equipo)
    {
        return view('equipos.detalles', compact('equipo'));
    }
    
    public function create2(){
        return view('equipos.create');  
    }

    public function store2(){

        $data = request()->validate([
            'nombre'=>'required',
            'pais'=> 'required',
            'division'=>['required','numeric'],
            'continente'=> 'required',
            'numero_jugadores'=>['required','numeric']
        ],[
            'nombre.required'=>'El campo nombre es obligatorio',
            'pais.required'=>'El campo pais es obligatorio',
            'division.required'=>'El campo division es obligatorio',
            'division.numeric'=>'La division solo se pueden poner numeros',
            'continente.required'=>'El campo continente es obligatorio',
            'numero_jugadores.required'=>'El campo numero de jugadores es obligatorio',
            'numero_jugadores.numeric'=>'El  numero de jugadores solo se pueden poner numeros',
            
        ]);
        Equipo::create([
            'nombre' => $data['nombre'],
            'pais'=> $data['pais'],
            'division' => $data['division'],
            'continente'=> $data['continente'],
            'numero_jugadores' => $data['numero_jugadores'],
        ]);

        return redirect('equipo');
    }

    public function edit2(Equipo $equipo){
        return view('equipos.editar',compact('equipo'));
    }

    public function update2(Equipo $equipo){
        $data = request()->validate([
            'nombre'=>'required',
            'pais'=> 'required',
            'division'=>['required','numeric'],
            'continente'=> 'required',
            'numero_jugadores'=>['required','numeric']
        ],[
            'nombre.required'=>'El campo nombre es obligatorio',
            'pais.required'=>'El campo pais es obligatorio',
            'division.required'=>'El campo division es obligatorio',
            'division.numeric'=>'La division solo se pueden poner numeros',
            'continente.required'=>'El campo continente es obligatorio',
            'numero_jugadores.required'=>'El campo numero de jugadores es obligatorio',
            'numero_jugadores.numeric'=>'El  numero de jugadores solo se pueden poner numeros',
            
        ]);
        
        $equipo->update($data);


        return redirect("equipo/{$equipo->id}");
    }

    public function destroy2(Equipo $equipo){
        $equipo->delete();

        return redirect('equipo');

    }


















    public function index3(){
        $ligas=Liga::all();

        return view('liga',[
            'ligas' =>$ligas,
            'tittle'=>'Ligas dinamico'
        ]);
    }

    public function show3(Liga $ligas)
    {
        return view('ligas.detalles', compact('ligas'));
    }
    
    public function create3(){
        return view('ligas.create');  
    }

    public function store3(){

        $data = request()->validate([
            'nombre'=>'required',
            'pais'=> 'required',
            'division'=>['required','numeric'],
            'continente'=> 'required',
            'numero_equipos'=>['required','numeric']
        ],[
            'nombre.required'=>'El campo nombre es obligatorio',
            'pais.required'=>'El campo pais es obligatorio',
            'division.required'=>'El campo division es obligatorio',
            'division.numeric'=>'La division solo se pueden poner numeros',
            'continente.required'=>'El campo continente es obligatorio',
            'numero_equipos.required'=>'El campo numero de equipos es obligatorio',
            'numero_equipos.numeric'=>'El  numero de equipos solo se pueden poner numeros',
            
        ]);
        Liga::create([
            'nombre' => $data['nombre'],
            'pais'=> $data['pais'],
            'division' => $data['division'],
            'continente'=> $data['continente'],
            'numero_equipos' => $data['numero_equipos'],
        ]);

        return redirect('ligas');
    }

    public function edit3(Liga $ligas){
        return view('ligas.editar',compact('ligas'));
    }

    public function update3(Liga $ligas){
        $data = request()->validate([
            'nombre'=>'required',
            'pais'=> 'required',
            'division'=>['required','numeric'],
            'continente'=> 'required',
            'numero_equipos'=>['required','numeric']
        ],[
            'nombre.required'=>'El campo nombre es obligatorio',
            'pais.required'=>'El campo pais es obligatorio',
            'division.required'=>'El campo division es obligatorio',
            'division.numeric'=>'La division solo se pueden poner numeros',
            'continente.required'=>'El campo continente es obligatorio',
            'numero_equipos.required'=>'El campo numero de equipos es obligatorio',
            'numero_equipos.numeric'=>'El  numero de equipos solo se pueden poner numeros',
            
        ]);
        
        $ligas->update($data);


        return redirect("ligas/{$ligas->id}");
    }

    public function destroy3(Liga $ligas){
        $ligas->delete();

        return redirect('ligas');

    }
}
