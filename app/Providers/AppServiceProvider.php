<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useBootstrap();
        
        Blade::if('admin', function() {
            return Auth::user()->role_id == 1;
        });

        Blade::if('webmaster', function() {
            return Auth::user()->role_id == 2;
        });

        Blade::if('writer', function() {
            return Auth::user()->role_id == 3;
        });

        Blade::if('userValidate', function() {
            return Auth::user()->validate == 1;
        });
    }
}
