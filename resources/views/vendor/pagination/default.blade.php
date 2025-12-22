@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="mt-4 text-sm leading-5">
        <ul class="flex items-center justify-center space-x-1 not-prose">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="inline-flex items-center px-3 py-1 text-gray-400 bg-gray-100 rounded cursor-not-allowed select-none">‹</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex items-center px-3 py-1 text-blue-600 bg-gray-100 rounded hover:bg-gray-200">‹</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>
                        <span class="inline-flex items-center px-3 py-1 text-gray-400 select-none">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span class="inline-flex items-center px-3 py-1 text-white bg-blue-600 rounded select-none">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="inline-flex items-center px-3 py-1 text-blue-600 bg-gray-100 rounded hover:bg-gray-200">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex items-center px-3 py-1 text-blue-600 bg-gray-100 rounded hover:bg-gray-200">›</a>
                </li>
            @else
                <li>
                    <span class="inline-flex items-center px-3 py-1 text-gray-400 bg-gray-100 rounded cursor-not-allowed select-none">›</span>
                </li>
            @endif
        </ul>
    </nav>
@endif