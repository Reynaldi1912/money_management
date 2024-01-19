<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Navbar Start -->
        <!-- layouts.header ada di setiap halaman diluar folder layouts -->
        <!-- Navbar End -->


        <!-- Sidebar Start -->
        <!-- @include('layouts.sidebar') -->
        <!-- Sidebar End -->


        <!-- Content Start -->
        @yield('content')
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('layouts.js')
</body>

</html>