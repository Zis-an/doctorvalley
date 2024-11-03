<ul class="pagination">
    <!-- Previous Page Link -->
    @if ($items->onFirstPage())
        <li class="page-item disabled">
            <a href="#" class="btn-previous" aria-label="Previous">
                <span aria-hidden="true">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                        <path d="M22 23.2375L16.4372 17.5L22 11.7625L20.2874 10L13 17.5L20.2874 25L22 23.2375Z" fill="black" />
                    </svg>
                </span>
            </a>
        </li>
    @else
        <li class="page-item">
            <a href="{{ $items->previousPageUrl() }}" class="btn-previous" aria-label="Previous">
                <span aria-hidden="true">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                        <path d="M22 23.2375L16.4372 17.5L22 11.7625L20.2874 10L13 17.5L20.2874 25L22 23.2375Z" fill="black" />
                    </svg>
                </span>
            </a>
        </li>
    @endif

    <ul class="pagination-list">
        @if ($items->lastPage() > 5)
            @for ($i = 1; $i <= 3; $i++)
                <li class="page-item {{ $items->currentPage() == $i ? 'active' : '' }}">
                    <a href="{{ $items->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endfor

            @if ($items->currentPage() > 4)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif

            @for ($i = max(4, $items->currentPage() - 1); $i <= min($items->currentPage() + 1, $items->lastPage() - 1); $i++)
                <li class="page-item {{ $items->currentPage() == $i ? 'active' : '' }}">
                    <a href="{{ $items->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endfor

            @if ($items->currentPage() < $items->lastPage() - 2)
                <li class="page-item disabled"><span class="page-link">...</span></li>
            @endif

            <li class="page-item {{ $items->currentPage() == $items->lastPage() ? 'active' : '' }}">
                <a href="{{ $items->url($items->lastPage()) }}" class="page-link">{{ $items->lastPage() }}</a>
            </li>
        @else
            @for ($i = 1; $i <= $items->lastPage(); $i++)
                <li class="page-item {{ $items->currentPage() == $i ? 'active' : '' }}">
                    <a href="{{ $items->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endfor
        @endif
    </ul>

    <!-- Next Page Link -->
    @if ($items->hasMorePages())
        <li class="page-item">
            <a href="{{ $items->nextPageUrl() }}" class="btn-next" aria-label="Next">
                <span aria-hidden="true">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                        <path d="M13 11.7625L18.5628 17.5L13 23.2375L14.7126 25L22 17.5L14.7126 10L13 11.7625Z" fill="black" />
                    </svg>
                </span>
            </a>
        </li>
    @else
        <li class="page-item disabled">
            <a href="#" class="btn-next" aria-label="Next">
                <span aria-hidden="true">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17.5" cy="17.5" r="17.5" fill="white" />
                        <path d="M13 11.7625L18.5628 17.5L13 23.2375L14.7126 25L22 17.5L14.7126 10L13 11.7625Z" fill="black" />
                    </svg>
                </span>
            </a>
        </li>
    @endif
</ul>
