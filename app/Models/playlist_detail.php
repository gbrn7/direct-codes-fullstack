<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist_detail extends Model
{
    use HasFactory;
    protected $table = 'playlist_detail';

    protected $fillable = [
        'video_id',
        'title',
        'link_video',
    ];
}
