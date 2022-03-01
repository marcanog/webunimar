<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StudentController extends Controller
{
    public function template(){
        return view('admin.student.receipt')->with('user', Auth::user());
    }
}
