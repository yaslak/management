<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stores', function (Blueprint $table) {
            $table->increments('id');

            $table->string('product_store_name');
            $table->string('product_store_description')->nullable();
            $table->string('product_store_ref')->nullable();
            $table->string('product_store_status');
            $table->boolean('product_store_expired');
            $table->date('product_store_expired_in')->nullable();
            $table->string('product_store_sale_price')->nullable();
            $table->string('product_store_buy_price')->nullable();
            $table->string('product_store_tva')->nullable();
            $table->string('product_store_taxes')->nullable();
            $table->string('product_store_qt')->nullable();

            $table->integer('product_store_store_id')->index()->unsigned();
            $table->integer('product_store_category_id')->nullable()->unsigned()->index();
            $table->integer('product_store_section_id')->nullable()->unsigned()->index();


            $table->foreign('product_store_store_id')->references('id')->on('stores');
            $table->foreign('product_store_category_id')->references('id')->on('category_stores');
            $table->foreign('product_store_section_id')->references('id')->on('section_stores');

            $table->dateTime('product_store_updated_at');
            $table->dateTime('product_store_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_stores');
    }
}
