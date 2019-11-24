<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', '') }} - @yield('title')</title>
    @include('layouts.header')
    @yield('head')
    @include('layouts.navbar')
	
</head>
<body>
<div class="wrapper">
	@include('layouts.sidebar')
    @yield('content')
</div>
@include('layouts.footer')
@yield('foot')

</body>
</html>
