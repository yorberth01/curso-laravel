<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

        //$usuarios = Usuario::all();
        $usuarios = Usuario::orderBy('id', 'desc')->paginate();

        //$usuariosArray=['jose', 'pedro', 'luis', 'maria'];

        // dd(compact('usuariosArray')); //con esta forma podemos ver el resultado del compact como si fuera un var_dump die;

      //return view('usuarios.index', compact('usuariosArray'));//Se pueda hacer esto para pasar datos a la vista

        return view('usuarios.index', compact('usuarios'));
    }

    public function create(){
      return view('usuarios.create');
    }

    public function store(Request $request){
      // return $request->all(); //con este metodo puedo ver todo el objeto que se recive desde el formulario
      $nuevo_usuario = new Usuario();

      $nuevo_usuario->nombre=$request->nombre;
      $nuevo_usuario->apellido=$request->apellido;

      //return $nuevo_usuario;
      $nuevo_usuario->save();
      return redirect()->route('usuarios.show', $nuevo_usuario->id);
    }

    public function show($id){

        $id_usuario=Usuario::find($id);
      return view('usuarios.show', compact('id_usuario'));
    }

    public function edit(Usuario $id){

      //  $usuario_editar = Usuario::find($id);
      //  return $usuario_editar;

      //return $id;

      return view('usuarios.editar', compact('id'));
    }

    public function update(Request $request, Usuario $id){
      //return $id;
      //return $request;
      $id->nombre=$request->nombre;
      $id->apellido=$request->apellido;
      $id->save();
      return redirect()->route('usuarios.show', $id->id);
      
    }
}
