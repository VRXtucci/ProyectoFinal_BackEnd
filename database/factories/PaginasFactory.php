<?php

namespace Database\Factories;

use App\Models\Paginas;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaginasFactory extends Factory
{
    protected $model = Paginas::class;

    public function definition()
    {
        return [
            'url' => $this->faker->url,
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
            'fecha_creacion' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
            'fecha_modificacion' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
            'usuario_creacion' => $this->faker->userName,
            'usuario_modificacion' => $this->faker->userName,
        ];
    }
}
