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
  <div class="bg-white border border-gray-400 border-t-4 border-t-blue rounded px-4 py-6 xl:py-12">

    <div class="container mx-auto px-8">

      <!-- FORM -->
      <form method="POST" action="{{ route('accounts.store') }}" class="shadow-md px-4 py-4">
        @csrf

        <!-- NAME -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold my-2" for="name">
            {{ __('Name') }}
          </label>

          <input id="name" name="name" type="name" class="w-full mb-4 bg-gray-100 border border-gray-400 text-gray-800 outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('name') ? 'border-red' : '' }}" value="{{ old('name', auth()->user()->name) }}" required>

          @if ($errors->has('name'))
            <p class="text-red text-xs italic">{{ $errors->first('name') }}</p>
          @endif
        </div>

        <!-- EMAIL -->
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold my-2" for="email">
            {{ __('E-Mail Address') }}
          </label>

          <input id="email" name="email" type="email" class="w-full mb-4 bg-gray-100 border border-gray-400 text-gray-800 outline-none rounded px-3 py-3 focus:shadow-outline {{ $errors->has('email') ? 'border-red' : '' }}" value="{{ old('email', auth()->user()->email) }}" required>

          @if ($errors->has('email'))
            <p class="text-red text-xs italic">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <!-- BUTTON -->
        <div class="flex justify-center mt-12">
          <button type="submit" class="btn_new">
            {{ __('Update') }}
          </button>
        </div>

      </form>

    </div>

  </div>
</div>

@endsection
