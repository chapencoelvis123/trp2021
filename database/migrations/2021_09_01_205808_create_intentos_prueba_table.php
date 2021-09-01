<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntentosPruebaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intentos_prueba', function (Blueprint $table) {
            $table->id();
            $table->integer('id_evaluacion');
            $table->smallInteger('intento');
            $table->string('suma_calificaciones');
            $table->integer('tiempo_inicio');
            $table->integer('tiempo_finalizado');
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
        Schema::dropIfExists('intentos_prueba');
    }
}
