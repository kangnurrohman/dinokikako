<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    @yield('content')

    @include('partials.footer')
    @yield('modal')
    @include('partials.js')
</body>

</html>
