<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    // use App\Models\Curso  se coloca esto en la terminal tinker para indicar que quiero hacer uso del modelo especificado,  para entrar en la terminal tinker se debe colocar php artisan tinker
/*
use App\Models\Curso;
$curso=new Curso;
$curso->nombre="prueba tinker";
$curso->apellido="laravel";
$curso->save(); //con esto guardo el registro en la base de datos
*/


    use HasFactory;

    //protected $table = "users";  //si quiero que el modelo maneje una tabla de la base de datos con diferente nombre al model
}
