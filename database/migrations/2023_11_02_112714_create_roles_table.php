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
            $table->string('roles');
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamp('fecha_modificacion')->useCurrent();
            $table->string('usuario_creacion');
            $table->string('usuario_modificacion');
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
