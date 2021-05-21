<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

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
        $primary_theme_color_setting = Setting::where('context', 'layout')->where('key', 'color.theme.primary')->first();
        if ($primary_theme_color_setting) {
            View::share('theme_primary_color', $primary_theme_color_setting->value);
        } else {
            View::share('theme_primary_color', '#C02A42');
        }
    }
}
