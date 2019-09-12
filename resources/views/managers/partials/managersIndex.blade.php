<div class="w-full sm:w-3/4 px-4 sm:px-0 sm:pr-8 mt-8 rounded">

  <!-- HEADER -->
  <div class="flex items-baseline justify-between border-b-2 border-gray-400 mb-10">
    <span class="tracking-wide uppercase font-bold pb-4 border-b-2 border-indigo-500">Managers </span>
    <span class="ml-2 font-bold text-indigo-600">{{ $managers_count }}</span>

  </div>

  <!-- MAIN SECTION -->
  @forelse($managers as $manager)

    <!-- CARD -->
    <div class="bg-white border-b border-gray-400 px-4 pt-2 mb-8 shadow">

      <!-- //== FIRST ROW
          //==================== -->
      <div class="mb-2 py-2 text-gray-800">

        <!-- MANAGER -->
        <h3 class="mb-1 xl:text-xl">{{ $manager->name }}</h3>
        <p class="py-1 text-sm">{{ $manager->email }}</p>
      </div>

      <!-- //== SECOND ROW
          //==================== -->
      <div class="text-gray-600 mb-4 px-2">

        @if( $manager->companies->count() )
          <p class="block mb-2 text-sm underline leading-loose tracking-tight ">Companies with access permissions to:</p>

          <div class="flex flex-wrap text-gray-600 mb-4 py-2 px-2">
          @foreach( $manager->companies as $company )
            <!-- COMPNAY ACCESS -->
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
              {{ $company->name }}
            </span>
          @endforeach
        </div>
        @else
          <p class="px-2 py-2">No access permissions to any company.</p>
        @endif
      </div>

      <!-- //== THIRD ROW
          //==================== -->
      <div class="flex text-gray-700 text-sm font-semibold mb-4 px-2">

       <span class="flex-1 bg-gray-200 hover:bg-gray-300 text-center py-2">

         <!-- ACCESS PERMISSIONS WERE ASSIGNED -->
         @if( $manager->companies->count() )

           <!-- UPDATE ACCESS PERMISSIONS -->
           <a href="{{ route('permissions.edit', $manager->id) }}" class="flex items-center justify-center text-gray-700" title="Update access permission to companies for this manager">
             @include('layouts.partials.svg.refresh')
             <span class="hidden sm:inline-block ml-2">update permission</span>
           </a>

         @else

           <!-- ASSIGN ACCESS PERMISSIONS -->
           <a href="{{ route('permissions.create', $manager->id) }}" class="flex items-center justify-center text-gray-700" title="Assign access permission to companies for this manager">
             @include('layouts.partials.svg.key2')
             <span class="hidden sm:inline-block ml-2">assign permission</span>
           </a>

         @endif

       </span>

       <!-- VIEW -->
       <span class="flex-1 bg-gray-200 hover:bg-gray-300 text-center py-2">

         <a href="{{ route('manager.show', $manager->id) }}" class="flex items-center justify-center text-gray-700" title="View Manager">
           @include('layouts.partials.svg.view')
           <span class="hidden sm:inline-block ml-2">view</span>
         </a>

       </span>

        <!-- EDIT ACTION -->
        <span class="flex-1 bg-gray-200 hover:bg-gray-300 text-center py-2">

          <a href="{{ route('manager.edit', $manager->id) }}" class="flex items-center justify-center text-gray-700" title="Edit Manager">
            @include('layouts.partials.svg.edit3')
            <span class="hidden sm:inline-block ml-2">edit</span>
          </a>

        </span>

        <!-- DELETE -->
        <span class="flex-1 bg-gray-200 hover:bg-gray-300 text-center py-2">
          <a href="{{ route('manager.destroy', $manager->id) }}" class="flex items-center justify-center text-gray-700" title="Warning! attempting to delete a company will also delete all associated employees"
            onclick="event.preventDefault();
            document.getElementById('delete-{{ $manager->id }}').submit();"
          >
            @include('layouts.partials.svg.delete')
            <span class="hidden sm:inline-block ml-2">delete</span>
          </a>
        </span>
           <form id="delete-{{ $manager->id }}" action="{{ route('manager.destroy', $manager->id) }}" method="POST" class="hidden">
             @csrf
             @method('DELETE')
             <input class="" type="submit" value="Delete">
           </form>

       </div> <!-- END THIRD ROW -->

    </div> <!-- END CARD -->

  @empty
    <!-- NO RECORD EXISTS IN THE DB -->
    <div class="container mx-auto px-4 mt-4 bg-orange-100 border-l-4 border-orange text-orange-600 p-4" role="alert">
      <p class="font-bold mb-3">Please confirm</p>
      <p>No managers found! To create a new record click
        <a href="{{ route('manager.create') }}" class="text-semibold text-indigo"> here</a>
      </p>
    </div>
  @endforelse

{{ $managers->links() }}

</div>
