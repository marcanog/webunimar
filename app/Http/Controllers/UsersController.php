<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class UsersController extends Controller
{
    public function index(){
       return view ('/admin/users');
   }

   public function store(Request $request){
       $validator = validator::make($request->all(),[
            'nombre' => 'required|min:10|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:8|require_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:8',
            'role' => 'required|max:15',
            'status' => 'required|max:15',
       ]);
        if($validator->fails()) {
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Por favor verifquen que los campos estén debidamente llenados')
            ->withErrors($validator);
       }else{
           $user = User::create([
               'name' => $request->nombre,
               'email' => $request->email,
               'password' => hash::make($request->password),
               'role' => $request->role,
               'status' => $request->status,
           ]);
           return back() -> with ('Listo', 'Se ha guardado satisfactoriamente');
       }
   }
}
