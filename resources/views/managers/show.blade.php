@extends('layouts.master')

@section('title', 'Manager')

@section('content')
<div class="min-h-screen container mx-auto mt-12">
  <div class="flex flex-col-reverse sm:flex-row">

    <!-- LEFT SIDE -->
    <div class="w-full sm:w-3/4 px-4">
      <div class="container mx-auto px-6 py-4">

        <!-- RETURN BACK TO THE LIST -->
        <a href="{{ route('managers.index') }}" class="btn_cancel transition mb-4 xl:mb-8">
          Back to the list
        </a>

        <!-- CARD -->
        <div class="max-w-md bg-white rounded-gl flex-1 flex flex-col overflow-hidden shadow-lg">

          <div class="px-6 py-4">

            <div class="flex flex-col md:flex-row md:items-center xl:mt-4 py-2 mb-2">

              <!-- NAME -->
              <div class="font-bold text-lg xl:text-xl">{{ $user->name }}</div>

            </div>

            <div class="px-2 py-4 text-gray-700">

              <!-- EMAIL -->
              <div class="flex flex-wrap py-2">
                <div class="text-sm bg-gray-200 mx-1">
                  @include('layouts.partials.svg.mail')
                  <span class="hidden xl:inline-block">Email</span>
                </div>
                <span class="ml-2">{{ $user->email }}</span>
              </div>

              <!-- LAST UPDATE -->
              <div class="flex flex-wrap py-2">
                <div class="text-sm bg-gray-200 mx-1">
                  @include('layouts.partials.svg.calendar')
                  <span class="hidden xl:inline-block">Last update</span>
                </div>
                <span class="ml-2">{{ $user->updated_at->toFormattedDateString() }}</span>
              </div>

            </div>

            <div class="bg-gray-100 px-2 py-4 text-gray-700">

              <!-- ACCESS PERMISSIONS WERE ASSIGNED -->
              @if( $user->companies->count() )
                <div class="px-2">
                  <span>{{ $user->name }} has access permissions to these companies:</span>

                  <!-- LIST OF COMPANIES WITH ACCESS -->
                  <ol class="text-gray-600 px-2 py-2">
                    @foreach( $user->companies as $company )
                      <li class="leading-loose list-decimal ml-2 py-1 text-sm font-semibold">
                        {{ $company->name }}
                      </li>
                    @endforeach
                  </ol>

                  <div class="flex flex-col my-4">
                    <!-- UPDATE ACCESS PERMISSIONS -->
                    <a href="{{ route('permissions.edit', $user->id) }}" class="inline-block" title="Update access permissions">
                      @include('layouts.partials.svg.refresh')
                      <span class="hidden xl:inline-block">Update access permissions</span>
                    </a>

                    <!-- REMOVE ACCESS PERMISSIONS -->
                    <a href="{{ route('permissions.destroy', $user->id) }}" class="mt-4 inline-block" title="Remove access permissions"
                      onclick="event.preventDefault();
                      document.getElementById('remove-{{ $user->id }}').submit();"
                    >
                      @include('layouts.partials.svg.remove')
                      <span class="hidden xl:inline-block">Remove access permissions</span>
                    </a>
                    <form id="remove-{{ $user->id }}" action="{{ route('permissions.destroy', $user->id) }}" method="POST" class="hidden">
                      @csrf
                      @method('DELETE')
                      <input class="" type="submit" value="Delete">
                    </form>
                  </div>

                </div>
              @else
                <div class="px-2">
                  <span class="">{{ $user->name }} has no access permissions to any company.</span>
                  <a href="{{ route('permissions.create', $user->id) }}" class="mt-2 block" title="Assign access permissions">
                    @include('layouts.partials.svg.add')
                    <span class="text-gray-500 hover:underline">Assign access permissions</span>
                  </a>
                </div>
              @endif
            </div>

          </div>

          <!-- ACTION BUTTONS -->
          <div class="w-full px-2 py-4 flex">

            <!-- EDIT ACTION -->
            <span class="flex-1 bg-gray-200 text-center py-2">
              <a href="{{ route('manager.edit', $user->id) }}" class="" title="Edit">
                @include('layouts.partials.svg.edit2')
              </a>
            </span>

            <!-- DELETE ACTION -->
            <span class="flex-1 bg-gray-200 text-center py-2">
              <a href="{{ route('employee.destroy', $user->id) }}" class="" title="Delete"
                onclick="event.preventDefault();
                document.getElementById('delete-{{ $user->id }}').submit();"
              >
                @include('layouts.partials.svg.delete2')
              </a>
            </span>

            <form id="delete-{{ $user->id }}" action="{{ route('employee.destroy', $user->id) }}" method="POST" class="hidden">
              @csrf
              @method('DELETE')
              <input class="" type="submit" value="Delete">
            </form>

          </div> <!-- END ACTION BUTTONS -->

        </div> <!-- END CARD -->

      </div>
    </div> <!-- END LEFT SIDE -->

    <!-- RIGHT SIDE -->
    @include('companies.partials.filters')

  </div>
</div>

@endsection
