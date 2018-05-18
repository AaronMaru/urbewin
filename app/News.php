<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title_zh', 'content_zh', 'title_eng', 'content_eng', 'image'
    ];
}
