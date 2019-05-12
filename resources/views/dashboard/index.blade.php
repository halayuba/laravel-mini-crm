@extends('layouts.master_dashboard')

@section('title', 'Dashboard')

@section('content')

  <div class="container mx-auto px-8 mt-4 xl:mt-12">
    <div class="flex flex-wrap">

      <!-- COMPANIES -->
      <div class="max-w-xs bg-white border border-grey-light border-t-4 border-t-green rounded px-4 py-6 mb-8 mr-8 text-center">
        <h1>{{ $companies }}</h1>
        <small>Companies</small>
      </div>

      <!-- MANAGERS -->
      <div class="max-w-xs bg-white border border-grey-light border-t-4 border-t-green rounded px-4 py-6 mb-8 mr-8 text-center">
        <h1>{{ $managers }}</h1>
        <small>Managers</small>
      </div>

      <!-- EMPLOYEES -->
      <div class="max-w-xs bg-white border border-grey-light border-t-4 border-t-green rounded px-4 py-6 mb-8 mr-8 text-center">
        <h1>{{ $employees }}</h1>
        <small>Employees</small>
      </div>

      <!-- TICKETS -->
      <div class="max-w-xs bg-white border border-grey-light border-t-4 border-t-green rounded px-4 py-6 mb-8 mr-8 text-center">
        <h1> 5 </h1>
        <small>Tickets</small>
      </div>

      <!-- PAYMENTS -->
      <div class="max-w-xs bg-white border border-grey-light border-t-4 border-t-green rounded px-4 py-6 mb-8 mr-8 text-center">
        <h1> $50,000 </h1>
        <small>Payments</small>
      </div>


    </div>
  </div>

@endsection
