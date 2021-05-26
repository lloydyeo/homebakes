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

        $footer_background_theme_color_setting = Setting::where('context', 'layout')->where('key', 'color.theme.footer.background')->first();
        if ($footer_background_theme_color_setting) {
            View::share('footer_background_theme_color', $footer_background_theme_color_setting->value);
        } else {
            View::share('footer_background_theme_color', '#F2EADE');
        }

        $footer_background_text_color_setting = Setting::where('context', 'layout')->where('key', 'color.theme.footer.text')->first();
        if ($footer_background_text_color_setting) {
            View::share('footer_background_text_color', $footer_background_text_color_setting->value);
        } else {
            View::share('footer_background_text_color', '#B45625');
        }

        $global_custom_css_setting = Setting::where('context', 'layout')->where('key', 'css.global')->first();
        if ($global_custom_css_setting) {
            View::share('global_custom_css', $global_custom_css_setting->value);
        } else {
            View::share('global_custom_css', '');
        }

        $blog_custom_css_setting = Setting::where('context', 'layout')->where('key', 'css.blog')->first();
        if ($blog_custom_css_setting) {
            View::share('blog_custom_css', $blog_custom_css_setting->value);
        } else {
            View::share('blog_custom_css', '');
        }
    }
}
