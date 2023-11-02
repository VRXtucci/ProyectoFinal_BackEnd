<?php

namespace Database\Factories;

use App\Models\Bitacora;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class BitacoraFactory extends Factory
{
    protected $model = Bitacora::class;

    public function definition()
    {
        return [
            'bitacora' => $this->faker->text,
            'fecha' => $this->faker->date,
            'hora' => $this->faker->time,
            'ip' => $this->faker->ipv4,
            'so' => $this->faker->word,
            'navegador' => $this->faker->word,
            'id_usuario' => Usuarios::factory(),
        ];
    }
}
