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
        ];
    }
    
}
