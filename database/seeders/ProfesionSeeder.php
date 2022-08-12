<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan make:seeder ProfesionSeeder    para crear un nuevo seeder

        DB::statement('SET FOREIGN_KEY_CHECKS = 0; '); //para desactivar la deteccion de claves foraneas
        DB::table('profesiones')->truncate();//para vaciar la tabla antes de insertar nuevos registros
           DB::statement('SET FOREIGN_KEY_CHECKS = 1; '); //para activar la deteccion de claves foraneas

        DB::table('profesiones')->insert([
            'titulo'=>"doctor",
        ]);
        DB::table('profesiones')->insert([
            'titulo'=>"profesor",
        ]);
        DB::table('profesiones')->insert([
            'titulo'=>"policia",
        ]);


        DB::insert('INSERT INTO usuario (nombre) VALUES ("jose")'); //de esta forma se pueden hacer consultas sql
        //DB::insert('INSERT INTO usuario (nombre) VALUES (?)', ['jose']);
        //DB::insert('INSERT INTO usuario (nombre) VALUES (:nombre)', ['nombre' => 'jose']);
    }
}
