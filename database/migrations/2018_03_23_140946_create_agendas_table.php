<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('agenda_title');
            $table->string('agenda_text');
            $table->dateTime('agenda_from');
            $table->dateTime('agenda_to');
            $table->string('agenda_status');
            $table->string('agenda_type');

            $table->integer('agenda_publisher_reader_id')->index()->unsigned()->nullable();

            $table->foreign('agenda_publisher_reader_id')->references('id')->on('publisher_readers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
