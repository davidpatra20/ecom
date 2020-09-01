<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewslatterController extends Controller
{
    public function index()
    {
    	return view('admin.newslatter.newslatter');
    }

    public function sendNews()
    {
    	return view('admin.newslatter.send_newslatter');
    }
}
