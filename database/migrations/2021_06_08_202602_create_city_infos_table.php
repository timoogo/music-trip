<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_infos', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->boolean('has_img' )->default(false);
            $table->string('img_src')->nullable();
            $table->boolean('has_video' )->default(false);
            $table->string('video_src')->nullable();
            $table->boolean('has_yt' )->default(false);
            $table->string('yt_src')->nullable();
            $table->boolean('isCompleted')->default(false);

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
        Schema::dropIfExists('city_infos');
    }
}
