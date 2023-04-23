@php
$classes = ($active ?? false)
            ? 'active nav-link'
            : 'nav-link';
@endphp

<li class="nav-item">
<a href="{{ $href }}" class="{{ $classes }}" >
    <i class="nav-icon {{$icon}}"></i>
        <p> {{ $slot }}
            <i class="right"></i>
        </p>
</a>
</li>
