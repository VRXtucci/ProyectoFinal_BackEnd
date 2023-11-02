<?php

namespace Database\Factories;

use App\Models\Enlaces;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnlacesFactory extends Factory
{
    protected $model = Enlaces::class;

    public function definition()
    {
        return [
            'descripcion' => $this->faker->sentence,
            'fecha_creacion' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
            'fecha_modificacion' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
            'usuario_creacion' => $this->faker->userName,
            'usuario_modificacion' => $this->faker->userName,
            'id_pagina' => $this->faker->numberBetween(1, 10), // Ajusta el rango según tus necesidades.
            'id_rol' => $this->faker->numberBetween(1, 5), // Ajusta el rango según tus necesidades.
        ];
    }
}
