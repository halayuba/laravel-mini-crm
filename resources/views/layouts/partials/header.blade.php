<header class="flex items-center bg-gray-900 border-b-4 border-gray-700 shadow-md">

  <!-- LOGO -->
  <div class="flex-1 items-center flex-shrink-0 p-3 xl:pl-8">
    <a href="{{ route('home') }}" class="flex items-center xl:text-2xl text-green-600">
      @component('layouts.partials.svg.logo')
      @endcomponent
      <span class="ml-2">Mini CRM</span>
    </a>
  </div>

  <!-- NAVIGATION MENU: NON MOBILE -->
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

  <!-- AUTHENTICATION -->
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
          <div class="relative flex items-center">
            <!-- AVATAR -->
            <img src="{{ asset('img/avatar.png') }}" class="inline-block h-8 w-8 rounded-full mr-2">
            <!-- USER NAME -->
            <span class="text-white text-sm mr-2">{{ Auth::user()->name }}</span>
            <!-- CHEVRON -->
            @include('layouts.partials.svg.chevron')
          </div>

          <!-- DROPDOWN CONTENT -->
          <div class="leading-tight rounded-lg mt-2 xl:mt-3 xl:mr-2 py-2 md:py-4 bg-white absolute shadow-md z-10"
            :class="[visible? 'block' : 'hidden']"
          >
            <!-- DASHBOARD -->
            @can('perform-admin-actions')
              <a href="{{ route('dashboard') }}" class="block px-4 py-3 width-full hover:bg-gray-200">
                @include('layouts.partials.svg.dashboard')
                <span class="text-sm text-green-600 tracking-tight md:tracking-normal ml-1">Dashboard</span>
              </a>
            @endcan

            <!-- SIGN OUT -->
            <a href="{{ route('logout') }}" class="block px-4 py-3 width-full hover:bg-gray-200"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
            >
              @include('layouts.partials.svg.logout')
              <span class="text-sm text-green-600 tracking-tight md:tracking-normal ml-1">{{ __('Logout') }}</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>

          </div>

        </div>
      @endauth
    </div>

  </div> <!-- END AUTHENTICATION -->

  <!-- MOBILE MENU -->
  <div class="sm:hidden mr-3">
    <button class="flex items-center px-2 text-gray-500 hover:text-white focus:outline-none focust:text-white"
      @click="mobileVisible = !mobileVisible"
    >
      <template
        v-if="mobileVisible"
      >
        @include('layouts.partials.svg.close')
      </template>
      <template
        v-else
      >
        @include('layouts.partials.svg.menu')
      </template>
    </button>
  </div>

</header>

<!-- NAVIGATION MENU -->
<div class="flex flex-col px-2 py-2 bg-white w-full mt-1 border border-gray-300 rounded"
  v-if="mobileVisible"
>

  <a href="{{ route('home') }}" class="text-gray-600 px-2 py-4 hover:bg-gray-200">Home</a>

  <!-- DIVIDER -->
  <span class="p4-4 border-t border-gray-200"></span>

  <!-- SHOW PRIOR TO AUTH -->
  @guest
    <!-- LOGIN -->
    <a href="{{ route('login') }}" class="text-gray-600 px-2 py-4 hover:bg-gray-200">Login</a>
  @endguest

  <!-- SHOW ONLY IF USER IS AUTHENTICATED  -->
  @auth
  <!-- COMPANIES -->
  <a href="{{ url('/companies') }}" class="text-gray-600 px-2 py-4 hover:bg-gray-200">Companies</a>

  <!-- EMPLOYEES -->
  <a href="{{ url('/employees') }}" class="text-gray-600 px-2 py-4 hover:bg-gray-200">Employees</a>

  <!-- MANAGERS -->
  <a href="{{ url('/managers') }}" class="text-gray-600 px-2 py-4 hover:bg-gray-200">Managers</a>

  <!-- DIVIDER -->
  <span class="p4-4 border-t border-gray-200"></span>

  <!-- LOG OUT -->
  <a href="{{ route('logout') }}" class="text-gray-600 px-2 py-4 hover:bg-gray-200"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();"
  >Logout</a>

  @endauth

</div>
