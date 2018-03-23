<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('provider_society_id')->unsigned()->index();
            $table->integer('provider_pivot_deal_id')->unsigned()->index();
            $table->integer('provider_client_id')->unsigned()->index();

            $table->foreign('provider_society_id')->references('id')->on('societies');
            $table->foreign('provider_pivot_deal_id')->references('id')->on('pivot_deals');
            $table->foreign('provider_client_id')->references('id')->on('users');

            $table->dateTime('client_updated_at');
            $table->dateTime('client_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('providers');
    }
}
