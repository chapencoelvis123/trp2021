<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesPreguntasCuestionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones_preguntas_cuestionario', function (Blueprint $table) {
            $table->id();
            $table->integer('id_evaluacion');
            $table->integer('id_pregunta');
            $table->smallInteger('calificacion');

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
        Schema::dropIfExists('calificaciones_preguntas_cuestionario');
    }
}
