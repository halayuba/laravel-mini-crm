<!doctype html>
<html lang="{{ app()->getLocale() }}">

  @include('layouts.partials.head')

  <body class="antialiased bg-gray-100">

    <div id="app">

      @include('layouts.partials.dashboard.header')

      <div class="flex">

        @include('layouts.partials.dashboard.left-side-bar')

        <div class="flex flex-col w-full">
          @include('layouts.partials.alerts')
          @yield('content')
        </div>

      </div>

    </div>

    @include('layouts.partials.scripts')

  </body>
</html>
