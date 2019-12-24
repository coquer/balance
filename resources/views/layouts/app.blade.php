<!DOCTYPE html>
<html lang="he">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="windows-1255">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#FFFFFF">
    <link rel="shortcut icon" href="{{asset('storage/icons/favicon.ico')}}" type="image/x-icon">
    @yield('meta-description')
    <title>@yield('title')</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
    <div id="app">
        @include('partials.navbar')
        <main class="container">
            @include('partials.typesBar')
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    <script src="{{ mix('js/app.js') }}" ></script>
     @yield('js')
</body>
</html>
