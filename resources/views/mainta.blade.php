<!DOCTYPE html>
<html lang="en">
<head>

    @include('partials._adminhead')


</head>
<body>

    @include('partials._adminnavtop')
    @include('partials._adminnavside')
    @include('partials._adminsearch')
    @include('partials._adminpackagepanelhead')
    @yield('admintacontent')

    @include('partials._adminrightpanel')
    @include('partials._adminfooter')
    @include('partials._adminjs')

</body>
</html>


