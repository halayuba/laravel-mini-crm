<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Company;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::if('imageExists', function($company){
          if ( $company->file )
          {
            $pathAndName = 'public/uploads/' . $company->file;
            return  \Storage::exists($pathAndName);
          }
          else return false;
        });
    }
}
