<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

        //$usuarios = Usuario::all();
        $usuarios = Usuario::paginate();

        //$usuariosArray=['jose', 'pedro', 'luis', 'maria'];

        // dd(compact('usuariosArray')); //con esta forma podemos ver el resultado del compact como si fuera un var_dump die;

      //return view('usuarios.index', compact('usuariosArray'));//Se pueda hacer esto para pasar datos a la vista

        return view('usuarios.index', compact('usuarios'));
    }

    public function create(){
      return view('usuarios.create');
    }

    public function show($id){

        $id_usuario=Usuario::find($id);
      return view('usuarios.show', compact('id_usuario'));
    }
}
