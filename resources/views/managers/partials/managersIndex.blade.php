<div class="w-full sm:w-3/4 px-4 sm:px-0 sm:pr-8 mt-8 rounded">

    <!-- MAIN SECTION -->
    @forelse($managers as $manager)

      <!-- CARD -->
      <div class="bg-white border-b border-grey-light px-2 mb-8 shadow">

        <!-- //== FIRST ROW
            //==================== -->
        <div class="mb-2 py-2 text-grey-darker">

          <!-- MANAGER -->
          <h3 class="mb-1">{{ $manager->name }}</h3>
          <p class="px-2 py-2 text-sm">{{ $manager->email }}</p>
        </div>

        <!-- //== SECOND ROW
            //==================== -->
        <div class="flex text-grey-dark flex flex-wrap mb-4 py-2 px-2">

          @if( $manager->companies->count() )

            @foreach( $manager->companies as $company )
              <!-- COMPNAY ACCESS -->
              <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">
                $company->name
              </span>
            @endforeach
          @else
            <p class="px-2 py-2">No access permissions to any company.</p>
          @endif
        </div>

        <!-- //== THIRD ROW
            //==================== -->
        <div class="flex text-grey-darker text-sm font-semibold mb-4 px-2">

         <!-- ASSIGN COMPANIES -->
         <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

           <a href="#" class="flex items-center justify-center no-underline text-grey-darker" title="Assign access to companies">
             <img src="{{ asset('img/md-key.svg') }}" class="w-6 mr-1">
             <span class="hidden sm:inline-block">assign access</span>
           </a>

         </span>

          <!-- EDIT ACTION -->
          <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

            <a href="{{ route('manager.edit', $manager->id) }}" class="no-underline text-grey-darker" title="Edit Manager">
              <img src="{{ asset('img/ios-create.svg') }}" class="w-4 pt-1">
              <span class="hidden sm:inline-block">edit</span>
            </a>

          </span>

          <!-- DELETE -->
          <span class="flex-1 bg-grey-lighter hover:bg-white text-center py-2">

            <a href="{{ route('manager.destroy', $manager->id) }}" class="no-underline text-grey-darker" title="Warning! attempting to delete a company will also delete all associated employees"
              onclick="event.preventDefault();
              document.getElementById('delete-{{ $manager->id }}').submit();"
            >
              <img src="{{ asset('img/erase.png') }}" class="w-4 pt-1">
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
