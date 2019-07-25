<div class="container mx-auto px-6 py-10">
  <div class="flex flex-col lg:flex-row lg:justify-between border-t-2 border-gray-200 py-6 text-gray-700">

    <!-- LOGO -->
    <div class="flex items-center">
        @include('layouts.partials.svg.logo')
      <span class="ml-2">{{ (date('Y') > 2019)?  '2019 - '.date('Y') : '2019' }} Mini CRM</span>
    </div>

    <div class="flex flex-col mt-4 xl:mt-0 ml-4 md:ml-0">
      <!-- HOME -->
      <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-500">
        @include('layouts.partials.svg.home')
        <span class="inline-block">Home</span>
      </a>
      <!-- FEATURES -->
      <a href="{{ url('/features') }}" class="text-gray-700 hover:text-green-500 mt-4">
        @include('layouts.partials.svg.features')
        <span class="">Features</span>
      </a>
    </div>

    <div class="flex flex-col mt-4 xl:mt-0 ml-4 md:ml-0">
      <!-- SOURCE CODE -->
      <a href="https://github.com/halayuba/laravel-mini-crm.git" class="text-gray-700 hover:text-green-500">
        @include('layouts.partials.svg.github')
        <span class="">Source code</span>
      </a>
      <!-- TECHNOLOGIES & SERVICES -->
      <a href="{{ url('/technologies') }}" class="text-gray-700 hover:text-green-500 mt-4">
        @include('layouts.partials.svg.technologies')
        <span class="">Technologies</span>
      </a>
    </div>

    <div class="mt-8 xl:mt-0">
      Designed &amp; Developed by <a href="https://www.linkedin.com/in/simon-bashir-a0309490" class="text-gray-600 hover:text-green-700 font-semibold">Simon Bashir</a>
    </div>

  </div>
</div>
