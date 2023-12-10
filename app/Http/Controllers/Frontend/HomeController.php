<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Blog;
use  App\Models\Contactus;
use  CustomHelper;
use App\Http\Requests\ContactUsRequest;

class HomeController extends Controller
{
    public function __invoke(){
    	$blogs = Blog::latest()->take(3)->get();
    	return view('frontend.index', compact('blogs'));
    }

    public function urlRouting($url){
    	$blog = Blog::whereurl($url)->first();
    	$blogs = Blog::latest()->take(3)->get();
    	return view('frontend.front.blog.detail', compact('blog', 'blogs'));
    }

    public function contactUs(ContactUsRequest $request){
        $input = $request->validated();
        try {
          Contactus::create($request->all());
          return response()->json(['success' => true,'message' => 'Sent Successfully !','url'=>'front'],200);
        }catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    	
    }

}
