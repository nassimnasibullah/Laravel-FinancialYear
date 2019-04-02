<?php

namespace KHolmes\FinancialYear;

use Illuminate\Support\ServiceProvider;

class FinancialYearServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('FinancialYearCalculator',function($app) {
            return new FinancialYearCalculator();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
