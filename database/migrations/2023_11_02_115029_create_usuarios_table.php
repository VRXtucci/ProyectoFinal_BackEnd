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
            $table->string('usuario');
            $table->string('contrasena');
            $table->boolean('habilitado');
            $table->timestamp('fecha')->useCurrent();
            $table->timestamp('usuario_creacion')->useCurrent(); // Campo de fecha de creación
            $table->timestamp('usuario_modificacion')->useCurrent(); // Campo de fecha de modificación
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_rol');
            
            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('id_rol')->references('id')->on('roles');
            $table->timestamps(0);

        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
