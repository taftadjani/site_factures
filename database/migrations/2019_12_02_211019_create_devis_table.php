<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('devis_id')->unsigned();
            $table->integer("mode_reglement_id")->unsigned()->nullable();
            $table->integer("tarif_id")->unsigned()->nullable();
            $table->integer("taxe_id")->unsigned()->nullable();
            $table->integer("client_id")->unsigned()->nullable();
            $table->integer("condition_paiement_id")->unsigned()->nullable();
            $table->string("paiement")->nullable();
            $table->date("date_paiement")->nullable();
            $table->string("etat")->nullable();
            $table->string("numero")->nullable();
            $table->date("date_creation")->default(now());
            $table->date("date_fermeture")->default(now());
            $table->date("date_validite")->default(now());
            $table->string("impression")->nullable();
            $table->date("date_impression")->nullable();
            $table->string("envoi")->nullable();
            $table->date("date_envoi")->nullable();
            $table->string("acceptation")->nullable();
            $table->date("date_acceptation")->nullable();
            $table->double("remise_globale")->default(0.0);
            $table->string("observation")->nullable();
            $table->string("annotation")->nullable();
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
        Schema::dropIfExists('devis');
    }
}
