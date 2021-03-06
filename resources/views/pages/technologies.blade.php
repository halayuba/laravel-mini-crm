@extends('layouts.master')

@section('title', 'Technologies')

@section('content')

<div class="mx-2 sm:mx-0">
  <div class="container mx-auto px-4 mt-4 bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
    <p class="font-bold mb-3">Technologies / Tools</p>
    <p> The following is a primary list of technologies and services that were used to create this demo project.</p>
  </div>

  <div class="min-h-screen flex items-center container mx-auto mb-4 xl:mb-32">

      <div class="flex justify-start flex-wrap xl:mb-12">

        <!-- LARAVEL -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mr-4 mb-10 flex items-center">
          <a href="https://laravel.com/" class="">
            <figure class="">
              <img class="" src="{{ asset('img/logos/laravel.png') }}" title="Mini CRM was developed using Laravel 5.8.28">
            </figure>
          </a>
        </div>

        <!-- PHP -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mr-4 mb-10 flex items-center">
          <a href="https://php.net/">
            <figure class="">
              <img class="" src="{{ asset('img/logos/PHP.png') }} " title="PHP">
            </figure>
          </a>
        </div>

        <!-- MYSQL -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mr-4 mb-10 flex items-center">
          <a href="https://mysql.com/">
            <figure class="">
              <img class="" src="{{ asset('img/logos/mysql.png') }} " title="MySQL">
            </figure>
          </a>
        </div>

        <!-- VUE -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mb-10 flex items-center">
          <a href="https://vuejs.org/">
            <figure class="">
              <img class="" src="{{ asset('img/logos/vue.png') }} " title="Vue">
            </figure>
          </a>
        </div>

        <!-- TAILWIND -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mb-10 flex items-center">
          <a href="https://tailwindcss.com/">
            <figure class="">
              <img class="" src="{{ asset('img/logos/tailwind.png') }} " title="TAILWIND">
            </figure>
          </a>
        </div>

        <!-- GIT -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mr-4 mb-10 flex items-center">
          <a href="https://git-scm.com/">
            <figure class="">
              <img class="" src="{{ asset('img/logos/Git.png') }} " title="Git">
            </figure>
          </a>
        </div>

        <!-- GITHUB -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mr-4 mb-10 flex items-center">
          <a href="https://github.com/">
            <figure class="">
              <img class="" src="{{ asset('img/logos/GitHub.png') }} " title="GitHub">
            </figure>
          </a>
        </div>

        <!-- BITBUCKET -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mr-4 mb-10 flex items-center">
          <a href="https://bitbucket.org">
            <figure class="">
              <img class="" src="{{ asset('img/logos/bitbucket.png') }} " title="Bitbucket">
            </figure>
          </a>
        </div>

      <!-- ATOM -->
       <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mr-4 mb-10 flex items-center">
         <a href="https://atom.io/">
           <figure class="">
             <img class="" src="{{ asset('img/logos/atom.png') }} " title="Atom">
           </figure>
         </a>
       </div>

        <!-- DIGITAL OCEAN -->
        <div class="flex-grow-0 w-24 xl:w-48 px-2 xl:px-4 mb-10 flex items-center">
          <a href="https://www.digitalocean.com//">
            <figure class="">
              <img class="" src="{{ asset('img/logos/DO.png') }} " title="DIGITAL OCEAN">
            </figure>
          </a>
        </div>

      </div>

  </div>
</div>

@endsection
