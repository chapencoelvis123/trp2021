<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesCuestionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones_cuestionario', function (Blueprint $table) {
            $table->id();
            $table->integer('id_evaluacion');
            $table->integer('id_usuario');
            $table->string('calificaciones');
            $table->integer('modificar_tiempo');
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
        Schema::dropIfExists('calificaciones_cuestionario');
    }
}
