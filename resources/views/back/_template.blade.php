<!DOCTYPE html>
<html class="no-js">
@include('_head')
<body>
@include('back._header')
@include('_flash')
@yield('content')
@include('back._footer')
</body>
</html>
