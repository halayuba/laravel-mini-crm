<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{Company, Employee, User};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      view()->composer(['employees.create', 'employees.edit', 'permissions.create', 'permissions.edit'], function($view)
      {
        $companies = Company::all()->sortBy('name');
        $view->with(compact('companies'));
      });

      view()->composer('dashboard.index', function($view)
      {
        $managers = User::managers()->count();
        $companies = Company::count();
        $employees = Employee::count();
        $view->with(compact('companies', 'managers', 'employees'));
      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
