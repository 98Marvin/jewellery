<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('layouts.top')

<body>

    <!--== Header Area Start ==-->
    @include('layouts.header')

    <!--== Header Area End ==-->

    <!--== Search Box Area Start ==-->
    @include('layouts.search')
    <!--== Search Box Area End ==-->
    @yield('content')
    <!-- Footer Area Start -->
    @include('layouts.footer')

    <!-- Footer Area End -->

    <!-- Scroll to Top Start -->
    <a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
    <!-- Scroll to Top End -->


    @include('layouts.bottom')
</body>

</html>
