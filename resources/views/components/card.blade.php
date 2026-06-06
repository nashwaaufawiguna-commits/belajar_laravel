<div class="card shadow-sm" {{ $attributes }}>
    @isset($title)
        <div class="card-header bg-light">
            <h5 class="mb-0">{{ $title }}</h5>
        </div>
    @endisset

    <div class="card-body">
        {{ $slot }}
    </div>

    @isset($footer)
        <div class="card-footer bg-light border-top">
            {{ $footer }}
        </div>
    @endisset
</div>
