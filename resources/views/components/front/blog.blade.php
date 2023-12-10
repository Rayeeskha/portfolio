<div class="container relative md:mt-24 mt-16">
<div class="grid grid-cols-1 pb-6 text-center">
   <h3 class="mb-6 md:text-2xl text-xl font-medium">Blogs & News</h3>
   <p class="text-slate-400 dark:text-white/60 max-w-xl mx-auto">
   Certainly! If you're interested in creating blog posts or news articles, it's important to tailor the content to your audience and the goals of your platform. Below is a general template that you can use as a starting point. Customize it based on your specific industry, niche, or preferences.</p>
</div>
<!--end grid-->
<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
   @foreach($blogs ?? '' as $blog)
   <div class="group">
      <div class="relative overflow-hidden rounded-xl shadow-md dark:shadow-gray-700">
         <img src="{{ asset($blog->image) }}" class="" alt="">
         <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
         <div class="absolute start-4 bottom-4 opacity-0 group-hover:opacity-100 flex items-center duration-500">
            <img src="{{ asset('frontend/assets/images/khan.jpg') }}" class="h-9 w-9 rounded-xl" alt="">
            <div class="ms-2">
               <a href="{{ route('url.routing', $blog->url ) }}" class="text-white hover:text-orange-500 text-[15px]">Khan Rayees</a>
            </div>
         </div>
      </div>
      <div class="p-4">
         <a href="{{ route('url.routing', $blog->url ) }}" class="title text-lg font-medium hover:text-orange-500 duration-500">{{ $blog->title }}</a>
         <p class="text-slate-400 dark:text-white/60 mt-3">{{ $blog->title }}</p>
         <div class="mt-3">
            <a href="{{ route('url.routing', $blog->url ) }}" class="hover:text-orange-500">Read More <i class="mdi mdi-arrow-right align-middle"></i></a>
         </div>
      </div>
   </div>
   @endforeach
   <!--end content-->
</div>
<!--end grid-->
</div>