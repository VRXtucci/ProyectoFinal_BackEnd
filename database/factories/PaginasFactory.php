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
        ];
    }
}
