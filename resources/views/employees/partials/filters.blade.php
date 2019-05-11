<div class="w-full sm:w-1/4 px-4 py-2"
  @click.self="actionsVisible = false"
>

    <div class="mb-6 xl:mb-12">

      <!-- SEARCH BY NAME -->
      <form class="" action="{{ route('employees.search') }}" method="post">
        @csrf

        <div class="w-full flex">
          <input name="employee" type="text" class="appearance-none block sm:w-32 xl:w-56 px-4 py-2 rounded sm:rounded-r-none mb-2 sm:mb-0 border-2 sm:border-r-0" placeholder="Search for an employee">
          <button type="submit" class="sm:w-auto bg-green-dark hover:bg-green-light rounded sm:rounded-l-none px-3 py-1">
            <img src="{{ asset('img/icons/magnifying-glass.svg') }}" class="appearance-none w-6 h-8 p-0">
          </button>
        </div>

      </form> <!-- END SEARCH -->
    </div>

    <!-- ACTIONS PULL-DOWN LIST -->
    @include('layouts.partials.actions')

</div>
