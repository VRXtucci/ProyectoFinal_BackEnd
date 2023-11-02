<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('contrasena');
            $table->boolean('habilitado')->default(true);
            $table->timestamp('fecha')->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamp('fecha_modificacion')->useCurrent();
            $table->string('usuario_creacion');
            $table->string('usuario_modificacion');
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_rol');

            $table->foreign('id_persona')->references('id')->on('personas');
            $table->foreign('id_rol')->references('id')->on('roles');
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
