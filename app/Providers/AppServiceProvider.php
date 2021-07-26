<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Modules\Staff\Peyment\Models\PeymentMethod;
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

            view()->share('header_logo', ($settings->where('name', 'header_logo')->count() && $settings->where('name', 'header_logo')->first()->media()->count())? $settings->where('name', 'header_logo')->first()->media()->first() : null);
            view()->share('favicon_image', ($settings->where('name', 'favicon_image')->count() && $settings->where('name', 'favicon_image')->first()->media()->count())? $settings->where('name', 'favicon_image')->first()->media()->first() : null);
            view()->share('symbol_image', ($settings->where('name', 'symbol_image')->count() && $settings->where('name', 'symbol_image')->first()->media()->count())? $settings->where('name', 'symbol_image')->first()->media()->first() : null);
        } else {
            view()->share('fa_store_name', 'دیجی نوا');
            view()->share('site_url', 'localhost');
            view()->share('product_code_prefix', 'dnp');
            view()->share('site_title', 'دیجی نوا');
            view()->share('description', 'فروشگاه اینترنتی دیجی نوا');
            view()->share('index_meta_keywords', 'فروشگاه اینترنتی, دیجی نوا');
            view()->share('site_index_status', 'false');

//            view()->share('header_logo', collect(['path' => 'assets/images/svg', 'name' => 'default-logo.svg']));
            view()->share('header_logo', null);
            view()->share('favicon_image', null);
            view()->share('symbol_image', null);
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

      Relation::morphMap([
        'StoreAddress' => 'App\Models\StoreAddress',
      ]);

      if (\Schema::hasTable('peyment_methods') && count(PeymentMethod::all())) {

        if (\Schema::hasTable('settings') && count(Setting::all()))
        {
          $settings = Setting::all();

          if ($settings->where('name', 'site_url')->count() && !is_null($settings->where('name', 'site_url')->first()->value)) {
            $site_url = $settings->where('name', 'site_url')->first()->value;
          } else {
            $site_url = env('APP_URL');
          }

        }

        config()->set([
          // asanpardakht
          'payment.drivers.asanpardakht.key' => PeymentMethod::where('en_name', 'asanpardakht')->first()->key,
          'payment.drivers.asanpardakht.iv' => PeymentMethod::where('en_name', 'asanpardakht')->first()->iv,
          'payment.drivers.asanpardakht.username' => PeymentMethod::where('en_name', 'asanpardakht')->first()->username,
          'payment.drivers.asanpardakht.password' => PeymentMethod::where('en_name', 'asanpardakht')->first()->password,
          'payment.drivers.asanpardakht.merchantId' => PeymentMethod::where('en_name', 'asanpardakht')->first()->merchantId,
          'payment.drivers.asanpardakht.description' => PeymentMethod::where('en_name', 'asanpardakht')->first()->description,
          'payment.drivers.asanpardakht.callbackUrl' => $site_url . '/payment-order',

          // behpardakht
          'payment.drivers.behpardakht.terminalId' => PeymentMethod::where('en_name', 'behpardakht')->first()->terminalId,
          'payment.drivers.behpardakht.username' => PeymentMethod::where('en_name', 'behpardakht')->first()->username,
          'payment.drivers.behpardakht.password' => PeymentMethod::where('en_name', 'behpardakht')->first()->password,
          'payment.drivers.behpardakht.description' => PeymentMethod::where('en_name', 'behpardakht')->first()->description,
          'payment.drivers.behpardakht.callbackUrl' => $site_url . '/payment-order',


          // idpay
          'payment.drivers.idpay.merchantId' => PeymentMethod::where('en_name', 'idpay')->first()->merchantId,
          'payment.drivers.idpay.description' => PeymentMethod::where('en_name', 'idpay')->first()->description,
          'payment.drivers.idpay.callbackUrl' => $site_url . '/payment-order',

          // irankish
          'payment.drivers.irankish.merchantId' => PeymentMethod::where('en_name', 'irankish')->first()->merchantId,
          'payment.drivers.irankish.sha1Key' => PeymentMethod::where('en_name', 'irankish')->first()->key,
          'payment.drivers.irankish.description' => PeymentMethod::where('en_name', 'irankish')->first()->description,
          'payment.drivers.irankish.callbackUrl' => $site_url . '/payment-order',

          // nextpay
          'payment.drivers.nextpay.merchantId' => PeymentMethod::where('en_name', 'nextpay')->first()->merchantId,
          'payment.drivers.nextpay.description' => PeymentMethod::where('en_name', 'nextpay')->first()->description,
          'payment.drivers.nextpay.callbackUrl' => $site_url . '/payment-order',

          // parsian
          'payment.drivers.parsian.merchantId' => PeymentMethod::where('en_name', 'parsian')->first()->merchantId,
          'payment.drivers.parsian.description' => PeymentMethod::where('en_name', 'parsian')->first()->description,
          'payment.drivers.parsian.callbackUrl' => $site_url . '/payment-order',

          // pasargad
          'payment.drivers.pasargad.merchantId' => PeymentMethod::where('en_name', 'pasargad')->first()->merchantId,
          'payment.drivers.pasargad.terminalCode' => PeymentMethod::where('en_name', 'pasargad')->first()->terminalId,
          'payment.drivers.pasargad.callbackUrl' => $site_url . '/payment-order',

          // payir
          'payment.drivers.payir.merchantId' => PeymentMethod::where('en_name', 'payir')->first()->merchantId,
          'payment.drivers.payir.description' => PeymentMethod::where('en_name', 'payir')->first()->description,
          'payment.drivers.payir.callbackUrl' => $site_url . '/payment-order',

          // payping
          'payment.drivers.payping.merchantId' => PeymentMethod::where('en_name', 'payping')->first()->merchantId,
          'payment.drivers.payping.description' => PeymentMethod::where('en_name', 'payping')->first()->description,
          'payment.drivers.payping.callbackUrl' => $site_url . '/payment-order',

          // paystar
          'payment.drivers.paystar.merchantId' => PeymentMethod::where('en_name', 'paystar')->first()->merchantId,
          'payment.drivers.paystar.description' => PeymentMethod::where('en_name', 'paystar')->first()->description,
          'payment.drivers.paystar.callbackUrl' => $site_url . '/payment-order',

          // poolam
          'payment.drivers.poolam.merchantId' => PeymentMethod::where('en_name', 'poolam')->first()->merchantId,
          'payment.drivers.poolam.description' => PeymentMethod::where('en_name', 'poolam')->first()->description,
          'payment.drivers.poolam.callbackUrl' => $site_url . '/payment-order',

          // sadad
          'payment.drivers.sadad.terminalId' => PeymentMethod::where('en_name', 'sadad')->first()->terminalId,
          'payment.drivers.sadad.merchantId' => PeymentMethod::where('en_name', 'sadad')->first()->merchantId,
          'payment.drivers.sadad.key' => PeymentMethod::where('en_name', 'sadad')->first()->key,
          'payment.drivers.sadad.description' => PeymentMethod::where('en_name', 'sadad')->first()->description,
          'payment.drivers.sadad.callbackUrl' => $site_url . '/payment-order',

          // saman
          'payment.drivers.saman.merchantId' => PeymentMethod::where('en_name', 'saman')->first()->merchantId,
          'payment.drivers.saman.description' => PeymentMethod::where('en_name', 'saman')->first()->description,
          'payment.drivers.saman.callbackUrl' => $site_url . '/payment-order',

          // sepehr
          'payment.drivers.sepehr.terminalId' => PeymentMethod::where('en_name', 'sepehr')->first()->terminalId,
          'payment.drivers.sepehr.description' => PeymentMethod::where('en_name', 'sepehr')->first()->description,
          'payment.drivers.sepehr.callbackUrl' => $site_url . '/payment-order',

          // yekpay
          'payment.drivers.yekpay.merchantId' => PeymentMethod::where('en_name', 'yekpay')->first()->merchantId,
          'payment.drivers.yekpay.description' => PeymentMethod::where('en_name', 'yekpay')->first()->description,
          'payment.drivers.yekpay.callbackUrl' => $site_url . '/payment-order',

          // zarinpal
          'payment.drivers.zarinpal.mode' => (PeymentMethod::where('en_name', 'zarinpal')->first()->options == 'zarin_gate')? 'zaringate' : 'normal',
//          'payment.drivers.zarinpal.merchantId' => PeymentMethod::where('en_name', 'zarinpal')->first()->merchantId,
          'payment.drivers.zarinpal.description' => PeymentMethod::where('en_name', 'zarinpal')->first()->description,
          'payment.drivers.zarinpal.callbackUrl' => $site_url . '/payment-order',


          // zibal
//          'payment.drivers.zibal.merchantId' => PeymentMethod::where('en_name', 'zibal')->first()->merchantId,
          'payment.drivers.zibal.description' => PeymentMethod::where('en_name', 'zibal')->first()->description,
          'payment.drivers.zibal.callbackUrl' => $site_url . '/payment-order',


        ]);


      }


    }
}
