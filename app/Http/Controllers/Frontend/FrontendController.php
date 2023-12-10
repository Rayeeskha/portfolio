<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class FrontendController extends Controller
{
    public function __invoke(){
    	$blogs = Blog::latest()->take(3)->get();
    	return view('frontend.front.index', compact('blogs'));
    }

    public function aboutUs(){
    	return view('frontend.front.pages.about_us');
    }

    public function services(){
    	return view('frontend.front.pages.services');
    }

    public function contactUs(){
    	return view('frontend.front.pages.contact_us');
    }

    


}
