@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="mt-4">
        <div class="flex items-center justify-between">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 rounded cursor-not-allowed">
                    {{ __('Previous') }}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-4 py-2 text-sm font-medium text-blue-600 bg-gray-100 rounded hover:bg-gray-200">
                    {{ __('Previous') }}
                </a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-4 py-2 text-sm font-medium text-blue-600 bg-gray-100 rounded hover:bg-gray-200">
                    {{ __('Next') }}
                </a>
            @else
                <span class="px-4 py-2 text-sm font-medium text-gray-400 bg-gray-100 rounded cursor-not-allowed">
                    {{ __('Next') }}
                </span>
            @endif
        </div>
    </nav>
@endif