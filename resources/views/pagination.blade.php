@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            @php
                $start = $paginator->currentPage() - 1; // show 2 pagination links before current
                $end = $paginator->currentPage() + 1; // show 2 pagination links after current
                if($start < 1) {
                    $start = 1; // reset start to 1
                    $end += 1;
                }
                if($end >= $paginator->lastPage() ) $end = $paginator->lastPage(); // reset end to last page
            @endphp

            {{-- Pagination Elements --}}
            {{--            @foreach ($elements as $element)--}}
            {{--                --}}{{-- "Three Dots" Separator --}}
            {{--                @if (is_string($element))--}}
            {{--                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>--}}
            {{--                @endif--}}

            {{--                --}}{{-- Array Of Links --}}
            {{--                @if (is_array($element))--}}
            {{--                    @foreach ($element as $page => $url)--}}
            {{--                        @if ($page == $paginator->currentPage())--}}
            {{--                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>--}}
            {{--                        @else--}}
            {{--                            <li><a href="{{ $url }}">{{ $page }}</a></li>--}}
            {{--                        @endif--}}
            {{--                    @endforeach--}}
            {{--                @endif--}}
            {{--            @endforeach--}}
            @if($start > 1)
                <li>
                    <a href="{{ $paginator->url(1) }}">{{1}}</a>
                </li>
                @if($paginator->currentPage() != 4)
                    {{-- "Three Dots" Separator --}}
                    <li class="disabled" aria-disabled="true"><span>...</span></li>
                @endif
            @endif
            @for ($i = $start; $i <= $end; $i++)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    @if($paginator->currentPage() == $i)
                        <span>{{$i}}</span>
                    @else
                        <a href="{{ $paginator->url($i) }}">{{$i}}</a>
                    @endif
                </li>
            @endfor
            @if($end < $paginator->lastPage())
                @if($paginator->currentPage() + 3 != $paginator->lastPage())
                    {{-- "Three Dots" Separator --}}
                    <li class="disabled" aria-disabled="true"><span>...</span></li>
                @endif
                <li>
                    <a href="{{ $paginator->url($paginator->lastPage()) }}">{{$paginator->lastPage()}}</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
