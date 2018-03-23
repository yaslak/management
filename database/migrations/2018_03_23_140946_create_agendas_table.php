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

            $table->integer('agenda_user_id')->index()->unsigned()->nullable();
            $table->integer('agenda_society_id')->index()->unsigned()->nullable();

            $table->foreign('agenda_user_id')->references('id')->on('users');
            $table->foreign('agenda_society_id')->references('id')->on('societies');

            $table->dateTime('agenda_updated_at');
            $table->dateTime('agenda_created_at');
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
