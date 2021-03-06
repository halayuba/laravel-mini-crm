<div class="w-full md:w-3/4 sm:pr-8 mt-8 rounded">

  <!-- HEADER -->
  <div class="flex items-baseline justify-between border-b-2 border-gray-400 mb-10">
    <span class="tracking-wide uppercase font-bold pb-4 border-b-2 border-indigo-500">Employees </span>
    <span class="ml-2 font-bold text-indigo-600">{{ $employees_count }}</span>
  </div>

  <!-- MAIN SECTION -->
  @forelse($employees as $employee)

    <!-- CARD -->
    <div class="bg-white border-b border-gray-400 px-4 pt-2 mb-8 shadow">

      <!-- //== FIRST ROW
          //==================== -->
      <div class="mb-2 py-2 text-gray-800">

        <!-- EMPLOYEE NANE -->
        <h3 class="mb-1 xl:text-xl">{{ $employee->first_name .' '.$employee->last_name }}</h3>

        <!-- COMPANY -->
        <p class="px-2 py-2 text-sm">{{ $employee->company->name }}</p>

      </div>

      <!-- //== SECOND ROW
          //==================== -->
      <div class="flex text-gray-600 flex flex-col sm:flex-row sm:flex-wrap mb-4 py-2 px-2">

        <!-- EMPLOYEE EMAIL -->
        <span class="flex-auto text-sm mb-1 sm:mb-0 sm:mr-2" title="Employee email">
          @include('layouts.partials.svg.mail')
          {{ $employee->email }}
        </span>

        <!-- PHONE -->
        @if( $employee->phone )
        <span class="flex-auto text-sm mb-1 sm:mb-0 sm:mr-2" title="Employee Phone">
          @include('layouts.partials.svg.phone')
          {{ $employee->phone }}
        </span>
        @endif

      </div>

      <!-- //== THIRD ROW: ACTIONS
          //==================== -->
      <div class="flex text-gray-700 text-sm font-semibold mb-4 px-2">

       <!-- VIEW -->
       <span class="flex-1 bg-gray-200 hover:bg-gray-300 py-2">

         <a href="{{ route('employee.show', $employee->id) }}" class="text-gray-700 flex items-center justify-center" title="View details">
           @include('layouts.partials.svg.view')
           <span class="hidden sm:inline-block ml-2">view</span>
         </a>

       </span>

        <!-- EDIT -->
        <span class="flex-1 bg-gray-200 hover:bg-gray-300 py-2">

          <a href="{{ route('employee.edit', $employee->id) }}" class="text-gray-700 flex items-center justify-center" title="Edit employee">
            @include('layouts.partials.svg.edit3')
            <span class="hidden sm:inline-block ml-2">edit</span>
          </a>

        </span>

        <!-- DELETE -->
        <span class="flex-1 bg-gray-200 hover:bg-gray-300 py-2">
          <a href="{{ route('employee.destroy', $employee->id) }}" class="text-gray-700 flex items-center justify-center" title="Warning! attempting to delete a company will also delete all associated employees"
            onclick="event.preventDefault();
            document.getElementById('delete-{{ $employee->id }}').submit();"
          >
            @include('layouts.partials.svg.delete')
            <span class="hidden sm:inline-block ml-2">delete</span>
          </a>
        </span>
           <form id="delete-{{ $employee->id }}" action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="hidden">
             @csrf
             @method('DELETE')
             <input class="" type="submit" value="Delete">
           </form>

       </div> <!-- END THIRD ROW -->

    </div> <!-- END CARD -->

  @empty
    <!-- NOTHING EXISTS IN THE DB -->
    <div class="container mx-auto px-4 mt-4 bg-orange-100 border-l-4 border-orange text-orange-600 p-4" role="alert">
      <p class="font-bold mb-3">No employees found!</p>

      @can('perform-admin-actions')
      <p>
        To create a new record click
        <a href="{{ url('employees/create') }}" class="text-semibold text-indigo"> here</a>
      </p>
      @else
        <p>You do not have enough permissions to create new employees.</p>
      @endcan

    </div>
  @endforelse

  @urlNoSearch
  {{ $employees->links() }}
  @endurlNoSearch

</div>
