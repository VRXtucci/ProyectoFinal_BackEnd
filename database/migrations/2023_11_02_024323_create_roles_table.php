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
            $table->string('nombre')->unique(); // Añade restricción unique
            $table->bigInteger('fecha_creacion')->unique(); // Añade restricción unique
            $table->bigInteger('fecha_modificacion')->unique(); // Añade restricción unique
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
