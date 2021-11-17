<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags_new extends Model
{
    protected $table = 'tags_news';
    protected $fillable = [
        'tag_id','new_id'
    ];
}
