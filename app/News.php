<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'title' , 'content' , 'resume', 'tags_id' , 'status_id'
    ];
}
