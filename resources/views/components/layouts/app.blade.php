<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ config('app.name') }}{{ " - ".$title ?? "" }}</title>

        {{-- <script src="{{ mix('js/livewire.js') }}"></script> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- @vite('resources/css/app.css') --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('head-scripts')
        @livewireStyles
        @yield('styles')
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
