<div class="flex items-center py-4 bg-white w-full"
  v-on-clickaway="away"
>

  <div class="w-1/6 text-gray-900 text-2xl pl-2">
    <!-- LOGO -->
    <div class="flex-1 items-center flex-no-shrink py-1 xl:pl-2">
      <a href="{{ route('home') }}" class="flex items-center xl:text-2xl text-green-600">
        @include('layouts.partials.svg.logo')
        Mini CRM
      </a>
    </div>
  </div>

  <div class="flex-1 flex justify-between sm:w-auto sm:flex">

    <!-- SEARCH -->
    <div class="relative w-1/3">

      <input name="" class="w-full text-sm pl-10 pr-4 py-4 bg-gray-300 border border-green-700 outline-none" placeholder="Search (unavailable)">

      <figure class="absolute top-0 px-2 py-3">
        @include('layouts.partials.svg.search')
      </figure>

    </div>

    <!-- RIGHT SIDE: USER -->
    <div class="w-2/3 flex justify-end items-center">
      <div class="cursor-pointer"
        @click="visible=!visible"
      >

        <div class="flex items-center relative pr-4 xl:pr-8">
          <!-- AVATAR -->
          @include('layouts.partials.svg.avatar')
          <!-- USER NAME -->
          <span class="text-gray-900 text-sm mx-2">{{ Auth::user()->name }}</span>
          <!-- CHEVRON -->
          @include('layouts.partials.svg.chevron2')
        </div>

        <!-- DROPDOWN CONTENT -->
        <div class="leading-tight rounded-lg py-4 bg-white absolute shadow-md z-10"
          :class="[visible? 'block' : 'hidden']"
        >

          <!-- DASHBOARD -->
          <a href="{{ url('/home') }}" class="block px-6 py-3 width-full no-underline hover:bg-gray-200">
            <span class="text-sm text-blue-600 tracking-tight hover:text-blue-700">Home page</span>
          </a>

          <!-- SIGN OUT -->
          <a href="{{ route('logout') }}" class="block px-6 py-3 width-full no-underline hover:bg-gray-200"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
          >
            <span class="text-sm text-blue-600 tracking-tight hover:text-blue-700">{{ __('Logout') }}</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
          </form>

        </div>

      </div>
    </div>

  </div>

</div>
