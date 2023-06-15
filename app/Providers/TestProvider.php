<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       app()->bind("NewFunction",function(){
        return "new function called";
       });
      
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
 
    }
}
