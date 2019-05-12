<div class="w-1/6 border-r-2 border-grey-light min-h-screen pt-8 px-2">

  <!-- TOP LEVEL -->
  <div class="mb-8">
    <label class="pl-2 text-base font-semibold text-blue-dark">Top Level</label>

    <ul class="list-reset border-b border-grey-light text-sm mt-6 mb-8">

      <!-- HOME -->
      <li class="py-2 pl-4 my-1 hover:bg-grey-light">
        <img src="{{ asset('img/icons/ios-home.svg') }}" alt="rose" class="w-4 h-4 mr-2 opacity-50">
        <a href="{{ route('home') }}" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Home Page</a>
      </li>

      <!-- DASHBOARD -->
      <li class="py-2 my-1 {{ active_dashboard('dashboard') }}">
        <img src="{{ asset('img/icons/ios-keypad.svg') }}" alt="rose" class="w-4 h-4 mr-2 opacity-50">
        <a href="{{ route('dashboard') }}" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Dashboard</a>
      </li>

    </ul>
  </div>

  <!-- MANAGE -->
  <div class="mb-8">
    <label class="pl-2 text-base font-semibold text-blue-dark">Manage Account</label>
    <ul class="list-reset border-b border-grey-light text-sm mt-6 mb-8">

      <!-- ACCOUNT -->
      <li class="py-2 my-1 {{ active_dashboard('accounts') }}">
        <a href="{{ route('accounts.index') }}" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Update Account</a>
      </li>

      <!-- CHANGE PASSWORD -->
      <li class="py-2 my-1 {{ active_dashboard('password') }}">
        <a href="{{ route('password.index') }}" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Change Password</a>
      </li>

    </ul>
  </div>

  <!-- PROJECT ESSENTIALS -->
  <div class="mb-8">
    <label class="pl-2 text-base font-semibold text-blue-dark">Project Essentials</label>

    <ul class="list-reset border-b-2 border-grey-light text-sm mt-6">

      <!-- CUSTOMERS -->
      <li class="py-2 my-1 {{ active_dashboard('customers') }}">
        <a href="" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Customers</a>
      </li>

      <!-- TICKETS -->
      <li class="py-2 my-1 {{ active_dashboard('tickets') }}">
        <a href="" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Tickets</a>
      </li>

      <!-- ORDERS -->
      <li class="py-2 my-1 {{ active_dashboard('orders') }}">
        <a href="" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Orders</a>
      </li>

      <!-- INVOICES -->
      <li class="py-2 my-1 {{ active_dashboard('invoices') }}">
        <a href="" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Invoices</a>
      </li>

      <!-- PAYMENTS -->
      <li class="py-2 my-1 {{ active_dashboard('payments') }}">
        <a href="" class="text-sm text-grey-darker hover:text-blue-dark no-underline">Payments</a>
      </li>

    </ul>
  </div>

</div>
