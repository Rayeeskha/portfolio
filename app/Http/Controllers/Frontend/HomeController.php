<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Blog;

class HomeController extends Controller
{
    public function __invoke(){
    	$blogs = Blog::latest()->take(3)->get();
    	return view('frontend.index', compact('blogs'));
    }

    public function urlRouting($url){
    	$blog = Blog::whereurl($url)->first();
    	$blogs = Blog::latest()->take(3)->get();
    	return view('frontend.blog.detail', compact('blog', 'blogs'));
    }

}
