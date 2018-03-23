<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('society_id');
            $table->foreign('society_id')->references('id')->on('societies');
            $table->dateTime('post_limit');
            $table->boolean('post_pdg')->nullable();
            $table->boolean('post_manager')->nullable();
            $table->boolean('post_accounting')->nullable();
            $table->boolean('post_commercial')->nullable();
            $table->boolean('post_delivery_man')->nullable();
            $table->boolean('post_storekeeper')->nullable();
            $table->dateTime('post_created_at');
            $table->dateTime('post_updated_at');
        });
        Schema::table('users',function (Blueprint $table){
            $table->integer('post_id')->nullable();
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
