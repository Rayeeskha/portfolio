<!-- HOME START-->
<section class="bg-home bg-light d-table w-100" style="background-image:url('assets/images/home/photo1.jpg')" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="title-heading mt-5">
                    <h6 class="sub-title"> {{ GoogleTranslate::trans('Looking for a Developer ', session()->get('locale')) }}</h6>
                    <h1 class="heading text-primary mb-3"> {{ GoogleTranslate::trans("I'm Rayees khan", session()->get('locale')) }}</h1>
                    <p class="para-desc text-muted"> {{ GoogleTranslate::trans("Obviously I'm Software Developer with over 4+ years of experience. Experienced with all stages of the development cycle for dynamic web projects.", session()->get('locale')) }}</p>
                    <div class="mt-4 pt-2">
                        <a href="javascript:void(0)" class="btn btn-primary rounded mb-2 me-2"> {{ GoogleTranslate::trans("Hire me", session()->get('locale')) }}</a>
                        <a href="javascript:void(0)" class="btn btn-outline-primary rounded mb-2"> {{ GoogleTranslate::trans("Download CV", session()->get('locale')) }}<i data-feather="download" class="fea icon-sm"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container--> 
    <a href="#about" data-scroll-nav="1" class="mouse-icon rounded-pill bg-transparent mouse-down">
        <span class="wheel position-relative d-block mover"></span>
    </a>
</section><!--end section-->
<!-- HOME END-->