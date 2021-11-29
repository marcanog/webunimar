<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UsersController extends Controller
{
    public function index(){
        return view ('/admin/users')->with('usuarios', User::get());
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:10|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:8',
            'role_id' => 'required',
            'status_id' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'role_id' => $request->role_id,
            'status_id' => $request->status_id,
        ]);
        return back()->with('Listo', 'Se ha guardado el registro satisfactoriamente');
    }

    public function create(Request $request){}

    public function show (Request $request){}

    public function update (Request $request){
        $user = User::find($request->idedit);
        $request->validate([
            'name' => 'required|min:10|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$request->idedit,
            'role_id' => 'required',
            'status_id' => 'required',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'status_id' => $request->status_id,
        ]);
        return back()->with('Listo', 'Se ha actualizado el registro correctamente');
    }
}
