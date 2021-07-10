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
    var userInformation = {
      "firstName": "\u0645\u0647\u062f\u06cc",
      "lastName": "\u062c\u0644\u0627\u0644\u06cc",
      "nationalSecurityNumber": "4900508349",
      "mobile": "09389701200"
    };
    var userId = 9735394;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/addresses\/add\/";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";
    var activateUrl = "\/digiclub\/activate\/";
  </script>

  <script id="sentry_js" src="{{ asset('assets/js/sentry.js') }}"></script>
  <script id="map_js" src="{{ asset('assets/new/js/map.js') }}"></script>

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
  </style>


@endsection

@section('content')

<main id="main">
    <div id="HomePageTopBanner"></div>
    <div class="c-address__page">
      <div class="js-add-address-btn u-hidden" data-not-modal="true"></div>
      <div class="c-address__title js-address-modal-title">موقعیت مکانی آدرس</div>
      <div class="c-address__subtitle js-address-modal-subtitle">لطفا موقعیت مکانی آدرس را بر روی نقشه تعیین کنید.</div>
      <form method="post" id="add-edit-address-form">
        <div class="c-address__modal-content js-map-interactive" id="address-modal-map">
          <div class="c-map__address-container js-map-address-container u-hidden">
            <div class="c-map__address-title">برای ادامه دادن فرآیند خرید موقعیت آدرس زیر را بر روی نقشه تعیین کنید:</div>
            <div class="c-map__address js-map-address"></div>
          </div>
          <div class="c-map__container  js-map-container">
            <div class="c-map " id="map" data-current-icon="https://www.digikala.com/static/files/c1d18c6c.png"></div>
            <div class="c-map__search-field"><input class="js-search-map-input" placeholder="جستجو آدرس"><button type="button" class="o-btn c-map__search-cancel js-search-map-cancel u-hidden"></button></div>
            <div class="c-map__search-content">
              <div class="c-map__search-content-list js-search-map-content"></div>
            </div>
            <input type="hidden" name="address[lat]"><input type="hidden" name="address[lng]">
            <div class="c-map__overlay"></div>
            <div class="c-map__marker"><img src="https://www.digikala.com/static/files/7ab27ed3.svg"/></div>
          </div>
          <div class="c-address__modal-footer">
            <div class="c-address__modal-footer-title">مرسوله شما به این موقعیت ارسال خواهد شد.</div>
            <div class="o-btn o-btn--contained-red-md js-select-address-map">ثبت و افزودن جزییات</div>
          </div>
        </div>
        <div class="c-address__modal-content u-hidden" id="address-modal-form">
          <div class="c-address__form">
            <div class="c-address__form-row">
              <div class="o-form__field-container">
                <div class="o-form__field-label">استان*</div>
                <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-state js-address-state-id" name="address[state_id]" value="">
                  <option value="">انتخاب استان</option>
                  <option value="9" >تهران</option>
                  <option value="6" >البرز</option>
                  <option value="5" >اصفهان</option>
                  <option value="12" >خراسان رضوی</option>
                  <option value="14" >خوزستان</option>
                  <option value="18" >فارس</option>
                  <option value="28" >مازندران</option>
                  <option value="2" >آذربایجان شرقی</option>
                  <option value="3" >آذربایجان غربی</option>
                  <option value="4" >اردبیل</option>
                  <option value="7" >ایلام</option>
                  <option value="8" >بوشهر</option>
                  <option value="10" >چهار محال و بختیاری</option>
                  <option value="11" >خراسان جنوبی</option>
                  <option value="13" >خراسان شمالی</option>
                  <option value="15" >زنجان</option>
                  <option value="16" >سمنان</option>
                  <option value="17" >سیستان و بلوچستان</option>
                  <option value="19" >قزوین</option>
                  <option value="20" >قم</option>
                  <option value="21" >کردستان</option>
                  <option value="22" >کرمان</option>
                  <option value="23" >کرمانشاه</option>
                  <option value="24" >کهگیلویه و بویراحمد</option>
                  <option value="25" >گلستان</option>
                  <option value="26" >گیلان</option>
                  <option value="27" >لرستان</option>
                  <option value="29" >مرکزی</option>
                  <option value="30" >هرمزگان</option>
                  <option value="31" >همدان</option>
                  <option value="32" >یزد</option>
                </select>
              </div>
              <div class="o-form__field-container">
                <div class="o-form__field-label">شهر*</div>
                <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-city js-address-city-id" name="address[city_id]" value="">
                  <option value="">انتخاب شهر</option>
                </select>
              </div>
            </div>
            <div class="c-address__form-row js-district-wrapper">
              <div class="o-form__field-container">
                <div class="o-form__field-label">محله*</div>
                <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-district js-address-district-id" name="address[district_id]" value="">
                  <option value="">انتخاب محله</option>
                </select>
              </div>
            </div>
            <div class="c-address__form-row c-address__form-row--full-width js-address-field">
              <label class="o-form__field-container">
                <div class="o-form__field-label">نشانی پستی*</div>
                <div class="o-form__field-frame"><input name="address[address]" type="" placeholder=""
                                                        value="" class="o-form__field js-input-field js-address-address" /></div>
              </label>
            </div>
            <div class="c-address__form-row">
              <div class="c-address__form-row">
                <label class="o-form__field-container">
                  <div class="o-form__field-label">پلاک*</div>
                  <div class="o-form__field-frame"><input name="address[bld_num]" type="" placeholder=""
                                                          value="" class="o-form__field js-input-field js-address-building-number" /></div>
                </label>
                <label class="o-form__field-container">
                  <div class="o-form__field-label">واحد</div>
                  <div class="o-form__field-frame"><input name="address[apt_id]" type="" placeholder=""
                                                          value="" class="o-form__field js-input-field js-address-apartment-number" /></div>
                </label>
              </div>
              <div class="c-address__form-row">
                <label class="o-form__field-container">
                  <div class="o-form__field-label">کد پستی*</div>
                  <div class="o-form__field-frame"><input name="address[post_code]" type="" placeholder=""
                                                          value="" class="o-form__field js-input-field js-address-postal-code" /></div>
                  <div class="o-form__field-helper">کدپستی باید ۱۰ رقم و بدون خط تیره باشد</div>
                </label>
              </div>
            </div>
          </div>
          <div class="c-address__form">
            <div class="c-address__form-row c-address__form-row--full-width js-recipient-is-me-container"><label class="o-form__check-box"><input class="o-form__check-box-input js-recipient-is-me" name="address[recipient_is_self]" value="true" type="checkbox" ><span class="o-form__check-box-sign"></span><span class="js-ui-checkbox-label">
                        گیرنده سفارش خودم هستم
                        </span></label>
            </div>
            <div class="c-address__form-row">
              <input type="hidden" class="js-address-id">
              <label class="o-form__field-container">
                <div class="o-form__field-label">نام گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[first_name]" type="" placeholder=""
                                                        value="" class="o-form__field js-input-field js-address-first-name" /></div>
              </label>
              <label class="o-form__field-container">
                <div class="o-form__field-label">نام خانوادگی گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[last_name]" type="" placeholder=""
                                                        value="" class="o-form__field js-input-field js-address-last-name" /></div>
              </label>
            </div>
            <div class="c-address__form-row">
              <label class="o-form__field-container">
                <div class="o-form__field-label">کد ملی گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[national_id]" type="" placeholder=""
                                                        value="" class="o-form__field js-input-field js-address-national-id" /></div>
                <div class="o-form__field-helper">کد ملی باید ۱۰ رقم و بدون خط تیره باشد</div>
              </label>
              <label class="o-form__field-container">
                <div class="o-form__field-label">شماره موبایل*</div>
                <div class="o-form__field-frame"><input name="address[mobile_phone]" type="" placeholder=""
                                                        value="" class="o-form__field js-input-field js-address-mobile-phone" /></div>
                <div class="o-form__field-helper">مثل: ۰۹۱۲۳۴۵۶۷۸۹</div>
              </label>
            </div>
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

@endsection

