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
  <div class="bg-white border border-grey-light border-t-4 border-t-blue-resolute rounded px-4 py-6 xl:py-12">

    <div class="container mx-auto px-8">

      <!-- FORM -->
      <form method="POST" action="{{ route('password.store') }}" class="shadow-md px-4 py-4">
        @csrf

        <!-- CURRENT PASSWORD -->
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold my-2" for="password_current">
            {{ __('Current Password') }}
          </label>

          <input id="password_current" name="password_current" type="password" class="w-full mb-4 bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('password_current') ? 'border-red' : '' }}" required>

          @if ($errors->has('password_current'))
            <p class="text-red text-xs italic">{{ $errors->first('password_current') }}</p>
          @endif
        </div>

        <!-- NEW PASSWORD -->
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold my-2" for="password">
            {{ __('New Password') }}
          </label>

          <input id="password" name="password" type="password" class="w-full mb-4 bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('password') ? 'border-red' : '' }}" required>

          @if ($errors->has('password'))
            <p class="text-red text-xs italic">{{ $errors->first('password') }}</p>
          @endif
        </div>

        <!-- CONFIRM PASSWORD -->
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold my-2" for="password_confirmation">
            {{ __('Confirm Password') }}
          </label>

          <input id="password_confirmation" name="password_confirmation" type="password" class="w-full mb-4 bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('password_confirmation') ? 'border-red' : '' }}" required>

          @if ($errors->has('password_confirmation'))
            <p class="text-red text-xs italic">{{ $errors->first('password_confirmation') }}</p>
          @endif
        </div>


        <!-- BUTTON -->
        <div class="flex justify-center mt-12">
          <button type="submit" class="bg-blue-resolute-dark hover:bg-blue-resolute text-white px-8 py-4 border border-resolute-dark rounded hover:shadow-sm no-underline text-center">
            {{ __('Change Password') }}
          </button>
        </div>

      </form>

    </div>

  </div>
</div>

@endsection
