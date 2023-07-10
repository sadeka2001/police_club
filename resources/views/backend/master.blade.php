<!doctype html>
<html lang="en">

<head>

    @include('backend.layout.head')
</head>

<body>
  
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- app header start -->
        @include('backend.layout.header')
        <!-- app header end -->

        <div class="app-main">
            <!-- app sidebar start -->
            @include('backend.layout.sidebar')
            <!-- app sidebar end -->

            <div class="app-main__outer">

                @yield('content')

                <!-- app footer start -->
                @include('backend.layout.footer')
                <!-- app footer end -->

            </div>
            {{--  <script src="https://maps.google.com/maps/api/js?sensor=true"></script>  --}}
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/scripts/main.js') }}"></script>


<!-- its for paginate and search  -->

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

<script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>

         new DataTable('#table');

    </script>

<!-- its for summernote and search  -->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    $(document).ready(function() {
        $("#mysummernote").summernote({
            height: 300,    
        });
        $('.dropdown-toggle').dropdown();
    });
</script>

</body>

</html>
