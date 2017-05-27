<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('medico_id');
            $table->unsignedInteger('cita_id');
            $table->boolean('validado');
            $table->unsignedInteger('paciente_id');
            $table->unsignedInteger('lab_id');
            $table->string('resultado');
            $table->timestamps();
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->foreign('lab_id')->references('id')->on('laboratorios')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informes');
    }
}
