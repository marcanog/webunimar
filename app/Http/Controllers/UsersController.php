<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Status;
use Hash;
use Auth;

class UsersController extends Controller
{
    public function index(){
        return view ('/admin/users')->with('users', User::get())->with('roles', Role::get())->with('status', Status::get());
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:10|max:255',
            'email' => 'required|email|max:255|unique:users',
            'birth' => 'required|date',
            'phone' => 'required|min:11|max:15',
            'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:8',
            'role_id' => 'required',
            'status_id' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'birth' => $request->birth,
            'phone' => $request->phone,
            'password' => hash::make($request->password),
            'role_id' => $request->role_id,
            'status_id' => $request->status_id,
        ]);
        return back()->with('Listo', 'Se ha guardado el registro satisfactoriamente');
    }

    public function create(Request $request){}

    public function show (Request $request){
        $user = Auth::user();
//        print_r($user);
//        die();
        return view ('/admin/profile')->with('user', $user);
    }

    public function update (Request $request){
        $user = User::find($request->idedit);
        $request->validate([
            'name' => 'required|min:10|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$request->idedit,
            'birth' => 'required|date',
            'phone' => 'required|min:11|max:15',
            'role_id' => 'required',
            'status_id' => 'required',
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'birth' => $request->birth,
            'phone' => $request->phone,
            'role_id' => $request->role_id,
            'status_id' => $request->status_id,
        ]);
        return back()->with('Listo', 'Se ha actualizado el registro correctamente');
    }
}
