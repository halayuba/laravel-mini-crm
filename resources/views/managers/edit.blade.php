@extends('layouts.master')

@section('title', 'Update Manager')

@section('content')

<div class="min-h-screen ">

  <!-- INSTRUCTIONS -->
  <div class="container mx-auto px-4 mt-4 bg-yellow-100 border-l-4 border-yellow-600 text-gray-700 p-4" role="alert">
    <p>Update the form below for the selected "manager" record.</p>
  </div>

  <div class="flex flex-col items-center justify-center mt-12 sm:mt-16 lg:mb-20">
    <div class="w-full max-w-md">

      <div class="bg-green-100 border-t-4 border-green-600 rounded-t text-teal-800 px-4 py-4 shadow-md uppercase font-bold">
        {{ __('Update Manager') }}
      </div>

      <form method="POST" action="{{ route('manager.update', $user->id) }}" aria-label="{{ __('Manager') }}" class="bg-white shadow-md rounded-b px-8 pt-6 py-12 mb-4">
        @csrf
        @method('PATCH')

        <!-- NAME -->
        <div class="mb-8 ">
          <div class="mb-2">
            <label class="inline text-gray-700 text-sm font-bold" for="name">
              {{ __('Name') }}
            </label>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline">
              <polygon points="5,0 15,0 10,15" fill="#cc3333"/>
            </svg>
          </div>
          <input id="name" type="text" name="name" class="form_input" value="{{ old('name')?: $user->name }}" placeholder="Manager name" required autofocus>
        </div>

        <!-- EMAIL -->
        <div class="w-full mb-8">
          <div class="mb-2">
            <label for="email" class="inline text-gray-700 text-sm font-bold">Email</label>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline">
              <polygon points="5,0 15,0 10,15" fill="#cc3333"/>
            </svg>
          </div>
          <input id="email" type="email" name="email" class="form_input" value="{{ old('email')?: $user->email }}" placeholder="Manager address">
        </div>

        <!-- PERMISSIONS -->
        <div class="bg-gray-100 px-2 py-4 text-gray-700">

          <!-- ACCESS PERMISSIONS WERE ASSIGNED -->
          @if( $user->companies->count() )
            <div class="px-2">
              <span>{{ $user->name }} has access permissions to these companies:</span>

              <!-- LIST OF COMPANIES WITH ACCESS -->
              <ol class="text-gray-600 px-2 py-2 list-decimal list-inside">
                @foreach( $user->companies as $company )
                  <li class="leading-loose ml-2 py-1 text-sm font-semibold">
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

        <!-- BUTTONS -->
        <div class="flex justify-end mt-6">
          <a href="{{ url('/managers') }}" class="btn_cancel mr-2">Cancel</a>
          <button class="btn_jobsave" type="submit">
            {{ __('Save') }}
          </button>
        </div>
      </form>

      <form id="remove-{{ $user->id }}" action="{{ route('permissions.destroy', $user->id) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
        <input class="" type="submit" value="Delete">
      </form>
    </div>
  </div>

</div>
@endsection
