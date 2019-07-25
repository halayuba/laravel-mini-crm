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

            /* == CONFIRM THE IMAGE EXISTS IN THE LOCAL FILE STORAGE == */
            $exists = \Storage::exists($pathAndName);

            if( $exists ) return  \Storage::exists($pathAndName);
            else return false;
          }
          else return false;
        });

         //== URI CONTAINS "SEARCH"
        //====================
        \Blade::if('urlNoSearch', function(){
          return ends_with(request()->path(), 'search')? false : true;
        });
    }
}
