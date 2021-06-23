<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChronFavorite extends Model
{
    protected $table = 'chron_favorites';
    protected $fillable = [

        'city_id', 'title', 'description', 'img_src', 'video_src', 'yt_src'

    ];
    use HasFactory;
}
