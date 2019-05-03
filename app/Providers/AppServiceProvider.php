<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Company;

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
