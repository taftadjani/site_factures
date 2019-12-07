<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcomptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acomptes', function (Blueprint $table) {
            $table->increments('acompte_id')->unsigned();
            $table->integer("facture_id")->unsigned()->nullable();
            $table->integer("mode_reglement_id")->unsigned()->nullable();
            $table->string("code");
            $table->string("libelle")->nullable();
            $table->date("date_reglement")->nullable();
            $table->string("commentaire")->nullable();
            $table->double("montant_regle")->default(0);
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
        Schema::dropIfExists('acomptes');
    }
}
