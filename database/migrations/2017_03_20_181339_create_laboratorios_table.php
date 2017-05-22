<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorios', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('centro_id');
            $table->unsignedInteger('Plaboratorio_id');
            $table->unsignedInteger('paciente_id');
            $table->timestamps();
            $table->foreign('centro_id')->references('id')->on('centros')->onDelete('cascade');
            $table->foreign('Plaboratorio_id')->references('id')->on('Personal_laboratorios')->onDelete('cascade');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratorios');
    }
}
