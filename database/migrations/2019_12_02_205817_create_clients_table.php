<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('client_id')->unsigned();
            $table->integer("ville_id")->nullable();
            $table->integer("civilite_id")->nullable();
            $table->integer("statut_id")->nullable();
            $table->integer("genre_id")->nullable();
            $table->integer("adresse_livraison_id")->nullable();
            $table->integer("adresse_transporteur_id")->nullable();
            $table->integer("mode_reglement_id")->nullable();
            $table->integer("tarif_id")->nullable();
            $table->integer("condition_paiement_id")->nullable();
            $table->string("nom");
            $table->string("prenom")->nullable();
            $table->string("adresse")->nullable();
            $table->string("telephone")->nullable();
            $table->string("email")->nullable()->unique();
            $table->string("fax")->nullable();
            $table->string("code_postal")->nullable();
            $table->string("raison_sociale")->nullable();
            $table->string("url")->nullable();
            $table->string("siret")->nullable();
            $table->string("code_ape")->nullable();
            $table->double("tva_intra")->nullable();
            $table->string("ice")->nullable();
            $table->string("if")->nullable();
            $table->string("patente")->nullable();
            $table->string("cnss")->nullable();
            $table->string("rc")->nullable();
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
        Schema::dropIfExists('clients');
    }
}
