<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name') }}{{ " - ".$title ?? "" }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('head-scripts')
        @livewireStyles
        @yield('styles')
        <style>
            .bg-green-50 {background-color: #f0fdf4 !important}
            .bg-green-100 {background-color: #dcfce7 !important}
            .bg-green-200 {background-color: #bbf7d0 !important}
            .bg-green-300 {background-color: #86efac !important}
            .bg-green-400 {background-color: #4ade80 !important}
            .bg-green-500 {background-color: #22c55e !important}
            .bg-green-600 {background-color: #16a34a !important}
            .bg-green-700 {background-color: #15803d !important}
            .bg-green-800 {background-color: #166534 !important}
            .bg-green-900 {background-color: #14532d !important}
            .bg-green-950 {background-color: #052e16 !important}

            .text-green-50 {color: #f0fdf4 !important}
            .text-green-100 {color: #dcfce7 !important}
            .text-green-200 {color: #bbf7d0 !important}
            .text-green-300 {color: #86efac !important}
            .text-green-400 {color: #4ade80 !important}
            .text-green-500 {color: #22c55e !important}
            .text-green-600 {color: #16a34a !important}
            .text-green-700 {color: #15803d !important}
            .text-green-800 {color: #166534 !important}
            .text-green-900 {color: #14532d !important}
            .text-green-950 {color: #052e16 !important}
        </style>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js" data-navigate-track></script>
        {{-- <script>
            var myScreenOrientation = window.screen.orientation;
            myScreenOrientation.lock("portrait");
        </script> --}}
        @yield('scripts')
        <script>
            document.addEventListener('livewire:navigated', () => { 
                initFlowbite();
            })
        </script>
    </body>
</html>
