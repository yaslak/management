<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');

            $table->string('sale_delivery')->nullable();
            $table->string('sale_total_ht');
            $table->string('sale_total_ttc')->nullable();
            $table->string('sale_tva_total')->nullable();
            $table->string('sale_taxes_total')->nullable();
            $table->string('sale_prince_total');

            $table->integer('sale_provider_id')->nullable()->unsigned()->index();
            $table->integer('sale_order_id')->index()->unsigned();

            $table->foreign('sale_provider_id')->references('id')->on('providers');
            $table->foreign('sale_order_id')->references('id')->on('orders');

            $table->dateTime('sale_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
