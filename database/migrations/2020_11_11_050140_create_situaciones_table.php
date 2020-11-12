<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSituacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situaciones', function (Blueprint $table) {
            $table->string('descripcion');
            $table->string('tipo');
            $table->date('fecha');
            $table->string('rut_estudiante');
            $table->integer('NRC_asignatura')->nullable();
            $table->timestamps(); 

            $table->foreign('NRC_asignatura')->references('NRC')->on('asignaturas');
            $table->foreign('rut_estudiante')->references('rut')->on('estudiantes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('situaciones');
    }
}
