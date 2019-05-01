@if(session()->has('message'))
    <div class="container mx-auto px-4 my-4 xl:my-8 mb-4 xl:mb-8">
      @if(session('state') == 'success')
        <div class="bg-teal-lightest border-t-4 border-teal rounded-b text-teal-darkest px-4 py-3 shadow-md" role="alert">
          <div class="flex items-center py-2">
            <img src="{{ asset('img\circle-with-check-symbol.svg') }}" alt="Check mark" class="w-6 h-6 mr-4">
            <p class="text-sm xl:text-lg">{{ session('message') }}</p>
          </div>
        </div>
      @elseif(session('state') == 'warning')
        <div class="bg-orange-lightest border-l-4 border-orange text-orange-dark p-4" role="alert">
          <p>{{ session('message') }}</p>
        </div>
      @elseif(session('state') == 'danger')
        <div role="alert">
          <div class="bg-red text-white font-bold rounded-t px-4 py-2">
            Something went wrong
          </div>
          <div class="border border-t-0 border-red-light rounded-b bg-red-lightest px-4 py-3 text-red-dark">
            <p>{{ session('message') }}</p>
          </div>
        </div>
      @elseif(session('state') == 'info')
        <div class="bg-blue text-white text-sm font-bold px-4 py-3" role="alert">
          <p>{{ session('message') }}</p>
        </div>
      @endif
    </div>
@endif

@if(count($errors))
  <div class="relative bg-red text-white container mx-auto rounded text-sm md:text-base px-4 p-2 xl:px-12 xl:py-4 mt-8 xl:mt-16" role="alert"
    :class="{'hidden': hideAlertFlag}"
  >
    <button class="absolute pin-r pin-t pr-4 pt-2 text-5xl w-auto h-auto bg-transparent border-0 outline-none z-20 font-hairline leading-none"
      v-on:click="hideAlertFlag = true"
    >
      <span class="text-white">&times;</span>
    </button>

    <p class="font-bold mb-2">
      Alert!
    </p>
    <p class="text-sm">
      {!! loop_errors($errors) !!}
    </p>
  </div>
@endif
