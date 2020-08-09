@if (isset($location_id))
    {{ $location_id }}
@endif
@if ($paginator->lastPage() > 1)
    <ul class="pagination list-inline text-secondary justify-content-center">
        <li class="list-inline-item mr-3">
            <button class="prev-button btn p-0 fs-10" onclick="pagination_action('{{ $paginator->url($paginator->currentPage()-1) }}')">
                <i class="fas fa-chevron-left"></i>
            </button>
        </li>
        @if ($paginator->lastPage() <= 7)
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="list-inline-item page-item d-flex flex-wrap mx-2 {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                <button class="btn p-0 my-auto" onclick="pagination_action('{{ $paginator->url($i) }}')">{{ $i }}</button>
            </li>
            @endfor
        @else
            @for ($i = 1; $i <= 6; $i++)
                <li class="list-inline-item page-item d-flex flex-wrap mx-2 {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <button class="btn p-0 my-auto" onclick="pagination_action('{{ $paginator->url($i) }}')">{{ $i }}</button>
                </li>
            @endfor
            <li class="list-inline-item page-item d-flex flex-wrap mx-2">
                <span class="my-auto">&hellip;</span>
            </li>
            <li class="list-inline-item page-item d-flex flex-wrap mx-2">
                <a class="my-auto" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
            </li>
        @endif
        

        <li class="list-inline-item ml-3">
            
            <button class="next-button btn p-0 fs-10" onclick="pagination_action('{{ $paginator->url($paginator->currentPage()+1) }}')">
                <i class="fas fa-chevron-right"></i>
            </button>
        </li>
    </ul>
@endif

{{-- {{ $paginator }} --}}