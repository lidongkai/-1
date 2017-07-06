<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrederTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
             $table->increments('id');
            // 订单编号
            $table->string('ordernum')->unique();
            // 用户id
            $table->integer('uid');
            // 商品id
            $table->integer('gid');
            // 下单时间
            $table->string('ftime');
            // 完成订单时间
            $table->string('otime')->default('0');
            // 状态
            $table->smallInteger('status')->default('1'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
