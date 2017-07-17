<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //
    public function index()
    {
    	return view ('home.user.article');
    }

    public function addarticle()
    {	
    	$data = \DB::table('column')->get();
    	return view ('home.user.addarticle',['data'=>$data]);
    }
}
