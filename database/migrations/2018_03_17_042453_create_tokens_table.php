<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->increments('id');

            $table->string('token')->unique();
            $table->string('range');
            $table->boolean('pdg')->nullable();
            $table->boolean('manager')->nullable();
            $table->boolean('accounting')->nullable();
            $table->boolean('commercial')->nullable();
            $table->boolean('delivery_man')->nullable();
            $table->boolean('storekeeper')->nullable();

            $table->integer('society_id')->unsigned()->index();
            $table->foreign('society_id')->references('id')->on('societies');

            $table->dateTime('token_updated_at');
            $table->dateTime('token_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tokens');
    }
}
