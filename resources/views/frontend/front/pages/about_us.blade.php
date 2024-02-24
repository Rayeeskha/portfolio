@extends('frontend.front.layouts.app')
@section('page_title','About us')
@section('meta_keywords','About us')
@section('meta_description', 'About us')
@section('container')
<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-40 bg-[url('../../frontend/assets/images/portfolio/bg-inner.html')] bg-no-repeat bg-top bg-cover">
   <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/80 to-black"></div>
   <div class="container relative">
      <div class="grid grid-cols-1 pb-8 text-center mt-10">
         <h3 class="text-3xl leading-normal font-medium text-white">About Us</h3>
      </div>
      <!--end grid-->
   </div>
   <!--end container-->
   <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
      <ul class="tracking-[0.5px] mb-0 inline-block">
         <li class="inline-block capitalize text-[14px] duration-500 ease-in-out text-white/50 hover:text-white"><a href="/">Khan Rayees</a></li>
         <li class="inline-block text-[18px] text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right align-middle"></i></li>
         <li class="inline-block capitalize text-[14px] duration-500 ease-in-out text-white" aria-current="page">About Us</li>
      </ul>
   </div>
</section>
<!--end section-->
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
      <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 gap-10 items-center">
         <div class="lg:col-span-5">
            <div class="relative">
               <img src="{{ asset('frontend/assets/images/profile.PNG') }}" class="rounded-lg shadow-lg relative" alt="">
            </div>
         </div>
         <!--end col-->
         <div class="lg:col-span-7">
            <div class="lg:ms-7">
               <h3 class="mb-4 md:text-2xl text-xl font-medium">About Us: Khan Rayees</h3>
               <p class="text-slate-400 dark:text-white/60 max-w-2xl mx-auto">Welcome to the world of software development, where creativity meets functionality, and innovation knows no bounds. At Khan Rayees, we are a dynamic team of software developers passionate about translating ideas into powerful, efficient, and user-friendly applications.</p><br>
               <h1  class="mb-4 md:text-2xl text-xl font-medium">Our Expertise:</h1>

               <p>
               	<span class="mb-4 md:text-2xl text-xl font-medium">Web Development: </span>Crafting responsive and dynamic web applications that bring ideas to life on the digital stage.
               </p>
               <p>
				<span class="mb-4 md:text-2xl text-xl font-medium">Mobile App Development:</span>  From iOS to Android, we specialize in creating mobile experiences that captivate users on the go.
				<p><span class="mb-4 md:text-2xl text-xl font-medium">Database Management: </span> Structuring, optimizing, and managing data to ensure the backbone of your software is robust and scalable.
				<p><span class="mb-4 md:text-2xl text-xl font-medium">Software Architecture:</span>Designing the blueprint for software systems that stand the test of time.</p>
            </div>
         </div>
         <!--end col-->
      </div>
      <!--end grid-->
   </div>
   <!--end container-->
   <!-- What we do -->
   <x-front.what-we-do />
   <!-- Review -->
   <x-front.review />
   <!-- Team mates -->
   <x-front.team-mates />
   <!-- Contact us -->
   <x-front.frontcontactus />
   
   <!--end container-->
</section>
<!--end section-->
<!-- End Section-->
@endsection