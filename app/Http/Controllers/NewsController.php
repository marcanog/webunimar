<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\news;
use Illuminate\Session\SessionManager;
use Storage;
use Image;
use DB;

class NewsController extends Controller
{
    public function index(){
        $news = DB::table('news')
                    -> select('news.*')
                    ->orderBy('id', 'ASC')
                    ->selectRaw('DATE(created_at) AS fecha')
                    ->get();
        return view ('/admin/news')->with('news', $news);
    }

    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'resume' => 'required|max:255',
            'tags' => 'required|max:15',
        ]);
        if($validator->fails()) {
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Por favor verifiquen que los campos estén debidamente llenados')
            ->withErrors($validator);
        }else{
            $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'resume' => $request->resume,
            'tags' => $request->tags,
            'status' => "1",
            ]);
//            return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
//            $tags = explode(",", $request->tags);
//            $news->tag($tags);
            return redirect('news')->with('success','Post created successfully');
        }
    }

    public function update (Request $request){
        $news = News::find($request->idedit);
        $validator = validator::make($request->all(),[
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'resume' => 'required|max:255',
            'tags' => 'required|max:15',
        ]);
        if($validator->fails()) {
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Por favor verifquen que los campos estén debidamente llenados')
            ->withErrors($validator);
        }else{
            $news->title = $request->title;
            $news->content = $request->content;
            $news->resume = $request->resume;
            $news->tags = $request->tags;
            $news->status = $request->status;
            $news->save();
            return back() ->with('Listo', 'Se ha actualizado el registro correctamente');
        }
    }
}
