@extends('layouts.master')

@section('title', 'Workflow')

@section('content')

<div class="mx-2 sm:mx-0">
  <div class="container mx-auto px-4 mt-4 bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
    <p class="font-bold mb-3">Available functions</p>
    <p>A quick list of features and functionalities demonstrated in this Mini-CRM tool.</p>
  </div>

  <div class="container mx-auto mt-12 items-center justify-center mb-8 lg:mb-20">

    <!-- FIRST -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center content-center xl:py-10">
        1
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature1 = false"
      >
        <p class="mb-3"><strong>Migration and Seeder</strong>.</p>
        <p class="mb-2">Create database tables and attributes then populate them with fake data.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature1 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/migrations-and-seeder.png') }}" class="p-1 border border-grey-light"
          v-if="feature1"
          @click="feature1 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- SECOND -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        2
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature2 = false"
      >
        <p class="mb-3"><strong>Search field</strong></p>
        <p class="mb-2">Search by name of Company, Manager, or Employee.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature2 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Search.png') }}" class="p-1 border border-grey-light"
          v-if="feature2"
          @click="feature2 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- THIRD -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        3
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature3 = false"
      >
        <p class="mb-3"><strong>Action List</strong></p>
        <p class="mb-2">Use this action pull-down list to creat a new Company, Manager, or Employee.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature3 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/ActionList.png') }}" class="p-1 border border-grey-light"
          v-if="feature3"
          @click="feature3 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- FORTH -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        4
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature4 = false"
      >
        <p class="mb-3"><strong>Flash Messages</strong></p>
        <p class="mb-2">Flash messages to alert users about the result when performing actions.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature4 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/FlashMsg.png') }}" class="p-1 border border-grey-light"
          v-if="feature4"
          @click="feature4 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- FIFTH -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        5
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature5 = false"
      >
        <p class="mb-3"><strong>Pagination</strong></p>
        <p class="mb-2">Navigate pages when showing a long list of results.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature5 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Pagination.png') }}" class="p-1 border border-grey-light"
          v-if="feature5"
          @click="feature5 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- 6 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        6
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature6 = false"
      >
        <p class="mb-3"><strong>Form Validation</strong></p>
        <p class="mb-2">Basic form validation for better control.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature6 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/FormValidation.png') }}" class="p-1 border border-grey-light"
          v-if="feature6"
          @click="feature6 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- 7 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        7
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature7 = false"
      >
        <p class="mb-3"><strong>Show details</strong></p>
        <p class="mb-2">Using Card style to display additional details.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature7 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/ViewCard.png') }}" class="p-1 border border-grey-light"
          v-if="feature7"
          @click="feature7 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- 8 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        8
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature8 = false"
      >
        <p class="mb-3"><strong>Middleware</strong></p>
        <p class="mb-2">Using Middleware to block users of type "Manager" access specific pages. Click view to see a figure showing a user of type Manager attempting to access "Managers" menu on the top navigation bar where he was blocked.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature8 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Middleware.png') }}" class="p-1 border border-grey-light"
          v-if="feature8"
          @click="feature8 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- 9 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        9
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature9 = false"
      >
        <p class="mb-3"><strong>Restricted view</strong></p>
        <p class="mb-2">Restrict access to resources based on permissions provided. Click view to see a figure showing a user of type Manager has access to only 3 companies from a long list of companies.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature9 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Manager-restrictive-view.png') }}" class="p-1 border border-grey-light"
          v-if="feature9"
          @click="feature9 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- 10 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        10
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature10 = false"
      >
        <p class="mb-3"><strong>Access permissions</strong></p>
        <p class="mb-2">Configure access permissions for certain types of users to restrict access to resources.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature10 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/UpdateAccessPermission.png') }}" class="p-1 border border-grey-light"
          v-if="feature10"
          @click="feature10 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- 11 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        11
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature11 = false"
      >
        <p class="mb-3"><strong>Gate restriction</strong></p>
        <p class="mb-2">Restrict access to resources based on certain criteria. In this figure the delete button has been disabled for this user.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature11 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/GateToRestrictAccess.png') }}" class="p-1 border border-grey-light"
          v-if="feature11"
          @click="feature11 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- 12 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        12
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature11 = false"
      >
        <p class="mb-3"><strong>Email notification</strong></p>
        <p class="mb-2">Using mailable to send formatted email to a user when granted access permissions.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature12 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Email.png') }}" class="p-1 border border-grey-light"
          v-if="feature12"
          @click="feature12 = false"
        >
      </div>
    </div>
    <!-- DIVIDER -->
    <div class="my-3 border-b border-blue-lightest"></div>

    <!-- 13 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-grey-dark rounded-lg justify-center items-center text-center xl:py-10">
        13
      </div>
      <div class="w-5/6 px-2 text-grey-darker"
        @click.self="feature11 = false"
      >
        <p class="mb-3"><strong>Logo manipulation</strong></p>
        <p class="mb-2">DOM manipulation and Front-end development with Vue.js for enhanced results.
          <a href="#" class="text-indigo text-lg text-bold tracking-widest no-underline"
            @click="feature13 = true"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/LogoPreview.png') }}" class="p-1 border border-grey-light"
          v-if="feature13"
          @click="feature13 = false"
        >
      </div>
    </div>

  </div>
</div>

@endsection