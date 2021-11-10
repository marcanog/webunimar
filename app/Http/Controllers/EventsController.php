<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Validator;
use Illuminate\Session\SessionManager;
use Storage;
use Carbon\Carbon;
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
        $startHour = Carbon::createFromFormat('d/m/Y H:i:s', $request->start)->format('H:i:s');
        if($startHour == '00:00:00') $start = Carbon::createFromFormat('d/m/Y H:i:s', $request->start)->format('Y-m-d');
        else $start = Carbon::createFromFormat('d/m/Y H:i:s', $request->start)->format('Y-m-d H:i:s');

        $endHour = Carbon::createFromFormat('d/m/Y H:i:s', $request->end)->format('H:i:s');
        if($endHour == '00:00:00') $end = Carbon::createFromFormat('d/m/Y H:i:s', $request->end)->format('Y-m-d');
        else $end = Carbon::createFromFormat('d/m/Y H:i:s', $request->end)->format('Y-m-d H:i:s');

        $event = Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'color' => $request->color,
            'start' => $start,
            'end' => $end,
            'status' => $request->status,
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
        $startHour = Carbon::createFromFormat('d/m/Y H:i:s', $request->start)->format('H:i:s');
        if($startHour == '00:00:00') $start = Carbon::createFromFormat('d/m/Y H:i:s', $request->start)->format('Y-m-d');
        else $start = Carbon::createFromFormat('d/m/Y H:i:s', $request->start)->format('Y-m-d H:i:s');

        $endHour = Carbon::createFromFormat('d/m/Y H:i:s', $request->end)->format('H:i:s');
        if($endHour == '00:00:00') $end = Carbon::createFromFormat('d/m/Y H:i:s', $request->end)->format('Y-m-d');
        else $end = Carbon::createFromFormat('d/m/Y H:i:s', $request->end)->format('Y-m-d H:i:s');
        
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
            $eventDel->status = '2';
            $eventDel->save();
        }
        return back();
    }
}
