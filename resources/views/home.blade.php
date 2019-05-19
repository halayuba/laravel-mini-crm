@extends('layouts.master')

@section('title', 'Home')

@section('content')

  <div class="min-h-screen container mx-auto px-2 xl:px-4 py-4 xl-py-12 xl:mt-8">
    <div class="flex flex-col items-center ">
        <h1 class="text-2xl text-grey-darkest font-semibold font-sans mb-4 xl:mb-8">Created using Laravel, Vue.js, and TailwindCSS. <a href="/technologies" class="text-base text-indigo no-underine">see more.</a></h1>
        <h3 class="text-lg text-grey-darker font-sans">Mini CRM is a Laravel demo application, mainly CRUD, with an implementation of authorization and access permissions management to restrict user actions. Although this is a generic and basic application, it contains many technical and userful features:</h3>
    </div>

    <div class="mt-4 xl:mt-8 container mx-auto px-2 xl:px-8">

      <h4 class="text-grey-darker font-semibold py-4">Quick overview:</h4>
      <ul class="px-2 text-grey-darker">
        <li class="leading-loose">The tool will allow "Admin" users to perform CRUD operations on Companies, Employees, and Managers.</li>
        <li class="leading-loose">The "AdminRoleMiddleware" middleware will block access to the "Managers" nav menu bar unless signed in as Admin.</li>
        <li class="leading-loose">A pivot table is used to store access permissions for "Managers". So, Managers will only have a restricted view based on the companies they’ve been given access to.</li>
        <li class="leading-loose">Authorization using Laravel "Gate" is used to restrict user actions (for example to prevent performing delete action on Companies).</li>
        <li class="leading-loose">Migrations to create schema and DB structure and Seeders (including factories) are used to pre-populate certain tables.</li>
        <li class="leading-loose">The "ProcessFileUpload" repository is used to validate and store uploaded files to local storage folder that is publicly accessible.</li>
        <li class="leading-loose">Contains many essential concepts: using Filters, Form validation, scope (in Models), view composer, blade service provider, markdown mail, flash messaging, and helper functions are used in this mini CRM application.</li>
        <li class="leading-loose">Vue.js is used to allow previewing images (logo) in the form (client-side and before uploading to the back-end). Vue.js is also used in a few other places (for example, showing/hiding tooltips).</li>
      </ul>
    </div>
  </div>

@endsection
