<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('store_society_id')->index()->unsigned();
            $table->integer('store_section_store_id')->unsigned()->index()->nullable();
            $table->integer('store_category_store_id')->unsigned()->index()->nullable();
            $table->integer('store_product_id')->unsigned()->index()->nullable();

            $table->foreign('store_society_id')->references('id')->on('societies');
            $table->foreign('store_section_store_id')->references('id')->on('section_stores');
            $table->foreign('store_category_store_id')->references('id')->on('category_stores');
            $table->foreign('store_product_id')->references('id')->on('product_stores');

            $table->dateTime('store_updated_at');
            $table->dateTime('store_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
