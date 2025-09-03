<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Human Resources 2') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Boxicons -->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        
        <!-- Inline styles for debugging - temporary -->
        <style>
            .bg-primary { background-color: #2F855A; }
            .bg-primary-dark { background-color: #276749; }
            .bg-accent { background-color: #68D391; }
            .text-brown { color: #8B5E3C; }
            .bg-background { background-color: #F7FAF5; }
            .text-white { color: white; }
            .text-text-dark { color: #2D3748; }
            .text-text-muted { color: #718096; }
            .rounded-base { border-radius: 8px; }
            .shadow-card { box-shadow: 0 2px 6px rgba(0,0,0,0.08); }
        </style>
    </head>
    <body class="font-sans antialiased" x-data="{ sidebarOpen: true }">
        <x-banner />

        <div class="flex flex-col min-h-screen bg-background">
            <!-- Top Navigation - Full Width -->
            <x-top-nav />
            
            <div class="flex flex-1">
                <!-- Sidebar -->
                <x-sidebar />
                
                <!-- Main Content Area -->
                <div class="flex-1 px-4 py-6 transition-all duration-300" :class="{'ml-0': !sidebarOpen, 'ml-64': sidebarOpen}">
                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
