<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
    }

    public function timezone()
{
	config(['app.locale' => 'id']);
	Carbon::setLocale('id');
}

}
