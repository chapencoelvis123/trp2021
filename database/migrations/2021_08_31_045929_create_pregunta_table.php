<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->id();
            $table->integer('id_categoria');
            $table->string('nombre');
            $table->text('pregunta');
            $table->tinyInteger('formato_pregunta');
            $table->string('imagen');
            $table->integer('calificaciones_predeterminadas');
            $table->integer('sello');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta');
    }
}
