@extends('frontend.front.layouts.app')
@section('page_title','Services')
@section('meta_keywords','Services')
@section('meta_description', 'Services')
@section('container')

<section class="relative table w-full py-32 lg:py-40 bg-[url('../../frontend/assets/images/portfolio/bg-inner.html')] bg-no-repeat bg-top bg-cover">
   <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/80 to-black"></div>
   <div class="container relative">
      <div class="grid grid-cols-1 pb-8 text-center mt-10">
         <h3 class="text-3xl leading-normal font-medium text-white">Services</h3>
      </div>
      <!--end grid-->
   </div>
   <!--end container-->
   <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
      <ul class="tracking-[0.5px] mb-0 inline-block">
         <li class="inline-block capitalize text-[14px] duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Khan Rayees</a></li>
         <li class="inline-block text-[18px] text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right align-middle"></i></li>
         <li class="inline-block capitalize text-[14px] duration-500 ease-in-out text-white" aria-current="page">Services</li>
      </ul>
   </div>
</section>

<!-- What we do -->
<x-front.what-we-do />
<!-- Review -->
<x-front.review />

<!-- Contact us -->
<x-front.frontcontactus />

@endsection