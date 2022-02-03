<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function getTagsNames(Request $request){
        $tagsNames = "";
        foreach(explode(",", $request->tags_id) as $tag_id){
            $tagsNames .= Tag::find($tag_id)->name.",";
        }
        return $tagsNames;
    }
}
