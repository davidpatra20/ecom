<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
    	return view('admin.social.social');
    }

    public function addSocial()
    {
    	return view('admin.social.add_social');
    }
}
