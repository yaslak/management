<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublisherReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publisher_readers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publisher_readers_reader_id')->index()->unsigned()->nullable();
            $table->integer('publisher_readers_publisher_id')->index()->unsigned()->nullable();

            $table->foreign('publisher_readers_reader_id')->references('id')->on('users');
            $table->foreign('publisher_readers_publisher_id')->references('id')->on('users');

            $table->dateTime('publisher_readers_updated_at');
            $table->dateTime('publisher_readers_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publisher_readers');
    }
}
