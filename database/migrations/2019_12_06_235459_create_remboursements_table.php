<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemboursementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remboursements', function (Blueprint $table) {
            $table->bigIncrements('remboursement_id')->unsigned();
            $table->integer("avoir_id")->unsigned()->nullable();
            $table->integer("mode_reglement_id")->unsigned()->nullable();
            $table->string("code");
            $table->date("date_remboursement")->nullable();
            $table->string("commentaire")->nullable();
            $table->double("deja_rembourse")->default(0.0);
            $table->double("reste_a_rembourser")->nullable();
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
        Schema::dropIfExists('remboursements');
    }
}
