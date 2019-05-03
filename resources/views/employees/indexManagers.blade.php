@extends('layouts.master')

@section('title', 'Employees')

@section('content')

<div class="min-h-screen container mx-auto mt-8">
  <div class="flex flex-col-reverse sm:flex-row">

    <!-- LEFT SIDE -->
    @include('employees.partials.employeesIndexManagers')

    <!-- RIGHT SIDE -->
    @include('employees.partials.filters')

  </div>
</div>

@endsection
