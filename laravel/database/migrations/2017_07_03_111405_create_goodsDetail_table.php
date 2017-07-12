<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodsDetail',function(Blueprint $table){

            $table->increments('id');
            $table->string('goodsName');
            $table->integer('tid');
            $table->string('introduce');
            $table->string('picture')->default('default.jpg');
            $table->string('price'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
