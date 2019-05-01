<div class="w-full sm:w-1/4 px-4 py-2">

    <div class="mb-6 xl:mb-12">

      <!-- SEARCH BY NAME -->
      <form class="" action="{{ route('managers.search') }}" method="post">
        @csrf

        <div class="w-full flex">
          <input name="manager" type="text" class="appearance-none block sm:w-32 xl:w-56 px-4 py-2 rounded sm:rounded-r-none mb-2 sm:mb-0 border-2 sm:border-r-0" placeholder="Search for a manager">
          <button type="submit" class="sm:w-auto bg-green-dark hover:bg-green-light rounded sm:rounded-l-none px-3 py-1">
            <img src="{{ asset('img/magnifying-glass.svg') }}" class="appearance-none w-6 h-8 p-0">
          </button>
        </div>

      </form> <!-- END SEARCH -->
    </div>

    <!-- ACTIONS PULL-DOWN LIST -->
    @include('layouts.partials.actions')


    <!-- BUTTON -->
    <div class="my-2 sm:my-4">
      <a class="bg-green-dark text-center font-bold text-white rounded block px-4 py-3 tracking-wide">Filters</a>
    </div>

    <!-- //== FILTERS
        //==================== -->

    <!-- SHOW ON LARGER THAN MOBILE SCREENS -->
    <div class="hidden sm:block">
      <ul class="list-reset pl-4">
          <li class="py-2 mb-1">
            Filter 1
          </li>

          <li class="py-2 mb-1">
            Filter 2
          </li>

      </ul>
    </div>

    <!-- SHOW ON MOBILE ONLY -->
    <div class="sm:hidden flex flex-col items-center px-2 py-2 w-full mb-4">
      <div class="mb-2 py-1">
        Filter 1
      </div>

      <div class="mb-2 py-1">
        Filter 2
      </div>

    </div>

</div>
