<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class UsersController extends Controller
{
    public function index(){
       return view ('/admin/users');
   }

   public function create(Request $request){
       $validator = validator::make($request->all(),[
            'nombre' => 'required|min:10|max:255',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8|require_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:8',
            'role' => 'required|min:8',
            'status' => 'required|min:6',
       ]);
       if($validator->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Por favor verifquen que los campos estén debidamente llenados')
            ->withErrors($validator)
            ;
       }
   }
}
