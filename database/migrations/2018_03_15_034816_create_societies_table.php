<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('society_email')->unique();
            $table->string('society_name',50)->unique();
            $table->string('society_domain');
            $table->string('society_licence');
            $table->string('society_address',50);
            $table->string('society_build');
            $table->string('society_zip');
            $table->string('society_city');
            $table->string('society_tel')->unique();
            $table->string('society_speaker',50);
            $table->string('society_turnover');
            $table->dateTime('society_limit')->nullable();
            $table->string('society_range');
            $table->boolean('society_status');
            $table->string('society_logo');
            $table->string('society_cover')->nullable();
            $table->dateTime('society_created_at');
            $table->dateTime('society_updated_at');
        });
        Schema::table('users',function (Blueprint $table){
            $table->integer('society_id')->nullable();
            $table->foreign('society_id')->references('id')->on('societies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('societies');
    }
}
