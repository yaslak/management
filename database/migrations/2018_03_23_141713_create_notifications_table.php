<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('notification_text');
            $table->boolean('notification_read');

            $table->integer('notification_user_id');
            $table->integer('notification_img_id');

            $table->foreign('notification_user_id')->references('id')->on('users');
            $table->foreign('notification_img_id')->references('id')->on('images');

            $table->dateTime('notification_updated_at');
            $table->dateTime('notification_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
