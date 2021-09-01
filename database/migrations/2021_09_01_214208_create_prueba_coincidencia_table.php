<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebaCoincidenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prueba_coincidencia', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pregunta');
            $table->text('pregunta_texto');
            $table->string('respuesta_texto');
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
        Schema::dropIfExists('prueba_coincidencia');
    }
}
