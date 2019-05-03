@extends('layouts.master')

@section('title', 'Permissions')

@section('content')

<div class="min-h-screen ">

  <!-- INSTRUCTIONS -->
  <div class="container mx-auto px-4 mt-4 bg-yellow-lightest border-l-4 border-yellow-dark text-grey-darker p-4" role="alert">
    <p>Select the companies from the list below to assign access permission to {{ $user->name }}.</p>
  </div>

  <div class="flex flex-col items-center justify-center mt-12 sm:mt-16 lg:mb-20">
    <div class="w-full max-w-md">

      <div class="bg-green-lightest border-t-4 border-green-dark rounded-t text-teal-darkest px-4 py-4 shadow-md uppercase font-bold">
        {{ __('Assign Permissions') }}
      </div>

      <form method="POST" action="{{ route('permissions.store') }}" aria-label="{{ __('Permissions') }}" class="bg-white shadow-md rounded-b px-8 pt-6 py-12 mb-4">
        @csrf

        <!-- COMPANY -->
        <div class="w-full mb-8">
          <div class="mb-2">
            <label class="inline text-grey-darker text-sm font-bold" for="company_id">
              {{ __('Company') }}
              <!-- REQUIRED SYMBOL -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline">
                <polygon points="5,0 15,0 10,15" fill="#cc3333"/>
              </svg>

              <!-- TIP -->
              <span class="text-sm text-grey-darker ml-1">
                <a href="{{ route('company.create') }}" class="text-xs text-indigo no-underline" title="If the list does not contain the company for which this employee needs to be associated with then click this link to create a new company.">
                    <img src="/img/md-information-circle.svg" class="w-6 h-6">
                     Not in the list? Add new company
                </a>
              </span>

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
