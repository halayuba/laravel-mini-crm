<div class="w-full sm:w-3/4 px-4 sm:px-0 sm:pr-8 mt-8 rounded">

    <!-- MAIN SECTION -->
    @forelse($companies as $company)

      <!-- CARD -->
      <div class="bg-white border-b border-grey-light px-2 mb-8 shadow">

        <!-- //== FIRST ROW
            //==================== -->
        <div class="mb-2 py-2 text-grey-darker">
          <!-- COMPNAY -->
          <h3 class="mb-1">
            {{ $company->name }}

            @if( $company->employees->count() )
              <a href="{{ route('companies.employees', $company->name) }}" class="ml-2 no-underline">
                <span class="bg-blue text-xs text-white p-2 rounded" title="Total number of employees. Click to view">
                    {{ count($company->employees) }}
                </span>
              </a>
            @else
              <span class="bg-pink text-xs text-white p-2 rounded ml-2" title="There are no employees associated with this company.">
                {{ 0 }}
              </span>
            @endif
          </h3>
        </div>

        <!-- //== SECOND ROW
            //==================== -->
        <div class="flex text-grey-dark flex flex-col sm:flex-row sm:flex-wrap mb-4 py-2 px-2">

          <!-- COMPNAY EMAIL -->
          <span class="flex-auto text-sm mb-1 sm:mb-0 sm:mr-2" title="{{ $company->email }}">
            <img src="{{ asset('img/ios-mail.svg') }}" class="w-4 pt-1">
            {{ $company->email }}
          </span>

          <!-- COMPNAY OFFICIAL WEBSITE -->
          <span class="flex-auto text-sm mb-1 sm:mb-0 sm:mr-2" title="COMPNAY's Website">
            <img src="{{ asset('img/md-link.svg') }}" class="w-4 pt-1">
            @if($company->website)
              <a href="{{ $company->website }}" class="text-indigo no-underline">{{ clean_url($company->website) }}</a>
            @endif
          </span>

        </div>

        <!-- //== THIRD ROW
            //==================== -->
        <div class="flex text-grey-darker text-sm font-semibold mb-4 px-2">

         <!-- ADD NEW EMPLOYEES -->
         <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

           <a href="{{ route('employee.createSpecific', $company->id) }}" class="no-underline text-grey-darker" title="Add new employees">
             <img src="{{ asset('img/md-person-add.svg') }}" class="w-4 pt-1">
             <span class="hidden sm:inline-block">employees</span>
           </a>

         </span>

         <!-- VIEW -->
         <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

           <a href="{{ route('company.show', $company->slug) }}" class="no-underline text-grey-darker" title="View details">
             <img src="{{ asset('img/md-eye.svg') }}" class="w-4 pt-1">
             <span class="hidden sm:inline-block">view</span>
           </a>

         </span>

          <!-- EDIT ACTION -->
          <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

            <a href="{{ route('company.edit', $company->slug) }}" class="no-underline text-grey-darker" title="Edit COMPNAY">
              <img src="{{ asset('img/ios-create.svg') }}" class="w-4 pt-1">
              <span class="hidden sm:inline-block">edit</span>
            </a>

          </span>

          <!-- DELETE -->
          <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">
            @can('delete-company')
              <a href="{{ route('company.destroy', $company->slug) }}" class="no-underline text-grey-darker" title="Warning! attempting to delete a company will also delete all associated employees"
                onclick="event.preventDefault();
                document.getElementById('delete-{{ $company->slug }}').submit();"
              >
                <img src="{{ asset('img/erase.png') }}" class="w-4 pt-1">
                <span class="hidden sm:inline-block">delete</span>
              </a>
            @else
              <a class="no-underline text-grey-darker cursor-not-allowed opacity-50" title="You don't have enough permissions to perform this action.">
                <img src="{{ asset('img/erase.png') }}" class="w-4 pt-1">
                <span class="hidden sm:inline-block">delete</span>
              </a>
            @endcan
          </span>
             <form id="delete-{{ $company->slug }}" action="{{ route('company.destroy', $company->slug) }}" method="POST" class="hidden">
               @csrf
               @method('DELETE')
               <input class="" type="submit" value="Delete">
             </form>

         </div> <!-- END THIRD ROW -->

      </div> <!-- END CARD -->

    @empty
      <!-- NOTHING EXISTS IN THE DB -->
      <div class="container mx-auto px-4 mt-4 bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
        <p class="font-bold mb-3">Please confirm</p>
        <p>No companies found! To create a new record click
          <a href="{{ url('companies/create') }}" class="no-underline text-semibold text-indigo"> here</a>
        </p>
      </div>
    @endforelse

{{ $companies->links() }}
</div>
