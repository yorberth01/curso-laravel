<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //$profesion_select = DB::select('SELECT id FROM profesiones WHERE titulo=?',['doctor']);  // de esta forma se hace una consulata con sql

       $profesion_select= DB::table('usuario')->select('id')->take(1)->get();//take para optener 1 solo resultado tambien se puede usar el metodo ->first para mostrar y ejecutar 1 sola consulta sin usar el metodo get


         DB::table('usuario')->insert([
            'nombre'=>"yorberth",
            'apellido'=>"quiroz",
            'profesiones_id'=>$profesion_select->first()->id,
        ]);

        //ELOQUENT MODEL

         Usuario::create([
            'nombre'=>"eloquent",
            'apellido'=>"models",
            'profesiones_id'=>$profesion_select->first()->id,
        ]);
    }
}
