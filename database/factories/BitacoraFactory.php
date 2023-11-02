<?php

namespace Database\Factories;

use App\Models\Bitacora;
use Illuminate\Database\Eloquent\Factories\Factory;

class BitacoraFactory extends Factory
{
    protected $model = Bitacora::class;

    public function definition()
    {
        return [
            'bitacora' => $this->faker->sentence,
            'fecha' => $this->faker->date,
            'hora' => $this->faker->time,
            'ip' => $this->faker->ipv4,
            'SO' => $this->faker->userAgent,
            'navegador' => $this->faker->userAgent,
            'id_usuario' => $this->faker->numberBetween(1, 10), // Ajusta el rango según tus necesidades.
        ];
    }
}
