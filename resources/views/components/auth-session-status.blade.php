@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-sm text-success']) }}>
        {{ $status }}
    </div>
@endif
