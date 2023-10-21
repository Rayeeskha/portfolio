<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" height="20" class="d-block mx-auto" alt="">
        </div>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navbar Start -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/images/logo.png') }}" class="logo-light-mode" alt="">
            <img src="{{ asset('assets/images/logo-light.png') }}" class="logo-dark-mode" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span data-feather="menu" class="fea icon-md"></span>
        </button><!--end button-->

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul id="navbar-navlist" class="navbar-nav navbar-nav-link mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"> {{ GoogleTranslate::trans('Home', session()->get('locale')) }}</a>
                </li><!--end nav item-->
                <li class="nav-item">
                    <a class="nav-link" href="#services"> {{ GoogleTranslate::trans('Services', session()->get('locale')) }}</a>
                </li><!--end nav item-->
                <li class="nav-item">
                    <a class="nav-link" href="#resume"> {{ GoogleTranslate::trans('Resume', session()->get('locale')) }}</a>
                </li><!--end nav item-->
                <li class="nav-item">
                    <a class="nav-link" href="#projects"> {{ GoogleTranslate::trans('Projects', session()->get('locale')) }}</a>
                </li><!--end nav item-->
                <li class="nav-item">
                    <a class="nav-link" href="#news"> {{ GoogleTranslate::trans('Blog', session()->get('locale')) }}</a>
                </li><!--end nav item-->
                <li class="nav-item">
                    <a class="nav-link" href="#contact"> {{ GoogleTranslate::trans('Contact', session()->get('locale')) }}</a>
                </li>
            </ul>

            <ul class="list-unstyled mb-0 mt-2 mt-sm-0 social-icon">
                <li class="list-inline-item">
                    <select class="form-select changeLanguage">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="hi" {{ session()->get('locale') == 'hi' ? 'selected' : '' }}>Hindi</option>
                        <!-- <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arbic</option> -->
                    </select>
                </li>
                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
            </ul>
        </div> 
    </div><!--end container-->
</nav><!--end navbar-->
<!-- Navbar End -->

