<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_analyses', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('traitement_id');
            $table->unsignedBigInteger('analyse_id');
            $table->foreign('traitement_id')->references('id')->on('traitements');
            $table->foreign('analyse_id')->references('id')->on('analyses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_analyses');
    }
}
