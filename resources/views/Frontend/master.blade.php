{{--This is the master layout for Frontend--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('Frontend.inc.head')
</head>

<body>
@include('Frontend.inc.navbar')
<div>
    @yield('content')
</div>
@include('Frontend.inc.footer')

</body>

</html>
