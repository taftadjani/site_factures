<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon_livraisons', function (Blueprint $table) {
            $table->increments('bon_livraison_id')->unsigned();
            $table->integer("client_id")->unsigned()->nullable();
            $table->integer("tarif_id")->unsigned()->nullable();
            $table->integer("taxe_id")->unsigned()->nullable();
            $table->string("etat")->nullable();
            $table->string("numero")->nullable();
            $table->date("date_creation")->default(now());
            $table->date("date_fermeture")->default(now());
            $table->string("impression")->nullable();
            $table->date("date_impression")->nullable();
            $table->string("envoi")->nullable();
            $table->date("date_envoi")->nullable();
            $table->double("remise_globale")->default(0.0);
            $table->string("observation")->nullable();
            $table->string("annotation")->nullable();
            $table->double("acompte")->default(0.0);
            $table->double("net_a_payer")->default(0.0);
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
        Schema::dropIfExists('bon_livraisons');
    }
}
