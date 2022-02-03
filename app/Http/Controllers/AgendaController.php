<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use DateTime;
use DateInterval;
use Carbon\Carbon;


class AgendaController extends Controller
{
    public function index()
    {
        date_default_timezone_set('America/Caracas');
        $yearEvents = [];
        foreach(Event::get() as $currEvent){
            //Filter events that are happening in the current year
            if($currEvent->status_id == 1 && date("Y",strtotime($currEvent->start)) == date("Y")){
                $startMonth = idate("m",strtotime($currEvent->start))-1;
                if(date("Y",strtotime($currEvent->start)) == date("Y",strtotime($currEvent->end)))
                    $endMonth = idate("m",strtotime($currEvent->end));
                else
                    $endMonth = 12;
                while($startMonth != $endMonth){
                    $startMonth++;
                    $yearEvents[] = array(
                        "month" => $startMonth,
                        "start" => date("Y-m-d h:i:s A", strtotime($currEvent->start)),
                        "end" => date("Y-m-d h:i:s A", strtotime($currEvent->end)),
                        "description" => $currEvent->description,
                        "title" => $currEvent->title,
                        "id" => $currEvent->id, 
                    );
                } 
            }
        }
        sort($yearEvents);
        return view('agenda')->with('currentEvents', Event::get())->with('yearEvents', $yearEvents);
    }
}
