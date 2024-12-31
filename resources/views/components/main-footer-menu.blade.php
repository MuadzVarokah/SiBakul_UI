@props(['active' => false])

@php
     $dataActive = ($active ?? false) ? "true" : "false";
     $footerMenuClasses = "inline-flex flex-col items-center justify-center px-5 text-lg text-gray-500 dark:text-gray-400 hover:text-green-700 dark:hover:text-green-600 hover:bg-gray-50 data-[active=true]:bg-gray-50 data-[active=true]:text-green-700";
@endphp

<a wire:navigate data-active="{{ $dataActive }}" {{ $attributes->merge(['class' => $footerMenuClasses]) }}>
     {{ $slot }}
</a>