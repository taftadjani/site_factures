<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvoirProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avoir_produits', function (Blueprint $table) {
            $table->increments('avoir_produit_id')->unsigned();
            $table->integer('avoir_id')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->double("quantite")->default(0);
            $table->double("remise")->default(0);
            $table->string("activite")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avoir_produits');
    }
}
