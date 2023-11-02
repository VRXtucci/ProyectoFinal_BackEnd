<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->timestamp('fecha_creacion')->default(now());
            $table->timestamp('fecha_modificacion')->default(now());
            $table->timestamps(); // Esto agrega las columnas created_at y updated_at como timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
