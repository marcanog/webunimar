<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\news;
use App\tag;
use App\tags_new;
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

    public function addnews(){
        return view ('/admin/addnews');
    }

    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'title' => 'required|max:255',
            'content' => 'required',
            'resume' => 'required',
            'tags' => 'required',
        ]);
        if($validator->fails()) {
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Por favor verifquen que los campos estén debidamente llenados')
            ->withErrors($validator);
        }else{
            //Insert news
            $news = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'resume' => $request->resume,
            'status_id' => "1",
            ]);
            //Insert unrepeated tags
            foreach(explode(",", $request->tags) as $tag){
                $tagId = DB::table('tags')
                    ->select('id')
                    ->where('name', '=', $tag)
                    ->get();
                if(!sizeof($tagId)){
                    $createTag = Tag::create([
                    'name' => $tag,
                    ]);
                    $tags_news = tags_new::create([
                        'tag_id' => $createTag->id,
                        'new_id' => $news->id,
                    ]);
                }
                else{
                    $tags_news = tags_new::create([
                        'tag_id' => $tagId[0]->id,
                        'new_id' => $news->id,
                    ]);
                }
            }
            return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
        }
    }

    public function update (Request $request){
        $news = News::find($request->idedit);
        $validator = validator::make($request->all(),[
            'title' => 'required|max:255',
            'content' => 'required',
            'resume' => 'required',
            'tags' => 'required',
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
            $news->status_id = $request->status_id;
            $news->save();

            $editTags = explode(",", $request->tags);
            $allTags = array_column(DB::table('tags')
                                ->select('name')
                                ->get()->toArray(), 'name');
            $newTags = array_diff($editTags,$allTags);
            DB::table('tags_news')->where('new_id', '=', $request->idedit)->delete();
            foreach($newTags as $newTag){
                $createTag = Tag::create([
                    'name' => $newTag,
                ]);
            }
            foreach($editTags as $editTag){
                $tag_id = DB::table('tags')
                    ->select('id')
                    ->where('name', '=', $editTag)
                    ->get();
                $tags_news = tags_new::create([
                    'tag_id' => $tag_id[0]->id,
                    'new_id' => $request->idedit,
                ]);
            }
            return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
        }
        
    }

    public function showtags(Request $request){
        /*
        $tagsId = DB::table('tags_news')
            ->select('tags')
            ->where('news', '=', $request->id)
            ->get();
        $tagsNames = "";
        foreach($tagsId as $tagId){
            $currentTag = DB::table('tags')
                ->select('tag')
                ->where('id', '=', $tagId->tags)
                ->get();
            $tagsNames .= $currentTag[0]->tag.",";
        }
        */
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
