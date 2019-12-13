<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JoinCommentaireProduct extends Migration
{/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire_product',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedInteger( 'commentaire_id');
            $table->unsignedInteger( 'product_id');
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
        Schema::dropIfExists('commentaire_product');
    }
}
