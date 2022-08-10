<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ //el metodo invoke se usa cuando queremos que el controlador administre una sola ruta
      return view('home');
    }
}
