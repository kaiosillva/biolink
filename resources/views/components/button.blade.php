@props([
    'href' => null,
    'block' => null,
    'outline' => null,
    'info' => null,
    'ghost' => null,
    'primary' => null,
])

@php
    $tag = $href ? 'a' : 'button';
@endphp
<{{ $tag }} {{ $href ? "href=$href" : '' }}
    {{ $attributes->class([
        'btn btn-primary' => $primary,
        'btn btn-wide' => $block,
        'btn btn-outline' => $outline,
        'btn btn-info' => $info,
        'btn btn-ghost' => $ghost,
    ]) }}>
    {{ $slot }}
    </{{ $tag }}>
