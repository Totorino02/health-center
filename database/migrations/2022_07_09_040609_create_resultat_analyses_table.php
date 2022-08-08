<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultatAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_analyses', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->text('details')->nullable();
            $table->unsignedBigInteger('analyse_id');
            $table->date('date');
            $table->foreign('analyse_id')->references('id')->on('patient_analyses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultat_analyses');
    }
}
