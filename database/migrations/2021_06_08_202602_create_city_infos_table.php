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
            $table->unsignedBigInteger('city_id')->nullable();

            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('img_src')->nullable();


            $table->string('video_src')->nullable();

            $table->string('yt_src')->nullable();
            $table->boolean('isCompleted')->nullable()->default(false);

            $table->timestamps();
            //CONSTAINTS
            $table->foreign('city_id')->references('id')->on('cities');
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
