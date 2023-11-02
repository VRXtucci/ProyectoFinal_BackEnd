<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('estado');
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();
            $table->string('usuario_creacion');
            $table->string('usuario_modificacion');
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('paginas');
    }
}
