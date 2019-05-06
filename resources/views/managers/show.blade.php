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

            <div class="px-2 py-4 text-grey-darker">

              <!-- EMAIL -->
              <div class="flex flex-wrap py-2">
                <img src="{{ asset('img/ios-mail.svg') }}" class="w-6 h-6">
                <span class="text-sm bg-grey-light p-1 mx-1">Email</span>
                <span class="text-lg ml-2">{{ $user->email }}</span>
              </div>

              <!-- LAST UPDATE -->
              <div class="flex flex-wrap py-2">
                <img src="{{ asset('img/ios-calendar.svg') }}" class="w-6 h-6">
                <span class="text-sm bg-grey-light p-1 mx-1">Last update</span>
                <span class="text-lg ml-2">{{ $user->updated_at->toFormattedDateString() }}</span>
              </div>

            </div>

            <div class="bg-grey-lightest px-2 py-4 text-grey-darker">

              <!-- ACCESS PERMISSIONS WERE ASSIGNED -->
              @if( $user->companies->count() )
                <div class="flex flex-wrap">
                  <p class="block mb-2 text-sm underline leading-loose tracking-tight mr-4">{{ $user->name }} has access permissions to these companies:</p>

                  <!-- UPDATE ACCESS PERMISSIONS -->
                  <a href="{{ route('permissions.edit', $user->id) }}">
                    <img src="{{ asset('img/ios-refresh-circle.svg') }}" class="w-6 h-6 xl:mr-4" title="Update access permissions">
                  </a>

                  <!-- REMOVE ACCESS PERMISSIONS -->
                  <a href="{{ route('permissions.destroy', $user->id) }}"
                    onclick="event.preventDefault();
                    document.getElementById('remove-{{ $user->id }}').submit();"
                  >
                    <img src="{{ asset('img/md-close-circle.svg') }}" class="w-6 h-6" title="Remove access permissions">
                  </a>
                  <form id="remove-{{ $user->id }}" action="{{ route('permissions.destroy', $user->id) }}" method="POST" class="hidden">
                    @csrf
                    @method('DELETE')
                    <input class="" type="submit" value="Delete">
                  </form>
                </div>

                <div class="flex flex-wrap text-grey-dark mb-4 py-2 px-2">
                  @foreach( $user->companies as $company )
                    <!-- COMPNAY ACCESS -->
                    <span class="inline-block bg-white px-3 py-1 text-sm font-semibold mr-2">
                      {{ $company->name }}
                    </span>
                  @endforeach
                </div>
              @else
                <div class="flex flex-wrap">
                  <p class="px-2">{{ $user->name }} has no access permissions to any company.</p>
                  <a href="{{ route('permissions.create', $user->id) }}">
                    <img src="{{ asset('img/md-add-circle.svg') }}" class="w-6 h-6" title="Assign access permissions">
                  </a>
                </div>
              @endif
            </div>

          </div>

          <!-- ACTION BUTTONS -->
          <div class="w-full px-2 py-4 flex">

            <!-- EDIT ACTION -->
            <span class="flex-1 bg-grey-lighter text-center py-2">
              <a href="{{ route('employee.edit', $user->id) }}" class="" title="Edit">
                <img src="{{ asset('img/ios-create.svg') }}" class="w-8">
              </a>
            </span>

            <!-- DELETE ACTION -->
            <span class="flex-1 bg-grey-lighter text-center py-2">
              <a href="{{ route('employee.destroy', $user->id) }}" class="" title="Delete"
                onclick="event.preventDefault();
                document.getElementById('delete-{{ $user->id }}').submit();"
              >
                <img src="{{ asset('img/md-trash.svg') }}" class="w-8">
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
