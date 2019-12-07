<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresseTransporteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresse_transporteurs', function (Blueprint $table) {
            $table->increments('adresse_transporteur_id')->unsigned();
            $table->integer("ville_id")->unsigned()->nullable();
            $table->integer("client_id")->unsigned()->nullable();
            $table->string("code_postal")->nullable();
            $table->string("adresse_1")->nullable();
            $table->string("adresse_2")->nullable();
            $table->string("raison_sociale")->nullable();
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
        Schema::dropIfExists('adresse_transporteurs');
    }
}
