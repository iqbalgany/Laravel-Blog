@props(['href', 'current' => false])

@php

    if ($current) {
        # code...
        $classes = 'bg-gray-950/50 text-white';
        $ariaCurrent = 'page';
    } else {
        $classes = 'text-gray-300 hover:bg-white/5 hover:text-white';
    }
@endphp


<a href="{{ $href }}" aria-current="page"
    {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $classes, 'aria-current => $ariaCurrent']) }}>{{ $slot }}</a>
