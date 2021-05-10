@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);
@endphp

@extends('layouts.front.master')

@section('head')
  <title>{{ $fa_store_name }}</title>
  <link rel="canonical" href="{{ route('front.addAddress') }}"/>
  <meta name="robots" content="noindex, nofollow"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var userInformation = {"firstName":"\u0645\u0647\u062f\u06cc","lastName":"\u062c\u0644\u0627\u0644\u06cc","nationalSecurityNumber":"4900508349","mobile":"09389701200"};
    var userId = 9735394;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/addresses\/add\/";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";
    var activateUrl = "\/digiclub\/activate\/";
  </script>


  <script src="{{ asset('assets/js/sentry.js') }}"></script>
  <script src="{{ asset('assets/new/js/map.js') }}"></script>


  <style>
    @media screen and (-ms-high-contrast: none) {
      .c-shipment-page__to-payment-sticky, .c-checkout__to-shipping-sticky {
        position: relative !important;
      }

      .c-checkout-aside {
        position: relative !important;
      }
    }

    /* all edge versions */
    @supports (-ms-ime-align:auto) {
      .c-shipment-page__to-payment-sticky, .c-checkout__to-shipping-sticky {
        position: relative !important;
      }

      .c-checkout-aside {
        position: relative !important;
      }
    }

    /*.o-page__content {*/
    /*  padding-left: 10px !important;*/
    /*}*/

    /*.o-page__aside {*/
    /*  padding-right: 10px !important;*/
    /*}*/

    /*body.has-top-banner.c-checkout-pages {*/
    /*   padding-top: 0 !important;*/
    /*}*/

    body {
      padding-top: 190px !important;
    }

  </style>


@endsection

@section('content')

  <main id="main">
    <div id="HomePageTopBanner"></div>
    <div class="c-address__page">
      <div class="js-add-address-btn u-hidden" data-not-modal="true"></div>
      <div class="c-address__title js-address-modal-title">جزئیات آدرس</div>
      <div class="c-address__subtitle js-address-modal-subtitle">لطفا جزئیات آدرس و گیرنده سفارش را وارد کنید.</div>
      <form method="post" id="add-edit-address-form" novalidate="novalidate">
        <div class="c-address__modal-content c-map__container--static js-map-interactive u-hidden" id="address-modal-map">
          <div class="c-map__address-container js-map-address-container u-hidden">
            <div class="c-map__address-title">برای ادامه دادن فرآیند خرید موقعیت آدرس زیر را بر روی نقشه تعیین کنید:</div>
            <div class="c-map__address js-map-address"></div>
          </div>
          <div class="c-map__container js-map-container">
            <div class="c-map mapboxgl-map" id="map" data-current-icon="https://www.digikala.com/static/files/c1d18c6c.png">
              <div class="mapboxgl-canary" style="visibility: hidden;"></div>
              <div class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate">
                <canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" width="498" height="408" style="position: absolute; width: 498px; height: 408px;"></canvas>
              </div>
              <div class="mapboxgl-control-container">
                <div class="mapboxgl-ctrl-top-left"></div>
                <div class="mapboxgl-ctrl-top-right"></div>
                <div class="mapboxgl-ctrl-bottom-left">
                  <div class="mapboxgl-ctrl" style="display: none;">
                    <a class="mapboxgl-ctrl-logo" target="_blank" rel="noopener nofollow" href="https://www.mapbox.com/" aria-label="Mapbox logo"></a>
                  </div>
                </div>
                <div class="mapboxgl-ctrl-bottom-right">
                  <div class="mapboxgl-ctrl mapboxgl-ctrl-attrib">
                    <a class="pm-logo" href="https://www.parsimap.com" target="_blank"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-map__search-field">
              <input class="js-search-map-input" placeholder="جستجو آدرس">
              <button type="button" class="o-btn c-map__search-cancel js-search-map-cancel u-hidden"></button>
            </div>
            <div class="c-map__search-content">
              <div class="c-map__search-content-list js-search-map-content"></div>
            </div>
            <input type="hidden" name="address[lat]" value="35.70450207306918">
            <input type="hidden" name="address[lng]" value="51.34907705205751">
            <div class="c-map__overlay"></div>
            <div class="c-map__marker">
              <img src="https://www.digikala.com/static/files/7ab27ed3.svg"></div>
          </div>
          <div class="c-address__modal-footer">
            <div class="c-address__modal-footer-title">مرسوله شما به این موقعیت ارسال خواهد شد.</div>
            <div class="o-btn o-btn--contained-red-md js-select-address-map">ثبت و افزودن جزییات</div>
          </div>
        </div>
        <div class="c-address__modal-content c-map__container--static" id="address-modal-form">
          <div class="c-address__form">
            <div class="c-address__form-row">
              <div class="o-form__field-container">
                <div class="o-form__field-label">استان*</div>
                <div
                  class="selectric-wrapper selectric-c-ui-select selectric-js-ui-select-search selectric-js-dropdown-universal selectric-js-select-state selectric-js-address-state-id">
                  <div class="selectric-hide-select">
                    <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-state js-address-state-id" name="address[state_id]" value="" tabindex="-1">
                      <option value="">انتخاب استان</option>
                      @foreach($states->where('type', 'state') as $state)
                      <option value="{{ $state->id }}">{{ $state->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="o-form__field-container">
                <div class="o-form__field-label">شهر*</div>
                <div class="selectric-wrapper selectric-c-ui-select selectric-js-ui-select-search selectric-js-dropdown-universal selectric-js-select-city selectric-js-address-city-id selectric-hover">
                  <div class="selectric-hide-select">
                    <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-city js-address-city-id" name="address[city_id]" value="" tabindex="-1">
                      <option value="">انتخاب شهر</option>
                      <option value="1698" class="js-not-empty">تهران</option>
                    </select>
                  </div>
                  <div class="selectric">
                    <span class="label">انتخاب شهر</span>
                    <b class="button">▾</b>
                  </div>
                  <div class="selectric-items selectric-has-search" tabindex="-1">
                    <input class="dk-selectric-input" tabindex="0">
                  </div>
                </div>
              </div>
            </div>
            <div class="c-address__form-row js-district-wrapper" style="">
              <div class="o-form__field-container">
                <div class="o-form__field-label">محله*</div>
                <div
                  class="selectric-wrapper selectric-c-ui-select selectric-js-ui-select-search selectric-js-dropdown-universal selectric-js-select-district selectric-js-address-district-id">
                  <div class="selectric-hide-select"><select
                      class="c-ui-select js-ui-select-search js-dropdown-universal js-select-district js-address-district-id"
                      name="address[district_id]" value="" tabindex="-1" style="display: none;">
                      <option value="">انتخاب محله</option>
                      <option value="2834" class="js-not-empty">15 خرداد</option>
                      <option value="2836" class="js-not-empty">17 شهریور</option>
                      <option value="2713" class="js-not-empty">آپادانا</option>
                      <option value="2648" class="js-not-empty">آجودانیه</option>
                      <option value="3077" class="js-not-empty">آرارات</option>
                      <option value="2725" class="js-not-empty">آرژانتین</option>
                      <option value="3096" class="js-not-empty">آریا شهر</option>
                      <option value="2926" class="js-not-empty">آزادشهر</option>
                      <option value="3049" class="js-not-empty">آزادی</option>
                      <option value="3084" class="js-not-empty">آسمان</option>
                      <option value="2629" class="js-not-empty">آفریقا</option>
                      <option value="2882" class="js-not-empty">آیت ا… کاشانی</option>
                      <option value="2774" class="js-not-empty">آیت ا… مدنی</option>
                      <option value="2981" class="js-not-empty">ابراهیم آباد</option>
                      <option value="2827" class="js-not-empty">ابن بابویه</option>
                      <option value="2796" class="js-not-empty">اتوبان افسریه</option>
                      <option value="2657" class="js-not-empty">احتسابیه</option>
                      <option value="2671" class="js-not-empty">احتشامیه</option>
                      <option value="2669" class="js-not-empty">اختیاریه</option>
                      <option value="2653" class="js-not-empty">اختیاریه شمالی</option>
                      <option value="2655" class="js-not-empty">ازگل</option>
                      <option value="3115" class="js-not-empty">استخر</option>
                      <option value="3013" class="js-not-empty">اسفندیاری</option>
                      <option value="3051" class="js-not-empty">اسکندری</option>
                      <option value="3110" class="js-not-empty">اسکندری شمالی</option>
                      <option value="2844" class="js-not-empty">اسلام آباد</option>
                      <option value="2993" class="js-not-empty">اسماعیل آباد</option>
                      <option value="2799" class="js-not-empty">اصفهانک</option>
                      <option value="2806" class="js-not-empty">افسریه</option>
                      <option value="2644" class="js-not-empty">اقدسیه</option>
                      <option value="2974" class="js-not-empty">اکبر آباد</option>
                      <option value="2728" class="js-not-empty">الغدیر</option>
                      <option value="2688" class="js-not-empty">الهیه</option>
                      <option value="2778" class="js-not-empty">امام حسین</option>
                      <option value="2945" class="js-not-empty">امام خمینی</option>
                      <option value="2622" class="js-not-empty">امامزاده قاسم</option>
                      <option value="2627" class="js-not-empty">امانیه</option>
                      <option value="2900" class="js-not-empty">امیر آباد</option>
                      <option value="3052" class="js-not-empty">امیریه</option>
                      <option value="2829" class="js-not-empty">امین آباد</option>
                      <option value="3026" class="js-not-empty">اندرمان -مبارک آباد</option>
                      <option value="3109" class="js-not-empty">انقلاب</option>
                      <option value="2616" class="js-not-empty">اوین</option>
                      <option value="2721" class="js-not-empty">ایرانشهر</option>
                      <option value="3089" class="js-not-empty">ایوانک</option>
                      <option value="2969" class="js-not-empty">بازار</option>
                      <option value="2996" class="js-not-empty">باغ آذری</option>
                      <option value="3065" class="js-not-empty">باغ چهاربری</option>
                      <option value="2916" class="js-not-empty">باغ حاج صیف</option>
                      <option value="2763" class="js-not-empty">باغ صبا</option>
                      <option value="2870" class="js-not-empty">باغ فیض</option>
                      <option value="2658" class="js-not-empty">باغ لش کرد</option>
                      <option value="3040" class="js-not-empty">باقر شهر</option>
                      <option value="3047" class="js-not-empty">باقرخان</option>
                      <option value="2752" class="js-not-empty">باقری</option>
                      <option value="2709" class="js-not-empty">برزیل</option>
                      <option value="3114" class="js-not-empty">برق آلستوم</option>
                      <option value="2994" class="js-not-empty">بریانک</option>
                      <option value="2755" class="js-not-empty">بزرگراه بابایی</option>
                      <option value="2802" class="js-not-empty">بسیج</option>
                      <option value="2666" class="js-not-empty">بلوار اوشان</option>
                      <option value="3075" class="js-not-empty">بلوار تعاون</option>
                      <option value="2619" class="js-not-empty">بلوار دانشجو</option>
                      <option value="2867" class="js-not-empty">بلوار دریا</option>
                      <option value="2879" class="js-not-empty">بلوار فردوس</option>
                      <option value="2692" class="js-not-empty">بلوار کاوه</option>
                      <option value="2905" class="js-not-empty">بلوار کشاورز</option>
                      <option value="3050" class="js-not-empty">بلوار کشاورز -جمهوری</option>
                      <option value="3100" class="js-not-empty">بلوار کشاورز غربی</option>
                      <option value="2679" class="js-not-empty">بنی هاشم</option>
                      <option value="2790" class="js-not-empty">بهارستان</option>
                      <option value="2777" class="js-not-empty">بهارستان -انقلاب</option>
                      <option value="2942" class="js-not-empty">بهبودی</option>
                      <option value="3043" class="js-not-empty">بهشت زهرا</option>
                      <option value="2968" class="js-not-empty">بیمارستان فارابی</option>
                      <option value="2716" class="js-not-empty">بیهقی</option>
                      <option value="2967" class="js-not-empty">پارک رازی</option>
                      <option value="3102" class="js-not-empty">پارک لاله</option>
                      <option value="3094" class="js-not-empty">پارک وی</option>
                      <option value="2955" class="js-not-empty">پاستور- انقلاب</option>
                      <option value="2686" class="js-not-empty">پاسداران</option>
                      <option value="2789" class="js-not-empty">پامنار</option>
                      <option value="3083" class="js-not-empty">پرواز</option>
                      <option value="2634" class="js-not-empty">پل رومی</option>
                      <option value="2868" class="js-not-empty">پونک</option>
                      <option value="2866" class="js-not-empty">پونک باختری</option>
                      <option value="2786" class="js-not-empty">پیروزی</option>
                      <option value="2919" class="js-not-empty">پیکان شهر</option>
                      <option value="3061" class="js-not-empty">تپه سیف</option>
                      <option value="2620" class="js-not-empty">تجریش</option>
                      <option value="2983" class="js-not-empty">ترک آباد</option>
                      <option value="2753" class="js-not-empty">ترمینال شرق</option>
                      <option value="2830" class="js-not-empty">تقی آباد</option>
                      <option value="3045" class="js-not-empty">توحید</option>
                      <option value="2750" class="js-not-empty">تهران پارس</option>
                      <option value="2782" class="js-not-empty">تهران نو -کوی فاطمیه</option>
                      <option value="2897" class="js-not-empty">تهران ویلا</option>
                      <option value="2928" class="js-not-empty">تهرانسر</option>
                      <option value="3107" class="js-not-empty">تیموری</option>
                      <option value="3057" class="js-not-empty">جاده خاوران</option>
                      <option value="3055" class="js-not-empty">جاده خاوران و حومه</option>
                      <option value="2764" class="js-not-empty">جانبازان</option>
                      <option value="2962" class="js-not-empty">جاوید آباد</option>
                      <option value="2707" class="js-not-empty">جردن</option>
                      <option value="2749" class="js-not-empty">جشنواره</option>
                      <option value="3042" class="js-not-empty">جعفر آباد</option>
                      <option value="2898" class="js-not-empty">جلال آل احمد</option>
                      <option value="2641" class="js-not-empty">جماران</option>
                      <option value="2638" class="js-not-empty">جمال آباد</option>
                      <option value="3111" class="js-not-empty">جمالزاده شمالی</option>
                      <option value="3046" class="js-not-empty">جمشیدیه</option>
                      <option value="2952" class="js-not-empty">جمهوری</option>
                      <option value="2869" class="js-not-empty">جنت آباد</option>
                      <option value="3005" class="js-not-empty">جوادیه</option>
                      <option value="2824" class="js-not-empty">جوانمرد</option>
                      <option value="3099" class="js-not-empty">جهان آرا</option>
                      <option value="2963" class="js-not-empty">جیحون</option>
                      <option value="2685" class="js-not-empty">چالهرز</option>
                      <option value="2825" class="js-not-empty">چشمه علی</option>
                      <option value="3079" class="js-not-empty">چوب تراش</option>
                      <option value="3106" class="js-not-empty">چهارراه ولیعصر</option>
                      <option value="3012" class="js-not-empty">چهارصد دستگاه</option>
                      <option value="3044" class="js-not-empty">چهل خرواری</option>
                      <option value="2925" class="js-not-empty">چیتگر</option>
                      <option value="2633" class="js-not-empty">چیذر</option>
                      <option value="2656" class="js-not-empty">حدادیه</option>
                      <option value="2880" class="js-not-empty">حسن آباد</option>
                      <option value="3067" class="js-not-empty">حسین آباد</option>
                      <option value="2762" class="js-not-empty">حشمتیه</option>
                      <option value="2640" class="js-not-empty">حصارک</option>
                      <option value="2704" class="js-not-empty">حقانی</option>
                      <option value="2741" class="js-not-empty">حکیمیه</option>
                      <option value="2740" class="js-not-empty">خاک سفید</option>
                      <option value="2723" class="js-not-empty">خالد اسلامبولی</option>
                      <option value="2970" class="js-not-empty">خانی آباد</option>
                      <option value="3016" class="js-not-empty">خانی آباد نو</option>
                      <option value="2997" class="js-not-empty">خزانه بخارا</option>
                      <option value="2995" class="js-not-empty">خزانه فلاح -امین الملک</option>
                      <option value="3027" class="js-not-empty">خلازیل</option>
                      <option value="2687" class="js-not-empty">خواجه عبدالله -جلفا</option>
                      <option value="2865" class="js-not-empty">خوردین</option>
                      <option value="2966" class="js-not-empty">خیابان قزوین</option>
                      <option value="2772" class="js-not-empty">خیابان گرگان</option>
                      <option value="2972" class="js-not-empty">خیام</option>
                      <option value="3038" class="js-not-empty">خیر آباد</option>
                      <option value="3104" class="js-not-empty">دانشگاه تهران</option>
                      <option value="2682" class="js-not-empty">داودیه</option>
                      <option value="2625" class="js-not-empty">دربند</option>
                      <option value="3088" class="js-not-empty">درختی</option>
                      <option value="2618" class="js-not-empty">درکه</option>
                      <option value="2672" class="js-not-empty">دروس</option>
                      <option value="2940" class="js-not-empty">دریان نو</option>
                      <option value="2621" class="js-not-empty">دزاشیب</option>
                      <option value="2729" class="js-not-empty">دلاوران</option>
                      <option value="2771" class="js-not-empty">دماوند</option>
                      <option value="2751" class="js-not-empty">دماوند -رسالت</option>
                      <option value="2804" class="js-not-empty">دولاب</option>
                      <option value="3034" class="js-not-empty">دولت آباد</option>
                      <option value="2694" class="js-not-empty">دولت- شریعتی</option>
                      <option value="3011" class="js-not-empty">دولتخواه شریفی</option>
                      <option value="2703" class="js-not-empty">ده نارمک</option>
                      <option value="2909" class="js-not-empty">دهکده المپیک</option>
                      <option value="2674" class="js-not-empty">دیباجی جنوبی</option>
                      <option value="2828" class="js-not-empty">دیلمان</option>
                      <option value="3006" class="js-not-empty">راه آهن</option>
                      <option value="2637" class="js-not-empty">رحمان آباد</option>
                      <option value="2726" class="js-not-empty">رسالت</option>
                      <option value="2819" class="js-not-empty">رضویه</option>
                      <option value="2959" class="js-not-empty">رودکی</option>
                      <option value="2678" class="js-not-empty">ریحانی</option>
                      <option value="922" class="js-not-empty">زرآباد</option>
                      <option value="2906" class="js-not-empty">زرتشت</option>
                      <option value="2761" class="js-not-empty">زرتشت -بهجت آباد</option>
                      <option value="2689" class="js-not-empty">زرگنده</option>
                      <option value="2615" class="js-not-empty">زعفرانیه</option>
                      <option value="3108" class="js-not-empty">زنجان شمالی</option>
                      <option value="2823" class="js-not-empty">زور آباد -منصور آباد</option>
                      <option value="2891" class="js-not-empty">سازمان آب</option>
                      <option value="2878" class="js-not-empty">سازمان آب -بلوار آسیا</option>
                      <option value="3078" class="js-not-empty">سازمان آب غرب</option>
                      <option value="2649" class="js-not-empty">سامیان شهرک طالقانی</option>
                      <option value="3048" class="js-not-empty">ستارخان</option>
                      <option value="2873" class="js-not-empty">ستاری -اشرفی اصفهانی</option>
                      <option value="2883" class="js-not-empty">ستاری- صادقیه</option>
                      <option value="3073" class="js-not-empty">سردار جنگل</option>
                      <option value="2837" class="js-not-empty">سعادت آباد</option>
                      <option value="2623" class="js-not-empty">سعد آباد</option>
                      <option value="2791" class="js-not-empty">سعدی</option>
                      <option value="2980" class="js-not-empty">سعید آباد</option>
                      <option value="2800" class="js-not-empty">سلیمانیه</option>
                      <option value="2759" class="js-not-empty">سمیه</option>
                      <option value="2659" class="js-not-empty">سوهانک</option>
                      <option value="2973" class="js-not-empty">سه راه آذری</option>
                      <option value="2795" class="js-not-empty">سه راه تختی</option>
                      <option value="2712" class="js-not-empty">سهروردی</option>
                      <option value="2683" class="js-not-empty">سید خندان</option>
                      <option value="3097" class="js-not-empty">سیمون بولیوار</option>
                      <option value="2979" class="js-not-empty">شاد آباد</option>
                      <option value="3113" class="js-not-empty">شادمان</option>
                      <option value="2943" class="js-not-empty">شادمهر</option>
                      <option value="3082" class="js-not-empty">شاهین</option>
                      <option value="3007" class="js-not-empty">شریعتی</option>
                      <option value="2675" class="js-not-empty">شمس آباد</option>
                      <option value="2727" class="js-not-empty">شمیران نو -کالاد</option>
                      <option value="3031" class="js-not-empty">شهر ری</option>
                      <option value="2857" class="js-not-empty">شهر زیبا</option>
                      <option value="3039" class="js-not-empty">شهر سنگ</option>
                      <option value="2895" class="js-not-empty">شهرآرا</option>
                      <option value="2854" class="js-not-empty">شهران</option>
                      <option value="2922" class="js-not-empty">شهرک 22 بهمن</option>
                      <option value="2937" class="js-not-empty">شهرک آپادانا</option>
                      <option value="3095" class="js-not-empty">شهرک آتی ساز</option>
                      <option value="2982" class="js-not-empty">شهرک آزادی</option>
                      <option value="2896" class="js-not-empty">شهرک آزمایش</option>
                      <option value="2933" class="js-not-empty">شهرک آسمان</option>
                      <option value="3010" class="js-not-empty">شهرک ابوذر</option>
                      <option value="2924" class="js-not-empty">شهرک استقلال</option>
                      <option value="3063" class="js-not-empty">شهرک اسلامآباد</option>
                      <option value="2936" class="js-not-empty">شهرک اکباتان</option>
                      <option value="2851" class="js-not-empty">شهرک المهدی</option>
                      <option value="2989" class="js-not-empty">شهرک امام خمینی</option>
                      <option value="2732" class="js-not-empty">شهرک امید</option>
                      <option value="2913" class="js-not-empty">شهرک امیر کبیر</option>
                      <option value="2931" class="js-not-empty">شهرک انصار</option>
                      <option value="2826" class="js-not-empty">شهرک انقلاب</option>
                      <option value="3017" class="js-not-empty">شهرک بستان</option>
                      <option value="2998" class="js-not-empty">شهرک بعثت</option>
                      <option value="3085" class="js-not-empty">شهرک بوعلی</option>
                      <option value="2735" class="js-not-empty">شهرک پارس -باقری</option>
                      <option value="2881" class="js-not-empty">شهرک پرواز</option>
                      <option value="2841" class="js-not-empty">شهرک تامین اجتماعی</option>
                      <option value="2813" class="js-not-empty">شهرک جمهوری اسلامی</option>
                      <option value="2914" class="js-not-empty">شهرک جهادگران</option>
                      <option value="2912" class="js-not-empty">شهرک چشمه</option>
                      <option value="2839" class="js-not-empty">شهرک خودروسازان</option>
                      <option value="3074" class="js-not-empty">شهرک دانشگاه</option>
                      <option value="2664" class="js-not-empty">شهرک دانشگاه -شهرک ابوذر</option>
                      <option value="2754" class="js-not-empty">شهرک دانشگاه امام حسین</option>
                      <option value="2923" class="js-not-empty">شهرک دانشگاه تهران</option>
                      <option value="2935" class="js-not-empty">شهرک دریا</option>
                      <option value="2910" class="js-not-empty">شهرک دژبان</option>
                      <option value="2908" class="js-not-empty">شهرک راه آهن</option>
                      <option value="3022" class="js-not-empty">شهرک رسالت</option>
                      <option value="2888" class="js-not-empty">شهرک ژاندارمری -شهرک انقلاب</option>
                      <option value="2862" class="js-not-empty">شهرک سئول</option>
                      <option value="2847" class="js-not-empty">شهرک سجاد</option>
                      <option value="2920" class="js-not-empty">شهرک سینمایی</option>
                      <option value="2812" class="js-not-empty">شهرک شاهد</option>
                      <option value="2871" class="js-not-empty">شهرک شاهین</option>
                      <option value="2843" class="js-not-empty">شهرک شریف آباد</option>
                      <option value="3093" class="js-not-empty">شهرک شهید باقری</option>
                      <option value="3001" class="js-not-empty">شهرک شهید بهشتی</option>
                      <option value="2651" class="js-not-empty">شهرک شهید چمران</option>
                      <option value="2938" class="js-not-empty">شهرک شهید فکوری</option>
                      <option value="2992" class="js-not-empty">شهرک صاحب الزمان</option>
                      <option value="2990" class="js-not-empty">شهرک طالقانی</option>
                      <option value="3000" class="js-not-empty">شهرک طالقانی- علی آباد</option>
                      <option value="2864" class="js-not-empty">شهرک غرب</option>
                      <option value="3036" class="js-not-empty">شهرک فاطمه</option>
                      <option value="2929" class="js-not-empty">شهرک فرهنگیان</option>
                      <option value="2661" class="js-not-empty">شهرک قائم</option>
                      <option value="2617" class="js-not-empty">شهرک کارمندان دولت</option>
                      <option value="2932" class="js-not-empty">شهرک کاظمیه</option>
                      <option value="2848" class="js-not-empty">شهرک کوهسار</option>
                      <option value="3066" class="js-not-empty">شهرک گلشهر</option>
                      <option value="2663" class="js-not-empty">شهرک گلها</option>
                      <option value="2697" class="js-not-empty">شهرک لویزان</option>
                      <option value="2742" class="js-not-empty">شهرک مجید آباد</option>
                      <option value="2662" class="js-not-empty">شهرک محلاتی</option>
                      <option value="2840" class="js-not-empty">شهرک مخابرات</option>
                      <option value="2991" class="js-not-empty">شهرک مسلمین</option>
                      <option value="2984" class="js-not-empty">شهرک مسیح آبادی</option>
                      <option value="3028" class="js-not-empty">شهرک مصطفی خمینی</option>
                      <option value="3064" class="js-not-empty">شهرک مطهری</option>
                      <option value="2815" class="js-not-empty">شهرک مطهری- کیان شهر</option>
                      <option value="3018" class="js-not-empty">شهرک معراج</option>
                      <option value="2831" class="js-not-empty">شهرک مفتح</option>
                      <option value="2846" class="js-not-empty">شهرک نفت</option>
                      <option value="2660" class="js-not-empty">شهرک نفت -شهرک البرز</option>
                      <option value="3101" class="js-not-empty">شهرک نمونه سپاه</option>
                      <option value="2850" class="js-not-empty">شهرک نیروی هوایی</option>
                      <option value="2872" class="js-not-empty">شهرک والفجر</option>
                      <option value="2698" class="js-not-empty">شهرک ولیعصر</option>
                      <option value="3080" class="js-not-empty">شهرک هما</option>
                      <option value="2934" class="js-not-empty">شهرک هواپیمایی کشوری</option>
                      <option value="2927" class="js-not-empty">شهرکشهرداری</option>
                      <option value="2767" class="js-not-empty">شهید باقری</option>
                      <option value="3060" class="js-not-empty">شهید باهنر</option>
                      <option value="3081" class="js-not-empty">شهید خرم رودی</option>
                      <option value="3030" class="js-not-empty">شهید رجائی</option>
                      <option value="2907" class="js-not-empty">شهید گمنام</option>
                      <option value="2696" class="js-not-empty">شیان</option>
                      <option value="2861" class="js-not-empty">شیخ بهایی</option>
                      <option value="3092" class="js-not-empty">شیراز</option>
                      <option value="3090" class="js-not-empty">شیشه مینا</option>
                      <option value="2645" class="js-not-empty">صاحبقرانیه</option>
                      <option value="2885" class="js-not-empty">صادقیه</option>
                      <option value="3021" class="js-not-empty">صالحآباد</option>
                      <option value="2787" class="js-not-empty">صد دستگاه</option>
                      <option value="2917" class="js-not-empty">صنایع رنگ سازی</option>
                      <option value="2684" class="js-not-empty">ضرابخانه</option>
                      <option value="2961" class="js-not-empty">طرشت</option>
                      <option value="2890" class="js-not-empty">طرشت شمالی</option>
                      <option value="2680" class="js-not-empty">ظفر</option>
                      <option value="3029" class="js-not-empty">عباس آباد</option>
                      <option value="3068" class="js-not-empty">عبدالله آباد</option>
                      <option value="3008" class="js-not-empty">عبدل آباد</option>
                      <option value="2985" class="js-not-empty">عرب آباد</option>
                      <option value="3020" class="js-not-empty">عظیم آباد</option>
                      <option value="2904" class="js-not-empty">فاطمی</option>
                      <option value="2976" class="js-not-empty">فتح</option>
                      <option value="2730" class="js-not-empty">فرجام</option>
                      <option value="2798" class="js-not-empty">فرح آباد</option>
                      <option value="2845" class="js-not-empty">فرحزاد</option>
                      <option value="2947" class="js-not-empty">فردوسی</option>
                      <option value="2650" class="js-not-empty">فرمانیه</option>
                      <option value="2951" class="js-not-empty">فلسطین</option>
                      <option value="3002" class="js-not-empty">فهیم آباد</option>
                      <option value="2719" class="js-not-empty">قائم مقام</option>
                      <option value="3062" class="js-not-empty">قاسم آباد</option>
                      <option value="2901" class="js-not-empty">قزل قلعه</option>
                      <option value="2801" class="js-not-empty">قصر فیروزه</option>
                      <option value="2811" class="js-not-empty">قصرفیروزه</option>
                      <option value="2863" class="js-not-empty">قلعه ارامنه</option>
                      <option value="2820" class="js-not-empty">قلعه دولت آباد</option>
                      <option value="3037" class="js-not-empty">قلعه فتح آباد</option>
                      <option value="3004" class="js-not-empty">قلعه مرغی</option>
                      <option value="2690" class="js-not-empty">قلهک</option>
                      <option value="2733" class="js-not-empty">قنات کوثر</option>
                      <option value="3035" class="js-not-empty">قیصریه</option>
                      <option value="2632" class="js-not-empty">قیطریه</option>
                      <option value="2954" class="js-not-empty">کارگر</option>
                      <option value="3105" class="js-not-empty">کارگر شمالی</option>
                      <option value="2642" class="js-not-empty">کاشانک</option>
                      <option value="2677" class="js-not-empty">کاظم آباد</option>
                      <option value="2646" class="js-not-empty">کامرانیه</option>
                      <option value="2710" class="js-not-empty">کاوسیه -شهرک فجر</option>
                      <option value="2859" class="js-not-empty">کردستان</option>
                      <option value="3025" class="js-not-empty">کریم آباد</option>
                      <option value="2757" class="js-not-empty">کریمخان</option>
                      <option value="2693" class="js-not-empty">کلاهدوز</option>
                      <option value="2673" class="js-not-empty">کلاهدوز -دولت</option>
                      <option value="2856" class="js-not-empty">کن</option>
                      <option value="3076" class="js-not-empty">کوهک</option>
                      <option value="2978" class="js-not-empty">کوی 17 شهریور</option>
                      <option value="3015" class="js-not-empty">کوی آزادی</option>
                      <option value="3032" class="js-not-empty">کوی ارشاد</option>
                      <option value="2874" class="js-not-empty">کوی ارم</option>
                      <option value="2889" class="js-not-empty">کوی ارمکان</option>
                      <option value="2876" class="js-not-empty">کوی الهام</option>
                      <option value="2743" class="js-not-empty">کوی بانک سپه- شهرک شهید باهنر</option>
                      <option value="2939" class="js-not-empty">کوی بیمه -ترمینال غرب</option>
                      <option value="2738" class="js-not-empty">کوی دانشگاه</option>
                      <option value="2783" class="js-not-empty">کوی زینبیه</option>
                      <option value="2877" class="js-not-empty">کوی سازمان برنامه</option>
                      <option value="3019" class="js-not-empty">کوی سیزده آبان</option>
                      <option value="2986" class="js-not-empty">کوی سینا</option>
                      <option value="2838" class="js-not-empty">کوی فراز</option>
                      <option value="2975" class="js-not-empty">کوی مهر آباد</option>
                      <option value="2894" class="js-not-empty">کوی نصر</option>
                      <option value="2702" class="js-not-empty">کوی نوبنیاد</option>
                      <option value="2886" class="js-not-empty">کوی نور</option>
                      <option value="2708" class="js-not-empty">گاندی</option>
                      <option value="2670" class="js-not-empty">گلستان</option>
                      <option value="2893" class="js-not-empty">گیشا</option>
                      <option value="2647" class="js-not-empty">لارک</option>
                      <option value="2948" class="js-not-empty">لاله زار</option>
                      <option value="2695" class="js-not-empty">لویزان</option>
                      <option value="2779" class="js-not-empty">مازندران</option>
                      <option value="2821" class="js-not-empty">مالک آباد</option>
                      <option value="2700" class="js-not-empty">مبارکآباد</option>
                      <option value="2805" class="js-not-empty">مجتمع مسکونی گلها</option>
                      <option value="2911" class="js-not-empty">مجتمع مسکونی لاله -زیبادشت</option>
                      <option value="2734" class="js-not-empty">مجید آباد</option>
                      <option value="2676" class="js-not-empty">مجیدیه</option>
                      <option value="3024" class="js-not-empty">محمد آباد</option>
                      <option value="2887" class="js-not-empty">محمود آباد</option>
                      <option value="2626" class="js-not-empty">محمودیه</option>
                      <option value="3087" class="js-not-empty">مدیریت</option>
                      <option value="2849" class="js-not-empty">مراد آباد -حصارک</option>
                      <option value="2892" class="js-not-empty">مرزداران</option>
                      <option value="2817" class="js-not-empty">مسعودیه</option>
                      <option value="2816" class="js-not-empty">مسگریه</option>
                      <option value="2818" class="js-not-empty">مشیریه</option>
                      <option value="2714" class="js-not-empty">مصلی</option>
                      <option value="2765" class="js-not-empty">معلم</option>
                      <option value="2860" class="js-not-empty">ملاصدرا</option>
                      <option value="3071" class="js-not-empty">ملک آباد</option>
                      <option value="2639" class="js-not-empty">منظریه</option>
                      <option value="2784" class="js-not-empty">منوچهری</option>
                      <option value="2949" class="js-not-empty">منیریه</option>
                      <option value="3054" class="js-not-empty">مولوی</option>
                      <option value="2960" class="js-not-empty">مهر آباد</option>
                      <option value="3091" class="js-not-empty">میدان جهاد</option>
                      <option value="2953" class="js-not-empty">میدان حر</option>
                      <option value="3053" class="js-not-empty">میدان راه آهن</option>
                      <option value="2776" class="js-not-empty">میدان سپاه</option>
                      <option value="3098" class="js-not-empty">میدان سلماس</option>
                      <option value="2965" class="js-not-empty">میدان قزوین</option>
                      <option value="2773" class="js-not-empty">میدان نامجو- دماوند</option>
                      <option value="2756" class="js-not-empty">میدان ولیعصر</option>
                      <option value="2706" class="js-not-empty">میدان ونک</option>
                      <option value="2681" class="js-not-empty">میرداماد</option>
                      <option value="2667" class="js-not-empty">مینی سیتی</option>
                      <option value="2766" class="js-not-empty">نارمک</option>
                      <option value="3003" class="js-not-empty">نازی آباد</option>
                      <option value="2794" class="js-not-empty">ناصر خسرو</option>
                      <option value="2758" class="js-not-empty">نجات اللهی</option>
                      <option value="3103" class="js-not-empty">نصرت</option>
                      <option value="2769" class="js-not-empty">نظام آباد</option>
                      <option value="3009" class="js-not-empty">نعمت آباد</option>
                      <option value="2628" class="js-not-empty">نمایشگاه</option>
                      <option value="2956" class="js-not-empty">نواب</option>
                      <option value="2654" class="js-not-empty">نوبنیاد</option>
                      <option value="2988" class="js-not-empty">نوروز آباد</option>
                      <option value="2946" class="js-not-empty">نوفل لوشاتو</option>
                      <option value="2643" class="js-not-empty">نیاوران</option>
                      <option value="2781" class="js-not-empty">نیرو هوایی</option>
                      <option value="2770" class="js-not-empty">وحیدیه</option>
                      <option value="2915" class="js-not-empty">وردآورد</option>
                      <option value="2614" class="js-not-empty">ولنجک</option>
                      <option value="3033" class="js-not-empty">ولی آباد</option>
                      <option value="2724" class="js-not-empty">ولی عصر</option>
                      <option value="2950" class="js-not-empty">ولیعصر</option>
                      <option value="2858" class="js-not-empty">ونک</option>
                      <option value="2921" class="js-not-empty">ویلا شهر</option>
                      <option value="2803" class="js-not-empty">هاشم آباد</option>
                      <option value="2957" class="js-not-empty">هاشمی</option>
                      <option value="2701" class="js-not-empty">هروی</option>
                      <option value="2717" class="js-not-empty">هفت تیر</option>
                      <option value="3112" class="js-not-empty">همایون شهر</option>
                      <option value="2715" class="js-not-empty">هویزه</option>
                      <option value="3014" class="js-not-empty">یاخچی آباد</option>
                      <option value="2977" class="js-not-empty">یافت آباد</option>
                      <option value="2899" class="js-not-empty">یوسف آباد</option>
                    </select></div>
                  <div class="selectric"><span class="label">انتخاب محله</span><b class="button">▾</b></div>
                  <div class="selectric-items selectric-has-search" tabindex="-1"><input class="dk-selectric-input"
                                                                                         tabindex="0">
                    <div class="selectric-scroll">
                      <ul>
                        <li data-index="0" class="selected">انتخاب محله</li>
                        <li data-index="1" class="js-not-empty">15 خرداد</li>
                        <li data-index="2" class="js-not-empty">17 شهریور</li>
                        <li data-index="3" class="js-not-empty">آپادانا</li>
                        <li data-index="4" class="js-not-empty">آجودانیه</li>
                        <li data-index="5" class="js-not-empty">آرارات</li>
                        <li data-index="6" class="js-not-empty">آرژانتین</li>
                        <li data-index="7" class="js-not-empty">آریا شهر</li>
                        <li data-index="8" class="js-not-empty">آزادشهر</li>
                        <li data-index="9" class="js-not-empty">آزادی</li>
                        <li data-index="10" class="js-not-empty">آسمان</li>
                        <li data-index="11" class="js-not-empty">آفریقا</li>
                        <li data-index="12" class="js-not-empty">آیت ا… کاشانی</li>
                        <li data-index="13" class="js-not-empty">آیت ا… مدنی</li>
                        <li data-index="14" class="js-not-empty">ابراهیم آباد</li>
                        <li data-index="15" class="js-not-empty">ابن بابویه</li>
                        <li data-index="16" class="js-not-empty">اتوبان افسریه</li>
                        <li data-index="17" class="js-not-empty">احتسابیه</li>
                        <li data-index="18" class="js-not-empty">احتشامیه</li>
                        <li data-index="19" class="js-not-empty">اختیاریه</li>
                        <li data-index="20" class="js-not-empty">اختیاریه شمالی</li>
                        <li data-index="21" class="js-not-empty">ازگل</li>
                        <li data-index="22" class="js-not-empty">استخر</li>
                        <li data-index="23" class="js-not-empty">اسفندیاری</li>
                        <li data-index="24" class="js-not-empty">اسکندری</li>
                        <li data-index="25" class="js-not-empty">اسکندری شمالی</li>
                        <li data-index="26" class="js-not-empty">اسلام آباد</li>
                        <li data-index="27" class="js-not-empty">اسماعیل آباد</li>
                        <li data-index="28" class="js-not-empty">اصفهانک</li>
                        <li data-index="29" class="js-not-empty">افسریه</li>
                        <li data-index="30" class="js-not-empty">اقدسیه</li>
                        <li data-index="31" class="js-not-empty">اکبر آباد</li>
                        <li data-index="32" class="js-not-empty">الغدیر</li>
                        <li data-index="33" class="js-not-empty">الهیه</li>
                        <li data-index="34" class="js-not-empty">امام حسین</li>
                        <li data-index="35" class="js-not-empty">امام خمینی</li>
                        <li data-index="36" class="js-not-empty">امامزاده قاسم</li>
                        <li data-index="37" class="js-not-empty">امانیه</li>
                        <li data-index="38" class="js-not-empty">امیر آباد</li>
                        <li data-index="39" class="js-not-empty">امیریه</li>
                        <li data-index="40" class="js-not-empty">امین آباد</li>
                        <li data-index="41" class="js-not-empty">اندرمان -مبارک آباد</li>
                        <li data-index="42" class="js-not-empty">انقلاب</li>
                        <li data-index="43" class="js-not-empty">اوین</li>
                        <li data-index="44" class="js-not-empty">ایرانشهر</li>
                        <li data-index="45" class="js-not-empty">ایوانک</li>
                        <li data-index="46" class="js-not-empty">بازار</li>
                        <li data-index="47" class="js-not-empty">باغ آذری</li>
                        <li data-index="48" class="js-not-empty">باغ چهاربری</li>
                        <li data-index="49" class="js-not-empty">باغ حاج صیف</li>
                        <li data-index="50" class="js-not-empty">باغ صبا</li>
                        <li data-index="51" class="js-not-empty">باغ فیض</li>
                        <li data-index="52" class="js-not-empty">باغ لش کرد</li>
                        <li data-index="53" class="js-not-empty">باقر شهر</li>
                        <li data-index="54" class="js-not-empty">باقرخان</li>
                        <li data-index="55" class="js-not-empty">باقری</li>
                        <li data-index="56" class="js-not-empty">برزیل</li>
                        <li data-index="57" class="js-not-empty">برق آلستوم</li>
                        <li data-index="58" class="js-not-empty">بریانک</li>
                        <li data-index="59" class="js-not-empty">بزرگراه بابایی</li>
                        <li data-index="60" class="js-not-empty">بسیج</li>
                        <li data-index="61" class="js-not-empty">بلوار اوشان</li>
                        <li data-index="62" class="js-not-empty">بلوار تعاون</li>
                        <li data-index="63" class="js-not-empty">بلوار دانشجو</li>
                        <li data-index="64" class="js-not-empty">بلوار دریا</li>
                        <li data-index="65" class="js-not-empty">بلوار فردوس</li>
                        <li data-index="66" class="js-not-empty">بلوار کاوه</li>
                        <li data-index="67" class="js-not-empty">بلوار کشاورز</li>
                        <li data-index="68" class="js-not-empty">بلوار کشاورز -جمهوری</li>
                        <li data-index="69" class="js-not-empty">بلوار کشاورز غربی</li>
                        <li data-index="70" class="js-not-empty">بنی هاشم</li>
                        <li data-index="71" class="js-not-empty">بهارستان</li>
                        <li data-index="72" class="js-not-empty">بهارستان -انقلاب</li>
                        <li data-index="73" class="js-not-empty">بهبودی</li>
                        <li data-index="74" class="js-not-empty">بهشت زهرا</li>
                        <li data-index="75" class="js-not-empty">بیمارستان فارابی</li>
                        <li data-index="76" class="js-not-empty">بیهقی</li>
                        <li data-index="77" class="js-not-empty">پارک رازی</li>
                        <li data-index="78" class="js-not-empty">پارک لاله</li>
                        <li data-index="79" class="js-not-empty">پارک وی</li>
                        <li data-index="80" class="js-not-empty">پاستور- انقلاب</li>
                        <li data-index="81" class="js-not-empty">پاسداران</li>
                        <li data-index="82" class="js-not-empty">پامنار</li>
                        <li data-index="83" class="js-not-empty">پرواز</li>
                        <li data-index="84" class="js-not-empty">پل رومی</li>
                        <li data-index="85" class="js-not-empty">پونک</li>
                        <li data-index="86" class="js-not-empty">پونک باختری</li>
                        <li data-index="87" class="js-not-empty">پیروزی</li>
                        <li data-index="88" class="js-not-empty">پیکان شهر</li>
                        <li data-index="89" class="js-not-empty">تپه سیف</li>
                        <li data-index="90" class="js-not-empty">تجریش</li>
                        <li data-index="91" class="js-not-empty">ترک آباد</li>
                        <li data-index="92" class="js-not-empty">ترمینال شرق</li>
                        <li data-index="93" class="js-not-empty">تقی آباد</li>
                        <li data-index="94" class="js-not-empty">توحید</li>
                        <li data-index="95" class="js-not-empty">تهران پارس</li>
                        <li data-index="96" class="js-not-empty">تهران نو -کوی فاطمیه</li>
                        <li data-index="97" class="js-not-empty">تهران ویلا</li>
                        <li data-index="98" class="js-not-empty">تهرانسر</li>
                        <li data-index="99" class="js-not-empty">تیموری</li>
                        <li data-index="100" class="js-not-empty">جاده خاوران</li>
                        <li data-index="101" class="js-not-empty">جاده خاوران و حومه</li>
                        <li data-index="102" class="js-not-empty">جانبازان</li>
                        <li data-index="103" class="js-not-empty">جاوید آباد</li>
                        <li data-index="104" class="js-not-empty">جردن</li>
                        <li data-index="105" class="js-not-empty">جشنواره</li>
                        <li data-index="106" class="js-not-empty">جعفر آباد</li>
                        <li data-index="107" class="js-not-empty">جلال آل احمد</li>
                        <li data-index="108" class="js-not-empty">جماران</li>
                        <li data-index="109" class="js-not-empty">جمال آباد</li>
                        <li data-index="110" class="js-not-empty">جمالزاده شمالی</li>
                        <li data-index="111" class="js-not-empty">جمشیدیه</li>
                        <li data-index="112" class="js-not-empty">جمهوری</li>
                        <li data-index="113" class="js-not-empty">جنت آباد</li>
                        <li data-index="114" class="js-not-empty">جوادیه</li>
                        <li data-index="115" class="js-not-empty">جوانمرد</li>
                        <li data-index="116" class="js-not-empty">جهان آرا</li>
                        <li data-index="117" class="js-not-empty">جیحون</li>
                        <li data-index="118" class="js-not-empty">چالهرز</li>
                        <li data-index="119" class="js-not-empty">چشمه علی</li>
                        <li data-index="120" class="js-not-empty">چوب تراش</li>
                        <li data-index="121" class="js-not-empty">چهارراه ولیعصر</li>
                        <li data-index="122" class="js-not-empty">چهارصد دستگاه</li>
                        <li data-index="123" class="js-not-empty">چهل خرواری</li>
                        <li data-index="124" class="js-not-empty">چیتگر</li>
                        <li data-index="125" class="js-not-empty">چیذر</li>
                        <li data-index="126" class="js-not-empty">حدادیه</li>
                        <li data-index="127" class="js-not-empty">حسن آباد</li>
                        <li data-index="128" class="js-not-empty">حسین آباد</li>
                        <li data-index="129" class="js-not-empty">حشمتیه</li>
                        <li data-index="130" class="js-not-empty">حصارک</li>
                        <li data-index="131" class="js-not-empty">حقانی</li>
                        <li data-index="132" class="js-not-empty">حکیمیه</li>
                        <li data-index="133" class="js-not-empty">خاک سفید</li>
                        <li data-index="134" class="js-not-empty">خالد اسلامبولی</li>
                        <li data-index="135" class="js-not-empty">خانی آباد</li>
                        <li data-index="136" class="js-not-empty">خانی آباد نو</li>
                        <li data-index="137" class="js-not-empty">خزانه بخارا</li>
                        <li data-index="138" class="js-not-empty">خزانه فلاح -امین الملک</li>
                        <li data-index="139" class="js-not-empty">خلازیل</li>
                        <li data-index="140" class="js-not-empty">خواجه عبدالله -جلفا</li>
                        <li data-index="141" class="js-not-empty">خوردین</li>
                        <li data-index="142" class="js-not-empty">خیابان قزوین</li>
                        <li data-index="143" class="js-not-empty">خیابان گرگان</li>
                        <li data-index="144" class="js-not-empty">خیام</li>
                        <li data-index="145" class="js-not-empty">خیر آباد</li>
                        <li data-index="146" class="js-not-empty">دانشگاه تهران</li>
                        <li data-index="147" class="js-not-empty">داودیه</li>
                        <li data-index="148" class="js-not-empty">دربند</li>
                        <li data-index="149" class="js-not-empty">درختی</li>
                        <li data-index="150" class="js-not-empty">درکه</li>
                        <li data-index="151" class="js-not-empty">دروس</li>
                        <li data-index="152" class="js-not-empty">دریان نو</li>
                        <li data-index="153" class="js-not-empty">دزاشیب</li>
                        <li data-index="154" class="js-not-empty">دلاوران</li>
                        <li data-index="155" class="js-not-empty">دماوند</li>
                        <li data-index="156" class="js-not-empty">دماوند -رسالت</li>
                        <li data-index="157" class="js-not-empty">دولاب</li>
                        <li data-index="158" class="js-not-empty">دولت آباد</li>
                        <li data-index="159" class="js-not-empty">دولت- شریعتی</li>
                        <li data-index="160" class="js-not-empty">دولتخواه شریفی</li>
                        <li data-index="161" class="js-not-empty">ده نارمک</li>
                        <li data-index="162" class="js-not-empty">دهکده المپیک</li>
                        <li data-index="163" class="js-not-empty">دیباجی جنوبی</li>
                        <li data-index="164" class="js-not-empty">دیلمان</li>
                        <li data-index="165" class="js-not-empty">راه آهن</li>
                        <li data-index="166" class="js-not-empty">رحمان آباد</li>
                        <li data-index="167" class="js-not-empty">رسالت</li>
                        <li data-index="168" class="js-not-empty">رضویه</li>
                        <li data-index="169" class="js-not-empty">رودکی</li>
                        <li data-index="170" class="js-not-empty">ریحانی</li>
                        <li data-index="171" class="js-not-empty">زرآباد</li>
                        <li data-index="172" class="js-not-empty">زرتشت</li>
                        <li data-index="173" class="js-not-empty">زرتشت -بهجت آباد</li>
                        <li data-index="174" class="js-not-empty">زرگنده</li>
                        <li data-index="175" class="js-not-empty">زعفرانیه</li>
                        <li data-index="176" class="js-not-empty">زنجان شمالی</li>
                        <li data-index="177" class="js-not-empty">زور آباد -منصور آباد</li>
                        <li data-index="178" class="js-not-empty">سازمان آب</li>
                        <li data-index="179" class="js-not-empty">سازمان آب -بلوار آسیا</li>
                        <li data-index="180" class="js-not-empty">سازمان آب غرب</li>
                        <li data-index="181" class="js-not-empty">سامیان شهرک طالقانی</li>
                        <li data-index="182" class="js-not-empty">ستارخان</li>
                        <li data-index="183" class="js-not-empty">ستاری -اشرفی اصفهانی</li>
                        <li data-index="184" class="js-not-empty">ستاری- صادقیه</li>
                        <li data-index="185" class="js-not-empty">سردار جنگل</li>
                        <li data-index="186" class="js-not-empty">سعادت آباد</li>
                        <li data-index="187" class="js-not-empty">سعد آباد</li>
                        <li data-index="188" class="js-not-empty">سعدی</li>
                        <li data-index="189" class="js-not-empty">سعید آباد</li>
                        <li data-index="190" class="js-not-empty">سلیمانیه</li>
                        <li data-index="191" class="js-not-empty">سمیه</li>
                        <li data-index="192" class="js-not-empty">سوهانک</li>
                        <li data-index="193" class="js-not-empty">سه راه آذری</li>
                        <li data-index="194" class="js-not-empty">سه راه تختی</li>
                        <li data-index="195" class="js-not-empty">سهروردی</li>
                        <li data-index="196" class="js-not-empty">سید خندان</li>
                        <li data-index="197" class="js-not-empty">سیمون بولیوار</li>
                        <li data-index="198" class="js-not-empty">شاد آباد</li>
                        <li data-index="199" class="js-not-empty">شادمان</li>
                        <li data-index="200" class="js-not-empty">شادمهر</li>
                        <li data-index="201" class="js-not-empty">شاهین</li>
                        <li data-index="202" class="js-not-empty">شریعتی</li>
                        <li data-index="203" class="js-not-empty">شمس آباد</li>
                        <li data-index="204" class="js-not-empty">شمیران نو -کالاد</li>
                        <li data-index="205" class="js-not-empty">شهر ری</li>
                        <li data-index="206" class="js-not-empty">شهر زیبا</li>
                        <li data-index="207" class="js-not-empty">شهر سنگ</li>
                        <li data-index="208" class="js-not-empty">شهرآرا</li>
                        <li data-index="209" class="js-not-empty">شهران</li>
                        <li data-index="210" class="js-not-empty">شهرک 22 بهمن</li>
                        <li data-index="211" class="js-not-empty">شهرک آپادانا</li>
                        <li data-index="212" class="js-not-empty">شهرک آتی ساز</li>
                        <li data-index="213" class="js-not-empty">شهرک آزادی</li>
                        <li data-index="214" class="js-not-empty">شهرک آزمایش</li>
                        <li data-index="215" class="js-not-empty">شهرک آسمان</li>
                        <li data-index="216" class="js-not-empty">شهرک ابوذر</li>
                        <li data-index="217" class="js-not-empty">شهرک استقلال</li>
                        <li data-index="218" class="js-not-empty">شهرک اسلامآباد</li>
                        <li data-index="219" class="js-not-empty">شهرک اکباتان</li>
                        <li data-index="220" class="js-not-empty">شهرک المهدی</li>
                        <li data-index="221" class="js-not-empty">شهرک امام خمینی</li>
                        <li data-index="222" class="js-not-empty">شهرک امید</li>
                        <li data-index="223" class="js-not-empty">شهرک امیر کبیر</li>
                        <li data-index="224" class="js-not-empty">شهرک انصار</li>
                        <li data-index="225" class="js-not-empty">شهرک انقلاب</li>
                        <li data-index="226" class="js-not-empty">شهرک بستان</li>
                        <li data-index="227" class="js-not-empty">شهرک بعثت</li>
                        <li data-index="228" class="js-not-empty">شهرک بوعلی</li>
                        <li data-index="229" class="js-not-empty">شهرک پارس -باقری</li>
                        <li data-index="230" class="js-not-empty">شهرک پرواز</li>
                        <li data-index="231" class="js-not-empty">شهرک تامین اجتماعی</li>
                        <li data-index="232" class="js-not-empty">شهرک جمهوری اسلامی</li>
                        <li data-index="233" class="js-not-empty">شهرک جهادگران</li>
                        <li data-index="234" class="js-not-empty">شهرک چشمه</li>
                        <li data-index="235" class="js-not-empty">شهرک خودروسازان</li>
                        <li data-index="236" class="js-not-empty">شهرک دانشگاه</li>
                        <li data-index="237" class="js-not-empty">شهرک دانشگاه -شهرک ابوذر</li>
                        <li data-index="238" class="js-not-empty">شهرک دانشگاه امام حسین</li>
                        <li data-index="239" class="js-not-empty">شهرک دانشگاه تهران</li>
                        <li data-index="240" class="js-not-empty">شهرک دریا</li>
                        <li data-index="241" class="js-not-empty">شهرک دژبان</li>
                        <li data-index="242" class="js-not-empty">شهرک راه آهن</li>
                        <li data-index="243" class="js-not-empty">شهرک رسالت</li>
                        <li data-index="244" class="js-not-empty">شهرک ژاندارمری -شهرک انقلاب</li>
                        <li data-index="245" class="js-not-empty">شهرک سئول</li>
                        <li data-index="246" class="js-not-empty">شهرک سجاد</li>
                        <li data-index="247" class="js-not-empty">شهرک سینمایی</li>
                        <li data-index="248" class="js-not-empty">شهرک شاهد</li>
                        <li data-index="249" class="js-not-empty">شهرک شاهین</li>
                        <li data-index="250" class="js-not-empty">شهرک شریف آباد</li>
                        <li data-index="251" class="js-not-empty">شهرک شهید باقری</li>
                        <li data-index="252" class="js-not-empty">شهرک شهید بهشتی</li>
                        <li data-index="253" class="js-not-empty">شهرک شهید چمران</li>
                        <li data-index="254" class="js-not-empty">شهرک شهید فکوری</li>
                        <li data-index="255" class="js-not-empty">شهرک صاحب الزمان</li>
                        <li data-index="256" class="js-not-empty">شهرک طالقانی</li>
                        <li data-index="257" class="js-not-empty">شهرک طالقانی- علی آباد</li>
                        <li data-index="258" class="js-not-empty">شهرک غرب</li>
                        <li data-index="259" class="js-not-empty">شهرک فاطمه</li>
                        <li data-index="260" class="js-not-empty">شهرک فرهنگیان</li>
                        <li data-index="261" class="js-not-empty">شهرک قائم</li>
                        <li data-index="262" class="js-not-empty">شهرک کارمندان دولت</li>
                        <li data-index="263" class="js-not-empty">شهرک کاظمیه</li>
                        <li data-index="264" class="js-not-empty">شهرک کوهسار</li>
                        <li data-index="265" class="js-not-empty">شهرک گلشهر</li>
                        <li data-index="266" class="js-not-empty">شهرک گلها</li>
                        <li data-index="267" class="js-not-empty">شهرک لویزان</li>
                        <li data-index="268" class="js-not-empty">شهرک مجید آباد</li>
                        <li data-index="269" class="js-not-empty">شهرک محلاتی</li>
                        <li data-index="270" class="js-not-empty">شهرک مخابرات</li>
                        <li data-index="271" class="js-not-empty">شهرک مسلمین</li>
                        <li data-index="272" class="js-not-empty">شهرک مسیح آبادی</li>
                        <li data-index="273" class="js-not-empty">شهرک مصطفی خمینی</li>
                        <li data-index="274" class="js-not-empty">شهرک مطهری</li>
                        <li data-index="275" class="js-not-empty">شهرک مطهری- کیان شهر</li>
                        <li data-index="276" class="js-not-empty">شهرک معراج</li>
                        <li data-index="277" class="js-not-empty">شهرک مفتح</li>
                        <li data-index="278" class="js-not-empty">شهرک نفت</li>
                        <li data-index="279" class="js-not-empty">شهرک نفت -شهرک البرز</li>
                        <li data-index="280" class="js-not-empty">شهرک نمونه سپاه</li>
                        <li data-index="281" class="js-not-empty">شهرک نیروی هوایی</li>
                        <li data-index="282" class="js-not-empty">شهرک والفجر</li>
                        <li data-index="283" class="js-not-empty">شهرک ولیعصر</li>
                        <li data-index="284" class="js-not-empty">شهرک هما</li>
                        <li data-index="285" class="js-not-empty">شهرک هواپیمایی کشوری</li>
                        <li data-index="286" class="js-not-empty">شهرکشهرداری</li>
                        <li data-index="287" class="js-not-empty">شهید باقری</li>
                        <li data-index="288" class="js-not-empty">شهید باهنر</li>
                        <li data-index="289" class="js-not-empty">شهید خرم رودی</li>
                        <li data-index="290" class="js-not-empty">شهید رجائی</li>
                        <li data-index="291" class="js-not-empty">شهید گمنام</li>
                        <li data-index="292" class="js-not-empty">شیان</li>
                        <li data-index="293" class="js-not-empty">شیخ بهایی</li>
                        <li data-index="294" class="js-not-empty">شیراز</li>
                        <li data-index="295" class="js-not-empty">شیشه مینا</li>
                        <li data-index="296" class="js-not-empty">صاحبقرانیه</li>
                        <li data-index="297" class="js-not-empty">صادقیه</li>
                        <li data-index="298" class="js-not-empty">صالحآباد</li>
                        <li data-index="299" class="js-not-empty">صد دستگاه</li>
                        <li data-index="300" class="js-not-empty">صنایع رنگ سازی</li>
                        <li data-index="301" class="js-not-empty">ضرابخانه</li>
                        <li data-index="302" class="js-not-empty">طرشت</li>
                        <li data-index="303" class="js-not-empty">طرشت شمالی</li>
                        <li data-index="304" class="js-not-empty">ظفر</li>
                        <li data-index="305" class="js-not-empty">عباس آباد</li>
                        <li data-index="306" class="js-not-empty">عبدالله آباد</li>
                        <li data-index="307" class="js-not-empty">عبدل آباد</li>
                        <li data-index="308" class="js-not-empty">عرب آباد</li>
                        <li data-index="309" class="js-not-empty">عظیم آباد</li>
                        <li data-index="310" class="js-not-empty">فاطمی</li>
                        <li data-index="311" class="js-not-empty">فتح</li>
                        <li data-index="312" class="js-not-empty">فرجام</li>
                        <li data-index="313" class="js-not-empty">فرح آباد</li>
                        <li data-index="314" class="js-not-empty">فرحزاد</li>
                        <li data-index="315" class="js-not-empty">فردوسی</li>
                        <li data-index="316" class="js-not-empty">فرمانیه</li>
                        <li data-index="317" class="js-not-empty">فلسطین</li>
                        <li data-index="318" class="js-not-empty">فهیم آباد</li>
                        <li data-index="319" class="js-not-empty">قائم مقام</li>
                        <li data-index="320" class="js-not-empty">قاسم آباد</li>
                        <li data-index="321" class="js-not-empty">قزل قلعه</li>
                        <li data-index="322" class="js-not-empty">قصر فیروزه</li>
                        <li data-index="323" class="js-not-empty">قصرفیروزه</li>
                        <li data-index="324" class="js-not-empty">قلعه ارامنه</li>
                        <li data-index="325" class="js-not-empty">قلعه دولت آباد</li>
                        <li data-index="326" class="js-not-empty">قلعه فتح آباد</li>
                        <li data-index="327" class="js-not-empty">قلعه مرغی</li>
                        <li data-index="328" class="js-not-empty">قلهک</li>
                        <li data-index="329" class="js-not-empty">قنات کوثر</li>
                        <li data-index="330" class="js-not-empty">قیصریه</li>
                        <li data-index="331" class="js-not-empty">قیطریه</li>
                        <li data-index="332" class="js-not-empty">کارگر</li>
                        <li data-index="333" class="js-not-empty">کارگر شمالی</li>
                        <li data-index="334" class="js-not-empty">کاشانک</li>
                        <li data-index="335" class="js-not-empty">کاظم آباد</li>
                        <li data-index="336" class="js-not-empty">کامرانیه</li>
                        <li data-index="337" class="js-not-empty">کاوسیه -شهرک فجر</li>
                        <li data-index="338" class="js-not-empty">کردستان</li>
                        <li data-index="339" class="js-not-empty">کریم آباد</li>
                        <li data-index="340" class="js-not-empty">کریمخان</li>
                        <li data-index="341" class="js-not-empty">کلاهدوز</li>
                        <li data-index="342" class="js-not-empty">کلاهدوز -دولت</li>
                        <li data-index="343" class="js-not-empty">کن</li>
                        <li data-index="344" class="js-not-empty">کوهک</li>
                        <li data-index="345" class="js-not-empty">کوی 17 شهریور</li>
                        <li data-index="346" class="js-not-empty">کوی آزادی</li>
                        <li data-index="347" class="js-not-empty">کوی ارشاد</li>
                        <li data-index="348" class="js-not-empty">کوی ارم</li>
                        <li data-index="349" class="js-not-empty">کوی ارمکان</li>
                        <li data-index="350" class="js-not-empty">کوی الهام</li>
                        <li data-index="351" class="js-not-empty">کوی بانک سپه- شهرک شهید باهنر</li>
                        <li data-index="352" class="js-not-empty">کوی بیمه -ترمینال غرب</li>
                        <li data-index="353" class="js-not-empty">کوی دانشگاه</li>
                        <li data-index="354" class="js-not-empty">کوی زینبیه</li>
                        <li data-index="355" class="js-not-empty">کوی سازمان برنامه</li>
                        <li data-index="356" class="js-not-empty">کوی سیزده آبان</li>
                        <li data-index="357" class="js-not-empty">کوی سینا</li>
                        <li data-index="358" class="js-not-empty">کوی فراز</li>
                        <li data-index="359" class="js-not-empty">کوی مهر آباد</li>
                        <li data-index="360" class="js-not-empty">کوی نصر</li>
                        <li data-index="361" class="js-not-empty">کوی نوبنیاد</li>
                        <li data-index="362" class="js-not-empty">کوی نور</li>
                        <li data-index="363" class="js-not-empty">گاندی</li>
                        <li data-index="364" class="js-not-empty">گلستان</li>
                        <li data-index="365" class="js-not-empty">گیشا</li>
                        <li data-index="366" class="js-not-empty">لارک</li>
                        <li data-index="367" class="js-not-empty">لاله زار</li>
                        <li data-index="368" class="js-not-empty">لویزان</li>
                        <li data-index="369" class="js-not-empty">مازندران</li>
                        <li data-index="370" class="js-not-empty">مالک آباد</li>
                        <li data-index="371" class="js-not-empty">مبارکآباد</li>
                        <li data-index="372" class="js-not-empty">مجتمع مسکونی گلها</li>
                        <li data-index="373" class="js-not-empty">مجتمع مسکونی لاله -زیبادشت</li>
                        <li data-index="374" class="js-not-empty">مجید آباد</li>
                        <li data-index="375" class="js-not-empty">مجیدیه</li>
                        <li data-index="376" class="js-not-empty">محمد آباد</li>
                        <li data-index="377" class="js-not-empty">محمود آباد</li>
                        <li data-index="378" class="js-not-empty">محمودیه</li>
                        <li data-index="379" class="js-not-empty">مدیریت</li>
                        <li data-index="380" class="js-not-empty">مراد آباد -حصارک</li>
                        <li data-index="381" class="js-not-empty">مرزداران</li>
                        <li data-index="382" class="js-not-empty">مسعودیه</li>
                        <li data-index="383" class="js-not-empty">مسگریه</li>
                        <li data-index="384" class="js-not-empty">مشیریه</li>
                        <li data-index="385" class="js-not-empty">مصلی</li>
                        <li data-index="386" class="js-not-empty">معلم</li>
                        <li data-index="387" class="js-not-empty">ملاصدرا</li>
                        <li data-index="388" class="js-not-empty">ملک آباد</li>
                        <li data-index="389" class="js-not-empty">منظریه</li>
                        <li data-index="390" class="js-not-empty">منوچهری</li>
                        <li data-index="391" class="js-not-empty">منیریه</li>
                        <li data-index="392" class="js-not-empty">مولوی</li>
                        <li data-index="393" class="js-not-empty">مهر آباد</li>
                        <li data-index="394" class="js-not-empty">میدان جهاد</li>
                        <li data-index="395" class="js-not-empty">میدان حر</li>
                        <li data-index="396" class="js-not-empty">میدان راه آهن</li>
                        <li data-index="397" class="js-not-empty">میدان سپاه</li>
                        <li data-index="398" class="js-not-empty">میدان سلماس</li>
                        <li data-index="399" class="js-not-empty">میدان قزوین</li>
                        <li data-index="400" class="js-not-empty">میدان نامجو- دماوند</li>
                        <li data-index="401" class="js-not-empty">میدان ولیعصر</li>
                        <li data-index="402" class="js-not-empty">میدان ونک</li>
                        <li data-index="403" class="js-not-empty">میرداماد</li>
                        <li data-index="404" class="js-not-empty">مینی سیتی</li>
                        <li data-index="405" class="js-not-empty">نارمک</li>
                        <li data-index="406" class="js-not-empty">نازی آباد</li>
                        <li data-index="407" class="js-not-empty">ناصر خسرو</li>
                        <li data-index="408" class="js-not-empty">نجات اللهی</li>
                        <li data-index="409" class="js-not-empty">نصرت</li>
                        <li data-index="410" class="js-not-empty">نظام آباد</li>
                        <li data-index="411" class="js-not-empty">نعمت آباد</li>
                        <li data-index="412" class="js-not-empty">نمایشگاه</li>
                        <li data-index="413" class="js-not-empty">نواب</li>
                        <li data-index="414" class="js-not-empty">نوبنیاد</li>
                        <li data-index="415" class="js-not-empty">نوروز آباد</li>
                        <li data-index="416" class="js-not-empty">نوفل لوشاتو</li>
                        <li data-index="417" class="js-not-empty">نیاوران</li>
                        <li data-index="418" class="js-not-empty">نیرو هوایی</li>
                        <li data-index="419" class="js-not-empty">وحیدیه</li>
                        <li data-index="420" class="js-not-empty">وردآورد</li>
                        <li data-index="421" class="js-not-empty">ولنجک</li>
                        <li data-index="422" class="js-not-empty">ولی آباد</li>
                        <li data-index="423" class="js-not-empty">ولی عصر</li>
                        <li data-index="424" class="js-not-empty">ولیعصر</li>
                        <li data-index="425" class="js-not-empty">ونک</li>
                        <li data-index="426" class="js-not-empty">ویلا شهر</li>
                        <li data-index="427" class="js-not-empty">هاشم آباد</li>
                        <li data-index="428" class="js-not-empty">هاشمی</li>
                        <li data-index="429" class="js-not-empty">هروی</li>
                        <li data-index="430" class="js-not-empty">هفت تیر</li>
                        <li data-index="431" class="js-not-empty">همایون شهر</li>
                        <li data-index="432" class="js-not-empty">هویزه</li>
                        <li data-index="433" class="js-not-empty">یاخچی آباد</li>
                        <li data-index="434" class="js-not-empty">یافت آباد</li>
                        <li data-index="435" class="js-not-empty last">یوسف آباد</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-address__form-row c-address__form-row--full-width js-address-field"><label
                class="o-form__field-container has-error">
                <div class="o-form__field-label">نشانی پستی*</div>
                <div class="o-form__field-frame"><input name="address[address]" type="" placeholder="" value=""
                                                        class="o-form__field js-input-field js-address-address"
                                                        aria-describedby="address[address]-error" aria-invalid="true">
                </div>
                <div id="address[address]-error" class="error o-form__error">فیلد الزامی است</div>
              </label></div>
            <div class="c-address__form-row">
              <div class="c-address__form-row"><label class="o-form__field-container">
                  <div class="o-form__field-label">پلاک*</div>
                  <div class="o-form__field-frame"><input name="address[bld_num]" type="" placeholder="" value=""
                                                          class="o-form__field js-input-field js-address-building-number">
                  </div>
                </label><label class="o-form__field-container">
                  <div class="o-form__field-label">واحد</div>
                  <div class="o-form__field-frame"><input name="address[apt_id]" type="" placeholder="" value=""
                                                          class="o-form__field js-input-field js-address-apartment-number">
                  </div>
                </label></div>
              <div class="c-address__form-row"><label class="o-form__field-container">
                  <div class="o-form__field-label">کد پستی*</div>
                  <div class="o-form__field-frame"><input name="address[post_code]" type="" placeholder="" value=""
                                                          class="o-form__field js-input-field js-address-postal-code">
                  </div>
                  <div class="o-form__field-helper">کدپستی باید ۱۰ رقم و بدون خط تیره باشد</div>
                </label></div>
            </div>
          </div>
          <div class="c-address__form">
            <div class="c-address__form-row c-address__form-row--full-width js-recipient-is-me-container"><label
                class="o-form__check-box"><input class="o-form__check-box-input js-recipient-is-me"
                                                 name="address[recipient_is_self]" value="true" type="checkbox"><span
                  class="o-form__check-box-sign"></span><span class="js-ui-checkbox-label">
            گیرنده سفارش خودم هستم
        </span></label></div>
            <div class="c-address__form-row"><input type="hidden" class="js-address-id" value=""><label
                class="o-form__field-container">
                <div class="o-form__field-label">نام گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[first_name]" type="" placeholder="" value=""
                                                        class="o-form__field js-input-field js-address-first-name">
                </div>
              </label><label class="o-form__field-container">
                <div class="o-form__field-label">نام خانوادگی گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[last_name]" type="" placeholder="" value=""
                                                        class="o-form__field js-input-field js-address-last-name"></div>
              </label></div>
            <div class="c-address__form-row"><label class="o-form__field-container">
                <div class="o-form__field-label">کد ملی گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[national_id]" type="" placeholder="" value=""
                                                        class="o-form__field js-input-field js-address-national-id">
                </div>
                <div class="o-form__field-helper">کد ملی باید ۱۰ رقم و بدون خط تیره باشد</div>
              </label><label class="o-form__field-container">
                <div class="o-form__field-label">شماره موبایل*</div>
                <div class="o-form__field-frame"><input name="address[mobile_phone]" type="" placeholder="" value=""
                                                        class="o-form__field js-input-field js-address-mobile-phone">
                </div>
                <div class="o-form__field-helper">مثل: ۰۹۱۲۳۴۵۶۷۸۹</div>
              </label></div>
          </div>
          <div class="c-address__separator"></div>
          <div class="c-address__modal-footer">
            <div class="o-btn o-btn--link-blue-sm js-back-to-map">اصلاح موقعیت بر روی نقشه</div>
            <button class="o-btn o-btn--contained-red-md js-submit-btn" type="submit">تایید و ثبت آدرس</button>
          </div>
        </div>
      </form>
    </div>
  </main>

@endsection

@section('source')
  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-general-alert remodal-is-initialized remodal-is-closed" data-remodal-id="alert"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-general-alert__main">
        <div class="c-remodal-general-alert__content">
          <p class="js-remodal-general-alert__text">آیا مایل به حذف این کالا هستید؟</p>
          <p class="c-remodal-general-alert__description js-remodal-general-alert__description"
             style="display: none;"></p>
        </div>
        <div class="c-remodal-general-alert__actions">
          <button
            class="c-remodal-general-alert__button c-remodal-general-alert__button--approve js-remodal-general-alert__button--approve">
            انتقال به لیست خرید بعدی
          </button>
          <button
            class="c-remodal-general-alert__button c-remodal-general-alert__button--cancel js-remodal-general-alert__button--cancel">
            حذف
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $("body").addClass('c-checkout-pages');
    $("body").removeClass('has-top-banner');
  </script>
@endsection

