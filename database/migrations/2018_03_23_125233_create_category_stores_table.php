<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_stores', function (Blueprint $table) {
            $table->increments('id');

            $table->string('category_store_name');

            $table->integer('category_store_store_id')->index()->unsigned()->nullable();
            $table->integer('category_store_section_id')->index()->unsigned()->nullable();
            $table->integer('category_store_product_id')->index()->unsigned()->nullable();

            $table->foreign('category_store_store_id')->references('id')->on('stores');
            $table->foreign('category_store_section_id')->references('id')->on('section_stores');
            $table->foreign('category_store_product_id')->references('id')->on('product_stores');

            $table->dateTime('category_store_updated_at');
            $table->dateTime('category_store_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_stores');
    }
}
