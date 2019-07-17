<header class="flex items-center bg-gray-900 border-b-4 border-gray-700 shadow-md">

  <!-- LOGO -->
  <div class="flex-1 items-center flex-shrink-0 p-3 xl:pl-8">
    <a href="{{ route('home') }}" class="flex items-center xl:text-2xl text-green-600">
      @component('layouts.partials.svg.logo')
      @endcomponent
      <span class="ml-2">Mini CRM</span>
    </a>
  </div>

  <!-- NAVIGATION MENU -->
  <div class="hidden sm:flex flex-1 items-center justify-center p-6">

    <!-- HOME -->
    <a href="{{ route('home') }}" class="py-2 mr-6 {{ active_topNav('home') }}">Home</a>

    <!-- SHOW ONLY IF USER IS AUTHENTICATED  -->
    @auth
      <!-- COMPANIES -->
      <a href="{{ url('/companies') }}" class="py-2 mr-6 {{ active_topNav('companies') }}">Companies</a>

      <!-- EMPLOYEES -->
      <a href="{{ url('/employees') }}" class="py-2 mr-6 {{ active_topNav('employees') }}">Employees</a>

      <!-- MANAGERS -->
      <a href="{{ url('/managers') }}" class="py-2 {{ active_topNav('managers') }}">Managers</a>
    @endauth
  </div>

  <!-- AUTH -->
  <div class="flex flex-1 justify-end pr-4 xl:pr-8"
    v-on-clickaway="away"
  >

    <div class="hidden sm:block">
      @guest
        <!-- LOGIN -->
        <a href="{{ route('login') }}" class="py-4 {{ active_topNav('login') }}"
          :class="btnState"
          @click="navClicked = true"
        >
          Login
        </a>
      @endguest

      @auth
        <div class="cursor-pointer"
          @click="visible=!visible"
        >

          <div class="flex items-center relative">
            <!-- AVATAR -->
            <img src="{{ asset('img/avatar.png') }}" class="inline-block h-8 w-8 rounded-full mr-2">
            <!-- USER NAME -->
            <span class="text-white text-sm mr-2">{{ Auth::user()->name }}</span>
            <!-- CHEVRON -->
            @include('layouts.partials.svg.chevron')
          </div>

          <!-- DROPDOWN CONTENT -->
          <div class="leading-tight rounded-lg py-4 bg-white absolute shadow-md z-10"
            :class="[visible? 'block' : 'hidden']"
          >

            <!-- DASHBOARD -->
            @can('perform-admin-actions')
            <a href="{{ route('dashboard') }}" class="block px-6 py-3 width-full hover:bg-gray-200">
              @include('layouts.partials.svg.dashboard')
              <span class="text-sm text-green-600 tracking-tight hover:text-blue-700">Dashboard</span>
            </a>
            @endcan

            <!-- SIGN OUT -->
            <a href="{{ route('logout') }}" class="block px-6 py-3 width-full hover:bg-gray-200"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
            >
              @include('layouts.partials.svg.logout')
              <span class="text-sm text-green-600 tracking-tight hover:text-blue-700">{{ __('Logout') }}</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>

          </div>

        </div>
      @endauth
    </div>

  </div>

  <!-- MOBILE MENU -->
  <div class="block sm:hidden mr-3">
      <button class="flex items-center px-3 py-2 border rounded text-white border-teal-300 hover:border-teal-700"
        @click="mobileVisible = !mobileVisible"
      >
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
  </div>

</header>

<!-- NAVIGATION MENU -->
<div class="flex flex-col px-2 py-2 bg-white w-full mt-1 border border-gray-300 rounded"
  v-if="mobileVisible"
>

  <a href="{{ route('home') }}" class="text-gray-600 py-2">Home</a>

  <!-- SHOW ONLY IF USER IS AUTHENTICATED  -->
  @auth
    <!-- COMPANIES -->
    <a href="{{ url('/companies') }}" class="text-gray-600 py-2">Companies</a>

    <!-- EMPLOYEES -->
    <a href="{{ url('/employees') }}" class="text-gray-600 py-2">Employees</a>

    <!-- MANAGERS -->
    <a href="{{ url('/managers') }}" class="text-gray-600 py-2">Managers</a>
  @endauth
</div>
