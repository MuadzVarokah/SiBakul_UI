{{-- 
fill this blade with script libraries that needs to run AFTER content
--}}
@php
    $haslib = !empty($coredata) ? !empty($coredata['lib']) : false;
@endphp

@if ($haslib) {{-- for optional libraries --}}
    @if (in_array('apexchart', $coredata['lib']))
        <script defer src="{{ asset('core/lib/apexchart/apexcharts v3.51.0.js') }}"></script>
    @endif
    @if (in_array('jspdf', $coredata['dependency']))
        <script src="{!! asset('core/lib/jspdf/jspdf 2.5.1.umd.min.js') !!}"></script>
        <script src="{!! asset('core/lib/jspdf/pollyfills/polyfills 2.5.1.umd.min.js') !!}"></script>
    @endif

    @if (in_array('leaflet', $coredata['dependency']))
        <script src="{!! asset('core/lib/jspdf/jspdf 2.5.1.umd.min.js') !!}"></script>
    @endif

    @if (in_array('qrcodejs', $coredata['dependency']))
        <script src="{!! asset('core/lib/qrcodejs/qrcodejs.min.js') !!}"></script>
    @endif

    @if (in_array('tableToExcel', $coredata['dependency']))
        <script src="{!! asset('core/lib/tableToExcel/tableToExcel.min.js') !!}"></script>
    @endif

    @if (in_array('trumbowyg', $coredata['dependency']))
        <script src="{!! asset('core/lib/trumbowyg/trumbowyg v2.27.3.min.js') !!}"></script>
    @endif

    @if (in_array('OwlCarousel', $coredata['dependency']))
        <link rel="stylesheet" href="{{ asset('core/lib/OwlCarousel2-2.3.4/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('core/lib/OwlCarousel2-2.3.4/assets/owl.carousel.min.css') }}">
        <script src="{!! asset('core/lib/OwlCarousel2-2.3.4/owl.carousel.min.js') !!}"></script>
    @endif
@endif
