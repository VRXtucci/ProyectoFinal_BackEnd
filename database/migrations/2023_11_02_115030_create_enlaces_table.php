<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnlacesTable extends Migration
{
    public function up()
    {
        Schema::create('enlaces', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger('id_pagina');
            $table->unsignedBigInteger('id_rol');

            $table->foreign('id_pagina')
                ->references('id')
                ->on('paginas')
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
        Schema::dropIfExists('enlaces');
    }
}
