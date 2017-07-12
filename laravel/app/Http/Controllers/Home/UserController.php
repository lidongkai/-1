<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index()
    {
    	return view('home.user.index');
    }

    public function show(Request $request)
    {
    	 $data = $request->except('_token','remember_token');

    }
}

