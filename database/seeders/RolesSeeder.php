<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{

    public function run()
    {
        Roles::factory(10)->create();
    }
}
