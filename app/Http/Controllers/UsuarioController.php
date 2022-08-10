<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

        $usuariosArray=['jose', 'pedro', 'luis', 'maria'];

        // dd(compact('usuariosArray')); //con esta forma podemos ver el resultado del compact como si fuera un var_dump die;

      return view('usuarios.index', compact('usuariosArray'));//Se pueda hacer esto para pasar datos a la vista
    }

    public function create(){
      return view('usuarios.create');
    }

    public function show($id){
      return view('usuarios.show', compact('id'));
    }
}
