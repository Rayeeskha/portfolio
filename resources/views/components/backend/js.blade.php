    <!-- </div> -->
    <!-- END layout-wrapper -->
    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>


    <!-- apexcharts -->
    <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>


    <!-- Swiper Js -->
    <script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- CRM js -->
    <script src="{{ asset('backend/assets/js/pages/dashboard-crypto.init.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('backend/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('backend/assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

     <script src="{{ asset('backend/assets/js/pages/form-wizard.init.js') }}"></script>
    
    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>


    <script src="{{ asset('backend/assets/js/common/validation.js') }}"></script> 
    <script src="{{ asset('backend/assets/js/common/validate.min.js') }}"></script> 

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Toaster Js Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>let ajax = '{{ url('/') }}'</script>
    <!-- Custom js -->
    <script src="{{ asset('backend/assets/js/common/common_setup.js') }}"></script>
    <script src="{{ asset('backend/assets/js/common/backend.js') }}"></script>


    <script type="text/javascript">
    @if(session('warning'))
        toastr.error("{{ session('warning') }}");
        swal("", "{{ session('warning') }}", "warning");
    @endif
</script>

</body>
</html>