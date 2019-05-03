<div class="w-full sm:w-3/4 px-4 sm:px-0 sm:pr-8 mt-8 rounded">

    <!-- MAIN SECTION -->
    @forelse($manager->companies as $company)

      @foreach($company->employees as $employee)

      <!-- CARD -->
      <div class="bg-white border-b border-grey-light px-2 mb-8 shadow">

        <!-- //== FIRST ROW
            //==================== -->
        <div class="mb-2 py-2 text-grey-darker">

          <!-- EMPLOYEE NANE -->
          <h3 class="mb-1">{{ $employee->first_name .' '.$employee->last_name }}</h3>

          <!-- COMPANY -->
          <p class="px-2 py-2 text-sm">{{ $company->name }}</p>

        </div>

        <!-- //== SECOND ROW
            //==================== -->
        <div class="flex text-grey-dark flex flex-col sm:flex-row sm:flex-wrap mb-4 py-2 px-2">

          <!-- EMPLOYEE EMAIL -->
          <span class="flex-auto text-sm mb-1 sm:mb-0 sm:mr-2" title="Employee email">
            <img src="{{ asset('img/ios-mail.svg') }}" class="w-4 pt-1">
            {{ $employee->email }}
          </span>

          <!-- PHONE -->
          <span class="flex-auto text-sm mb-1 sm:mb-0 sm:mr-2" title="Employee Phone">
            <img src="{{ asset('img/ios-call.svg') }}" class="w-4 pt-1">
              {{ $employee->phone }}
          </span>

        </div>

        <!-- //== THIRD ROW: ACTIONS
            //==================== -->
        <div class="flex text-grey-darker text-sm font-semibold mb-4 px-2">

         <!-- VIEW -->
         <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

           <a href="{{ route('employee.show', $employee->id) }}" class="no-underline text-grey-darker" title="View details">
             <img src="{{ asset('img/md-eye.svg') }}" class="w-4 pt-1">
             <span class="hidden sm:inline-block">view</span>
           </a>

         </span>

          <!-- EDIT -->
          <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

            <a href="{{ route('employee.edit', $employee->id) }}" class="no-underline text-grey-darker" title="Edit COMPNAY">
              <img src="{{ asset('img/ios-create.svg') }}" class="w-4 pt-1">
              <span class="hidden sm:inline-block">edit</span>
            </a>

          </span>

          <!-- DELETE -->
          <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">
            <a href="{{ route('employee.destroy', $employee->id) }}" class="no-underline text-grey-darker" title="Warning! attempting to delete a company will also delete all associated employees"
              onclick="event.preventDefault();
              document.getElementById('delete-{{ $employee->id }}').submit();"
            >
              <img src="{{ asset('img/erase.png') }}" class="w-4 pt-1">
              <span class="hidden sm:inline-block">delete</span>
            </a>
          </span>
             <form id="delete-{{ $employee->id }}" action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="hidden">
               @csrf
               @method('DELETE')
               <input class="" type="submit" value="Delete">
             </form>

         </div> <!-- END THIRD ROW -->

      </div> <!-- END CARD -->

     @endforeach

    @empty
      <!-- NOTHING EXISTS IN THE DB -->
      <div class="container mx-auto px-4 mt-4 bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
        <p class="font-bold mb-3">No employees found!</p>

        @can('perform-admin-actions')
        <p>
          To create a new record click
          <a href="{{ url('employees/create') }}" class="no-underline text-semibold text-indigo"> here</a>
        </p>
        @else
          <p>You do not have enough permissions to create new employees.</p>
        @endcan

      </div>
    @endforelse

</div>
