@extends('frontend.front.layouts.app')
@section('page_title','Blog')
@section('meta_keywords','Blog')
@section('meta_description', 'Blog')
@section('container')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-[url('../../assets/images/portfolio/bg-inner.html')] bg-no-repeat bg-top bg-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/80 to-black"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center mt-10">
            <h3 class="text-3xl leading-normal font-medium text-white">Blogs & News</h3>
        </div><!--end grid-->
    </div><!--end container-->
    
    <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
        <ul class="tracking-[0.5px] mb-0 inline-block">
           <li class="inline-block capitalize text-[14px] duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Khan Rayees</a></li>
           <li class="inline-block text-[18px] text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right align-middle"></i></li>
            <li class="inline-block capitalize text-[14px] duration-500 ease-in-out text-white" aria-current="page">Blogs</li>
        </ul>
    </div>
</section><!--end section-->
<div class="relative">
    <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
        <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- End Hero -->

<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container relative">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
        	@foreach($blogs ?? '' as $blog)
            <div class="group">
                <div class="relative overflow-hidden rounded-xl shadow-md dark:shadow-gray-700">
                    <img src="{{ asset($blog->image) }}" class="" alt="">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute start-4 bottom-4 opacity-0 group-hover:opacity-100 flex items-center duration-500">
                        <img src="{{ asset($blog->image) }}" class="h-9 w-9 rounded-xl" alt="">
                        <div class="ms-2">
                            <a href="{{ route('url.routing', $blog->url ) }}" class="text-white hover:text-orange-500 text-[15px]">{{ $blog->title }}</a>
                            
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <a href="blog-detail.html" class="title text-lg font-medium hover:text-orange-500 duration-500">{{ $blog->title }}</a>
                    <p class="text-slate-400 dark:text-white/60 mt-3">{{ $blog->meta_keyword }}</p>
                    
                    <div class="mt-3">
                        <a href="{{ route('url.routing', $blog->url ) }}" class="hover:text-orange-500">Read More <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end content-->
            @endforeach

        </div><!--end grid-->

    </div><!--end container-->

</section><!--end section-->
<!-- End Section-->

@endsection