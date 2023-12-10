<!--end container-->
 <div class="container relative md:mt-24 mt-16">
    <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
       <img src="{{ asset('frontend/assets/images/contact.svg') }}" alt="">
       <div class="lg:ms-5">
          <div class="bg-white dark:bg-slate-900 rounded-xl shadow dark:shadow-gray-700 p-6">
             <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>
            <form method="post" class="validateForm"  action="{{ route('contact_us') }}">
              @csrf
                <div class="grid lg:grid-cols-12 lg:gap-6">
                   <div class="lg:col-span-6 mb-5">
                      <label for="name" class="form-label font-medium">Your Name:</label>
                      <input name="name" id="name" type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded-xl outline-none focus:border-orange-500/50 dark:focus:border-orange-500/50 focus:ring-0 mt-2" placeholder="Name :">

                      <span class="text-danger Errname"></span>
                   </div>
                   <div class="lg:col-span-6 mb-5">
                      <label for="email" class="form-label font-medium">Your Email:</label>
                      <input name="email" id="email" type="email" class="form-input w-full py-2 px-3 h-10 bg-transparent border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded-xl outline-none focus:border-orange-500/50 dark:focus:border-orange-500/50 focus:ring-0 mt-2" placeholder="Email :">

                      <span class="text-danger Erremail"></span>
                   </div>
                </div>
                <div class="grid grid-cols-1">
                   <div class="mb-5">
                      <label for="subject" class="form-label font-medium">Your Question:</label>
                      <input name="subject" id="subject" class="form-input w-full py-2 px-3 h-10 bg-transparent border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded-xl outline-none focus:border-orange-500/50 dark:focus:border-orange-500/50 focus:ring-0 mt-2" placeholder="Subject :">

                      <span class="text-danger Errsubject"></span>
                   </div>
                   <div class="mb-5">
                      <label for="comments" class="form-label font-medium">Your Comment:</label>
                      <textarea name="comments" id="comments" class="form-input w-full py-2 px-3 bg-transparent border border-inherit dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 rounded-xl outline-none focus:border-orange-500/50 dark:focus:border-orange-500/50 focus:ring-0 mt-2 textarea h-28" placeholder="Message :"></textarea>

                      <span class="text-danger Errcomments"></span>
                   </div>
                </div>
                <x-backend.preloader />
                <button type="submit"  class="py-2 px-5 inline-block font-normal tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-orange-500 hover:bg-orange-600 border-orange-500 hover:border-orange-600 text-white rounded-xl">Send Message</button>
            </form>
          </div>
       </div>
    </div>
 </div>
 <!--end container-->
</section>