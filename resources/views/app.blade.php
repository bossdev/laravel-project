<!DOCTYPE html>
<html>
    <head>
        <title>@yield('header_title', 'Project N')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @include('layouts.header_css')
    </head>
    <body>
        @include('layouts.header_menu')
        @yield('content')
        @include('layouts.footer')

        @include('layouts.scripts')
    </body>
</html>