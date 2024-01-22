<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
        @yield('content')

        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- Footer End -->

    @include('layouts.js')
</body>

</html>