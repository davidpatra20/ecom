<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
    	return view('admin.video.video');
    }

    public function addVideo()
    {
    	return view('admin.video.add_video');
    }
}
