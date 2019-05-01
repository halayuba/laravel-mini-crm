@extends('layouts.master')

@section('title', 'Companies')

@section('content')
  <div class="min-h-screen container mx-auto mt-8">
    <div class="flex flex-col-reverse sm:flex-row">

      <!-- LEFT SIDE -->
      @include('companies.partials.companiesIndex')

      <!-- RIGHT SIDE -->
      @include('companies.partials.filters')

    </div>
  </div>
@endsection
