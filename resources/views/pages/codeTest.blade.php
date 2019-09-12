@extends('layouts.master')

@section('title', 'Code Test')

@section('content')

<div class="mx-2">
  <div class="container mx-auto px-4 mt-4 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
    <p class="font-bold mb-3">Code Test</p>
    <p>Mini CRM is actually my own version as a solution for the following code test.</p>
  </div>

  <div class="container mx-auto px-2 mt-4 xl:mt-12">

    <section>
      <h3 class="text-xl font-semibold tracking-wide inline-block">Objective:</h3>
      <p class="inline-block ml-2 text-gray-900">Build a Mini-CRM website using Laravel. Feel free to use generated sample text (i.e. your favorite version of Lorem Ipsum) and google images when needed.</p>
    </section>

    <section class="mt-4 xl:mt-6 text-gray-900">
      <h3 class="text-xl font-semibold tracking-wide inline-block py-4">Requirements:</h3>
      <ol class="list-decimal list-inside ml-4">
        <li class="mt-2">Setup the project on a git based VC hosting platform like GitHub or Bitbucket.</li>
        <li class="mt-2">Use Laravel to build a Mini-CRM site for managing companies and their employees.</li>
        <li class="mt-2">Basic Laravel Auth: have the ability to log in as either an Administrator or Manager.</li>
            <ol type="A" class="list-decimal list-inside ml-4 xl:ml-8">
              <li class="mt-2">Administrator Role Access:</li>
                <ol class="list-disc list-inside ml-4 xl:ml-8">
                  <li class="mt-2">Can create/update/delete all companies.</li>
                  <li class="mt-2">Can create/update/delete employees for any company.</li>
                  <li class="mt-2">Can create/update/delete manager users.</li>
                    <ol class="list-inside list-disc ml-4 xl:ml-6">
                      <li class="mt-2">Including assigning company access to manager accounts.</li>
                    </ol>
                </ol>
              <li class="mt-2">Manager Role Access:</li>
                <ol class="list-disc list-inside ml-4 xl:ml-8">
                  <li class="mt-2">Can only update companies they’ve been given access to.</li>
                  <li class="mt-2">Can create/update/delete employees for a company they’ve been given access to.</li>
                </ol>
            </ol>
        <li class="mt-2">Use database seeds to create the first admin and manager user accounts.</li>
        <li class="mt-2">CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.</li>
        <li class="mt-2">Companies DB table consists of these fields: Name (required), email, logo (minimum 100×100), website.</li>
        <li class="mt-2">Employees DB table consists of these fields: First name (required), last name (required), Company (foreign key to Companies), email, phone.</li>
        <li class="mt-2">Use database migrations to create those schemas above.</li>
        <li class="mt-2">Store companies logos in storage/app/public folder and make them accessible from public.</li>
        <li class="mt-2">Use basic Laravel resource controllers with default methods – index, create, store etc.</li>
        <li class="mt-2">Use Laravel’s validation function, using Request classes.</li>
        <li class="mt-2">Use Laravel’s pagination for showing Companies/Employees list, 10 entries per page.</li>
        <li class="mt-2">Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register.</li>
      </ol>
    </section>

    <section class="mt-4 xl:mt-6 text-gray-900">
      <h3 class="text-xl font-semibold tracking-wide inline-block py-4">Bonus Tasks:</h3>
      <ol class="list-decimal list-inside ml-4">
        <li class="mt-2">Write up technical documentation for the Laravel tool you built (above) that could help a subsequent developer set up and build on the project.</li>
        <li class="mt-2">Use docker and/or docker-compose for local deployment (include any special  instructions).</li>
        <li class="mt-2">For any elements where it makes sense, implement them in a reusable manner.</li>
        <li class="mt-2">Use Vue.js for handling admin menu asynchronous pagination.</li>
        <li class="mt-2">Implement Unit, Functional and Acceptance tests using Codeception while following industry standard TDD methodologies.</li>
        <li class="mt-2">Create a mail event to inform a manager that they’ve been given access to a company.</li>
        <li class="mt-2">Use Faker for adding mock company and employee data.</li>
        <li class="mt-2">Allow the company/employee data to be accessed through a private web API.</li>
        <li class="mt-2">Make the project multi-language (using resources/lang folder).</li>
      </ol>
    </section>

    <section class="mt-4 xl:mt-6 text-gray-900">
      <h3 class="text-xl font-semibold tracking-wide inline-block">Delivery:</h3>
      <p class="inline-block ml-2">Share the repo via GitHub or Bitbucket with us. Also please send a mysql database dump along with any instructions.</p>
    </section>

  </div>
</div>

@endsection
