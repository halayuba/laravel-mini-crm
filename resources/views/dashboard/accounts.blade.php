@extends('layouts.master_dashboard')

@section('title', 'Accounts')

@section('content')

<!-- MAIN SECTION -->
<div class="container mx-auto px-8 my-8 py-4">

  <!-- HEADING SECTION -->
  <div class="flex items-center mb-4">
    <h2 class="text-2xl mr-2 font-medium uppercase">Update Account Profile</h2>
  </div>

  <!-- CARD -->
  <div class="bg-white border border-grey-light border-t-4 border-t-blue-resolute rounded px-4 py-6 xl:py-12">

    <div class="container mx-auto px-8">

      <!-- FORM -->
      <form method="POST" action="{{ route('accounts.store') }}" class="shadow-md px-4 py-4">
        @csrf

        <!-- NAME -->
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold my-2" for="name">
            {{ __('Name') }}
          </label>

          <input id="name" name="name" type="name" class="w-full mb-4 bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('name') ? 'border-red' : '' }}" value="{{ old('name', auth()->user()->name) }}" required>

          @if ($errors->has('name'))
            <p class="text-red text-xs italic">{{ $errors->first('name') }}</p>
          @endif
        </div>

        <!-- EMAIL -->
        <div class="mb-4">
          <label class="block text-grey-darker text-sm font-bold my-2" for="email">
            {{ __('E-Mail Address') }}
          </label>

          <input id="email" name="email" type="email" class="w-full mb-4 bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('email') ? 'border-red' : '' }}" value="{{ old('email', auth()->user()->email) }}" required>

          @if ($errors->has('email'))
            <p class="text-red text-xs italic">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <!-- BUTTON -->
        <div class="flex justify-center mt-12">
          <button type="submit" class="bg-blue-resolute-dark hover:bg-blue-resolute text-white px-8 py-4 border border-resolute-dark rounded hover:shadow-sm no-underline text-center">
            {{ __('Update') }}
          </button>
        </div>

      </form>

    </div>

  </div>
</div>

@endsection
