<?php

namespace Database\Factories;

use App\Models\Roles;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolesFactory extends Factory
{
    protected $model = Roles::class;

    public function definition()
    {
        return [
            'roles' => $this->faker->word, // Genera una palabra aleatoria como nombre de rol.
            'fecha_creacion' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'), // Genera una fecha aleatoria en el último año.
            'fecha_modificacion' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'), // Genera una fecha aleatoria en el último año.
            'usuario_creacion' => $this->faker->name, // Genera un nombre de usuario aleatorio como usuario de creación.
            'usuario_modificacion' => $this->faker->name, // Genera un nombre de usuario aleatorio como usuario de modificación.
        ];
    }
    
}
