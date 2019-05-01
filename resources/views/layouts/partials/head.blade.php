<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Mini-CRM: @yield('title')</title>
  <meta name="Author" content="Simon Bashir" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <!-- FONTS -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

  @yield('custom_css')

</head>
