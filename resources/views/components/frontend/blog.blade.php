<!-- Blog Start -->
<section class="section bg-light pb-3" id="news">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="position-relative">
                        <h4 class="title text-uppercase mb-4">Latest News & Blog</h4>
                        <div>
                            <div class="title-box"></div>
                            <div class="title-line"></div>
                        </div>
                    </div>
                    <p class="text-muted mx-auto para-desc mt-5 mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            @foreach($blogs ?? '' as $blog)
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <a href="{{ route('url.routing', $blog->url ) }}">
                    <div class="blog-post rounded shadow" style="width: 100%;height: 380px">
                        <img src="{{ asset($blog->image) }}" class="img-fluid rounded-top" alt="">
                        <div class="content pt-4 pb-4 p-3">
                            {{--<ul class="list-unstyled d-flex justify-content-between post-meta">
                                <li><i data-feather="user" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                <li><i data-feather="tag" class="fea icon-sm me-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                            </ul>  --}} 
                            <h5 class="mb-3"><a href="{{ route('url.routing', $blog->url ) }}" class="title text-dark">{{ $blog->title }}</a></h5> 
                            <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                <li></li>
                                <li><a href="{{ route('url.routing', $blog->url ) }}" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                            </ul>
                        </div><!--end content-->
                    </div><!--end blog post-->
                </a>
            </div><!--end col-->
            @endforeach
            
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid mt-100 mt-60">
        <div class="rounded-pill py-5" style="background: url('images/hireme.jpg') center center;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h4 class="text-light title-dark">I Am Available For Freelancer Projects.</h4>
                        <p class="text-white-50 mx-auto mt-4 para-desc">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <div class="mt-4">
                            <a href="#contact" class="btn btn-primary mouse-down">Hire me <i data-feather="chevron-down" class="fea icon-sm"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div><!--end div-->
    </div><!--end container fluid-->
</section><!--end section-->
<!-- Blog Start -->