<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title' , 'content' , 'resume' , 'image', 'source', 'tags' , 'status' ,
    ];
}
