@extends('layouts.master_dashboard')

@section('title', 'Accounts')

@section('content')

<!-- MAIN SECTION -->
<div class="container mx-auto px-8 my-8 py-4">

  <!-- HEADING SECTION -->
  <div class="flex items-center mb-4">
    <h2 class="text-2xl mr-2 font-medium uppercase">Update Password</h2>
  </div>

  <!-- CARD -->
  <div class="bg-white border border-gray-400 border-t-4 border-t-blue rounded px-4 py-6 xl:py-12">

    <div class="container mx-auto px-8">

      <!-- FORM -->
      <form method="POST" action="{{ route('password.store') }}" class="shadow-md px-4 py-4">
        @csrf

        <!-- CURRENT PASSWORD -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold my-2" for="password_current">
            {{ __('Current Password') }}
          </label>

          <input id="password_current" name="password_current" type="password" class="w-full mb-4 bg-gray-100 border border-gray-400 text-gray-800 outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('password_current') ? 'border-red' : '' }}" required>

          @if ($errors->has('password_current'))
            <p class="text-red text-xs italic">{{ $errors->first('password_current') }}</p>
          @endif
        </div>

        <!-- NEW PASSWORD -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold my-2" for="password">
            {{ __('New Password') }}
          </label>

          <input id="password" name="password" type="password" class="w-full mb-4 bg-gray-100 border border-gray-400 text-gray-800 outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('password') ? 'border-red' : '' }}" required>

          @if ($errors->has('password'))
            <p class="text-red text-xs italic">{{ $errors->first('password') }}</p>
          @endif
        </div>

        <!-- CONFIRM PASSWORD -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold my-2" for="password_confirmation">
            {{ __('Confirm Password') }}
          </label>

          <input id="password_confirmation" name="password_confirmation" type="password" class="w-full mb-4 bg-gray-100 border border-gray-400 text-gray-800 outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('password_confirmation') ? 'border-red' : '' }}" required>

          @if ($errors->has('password_confirmation'))
            <p class="text-red text-xs italic">{{ $errors->first('password_confirmation') }}</p>
          @endif
        </div>


        <!-- BUTTON -->
        <div class="flex justify-center mt-12">
          <button type="submit" class="btn_new">
            {{ __('Change Password') }}
          </button>
        </div>

      </form>

    </div>

  </div>
</div>

@endsection
