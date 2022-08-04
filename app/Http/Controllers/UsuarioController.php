<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
      return "Pagina de Usuarios";
    }

    public function create(){
      return 'Crear nuevo usuario';
    }

    public function show($id){
      return "detalles del usuario: {$id}";
    }
}
