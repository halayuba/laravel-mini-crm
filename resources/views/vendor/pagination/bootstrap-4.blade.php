@if ($paginator->hasPages())
    <div class="container mx-auto">
      <nav class="flex justify-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="mr-8 inline-block bg-gray-300 hover:bg-gray-500 text-gray-800 font-bold py-2 px-4 rounded-l" disabled>&laquo; Previous</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="mr-8 inline-block bg-gray-300 hover:bg-gray-500 text-gray-800 font-bold py-2 px-4 rounded-l">&laquo; Previous</a>
        @endif

        {{-- Pagination Elements --}}
        <ul class="list-none">
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="inline-block"><span class="bg-gray-300 hover:bg-gray-500 text-gray-800 font-bold py-2 px-4">&hellip; {{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="inline-block"><a class="inline-block bg-gray-500 text-gray-800 font-bold py-2 px-4">{{ $page }}</a></li>
                    @else
                        <li class="inline-block"><a href="{{ $url }}" class="inline-block bg-gray-300 hover:bg-gray-500 text-gray-800 font-bold py-2 px-4">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        </ul>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="ml-8 inline-block bg-gray-300 hover:bg-gray-500 text-gray-800 font-bold py-2 px-4 rounded-r">Next page &raquo;</a>
        @else
            <a class="ml-8 inline-block bg-gray-300 hover:bg-gray-500 text-gray-800 font-bold py-2 px-4 rounded-r" disabled>Next page &raquo;</a>
        @endif
      </nav>
    </div>
@endif
