<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvoirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avoirs', function (Blueprint $table) {
            $table->increments('avoir_id');
            $table->integer("taxe_id")->unsigned()->nullable();
            $table->integer("client_id")->unsigned()->nullable();
            $table->integer("condition_paiement_id")->unsigned()->nullable();
            $table->integer("mode_reglement_id")->unsigned()->nullable();
            $table->integer("tarif_id")->unsigned()->nullable();
            $table->string("etat")->nullable();
            $table->string("numero")->nullable();
            $table->date("date_creation")->default(now());
            $table->date("date_fermeture")->default(now());
            $table->date("date_echeance")->default(now());
            $table->string("impression")->nullable();
            $table->date("date_impression")->nullable();
            $table->string("envoi")->nullable();
            $table->date("date_envoi")->nullable();
            $table->string("remboursement")->nullable();
            $table->date("date_remboursement")->nullable();
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
        Schema::dropIfExists('avoirs');
    }
}
