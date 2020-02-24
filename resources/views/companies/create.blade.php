@extends('layouts.master')

@section('title', 'New Company')

@section('content')

<!-- INSTRUCTIONS -->
<div class="container mx-auto px-4 mt-4 bg-yellow-100 border-l-4 border-yellow-600 text-gray-700 p-4" role="alert">
  <p>Complete the form below to create a new company record.</p>
</div>

<div class="flex flex-col items-center justify-center mt-12 sm:mt-16 lg:mb-20">
  <div class="w-full max-w-md">

    <div class="bg-green-100 border-t-4 border-green-600 rounded-t text-teal-900 px-4 py-4 shadow-md uppercase font-bold">
      {{ __('New Company') }}
    </div>

    <form method="POST" action="{{ url('/companies') }}" aria-label="{{ __('Company') }}" class="bg-white shadow-md rounded-b px-8 pt-6 py-12 mb-4" enctype="multipart/form-data">
      @csrf

      <!-- COMPANY NAME -->
      <div class="mb-8 ">
        <div class="mb-2">
          <label class="inline text-gray-700 text-sm font-bold" for="name">
            {{ __('Name') }}
          </label>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline">
            <polygon points="5,0 15,0 10,15" fill="#cc3333"/>
          </svg>
        </div>

        <input id="name" type="text" name="name" class="form_input" value="{{ old('name') }}" placeholder="Company/Organization Name" required autofocus>
      </div>

      <!-- EMAIL -->
      <div class="w-full mb-8">
        <label for="email" class="form_label">Email</label>
        <input id="email" type="email" name="email" class="form_input" value="{{ old('email') }}" placeholder="Company email address">
      </div>

      <!-- WEBSITE -->
      <div class="w-full mb-8">
        <label for="website" class="form_label">Website Link</label>
        <input id="website" type="url" name="website" class="form_input" value="{{ old('website') }}" placeholder="Company Website">
      </div>

      <!-- IMAGE -->
      <image-upload></image-upload>

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
