<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaMultipleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_multiple', function (Blueprint $table) {
            $table->id();
            $table->integer('pregunta');
            $table->string('respuesta');
            $table->string('clase_posicion');
            $table->string('tipo_respuesta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuesta_multiple');
    }
}
