<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuario;

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

      public function store(StoreUsuario $request){
        
        /*$nuevo_usuario = new Usuario();
        $nuevo_usuario->nombre=$request->nombre;
        $nuevo_usuario->apellido=$request->apellido;

        //return $nuevo_usuario;
        $nuevo_usuario->save();*/

        //asignacion masiva, creando este objeto no es necesario usar el metodo ->save(), ya que lo guarda automaticamente
        
        //hay 2 formas de hacer asignacion masiva en la primera creamos el array de forma manual y en la segunda solo usamos el metodo all() y con esto nos crea un array con las campo de la base de datos

        //metodo 1
        /*$nuevo_usuario = Usuario::created([
         'nombre' => $request->nombre,
         'apellido' => $request->apellido]);*/

         //metodo 2
         $nuevo_usuario = Usuario::create($request->all());


      return redirect()->route('usuarios.show', $nuevo_usuario);
      }

    //ASI ES UNA FORMA DE REALIZAR VALIDACION SIN USAR FORM REQUEST
    /*public function store(Request $request){

      $request->validate([//se coloca esta linea de codigo para poder validar el formulario de nuevo usuario
        'nombre' => 'required|max:10',//asi se coloca si se quiere poner mas de una validacion
        'apellido' => 'required|min:3'
      ]);

      // return $request->all(); //con este metodo puedo ver todo el objeto que se recive desde el formulario
      $nuevo_usuario = new Usuario();

      $nuevo_usuario->nombre=$request->nombre;
      $nuevo_usuario->apellido=$request->apellido;

      //return $nuevo_usuario;
      $nuevo_usuario->save();
      return redirect()->route('usuarios.show', $nuevo_usuario->id);
    }*/

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
      
      $request->validate([//se coloca esta linea de codigo para poder validar el formulario de nuevo usuario
        'nombre' => 'required',
        'apellido' => 'required'
      ]);


      //return $id;
      //return $request;
      /*$id->nombre=$request->nombre;
      $id->apellido=$request->apellido;
      $id->save();*/

      //asignacion masiva
      $id->update($request->all());//con este codigo se puede actualizar con el metodo update con asignacion masiva
      return redirect()->route('usuarios.show', $id->id);
      
    }

    public function destroy(Usuario $id){
      $id->delete();
      return redirect()->route('usuarios.index');
    }
}
