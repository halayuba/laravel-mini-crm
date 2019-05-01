@extends('layouts.master')

@section('title', 'Company Details')

@section('content')
<div class="min-h-screen container mx-auto mt-12">
  <div class="flex flex-col-reverse sm:flex-row">

    <!-- LEFT SIDE -->
    <div class="w-full sm:w-3/4 px-4">
      <div class="container mx-auto px-6 py-4">

        <!-- CARD -->
        <div class="max-w-md bg-white rounded-gl flex-1 flex flex-col overflow-hidden shadow-lg">

          <div class="px-6 py-4">

            <div class="flex flex-col md:flex-row md:items-center xl:mt-4 py-2 mb-2">
              @if($company->file)
              <!-- LOGO -->
              <figure class="sm:inline-block sm:mr-2 mb-2 sm:mb-0">
                <img src="{{ $company->imagePathName() }}" class="w-16">
              </figure>
              @endif

              <!-- NAME -->
              <div class="font-bold text-lg xl:text-xl">{{ $company->name }}</div>
            </div>

            <div class="px-2 py-4 text-grey-darker">

              <!-- EMAIL -->
              <div class="flex flex-wrap py-2">
                <img src="{{ asset('img/ios-mail.svg') }}" class="w-6 h-6">
                <span class="text-sm bg-grey-light p-1 mx-1">Email</span>
                <span class="text-lg ml-2">{{ $company->email }}</span>
              </div>

              <!-- WEBSITE -->
              <div class="flex flex-wrap py-2">
                <img src="{{ asset('img/md-link.svg') }}" class="w-6 h-6">
                <span class="text-sm bg-grey-light p-1 mx-1">Website</span>
                <span class="text-lg ml-2">{{ $company->website }}</span>
              </div>

            </div>

          </div>

          <!-- ACTION BUTTONS -->
          <div class="w-full px-2 py-4 flex">

            <!-- EDIT ACTION -->
            <span class="flex-1 bg-grey-lighter text-center py-2">
              <a href="{{ route('company.edit', $company->slug) }}" class="" title="Edit">
                <img src="{{ asset('img/ios-create.svg') }}" class="w-8">
              </a>
            </span>

            <!-- DELETE ACTION -->
            <span class="flex-1 bg-grey-lighter text-center py-2">
              <a href="{{ route('company.destroy', $company->slug) }}" class="" title="Delete"
                onclick="event.preventDefault();
                document.getElementById('delete-{{ $company->slug }}').submit();"
              >
                <img src="{{ asset('img/md-trash.svg') }}" class="w-8">
              </a>
            </span>

            <form id="delete-{{ $company->slug }}" action="{{ route('company.destroy', $company->slug) }}" method="POST" class="hidden">
              @csrf
              @method('DELETE')
              <input class="" type="submit" value="Delete">
            </form>

          </div> <!-- END ACTION BUTTONS -->

        </div> <!-- END CARD -->

      </div>
    </div> <!-- END LEFT SIDE -->

    <!-- RIGHT SIDE -->
    @include('companies.partials.filters')

  </div>
</div>

@endsection
