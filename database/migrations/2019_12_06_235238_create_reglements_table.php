<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReglementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglements', function (Blueprint $table) {
            $table->increments('reglement_id')->unsigned();
            $table->integer("facture_id")->unsigned()->nullable();
            $table->integer("mode_reglement_id")->unsigned()->nullable();
            $table->string("code");
            $table->string("libelle");
            $table->string("commentaire")->nullable();
            $table->date("date_reglement")->nullable();
            $table->double("montant_regle")->default(0.0);
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
        Schema::dropIfExists('reglements');
    }
}
