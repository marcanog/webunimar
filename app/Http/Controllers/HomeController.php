<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }
    public function index(){

        //$news = News::all();
        // $news = DB::table('news')->get();
        // return view ('/home')->with('news', $news);
        return view('/home');
    }
    // public function show(){
    //     $news = News::all();
    //     var_dump($news); die();
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('layout/home');
    // }
}
