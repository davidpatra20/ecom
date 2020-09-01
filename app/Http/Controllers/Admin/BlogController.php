<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	return view('admin.blog.blog');
    }

    public function addBlog()
    {
    	return view('admin.blog.add_blog');
    }
}
