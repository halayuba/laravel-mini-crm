<div class="w-full sm:w-3/4 px-4 sm:px-0 sm:pr-8 mt-8 rounded">

  <!-- HEADER -->
  <div class="flex border-b-2 border-gray-400 mb-10">
    <span class="tracking-wide uppercase font-bold pb-4 border-b-2 border-indigo-500">companies </span>
    @can('perform-admin-actions')
      <span class="ml-1 tracking-tight">{{ companies_filter() . " : " }}</span>
      <span class="ml-2 font-bold text-indigo-600">{{ $companies_count }}</span>
    @endcan
  </div>

  <!-- MAIN SECTION -->
  @forelse($companies as $company)

    <!-- CARD -->
    <div class="bg-white border-b border-gray-400 px-4 pt-2 mb-8 shadow">

      <!-- //== FIRST ROW
          //==================== -->
      <div class="mb-2 py-2 text-gray-800">
        <!-- COMPNAY -->
        <h3 class="mb-1 xl:text-xl">
          {{ $company->name }}

          <!-- NUMBER OF EMPLOYEES -->
          @if($company->employees->count())
          <a href="{{ route('company.employees', $company->slug) }}" class="ml-2">
            <span class="bg-green-700 text-xs text-white p-2 rounded" title="Total number of employees. Click to view">
                {{ $company->employees->count() }}
            </span>
          </a>
          @else
          <span class="bg-pink-500 text-xs text-white p-2 rounded" title="Total number of employees. Click to view">
              {{ 0 }}
          </span>
          @endif
        </h3>
      </div>

      <!-- //== SECOND ROW
          //==================== -->
      <div class="flex text-gray-600 flex flex-col sm:flex-row sm:flex-wrap mb-4 py-2 px-2">

        <!-- COMPNAY EMAIL -->
        <span class="flex-auto text-sm mb-1 sm:mb-0 sm:mr-2" title="{{ $company->email }}">
          @include('layouts.partials.svg.mail')
          {{ $company->email }}
        </span>

        <!-- COMPNAY OFFICIAL WEBSITE -->
        <span class="flex-auto text-sm mb-1 sm:mb-0 sm:mr-2" title="COMPNAY's Website">
          @if($company->website)
            @include('layouts.partials.svg.link2')
            <a href="{{ $company->website }}" class="text-indigo">{{ clean_url($company->website) }}</a>
          @endif
        </span>

      </div>

      <!-- //== THIRD ROW
          //==================== -->
      <div class="flex text-gray-700 text-sm font-semibold mb-4 px-2">

       <!-- ADD NEW EMPLOYEES -->
       <span class="flex-1 bg-gray-200 hover:bg-gray-300 text-center py-2">

         <a href="{{ route('employee.createSpecific', $company->id) }}" class="text-gray-700 flex items-center justify-center" title="Add new employees">
           @include('layouts.partials.svg.personAdd')
           <span class="hidden sm:inline-block ml-2">employees</span>
         </a>

       </span>

       <!-- VIEW -->
       <span class="flex-1 bg-gray-200 hover:bg-gray-300 text-center py-2">

         <a href="{{ route('company.show', $company->slug) }}" class="text-gray-700 flex items-center justify-center" title="View details">
           @include('layouts.partials.svg.view')
           <span class="hidden sm:inline-block ml-2">view</span>
         </a>

       </span>

        <!-- EDIT ACTION -->
        <span class="flex-1 bg-gray-200 hover:bg-gray-300 text-center py-2">

          <a href="{{ route('company.edit', $company->slug) }}" class="text-gray-700 flex items-center justify-center" title="Edit COMPNAY">
            @include('layouts.partials.svg.edit3')
            <span class="hidden sm:inline-block ml-2">edit</span>
          </a>

        </span>

        <!-- DELETE -->
        <span class="flex-1 bg-gray-200 hover:bg-gray-300 text-center py-2">
          @can('perform-admin-actions')
            <a href="{{ route('company.destroy', $company->slug) }}" class="text-gray-700 flex items-center justify-center" title="Warning! attempting to delete a company will also delete all associated employees"
              onclick="event.preventDefault();
              document.getElementById('delete-{{ $company->slug }}').submit();"
            >
              @include('layouts.partials.svg.delete')
              <span class="hidden sm:inline-block ml-2">delete</span>
            </a>
          @else
            <a class="text-gray-700 cursor-not-allowed opacity-50" title="You don't have enough permissions to perform this action.">
              @include('layouts.partials.svg.delete')
              <span class="hidden sm:inline-block ml-2">delete</span>
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
    <div class="container mx-auto px-4 mt-4 bg-orange-100 border-l-4 border-orange text-orange-600 p-4" role="alert">
      <p class="font-bold mb-3">No companies found!</p>

      @can('perform-admin-actions')
      <p>
        To create a new record click
        <a href="{{ url('companies/create') }}" class="text-semibold text-indigo"> here</a>
      </p>
      @else
        <p>You do not have enough permissions to create new companies.</p>
      @endcan

    </div>
  @endforelse

  @urlNoSearch
  {{ $companies->links() }}
  @endurlNoSearch
</div>
