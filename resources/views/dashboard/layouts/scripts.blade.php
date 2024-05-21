    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('admin_assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/libs/tether.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/libs/pace.min.js') }}"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('jadmin_assets/s/libs/Chart.min.js') }}"></script>

    <!-- CoreUI main scripts -->

    <script src="{{ asset('admin_assets/js/app.js') }}"></script>

    <!-- Plugins and scripts required by this views -->
    <!-- Custom scripts required by this view -->
    <script src="{{ asset('admin_assets/js/views/main.js') }}"></script>
    @yield('js')
    <!-- Grunt watch plugin -->
    {{-- <script src="//localhost:35729/livereload.js"></script> --}}
