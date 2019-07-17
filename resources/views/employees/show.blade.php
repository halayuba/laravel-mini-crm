@extends('layouts.master')

@section('title', 'Employee')

@section('content')
<div class="min-h-screen container mx-auto mt-12">
  <div class="flex flex-col-reverse sm:flex-row">

    <!-- LEFT SIDE -->
    <div class="w-full sm:w-3/4 px-4">
      <div class="container mx-auto px-6 py-4">

        <!-- RETURN BACK TO THE LIST -->
        <a href="{{ route('employees.index') }}" class="btn_cancel transition mb-4 xl:mb-8">
          Back to the list
        </a>

        <!-- CARD -->
        <div class="max-w-md bg-white rounded-gl flex-1 flex flex-col overflow-hidden shadow-lg">

          <div class="px-6 py-4">

            <div class="flex flex-col md:flex-row md:items-center xl:mt-4 py-2 mb-2">

              <!-- NAME -->
              <div class="font-bold text-lg xl:text-xl">{{ $employee->first_name .' '. $employee->last_name }}</div>

            </div>

            <div class="px-2 py-4 text-gray-700">

              <!-- COMPANY -->
              <div class="flex flex-wrap items-center py-2">
                <div class="text-sm bg-gray-200 mx-1">
                  @include('layouts.partials.svg.business')
                  <span class="hidden xl:inline-block">Company</span>
                </div>
                <span class="ml-2 xl:ml-4">{{ $employee->company->name }}</span>
              </div>

              <!-- EMAIL -->
              <div class="flex flex-wrap items-center py-2">
                <span class="text-sm bg-gray-200 mx-1">
                  @include('layouts.partials.svg.mail')
                  Email
                </span>
                <span class="ml-2 xl:ml-4">{{ $employee->email }}</span>
              </div>

              <!-- PHONE -->
              <div class="flex flex-wrap items-center py-2">
                <span class="text-sm bg-gray-200 mx-1">
                  @include('layouts.partials.svg.phone')
                  Contact
                </span>
                <span class="ml-2 xl:ml-4">{{ $employee->phone }}</span>
              </div>

            </div>

          </div>

          <!-- ACTION BUTTONS -->
          <div class="w-full px-2 py-4 flex">

            <!-- EDIT ACTION -->
            <span class="flex-1 bg-gray-200 text-center py-2">
              <a href="{{ route('employee.edit', $employee->id) }}" class="" title="Edit">
                @include('layouts.partials.svg.edit2')
              </a>
            </span>

            <!-- DELETE ACTION -->
            <span class="flex-1 bg-gray-200 text-center py-2">
              <a href="{{ route('employee.destroy', $employee->id) }}" class="" title="Delete"
                onclick="event.preventDefault();
                document.getElementById('delete-{{ $employee->id }}').submit();"
              >
                @include('layouts.partials.svg.delete2')
              </a>
            </span>

            <form id="delete-{{ $employee->id }}" action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="hidden">
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
