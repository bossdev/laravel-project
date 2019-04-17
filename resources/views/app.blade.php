<!DOCTYPE html>
<html>
    <head>
        <title>@yield('header_title', 'Project N')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @include('layouts.header_css')
        @yield('css')
    </head>
    <body>
        @yield('menubar')
        @yield('content')
        @yield('footer')

        @include('layouts.scripts')
    </body>
</html>