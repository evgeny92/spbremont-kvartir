<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.header')
</head>
<body>

<div id="wrapper">

    @include('admin.partials.navigation')

    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

@include('admin.partials.scripts')

</body>
</html>
