<div class="mt-8 container mx-auto px-6 py-10 border-t border-gray-300">
  <div class="flex flex-col lg:flex-row lg:justify-between text-gray-700">

    <!-- SITE LOGO -->
    <div class="flex items-center">
      @include('layouts.partials.svg.logo')
      <span class="ml-2">{{ (date('Y') > 2019)?  '2019 - '.date('Y') : '2019' }} Mini CRM</span>
    </div>

    <div class="flex flex-col mt-8 lg:mt-0 ml-4 md:ml-0">

      <!-- HOME -->
      <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-500 flex items-baseline">
          <picture class="w-5 h-5 fill-current text-gray-700 inline-block">
            @include('layouts.partials.svg.home')
          </picture>
          <span class="inline-block ml-2">Home</span>
      </a>

      <!-- FEATURES -->
      <div class="mt-4">
        <a href="{{ url('/features') }}" class="text-gray-700 hover:text-green-500 flex items-baseline">
          <picture class="w-5 h-5 fill-current text-gray-700 inline-block">
            @include('layouts.partials.svg.features')
          </picture>
          <span class="inline-block ml-2">Features</span>
        </a>
      </div>

    </div>

    <div class="flex flex-col mt-2 lg:mt-0 ml-4 md:ml-0">

      <!-- SOURCE CODE -->
      <a href="https://github.com/halayuba/laravel-mini-crm.git" class="text-gray-700 hover:text-green-500 mt-4 lg:mt-0 flex items-baseline">
        <picture class="w-5 h-5 fill-current text-gray-700 inline-block">
          @include('layouts.partials.svg.github')
        </picture>
        <span class="inline-block ml-2">Source code</span>
      </a>

      <!-- TECHNOLOGIES & SERVICES -->
      <a href="{{ url('/technologies') }}" class="text-gray-700 hover:text-green-500 mt-4 flex items-baseline">
        <picture class="w-5 h-5 fill-current text-gray-700 inline-block">
          @include('layouts.partials.svg.technologies')
        </picture>
        <span class="inline-block ml-2">Technologies</span>
      </a>

    </div>

    <div class="mt-8 lg:mt-0">
      Designed &amp; Developed by <a href="https://www.linkedin.com/in/simon-sameer-bashir/" class="text-gray-600 hover:text-green-700 font-semibold">Simon Bashir</a>
    </div>

  </div>
</div>
