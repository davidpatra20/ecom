<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
    	return view('admin.image.image');
    }

    public function addImage()
    {
    	return view('admin.image.add_image');
    }
}
