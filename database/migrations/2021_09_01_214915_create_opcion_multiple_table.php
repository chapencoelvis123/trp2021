<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcionMultipleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcion_multiple', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pregunta');
            $table->tinyInteger('diseño');
            $table->string('respuesta');
            $table->tinyInteger('estado');
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
        Schema::dropIfExists('opcion_multiple');
    }
}
