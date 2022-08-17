<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$curso=new Curso;
        $curso->nombre="prueba con seeder";
        $curso->apellido="laravel-seeder";
        $curso->save();*/

        Curso::factory(50)->create(); //cuando se realiza un factory esta linea de codigo se puede colocar directamente en el DatabaseSeeder  sin la nesecidad de crear un nuevo seeder para cada factory
    }
}
