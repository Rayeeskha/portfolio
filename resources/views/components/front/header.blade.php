<nav id="topnav" class="defaultscroll is-sticky">
 <div class="container relative">
    <!-- Logo container-->
    <a class="logo" href="/">
    <img src="{{ asset('frontend/assets/images/logo.png') }}" class="h-5 inline-block dark:hidden" alt="" style="height: 3.25rem !important;width: 100px">

    <img src="{{ asset('frontend/assets/images/logo.png') }}" class="h-5 hidden dark:inline-block" alt="" style="height: 3.25rem !important; width: 200px">
    </a>
    <!-- End Logo container-->
    <!-- Start Mobile Toggle -->
    <div class="menu-extras">
       <div class="menu-item">
          <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
             <div class="lines">
                <span></span>
                <span></span>
                <span></span>
             </div>
          </a>
       </div>
    </div>
    <!-- End Mobile Toggle -->
    <!--Login button Start-->
    <ul class="buy-button list-none mb-0">
       <li class="inline mb-0">
          <a href="#" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[15px] text-center rounded-xl bg-orange-500 hover:bg-orange-600 border border-orange-500 hover:border-orange-600 text-white"><i data-feather="dribbble" class="h-[14px] w-[14px] align-middle" title="dribbble"></i></a>
       </li>
       <li class="inline mb-0">
          <a href="#" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[15px] text-center rounded-xl bg-orange-500 hover:bg-orange-600 border border-orange-500 hover:border-orange-600 text-white"><i data-feather="linkedin" class="h-[14px] w-[14px] align-middle" title="dribbble"></i></a>
       </li>
       <li class="inline mb-0">
          <a target="_blank" href="https://github.com/Rayeeskha" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[15px] text-center rounded-xl bg-orange-500 hover:bg-orange-600 border border-orange-500 hover:border-orange-600 text-white"><i data-feather="github" class="h-[14px] w-[14px] align-middle" title="dribbble" ></i></a>
       </li>
    </ul>
    <!--Login button End-->
    <div id="navigation">
       <!-- Navigation Menu-->   
       <ul class="navigation-menu justify-end">
          <li class="has-submenu parent-menu-item">
             <a href="/">Home</a>
          </li>
          <li><a href="{{ route('about_us') }}" class="sub-menu-item">About Us</a></li>
          <li><a href="{{ route('services') }}" class="sub-menu-item">Services </a></li>
          <li class="has-submenu parent-parent-menu-item">
             <a href="javascript:void(0)">Portfolio</a>
          </li>
          <li class="has-submenu parent-menu-item">
             <a href="{{ route('blog') }}">Blog</a>
          </li>
          <li><a href="{{ route('home.contact_us') }}" class="sub-menu-item">Contact Us</a></li>
       </ul>
       <!--end navigation menu-->
    </div>
    <!--end navigation-->
 </div>
 <!--end container-->
</nav>