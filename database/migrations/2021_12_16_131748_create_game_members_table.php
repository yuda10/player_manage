<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id');
            $table->string('home_1',32)->nullable();
            $table->string('home_2',32)->nullable();
            $table->string('home_3',32)->nullable();
            $table->string('home_4',32)->nullable();
            $table->string('home_5',32)->nullable();
            $table->string('home_6',32)->nullable();
            $table->string('home_7',32)->nullable();
            $table->string('home_8',32)->nullable();
            $table->string('home_9',32)->nullable();
            $table->string('home_10',32)->nullable();
            $table->string('home_11',32)->nullable();
            $table->string('home_12',32)->nullable();
            $table->string('home_13',32)->nullable();
            $table->string('home_14',32)->nullable();
            $table->string('home_15',32)->nullable();
            $table->string('home_16',32)->nullable();
            $table->string('home_17',32)->nullable();
            $table->string('home_18',32)->nullable();
            $table->string('home_19',32)->nullable();
            $table->string('home_20',32)->nullable();
            $table->string('home_21',32)->nullable();
            $table->string('home_22',32)->nullable();
            $table->string('home_23',32)->nullable();
            $table->string('away_1',32)->nullable();
            $table->string('away_2',32)->nullable();
            $table->string('away_3',32)->nullable();
            $table->string('away_4',32)->nullable();
            $table->string('away_5',32)->nullable();
            $table->string('away_6',32)->nullable();
            $table->string('away_7',32)->nullable();
            $table->string('away_8',32)->nullable();
            $table->string('away_9',32)->nullable();
            $table->string('away_10',32)->nullable();
            $table->string('away_11',32)->nullable();
            $table->string('away_12',32)->nullable();
            $table->string('away_13',32)->nullable();
            $table->string('away_14',32)->nullable();
            $table->string('away_15',32)->nullable();
            $table->string('away_16',32)->nullable();
            $table->string('away_17',32)->nullable();
            $table->string('away_18',32)->nullable();
            $table->string('away_19',32)->nullable();
            $table->string('away_20',32)->nullable();
            $table->string('away_21',32)->nullable();
            $table->string('away_22',32)->nullable();
            $table->string('away_23',32)->nullable();
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
        Schema::dropIfExists('game_members');
    }
}
