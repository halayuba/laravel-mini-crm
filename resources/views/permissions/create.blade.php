@extends('layouts.master')

@section('title', 'Permissions')

@section('content')

<div class="min-h-screen ">

  <!-- INSTRUCTIONS -->
  <div class="container mx-auto px-4 mt-4 bg-yellow-100 border-l-4 border-yellow-600 text-gray-700 p-4" role="alert">
    <p>Select the companies from the list below to assign access permission to {{ $user->name }}.</p>
  </div>

  <div class="flex flex-col items-center justify-center mt-12 sm:mt-16 lg:mb-20">
    <div class="w-full max-w-md">

      <div class="bg-green-100 border-t-4 border-green-600 rounded-t text-teal-800 px-4 py-4 shadow-md uppercase font-bold"
        @click.self="tipFlag=false"
      >
        {{ __('Assign Permissions') }}
      </div>

      <form method="POST" action="{{ route('permissions.store') }}" aria-label="{{ __('Permissions') }}" class="bg-white shadow-md rounded-b px-8 pt-6 py-12 mb-4"
        @click.self="tipFlag=false"
      >
        @csrf

        <!-- COMPANY -->
        <div class="w-full mb-8">
          <div class="mb-2">
            <label class="inline text-gray-700 text-sm font-bold" for="company_id">
              {{ __('Company') }}
              <!-- REQUIRED SYMBOL -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline">
                <polygon points="5,0 15,0 10,15" fill="#cc3333"/>
              </svg>

              <!-- TIP -->
              <span class="text-sm text-gray-700 ml-1" title="Logo must be an image and min 100X100"
                @click="tipFlag = !tipFlag"
              >
                @include('layouts.partials.svg.tip')
              </span>
              <p class="px-2 py-1 text-gray-700 border border-gray"
                v-if="tipFlag"
              >
                If the list does not contain the company for which this employee needs to be associated with then click this link to create a new company.
              </p>

              <a href="{{ route('company.create') }}" class="text-xs text-indigo no-underline">
                 Not in the list? Add new company
              </a>

            </label>
          </div>

          <select name="companies[]" class="form_input" size="15" multiple required>
            @foreach($companies as $company)
              <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
          </select>

        </div>

        <!-- MANAGER -->
        <input type="text" name="user_id" value="{{ $user->id }}" class="hidden">

        <!-- BUTTONS -->
        <div class="flex justify-end">
          <a href="{{ url('/managers') }}" class="btn_cancel mr-2">Cancel</a>
          <button class="btn_jobsave" type="submit">
            {{ __('Save') }}
          </button>
        </div>
      </form>

    </div>
  </div>

</div>
@endsection
