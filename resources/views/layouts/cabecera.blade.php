@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end ">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled ">
                    <a class="page-link"  aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span><span aria-hidden="true">&laquo;</span><span aria-hidden="true">&laquo;</span> Anterior 
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link bg-danger" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span><span aria-hidden="true">&laquo;</span><span aria-hidden="true">&laquo;</span> Anterior 
                    </a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item ">
                    <a class="page-link bg-success" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        Siguiente <span aria-hidden="true">&raquo;</span><span aria-hidden="true">&raquo;</span><span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link " aria-label="Next">
                        Siguiente <span aria-hidden="true">&raquo;</span><span aria-hidden="true">&raquo;</span><span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif