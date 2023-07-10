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
      @include('backend.layout._script')


</body>

</html>
