<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuariosFactory extends Factory
{
    protected $model = Usuarios::class;

    public function definition()
    {
        return [
            'contrasena' => bcrypt('password'), // Puedes definir una contraseña de ejemplo, asegúrate de cifrarla con bcrypt.
            'habilitado' => $this->faker->boolean(),
            'fecha' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
            'id_persona' => $this->faker->numberBetween(1, 10), // Ajusta el rango según tu necesidad.
            'id_rol' => $this->faker->numberBetween(1, 5), // Ajusta el rango según tu necesidad.
        ];
    }
}
