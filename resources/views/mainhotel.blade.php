<!DOCTYPE html>
<html lang="en">
<head>

    @include('partials._adminhead')


</head>
<body>

    @include('partials._adminnavtop')
    @include('partials._adminhotelnavside')

    @yield('adminhotelcontent')


    @include('partials._adminfooter')
    @include('partials._adminjs')

</body>
</html>


