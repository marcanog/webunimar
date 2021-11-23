<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Session\SessionManager;
use Storage;
use DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventsData = DB::table('events')
                    ->select('events.*')
                    ->orderBy('id', 'ASC')
                    ->selectRaw('DATE(created_at) AS fecha')
                    ->get();
        return view("admin.events")->with('currentEvents', $eventsData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$startHour = date("H:i:s", strtotime($request->start));
        if($startHour == '00:00:00') $start = date("Y-m-d", strtotime($request->start));
        else $start = date("Y-m-d H:i:s", strtotime($request->start));

        $endHour = date("H:i:s", strtotime($request->end));
        if($endHour == '00:00:00') $end = date("Y-m-d", strtotime($request->end));
        else $end = date("Y-m-d H:i:s", strtotime($request->end));*/

        if($request->start[1] == "04:00:00.000Z") $start = $request->start[0];
        else $start = $request->start[0]." ".$request->start[1];

        if($request->end[1] == "04:00:00.000Z") $end = $request->end[0];
        else $end = $request->end[0]." ".$request->end[1];

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'color' => $request->color,
            'start' => $start,
            'end' => $end,
            'status_id' => $request->status_id,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(){}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /*$startHour = date("H:i:s", strtotime($request->start));
        if($startHour == '00:00:00') $start = date("Y-m-d", strtotime($request->start));
        else $start = date("Y-m-d H:i:s", strtotime($request->start));

        $endHour = date("H:i:s", strtotime($request->end));
        if($endHour == '00:00:00') $end = date("Y-m-d", strtotime($request->end));
        else $end = date("Y-m-d H:i:s", strtotime($request->end));*/
        
        if($request->start[1] == "04:00:00.000Z") $start = $request->start[0];
        else $start = $request->start[0]." ".$request->start[1];

        if($request->end[1] == "04:00:00.000Z") $end = $request->end[0];
        else $end = $request->end[0]." ".$request->end[1];
        
        $eventUp = Event::find($request->id);
        $eventUp->start = $start;
        $eventUp->end = $end;
        $eventUp->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->idDelete){
            $eventDel = Event::find($request->idDelete);
            $eventDel->status_id = '2';
            $eventDel->save();
        }
        return back();
    }
}
