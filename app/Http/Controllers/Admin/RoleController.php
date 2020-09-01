<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
    	return view('admin.role.role');
    }

    public function addRole()
    {
    	return view('admin.role.add_role');
    }
}
