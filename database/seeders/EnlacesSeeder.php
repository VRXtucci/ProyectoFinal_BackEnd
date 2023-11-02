<?php

namespace Database\Seeders;

use App\Models\Enlaces;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnlacesSeeder extends Seeder
{
    public function run()
    {
        Enlaces::factory(10)->create();
    }
}
