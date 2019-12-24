<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->text('link')->default('https://zingmp3.vn/bai-hat/Kiss-The-Rain-Yiruma/ZWZD909W.html');
            $table->text('audio')->default('http://mp3-s1-zmp3.zadn.vn/ee97238c2ec8c7969ed9/4807679258395608597?authen=exp=1577339474~acl=/ee97238c2ec8c7969ed9/*~hmac=4c0e8cd9ee05baf5cc89372d9e7e9904&filename=ZWZD909W_128.mp3');
            $table->text('title')->default('Kiss The Rain');
            $table->text('artist')->default('Yiruma');
            $table->boolean('auto_play')->default(1);
            $table->boolean('loop')->default(0);
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
        Schema::dropIfExists('musics');
    }
}
