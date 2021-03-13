<?php

namespace App\Providers;

use App\Models\Setting;
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
        if (count(Setting::all())) {
            $settings = Setting::select('name', 'value')->get();
            view()->share('site_name', $settings->where('name', 'site_name')->first()->value);
            view()->share('site_url', $settings->where('name', 'site_url')->first()->value);
            view()->share('product_code_prefix', $settings->where('name', 'product_code_prefix')->first()->value);
        }
    }
}
