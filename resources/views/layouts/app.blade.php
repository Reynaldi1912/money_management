<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
        @yield('content')

        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('layouts.js')
</body>

</html>