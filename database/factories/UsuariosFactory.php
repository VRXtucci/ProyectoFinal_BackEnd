<?php

namespace Database\Factories;

use App\Models\Personas;
use App\Models\Roles;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuariosFactory extends Factory
{
    protected $model = Usuarios::class;

    public function definition()
    {
        return [
            'usuario' => $this->faker->userName,
            'contrasena' => bcrypt($this->faker->password), // Encripta la contraseña
            'habilitado' => $this->faker->boolean,
            'fecha' => $this->faker->dateTimeThisYear, // Fecha aleatoria de este año
            'usuario_creacion' => $this->faker->dateTimeThisYear, // Fecha aleatoria de este año
            'usuario_modificacion' => $this->faker->dateTimeThisYear, // Fecha aleatoria de este año
            'id_persona' => Personas::factory(),
            'id_rol' => Roles::factory(),
        ];
    }
}
