<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasCuestionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_cuestionario', function (Blueprint $table) {
            $table->id();
            $table->string('curso');
            $table->string('nombre');
            $table->text('informe');
            $table->tinyInteger('publicar');
            $table->string('sello');
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
        Schema::dropIfExists('categorias_cuestionario');
    }
}
