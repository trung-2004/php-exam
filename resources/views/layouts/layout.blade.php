<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('html.head')
</head>

<body>

<!-- Header Section Begin -->
@include('html.header')
<!-- Header Section End -->

@yield('main')

<!-- Footer Section Begin -->
@include('html.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->
@include('html.scripts')

</body>

</html>
