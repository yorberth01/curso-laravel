<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\HomeController; //instalando la extencion php intelephan y poniendo use + nombre del controlador se autocompleta o simplemente escribiendo el controlador en la ruta

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);//php artisan make:controller ExampleComtroller/ como solo se usa una sola llama para este controlador se usa el metodo invoke y no se pone el nombre de la clase

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');//se le coloca el metodo mane para despues hacer el llamado con las url;

Route::get('/usuarios/{id}', [UsuarioController::class, 'show'])->where('id','[0-9]+')->name('usuarios.show'); //condicion para validar que el valor del parametro id sea solo numerico y salte a la siguiente ruta


Route::get('/usuarios/nuevo', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');//Esta ruta se encanga de recivir la informacion enviada del formulario de nuevo usuario

Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'edit'])->where('id','[0-9]+')->name('usuarios.edit');//esta ruta recive la informacion por url para poder editar la informacion de la base de datos

Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');//el metodo put se utiliza cuando se va a actualizar un registro

Route::delete('usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.eliminar');//metodo delete se usa para eliminar registro








/*
AGRUPAR RUTAS CON UN MISMO CONTROLADOR
Route::controller(UsuarioController::class)->group(function(){
  Route::get('/usuarios', 'index');
  Route::get('/usuarios/{id}','show')->where('id','[0-9]+');
  Route::get('/usuarios/nuevo', 'create');
});
*/

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname=null){// el signo ? hace que el valor nickname sea opcional y se le da un valor null al parametro

  if ($nickname) {
    return "Bienvenido {$name}, tu apodo es: {$nickname}";
  }else{
    return "Bienvenido {$name}";
  }
});

