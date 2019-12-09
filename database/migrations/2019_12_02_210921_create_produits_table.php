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
            $table->increments("produit_id")->unsigned();
            $table->integer("unite_id")->unsigned()->nullable();
            $table->integer("famille_id")->unsigned()->nullable();
            $table->integer("fournisseur_id")->unsigned()->nullable();
            $table->integer("taxe_id")->unsigned()->nullable();
            $table->string("reference");
            $table->double("prix_achat");
            $table->double("prix_vente");
            $table->double("quantite_stock")->default(0);
            $table->string("activite")->nullable();
            $table->string("code_bar_fabricant")->nullable();
            $table->string("code_bar_interne")->nullable();
            $table->string("designation")->nullable();
            $table->double("marge_ht")->default(0.0);
            $table->string("image_name")->nullable();// Json {"1":"path1","2":"path2"}
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
