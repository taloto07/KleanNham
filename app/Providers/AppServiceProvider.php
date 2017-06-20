<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        // custom validation
        // hour
        Validator::extendImplicit('hour', 'App\CustomValidators\HourValidator@validate');
        Validator::extendImplicit('hour_before', 'App\CustomValidators\HourBeforeValidator@validate');
        Validator::extendImplicit('hour_after', 'App\CustomValidators\HourAfterValidator@validate');
        
        // validation replacer
        Validator::replacer('hour_before', 'App\CustomValidators\HourBeforeValidator@replacer');
        Validator::replacer('hour_after', 'App\CustomValidators\HourAfterValidator@replacer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
