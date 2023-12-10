        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- JAVASCRIPTS -->
        <script src="{{ asset('frontend/assets/libs/shufflejs/shuffle.min.js') }}"></script>
        
        <script src="{{ asset('frontend/assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
        <!-- JAVASCRIPTS -->

         <!-- Common Js Setup -->
        <script src="{{ asset('backend/assets/js/common/validation.js') }}"></script> 
        <script src="{{ asset('backend/assets/js/common/validate.min.js') }}"></script> 

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- Toaster Js Link -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script>let ajax = '{{ url('/') }}'</script>
        <!-- Custom js -->
        <script src="{{ asset('backend/assets/js/common/common_setup.js') }}"></script>
        <!-- Common Js Setup -->
    </body>
</html>