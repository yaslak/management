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
            $table->integer('society_id')->unsigned();
            $table->string('token')->unique();
            $table->string('range');
            $table->boolean('pdg')->nullable();
            $table->boolean('manager')->nullable();
            $table->boolean('accounting')->nullable();
            $table->boolean('commercial')->nullable();
            $table->boolean('delivery_man')->nullable();
            $table->boolean('storekeeper')->nullable();
            $table->timestamps();
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
