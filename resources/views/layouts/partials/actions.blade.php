<!-- ACTIONS PULL-DOWN LIST -->
<div class="mb-2 sm:mb-12">

  <!-- ACTIONS -->
  <div class="flex relative cursor-pointer"
    @click="actionsVisible = !actionsVisible"
  >
    <input class="appearance-none block text-lg w-full sm:w-48 xl:w-full px-4 py-2 rounded rounded-r-none border-2 border-r-0" placeholder="Actions">
    <button type="button" class="w-full sm:w-auto bg-green-600 hover:bg-green-400 rounded rounded-l-none px-1 py-1">
      @include('layouts.partials.svg.chevron')
    </button>
  </div>

  <!-- DROPDOWN CONTENT -->
  <div class="leading-tight rounded-lg py-4 bg-white absolute shadow-md z-20"
    :class="[actionsVisible? 'block' : 'hidden']"
  >

    <!-- COMPANY -->
    @can('perform-admin-actions')
    <a href="{{ url('companies/create') }}" class="block px-6 py-3 width-full hover:bg-gray-200">
      <div class="flex items-center">
        @include('layouts.partials.svg.business')
        <span class="ml-2 text-sm text-green-600 tracking-tight hover:text-green-700">New Company</span>
      </div>
    </a>

    <!-- MANAGERS -->
    <a href="{{ route('manager.create') }}" class="block px-6 py-3 width-full hover:bg-gray-200">
      <div class="flex items-center">
        @include('layouts.partials.svg.manager')
        <span class="ml-2 text-sm text-green-600 tracking-tight hover:text-green-700">New Manager</span>
      </div>
    </a>
    @endcan

    <!-- EMPLOYEE -->
    <a href="{{ route('employee.create') }}" class="block px-6 py-3 width-full hover:bg-gray-200">
      <div class="flex items-center">
        @include('layouts.partials.svg.userAdd')
        <span class="ml-2 text-sm text-green-600 tracking-tight hover:text-green-700">New Employee</span>
      </div>
    </a>

  </div>
</div> <!-- END ACTIONS PULL-DOWN LIST -->
