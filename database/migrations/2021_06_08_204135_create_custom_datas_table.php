<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_datas', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->boolean('has_img' )->default(true);
            $table->string('img_src')->nullable();
            $table->boolean('has_video' )->default(true);
            $table->string('video_src')->nullable();
            $table->boolean('has_yt' )->default(true);
            $table->string('yt_src')->nullable();;
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
        Schema::dropIfExists('custom_datas');
    }
}
