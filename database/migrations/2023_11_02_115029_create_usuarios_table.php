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
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_rol');

            $table->foreign('id_persona')
                ->references('id')
                ->on('personas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->foreign('id_rol')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
