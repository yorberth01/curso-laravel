<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
     protected $model = Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      $nombre = $this->faker->name();
        return [
             'nombre'=>$nombre,
            'apellido'=>$this->faker->lastName(),
              'slug'=> Str::slug($nombre, '-')
        ];
    }
}
