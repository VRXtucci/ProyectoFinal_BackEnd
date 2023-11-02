<?php

namespace Database\Factories;

use App\Models\Personas;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonasFactory extends Factory
{
    protected $model = Personas::class;

    public function definition()
    {
        return [
            'primer_nombre' => $this->faker->firstName,
            'segundo_nombre' => $this->faker->firstName,
            'primer_apellido' => $this->faker->lastName,
            'segundo_apellido' => $this->faker->lastName,
            'fecha_creacion' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'), // Genera una fecha aleatoria en el último año.
            'fecha_modificacion' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'), // Genera una fecha aleatoria en el último año.
        ];
    }
}
