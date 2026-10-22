@props(['route', 'post' => null, 'put' => null, 'delete' => null, 'patch' => null])

@php
    $method = $post || $put || $delete || $patch ? 'post' : 'get';
@endphp

<form action="{{ $route }}" method="{{ $method }}" {{ $attributes->class(['flex flex-col gap-4']) }}>
    @csrf

    @if ($put)
        @method('PUT')
    @endif
    @if ($delete)
        @method('DELETE')
    @endif

    @if ($patch)
        @method('PATCH')
    @endif

    {{ $slot }}
</form>
