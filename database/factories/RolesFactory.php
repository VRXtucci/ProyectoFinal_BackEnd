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
            'nombre' => $this->faker->name(), // Genera una palabra aleatoria como nombre de rol.
            'fecha_creacion' => now(),   // Utiliza la fecha y hora actual como fecha de creación.
            'fecha_modificacion' => now(), // Utiliza la fecha y hora actual como fecha de modificación.
        ];
    }
}
