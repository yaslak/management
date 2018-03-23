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

            $table->dateTime('post_limit');
            $table->boolean('post_pdg')->nullable();
            $table->boolean('post_manager')->nullable();
            $table->boolean('post_accounting')->nullable();
            $table->boolean('post_commercial')->nullable();
            $table->boolean('post_delivery_man')->nullable();
            $table->boolean('post_storekeeper')->nullable();

            $table->integer('post_user_id')->unsigned()->index()->unique();
            $table->integer('post_society_id')->unsigned()->index();

            $table->foreign('post_society_id')->references('id')->on('societies');
            $table->foreign('post_user_id')->references('id')->on('users');

            $table->dateTime('post_updated_at');
            $table->dateTime('post_created_at');
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
