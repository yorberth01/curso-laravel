<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

     protected $table = "usuario";  //si quiero que el modelo maneje una tabla de la base de datos con diferente nombre al model
     
     
     /*protected $fillable = ['nombre', 'apellido'];*/ // se realiza este paso para evitar que los usuarios creen campos y quieran ingresar datos a la base de datos (sino se realiza este paso nose úede enviar los datos a la base de datos, en fillable se colocan los campos que deseas que se guarden y se ignoran los que no estan en esta lista)

     protected $guarded=[];//otra forma de ralizar la proteccion de datos cuando tienes muchos campos es de esta forma y dentro del array se colocan los campos que se desean proteger(esto se puede hacer cuando son demasiados campos, en guarded se colocan solo los campo que se quieren proteger, sino tienes datos que proteger se puede dejar vacio)
     
}
