<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- Additional css files -->
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

</head>
<body class="">
    <main id="app">
        @yield('content')
    </main>

    <!-- Scripts here-->
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>
</body>

</html>