<!doctype html>
<html lang="{{ app()->getLocale() }}">

  @include('layouts.partials.head')

  <body class="antialiased leading-none bg-gray-100">

    <div id="app">

      @include('layouts.partials.header')

      @include('layouts.partials.alerts')

      @yield('content')

    </div>

    @include('layouts.partials.footer')

    @include('layouts.partials.scripts')

  </body>
</html>
