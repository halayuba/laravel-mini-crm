@extends('layouts.master')

@section('title', 'New Employee')

@section('content')

<!-- INSTRUCTIONS -->
<div class="container mx-auto px-4 mt-4 bg-yellow-lightest border-l-4 border-yellow-dark text-grey-darker p-4" role="alert">
  <p>Complete the form below to create a new employee record.</p>
</div>

<div class="flex flex-col items-center justify-center mt-12 sm:mt-16 lg:mb-20">
  <div class="w-full max-w-md">

    <div class="bg-green-lightest border-t-4 border-green-dark rounded-t text-teal-darkest px-4 py-4 shadow-md uppercase font-bold">
      {{ __('New Employee') }}
    </div>

    <form method="POST" action="{{ url('/employees') }}" aria-label="{{ __('Employee') }}" class="bg-white shadow-md rounded-b px-8 pt-6 py-12 mb-4">
      @csrf

      <!-- FIRST NAME -->
      <div class="mb-8 ">
        <div class="mb-2">
          <label class="inline text-grey-darker text-sm font-bold" for="first_name">
            {{ __('First Name') }}
          </label>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline">
            <polygon points="5,0 15,0 10,15" fill="#cc3333"/>
          </svg>
        </div>

        <input id="first_name" type="text" name="first_name" class="form_input" value="{{ old('first_name') }}" placeholder="First Name" required autofocus>
      </div>

      <!-- LAST NAME -->
      <div class="mb-8 ">
        <div class="mb-2">
          <label class="inline text-grey-darker text-sm font-bold" for="last_name">
            {{ __('Last Name') }}
          </label>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline">
            <polygon points="5,0 15,0 10,15" fill="#cc3333"/>
          </svg>
        </div>

        <input id="last_name" type="text" name="last_name" class="form_input" value="{{ old('last_name') }}" placeholder="Last Name" required>
      </div>

      <!-- EMAIL -->
      <div class="w-full mb-8">
        <label for="email" class="form_label">Email</label>
        <input id="email" type="email" name="email" class="form_input" value="{{ old('email') }}" placeholder="Employee email address">
      </div>

      <!-- PHONE -->
      <div class="w-full mb-8">
        <label for="phone" class="form_label">Phone</label>
        <input id="phone" type="text" name="phone" class="form_input" value="{{ old('phone') }}" placeholder="(888) 213-5656">
      </div>

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
            @can('perform-admin-actions')
            <span class="text-sm text-grey-darker ml-1" title="If the list does not contain the company for which this employee needs to be associated with then click this link to create a new company."
              @click="tipFlag = !tipFlag"
            >
              <img src="/img/md-information-circle.svg" class="w-6">
            </span>
            <p class="px-2 py-1 text-grey-darker border border-grey"
              v-if="tipFlag"
            >
              If the list does not contain the company for which this employee needs to be associated with then click this link to create a new company.
            </p>

            <a href="{{ route('company.create') }}" class="text-xs text-indigo no-underline ml-1">
             Not in the list? Add a new company
            </a>

            @endcan

          </label>
        </div>
        <select name="company_id" class="form_input" required>
          <option value="">Select</option>
          @foreach($companies as $company)
            <option value="{{ $company->id }}" {{ selected(old('company_id'), $company->id) }}>{{ $company->name }}</option>
          @endforeach
        </select>
      </div>

      <!-- BUTTONS -->
      <div class="flex justify-end">
        <a href="{{ url('/employees') }}" class="btn_cancel mr-2">Cancel</a>
        <button class="btn_jobsave" type="submit">
          {{ __('Save') }}
        </button>
      </div>
    </form>

  </div>
</div>

@endsection
