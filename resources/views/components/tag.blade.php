@props(['size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 px-2 py-1 rounded-full text-xs transition-colors duration-300";

    if ($size === 'base') {
        $classes .= " text-sm";
    } elseif ($size === 'small') {
        $classes .= " text-xs";
    }

@endphp
<a href="#" class="{{ $classes }}">{{ $slot }}</a>
