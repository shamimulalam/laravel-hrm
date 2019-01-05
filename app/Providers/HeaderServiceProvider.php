<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('admin.layouts._header', function ($view) {
            $view->with('logo',\App\Setting::where('type','logo')->first());
            $view->with('company_name',\App\Setting::where('type','company_name')->first());
        });
    }
}
