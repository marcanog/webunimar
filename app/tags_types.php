<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags_types extends Model
{
    protected $table = 'tags_types';
    protected $fillable = [
        'tag_id','new_id', 'event_id',
    ];
}
