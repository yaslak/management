<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->increments('id');

            $table->string('buy_delivery')->nullable();
            $table->string('buy_total_ht');
            $table->string('buy_total_ttc')->nullable();
            $table->string('buy_tva_total')->nullable();
            $table->string('buy_taxes_total')->nullable();
            $table->string('buy_prince_total');

            $table->integer('buy_provider_id')->nullable()->unsigned()->index();
            $table->integer('buy_order_id')->index()->unsigned();

            $table->foreign('buy_provider_id')->references('id')->on('clients');
            $table->foreign('buy_order_id')->references('id')->on('orders');

            $table->dateTime('buy_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buys');
    }
}
