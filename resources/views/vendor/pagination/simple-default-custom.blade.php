@if ($paginator->hasPages())
  <div class="flex justify-center container mx-auto">
    {{ -- Previous Page Link -- }}
    @if ($paginator->onFirstPage())

      <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded-l cursor-not-allowed">
        <span>@lang('pagination.previous')</span>
        Prev
      </button>

    @else

      <a href="{{ $paginator->previousPageUrl() }}" class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded-l" rel="prev">
        @lang('pagination.previous')
        Prev
      </a>

    @endif

    {{ -- Next Page Link -- }}
    @if ($paginator->hasMorePages())

      <a href="{{ $paginator->nextPageUrl() }}" class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded-r" rel="next">
        @lang('pagination.next')
        Next
      </a>

    @else

      <button class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded-r cursor-not-allowed">
        <span>@lang('pagination.next')</span>
        Next
      </button>

    @endif

</div>
@endif
