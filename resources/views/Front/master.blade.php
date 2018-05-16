<!doctype html>
<html class="no-js" lang="">


@include('Front.inc.head')

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- header-area start -->
<!-- header-area end -->
@include('Front.inc.header')
<!-- slider-area start -->


<!-- slider-area end -->
<!-- .popular-post-area start -->
@yield('home')
<!-- tanding-post-area end -->

<!-- instagram-area start -->
@include('Front.inc.footer')
<!-- footer-area end -->
<!-- jquery latest version -->
@include('Front.inc.js')
</body>


</html>