<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title' , 'description' , 'color' , 'start' , 'end' , 'status_id'
    ];
    //Format the datetime sent, so it is compatible with fullcalendar's template
    public static function formatDateTime($date){
        if($date[1] == "04:00:00.000Z") return $date[0];
        return $date[0]." ".$date[1];
    }
}
