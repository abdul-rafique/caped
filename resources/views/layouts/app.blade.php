<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Caped' }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" differ></script>
</head>
<body class="font-sans antialiased">
    <div class="h-screen flex overflow-hidden">
        <!-- Sidebar -->
        <x-side-bar />

        <div class="flex flex-1 flex-col overflow-y-scroll relative">
            <!-- Topbar -->
            <x-app-bar />

            <main class="p-10">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>