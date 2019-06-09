<!DOCTYPE html>
<html>
    <head>
        <title>@yield('header_title', 'Project N')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="manifest" href="{{ asset('manifest.json') }}" />
        <meta name="theme-color" content="#ddd">

        @include('layouts.header_css')
        @yield('css')
    </head>
    <body>
        @yield('menubar')
        @yield('content')

        @include('layouts.scripts')
    </body>
    @yield('footer')
</html>