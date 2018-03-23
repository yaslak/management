<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_deals', function (Blueprint $table) {
            $table->increments('id');

            $table->string('pivot_deal_name');
            $table->string('pivot_deal_email')->nullable();
            $table->string('pivot_deal_tel')->nullable();
            $table->string('pivot_deal_speaker')->nullable();
            $table->string('pivot_deal_address')->nullable();
            $table->string('pivot_deal_build')->nullable();
            $table->string('pivot_deal_city')->nullable();
            $table->string('pivot_deal_domain')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot_deals');
    }
}
