<?php

namespace Database\Seeders;

use App\Models\Paginas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaginasSeeder extends Seeder
{
    public function run()
    {
        Paginas::factory(10)->create();
    }
}
