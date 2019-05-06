@extends('layouts.master')

@section('title', 'Edit Company')

@section('content')

<!-- INSTRUCTIONS -->
<div class="container mx-auto px-4 mt-4 bg-yellow-lightest border-l-4 border-yellow-dark text-grey-darker p-4" role="alert">
  <p>Update the form below for the selected company record.</p>
</div>

<div class="flex flex-col items-center justify-center mt-12 sm:mt-16 lg:mb-20">
  <div class="w-full max-w-md">

    <div class="bg-green-lightest border-t-4 border-green-dark rounded-t text-teal-darkest px-4 py-4 shadow-md uppercase font-bold">
      {{ __('Update Company') }}
    </div>

    <form method="POST" action="{{ route('company.update', $company->slug) }}" aria-label="{{ __('Company Update') }}" class="bg-white shadow-md rounded-b px-8 pt-6 py-12 mb-4" enctype="multipart/form-data">
      @csrf
      @method("PATCH")

      <!-- COMPANY NAME -->
      <div class="mb-8 ">
        <div class="mb-2">
          <label class="inline text-grey-darker text-sm font-bold" for="name">
            {{ __('Name') }}
          </label>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 inline">
            <polygon points="5,0 15,0 10,15" fill="#cc3333"/>
          </svg>
        </div>

        <input id="name" type="text" name="name" class="form_input" value="{{ old('name')?: $company->name }}" placeholder="Company/Organization Name" required autofocus>
      </div>

      <!-- EMAIL -->
      <div class="w-full mb-8">
        <label for="email" class="form_label">Email</label>
        <input id="email" type="email" name="email" class="form_input" value="{{ old('email')?: $company->email }}" placeholder="Company email address">
      </div>

      <!-- WEBSITE -->
      <div class="w-full mb-8">
        <label for="website" class="form_label">Website Link</label>
        <input id="website" type="url" name="website" class="form_input" value="{{ old('website')?: $company->website }}" placeholder="Company Website">
      </div>

      <!-- LOGO UPLOAD -->
      <div class="w-full mb-8 xl:mb-16">
        <label class="form_label">Upload Logo

          <!-- TIP -->
          <span class="text-sm text-grey-darker ml-1" title="Logo must be an image and min 100X100"
            @click="tipFlag = !tipFlag"
          >
            <img src="/img/md-information-circle.svg" class="w-6">
          </span>
          <p class="px-2 py-1 text-grey-darker border border-grey"
            v-if="tipFlag"
          >
            Logo must be an image and min 100X100
          </p>
        </label>

          <!-- WHEN IMAGE EXISTS -->
          @imageExists($company)
            <div class="flex flex-col py-2 mb-2">
              <div class="flex">

                <!-- STATE = DEFAULT -->
                <div class=""
                  v-if="state == 'default'"
                >
                  <!-- LOGO -->
                  <figure class="sm:inline-block sm:mr-2 mb-2 sm:mb-0">
                    <img src="{{ $company->imagePathName() }}" class="w-32">
                  </figure>

                </div> <!-- END STATE = DEFAULT -->

                <!-- STATE = UPDATE -->
                <div class=""
                  v-else
                >
                  <!-- VUE FOR FORMATTING AND INITIAL VALIDATION -->
                  <div class="block w-32 h-32 cursor-pointer bg-cover bg-center bg-grey hover:bg-grey-light"
                    :style="{ 'background-image': `url(${imageData})` }"
                    @click="$refs.fileInput.click()"
                  >

                  </div>
                </div> <!-- END STATE = UPDATE -->

                <!-- ACTION ICONS -->
                <div class="ml-2 flex flex-col justify-start">

                  <!-- UPDATE -->
                  <a href="#" title="Update logo" class="mb-2 border border-grey-light p-1 transition"
                    @click.prevent="chooseImage"
                  >
                    <img src="{{ asset('img/update.png') }}" alt="">
                  </a>

                  <!-- DELETE -->
                  <a href="{{ route('logo.delete', $company->slug) }}" title="Remove logo" class="border border-grey-light p-1 transition"
                    onclick="event.preventDefault();
                    document.getElementById('delete-{{ $company->slug }}').submit();"
                  >
                    <img src="{{  asset('img/erase.png') }}" alt="">
                  </a>

                </div> <!-- END UPDATE & DELETE ACTION BUTTONS -->
              </div> <!-- END FLEX CLASS -->

              <span class="bg-grey-lighter rounded px-3 py-1 text-sm lg:text-lg font-semibold text-grey-darker">
                {{ $company->file }}
              </span>

            </div> <!-- END WHEN IMAGE EXISTS -->
          @else
            <!-- WHEN IMAGE DOES NOT EXIST -->
            <div class="block w-32 h-32 cursor-pointer bg-cover bg-center bg-grey hover:bg-grey-light"
              :style="{ 'background-image': `url(${imageData})` }"
              @click="$refs.fileInput.click()"
            >
              <span class="w-full h-full flex justify-center items-center text-grey-darker text-sm text-semibold"
                v-if="!imageData"
              >
                Choose an Image
              </span>

            </div> <!-- END WHEN IMAGE DOES NOT EXIST -->
          @endimageExists

          <!-- HIDDEN FILE INPUT -->
          <input name="file" type="file" class="hidden"
            ref="fileInput"
            @input="onFileSelected"
          >


      </div> <!-- END LOGO UPLOAD -->

      <!-- BUTTONS -->
      <div class="flex justify-end">
        <a href="{{ url('/companies') }}" class="btn_cancel mr-2">Cancel</a>
        <button class="btn_jobsave" type="submit">
          {{ __('Save') }}
        </button>
      </div>
    </form>

  </div>
</div>

<!-- HIDDEN FORM -->
<form id="delete-{{ $company->slug }}" action="{{ route('logo.delete', $company->slug) }}" method="post" class="hidden">
  @csrf
  @method('DELETE')
  <input class="hidden" type="submit" value="Delete">
</form>

@endsection
