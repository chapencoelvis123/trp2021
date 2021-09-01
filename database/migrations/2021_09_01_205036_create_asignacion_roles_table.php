<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacion_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->unsignedBigInteger('rol_id')->nullable();
            $table->unsignedBigInteger('contexto_id')->nullable();

            $table->foreign('usuario_id')->references('id')
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
        Schema::dropIfExists('asignacion_roles');
    }
}
