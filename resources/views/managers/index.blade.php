@extends('layouts.master')

@section('title', 'Managers')

@section('content')
<div class="min-h-screen container mx-auto mt-8 px-2">
  <div class="flex flex-col-reverse sm:flex-row">

    <!-- LEFT SIDE -->
    @include('managers.partials.managersIndex')

    <!-- RIGHT SIDE -->
    @include('managers.partials.filters')

  </div>
</div>
@endsection
