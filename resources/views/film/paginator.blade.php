@if ($paginator->hasPages())
    <ul class="pagination pagination-sm">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><span><a href="javascript:void();">«</a></span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" title="Trang trước">«</a></li>
        @endif

        @if($paginator->currentPage() > 3)
            <li class="hidden-xs"><a href="{{ $paginator->url(1) }}" title="Trang 1">1</a></li>
        @endif
        @if($paginator->currentPage() > 4)
            <li><span>...</span></li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <li class="active"><span><a href="javascript:void();" title="Trang {{ $i }}">{{ $i }}</a></span></li>
                @else
                    <li><a href="{{ $paginator->url($i) }}" title="Trang {{ $i }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li><span>...</span></li>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="hidden-xs"><a href="{{ $paginator->url($paginator->lastPage()) }}" title="Trang {{ $paginator->lastPage() }}">{{ $paginator->lastPage() }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" title="Trang tiếp">»</a></li>
        @else
            <li><span><a href="javascript:void();" title="Hết rồi">»</a></span></li>
        @endif
    </ul>
@endif
