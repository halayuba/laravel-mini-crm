<div class="w-full md:w-1/4 px-4 py-2"
  @click.self="actionsVisible = false"
>

  <div class="mb-6 xl:mb-12">

    <!-- SEARCH BY NAME -->
    <form class="" action="{{ route('companies.search') }}" method="post">
      @csrf

      <div class="w-full flex">
        <input name="company" type="text" class="appearance-none block px-4 py-2 rounded sm:rounded-r-none mb-2 sm:mb-0 border-2 sm:border-r-0" placeholder="Search for a company">
        <button type="submit" class="sm:w-auto bg-green-600 hover:bg-green-400 rounded sm:rounded-l-none px-3 py-1">
          @include('layouts.partials.svg.magnifyingGlass')
        </button>
      </div>

    </form> <!-- END SEARCH -->
  </div>

  <!-- ACTIONS PULL-DOWN LIST -->
  @include('layouts.partials.actions')

  <!-- BUTTON -->
  <div class="my-2 sm:my-4">
    <a class="bg-green-600 text-center font-bold text-white rounded block px-4 py-3 tracking-wide">
      @include('layouts.partials.svg.filter')
      Filters</a>
  </div>

  <!-- //== FILTERS
      //==================== -->

  <!-- SHOW ON LARGER THAN MOBILE SCREENS -->
  <div class="hidden sm:block">
    <ul class="list-reset pl-4">
        <li class="py-2 mb-1">
          <a href="{{ url('companies'.'?recent=true') }}" class="text-sm text-gray-700 no-underline {{ active_filter('recent') }}">
            Recently Added
          </a>
        </li>

        <li class="py-2 mb-1">
          <a href="{{ url('companies'.'?has-employees=true') }}" class="text-sm text-gray-700 no-underline {{ active_filter('employees=true') }}">
            With employees
          </a>
        </li>

        <li class="py-2 mb-1">
          <a href="{{ url('companies'.'?has-employees=false') }}" class="text-sm text-gray-700 no-underline {{ active_filter('employees=false') }}">
            With no employees
          </a>
        </li>

    </ul>
  </div>

  <!-- SHOW ON MOBILE ONLY -->
  <div class="sm:hidden flex flex-col items-center px-2 py-2 w-full mb-4">
    <div class="mb-2 py-1">
      <a href="{{ url('companies'.'?recent=true') }}" class="text-sm text-gray-700 hover:text-green-700 no-underline hover:underline ">
        Recently Added
      </a>
    </div>

    <div class="mb-2 py-1">
      <a href="{{ url('companies'.'?has-employees=true') }}" class="text-sm text-gray-700 hover:text-green-700 no-underline hover:underline ">
        With employees
      </a>
    </div>

    <div class="mb-2 py-1">
      <a href="{{ url('companies'.'?has-employees=false') }}" class="text-sm text-gray-700 hover:text-green-700 no-underline hover:underline ">
        With no employees
      </a>
    </div>

  </div>

</div>
