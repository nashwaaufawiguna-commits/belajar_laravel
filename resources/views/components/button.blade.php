@if($href)
    <a href="{{ $href }}" class="{{ $buttonClass() }}" {{ $attributes }}>
        {{ $slot ?: $text }}
    </a>
@else
    <button type="{{ $type }}" class="{{ $buttonClass() }}" {{ $attributes }}>
        {{ $slot ?: $text }}
    </button>
@endif
