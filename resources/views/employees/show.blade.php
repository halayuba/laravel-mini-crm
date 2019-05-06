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

            <div class="px-2 py-4 text-grey-darker">

              <!-- COMPANY -->
              <div class="flex flex-wrap py-2">
                <img src="{{ asset('img/ios-business.svg') }}" class="w-6 h-6">
                <span class="text-sm bg-grey-light p-1 mx-1">Company</span>
                <span class="text-lg ml-2">{{ $employee->company->name }}</span>
              </div>

              <!-- EMAIL -->
              <div class="flex flex-wrap py-2">
                <img src="{{ asset('img/ios-mail.svg') }}" class="w-6 h-6">
                <span class="text-sm bg-grey-light p-1 mx-1">Email</span>
                <span class="text-lg ml-2">{{ $employee->email }}</span>
              </div>

              <!-- PHONE -->
              <div class="flex flex-wrap py-2">
                <img src="{{ asset('img/ios-call.svg') }}" class="w-6 h-6">
                <span class="text-sm bg-grey-light p-1 mx-1">Contact</span>
                <span class="text-lg ml-2">{{ $employee->phone }}</span>
              </div>

            </div>

          </div>

          <!-- ACTION BUTTONS -->
          <div class="w-full px-2 py-4 flex">

            <!-- EDIT ACTION -->
            <span class="flex-1 bg-grey-lighter text-center py-2">
              <a href="{{ route('employee.edit', $employee->id) }}" class="" title="Edit">
                <img src="{{ asset('img/ios-create.svg') }}" class="w-8">
              </a>
            </span>

            <!-- DELETE ACTION -->
            <span class="flex-1 bg-grey-lighter text-center py-2">
              <a href="{{ route('employee.destroy', $employee->id) }}" class="" title="Delete"
                onclick="event.preventDefault();
                document.getElementById('delete-{{ $employee->id }}').submit();"
              >
                <img src="{{ asset('img/md-trash.svg') }}" class="w-8">
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
