<?php

namespace App\Http\Controllers;

use App\Role;
use App\Status;
use App\User;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        /*return view("admin.employee")->with('currentEvents', Event::get());*/
        return view ('/admin/employee')->with('employees', Employee::get())->with('roles', Role::get())->with('status', Status::get());
    }
}
