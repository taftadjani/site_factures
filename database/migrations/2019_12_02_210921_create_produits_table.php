<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements("produit_id")->unsigned();
            $table->bigInteger("famille_id")->unsigned()->index();
            $table->bigInteger("fournisseur_id")->unsigned()->index();
            $table->string("unite_id");
            $table->string("reference")->nullable();
            $table->string("designation")->nullable();
            $table->string("activite")->nullable();
            $table->string("prix_achat")->nullable();
            $table->string("img_name")->nullable();// Json {"1":"path1","2":"path2"}
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
        Schema::dropIfExists('produits');
    }
}
