<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_produits', function (Blueprint $table) {
            $table->increments('facture_produit_id');
            $table->integer('facture_id')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->double("quantite")->default(0);
            $table->double('remise')->unsigned();
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
        Schema::dropIfExists('facture_produits');
    }
}
