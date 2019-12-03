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
            $table->string("nom");
            $table->string("prenom")->nullable();
            $table->string("civilite")->nullable();
            $table->string("telephone")->nullable();
            $table->string("email")->unique();
            $table->string("code_postal")->nullable();
            $table->string("adresse")->nullable();
            $table->string("ville")->nullable();
            $table->string("pays")->nullable();
            $table->string("statut")->nullable();
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
        Schema::dropIfExists('clients');
    }
}
