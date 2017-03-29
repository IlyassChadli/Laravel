<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalLaboratoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal__laboratorios', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('lab_id');
            $table->boolean('facultativo');
            $table->timestamps();
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
        Schema::dropIfExists('personal__laboratorios');
    }
}
