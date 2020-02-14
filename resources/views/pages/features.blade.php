@extends('layouts.master')

@section('title', 'Features')

@section('content')

<div class="mx-2 sm:mx-0">
  <div class="container mx-auto px-4 mt-4 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
    <p class="font-bold mb-3">Features available</p>
    <p>A quick list of features and functionalities demonstrated in this Mini-CRM tool.</p>
  </div>

  <div class="container mx-auto mt-12 items-center justify-center mb-8 lg:mb-20">

    <!-- 1 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center content-center ml-2 sm:ml-0 py-2 xl:py-10">
        1
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Migration and Seeder</strong>.</p>
        <p class="my-2">Create database tables and attributes then populate them with fake data.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature1')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/migrations-and-seeder.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature1'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 2 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        2
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Search field</strong></p>
        <p class="my-2">Search by name of Company, Manager, or Employee.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature2')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Search.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature2'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 3 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        3
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Action List</strong></p>
        <p class="my-2">Use this action pull-down list to creat a new Company, Manager, or Employee.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature3')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/ActionList.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature3'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 4 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        4
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Form Validation</strong></p>
        <p class="my-2">Basic form validation for better control.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature6')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/FormValidation.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature6'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 5 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        5
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Flash Messages</strong></p>
        <p class="my-2">Flash messages to alert users about the result when performing actions.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature4')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/FlashMsg.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature4'"
          @click="selectedFeature = ''"
        >
        <img src="{{ asset('img/features/FlashMsg_2.png') }}" class="mt-4 p-1 border border-gray-400"
          v-if="selectedFeature === 'feature4'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 6 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        6
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Pagination</strong></p>
        <p class="my-2">Navigate pages when showing a long list of results.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature5')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Pagination.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature5'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 7 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        7
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Display details</strong></p>
        <p class="my-2">Using Card style to show additional details.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature7')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/ViewCard.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature7'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 8 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        8
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Middleware</strong></p>
        <p class="my-2">Using Middleware to block users of type "Manager" access specific pages. Click view to see a figure showing a user of type Manager attempting to access "Managers" menu on the top navigation bar where he was blocked.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature8')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Middleware.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature8'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 9 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        9
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Restricted view</strong></p>
        <p class="my-2">Restrict access to resources based on permissions provided. Click view to see a figure showing a user of type Manager has access to only 3 companies from a long list of companies.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature9')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Manager-restrictive-view.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature9'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 10 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        10
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Access permissions</strong></p>
        <p class="my-2">Configure access permissions for certain types of users to restrict access to resources.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature10')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/DisplayAccessPermission.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature10'"
          @click="feature10 = false"
        >
        <img src="{{ asset('img/features/UpdateAccessPermission.png') }}" class="mt-4 p-1 border border-gray-400"
          v-if="selectedFeature === 'feature10'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 11 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        11
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Gate restriction</strong></p>
        <p class="my-2">Restrict access to resources based on certain criteria. In this figure the delete button has been disabled for this user.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature11')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/GateToRestrictAccess.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature11'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 12 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        12
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Email notification</strong></p>
        <p class="my-2">Using mailable to send formatted email to a user after being granted access permissions.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature12')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Email.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature12'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 13 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        13
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Logo manipulation</strong></p>
        <p class="my-2">DOM manipulation and Front-end development with Vue.js for enhanced results.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature13')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/LogoPreview.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature13'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 14 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        14
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Filters</strong></p>
        <p class="my-2">Filter functionality to narrow down your search result. Click view to see a figure showing only the companies which have been recently added.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature14')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Filters.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature14'"
          @click="selectedFeature = ''"
        >
      </div>
    </div>

    <!-- 15 -->
    <div class="flex flex-col sm:flex-row mb-4">
      <div class="w-1/6 mb-2 sm:mb-0 sm:mr-2 border border-gray-600 rounded-lg flex justify-center items-center text-center ml-2 sm:ml-0 py-2 xl:py-10">
        15
      </div>
      <div class="w-5/6 px-2 text-gray-700"
        @click.self="selectedFeature = ''"
      >
        <p class="mt-2"><strong>Dashboard</strong></p>
        <p class="my-2">A basic Admin dashboard is created to allow for the management of components (eg, setting default look up values). Many new functionality are planned for future sprints.
          <a class="text-indigo-500 text-bold tracking-widest no-underline cursor-pointer"
            @click="toggleClicked('feature15')"
          > View ...
          </a>
        </p>
        <img src="{{ asset('img/features/Dashboard.png') }}" class="p-1 border border-gray-400"
          v-if="selectedFeature === 'feature15'"
          @click="selectedFeature = ''"
        >
      </div>
    </div> <!-- END OF 15 -->

  </div>
</div>

@endsection
