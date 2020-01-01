<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('inc.head')
</head>

<body>
    @include('inc.navbar')
    <div>
        @yield('content')
    </div>
    @include('inc.footer')

</body>

</html>