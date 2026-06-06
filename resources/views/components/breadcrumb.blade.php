<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        @forelse($items as $item)
            @if($loop->last)
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $item['label'] }}
                </li>
            @else
                <li class="breadcrumb-item">
                    @if(isset($item['url']))
                        <a href="{{ $item['url'] }}" class="text-decoration-none">
                            {{ $item['label'] }}
                        </a>
                    @else
                        {{ $item['label'] }}
                    @endif
                </li>
            @endif
        @empty
            <li class="breadcrumb-item active">Home</li>
        @endforelse
    </ol>
</nav>
