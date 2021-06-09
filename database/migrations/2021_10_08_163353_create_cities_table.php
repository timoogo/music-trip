<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('city_id');

            $table->foreignId('chron_favorite_id')->constrained()->onDelete('cascade'); //NE MARCHE PAS
            $table->foreignId('location_id')->constrained()->onDelete('cascade');// NE MARCHE PAS
            $table->foreignId('custom_datas_id')->constrained()->onDelete('cascade'); //NE MARCHE PAS
            $table->foreignId('music_groups_id')->constrained()->onDelete('cascade'); //NE MARCHE PAS
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
        Schema::dropIfExists('cities');
    }
}
