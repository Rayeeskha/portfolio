@extends('frontend.front.layouts.app')
@section('page_title',@$blog->title)
@section('meta_keywords',@$blog->title)
@section('meta_description', @$blog->title)
@section('container')

<section class="relative pt-40 md:pb-24 pb-16">
    <div class="container relative">
        <div class="md:flex justify-center mt-6">
            <div class="lg:w-full">
                <div class="relative">
                    <center><img src="{{ asset($blog->image) }}" class="rounded-xl shadow-md dark:shadow-gray-800" alt=""></center>
                    <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                            class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-orange-500">
                            <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:flex justify-center mt-6">
            <div class="lg:w-3/5">
                <p class="text-slate-400 dark:text-white/60 text-[15px]">{{ $blog->title }}</p>
                <p class="text-slate-400 dark:text-white/60 text-[15px] mt-4">{{ $blog->meta_keyword }}</p>
                <p class="text-slate-400 dark:text-white/60 text-[15px] mt-4">{{ $blog->meta_description }}</p>
            </div>
        </div>
    </div><!--end container-->

    <!-- Contact us -->
   <x-front.frontcontactus />

</section><!--end section-->

@endsection