<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $Roles = new RolesSeeder();
        $Roles->run();

        $Personas = new PersonasSeeder();
        $Personas->run();

        $Paginas = new PaginasSeeder();
        $Paginas->run();

        $Usuarios = new UsuariosSeeder();
        $Usuarios->run();

        $Enlaces = new EnlacesSeeder();
        $Enlaces->run();

        $Bitacoras = new BitacoraSeeder();
        $Bitacoras->run();        

    }
}
