<?php
  $banner1 = \Modules\Staff\Slider\Models\Slider::find(1);
  $footer_desc_title = \Modules\Staff\Setting\Models\Setting::where('name', 'footer_desc_title')->first()->value;
  $footer_description = \Modules\Staff\Setting\Models\Setting::where('name', 'footer_description')->first()->value;
  $footer_slogan = \Modules\Staff\Setting\Models\Setting::where('name', 'footer_slogan')->first()->value;
  $custom_footer_code = \Modules\Staff\Setting\Models\Setting::where('name', 'custom_footer_code')->first()->value;
  $copyright_text = \Modules\Staff\Setting\Models\Setting::where('name', 'copyright_text')->first()->value;
  $store_phone = \Modules\Staff\Setting\Models\Setting::where('name', 'store_phone')->first()->value;
  $store_email = \Modules\Staff\Setting\Models\Setting::where('name', 'store_email')->first()->value;
  $ecunion_link = \Modules\Staff\Setting\Models\Setting::where('name', 'ecunion_link')->first()->value;
  $enamad_link = \Modules\Staff\Setting\Models\Setting::where('name', 'enamad_link')->first()->value;
  $samandehi_link = \Modules\Staff\Setting\Models\Setting::where('name', 'samandehi_link')->first()->value;
  $instagram_link = \Modules\Staff\Setting\Models\Setting::where('name', 'instagram_link')->first()->value;
  $twitter_link = \Modules\Staff\Setting\Models\Setting::where('name', 'twitter_link')->first()->value;
  $aparat_link = \Modules\Staff\Setting\Models\Setting::where('name', 'aparat_link')->first()->value;
  $linkedin_link = \Modules\Staff\Setting\Models\Setting::where('name', 'linkedin_link')->first()->value;
  $whatsapp_link = \Modules\Staff\Setting\Models\Setting::where('name', 'whatsapp_link')->first()->value;
  $telegram_link = \Modules\Staff\Setting\Models\Setting::where('name', 'telegram_link')->first()->value;
  $googleplay_link = \Modules\Staff\Setting\Models\Setting::where('name', 'googleplay_link')->first()->value;
  $cafebazaar_link = \Modules\Staff\Setting\Models\Setting::where('name', 'cafebazaar_link')->first()->value;
  $myket_link = \Modules\Staff\Setting\Models\Setting::where('name', 'myket_link')->first()->value;
  $sibapp_link = \Modules\Staff\Setting\Models\Setting::where('name', 'sibapp_link')->first()->value;
?>
<!DOCTYPE html>
<html dir="rtl">
<head>

  @include('layouts.front.ModulesScript')
  @yield('head')

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, {{ ($site_index_status == 'true')? 'follow' : 'nofollow' }}"/>
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#fb3449">
  <meta name="msapplication-navbutton-color" content="#fb3449">
  <meta name="apple-mobile-web-app-status-bar-style" content="#fb3449">

  <link rel="canonical" href="{{ $site_url }}"/>

  <link rel="shortcut icon" href="{{ !is_null($favicon_image)? $site_url . '/' . $favicon_image->path . '/'. $favicon_image->name : '' }}" type="image/icon">
  <link rel="icon" type="image/png" href="{{ !is_null($favicon_image)? $site_url . '/' . $favicon_image->path . '/'. $favicon_image->name : '' }}">

  <link rel="stylesheet" href="{{ asset('assets/css/customize.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/css/max-height1184px.css') }} " media="screen and (max-height: 1184px)">
  <link rel="stylesheet" href="{{ asset('assets/css/max-width1365px.css') }} " media="screen and (max-width: 1365px)">
  <link rel="stylesheet" href="{{ asset('assets/css/min-width1025px.css') }} " media="screen and (min-width: 1025px)">
  <link rel="stylesheet" href="{{ asset('assets/css/min-width1366px.css') }} " media="screen and (min-width: 1366px)">
  <link rel="stylesheet" href="{{ asset('assets/css/min-width1680px.css') }} " media="screen and (min-width: 1680px)">

  <link rel="manifest" href="{{ asset('assets/manifest.json') }}?v=1.4">

  <script>
    try {
      var _ajax = $.ajax;
      if (_ajax) {
        $.ajax = function () {
          if (arguments && arguments[0] && arguments[0].url && /mal{1,2}tina/gi.test(arguments[0].url)) {
            return;
          }
          return _ajax.apply($, arguments);
        };
      }
    } catch (e) {
    }
  </script>

  <!-- page js variables -->
  <script src="{{ asset('assets/js/sentry.js') }} "></script>
  <script src="{{ asset('assets/js/indexAction.js') }} "></script>

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

{{--    @if(!is_null($header_logo))--}}
{{--      .c-header__logo-img {--}}
{{--        background: url({{ $site_url . '/' . $header_logo->path . '/'. $header_logo->name }}) no-repeat 50% !important;--}}
{{--      }--}}
{{--    @endif--}}

  </style>

</head>

<body class="t-index has-top-banner" style="">

<header class="c-header js-header">

  @if($banner1->images()->exists() && $banner1->images()->first()->media()->exists())
  <aside class="c-adplacement c-adplacement__placeholder c-adplacement__container-row c-adplacement__container-row--top">
    <a href="#" class="c-adplacement__item" target="_blank" style="background-image: url({{ ($banner1->images()->first()->media()->exists())?  $site_url . '/' . $banner1->images()->first()->media->first()->path . '/'. $banner1->images()->first()->media->first()->name : '' }})" title="{{ ($banner2->images()->first()->media()->exists())?  $banner2->images()->first()->alt : '' }}"></a>
  </aside>
  @endif

  <div class="container">
    <div class="c-header__row js-header-sticky">
      <div class="c-header__right-side">
        <div class="c-header__logo ">
          <a href="{{ route('front.indexPage') }}" class="c-header__logo-img" style="background: url({{ !is_null($header_logo)? $site_url . '/' . $header_logo->path . '/'. $header_logo->name : '' }}) {{ is_null($header_logo)? 'unset !important;' : 'no-repeat 50%;' }} !important; background-size: contain !important;">Diginova</a>
        </div>
        <div class="c-header__search">
          <div class="c-search js-search" data-event="using_search_box" data-event-category="header_section">
            <span class="c-search__reset u-hidden js-search-reset"></span>
            <input type="text" name="q" placeholder="جستجو در {{ $fa_store_name }} …" class="js-search-input" autocomplete="off" value="">
            <div class="c-search__results js-search-results">
              <ul class="js-autosuggest-results-list c-search__results-list c-search__results-list--autosuggest"></ul>
              <ul class="js-results-list c-search__results-list"></ul>
              <ul class="js-autosuggest-empty-list c-search__results-list">
                <li>
                  <a class="js-search-keyword-link" href="javascript:">
                    <span class="c-search__result-item c-search__result-icon c-search__result-icon--group">نمایش همه نتایج برای </span>
                    <span class="c-search__result-item--category js-search-keyword"></span>
                  </a>
                </li>
              </ul>
              <ul class="c-search__results-list c-search__results-list--history js-last-searches"></ul>
              <div class="c-search__results-footer">
                بیشترین جستجوهای اخیر:
                <ul class="c-search__results-trends js-trends-results"></ul>
              </div>
              <div class="c-search__results-list js-search-ad-banner">
                <div class="c-search__banner">
                  <a href="#" title="پارتنرشیپ - شاوما" data-id="65918" target="_blank" class="js-search-banner-ga">
                    <img class="" alt="پارتنرشیپ - شاوما" src="https://dkstatics-public.digikala.com/digikala-adservice-banners/ab4a62de0c7b5bcd1c5b2d489562599d541595e1_1615708026.jpg?x-oss-process=image/quality,q_80" loading="lazy"/></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" c-header__action">

        @if(auth()->guard('customer')->check())
          <div class="c-header__btn-container">
            <input type="hidden" id="topBarMeta" data-cart_count="0" data-cart_items="[]">

            <input type="hidden" id="ESILogged" data-logged="1" data-user_id="9735394" data-email="mehdi.jalaliii03@gmail.com" data-default_phone="09389701200" data-login_phone="09389701200" data-mobile_phone="09389701200" data-first_name="مهدی" data-last_name="جلالی">

            <div class="c-header__btn-user-container c-header__btn-profile-container js-dropdown-container">
              <a data-snt-event="dkHeaderClick" data-snt-params="{&quot;item&quot;:&quot;account&quot;,&quot;item_option&quot;:null}" class="c-header__btn-profile js-dropdown-toggle"></a>

              <div class="c-header__profile-dropdown js-dropdown-menu">
                <div class="c-header__profile-dropdown-account-container">
                  <div class="c-header__profile-dropdown-user">
                    <div class="c-header__profile-dropdown-user-img">
                      <img src="https://www.digikala.com/static/files/fd4840b2.svg">
                    </div>
                    <div class="c-header__profile-dropdown-user-info">
                      <p class="c-header__profile-dropdown-user-name">{{ customerFullName() }}</p>
                      <span class="c-header__profile-dropdown-user-profile-link">مشاهده حساب کاربری</span>
                    </div>
                  </div>
                  <div class="c-header__profile-dropdown-account">
                    <div class="c-header__profile-dropdown-account-item u-hidden js-user-dropdown-wallet-has-amount">
                      <span class="c-header__profile-dropdown-account-item-title">کیف پول</span>
                      <div class="c-header__profile-dropdown-account-item-amount">
                        <span class="c-header__profile-dropdown-account-item-amount-number js-user-drop-down-wallet-amount"></span>
                        تومان
                      </div>
                    </div>
                    <div class="c-header__profile-dropdown-account-item u-hidden js-user-dropdown-wallet-has-url">
                      <a class="c-header__profile-dropdown-account-item-title c-header__profile-dropdown-account-item-title--link  js-wallet-activation-url" href="">فعال سازی کیف پول</a>
                    </div>

                    <div class="c-header__profile-dropdown-account-item u-hidden">
                      <span class="c-header__profile-dropdown-account-item-title">دیجی‌کلاب</span>
                      <span class="c-header__profile-dropdown-account-item-amount">
                            <span class="c-header__profile-dropdown-account-item-amount-number js-dc-point">۰</span>
                            امتیاز
                        </span>
                    </div>
                  </div>
                  <a href="/profile/" data-snt-event="dkHeaderClick" data-snt-params="{&quot;item&quot;:&quot;account&quot;,&quot;item_option&quot;:&quot;profile&quot;}" data-event="profile_click" data-event-category="header_section" data-event-label="logged_in: True - digiclub_score: 87000" class="c-header__profile-dropdown-user-profile-full-link"></a>
                </div>

                <div class="c-header__profile-dropdown-actions">
                  <div class="c-header__profile-dropdown-action-container">
                    <a href="/profile/orders/" data-snt-event="dkHeaderClick" data-snt-params="{&quot;item&quot;:&quot;account&quot;,&quot;item_option&quot;:&quot;orders&quot;}" class="c-header__profile-dropdown-action c-header__profile-dropdown-action--orders ">سفارش‌های من</a>
                  </div>
                  <div class="c-header__profile-dropdown-action-container">
                    <a href="/profile/favorites/?convert=true" class="c-header__profile-dropdown-action c-header__profile-dropdown-action--favorites">
                      لیست مورد علاقه
                    </a>
                  </div>
                  <div class="c-header__profile-dropdown-action-container u-hidden">
                    <a href="/digiclub/rewards/" class="c-header__profile-dropdown-action c-header__profile-dropdown-action--digiclub-gifts">
                      جوایز دیجی‌کلاب
                    </a>
                  </div>
                  <div class="c-header__profile-dropdown-action-container">
                    <a href="/users/logout/" data-snt-event="dkHeaderClick" data-snt-params="{&quot;item&quot;:&quot;account&quot;,&quot;item_option&quot;:&quot;sign-out&quot;}" class="c-header__profile-dropdown-action c-header__profile-dropdown-action--logout js-logout-button">خروج از حساب کاربری</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @else
          <div class="c-header__btn-container">
            <div class="c-header__btn">
              <a data-snt-event="dkHeaderClick" data-snt-params='{"item":"account","item_option":null}' class="c-header__btn-login o-tooltip" href="/users/login-register/?_back=https://www.digikala.com/">
                ورود به حساب کاربری
              </a>
            </div>
          </div>
        @endif


        <div id="mini-cart" class="c-header__btn-container">
          <div class="c-header__btn-cart-container ">
            <a id="cart-button" class="c-header__btn-cart c-header__btn-adding--no-drop-down" data-snt-event="dkHeaderClick" data-snt-params='{"item":"mini-cart","item_option":null}' data-counter="۰" href="/cart/" data-event="mini_cart_click" data-event-category="header_section" data-event-label="items: 0 - total price: "></a>
            <div class="c-header__cart-info js-mini-cart-dropdown">
              <div class="c-header__cart-info-header">
                <div class="c-header__cart-info-count">
                  ۰ کالا
                </div>
                <a data-snt-event="dkHeaderClick" data-snt-params='{"item":"mini-cart","item_option":"cart-page"}' href="/cart/" class="c-header__cart-info-link">
                  <span>مشاهده سبد خرید</span>
                </a>
              </div>


            </div>
          </div>
          <div class="remodal c-modal c-u-minicart__modal u-hidden js-minicart-modal" data-remodal-id="universal-mini-cart" role="dialog" aria-labelledby="modalTitle" tabindex="-1z" aria-describedby="modalDesc" data-remodal-options="">
            <div class="c-modal__top-bar ">
              <div>
                <div class="c-u-minicart__quantity">
                  سبد خرید
                  <span>۰ کالا</span>
                </div>
                <a href="/cart/" class="o-link o-link--has-arrow o-link--no-border o-link--sm">مشاهده سبد خرید</a>
              </div>
              <div class="c-modal__close" data-remodal-action="close"></div>
            </div>
            <div class="c-u-minicart">
            </div>
            <div class="c-modal__footer">
              <div class="c-header__cart-info-total">
                <span class="c-header__cart-info-total-text">مبلغ قابل پرداخت</span>
                <p class="c-header__cart-info-total-amount">
                  <span class="c-header__cart-info-total-amount-number"> </span>
                  <span> تومان</span>
                </p>
              </div>

              <div>
                <a data-snt-event="dkHeaderClick" data-snt-params='{"item":"mini-cart","item_option":"confirm-cart"}' href="" class="o-btn o-btn--contained-red-md">ورود و ثبت سفارش</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="c-navi js-navi">
    <div class="container">
      <div class="c-navi__row">
        <ul class="c-navi-new-list">
          <li class="c-navi-new-list__categories">
            <ul class="c-navi-new-list__category-item">
              <li class="c-navi-new-list__a-hover js-navi-new-list-category-hover">
                <div></div>
              </li>
              <li class="js-categories-bar-item js-mega-menu-main-item js-categories-item c-navi-new-list__category-container-main">
                <div class="c-navi-new-list__category c-navi-new-list__category--main">دسته‌بندی کالاها</div>
                <div class="c-navi-new-list__sublist js-mega-menu-categories-options c-navi-new__ads-holder">
                  <div class="c-navi-new-list__inner-categories">
                    <a href="" class="c-navi-new-list__inner-category c-navi-new-list__inner-category--hovered js-mega-menu-category" data-index="1">کالای دیجیتال</a>
                  </div>
                  <div class="c-navi-new-list__options-container">
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options is-active" id="categories-1">
                      <div class="c-navi-new-list__sublist-top-bar">
                        <a href="٫" class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های کالای دیجیتال
                        </a>
                      </div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title" data-event="megamenu_click" data-event-category="header_section" data-event-label="category_en: mobile - category_fa: لوازم جانبی گوشی - level: 2">
                          <a data-snt-event="dkMegaMenuClick" data-snt-params='{"type":"option-title","category_title":"لوازم جانبی گوشی"}' href="/search/category-mobile-accessories/" class=" c-navi-new__big-display-title"><span>لوازم جانبی گوشی</span></a><a data-snt-event="dkMegaMenuClick" data-snt-params='{"type":"option-title","category_title":"لوازم جانبی گوشی"}' href="/search/category-mobile-accessories/" class=" c-navi-new__medium-display-title">
                            <span>لوازم جانبی گوشی</span>
                          </a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item" data-event="megamenu_click" data-event-category="header_section" data-event-label="category_en: cell phone pouch cover - category_fa: کیف و کاور گوشی - level: 3">
                          <a data-snt-event="dkMegaMenuClick" data-snt-params='{"type":"option-item","category_title":"کیف و کاور گوشی"}' href="/search/category-cell-phone-pouch-cover/" class=" c-navi-new__big-display-title">
                            کیف و کاور گوشی
                          </a>
                          <a data-snt-event="dkMegaMenuClick" data-snt-params='{"type":"option-item","category_title":"کیف و کاور گوشی"}' href="/search/category-cell-phone-pouch-cover/" class=" c-navi-new__medium-display-title">
                            کیف و کاور گوشی
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options" id="categories-2">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/vehicles/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های وسایل نقلیه و صنعتی
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: خودروهای ایرانی و خارجی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"خودروهای ایرانی و خارجی"}'
                            href="/search/category-cars/" class=" c-navi-new__big-display-title"><span>خودروهای ایرانی و خارجی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"خودروهای ایرانی و خارجی"}'
                            href="/search/category-cars/" class=" c-navi-new__medium-display-title"><span>خودروهای ایرانی و خارجی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: موتور سیکلت - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"موتور سیکلت"}'
                            href="/search/category-motorbike/"
                            class=" c-navi-new__big-display-title"><span>موتور سیکلت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"موتور سیکلت"}'
                            href="/search/category-motorbike/" class=" c-navi-new__medium-display-title"><span>موتور سیکلت</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم جانبی خودرو و موتورسیکلت - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی خودرو و موتورسیکلت"}'
                            href="/search/category-car-accessory-parts/" class=" c-navi-new__big-display-title"><span>لوازم جانبی خودرو و موتورسیکلت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی خودرو و موتورسیکلت"}'
                            href="/search/category-car-accessory-parts/"
                            class=" c-navi-new__medium-display-title"><span>لوازم جانبی خودرو و موتورسیکلت</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم تزیینی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوازم تزیینی"}'
                            href="/search/category-in-car-accessorie/" class=" c-navi-new__big-display-title">
                            لوازم تزیینی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوازم تزیینی"}'
                                 href="/search/category-in-car-accessorie/" class=" c-navi-new__medium-display-title">
                            لوازم تزیینی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سیستم صوتی و تصویری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سیستم صوتی و تصویری"}'
                            href="/search/category-car-stereo/" class=" c-navi-new__big-display-title">
                            سیستم صوتی و تصویری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سیستم صوتی و تصویری"}'
                                 href="/search/category-car-stereo/" class=" c-navi-new__medium-display-title">
                            سیستم صوتی و تصویری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نظافت و نگهداری خودرو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نظافت و نگهداری خودرو"}'
                            href="/search/category-car-cleaning-and-maintenance/"
                            class=" c-navi-new__big-display-title">
                            نظافت و نگهداری خودرو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نظافت و نگهداری خودرو"}'
                                 href="/search/category-car-cleaning-and-maintenance/"
                                 class=" c-navi-new__medium-display-title">
                            نظافت و نگهداری خودرو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کلاه کاسکت و  لوازم جانبی موتور - level: 3">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-item","category_title":"کلاه کاسکت و  لوازم جانبی موتور"}'
                             href="/search/category-motorbike-accessory-parts/" class=" c-navi-new__big-display-title">
                            کلاه کاسکت و لوازم جانبی موتور
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کلاه کاسکت و  لوازم جانبی موتور"}'
                                 href="/search/category-motorbike-accessory-parts/"
                                 class=" c-navi-new__medium-display-title">
                            کلاه کاسکت و لوازم جانبی موتور
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم یدکی خودرو و موتورسیکلت - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم یدکی خودرو و موتورسیکلت"}'
                            href="/search/category-car-spare-parts/" class=" c-navi-new__big-display-title"><span>لوازم یدکی خودرو و موتورسیکلت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم یدکی خودرو و موتورسیکلت"}'
                            href="/search/category-car-spare-parts/" class=" c-navi-new__medium-display-title"><span>لوازم یدکی خودرو و موتورسیکلت</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دیسک و صفحه کلاچ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دیسک و صفحه کلاچ"}'
                            href="/search/category-clutch-kit/" class=" c-navi-new__big-display-title">
                            دیسک و صفحه کلاچ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دیسک و صفحه کلاچ"}'
                                 href="/search/category-clutch-kit/" class=" c-navi-new__medium-display-title">
                            دیسک و صفحه کلاچ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: جلوبندی و تعلیق - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"جلوبندی و تعلیق"}'
                            href="/search/category-suspension-systems-and-component/"
                            class=" c-navi-new__big-display-title">
                            جلوبندی و تعلیق
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"جلوبندی و تعلیق"}'
                                 href="/search/category-suspension-systems-and-component/"
                                 class=" c-navi-new__medium-display-title">
                            جلوبندی و تعلیق
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چراغ خودرو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چراغ خودرو"}'
                            href="/search/category-automotive-lighting/" class=" c-navi-new__big-display-title">
                            چراغ خودرو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چراغ خودرو"}'
                                 href="/search/category-automotive-lighting/" class=" c-navi-new__medium-display-title">
                            چراغ خودرو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تسمه خودرو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تسمه خودرو"}'
                            href="/search/category-engine-belt/" class=" c-navi-new__big-display-title">
                            تسمه خودرو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تسمه خودرو"}'
                                 href="/search/category-engine-belt/" class=" c-navi-new__medium-display-title">
                            تسمه خودرو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کمک فنر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کمک فنر"}'
                            href="/search/category-shock-absorber/" class=" c-navi-new__big-display-title">
                            کمک فنر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کمک فنر"}'
                                 href="/search/category-shock-absorber/" class=" c-navi-new__medium-display-title">
                            کمک فنر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم مصرفی خودرو و موتورسیکلت - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم مصرفی خودرو و موتورسیکلت"}'
                            href="/search/category-consumable-parts/" class=" c-navi-new__big-display-title"><span>لوازم مصرفی خودرو و موتورسیکلت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم مصرفی خودرو و موتورسیکلت"}'
                            href="/search/category-consumable-parts/" class=" c-navi-new__medium-display-title"><span>لوازم مصرفی خودرو و موتورسیکلت</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لاستیک و تایر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لاستیک و تایر"}'
                            href="/search/category-tire/" class=" c-navi-new__big-display-title">
                            لاستیک و تایر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لاستیک و تایر"}'
                                 href="/search/category-tire/" class=" c-navi-new__medium-display-title">
                            لاستیک و تایر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لنت ترمز - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لنت ترمز"}'
                            href="/search/category-brake-pad/" class=" c-navi-new__big-display-title">
                            لنت ترمز
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لنت ترمز"}'
                                 href="/search/category-brake-pad/" class=" c-navi-new__medium-display-title">
                            لنت ترمز
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: روغن موتور و ضد یخ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"روغن موتور و ضد یخ"}'
                            href="/search/category-oils-and-additives/" class=" c-navi-new__big-display-title">
                            روغن موتور و ضد یخ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"روغن موتور و ضد یخ"}'
                                 href="/search/category-oils-and-additives/" class=" c-navi-new__medium-display-title">
                            روغن موتور و ضد یخ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مکمل سوخت و روغن و انواع فیلتر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مکمل سوخت و روغن و انواع فیلتر"}'
                            href="/search/category-car-oil-and-fuel-additive/" class=" c-navi-new__big-display-title">
                            مکمل سوخت و روغن و انواع فیلتر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مکمل سوخت و روغن و انواع فیلتر"}'
                                 href="/search/category-car-oil-and-fuel-additive/"
                                 class=" c-navi-new__medium-display-title">
                            مکمل سوخت و روغن و انواع فیلتر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Sport Gadgets - category_fa: ابزار برقی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ابزار برقی"}'
                            href="/search/category-power-tools/"
                            class=" c-navi-new__big-display-title"><span>ابزار برقی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ابزار برقی"}'
                            href="/search/category-power-tools/" class=" c-navi-new__medium-display-title"><span>ابزار برقی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دریل، پیچ گوشتی برقی و شارژی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دریل، پیچ گوشتی برقی و شارژی"}'
                            href="/search/category-cordlessscrewdriver/" class=" c-navi-new__big-display-title">
                            دریل، پیچ گوشتی برقی و شارژی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دریل، پیچ گوشتی برقی و شارژی"}'
                                 href="/search/category-cordlessscrewdriver/" class=" c-navi-new__medium-display-title">
                            دریل، پیچ گوشتی برقی و شارژی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فرز و سنگ رومیزی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"فرز و سنگ رومیزی"}'
                            href="/search/category-anglegrinder/" class=" c-navi-new__big-display-title">
                            فرز و سنگ رومیزی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"فرز و سنگ رومیزی"}'
                                 href="/search/category-anglegrinder/" class=" c-navi-new__medium-display-title">
                            فرز و سنگ رومیزی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: موتور برق - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"موتور برق"}'
                            href="/search/category-electric-engine/" class=" c-navi-new__big-display-title">
                            موتور برق
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"موتور برق"}'
                                 href="/search/category-electric-engine/" class=" c-navi-new__medium-display-title">
                            موتور برق
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مکنده و دمنده - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مکنده و دمنده"}'
                            href="/search/category-blower/" class=" c-navi-new__big-display-title">
                            مکنده و دمنده
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مکنده و دمنده"}'
                                 href="/search/category-blower/" class=" c-navi-new__medium-display-title">
                            مکنده و دمنده
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کارواش - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کارواش"}'
                            href="/search/category-carwash/" class=" c-navi-new__big-display-title">
                            کارواش
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کارواش"}'
                                 href="/search/category-carwash/" class=" c-navi-new__medium-display-title">
                            کارواش
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کمپرسور و جک خودرو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کمپرسور و جک خودرو"}'
                            href="/search/category-car-tools/" class=" c-navi-new__big-display-title">
                            کمپرسور و جک خودرو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کمپرسور و جک خودرو"}'
                                 href="/search/category-car-tools/" class=" c-navi-new__medium-display-title">
                            کمپرسور و جک خودرو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ابزار همه کاره برقی و شارژی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ابزار همه کاره برقی و شارژی"}'
                            href="/search/category-multitool/" class=" c-navi-new__big-display-title">
                            ابزار همه کاره برقی و شارژی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ابزار همه کاره برقی و شارژی"}'
                                 href="/search/category-multitool/" class=" c-navi-new__medium-display-title">
                            ابزار همه کاره برقی و شارژی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ابزار غیر برقی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ابزار غیر برقی"}'
                            href="/search/category-non-electrical-tools/" class=" c-navi-new__big-display-title"><span>ابزار غیر برقی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ابزار غیر برقی"}'
                            href="/search/category-non-electrical-tools/"
                            class=" c-navi-new__medium-display-title"><span>ابزار غیر برقی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ابزار دستی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ابزار دستی"}'
                            href="/search/category-hand-tools/" class=" c-navi-new__big-display-title">
                            ابزار دستی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ابزار دستی"}'
                                 href="/search/category-hand-tools/" class=" c-navi-new__medium-display-title">
                            ابزار دستی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مجموعه ابزار - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مجموعه ابزار"}'
                            href="/search/category-tools-set/" class=" c-navi-new__big-display-title">
                            مجموعه ابزار
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مجموعه ابزار"}'
                                 href="/search/category-tools-set/" class=" c-navi-new__medium-display-title">
                            مجموعه ابزار
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نردبان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نردبان"}'
                            href="/search/category-ladders/" class=" c-navi-new__big-display-title">
                            نردبان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نردبان"}'
                                 href="/search/category-ladders/" class=" c-navi-new__medium-display-title">
                            نردبان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پیچ گوشتی و فازمتر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پیچ گوشتی و فازمتر"}'
                            href="/search/category-screwdriver/" class=" c-navi-new__big-display-title">
                            پیچ گوشتی و فازمتر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پیچ گوشتی و فازمتر"}'
                                 href="/search/category-screwdriver/" class=" c-navi-new__medium-display-title">
                            پیچ گوشتی و فازمتر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نظم دهنده ابزار - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نظم دهنده ابزار"}'
                            href="/search/category-tool-organizer/" class=" c-navi-new__big-display-title">
                            نظم دهنده ابزار
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نظم دهنده ابزار"}'
                                 href="/search/category-tool-organizer/" class=" c-navi-new__medium-display-title">
                            نظم دهنده ابزار
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: متر، تراز، اندازه‌گیری دقیق - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"متر، تراز، اندازه‌گیری دقیق"}'
                            href="/search/category-measurement/" class=" c-navi-new__big-display-title">
                            متر، تراز، اندازه‌گیری دقیق
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"متر، تراز، اندازه‌گیری دقیق"}'
                                 href="/search/category-measurement/" class=" c-navi-new__medium-display-title">
                            متر، تراز، اندازه‌گیری دقیق
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم روانکاری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوازم روانکاری"}'
                            href="/search/category-oilcan/" class=" c-navi-new__big-display-title">
                            لوازم روانکاری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوازم روانکاری"}'
                                 href="/search/category-oilcan/" class=" c-navi-new__medium-display-title">
                            لوازم روانکاری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چسب صنعتی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چسب صنعتی"}'
                            href="/search/category-industrial-glue/" class=" c-navi-new__big-display-title">
                            چسب صنعتی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چسب صنعتی"}'
                                 href="/search/category-industrial-glue/" class=" c-navi-new__medium-display-title">
                            چسب صنعتی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم و یراق آلات ساختمانی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم و یراق آلات ساختمانی"}'
                            href="/search/category-construction-tools-and-equipment/"
                            class=" c-navi-new__big-display-title"><span>لوازم و یراق آلات ساختمانی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم و یراق آلات ساختمانی"}'
                            href="/search/category-construction-tools-and-equipment/"
                            class=" c-navi-new__medium-display-title"><span>لوازم و یراق آلات ساختمانی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شیرآلات - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شیرآلات"}'
                            href="/search/category-faucets/" class=" c-navi-new__big-display-title">
                            شیرآلات
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شیرآلات"}'
                                 href="/search/category-faucets/" class=" c-navi-new__medium-display-title">
                            شیرآلات
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: رنگ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"رنگ"}'
                            href="/search/category-color/" class=" c-navi-new__big-display-title">
                            رنگ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"رنگ"}'
                                 href="/search/category-color/" class=" c-navi-new__medium-display-title">
                            رنگ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دستگیره در - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دستگیره در"}'
                            href="/search/category-doorknob/" class=" c-navi-new__big-display-title">
                            دستگیره در
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دستگیره در"}'
                                 href="/search/category-doorknob/" class=" c-navi-new__medium-display-title">
                            دستگیره در
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم باغبانی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم باغبانی"}'
                            href="/search/category-gardening-tools/" class=" c-navi-new__big-display-title"><span>لوازم باغبانی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم باغبانی"}'
                            href="/search/category-gardening-tools/" class=" c-navi-new__medium-display-title"><span>لوازم باغبانی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: قیچی‌، چاقو و ابزار باغبانی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"قیچی‌، چاقو و ابزار باغبانی"}'
                            href="/search/category-scissors/" class=" c-navi-new__big-display-title">
                            قیچی‌، چاقو و ابزار باغبانی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"قیچی‌، چاقو و ابزار باغبانی"}'
                                 href="/search/category-scissors/" class=" c-navi-new__medium-display-title">
                            قیچی‌، چاقو و ابزار باغبانی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بذر و تخم گیاهان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"بذر و تخم گیاهان"}'
                            href="/search/category-plants-grain-and-seeds/" class=" c-navi-new__big-display-title">
                            بذر و تخم گیاهان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"بذر و تخم گیاهان"}'
                                 href="/search/category-plants-grain-and-seeds/"
                                 class=" c-navi-new__medium-display-title">
                            بذر و تخم گیاهان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تبر، بیل و کلنگ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تبر، بیل و کلنگ"}'
                            href="/search/category-axeshovelandpick/" class=" c-navi-new__big-display-title">
                            تبر، بیل و کلنگ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تبر، بیل و کلنگ"}'
                                 href="/search/category-axeshovelandpick/" class=" c-navi-new__medium-display-title">
                            تبر، بیل و کلنگ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: خاک، کود و آفت کش - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"خاک، کود و آفت کش"}'
                            href="/search/category-soils-and-fertilizers/" class=" c-navi-new__big-display-title">
                            خاک، کود و آفت کش
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"خاک، کود و آفت کش"}'
                                 href="/search/category-soils-and-fertilizers/"
                                 class=" c-navi-new__medium-display-title">
                            خاک، کود و آفت کش
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نور و روشنایی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"نور و روشنایی"}'
                            href="/search/category-lighting/"
                            class=" c-navi-new__big-display-title"><span>نور و روشنایی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"نور و روشنایی"}'
                            href="/search/category-lighting/" class=" c-navi-new__medium-display-title"><span>نور و روشنایی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوسترو آباژور - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوسترو آباژور"}'
                            href="/search/category-hanging-lamps/" class=" c-navi-new__big-display-title">
                            لوسترو آباژور
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوسترو آباژور"}'
                                 href="/search/category-hanging-lamps/" class=" c-navi-new__medium-display-title">
                            لوسترو آباژور
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لامپ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لامپ"}'
                            href="/search/category-lamp/" class=" c-navi-new__big-display-title">
                            لامپ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لامپ"}'
                                 href="/search/category-lamp/" class=" c-navi-new__medium-display-title">
                            لامپ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چندراهی برق و محافظ ولتاژ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چندراهی برق و محافظ ولتاژ"}'
                            href="/search/category-power-strip/" class=" c-navi-new__big-display-title">
                            چندراهی برق و محافظ ولتاژ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چندراهی برق و محافظ ولتاژ"}'
                                 href="/search/category-power-strip/" class=" c-navi-new__medium-display-title">
                            چندراهی برق و محافظ ولتاژ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تجهیزات ایمنی و کار - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تجهیزات ایمنی و کار"}'
                            href="/search/category-safety-tools/" class=" c-navi-new__big-display-title"><span>تجهیزات ایمنی و کار</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تجهیزات ایمنی و کار"}'
                            href="/search/category-safety-tools/" class=" c-navi-new__medium-display-title"><span>تجهیزات ایمنی و کار</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ایمنی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کفش ایمنی"}'
                            href="/search/category-safety-shoes/" class=" c-navi-new__big-display-title">
                            کفش ایمنی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کفش ایمنی"}'
                                 href="/search/category-safety-shoes/" class=" c-navi-new__medium-display-title">
                            کفش ایمنی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: حفاظتی و امنیتی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"حفاظتی و امنیتی"}'
                            href="/search/category-protection-and-security-equipment/"
                            class=" c-navi-new__big-display-title"><span>حفاظتی و امنیتی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"حفاظتی و امنیتی"}'
                            href="/search/category-protection-and-security-equipment/"
                            class=" c-navi-new__medium-display-title"><span>حفاظتی و امنیتی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گاوصندوق - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گاوصندوق"}'
                            href="/search/category-safe/" class=" c-navi-new__big-display-title">
                            گاوصندوق
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گاوصندوق"}'
                                 href="/search/category-safe/" class=" c-navi-new__medium-display-title">
                            گاوصندوق
                          </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="js-categories-bar-item">
                <a href="/main/food-beverage/" class="c-navi-new-list__category-link c-navi-new-list__category-link--fresh c-navi-new-list__category-link--bold">سوپرمارکت</a>
              </li>
              <li class="js-categories-bar-item js-mega-menu-main-item">
                <a href="/promotion-center/" class="c-navi-new-list__category-link c-navi-new-list__category-link--amazing c-navi-new-list__category-link--bold">
                  تخفیف ها
                </a>
                <div class="c-navi-new-list__sublist c-navi-new-list__sublist--promotion js-mega-menu-categories-options">
                  <div class="c-navi-new-list__options-container">
                    <div class="c-navi-new-list__options-list is-active">
                      <div class="c-navi-new-list__sublist-top-bar">
                        <a href="/promotion-center/" class="c-navi-new-list__sublist-see-all-cats">
                          مشاهده همه تخفیف‌ها و پیشنهادها
                        </a>
                      </div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title">
                          <a href="/incredible-offers/" class=" c-navi-new__big-display-title">
                            <span>کالاهای شگفت‌انگیز</span>
                          </a>
                          <a href="/incredible-offers/" class=" c-navi-new__medium-display-title"><span>کالاهای شگفت‌انگیز</span>
                          </a>
                        </li>

                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item">
                          <a
                            href="/landing-page/?category%5B0%5D=5966&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            کالای دیجیتال
                          </a><a
                            href="/landing-page/?category%5B0%5D=5966&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            کالای دیجیتال
                          </a>
                        </li>




                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item c-navi-new-list__sublist-option--has-circle">
                          <a href="/promotion-center/category-based-products/22/" class=" c-navi-new__big-display-title">
                            ساک و چمدان کمتر از ۱۰۰ هزار تومان
                          </a>
                          <a href="/promotion-center/category-based-products/22/" class=" c-navi-new__medium-display-title">
                            ساک و چمدان کمتر از ۱۰۰ هزار تومان
                          </a>
                        </li>


                        <div class="c-navi-new-list__sublist-divider"></div>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--has-icon c-navi-new-list__sublist-option--new-customer">
                          <a href="/landings/new-customer/" class=" c-navi-new__big-display-title">
                            مشتریان جدید
                          </a><a href="/landings/new-customer/" class=" c-navi-new__medium-display-title">
                            مشتریان جدید
                          </a></li>

                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--has-icon c-navi-new-list__sublist-option--best-selling">
                          <a href="/best-selling/" class=" c-navi-new__big-display-title">
                            پرفروش‌ترین‌ کالاها
                          </a><a href="/best-selling/" class=" c-navi-new__medium-display-title">
                            پرفروش‌ترین‌ کالاها
                          </a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="js-categories-bar-item"><a
                  class="c-navi-new-list__category-link c-navi-new-list__category-link--my-digikala c-navi-new-list__category-link--bold"
                  href="/my-digikala/">
                  {{ $fa_store_name }}ی من
                </a></li>

              <li class="js-categories-bar-item c-navi-new-list__category-link--visible-in-wide"><a
                  class="c-navi-new-list__category-link" target="_blank" href="/faq/">
                  سوالی دارید؟
                </a></li>
              <li class="js-categories-bar-item"><a
                  class="c-navi-new-list__category-link c-navi-new-list__category-link--visible-in-wide"
                  target="_blank"
                  href="https://www.digikala.com/landings/seller-introduction/?headerEntry=1">
                  فروشنده شوید
                </a></li>
            </ul>
          </li>
{{--          <li class="c-navi-new-list__categories">--}}
{{--            <ul class="c-navi-new-list__category-item">--}}
{{--              <li class="c-navi-new-list__category c-navi-new-list__category--location  js-general-location-bar">--}}
{{--                <span class="c-navi-new-list__category-send-to">ارسال به </span>--}}
{{--                <span class="c-navi-new-list__category-location">تهران، صفادشت</span>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--          </li>--}}
          <script>
            var insider_object = {
              "user": {
                "uuid": null,
                "name": null,
                "surename": null,
                "email": null,
                "phone_number": null,
                "gdpr_optin": true,
                "email_optin": true
              }
            };
          </script>

          <input type="hidden"  id="ESILogged" data-logged=0/>

        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="c-navi-categories__overlay js-navi-overlay"></div>

@yield('content')

<div class="c-fmcg-voucher-box c-fmcg-voucher-box--bf u-hidden js-wheel-floating-box">
  <a href="/search/?q=%20&sortby=7">
    <img class="c-fmcg-voucher-box__img" src="https://www.digikala.com/static/files/9252b9fc.png"/>
  </a>
  <button class="c-fmcg-voucher-box__close-button js-wheel-floating-box-close" style="top: 10px;"></button>
</div>

<div class="remodal c-remodal-account" data-remodal-id="login" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div class="c-remodal-account__headline">ورود به {{ $fa_store_name }}</div>
  <div class="c-remodal-account__content">
    <form class="c-form-account" id="loginFormModal">
      <div class="c-message-light c-message-light--info" id="login-form-msg"></div>

      <div class="c-form-account__title">پست الکترونیک یا شماره موبایل</div>
      <div class="c-form-account__row">
        <div class="c-form-account__col">
          <label class="c-ui-input c-ui-input--account-login">
            <input class="c-ui-input__field" type="text" name="login[email_phone]" autocomplete="current-email" placeholder="info@digikala.com">
          </label>
        </div>
      </div>

      <div class="c-form-account__title">کلمه عبور</div>
      <div class="c-form-account__row">
        <div class="c-form-account__col"><label class="c-ui-input c-ui-input--account-password"><input
              class="c-ui-input__field" name="login[password]" type="password"
              autocomplete="current-password" placeholder=""></label></div>
      </div>

      <div class="c-form-account__agree">
        <label class="c-ui-checkbox c-ui-checkbox--primary">
          <input type="checkbox" value="1" name="login[remember]" id="accountAutoLogin">
          <span class="c-ui-checkbox__check"></span></label><label for="accountAutoLogin">مرا به خاطر داشته باش</label>
      </div>

      <div class="c-form-account__row c-form-account__row--submit">
        <div class="c-form-account__col">
          <button class="btn-login login-button-js">ورود به {{ $fa_store_name }}</button>
        </div>
      </div>

      <div class="c-form-account__link">
        <a data-snt-event="dkLoginClick" data-snt-params='{"type":"forgetPassword","site":"login-modal"}' href="/users/password/forgot/" class="btn-link-spoiler">
          رمز عبور خود را فراموش کرده ام
        </a>
      </div>

      <div class="c-message-light c-message-light--error has-oneline" id="loginFormError">نام کاربری یا کلمه عبور اشتباه است.</div>
    </form>
  </div>
  <div class="c-remodal-account__footer is-highlighted"><span>کاربر جدید هستید؟</span>
    <a data-snt-event="dkLoginClick" data-snt-params='{"type":"signup","site":"login-modal"}' href="/users/login-register/?_back=https://www.digikala.com/" class="btn-link-spoiler">
      ثبت‌نام در {{ $fa_store_name }}
    </a>
  </div>
</div>

<div class="remodal c-remodal-loader" data-remodal-id="loader" data-remodal-options="hashTracking: false, closeOnOutsideClick: false" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="c-remodal-loader__icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="115" height="30" viewBox="0 0 115 30">
      <path fill="#EE384E" fill-rule="evenodd" d="M76.916 19.024h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zm26.883 0h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zM88.117 6.951v15.366c0 .484-.625 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm26.883 0v15.366c0 .484-.624 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm-74.675 3.293h-6.721c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78zm4.48-3.293V23.78c0 3.523-3.117 6.22-6.72 6.22H34.62c-.515 0-1-.236-1.311-.638l-1.972-2.55c-.327-.424-.144-1.202.399-1.202h6.347c1.16 0 2.24-.696 2.24-1.83v-.365h-6.72c-3.604 0-6.72-3.063-6.72-6.586v-4.39c0-3.523 3.116-6.585 6.72-6.585h4.107c.514 0 1.074.405 1.437.731l1.177 1.098V6.95c0-.483.625-1.097 1.12-1.097h2.24c.496 0 1.12.613 1.12 1.097zM4.481 16.83c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39zM16.8 0c.497 0 1.121.613 1.121 1.098v21.22c0 .483-.624 1.097-1.12 1.097h-2.24c-.496 0-1.12-.613-1.12-1.098v-.732l-1.175 1.232c-.318.346-.932.598-1.44.598H6.722C3.117 23.415 0 20.352 0 16.829v-4.356c0-3.523 3.117-6.62 6.72-6.62h6.722V1.099c0-.485.624-1.098 1.12-1.098h2.24zm46.3 14.634L69.336 6.9c.347-.421.04-1.048-.513-1.048h-3.566c-.27 0-.525.119-.696.323l-6.314 7.727V1.098c0-.485-.625-1.098-1.12-1.098h-2.24c-.496 0-1.12.613-1.12 1.098v21.22c0 .483.624 1.097 1.12 1.097h2.24c.495 0 1.12-.614 1.12-1.098v-6.951l6.317 7.744c.17.207.428.328.7.328h3.562c.554 0 .86-.627.514-1.048l-6.24-7.756zM48.166 0c-.496 0-1.12.613-1.12 1.098v2.195c0 .484.624 1.097 1.12 1.097h2.24c.495 0 1.12-.613 1.12-1.097V1.098c0-.485-.625-1.098-1.12-1.098h-2.24zm0 5.854c-.496 0-1.12.613-1.12 1.097v15.366c0 .484.8 1.12 1.295 1.12l2.065-.022c.495 0 1.12-.614 1.12-1.098V6.951c0-.484-.625-1.097-1.12-1.097h-2.24zM21.282 0c-.495 0-1.12.613-1.12 1.098v2.195c0 .484.625 1.097 1.12 1.097h2.24c.496 0 1.12-.613 1.12-1.097V1.098c0-.485-.624-1.098-1.12-1.098h-2.24zm0 5.854c-.495 0-1.12.613-1.12 1.097v15.366c0 .484.625 1.098 1.12 1.098h2.24c.496 0 1.12-.614 1.12-1.098V6.951c0-.484-.624-1.097-1.12-1.097h-2.24zm73.556-4.756v21.22c0 .483-.625 1.097-1.12 1.097h-2.24c-.496 0-1.12-.614-1.12-1.098V1.097c0-.484.624-1.097 1.12-1.097h2.24c.495 0 1.12.613 1.12 1.098z"/>
    </svg>
  </div>
  <div class="c-remodal-loader__bullets"><i class="c-remodal-loader__bullet c-remodal-loader__bullet--1"></i><i
      class="c-remodal-loader__bullet c-remodal-loader__bullet--2"></i><i
      class="c-remodal-loader__bullet c-remodal-loader__bullet--3"></i><i
      class="c-remodal-loader__bullet c-remodal-loader__bullet--4"></i></div>
</div>

<div class="remodal c-remodal-general-alert" data-remodal-id="alert" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="c-remodal-general-alert__main">
    <div class="c-remodal-general-alert__content">
      <p class="js-remodal-general-alert__text"></p>
      <p class="c-remodal-general-alert__description js-remodal-general-alert__description"></p></div>
    <div class="c-remodal-general-alert__actions">
      <button class="c-remodal-general-alert__button c-remodal-general-alert__button--approve js-remodal-general-alert__button--approve"></button>
      <button class="c-remodal-general-alert__button c-remodal-general-alert__button--cancel js-remodal-general-alert__button--cancel"></button>
    </div>
  </div>
</div>

<div class="remodal c-remodal-general-information" data-remodal-id="information" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="c-remodal-general-information__main">
    <div class="c-remodal-general-information__content">
      <p class="js-remodal-general-information__text"></p>
    </div>
    <div class="c-remodal-general-information__actions">
      <button class="c-remodal-general-information__button c-remodal-general-information__button--approve js-remodal-general-information__button--approve"></button>
    </div>
  </div>
</div>

<div class="remodal c-remodal c-remodal-quick-view" data-remodal-id="quick-view" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close c-remodal__close" aria-label="Close"></button>
  <div class="c-quick-view__content js-quick-view-section"></div>
</div>

<div class="remodal c-remodal-fmcg" data-remodal-id="fmcg-modal" data-remodal-options="hashTracking: false, closeOnOutsideClick: false" role="dialog">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div class="c-remodal-fmcg__container">
    <img src="https://www.digikala.com/static/files/cbaed462.png" class="c-remodal-fmcg__logo"/>
    <div class="c-remodal-fmcg__content">
      <p class="c-remodal-fmcg__head-text">ارسال سریع کالای
        <span> سوپر مارکتی </span> فقط در تهران و کرج امکان پذیر است.</p>
      <p class="c-remodal-fmcg__question">با توجه به محدودیت ارسال، آیا مایل هستید این کالا به سبد خرید شما افزوده شود؟</p>
      <div class="c-remodal-fmcg__actions">
        <button class="c-remodal-fmcg__button c-remodal-fmcg__button--reject js-fmcg-modal-reject">خیر</button>
        <button class="c-remodal-fmcg__button c-remodal-fmcg__button--approve js-fmcg-modal-approve">بله</button>
      </div>
    </div>
  </div>
</div>

<div class="c-toast__container js-toast-container">
  <div class="c-toast js-toast" style="display: none">
    <div class="c-toast__text js-toast-text"></div>
    <div class="c-toast__btn-container">
      <button type="button" class="js-toast-btn o-link o-link--sm o-link--no-border o-btn">
        متوجه شدم
      </button>
    </div>
  </div>
</div>
<div class="remodal c-remodal-location js-general-location" data-remodal-id="general-location" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="c-remodal-location__header">
    <span class="js-general-location-title">انتخاب استان</span>
    <div class="c-remodal-location__close js-close-modal"></div>
  </div>
  <div class="c-remodal-location__content js-states-container">
    <div class="c-general-location__row c-general-location__row--your-location js-your-location">
      مکان‌یابی خودکار
    </div>
  </div>
  <div class="c-remodal-location__content js-cities-container">
    <div class="c-general-location__row c-general-location__row--back js-back-to-states">
      بازگشت به لیست استان‌ها
    </div>
  </div>
</div>

<div class="remodal c-remodal-location c-remodal-location--addresses js-general-location-addresses" data-remodal-id="general-location" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="c-remodal-location__header">
    <span class="js-general-location-title">انتخاب آدرس</span>
    <div class="c-remodal-location__close js-close-modal"></div>
  </div>
  <div class="c-remodal-location__content js-addresses-container">
    <div class="c-ui-radio-wrapper c-ui-radio--general-location js-sample-address u-hidden">
      <label class="c-filter__label " for="generalLocationAddress"></label>
      <label class="c-ui-radio">
        <input type="radio" value="" name="generalLocationAddress" class="" id="generalLocationAddress" data-title="">
        <span class="c-ui-radio__check"></span>
      </label>
    </div>
    <a href="/addresses/add/" class="c-general-location__add-address js-general-location-add-address">
      افزودن آدرس جدید
    </a>
  </div>
</div>

<div id="footer-data-ux"></div>
<footer class="c-footer">
  <div class="container">
    <div class="c-footer__jumpup">
      <span id="js-jump-to-top" class="c-footer__jumpup-container">
        <span data-snt-event="dkFooterClick" data-snt-params='{"item":"jump-to-top","item_option":null}' class="c-footer__jumpup-angle"></span>
            برگشت به بالا
        </span>
    </div>
    <nav class="c-footer__feature-innerbox">
      <a data-snt-event="dkFooterClick"  data-snt-params='{"item":"slogan-image","item_option":"تحویل اکسپرس"}' class="c-footer__badge" href="#">
        <div class="c-footer__feature-item c-footer__feature-item--1">تحویل اکسپرس</div>
      </a>

      <a data-snt-event="dkFooterClick" data-snt-params='{"item":"slogan-image","item_option":"پشتیبانی ۲۴ ساعته"}' class="c-footer__badge" href="#">
        <div class="c-footer__feature-item c-footer__feature-item--3">پشتیبانی ۲۴ ساعته</div>
      </a>

      <a data-snt-event="dkFooterClick" data-snt-params='{"item":"slogan-image","item_option":"پرداخت در محل"}' class="c-footer__badge" href="#">
        <div class="c-footer__feature-item c-footer__feature-item--4">پرداخت در محل</div>
      </a>

      <a data-snt-event="dkFooterClick" data-snt-params='{"item":"slogan-image","item_option":"۷ روز ضمانت بازگشت"}' class="c-footer__badge" href="#">
        <div class="c-footer__feature-item c-footer__feature-item--5">۷ روز ضمانت بازگشت</div>
      </a>

      <a data-snt-event="dkFooterClick" data-snt-params='{"item":"slogan-image","item_option":"ضمانت اصل‌بودن کالا"}' lass="c-footer__badge" href="#">
        <div class="c-footer__feature-item c-footer__feature-item--6">ضمانت اصل‌بودن کالا</div>
      </a>
    </nav>
    <hr/>
    <div class="c-footer__middlebar">
      <div class="c-footer__links">
        <nav class="c-footer__links--col">
          <div class="o-headline-links">
            <div>
              <a data-snt-event="dkFooterClick" data-snt-params='{"item":"index-title","item_option":"راهنمای خرید از {{ $fa_store_name }}"}' href="#">راهنمای خرید از {{ $fa_store_name }}</a>
            </div>
          </div>
          <ul class="c-footer__links-ul">
            <li>
              <a data-snt-event="dkFooterClick" data-snt-params='{"item":"index-item","item_option":"نحوه ثبت سفارش"}' href="#">نحوه ثبت سفارش</a></li>
            <li>
              <a data-snt-event="dkFooterClick" data-snt-params='{"item":"index-item","item_option":"رویه ارسال سفارش"}' href="#">رویه ارسال سفارش</a></li>
            <li>
              <a data-snt-event="dkFooterClick" data-snt-params='{"item":"index-item","item_option":"شیوه‌های پرداخت"}' ref="#">شیوه‌های پرداخت</a></li>
          </ul>
        </nav>
        <nav class="c-footer__links--col">
          <div class="o-headline-links">
            <div><a data-snt-event="dkFooterClick"
                    data-snt-params='{"item":"index-title","item_option":"خدمات مشتریان"}'
                    href="/faq/">خدمات مشتریان</a></div>
          </div>
          <ul class="c-footer__links-ul">
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"پاسخ به پرسش‌های متداول"}'
                   href="/faq/">پاسخ به پرسش‌های متداول</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"رویه‌های بازگرداندن کالا"}'
                   href="/faq/question/83/">رویه‌های بازگرداندن کالا</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"شرایط استفاده"}'
                   href="/page/terms/">شرایط استفاده</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"حریم خصوصی"}'
                   href="/page/privacy/">حریم خصوصی</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"گزارش باگ"}'
                   href="/bug-report/">گزارش باگ</a></li>
          </ul>
        </nav>
        <nav class="c-footer__links--col">
          <div class="o-headline-links">
            <div><a data-snt-event="dkFooterClick"
                    data-snt-params='{"item":"index-title","item_option":"با {{ $fa_store_name }}"}'
                    href="/page/about/">با {{ $fa_store_name }}</a></div>
          </div>
          <ul class="c-footer__links-ul">
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"اتاق خبر"}'
                   href="https://www.digikala.com/mag/newsroom/" target="_blank">اتاق خبر {{ $fa_store_name }}</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"فروش در {{ $fa_store_name }}"}'
                   href="https://www.digikala.com/landings/seller-introduction/" target="_blank">فروش در {{ $fa_store_name }}</a>
            </li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"فرصت‌های شغلی"}'
                   href="http://careers.digikala.com/" target="_blank">فرصت‌های شغلی</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"تماس با {{ $fa_store_name }}"}'
                   href="/page/contact-us/">تماس با {{ $fa_store_name }}</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"درباره {{ $fa_store_name }}"}'
                   href="/page/about/">درباره {{ $fa_store_name }}</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"راهنمای هویت بصری"}'
                   href="/branding/">راهنمای هویت بصری</a></li>
          </ul>
        </nav>
      </div>
      <nav class="c-footer__form">
        <form id="SubscribeNewsletter" class="c-form-newsletter" action="/newsletter/" method="post">
          <fieldset>
            <legend class="c-form-newsletter__title">از تخفیف‌ها و جدیدترین‌های {{ $fa_store_name }} باخبر
              شوید:
            </legend>
            <div class="c-form-newsletter__row">
              <input class="c-ui-input__field c-ui-input__field--right-placeholder c-ui-input--disabled" type="text" name="subscribe[email]" placeholder="... به زودی" disabled/>
              <button type="submit" class="btn-secondary" id="btnSubmitNewsletterSubscription" disabled>
                ارسال
              </button>
            </div>
          </fieldset>
        </form>
        <div class="c-footer__community">
          <div class="c-footer__social">
            <span>{{ $fa_store_name }} را در شبکه‌های اجتماعی دنبال کنید:</span>
            <div class="c-footer__social-images">
              <div class="c-footer__social-links">
                @if(!is_null($linkedin_link))
                  <a href="{{ $linkedin_link }}" class="c-footer__social-link c-footer__social-link--linkedin" target="_blank"></a>
                @endif
                @if(!is_null($aparat_link))
                  <a href="{{ $aparat_link }}" class="c-footer__social-link c-footer__social-link--aparat" target="_blank"></a>
                @endif
                @if(!is_null($twitter_link))
                  <a href="{{ $twitter_link }}" class="c-footer__social-link c-footer__social-link--twitter" target="_blank"></a>
                @endif
                @if(!is_null($instagram_link))
                  <a href="{{ $instagram_link }}" class="c-footer__social-link c-footer__social-link--instagram" target="_blank"></a>
                @endif
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <hr/>
    <nav class="c-footer__address">
      <ul class="c-footer__contact">
        <li>
          {{ persianNum($footer_slogan) }}
        </li>
        @if(!is_null($store_phone))
          <li>
            شماره تماس :
            <a>{{ persianNum(0 . $store_phone) }}</a>
          </li>
        @endif
        @if(!is_null($store_email))
          <li>
            آدرس ایمیل :
            <a href="mailto:{{ $store_email }}">{{ $store_email }}</a>
          </li>
        @endif
      </ul>
    </nav>
  </div>
  <div class="c-footer__more-info">
    <div class="container">
      <div class="c-footer__description-content">
        <div class="c-footer__content">
          <article class="c-footer__seo">
            <h1>{{ persianNum($footer_desc_title) }}</h1>
            <p>
              <span class="c-footer__seo--content" id="seo-main-content">
                {{ persianNum($footer_description) }}
              </span>
{{--              <span class="c-footer__seo-readmore" id="js-footer-readmore-content" style="font-weight: 400;">--}}
{{--              <span style="font-weight: 400;"> می توانید کلیه نیازهای خود را تنها با چند کلیک سفارش داده و در کمترین زمان ممکن درب منزل تحویل بگیرید. مناسب&zwnj;ترین جمله درباره دیجی&zwnj;کالا ،بازار بزرگ اینترنتی، است؛ چرا که با قدم گذاشتن در آن می&zwnj;توانید، یک خرید اینترنتی لذت بخش، با قیمت مناسب و ارزان به همراه تخفیف ویژه در حراج ها را تجربه کنید.</span></span>--}}
{{--              <a data-snt-event="dkFooterClick" data-snt-params='{"item":"read-more","item_option":null}' href="#" id="js-footer-readmore">مشاهده بیشتر</a><br/>--}}
            </p>
          </article>
        </div>

        <aside>
          <ul class="c-footer__safety-partner">
            <li>
              <img src="https://www.digikala.com/static/files/1e5dab5a.png" class="c-footer__safety-partner-3" width="90" alt="" onclick="window.open('https://www.ecunion.ir/verify/digikala.com?token=35858775acf0232a8063', 'Popup','toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30')" data-snt-event="dkFooterClick" loading="lazy" data-snt-params='{"item":"varification","item_option":"samandehi"}' style="cursor:pointer">
            </li>

            <li class="c-footer__safety-partner-2">
              <img src="https://trustseal.enamad.ir/logo.aspx?id=19077&amp;p=fFt0HzOPfbIzeRkW" alt="" onclick="window.open(&quot;https://trustseal.enamad.ir/?id=19077&amp;Code=sScdOJOzhFxtcEqkjP7P&quot;)" data-snt-event="dkFooterClick" loading="lazy" data-snt-params='{"item":"varification","item_option":"enamad"}' style="cursor:pointer" id="sScdOJOzhFxtcEqkjP7P">
            </li>

            <li class="c-footer__safety-partner-3">
              <img id='nbqeoeukjxlzjzpejzpe' style='cursor:pointer' onclick='window.open("https://logo.samandehi.ir/Verify.aspx?id=28177&p=uiwkmcsirfthjyoejyoe", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt='logo-samandehi' loading="lazy" src='https://logo.samandehi.ir/logo.aspx?id=28177&p=odrfaqgwnbpdyndtyndt'/>
            </li>
          </ul>
        </aside>

      </div>

      <div class="c-footer__copyright">
        <div class="c-footer__copyright--text">
          {{ persianNum($copyright_text) }}
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="application/ld+json">
                {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Digikala - دیجی کالا",
    "image": "https://template.digi-kala.com/digikala/Image/Public/vtwo/pixel-perfect-final-v02-01.png",
    "@id": "https://www.digikala.com",
    "url": "https://www.digikala.com",
    "telephone": "+982161930000",
    "priceRange": "IRR",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "خیابان ولی عصر – بالاتر از میدان ونک – خیابان عطار – میدان عطار – شماره ۴۲ - ساختمان ديجی کالا",
        "addressLocality": "تهران",
        "postalCode": "346915875",
        "addressCountry": "IR"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 35.7642064,
        "longitude": 51.4040483
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Saturday",
            "Sunday"
        ],
        "opens": "09:00",
        "closes": "17:00"
    },
    "sameAs": [
        "https://www.facebook.com/digikalacom",
        "https://www.twitter.com/digikalacom",
        "https://plus.google.com/+digikala",
        "https://www.instagram.com/digikalacom",
        "https://www.youtube.com/channel/UCNShnUIuxoofpmhlwl7OVTg",
        "https://www.linkedin.com/company/digikala"
    ]
}

</script>

<script type="application/ld+json">
                {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "https://www.digikala.com",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.digikala.com/search/?q={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>


</body>

</html>
