<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    use HasFactory;

        protected $table = "profesiones";  //si quiero que el modelo maneje una tabla de la base de datos con diferente nombre al model
}
