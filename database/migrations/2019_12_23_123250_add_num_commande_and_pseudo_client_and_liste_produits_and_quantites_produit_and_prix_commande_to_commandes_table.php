<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumCommandeAndPseudoClientAndListeProduitsAndQuantitesProduitAndPrixCommandeToCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commandes', function (Blueprint $table) {
                $table->bigInteger('num_commande')->default(0);
                $table->string('pseudo_client');
                $table->lineString('liste_produits');
                $table->integer('quantite_produits');
                $table->bigInteger('price_commande');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->dropColumn('pseudo_client');
            $table->dropColumn('num_commande');
            $table->dropColumn('liste_produits');
            $table->dropColumn('quantite_produits');
            $table->dropColumn('price_commande');
        });
    }
}
