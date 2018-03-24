<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_society_id')->unsigned()->index();
            $table->integer('client_pivot_deal_id')->unsigned()->index();
            $table->integer('client_client_id')->unsigned()->index()->nullable();

            $table->foreign('client_society_id')->references('id')->on('societies');
            $table->foreign('client_pivot_deal_id')->references('id')->on('pivot_deals');
            $table->foreign('client_client_id')->references('id')->on('users');

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
        Schema::dropIfExists('clients');
    }
}
