<?php

namespace App\Http\Controllers;
use App\News;
use App\Status;
use App\Tag;
use App\Event;

use Illuminate\Http\Request;

class NewsUnimarController extends Controller
{
    //Obtain the last 3 events from the agenda
    public function lastEvents(){
        date_default_timezone_set('America/Caracas');
        $currEvents = Event::where('status_id',1)
                           ->limit(3)
                           ->orderBy('id', 'DESC')
                           ->get();
        $last_events = [];
        foreach($currEvents as $currEvent){
            $last_events[] = array(
                "start" => date("Y-m-d h:i:s A", strtotime($currEvent->start)),
                "title" => $currEvent->title,
            );
        }
        return $last_events;
    }
    public function index(){
        //Get the last 3 news that are going to be show always
        $threenews = News::select('news.id', 'news.title', 'news.resume', 'news.created_at','tags.name as first_tag')
                         ->orderBy('news.id', 'DESC')
                         ->where('news.status_id',1)
                         ->join('tags', 'news.tags_id', '=', 'tags.id')
                         ->limit(3)
                         ->get();
        //Get all news but not the lastest 3
        $news = News::select('news.id', 'news.title', 'news.resume', 'news.created_at','tags.name as first_tag')
                    ->orderBy('news.id', 'DESC')
                    ->where('news.status_id',1)
                    ->where('news.id','<>',$threenews[0]->id)
                    ->where('news.id','<>',$threenews[1]->id)
                    ->where('news.id','<>',$threenews[2]->id)
                    ->join('tags', 'news.tags_id', '=', 'tags.id');
        return view('newsunimar')->with('news', $news->paginate(7))->with('threenews', $threenews)->with('events', $this->lastEvents());
    }

    public function shownew($category, $title, $id){
        //Get the data from the selected new
        $new = News::select('news.id', 'news.title', 'news.content', 'news.created_at', 'news.tags_id','tags.name as first_tag')
                   ->where('news.id','=',$id)
                   ->join('tags', 'news.tags_id', '=', 'tags.id')
                   ->orderBy('id', 'DESC')
                   ->get();
        //Get the names of the tags in the current new
        $tagsNames = "";
        //Get the news (max 2) that match at least one of its tag
        $relatedNews = [];
        foreach(explode(",", $new[0]->tags_id) as $tag_id){
            $tagsNames .= Tag::find($tag_id)->name.",";
            if(count(array_unique($relatedNews, SORT_REGULAR)) < 2){
                foreach(
                News::select('news.id','news.created_at','news.title','tags.name as first_tag')
                ->where('news.tags_id','like','%'.$tag_id.'%')
                ->where('news.status_id',1)
                ->where('news.id','<>',$id)
                ->join('tags', 'news.tags_id', '=', 'tags.id')
                ->get() as $foundNew){
                    $relatedNews[] = array(
                        "id" => $foundNew->id,
                        "created_at" => $foundNew->created_at,
                        "title" => $foundNew->title,
                        "first_tag" => $foundNew->first_tag,
                    );
                    if(count(array_unique($relatedNews, SORT_REGULAR)) == 2) break;
                }
            }
        }
        return view('layouts.displayNew')->with('new', $new)->with('tags', $tagsNames)->with('relatedNews', array_unique($relatedNews, SORT_REGULAR))->with('events', $this->lastEvents());
    }
}
