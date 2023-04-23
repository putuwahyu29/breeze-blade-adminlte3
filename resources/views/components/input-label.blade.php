@props(['value'])

<label {{ $attributes->merge(['class' => 'col-sm-2 col-form-label']) }}>
    {{ $value ?? $slot }}
</label>
