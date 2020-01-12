<?php

namespace App\Providers;

use App\Type;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        View::composer('*', function($view){
            $types = auth()->check() ? auth()->user()->type()->orderBy('name', 'asc')->get() : "nothing";
            $globalAppBudget = auth()->check() && auth()->user()->budget() ? auth()->user()->budget() . Lang::get('general.currency') : "--";
            $globalAppActivity = auth()->check() && auth()->user()->activity() ? auth()->user()->activity() . Lang::get('general.currency') : "--";
            $globalBalanceData = ['types' => $types, 'globalAppBudget' => $globalAppBudget, 'globalAppActivity' => $globalAppActivity];
            $view->with('globalBalanceData', $globalBalanceData);
        });
    }
}
