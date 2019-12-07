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
        Schema::table('avoir_produits', function (Blueprint $table) {
            $table->increments('avoir_produit_id');
            $table->integer('avoir_id')->unsigned();
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
        Schema::table('avoir_produits', function (Blueprint $table) {
            //
        });
    }
}
