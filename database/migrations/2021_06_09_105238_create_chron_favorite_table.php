<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChronFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chron_favorites', function (Blueprint $table) {
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
     *2	TIMOTHEE GAULTIER	timogo@timogo.fr	NULL	$2y$10$oDjBJ9EIA7Rsop/PVYuUf.uF5SmBly51WKVB/SUXZIV4Ws6HPVwgm	NULL	2	NULL	2021-06-14 08:17:05	2021-06-14 08:17:05
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chron_favorites');
    }
}
