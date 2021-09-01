<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestaNumericaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuesta_numerica', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pregunta');
            $table->integer('respuesta');
            $table->string('minimo');
            $table->string('maximo');
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
        Schema::dropIfExists('respuesta_numerica');
    }
}
