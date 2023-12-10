<div class="container relative md:mt-24 mt-16">
<div class="grid grid-cols-1 pb-6 text-center">
   <h3 class="mb-6 md:text-2xl text-xl font-medium">Our Projects</h3>
   <p class="text-slate-400 dark:text-white/60 max-w-xl mx-auto">
   It seems like you want to discuss or provide information about your projects. If you could share more details or specific questions related to your projects, I'd be happy to assist. Here are some common aspects to consider when discussing projects.</p>
</div>
<!--end grid-->
<div class="grid grid-cols-1 items-center mt-6 gap-6">
   <div class="filters-group-wrap text-center">
      <div class="filters-group">
         <ul class="mb-0 list-none container-filter filter-options space-x-3">
            @php $proType = CustomHelper::getProjectType(); @endphp
            @foreach($proType as $type)
            <li class="inline-block font-medium text-[15px] mb-3 text-slate-400 cursor-pointer relative duration-500 active" data-group="{{ $type->id }}">{{ $type->name }}</li>
            @endforeach
         </ul>
      </div>
   </div>
</div>
<!--grid-->
<div id="grid" class="md:flex w-full justify-center mx-auto mt-4">
   @foreach($proType as $proType)
      @foreach($proType->projects as $project)
      <div class="lg:w-1/4 md:w-1/3 p-3 picture-item" data-groups='["{{ $proType->id }}"]'>
         <div class="group relative block rounded-xl duration-700 ease-in-out">
            <div class="relative overflow-hidden rounded-xl">
               <a href="{{ asset(@$project->image) }}" class="lightbox" title="">
               <img src="{{ asset(@$project->image) }}" class="rounded-xl" alt="">
               </a>
            </div>
            <div class="content duration-700 ease-in-out">
               <div class="bg-white dark:bg-slate-900 p-4 rounded-xl absolute z-10 bottom-3 start-3 duration-700 ease-in-out scale-0 group-hover:scale-100">
                  <a href="portfolio-detail-three.html" class="h6 text-[15px] font-medium hover:text-orange-500 duration-500 ease-in-out">{{ $proType->name }}</a>
                  <p class="text-slate-400 dark:text-white/60 mb-0">{{ $project->project_name }}</p>
               </div>
            </div>
            <div class="absolute inset-0 bg-orange-500 rounded-xl group-hover:-mt-[10px] group-hover:-ms-[10px] h-[98%] w-[98%] duration-700 -z-1"></div>
         </div>
      </div>
      @endforeach
   @endforeach
</div>
</div>