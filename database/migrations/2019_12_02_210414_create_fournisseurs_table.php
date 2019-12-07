<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->increments('fournisseur_id')->unsigned();
            $table->integer("ville_id")->unsigned()->nullable();
            $table->string("code");// Aussi appele reference fournisseur
            $table->string("nom");
            $table->string("prenom");
            $table->string("adresse")->nullable();
            $table->string("raison_sociale")->nullable();
            $table->string("code_postal")->nullable();
            $table->string("telephone")->nullable();
            $table->string("fax")->nullable();
            $table->string("email")->nullable()->unique();
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
        Schema::dropIfExists('fournisseurs');
    }
}
