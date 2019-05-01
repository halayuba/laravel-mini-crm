<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  @include('layouts.partials.head')

  <body class="font-sans antialiased text-black leading-tight bg-grey-lightest">

    <div id="app">

      @include('layouts.partials.header')

      @include('layouts.partials.alerts')

      @yield('content')

    </div>

    @include('layouts.partials.footer')

    @include('layouts.partials.scripts')

  </body>
</html>
