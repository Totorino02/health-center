<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonnanceProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonnance_produits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ordonnance_id');        
            $table->unsignedBigInteger('produit_id');            
            $table->foreign('ordonnance_id')->references('id')->on('ordonnances');
            $table->foreign('produit_id')->references('id')->on('produits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordonnance_produits');
    }
}
