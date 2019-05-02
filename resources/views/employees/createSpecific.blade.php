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

        <input id="last_name" type="text" name="last_name" class="form_input" value="{{ old('last_name') }}" placeholder="Last Name" required autofocus>
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

      <!-- COMPANY (ALREADY KNOWN) -->
      <input name="company_id" type="text" class="hidden" value="{{ $id }}" >
      <input name="return_to_route" type="text" class="hidden" value="{{ 'companies' }}" >

      <!-- BUTTONS -->
      <div class="flex justify-end">
        <a href="{{ url('/companies') }}" class="btn_cancel mr-2">Cancel</a>
        <button class="btn_jobsave" type="submit">
          {{ __('Save') }}
        </button>
      </div>
    </form>

  </div>
</div>

@endsection
