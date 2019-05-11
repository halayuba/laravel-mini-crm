<div class="w-full sm:w-3/4 px-4 sm:px-0 sm:pr-8 mt-8 rounded">

  <!-- HEADER -->
  <div class="flex items-baseline justify-between border-b-2 border-grey-light mb-10">
    <span class="tracking-wide uppercase font-bold pb-4 border-b-2 border-indigo -mb-2px">{{ 'Managers: ' . $managers_count }}</span>
  </div>

  <!-- MAIN SECTION -->
  @forelse($managers as $manager)

    <!-- CARD -->
    <div class="bg-white border-b border-grey-light px-2 mb-8 shadow">

      <!-- //== FIRST ROW
          //==================== -->
      <div class="mb-2 py-2 text-grey-darker">

        <!-- MANAGER -->
        <h3 class="mb-1">{{ $manager->name }}</h3>
        <p class="py-1 text-sm">{{ $manager->email }}</p>
      </div>

      <!-- //== SECOND ROW
          //==================== -->
      <div class="text-grey-dark mb-4 px-2">

        @if( $manager->companies->count() )
          <p class="block mb-2 text-sm underline leading-loose tracking-tight ">Access permissions to these companies:</p>

          <div class="flex flex-wrap text-grey-dark mb-4 py-2 px-2">
          @foreach( $manager->companies as $company )
            <!-- COMPNAY ACCESS -->
            <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
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
      <div class="flex text-grey-darker text-sm font-semibold mb-4 px-2">

       <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

         <!-- ACCESS PERMISSIONS WERE ASSIGNED -->
         @if( $manager->companies->count() )

           <!-- UPDATE ACCESS PERMISSIONS -->
           <a href="{{ route('permissions.edit', $manager->id) }}" class="flex items-center justify-center no-underline text-grey-darker" title="Update access permission to companies for this manager">
             <img src="{{ asset('img/icons/ios-refresh-circle.svg') }}" class="w-6 h-6 mr-1">
             <span class="hidden sm:inline-block">update permission</span>
           </a>

         @else

           <!-- ASSIGN ACCESS PERMISSIONS -->
           <a href="{{ route('permissions.create', $manager->id) }}" class="flex items-center justify-center no-underline text-grey-darker" title="Assign access permission to companies for this manager">
             <img src="{{ asset('img/icons/md-key.svg') }}" class="w-6 mr-1">
             <span class="hidden sm:inline-block">assign permission</span>
           </a>

         @endif

       </span>

       <!-- VIEW -->
       <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

         <a href="{{ route('manager.show', $manager->id) }}" class="no-underline text-grey-darker" title="View Manager">
           <img src="{{ asset('img/icons/md-eye.svg') }}" class="w-4 pt-1">
           <span class="hidden sm:inline-block">view</span>
         </a>

       </span>

        <!-- EDIT ACTION -->
        <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

          <a href="{{ route('manager.edit', $manager->id) }}" class="no-underline text-grey-darker" title="Edit Manager">
            <img src="{{ asset('img/icons/ios-create.svg') }}" class="w-4 pt-1">
            <span class="hidden sm:inline-block">edit</span>
          </a>

        </span>

        <!-- DELETE -->
        <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

          <a href="{{ route('manager.destroy', $manager->id) }}" class="no-underline text-grey-darker" title="Warning! attempting to delete a company will also delete all associated employees"
            onclick="event.preventDefault();
            document.getElementById('delete-{{ $manager->id }}').submit();"
          >
            <img src="{{ asset('img/icons/erase.png') }}" class="w-4 pt-1">
            <span class="hidden sm:inline-block">delete</span>
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
    <div class="container mx-auto px-4 mt-4 bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
      <p class="font-bold mb-3">Please confirm</p>
      <p>No managers found! To create a new record click
        <a href="{{ route('manager.create') }}" class="no-underline text-semibold text-indigo"> here</a>
      </p>
    </div>
  @endforelse

{{ $managers->links() }}

</div>
