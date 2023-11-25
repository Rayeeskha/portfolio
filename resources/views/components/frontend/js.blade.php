        <!-- javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/gumshoe.js') }}"></script>
        <!-- SLIDER -->
        <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
        <!-- Lightbox -->
        <script src="{{ asset('assets/js/tobii.min.js') }}"></script>
        <script src="{{ asset('assets/js/shuffle.min.js') }}"></script>
        <!-- Feather icon -->
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>

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
        
        <script type="text/javascript">
            var url = "{{ route('changeLang') }}";
            $(".changeLanguage").change(function(){
                window.location.href = url + "?lang="+ $(this).val();
            });
        </script>

    </body>
</html>