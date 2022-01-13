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

            <main class="p-3 md:p-5">
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        // Sidebar opening and closing for small devices
        var sidebarContainer = document.querySelector('#sidebar');
        var sidebarTrigger = document.querySelector('#sidebar-trigger');
        var sidebarCloseTrigger = document.querySelector('#sidebar-close-trigger');

        sidebarTrigger.addEventListener('click', function(){
            sidebarContainer.classList.add('transition-transform');
            sidebarContainer.classList.add('duration-300');
            sidebarContainer.classList.remove('-translate-x-full');
        });

        sidebarCloseTrigger.addEventListener('click', function(){
            sidebarContainer.classList.add('-translate-x-full');
        });

        // Searchbox Trigger for small devices
        var searchBox = document.querySelector('#searchBox');
        var searchBoxTrigger = document.querySelector('#searchBoxTrigger');
        var searchBoxCloseTrigger = document.querySelector('#searchBoxCloseTrigger');
        var brandName = document.querySelector('#brandName');

        searchBoxTrigger.addEventListener('click', function(){
            searchBox.classList.remove('hidden');
            searchBox.classList.add('absolute', 'z-100', 'inset-x-3', 'inset-y-2');
        })

        searchBoxCloseTrigger.addEventListener('click', function(){
            searchBox.classList.add('hidden');
            searchBoxTrigger.classList.remove('hidden');
        })
    </script>
</body>
</html>