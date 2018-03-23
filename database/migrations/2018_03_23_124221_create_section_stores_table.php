<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_stores', function (Blueprint $table) {
            $table->increments('id');

            $table->string('section_store_name');

            $table->integer('section_store_store_id')->index()->unsigned()->nullable();
            $table->integer('section_store_category_id')->index()->unsigned()->nullable();
            $table->integer('section_store_product_id')->index()->unsigned()->nullable();

            $table->foreign('section_store_store_id')->references('id')->on('stores');
            $table->foreign('section_store_category_id')->references('id')->on('category_stores');
            $table->foreign('section_store_product_id')->references('id')->on('product_stores');

            $table->dateTime('section_store_updated_at');
            $table->dateTime('section_store_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_stores');
    }
}
