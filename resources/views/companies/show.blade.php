@extends('layouts.master')

@section('title', 'Company Details')

@section('content')
<div class="min-h-screen container mx-auto mt-12">
  <div class="flex flex-col-reverse sm:flex-row">

    <!-- LEFT SIDE -->
    <div class="w-full sm:w-3/4 px-4">
      <div class="container mx-auto px-6 py-4">

        <!-- RETURN BACK TO THE LIST -->
        <a href="{{ route('companies.index') }}" class="btn_cancel transition mb-4 xl:mb-8">
          Back to the list
        </a>

        <!-- CARD -->
        <div class="max-w-md bg-white rounded-gl flex-1 flex flex-col overflow-hidden shadow-lg">

          <div class="px-6 py-4">

            <div class="flex flex-col md:flex-row md:items-center xl:mt-4 py-2 mb-2">
              <!-- LOGO -->
              @imageExists($company)
              <figure class="sm:inline-block sm:mr-2 mb-2 sm:mb-0">
                <img src="{{ $company->imagePathName() }}" class="w-24">
              </figure>
              @else
              <figure class="sm:inline-block sm:mr-2 mb-2 sm:mb-0">
                <img src="{{ asset('img/img-not-available.png') }}" class="w-24">
              </figure>

              @endimageExists

              <!-- NAME -->
              <div class="font-bold text-lg xl:text-xl">{{ $company->name }}</div>
            </div>

            <div class="px-2 py-4 text-gray-700">

              <!-- EMAIL -->
              <div class="flex flex-wrap items-center py-2">
                <span class="text-sm bg-gray-200 p-1 mx-1">
                  @include('layouts.partials.svg.mail')
                  Email
                </span>
                <span class="text-lg ml-2">{{ $company->email }}</span>
              </div>

              <!-- WEBSITE -->
              <div class="flex flex-wrap py-2">
                <span class="text-sm bg-gray-200 p-1 mx-1">
                  @include('layouts.partials.svg.link2')
                  Website
                </span>
                @if($company->website)
                  <span class="text-lg ml-2">
                    <a href="{{ $company->website }}" target="_blank" class="text-indigo-500">{{ $company->website }}</a>
                  </span>
                @else
                  <span class="text-lg ml-2">{{ $company->website }}</span>
                @endif
              </div>

            </div>

          </div>

          <!-- ACTION BUTTONS -->
          <div class="w-full px-2 py-4 flex">

            <!-- EDIT ACTION -->
            <span class="flex-1 bg-gray-300 text-center py-2">
              <a href="{{ route('company.edit', $company->slug) }}" class="" title="Edit">
                @include('layouts.partials.svg.edit2')
              </a>
            </span>

            <!-- DELETE ACTION -->
            <span class="flex-1 bg-gray-300 text-center py-2">
              <a href="{{ route('company.destroy', $company->slug) }}" class="" title="Delete"
                onclick="event.preventDefault();
                document.getElementById('delete-{{ $company->slug }}').submit();"
              >
                @include('layouts.partials.svg.delete2')
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
