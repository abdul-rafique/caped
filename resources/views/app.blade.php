<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" differ></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <x-side-bar />

        <!-- Topbar -->
        <x-app-bar />
    </div>
</body>
</html>