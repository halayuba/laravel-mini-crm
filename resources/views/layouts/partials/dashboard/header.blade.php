<div class="flex items-center py-4 bg-white w-full"
  v-on-clickaway="away"
>

  <div class="w-1/6 text-grey-darkest text-2xl pl-2">
    <!-- LOGO -->
    <div class="flex-1 items-center flex-no-shrink py-1 xl:pl-2">
      <a href="{{ route('home') }}" class="flex items-center no-underline xl:text-2xl text-green-dark">
        <figure class="inline mr-2">
          <img src="{{ asset('img/logo.png') }}" class="w-16">
        </figure>
        Mini CRM
      </a>
    </div>
  </div>

  <div class="flex-1 flex justify-between sm:w-auto sm:flex">

    <!-- SEARCH -->
    <div class="relative w-1/3">

      <input name="" class="w-full text-sm pl-10 pr-4 py-4 bg-grey-lighter border border-blue-resolute-dark outline-none" placeholder="Search (unavailable)">

      <figure class="absolute pin-t px-2 py-3">
        <img src="{{ asset('img/icons/md-search.svg') }}" alt="search" class="w-6 h-6">
      </figure>

    </div>

    <!-- RIGHT SIDE: USER -->
    <div class="w-2/3 flex justify-end items-center">
      <div class="cursor-pointer"
        @click="visible=!visible"
      >

        <div class="flex items-center relative pr-4 xl:pr-8">
          <!-- AVATAR -->
          <img src="{{ asset('img/icons/md-contact.svg') }}" class="inline-block h-8 w-8 rounded-full mr-2">
          <!-- USER NAME -->
          <span class="text-grey-darkest text-sm mr-2">{{ Auth::user()->name }}</span>
          <!-- CHEVRON -->
          <img src="{{ asset('img/icons/md-arrow-dropdown-circle.svg') }}" class="fill-current h-4 w-4 block opacity-50 hover:opacity-100">
        </div>

        <!-- DROPDOWN CONTENT -->
        <div class="leading-tight rounded-lg py-4 bg-white absolute shadow-md z-10"
          :class="[visible? 'block' : 'hidden']"
        >

          <!-- DASHBOARD -->
          <a href="{{ url('/home') }}" class="block px-6 py-3 width-full no-underline hover:bg-grey-light">
            <span class="text-sm text-blue-dark tracking-tight hover:text-blue-darker">Home page</span>
          </a>

          <!-- SIGN OUT -->
          <a href="{{ route('logout') }}" class="block px-6 py-3 width-full no-underline hover:bg-grey-light"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
          >
            <span class="text-sm text-blue-dark tracking-tight hover:text-blue-darker">{{ __('Logout') }}</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
          </form>

        </div>

      </div>
    </div>

  </div>

</div>
