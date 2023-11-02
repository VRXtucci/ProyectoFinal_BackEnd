<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacorasTable extends Migration
{
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->text('bitacora');
            $table->date('fecha');
            $table->time('hora');
            $table->string('ip', 15);
            $table->string('so');
            $table->string('navegador');
            $table->unsignedBigInteger('id_usuario');

            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bitacoras');
    }
}
