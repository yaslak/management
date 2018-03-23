<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo_profil', 150)->nullable();
            $table->string('photo_cover', 150)->nullable();
            $table->string('first_name', 15)->nullable();
            $table->string('last_name', 15)->nullable();
            $table->date('dtn')->nullable();
            $table->string('sex',10)->nullable();
            $table->string('address',50)->nullable();
            $table->string('house_nbr',6)->nullable();
            $table->string('city',50)->nullable();
            $table->string('tel')->nullable()->unique();
            $table->integer('is_admin')->unsigned()->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
