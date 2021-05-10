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
  <script src="https://www.parsimap.com/js/v3.1.0/parsimap.js?key=public"></script>

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
      <div class="c-address__title js-address-modal-title">آدرس جدید</div>
      <div class="c-address__subtitle js-address-modal-subtitle">لطفا موقعیت مکانی آدرس را بر روی نقشه تعیین کنید.</div>
      <form method="post" id="add-edit-address-form" novalidate="novalidate">
        <div class="c-address__modal-content" id="address-modal-form">
          <div class="c-address__form">
            <div class="c-address__form-row">
              <div class="o-form__field-container">
                <div class="o-form__field-label">استان*</div>
                <div class="selectric-wrapper selectric-c-ui-select selectric-js-ui-select-search selectric-js-dropdown-universal selectric-js-select-state selectric-js-address-state-id">
{{--                  <div class="selectric-hide-select">--}}
                    <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-state js-address-state-id" name="address[state_id]" value="" tabindex="-1">
                      <option value="">انتخاب استان</option>
                      <option value="9">تهران</option>
                      <option value="6">البرز</option>
                      <option value="5">اصفهان</option>
                      <option value="12">خراسان رضوی</option>
                      <option value="14">خوزستان</option>
                      <option value="18">فارس</option>
                      <option value="28">مازندران</option>
                      <option value="2">آذربایجان شرقی</option>
                      <option value="3">آذربایجان غربی</option>
                      <option value="4">اردبیل</option>
                      <option value="7">ایلام</option>
                      <option value="8">بوشهر</option>
                      <option value="10">چهار محال و بختیاری</option>
                      <option value="11">خراسان جنوبی</option>
                      <option value="13">خراسان شمالی</option>
                      <option value="15">زنجان</option>
                      <option value="16">سمنان</option>
                      <option value="17">سیستان و بلوچستان</option>
                      <option value="19">قزوین</option>
                      <option value="20">قم</option>
                      <option value="21">کردستان</option>
                      <option value="22">کرمان</option>
                      <option value="23">کرمانشاه</option>
                      <option value="24">کهگیلویه و بویراحمد</option>
                      <option value="25">گلستان</option>
                      <option value="26">گیلان</option>
                      <option value="27">لرستان</option>
                      <option value="29">مرکزی</option>
                      <option value="30">هرمزگان</option>
                      <option value="31">همدان</option>
                      <option value="32">یزد</option>
                    </select>
{{--                  </div>--}}

                </div>
              </div>
              <div class="o-form__field-container">
                <div class="o-form__field-label">شهر*</div>
                <div class="selectric-wrapper selectric-c-ui-select selectric-js-ui-select-search selectric-js-dropdown-universal selectric-js-select-city selectric-js-address-city-id">
                  <div class="selectric-hide-select">
                    <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-city js-address-city-id" name="address[city_id]" value="" tabindex="-1">
                      <option value="">انتخاب شهر</option>
                    </select>
                  </div>
                  <div class="selectric"><span class="label">انتخاب شهر</span><b class="button">▾</b></div>
                  <div class="selectric-items selectric-has-search" tabindex="-1">
                    <input class="dk-selectric-input" tabindex="0">
                    <div class="selectric-scroll">
                      <ul>
                        <li data-index="0" class="last selected">انتخاب شهر</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-address__form-row js-district-wrapper" style="display: none;">
              <div class="o-form__field-container">
                <div class="o-form__field-label">محله*</div>
                <div class="selectric-wrapper selectric-c-ui-select selectric-js-ui-select-search selectric-js-dropdown-universal selectric-js-select-district selectric-js-address-district-id">
                  <div class="selectric-hide-select">
                    <select class="c-ui-select js-ui-select-search js-dropdown-universal js-select-district js-address-district-id" name="address[district_id]" value="" tabindex="-1" style="display: none;">
                      <option value="">انتخاب محله</option>
                    </select>
                  </div>
                  <div class="selectric"><span class="label">انتخاب محله</span><b class="button">▾</b></div>
                  <div class="selectric-items selectric-has-search" tabindex="-1">
                    <input class="dk-selectric-input" tabindex="0">
                    <div class="selectric-scroll">
                      <ul>
                        <li data-index="0" class="last selected">انتخاب محله</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-address__form-row c-address__form-row--full-width js-address-field">
              <label class="o-form__field-container">
                <div class="o-form__field-label">نشانی پستی*</div>
                <div class="o-form__field-frame"><input name="address[address]" type="" placeholder="" value="" class="o-form__field js-input-field js-address-address"></div>
              </label>
            </div>
            <div class="c-address__form-row">
              <div class="c-address__form-row">
                <label class="o-form__field-container">
                  <div class="o-form__field-label">پلاک*</div>
                  <div class="o-form__field-frame"><input name="address[bld_num]" type="" placeholder="" value="" class="o-form__field js-input-field js-address-building-number"></div>
                </label>
                <label class="o-form__field-container">
                  <div class="o-form__field-label">واحد</div>
                  <div class="o-form__field-frame"><input name="address[apt_id]" type="" placeholder="" value="" class="o-form__field js-input-field js-address-apartment-number"></div>
                </label>
              </div>
              <div class="c-address__form-row">
                <label class="o-form__field-container">
                  <div class="o-form__field-label">کد پستی*</div>
                  <div class="o-form__field-frame"><input name="address[post_code]" type="" placeholder="" value="" class="o-form__field js-input-field js-address-postal-code"></div>
                  <div class="o-form__field-helper">کدپستی باید ۱۰ رقم و بدون خط تیره باشد</div>
                </label>
              </div>
            </div>
          </div>
          <div class="c-address__form">
            <div class="c-address__form-row c-address__form-row--full-width js-recipient-is-me-container"><label class="o-form__check-box"><input class="o-form__check-box-input js-recipient-is-me" name="address[recipient_is_self]" value="true" type="checkbox"><span class="o-form__check-box-sign"></span><span class="js-ui-checkbox-label">
                  گیرنده سفارش خودم هستم
                  </span></label>
            </div>
            <div class="c-address__form-row">
              <input type="hidden" class="js-address-id" value="">
              <label class="o-form__field-container">
                <div class="o-form__field-label">نام گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[first_name]" type="" placeholder="" value="" class="o-form__field js-input-field js-address-first-name"></div>
              </label>
              <label class="o-form__field-container">
                <div class="o-form__field-label">نام خانوادگی گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[last_name]" type="" placeholder="" value="" class="o-form__field js-input-field js-address-last-name"></div>
              </label>
            </div>
            <div class="c-address__form-row">
              <label class="o-form__field-container">
                <div class="o-form__field-label">کد ملی گیرنده*</div>
                <div class="o-form__field-frame"><input name="address[national_id]" type="" placeholder="" value="" class="o-form__field js-input-field js-address-national-id"></div>
                <div class="o-form__field-helper">کد ملی باید ۱۰ رقم و بدون خط تیره باشد</div>
              </label>
              <label class="o-form__field-container">
                <div class="o-form__field-label">شماره موبایل*</div>
                <div class="o-form__field-frame"><input name="address[mobile_phone]" type="" placeholder="" value="" class="o-form__field js-input-field js-address-mobile-phone"></div>
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
  <script>

    // اضافه کردن توکن به درخواست های ایجکس
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    {{--function reloadScript() {--}}
    {{--  $('#sentry_js').remove();--}}
    {{--  $.getScript("{{ asset('assets/js/sentry.js') }}", function() {--}}
    {{--    $('script:last').attr('id', 'sentry_js');--}}
    {{--  });--}}

    {{--  $('#map_js').remove();--}}
    {{--  $.getScript("{{ asset('assets/new/js/map.js') }}", function() {--}}
    {{--    $('script:last').attr('id', 'map_js');--}}
    {{--  });--}}
    {{--}--}}

    {{--$(document).on('change', '.state-select', function (){--}}
    {{--  $.ajax({--}}
    {{--    method: "POST",--}}
    {{--    url: '{{ route('front.ajax.cityLoader') }}',--}}
    {{--    data: {--}}
    {{--      state_id: $(this).val(),--}}
    {{--    },--}}
    {{--    success: function(response) {--}}
    {{--      $('.city-changable').each(function (){--}}
    {{--        $(this).remove();--}}
    {{--      });--}}
    {{--      $('.city-select').replaceWith(response);--}}
    {{--      $(".js-ui-select-search").selectric({--}}
    {{--        hasSearch: true--}}
    {{--      });--}}
    {{--    }--}}
    {{--  });--}}
    {{--});--}}




    $("body").addClass('c-checkout-pages');
    $("body").removeClass('has-top-banner');

  </script>
@endsection

