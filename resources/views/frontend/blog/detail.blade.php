@extends('frontend.layouts.app')
@section('page_title', @$blog->title)
@section('meta_keywords',@$blog->meta_keyword)
@section('meta_description', @$blog->meta_description)
@section('container')

<!-- Home Start -->
<section class="bg-half d-table w-100" style="background: url('assets/images/home/bg-pages.jpg')center center;">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h4 class="title"> {{ @$blog->title }} </h4>
                </div>
            </div>  <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Home End -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4">
                <div class="sticky-sidebar">
                    <img src="{{ asset($blog->image) }}" class="img-fluid rounded d-block" alt="">
                    <img src="images/blog/06.jpg" class="img-fluid rounded mt-4" alt="">
                </div>
            </div>
            <!-- BLog Start -->
            <div class="col-lg-7 col-md-8 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="blog position-relative overflow-hidden shadow rounded">
                    <div class="content p-4">
                        <h6 class="font-weight-normal"><i class="mdi mdi-tag text-primary me-1"></i><a href="javscript:void(0)" class="text-primary">Photography</a></h6>
                        <p class="text-muted mt-3">{{ $blog->meta_description }} </p>
                        
                    </div>
                </div>

                {{--<div class="mt-4 pt-2 comment-area ">
                    <div class="p-4 shadow rounded">
                        <h5 class="page-title pb-3">Comments :</h5>
                        <ul class="media-list list-unstyled mb-0">
                            <li class="d-flex mt-4">
                                <a class="float-left pe-3 mt-2" href="#">
                                    <img class="img-fluid d-block mx-auto img-thumbnail rounded-circle" src="images/client/01.jpg" alt="img">
                                </a>

                                <div class="flex-1">
                                    <a href="#" class="float-right text-muted"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                    <h6 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">Lorenzo Peterson</a></h6>
                                    <small class="text-muted">26th April, 2020 at 01:25 pm</small>
                                    <p class="mt-2 bg-light font-italic media-para text-muted rounded pt-3 pb-3 ps-4 pe-3 mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                </div>
                            </li>

                            <li class="d-flex mt-4">
                                <a class="float-left pe-3 mt-2" href="#">
                                    <img class="img-fluid d-block mx-auto img-thumbnail rounded-circle" src="images/client/02.jpg" alt="img">
                                </a>

                                <div class="flex-1">
                                    <a href="#" class="float-right text-muted"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                    <h6 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">Tammy Camacho</a></h6>
                                    <small class="text-muted">26th April, 2020 at 03:55 pm</small>
                                    <p class="mt-2 bg-light font-italic media-para text-muted rounded pt-3 pb-3 ps-4 pe-3 mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                </div>
                            </li>

                            <li class="d-flex mt-4">
                                <a class="float-left pe-3 mt-2" href="#">
                                    <img class="img-fluid d-block mx-auto img-thumbnail rounded-circle" src="images/client/03.jpg" alt="img">
                                </a>

                                <div class="flex-1">
                                    <a href="#" class="float-right text-muted"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                    <h6 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">Eleanor Crisp</a></h6>
                                    <small class="text-muted">26th April, 2020 at 05:44 pm</small>
                                    <p class="mt-2 bg-light font-italic media-para text-muted rounded pt-3 pb-3 ps-4 pe-3 mb-0">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                    
                                    <div class="d-flex sub_media mt-4">
                                        <a class="float-left pe-3" href="#">
                                            <img class="img-fluid d-block mx-auto img-thumbnail rounded-circle" src="images/client/04.jpg" alt="img">
                                        </a>
                                        <div class="flex-1">
                                            <a href="#" class="float-right text-muted"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                            <h6 class="media-heading mb-0"><a href="javascript:void(0)" class="text-dark">Richard Combs</a></h6>
                                            <small class="text-muted">26th April, 2020 at 06:14 am</small>
                                            <p class="mt-2 bg-light font-italic media-para text-muted rounded pt-3 pb-3 ps-4 pe-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> --}}

                <div class="mt-4 pt-2">
                    <div class="p-4 shadow rounded">
                        <h5 class="page-title pb-3">Leave A Comment :</h5>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control border rounded" required=""></textarea>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control border rounded" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="Email" name="email" class="form-control border rounded" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="send">
                                    <button type="submit" class="btn btn-primary rounded">Send comment</button>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
            <!-- BLog End -->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="position-relative">
                        <h4 class="title text-uppercase mb-4">Related Post</h4>
                        <div>
                            <div class="title-box"></div>
                            <div class="title-line"></div>
                        </div>
                    </div>
                    <p class="text-muted mx-auto para-desc mt-5 mb-0">Obviously I'm a Web Developer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            @foreach($blogs ?? '' as $blog)
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="blog-post rounded shadow">
                    <img src="{{ asset($blog->image) }}" class="img-fluid rounded-top" alt="">
                    <div class="content pt-4 pb-4 p-3">
                        <h5 class="mb-3"><a href="{{ route('url.routing', $blog->url) }}" class="title text-dark">{{ @$blog->title }}</a></h5> 
                        <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                            <li></li>
                            <li><a href="{{ route('url.routing', $blog->url) }}" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                        </ul>
                    </div><!--end content-->
                </div><!--end blog post-->
            </div><!--end col-->
            @endforeach
        </div><!--end row-->
    </div><!--end container-->
</section>

@endsection