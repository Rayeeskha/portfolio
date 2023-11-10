<!-- Projects End -->
<section class="section bg-light" id="projects">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="position-relative">
                        <h4 class="title text-uppercase mb-4">My Portfolio</h4>
                        <div>
                            <div class="title-box"></div>
                            <div class="title-line"></div>
                        </div>
                    </div>
                    <p class="text-muted mx-auto para-desc mt-5 mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div>    
    
    <div class="container">
        <div class="row mt-4 justify-content-center">
            <div class="col-12 filters-group-wrap">
                <div class="filters-group">
                    <ul class="portfolioFilter list-inline mb-0 filter-options text-center">
                        @php $proType = CustomHelper::getProjectType(); @endphp
                        @foreach($proType as $type)
                            <li class="list-inline-item categories-name border text-dark px-3 rounded active" data-group="{{ $type->id }}">{{ $type->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <!-- Gallary -->
        <div id="grid" class="row">
            @foreach($proType as $proType)
                @foreach($proType->projects as $project)
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 picture-item" data-groups='["{{ $proType->id }}"]'>
                        <div class="item-box portfolio-box rounded shadow bg-white overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img class="item-container img-fluid mx-auto" src="{{ asset(@$project->image) }}" alt="{{ $project->project_name }}" style="width: 100%;height: 200px">
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="{{ asset(@$project->image) }}" class="lightbox text-light work-icon bg-dark d-inline-block rounded-pill "><i data-feather="{{ $project->project_name }}" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallary-title py-4 text-center">
                                <h5><a href="page-portfolio-detail.html" class="title text-dark">{{ $project->project_name }}</a></h5>
                                <span>{{ $proType->name }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>

        <div class="row">
            <div class="col-lg-12 mt-4 pt-2">
                <div class="text-center">
                    <a href="#!" class="btn btn-outline-primary">More works <i data-feather="refresh-cw" class="fea icon-sm"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Projects End -->