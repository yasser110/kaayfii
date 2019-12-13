<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JoinClientCommande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_commande',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedInteger( 'commande_id');
            $table->unsignedInteger( 'client_id');
            $table->timestamps();
        } ) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_commande');
    }
}
