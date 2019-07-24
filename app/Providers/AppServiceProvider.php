<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\{Company, Employee, User};
use Gate;

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
        /* == SHOW ALL COMPANIES IF THE REQUESTER IS ADMIN == */
        if( Gate::allows('perform-admin-actions') )
        {
          $companies = Company::all()->sortBy('name');
        }
        /* == SHOW ONLY COMPANIES THE REQUESTER HAS PERMISSION TO ACCESS == */
        else
        {
          $companies = request()->user()->companies()->get()->sortBy('name');
        }

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
