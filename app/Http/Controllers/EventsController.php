<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Session\SessionManager;
use Storage;
use Image;
use DB;

class EventsController extends Controller
{
    public function index(){
        $event = DB::table('events')
            -> select('events.*')
            ->orderBy('id', 'ASC')
            ->selectRaw('DATE(created_at) AS fecha')
            ->get();
        return view ('/admin/events')->with('events', $event);
    }

    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'title'     => 'required|max:255',
            'content'   => 'required|max:255',
            'resume'    => 'required|max:255',
            'source'    => 'required|max:255',
            'tags'      => 'required|max:15',
        ]);
        if($validator->fails()) {
            return back()
                ->withInput()
                ->with('ErrorInsert', 'Por favor verifiquen que los campos estén debidamente llenados')
                ->withErrors($validator);
        }else{
            $news = News::create([
                'title'     => $request->title,
                'content'   => $request->content,
                'resume'    => $request->resume,
                'source'    => $request->source,
                'tags'      => $request->tags,
                'status'    => "1",
            ]);
//            return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
//            $tags = explode(",", $request->tags);
//            $news->tag($tags);
            return redirect('events')->with('success','Post created successfully');
        }
    }

    public function update (Request $request){
        $event = Events::find($request->idedit);
        $validator = validator::make($request->all(),[
            'title'     => 'required|max:255',
            'content'   => 'required|max:255',
            'resume'    => 'required|max:255',
            'source'    => 'required|max:255',
            'tags'      => 'required|max:15',
        ]);
        if($validator->fails()) {
            return back()
                ->withInput()
                ->with('ErrorInsert', 'Por favor verifquen que los campos estén debidamente llenados')
                ->withErrors($validator);
        }else{
            $event->title   = $request->title;
            $event->content = $request->content;
            $event->resume  = $request->resume;
            $event->source  = $request->source;
            $event->tags    = $request->tags;
            $event->status  = $request->status;
            $event->save();
            return back() ->with('Listo', 'Se ha actualizado el registro correctamente');
        }
    }
}
