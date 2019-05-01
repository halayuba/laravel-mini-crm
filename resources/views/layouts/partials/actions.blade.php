<!-- ACTIONS PULL-DOWN LIST -->
<div class="mb-2 sm:mb-12">

  <!-- ACTIONS -->
  <div class="flex relative cursor-pointer"
    @click="actionsVisible = !actionsVisible"
  >
    <input class="appearance-none block text-lg w-full sm:w-48 xl:w-full px-4 py-2 rounded rounded-r-none border-2 border-r-0" placeholder="Actions">
    <button type="button" class="w-full sm:w-auto bg-green-dark hover:bg-green-light rounded rounded-l-none px-1 py-1">
      <img src="{{ asset('img/chevron.svg') }}" class="appearance-none w-6 h-8 p-0">
    </button>
  </div>

  <!-- DROPDOWN CONTENT -->
  <div class="leading-tight rounded-lg py-4 bg-white absolute shadow-md z-20"
    :class="[actionsVisible? 'block' : 'hidden']"
  >

    <!-- COMPANY -->
    <a href="{{ url('companies/create') }}" class="block px-6 py-3 width-full no-underline hover:bg-grey-light">
      <span class="text-sm text-blue-dark tracking-tight hover:text-blue-darker">New Company</span>
    </a>

    <!-- EMPLOYEE -->
    <a href="{{ route('employee.create') }}" class="block px-6 py-3 width-full no-underline hover:bg-grey-light">
      <span class="text-sm text-blue-dark tracking-tight hover:text-blue-darker">New Employee</span>
    </a>

    <!-- MANAGERS -->
    <a href="#" class="block px-6 py-3 width-full no-underline hover:bg-grey-light">
      <span class="text-sm text-blue-dark tracking-tight hover:text-blue-darker">New Manager</span>
    </a>

  </div>
</div> <!-- END ACTIONS PULL-DOWN LIST -->
