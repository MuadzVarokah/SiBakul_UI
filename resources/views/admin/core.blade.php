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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

            <!-- css Dependencies -->
        <link rel="stylesheet" href="{{ asset('core/lib/bootstrap-icons-1.11.3/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('core/lib/sweetalert2/sweetalert2 v11.10.7.min.css') }}">
        <link rel="stylesheet" href="{{ asset('core/css/admin.css') }}">
    </head>

    <body class="font-sans text-gray-900 antialiased">
        @includeIf('admin.library.pre-content-lib')
        <div class="min-h-screen block pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div class="w-full">
                <livewire:admin.navbar.generic.nav-generic00 class="sticky top-0"/>
            </div>
            {{-- <div>
                <a href="{{route('landing')}}" wire:navigate>
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> --}}
            
            <div class="flex justify-center">
                <div class="w-[90%] mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    @yield('blade')
                </div>
            </div>
        </div>
        @includeIf('admin.library.post-content-lib')
    </body>
</html>
