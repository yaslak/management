<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShareClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_clients', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('share_client_society_id')->unsigned()->index()->unique()->nullable();

            $table->foreign('share_client_society_id')->references('id')->on('societies');

            $table->dateTime('share_client_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('share_clients');
    }
}
