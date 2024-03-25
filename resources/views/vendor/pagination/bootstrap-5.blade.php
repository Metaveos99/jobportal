@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between paginations">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pager">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li aria-disabled="true">
                        <a class="pager-prev" href="javascript:void(0)"></a>
                    </li>
                @else
                    <li>
                        <a class="pager-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"></a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li aria-disabled="true"><a href="javascript:void(0)"
                                class="pager-number">{{ $element }}</a></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li aria-current="page"><a class="pager-number active"
                                        href="javascript:void(0)">{{ $page }}</a></li>
                            @else
                                <li><a class="pager-number" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a class="pager-next" href="{{ $paginator->nextPageUrl() }}" rel="next"></a>
                    </li>
                @else
                    <li aria-disabled="true">
                        <a class="pager-next" href="javascript:void(0)"></a>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    {!! __('Showing') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <ul class="pager">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <a class="pager-prev disabled" href="javascript:void(0)" aria-hidden="true"></a>
                        </li>
                    @else
                        <li>
                            <a class="pager-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')"></a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li aria-disabled="true"><a href="javascript:void(0)"
                                    class="pager-number">{{ $element }}</a></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li aria-current="page"><a class="pager-number active"
                                            href="javascript:void(0)">{{ $page }}</a></li>
                                @else
                                    <li><a class="pager-number" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li>
                            <a class="pager-next" href="{{ $paginator->nextPageUrl() }}" rel="next"
                                aria-label="@lang('pagination.next')"></a>
                        </li>
                    @else
                        <li aria-disabled="true" aria-label="@lang('pagination.next')">
                            <a class="pager-next disabled" href="javascript:void(0)" aria-hidden="true"></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
