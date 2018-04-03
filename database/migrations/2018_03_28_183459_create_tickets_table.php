<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ticket_name');
            $table->boolean('ticket_archive')->nullable();

            $table->integer('ticket_publisher_id')->index()->unsigned();

            $table->foreign('ticket_publisher_id')->references('id')->on('users');

            $table->dateTime('ticket_updated_at');
            $table->dateTime('ticket_created_at');

        });
        Schema::create('ticket_contents', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ticket_content_text');

            $table->integer('ticket_content_ticket_id')->index()->unsigned();

            $table->foreign('ticket_content_ticket_id')->references('id')->on('tickets');

            $table->dateTime('ticket_content_created_at');

        });

        Schema::create('ticket_joins', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ticket_join_ticket_content_id')->index()->unsigned();
            $table->integer('ticket_join_image_id')->index()->unsigned();

            $table->foreign('ticket_join_ticket_content_id')->references('id')->on('ticket_contents');
            $table->foreign('ticket_join_image_id')->references('id')->on('images');

            $table->dateTime('ticket_join_created_at');

        });
        Schema::create('ticket_readers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ticket_reader_ticket_id')->index()->unsigned();
            $table->integer('ticket_reader_user_id')->index()->unsigned();

            $table->foreign('ticket_reader_ticket_id')->references('id')->on('tickets');
            $table->foreign('ticket_reader_user_id')->references('id')->on('users');

            $table->dateTime('ticket_reader_created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');

        Schema::dropIfExists('ticket_contents');

        Schema::dropIfExists('ticket_joins');

        Schema::dropIfExists('ticket_readers');
    }
}
