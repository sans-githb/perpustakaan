@if ($paginator->hasPages)
    <nav class="custom-pagination">
        <ul>
            @if ($paginator->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif
        </ul>
    </nav>
    
@endif