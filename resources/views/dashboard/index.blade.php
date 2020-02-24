@extends('layouts.master_dashboard')

@section('title', 'Dashboard')

@section('content')

  <div class="container mx-auto mt-4 xl:mt-12 py-8 bg-white border border-gray-200 shadow">
    <div class="flex flex-wrap">

      <!-- COMPANIES -->
      <div class="flex-1 border-r border-gray-300 text-center">
        <small class="text-gray-500 uppercase">Companies</small>
        <span class="mt-4 text-lg text-gray-600 font-semibold block">{{ $companies }}</span>
      </div>

      <!-- MANAGERS -->
      <div class="flex-1 border-r border-gray-300 text-center">
        <small class="text-gray-500 uppercase">Managers</small>
        <span class="mt-4 text-lg text-gray-600 font-semibold block">{{ $managers }}</span>
      </div>

      <!-- EMPLOYEES -->
      <div class="flex-1 border-r border-gray-300 text-center">
        <small class="text-gray-500 uppercase">Employees</small>
        <span class="mt-4 text-lg text-gray-600 font-semibold block">{{ $employees }}</span>
      </div>

      <!-- TICKETS -->
      <div class="flex-1 border-r border-gray-300 text-center">
        <small class="text-gray-500 uppercase">Tickets</small>
        <span class="mt-4 text-lg text-gray-600 font-semibold block"> 5 </span>
      </div>

      <!-- PAYMENTS -->
      <div class="flex-1 border-r border-gray-300 text-center">
        <small class="text-gray-500 uppercase">Payments</small>
        <span class="mt-4 text-lg text-gray-600 font-semibold block"> $50,000 </span>
      </div>


    </div>
  </div>

@endsection
