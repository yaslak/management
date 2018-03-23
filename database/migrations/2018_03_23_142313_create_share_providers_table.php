<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShareProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_providers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('share_provider_society_id')->unsigned()->index()->unique()->nullable();

            $table->foreign('share_provider_society_id')->references('id')->on('societies');

            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('share_providers');
    }
}
