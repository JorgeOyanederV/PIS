<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->string('descripcion');
            $table->string('medio');
            $table->date('fecha');
            $table->string('rut_estudiante');
            $table->string('rut_profesor')->nullable();
            $table->string('codigo_asignatura')->nullable();
            $table->timestamps(); 

            $table->foreign('codigo_asignatura')->references('codigo')->on('asignaturas');
            $table->foreign('rut_estudiante')->references('rut')->on('estudiantes');
            $table->foreign('rut_profesor')->references('rut')->on('profesores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
}
