@extends('layouts.master')

@section('title', 'Log in')

@section('content')

  <!-- REMINDER NOTIFICATION -->
  <div class="container mx-auto px-4 mt-4 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
    <p class="font-bold mb-3">Notes</p>
    <p>If you'd prefer to login with Admin credentials:</p>
    <p class="text-gray-700 text-sm pl-4">
      email: admin@site.com
      <span class="mx-1 hidden sm:inline">
        @include('layouts.partials.svg.more')
      </span>
      password: password
    </p>
    <p class="mt-2">If you'd prefer to login with Manager credentials:</p>
    <p class="text-gray-700 text-sm pl-4">
      email: manager@site.com
      <span class="mx-1 hidden sm:inline">
        @include('layouts.partials.svg.more')
      </span>
      password: password
    </p>
    <p class="mt-4">The registration form for creating new accounts is hidden by design</p>
    <p></p>
  </div>

  <div class="mt-12 sm:mt-16 flex flex-col items-center justify-center lg:mb-20">
    <div class="w-full max-w-sm">

      <div class="bg-green-100 border-t-4 border-green-600 rounded-t text-teal-900 px-4 py-4 shadow-md uppercase font-bold">
        {{ __('Login') }}
      </div>

      <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="bg-white shadow-md rounded-b px-8 pt-6 pb-8 mb-4">
        @csrf

        <!-- EMAIL -->
        <div class="mb-4 mt-3">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            {{ __('E-Mail Address') }}
          </label>
          <input id="email" type="email" name="email" placeholder="email" value="{{ old('email') }}" required autofocus
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}"
          >

          @if ($errors->has('email'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <!-- PASSWORD -->
        <div class="mb-12">
          <label class="block text-gray-700  text-sm font-bold mb-2" for="password">
            {{ __('Password') }}
          </label>
          <input id="password" type="password" name="password" required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700  mb-3 leading-tight focus:shadow-outline{{ $errors->has('password') ? ' border-red-500' : '' }}"
          >

          @if ($errors->has('password'))
            <p class="text-red-500 text-xs italic">{{ $errors->first('password') }}</p>
          @endif
        </div>

        <!-- BUTTONS -->
        <div class="flex flex-col">
          <button class="flex-1 bg-green-500 hover:bg-green-600 text-green-900 hover:text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline mb-8" type="submit">
            {{ __('Login') }}
          </button>
        </div>
      </form>

    </div>
  </div>

@endsection
