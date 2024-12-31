{{-- 
fill this blade with script libraries that needs to run BEFORE content
--}}
@php
    $haslib = !empty($coredata) ? !empty($coredata['lib']) : false;
@endphp

<script src="{{asset('core/lib/jquery/jquery-3.7.1.min.js')}}"></script>

@if ($haslib) {{-- for optional libraries --}}
    {{-- @if (in_array('foo', $coredata['dependency']))
        <script src="{!! asset('core/lib/bar/baz.min.js') !!}"></script>
    @endif --}}
@endif