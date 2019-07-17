<div class="w-1/6 border-r-2 border-gray-400 min-h-screen pt-8 px-2">

  <!-- TOP LEVEL -->
  <div class="mb-8">
    <label class="pl-2 text-base font-semibold text-teal-600">Top Level</label>

    <ul class="border-b border-gray-400 text-sm mt-6 mb-8">

      <!-- HOME -->
      <li class="py-2 pl-4 my-1 hover:bg-gray-400">
        @include('layouts.partials.svg.home')
        <a href="{{ route('home') }}" class="text-sm text-gray-700 hover:text-teal-600">Home Page</a>
      </li>

      <!-- DASHBOARD -->
      <li class="py-2 my-1 {{ active_dashboard('dashboard') }}">
        @include('layouts.partials.svg.dashboard')
        <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 hover:text-teal-600">Dashboard</a>
      </li>

    </ul>
  </div>

  <!-- MANAGE -->
  <div class="mb-8">
    <label class="pl-2 text-base font-semibold text-teal-600">Manage Account</label>
    <ul class="list-reset border-b border-gray-400 text-sm mt-6 mb-8">

      <!-- ACCOUNT -->
      <li class="py-2 my-1 {{ active_dashboard('accounts') }}">
        <a href="{{ route('accounts.index') }}" class="text-sm text-gray-700 hover:text-teal-600">Update Account</a>
      </li>

      <!-- CHANGE PASSWORD -->
      <li class="py-2 my-1 {{ active_dashboard('password') }}">
        <a href="{{ route('password.index') }}" class="text-sm text-gray-700 hover:text-teal-600">Change Password</a>
      </li>

    </ul>
  </div>

  <!-- PROJECT ESSENTIALS -->
  <div class="mb-8">
    <label class="pl-2 text-base font-semibold text-teal-600">Project Essentials</label>

    <ul class="list-reset border-b-2 border-gray-400 text-sm mt-6">

      <!-- CUSTOMERS -->
      <li class="py-2 my-1 {{ active_dashboard('customers') }}">
        <a href="" class="text-sm text-gray-700 hover:text-teal-600">Customers</a>
      </li>

      <!-- TICKETS -->
      <li class="py-2 my-1 {{ active_dashboard('tickets') }}">
        <a href="" class="text-sm text-gray-700 hover:text-teal-600">Tickets</a>
      </li>

      <!-- ORDERS -->
      <li class="py-2 my-1 {{ active_dashboard('orders') }}">
        <a href="" class="text-sm text-gray-700 hover:text-teal-600">Orders</a>
      </li>

      <!-- INVOICES -->
      <li class="py-2 my-1 {{ active_dashboard('invoices') }}">
        <a href="" class="text-sm text-gray-700 hover:text-teal-600">Invoices</a>
      </li>

      <!-- PAYMENTS -->
      <li class="py-2 my-1 {{ active_dashboard('payments') }}">
        <a href="" class="text-sm text-gray-700 hover:text-teal-600">Payments</a>
      </li>

    </ul>
  </div>

</div>
