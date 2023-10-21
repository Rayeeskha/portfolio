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

        <script type="text/javascript">
            var url = "{{ route('changeLang') }}";
            $(".changeLanguage").change(function(){
                window.location.href = url + "?lang="+ $(this).val();
            });
        </script>

    </body>
</html>