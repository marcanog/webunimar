<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
       return view ('/admin/users');
   }

   public function create(Request $request){
       dd($request);
   }
}
