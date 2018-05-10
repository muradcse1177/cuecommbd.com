<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') | Website Management</title>
    </head>
    <body class="theme-red">
        @section('header')
            @include('layout_back.header')
        @show

        @section('topbar')
            @include('layout_back.topbar')
        @show

        @section('sidebar')
            @include('layout_back.sidebar')
        @show

        @yield('content')

        @section('footer')
            @include('layout_back.footer')
        @show
    </body>
</html>