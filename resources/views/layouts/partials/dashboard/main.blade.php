<!-- MAIN SECTION -->
<div class="container mx-auto px-8">

  <!-- BREADCRUMBS -->
  <div class="text-sm px-2 py-4 border-b-2 border-grey-light mb-8">
    <span class="px-2">
      <a href="#" class="no-underline text-sm text-grey-dark hover:text-blue-resolute-dark">Dashboard</a>
      <span>&nbsp; &#62; &nbsp;</span>
      <a href="#" class="no-underline text-sm text-grey-dark hover:text-blue-resolute-dark">Contacts</a>
      <span>&nbsp; &#62; &nbsp;</span>

    </span>
  </div>

  <!-- HEADING SECTION -->
  <div class="flex items-center mb-1">

    <figure class="mr-3">
      <img src="{{ asset('img/icons/md-home.svg') }}" alt="home" class="w-6 h-6 bg-blue-resolute-icon">
    </figure>

    <h2 class="text-2xl mr-2 font-medium uppercase">halayuba</h2>

    <label class="rounded-full bg-blue-resolute-dark text-white text-xs px-3 py-1 tracking-wide">Active</label>

  </div>

  <div class="text-sm text-grey-dark mb-4">
    123 Main St.
  </div>

  <!-- CARD -->
  <div class="bg-white border border-grey-light border-t-4 border-t-blue-resolute rounded px-4 py-6 mb-8">
    <div class="flex">

      <!-- DETAILS -->
      <div class="w-1/3 px-2 mr-4">
        <h2 class="text-lg font-semibold mb-4">Details</h2>
        <p class="text-sm text-black leading-normal mb-4">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        </p>
        <p class="text-sm text-black leading-normal">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        </p>
      </div>

      <!-- FORM -->
      <div class="w-2/3 pl-8">

        <!-- FIRST ROW -->
        <div class="flex flex-wrap mb-6">
          <div class="w-1/2 pr-4 mb-6 sm:mb-0">
            <label for="" class="block text-grey-darkest text-base mb-2">PID</label>
            <input name="" value="JKGAFWKJHK" class="w-full text-base bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3">
          </div>
          <div class="w-1/2">
            <label for="" class="block text-grey-darkest text-base mb-2">CAD</label>
            <input name="" value="TEST" class="w-full text-base bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3">
          </div>
        </div>

        <!-- SECOND ROW -->
        <div class="w-full mb-6">
          <label for="" class="block text-grey-darkest text-base mb-2">Address</label>
          <input name="" value="123 N. Main St." class="w-full text-base bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3">
        </div>

        <!-- THIRD ROW -->
        <div class="flex flex-wrap">
          <div class="w-1/3 pr-2">
            <label for="" class="block text-grey-darkest text-base mb-2">Rate</label>
            <input name="" value="40" class="w-full text-base bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3">
          </div>
          <div class="w-1/3 px-2">
            <label for="" class="block text-grey-darkest text-base mb-2">Year</label>
            <input name="" value="2018" class="w-full text-base bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3">
          </div>
          <div class="w-1/3 pl-2">
            <label for="" class="block text-grey-darkest text-base mb-2">Agency</label>
            <input name="" value="CB0" class="w-full text-base bg-grey-lightest border border-grey-light text-grey-darkest outline-none rounded px-3 py-3">
          </div>
        </div>

      </div>

    </div>
  </div>

  <!-- FLAGS -->
  <div class="bg-white border border-grey-light border-t-4 border-t-blue-resolute rounded px-4 py-6 mb-8">
    <div class="flex">

      <!-- DETAILS -->
      <div class="w-1/3 px-2 mr-4">
        <h2 class="text-lg font-semibold mb-4">Flags</h2>
        <p class="text-sm text-black leading-normal mb-4">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        </p>
      </div>

      <!-- TABLE -->
      <div class="w-2/3 pl-8">
        <table class="table mb-0">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>&#9633;</td>
              <td>Mark</td>
              <td>
                <div class="flex items-baseline ">
                  <div class="mr-2">
                    &#9711;
                  </div>
                  <div class="text-sm text-red font-bold">
                    something
                  </div>
                </div>
              </td>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>&#9633;</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
          </tbody>
        </table>
        <div class="p-2 bg-grey-lighter mb-4 border-t border-grey">
          <a href="#" class="text-sm font-bold text-grey-dark no-underline">Show two older flags</a>
        </div>
      </div>

    </div>

  </div>

  <!-- CANCEL -->
  <div class="bg-white border border-grey-light border-t-4 border-t-red-resolute rounded px-4 py-6 mb-8">
    <div class="flex">

      <!-- DETAILS -->
      <div class="w-1/3 px-2 mr-4">
        <h2 class="text-lg font-semibold mb-4">Cancel</h2>
        <p class="text-sm text-black leading-normal mb-4">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>

      <!-- TABLE -->
      <div class="w-2/3 pl-8">
        <div class="container mx-auto bg-yellow-lightest px-4 py-4 border border-grey-light border-t-4 border-t-yellow-resolute rounded mb-8">
          <div class="flex">
            <figure class="mr-2">
              <img src="{{ asset('img/icons/md-checkmark-circle-outline.svg') }}" alt="" class="w-4 h-4">
            </figure>
            <p class="text-sm text-yellow-darker">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>

        </div>
        <div class="p-2 bg-grey-lighter mb-4 border-t border-grey">
          <a href="#" class="text-sm font-bold text-grey-dark no-underline">Show two older flags</a>
        </div>
      </div>

    </div>
  </div>
</div>
