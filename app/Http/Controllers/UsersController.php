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

   public function store(Request $request){
       $validator = validator::make($request->all(),[
            'nombre' => 'required|min:10|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:8',
            'role' => 'required|max:15',
            'status' => 'required|max:15',
            // 'create_at' => 'date',
       ]);
       if($request->hasfile('image')){
            $imguser = $request->file('image');
            $filename = time() . '.' . $imguser->getClientOriginalExtension();
            Image::make($imguser)->resize(300, 300)->save( public_path('/image/user/' . $filename) );
        }
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
               'fecha' => $request->fecha,
               //'image' => $filename,
           ]);
           return back() ->with('Listo', 'Se ha guardado satisfactoriamente');
       }
   }

   public function create(Request $request){

   }

   public function show (Request $request){
       

   }

   public function updateuser (Request $request){
        $user = User::find($id);
        if($user->image != 'user.png'){
            if(file_exists( public_path('image/users/'.$user->image))){

            }
        }
        $user->update();
        return back() ->with('Listo', 'Se ha actualizado el registro correctamente');
   }

}
