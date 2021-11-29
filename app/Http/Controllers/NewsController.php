<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\tag;

class NewsController extends Controller
{
    public function index(){
        return view ('/admin/news')->with('news', News::get());
    }

    public function addnews(){
        return view ('/admin/addnews');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:10|max:255',
            'content' => 'required|min:10',
            'resume' => 'required|min:10',
            'tags' => 'required',
        ]);
        //Insert news
        $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'resume' => $request->resume,
            'status_id' => "1",
        ]);
        //Insert unrepeated tags and get IDs of sent tags
        $tagsId = [];
        foreach(explode(",", $request->tags) as $tagName){
            $tagsId[] = Tag::firstOrCreate([
                'name' => $tagName,
            ])->id;
        }
        //Create relations between the news and its tags
        News::find($news->id)->tags()->attach($tagsId);
        return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
    }

    public function update (Request $request){
        $request->validate([
            'title' => 'required|min:10|max:255',
            'content' => 'required|min:10',
            'resume' => 'required|min:10',
            'tags' => 'required',
        ]);
        //Update news
        News::find($request->idedit)->update([
            'title' => $request->title,
            'content' => $request->content,
            'resume' => $request->resume,
            'status_id' => $request->status_id,
        ]);
        //Insert unrepeated tags and get IDs of sent tags
        $tagsId = [];
        foreach(explode(",", $request->tags) as $tagName){
            $tagsId[] = Tag::firstOrCreate([
                'name' => $tagName,
            ])->id;
        }
        //Create and delete relations between the news and its tags
        News::find($request->idedit)->tags()->sync($tagsId);
        return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
    }

    public function showtags(Request $request){
        $news = news::with('tags')->where('id', '=', $request->id)->firstOrFail();
        $tagsNames = [];
        foreach($news->tags as $tag){
            $tagsNames[] = $tag->name;
        }
        return response()->json([
            'tagsNames' => $tagsNames,
        ]);
    }
}
