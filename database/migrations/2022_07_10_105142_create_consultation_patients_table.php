<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_patients', function (Blueprint $table) {
            $table->id();
            $table->text('observations');
            $table->date('date');
            $table->unsignedBigInteger('consultation_id');
            $table->unsignedBigInteger('dossier_id');
            $table->foreign('consultation_id')->references('id')->on('consultations');
            $table->foreign('dossier_id')->references('id')->on('dossier_medicals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultation_patients');
    }
}
