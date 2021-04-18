<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Modules\Staff\Setting\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Modules\Staff\Shiping\Models\DeliveryMethodValue;


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
        if (\Schema::hasTable('settings') && count(Setting::all())) {
            $settings = Setting::all();
//            $settings = Setting::select('name', 'value')->get();
            view()->share('fa_store_name', $settings->where('name', 'fa_store_name')->first()->value);
            view()->share('site_url', $settings->where('name', 'site_url')->first()->value);
            view()->share('product_code_prefix', $settings->where('name', 'product_code_prefix')->first()->value);
            view()->share('site_title', $settings->where('name', 'site_title')->first()->value);
            view()->share('description', $settings->where('name', 'index_meta_description')->first()->value);
            view()->share('index_meta_keywords', $settings->where('name', 'index_meta_keywords')->first()->value);
            view()->share('site_index_status', $settings->where('name', 'site_index_status')->first()->value);

            view()->share('header_logo', count($settings->where('name', 'header_logo')->first()->media) ? $settings->where('name', 'header_logo')->first()->media()->first() : null);
            view()->share('favicon_image', count($settings->where('name', 'favicon_image')->first()->media) ? $settings->where('name', 'favicon_image')->first()->media()->first() : null);
            view()->share('symbol_image', count($settings->where('name', 'symbol_image')->first()->media) ? $settings->where('name', 'symbol_image')->first()->media()->first() : null);
        }



        if (\Schema::hasTable('delivery_method_values') && count(DeliveryMethodValue::all())) {
          config()->set([
            'postPishtaz.maliat' => DeliveryMethodValue::find(1)->intra_province,
            'postPishtaz.bime' => DeliveryMethodValue::find(2)->intra_province,
            'postPishtaz.inSideKarmozd' => DeliveryMethodValue::find(3)->intra_province,
            'postPishtaz.outSideKarmozd' => DeliveryMethodValue::find(4)->intra_province,
            'postPishtaz.cod' => DeliveryMethodValue::find(5)->intra_province,
            'postPishtaz.haghsabt' => DeliveryMethodValue::find(6)->intra_province,

            'postPishtaz.pishtaz.tariff.500.insidePart' => DeliveryMethodValue::find(7)->intra_province,
            'postPishtaz.pishtaz.tariff.500.edgePart' => DeliveryMethodValue::find(7)->neighboring_provinces,
            'postPishtaz.pishtaz.tariff.500.outsidePart' => DeliveryMethodValue::find(7)->extra_province,

            'postPishtaz.pishtaz.tariff.1000.insidePart' => DeliveryMethodValue::find(8)->intra_province,
            'postPishtaz.pishtaz.tariff.1000.edgePart' => DeliveryMethodValue::find(8)->neighboring_provinces,
            'postPishtaz.pishtaz.tariff.1000.outsidePart' => DeliveryMethodValue::find(8)->extra_province,

            'postPishtaz.pishtaz.tariff.2000.insidePart' => DeliveryMethodValue::find(9)->intra_province,
            'postPishtaz.pishtaz.tariff.2000.edgePart' => DeliveryMethodValue::find(9)->neighboring_provinces,
            'postPishtaz.pishtaz.tariff.2000.outsidePart' => DeliveryMethodValue::find(9)->extra_province,

            'postPishtaz.pishtaz.tariff.3000.insidePart' => DeliveryMethodValue::find(10)->intra_province,
            'postPishtaz.pishtaz.tariff.3000.edgePart' => DeliveryMethodValue::find(10)->neighboring_provinces,
            'postPishtaz.pishtaz.tariff.3000.outsidePart' => DeliveryMethodValue::find(10)->extra_province,

            'postPishtaz.pishtaz.tariff.higher.insidePart' => DeliveryMethodValue::find(11)->intra_province,
            'postPishtaz.pishtaz.tariff.higher.edgePart' => DeliveryMethodValue::find(11)->neighboring_provinces,
            'postPishtaz.pishtaz.tariff.higher.outsidePart' => DeliveryMethodValue::find(11)->extra_province,
          ]);

          config()->set([
            'postSefareshi.maliat' => DeliveryMethodValue::find(12)->intra_province,
            'postSefareshi.bime' => DeliveryMethodValue::find(13)->intra_province,
            'postSefareshi.inSideKarmozd' => DeliveryMethodValue::find(14)->intra_province,
            'postSefareshi.outSideKarmozd' => DeliveryMethodValue::find(15)->intra_province,
            'postSefareshi.cod' => DeliveryMethodValue::find(16)->intra_province,
            'postSefareshi.haghsabt' => DeliveryMethodValue::find(17)->intra_province,

            'postSefareshi.sefareshi.tariff.500.insidePart' => DeliveryMethodValue::find(18)->intra_province,
            'postSefareshi.sefareshi.tariff.500.edgePart' => DeliveryMethodValue::find(18)->neighboring_provinces,
            'postSefareshi.sefareshi.tariff.500.outsidePart' => DeliveryMethodValue::find(18)->extra_province,

            'postSefareshi.sefareshi.tariff.1000.insidePart' => DeliveryMethodValue::find(19)->intra_province,
            'postSefareshi.sefareshi.tariff.1000.edgePart' => DeliveryMethodValue::find(19)->neighboring_provinces,
            'postSefareshi.sefareshi.tariff.1000.outsidePart' => DeliveryMethodValue::find(19)->extra_province,

            'postSefareshi.sefareshi.tariff.2000.insidePart' => DeliveryMethodValue::find(20)->intra_province,
            'postSefareshi.sefareshi.tariff.2000.edgePart' => DeliveryMethodValue::find(20)->neighboring_provinces,
            'postSefareshi.sefareshi.tariff.2000.outsidePart' => DeliveryMethodValue::find(20)->extra_province,

            'postSefareshi.sefareshi.tariff.3000.insidePart' => DeliveryMethodValue::find(21)->intra_province,
            'postSefareshi.sefareshi.tariff.3000.edgePart' => DeliveryMethodValue::find(21)->neighboring_provinces,
            'postSefareshi.sefareshi.tariff.3000.outsidePart' => DeliveryMethodValue::find(21)->extra_province,

            'postSefareshi.sefareshi.tariff.higher.insidePart' => DeliveryMethodValue::find(22)->intra_province,
            'postSefareshi.sefareshi.tariff.higher.edgePart' => DeliveryMethodValue::find(22)->neighboring_provinces,
            'postSefareshi.sefareshi.tariff.higher.outsidePart' => DeliveryMethodValue::find(22)->extra_province,
          ]);

          Schema::defaultStringLength(191);

        }

      Schema::defaultStringLength(191);

    }
}
