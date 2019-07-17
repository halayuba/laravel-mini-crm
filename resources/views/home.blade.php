@extends('layouts.master')

@section('title', 'Home')

@section('content')

  <div class="min-h-screen container mx-auto px-2 xl:px-4 py-4 xl-py-12 xl:mt-8">
    <div class="flex flex-col items-center ">
        <h1 class="text-2xl text-gray-900 font-semibold font-sans">Created using Laravel, Vue.js, and TailwindCSS.</h1>
        <h3 class="mt-4"><a href="/technologies" class="text-xl text-indigo-700">see more technologies</a></h3>
        <h3 class="mt-4 xl:mt-8 text-lg text-gray-600">Mini CRM is a Laravel demo application, mainly CRUD, with an implementation of authorization and access permissions management to restrict user actions. Although this is a generic and basic application, it contains many technical and userful features:</h3>
    </div>

    <div class="mt-4 xl:mt-8 container mx-auto px-2 xl:px-8">

      <h4 class="text-gray-700 font-semibold py-4">Quick overview <a href="/features" class="text-indigo-700 text-sm">(see all features)</a>: </h4>
      <ul class="px-2 text-gray-700">
        <li class="leading-loose list-decimal">The application will allow "Admin" users to perform CRUD operations on all Companies, Employees, and Managers.</li>
        <li class="leading-loose list-decimal">The "AdminRoleMiddleware" middleware will block access to the "Managers" navigation menu bar for everyone unless signed in as Admin.</li>
        <li class="leading-loose list-decimal">A pivot table is used to store access permissions for "Managers". So, Managers will only have a restricted view based on the companies they’ve been given access to.</li>
        <li class="leading-loose list-decimal">Authorization using Laravel "Gate" (in AuthServiceProvider) is used to restrict user actions (for example to prevent performing delete action on Companies).</li>
        <li class="leading-loose list-decimal">Migrations to create schema and DB structure and Seeders (including factories) are used to pre-populate certain tables.</li>
        <li class="leading-loose list-decimal">The "ProcessFileUpload" repository ("App\Repositories\ProcessFileUpload") is used to validate and store uploaded files to local storage folder that is publicly accessible.</li>
        <li class="leading-loose list-decimal">The Mini CRM contains many essential concepts and techniques: using Filters ("App\Filters"), Form validation ("App\Http\Requests"), scopes (in Models), view composer ("App\Providers\AppServiceProvider"), blade service provider (""App\Providers\BladeServiceProvider"), markdown mail ("App\Mail\AccessToCompanyGranted"), flash messages (using both back-end custom-made in Laravel and front-end "vue-toastr" package in VueJS), pagination, and helper functions ("app/Http/HelperFunctions.php").</li>
        <li class="leading-loose list-decimal">Vue.js is used to allow previewing in-the-form image of the company logo (ie., handled at the client-side and before uploading to the back-end). Additionally, Vue.js is also used in a few other places (for example, showing/hiding tooltips).</li>
      </ul>
    </div>
  </div>

@endsection
