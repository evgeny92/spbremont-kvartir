<!DOCTYPE HTML>
<html>
<head>
    @include('partials.header')
</head>
<body>
<!-- banner -->
@include('partials.navigation')
<!-- banner -->

@yield('content')

<!-- footer -->
@include('partials.footer')
<!-- //footer -->

@include('partials.scripts')

</body>
</html>