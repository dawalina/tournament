<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('team1')->unsigned()->nullable(false);
            $table->bigInteger('team2')->unsigned()->nullable(false);
            $table->timestamp('match_date');
            $table->integer('team1_score')->nullable();
            $table->integer('team2_score')->nullable();
            $table->foreign('team1')->references('id')->on('team');
            $table->foreign('team2')->references('id')->on('team');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match');
    }
}
