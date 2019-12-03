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
            $table->bigIncrements('fournisseur_id')->unsigned();
            $table->string("code")->nullable();// Aussi appele reference fournisseur
            $table->string("nom");
            $table->string("prenom")->nullable();
            $table->string("adresse")->nullable();
            $table->string("phone_fix")->nullable();
            $table->string("phone_mobile")->nullable();
            $table->string("code_postal")->nullable();
            $table->string("ville")->nullable();
            $table->string("email")->unique();
            $table->string("raison_sociale")->nullable();
            $table->string("fax")->nullable();
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
