<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_prince');
            $table->string('order_qt');
            $table->string('order_reduction');
            $table->string('order_discount');
            $table->string('order_bonus');
            $table->string('order_tva');
            $table->string('order_taxes');

            $table->integer('order_product_id')->unsigned()->index();
            $table->integer('order_sale_id')->unsigned()->index()->nullable();
            $table->integer('order_buy_id')->unsigned()->index()->nullable();

            $table->foreign('order_product_id')->references('id')->on('product_stores');
            $table->foreign('order_sale_id')->references('id')->on('sales');
            $table->foreign('order_buy_id')->references('id')->on('buys');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
