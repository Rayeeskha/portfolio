<!-- Contact Start -->
<section class="section pb-0" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <div class="position-relative">
                        <h4 class="title text-uppercase mb-4">Contact Me</h4>
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
            <div class="col-md-4 mt-4 pt-2">
                <div class="contact-detail text-center">
                    <div class="icon">
                        <i data-feather="phone" class="fea icon-md"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title text-uppercase">Phone</h5>
                        <p class="text-muted">9554540271</p>
                        <a href="tel:9554540271" class="text-primary">+91 9554540271</a>
                    </div>  
                </div>
            </div><!--end col-->
            
            <div class="col-md-4 mt-4 pt-2">
                <div class="contact-detail text-center">
                    <div class="icon">
                        <i data-feather="mail" class="fea icon-md"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title text-uppercase">Email</h5>
                        <p class="text-muted">info@khanrayees.com</p>
                        <a href="mailto:info@khanrayees.com" class="text-primary">info@khanrayees.com</a>
                    </div>  
                </div>
            </div><!--end col-->
            
            <div class="col-md-4 mt-4 pt-2">
                <div class="contact-detail text-center">
                    <div class="icon">
                        <i data-feather="map-pin" class="fea icon-md"></i>
                    </div>
                    <div class="content mt-4">
                        <h5 class="title text-uppercase">Location</h5>
                        <p class="text-muted">Khan Market, Rabindra Nagar, New Delhi, Delhi 110003 </p>
                       
                    </div>  
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->

<section class="section pt-5 mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="custom-form mb-sm-30">
                    <form method="post" class="validateForm"  action="{{ route('contact_us') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control border rounded" placeholder="First Name :">
                                        </div>
                                        <span class="text-danger Errname"></span>
                                    </div><!--end col-->
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control border rounded" placeholder="Your email :">
                                        </div> 
                                        <span class="text-danger Erremail"></span>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="subject" id="subject" class="form-control border rounded" placeholder="Your subject :">
                                        </div>                             
                                        <span class="text-danger Errsubject"></span>                                              
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea name="comments" id="comments" rows="4" class="form-control border rounded" placeholder="Your Message :"></textarea>
                                    <span class="text-danger Errcomments"></span>
                                </div>
                            </div><!--end col-->

                            <div class="col-sm-12 text-end">
                                <x-backend.preloader />
                                <button type="submit"  class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div><!--end custom-form-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- Contact End -->