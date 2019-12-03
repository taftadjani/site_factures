<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitFacture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_facture', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('facture_id')->unsigned()->index();
            $table->bigInteger('produit_id')->unsigned()->index();
            $table->double("quantite")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit_facture');
    }
}
