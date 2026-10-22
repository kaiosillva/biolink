@props(['route', 'post' => null, 'put' => null])

@php
    $method = $post || $put ? 'post' : 'get';
@endphp

<form action="{{ $route }}" method="{{ $method }}" {{ $attributes->class(['flex flex-col gap-4']) }}>
    @csrf

    @if ($put)
        @method('PUT')
    @endif

    {{ $slot }}
</form>
