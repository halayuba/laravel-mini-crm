<header class="flex items-center bg-black border-b-4 border-grey-dark shadow-md">

  <!-- LOGO -->
  <div class="flex-1 items-center flex-no-shrink p-3 xl:pl-8">
    <a href="{{ route('home') }}" class="flex items-center no-underline xl:text-2xl text-green-dark">
      <figure class="inline mr-2">
        <img src="{{ asset('img/logo.png') }}" class="w-16">
      </figure>
      Mini CRM
    </a>
  </div>

  <!-- NAVIGATION MENU -->
  <div class="hidden sm:flex flex-1 items-center justify-center p-6">

    <!-- HOME -->
    <a href="{{ route('home') }}" class="no-underline py-2 mr-6 {{ active_topNav('home') }}">Home</a>

    <!-- SHOW ONLY IF USER IS AUTHENTICATED  -->
    @auth
      <!-- COMPANIES -->
      <a href="{{ url('/companies') }}" class="no-underline py-2 mr-6 {{ active_topNav('companies') }}">Companies</a>

      <!-- EMPLOYEES -->
      <a href="{{ url('/employees') }}" class="no-underline py-2 mr-6 {{ active_topNav('employees') }}">Employees</a>

      <!-- MANAGERS -->
      <a href="{{ url('/managers') }}" class="no-underline py-2 {{ active_topNav('managers') }}">Managers</a>
    @endauth
  </div>

  <!-- AUTH -->
  <div class="flex flex-1 justify-end pr-4 xl:pr-8"
    v-on-clickaway="away"
  >

    <div class="hidden sm:block">
      @guest
        <!-- LOGIN -->
        <a href="{{ route('login') }}" class="no-underline py-4 {{ active_topNav('login') }}"
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
            <img src="{{ asset('img/icons/chevron.svg') }}" class="fill-current h-4 w-4 block opacity-50 hover:opacity-100">
          </div>

          <!-- DROPDOWN CONTENT -->
          <div class="leading-tight rounded-lg py-4 bg-white absolute shadow-md z-10"
            :class="[visible? 'block' : 'hidden']"
          >

            <!-- DASHBOARD -->
            @can('perform-admin-actions')
            <a href="{{ route('dashboard') }}" class="block px-6 py-3 width-full no-underline hover:bg-grey-light">
              <span class="text-sm text-blue-dark tracking-tight hover:text-blue-darker">Dashboard</span>
            </a>
            @endcan

            <!-- SIGN OUT -->
            <a href="{{ route('logout') }}" class="block px-6 py-3 width-full no-underline hover:bg-grey-light"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
            >
              <span class="text-sm text-blue-dark tracking-tight hover:text-blue-darker">{{ __('Logout') }}</span>
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
      <button class="flex items-center px-3 py-2 border rounded text-white border-teal-light hover:border-teal-darker"
        @click="mobileVisible = !mobileVisible"
      >
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
  </div>

</header>

<!-- NAVIGATION MENU -->
<div class="flex flex-col px-2 py-2 bg-white w-full mt-1 border border-grey-light rounded"
  v-if="mobileVisible"
>

  <a href="{{ route('home') }}" class="no-underline text-grey-dark py-2">Home</a>

  <!-- SHOW ONLY IF USER IS AUTHENTICATED  -->
  @auth
    <!-- COMPANIES -->
    <a href="{{ url('/companies') }}" class="no-underline text-grey-dark py-2">Companies</a>

    <!-- EMPLOYEES -->
    <a href="{{ url('/employees') }}" class="no-underline text-grey-dark py-2">Employees</a>

    <!-- MANAGERS -->
    <a href="{{ url('/managers') }}" class="no-underline text-grey-dark py-2">Managers</a>
  @endauth
</div>
