<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonLivraisonProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bon_livraison_produits', function (Blueprint $table) {
            $table->increments('bon_livraison_produit_id');
            $table->integer('bon_livraison_id')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->double("quantite")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bon_livraison_produits', function (Blueprint $table) {
            //
        });
    }
}
