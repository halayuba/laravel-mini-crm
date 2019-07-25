@extends('layouts.master')

@section('title', 'Employees')

@section('content')

<div class="min-h-screen container mx-auto mt-8 px-2">
  <div class="flex flex-col-reverse md:flex-row">

    <!-- LEFT SIDE -->
    @include('employees.partials.employeesIndex')

    <!-- RIGHT SIDE -->
    @include('employees.partials.filters')

  </div>
</div>

@endsection
