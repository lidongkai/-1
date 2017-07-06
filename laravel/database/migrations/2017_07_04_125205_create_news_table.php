<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cname');
            $table->string('cid');
            $table->string('aname')->default('admin');
            $table->string('atitle');
            $table->string('descript');
            $table->string('editor');
            $table->string('ctime');
            $table->tinyInteger('status')->default('1');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
    
}
