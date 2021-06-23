<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityInfo extends Model
{
    protected $table = 'city_infos';

    protected $fillable = [

        'city_id', 'title', 'description', 'img_src', 'video_src', 'yt_src', 'isCompleted'

    ];
    use HasFactory;
}
