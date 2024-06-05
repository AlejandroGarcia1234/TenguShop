<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

     <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/29a7a8691c.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased" x-data="{
        sidebarOpen: false,
        darkMode: false,
        toggleSidebarMenu() {
            this.sidebarOpen = !this.sidebarOpen;
        },
        toggleDarkMode() {
            this.darkMode = !this.darkMode;
            document.documentElement.classList.toggle('dark');
        }
    }" :class="{ 'dark': darkMode, 'overflow-hidden': sidebarOpen
     
}">

<div class="fixed inset-0 bg-gray-900 bg-opacity-50 z-20 sm:hidden" style="display: none" x-show="sidebarOpen" x-on:click="sidebarOpen = false">
    
</div>

    @include('layouts.partials.admin.navigation')

    @include('layouts.partials.admin.sidebar')

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            {{ $slot }}

        </div>
    </div>


    @livewireScripts
</body>

</html>
