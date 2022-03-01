<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function index()
    {
        return view("admin.events")->with('currentEvents', Event::get());
    }

    public function create(){}

    public function store(Request $request)
    {
        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'color' => $request->color,
            'start' => event::formatDateTime($request->start),
            'end' => event::formatDateTime($request->end),
            'status_id' => '1',
        ]);
    }

    public function show($id){}

    public function edit(){}

    public function update(Request $request)
    {
        Event::find($request->id)->update([
            'start' => event::formatDateTime($request->start),
            'end' => event::formatDateTime($request->end),
        ]);
    }

    public function destroy(Request $request)
    {
        Event::find($request->idDelete)->update([
            'status_id' => '2',
        ]);
        return back();
    }
}
