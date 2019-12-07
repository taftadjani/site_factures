<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('devis_produits', function (Blueprint $table) {
            $table->increments('devis_produit_id');
            $table->integer('devis_id')->unsigned();
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
        Schema::table('devis_produits', function (Blueprint $table) {
            //
        });
    }
}
