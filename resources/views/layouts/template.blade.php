<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts.head')
    @include('layouts.styles')
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>