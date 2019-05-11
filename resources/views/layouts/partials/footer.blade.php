<div class="container mx-auto px-6 py-10">
  <div class="flex flex-col lg:flex-row lg:justify-between border-t-2 border-grey-light py-6 text-grey-darker">

    <div class="mb-4 lg:mb-1 flex items-center">
      <figure class="mr-2">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-16">
      </figure>
      {{ (date('Y') > 2019)?  '2019 - '.date('Y') : '2019' }} Mini CRM
    </div>

    <div class="flex flex-col">
      <a href="{{ route('home') }}" class="no-underline text-grey-dark leading-loose hover:underline hover:text-grey-darkest">
        <span class="mr-2"><img src="{{ asset('img/icons/md-home.svg') }}" alt="Home" class="w-4 h-4"></span>
        Home
      </a>
      <a href="{{ url('/features') }}" class="no-underline text-grey-dark leading-loose hover:underline hover:text-grey-darkest">
        <span class="mr-2"><img src="{{ asset('img/icons/md-color-wand.svg') }}" alt="Wand" class="w-4 h-4"></span>
        Features
      </a>
    </div>

    <div class="flex flex-col mb-4 lg:mb-1">
      <!-- SOURCE CODE -->
      <a href="https://github.com/halayuba/laravel-mini-crm.git" class="no-underline text-grey-dark leading-loose hover:underline hover:text-grey-darkest">
        <span class="mr-2"><img src="{{ asset('img/icons/logo-github.svg') }}" alt="github" class="w-4 h-4"></span>
        Source code
      </a>

      <!-- TECHNOLOGIES & SERVICES -->
      <a href="{{ url('/technologies') }}" class="no-underline text-grey-dark leading-loose hover:underline hover:text-grey-darkest">
        <span class="mr-2"><img src="{{ asset('img/icons/ios-clipboard.svg') }}" alt="microphone" class="w-4 h-4"></span>
        Technologies
      </a>
    </div>

    <div>
      Designed &amp; Developed by <a href="#" class="no-underline hover:underline text-grey-dark hover:text-grey-darkest font-semibold">Simon Bashir</a>
    </div>

  </div>
</div>
