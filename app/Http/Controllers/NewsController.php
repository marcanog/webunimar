<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Status;
use App\Tag;

class NewsController extends Controller
{
    public function index(){
        return view ('/admin/news')->with('news', News::get())->with('tags', tag::get())->with('status', status::get());
    }

    public function addnews(){
        return view ('/admin/addnews');
    }
    /*public function uploadImage(Request $request) {
        if($request->hasFile('upload_image')) {
            $originName = $request->file('upload_image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload_image')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload_image')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'La imagen se ha cargado exitosamente';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }*/
    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:10|max:255',
            'content' => 'required|min:10',
            'resume' => 'required|min:10',
            'tags' => 'required',
        ]);
        //Insert unrepeated tags and get IDs of sent tags
        $tagsId = [];
        foreach(explode(",", $request->tags) as $tagName){
            $tagsId[] = Tag::firstOrCreate([
                'name' => $tagName,
            ])->id;
        }
        //Insert news
        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'resume' => $request->resume,
            'tags_id' => implode(",",$tagsId),
            'status_id' => "1",
        ]);
        return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
    }

    public function update (Request $request){
        $request->validate([
            'title' => 'required|min:10|max:255',
            'content' => 'required|min:10',
            'resume' => 'required|min:10',
            'tags' => 'required',
        ]);
        //Insert unrepeated tags and get IDs of sent tags
        $tagsId = [];
        foreach(explode(",", $request->tags) as $tagName){
            $tagsId[] = Tag::firstOrCreate([
                'name' => $tagName,
            ])->id;
        }
        //Update news
        News::find($request->idedit)->update([
            'title' => $request->title,
            'content' => $request->content,
            'resume' => $request->resume,
            'tags_id' => implode(",",$tagsId),
            'status_id' => $request->status_id,
        ]);
        return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
    }
}
