<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //php artisan db:seed  para correr el seeder


       $this->call(ProfesionSeeder::class);//codigo para llamar al seeder
       $this->call(UsuarioSeeder::class);//codigo para llamar al seeder
       $this->call(CursoSeeder::class);//codigo para llamar al seeder
       Usuario::factory(50)->create();
    }
}
