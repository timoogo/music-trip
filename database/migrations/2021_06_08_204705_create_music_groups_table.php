<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_groups', function (Blueprint $table) {
            $table->id();

            $table->integer('city_id');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();

            $table->string('img_src')->nullable();

            $table->string('video_src')->nullable();

            $table->string('yt_src')->nullable();
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
        Schema::dropIfExists('music_groups');
    }
}
