<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'videos';

    protected $fillable = [
        'title',
        'trailer',
        'videos',
        'mentor',
        'categories',
        'thumbnail',
        'password',
        'release_date',
        'about',
        'number_of_parts',
        'featured'
    ];
}
