<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use Illuminate\Session\SessionManager;
use Storage;
use Image;
use Hash;
use DB;

class UsersController extends Controller
{
   

    public function index(){
        $usuarios = \DB::table('users')
                    -> select('users.*')
                    ->orderBy('id', 'ASC')
                    ->selectRaw('DATE(created_at) AS fecha')
                    ->get();
       return view ('/admin/users')->with('usuarios', $usuarios);
    }

    public function updateuser (Request $request){
        $user = User::find($request->id);
        $validator = validator::make($request->all(),[
            'nombre' => 'required|min:10|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'role' => 'required|max:15',
            'status' => 'required|max:15',
        ]);
        if($validator->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Por favor verifquen que los campos estén debidamente llenados')
            ->withErrors($validator);
        }else{
               $user->name = $request->nombre;
               $user->email = $request->email;
               $user->password = hash::make($request->password);
               $user->role = $request->role;
               $user->status = $request->status;
               $user->save();
        }//else
    }