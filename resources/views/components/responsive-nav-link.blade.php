@props(['active'])

@php
$classes = ($active ?? false)
            ? ''
            : 'mt-1 text-decoration-none';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
