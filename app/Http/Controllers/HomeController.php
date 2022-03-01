<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\News;
use App\Event;

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
        setlocale(LC_ALL, 'es_ES');
        return view('/home')->with('news', News::where('status_id',1)->limit(4)->orderBy('id', 'DESC')->get())->with('events', Event::where('status_id',1)->limit(4)->orderBy('id', 'DESC')->get());

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

}
