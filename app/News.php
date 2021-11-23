<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'title' , 'content' , 'resume' , 'status_id' ,
    ];

    public function tags(){
        return $this->belongsToMany(tag::class, 'tags_news', 'new_id', 'tag_id');
    }
}
