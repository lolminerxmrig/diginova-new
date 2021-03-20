<!DOCTYPE html>
<html class="" style="" dir="rtl">
<head>
  <title>{{ $site_title }}</title>

  @include('layouts.front.ModulesScript')

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="https://www.digikala.com/static/files/283b32ca.ico" type="image/icon">

  <meta name="robots" content="index, follow"/>

  <link rel="canonical" href="{{ $site_url }}"/>

  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/icons/iphone-pwa-icon-57.png') }} ">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/icons/iphone-pwa-icon-60.png') }} ">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/icons/iphone-pwa-icon-72.png') }} ">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/icons/iphone-pwa-icon-76.png') }} ">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/icons/iphone-pwa-icon-114.png') }} ">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/icons/iphone-pwa-icon-120.png') }} ">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/icons/iphone-pwa-icon-144.png') }} ">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/icons/iphone-pwa-icon-152.png') }} ">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/iphone-pwa-icon-180.png') }} ">

  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/icons/android-icon-192x192.png') }} ">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/favicon-32x32.png') }} ">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/icons/favicon-96x96.png') }} ">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/favicon-16x16.png') }} ">

  <link rel="manifest" href="{{ asset('assets/manifest.json') }}?v=1.4">

  <meta name="msapplication-TileColor" content="#ffffff">

  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

  <meta name="theme-color" content="#fb3449">
  <meta name="msapplication-navbutton-color" content="#fb3449">
  <meta name="apple-mobile-web-app-status-bar-style" content="#fb3449">

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

  <!-- SEO -->
  <meta name="description" content="{{ $description }}"/>
  <meta name="keywords" content="{{ $keywords }}"/>

  <link rel="stylesheet" href="{{ asset('assets/css/customize.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/css/max-height1184px.css') }} " media="screen and (max-height: 1184px)">
  <link rel="stylesheet" href="{{ asset('assets/css/max-width1365px.css') }} " media="screen and (max-width: 1365px)">
  <link rel="stylesheet" href="{{ asset('assets/css/min-width1025px.css') }} " media="screen and (min-width: 1025px)">
  <link rel="stylesheet" href="{{ asset('assets/css/min-width1366px.css') }} " media="screen and (min-width: 1366px)">
  <link rel="stylesheet" href="{{ asset('assets/css/min-width1680px.css') }} " media="screen and (min-width: 1680px)">

  <!-- page js variables -->
  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var isHomePage = true;
    var isAnanasFriendly = true;
    var userId = null;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";
    var activateUrl = "\/digiclub\/activate\/";
  </script>

  <script src="{{ asset('assets/js/sentry.js') }} "></script>
  <script src="{{ asset('assets/js/indexAction.js') }} "></script>
</head>

<body class=" t-index has-top-banner" style="">

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

<header class="c-header js-header">
  <aside class="c-adplacement c-adplacement__placeholder c-adplacement__container-row c-adplacement__container-row--top">
    <a href="#" class="c-adplacement__item" target="_blank" style="background-image: url()" data-id="65530" title="انبارتکانی"></a>
  </aside>
  <div class="container">
    <div class="c-header__row js-header-sticky">
      <div class="c-header__right-side">
        <div class="c-header__logo ">
          <a data-snt-event="dkHeaderClick" data-snt-params='{"item":"digikala-logo","item_option":null}' href="/?ref=nav_logo" class="c-header__logo-img">Digikala</a>
        </div>
        <div class="c-header__search">
          <div class="c-search js-search" data-event="using_search_box" data-event-category="header_section">
            <span class="c-search__reset u-hidden js-search-reset"></span>
            <input type="text" name="q" placeholder="جستجو در دیجی‌کالا …" class="js-search-input" autocomplete="off" value="">
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
          <div class="c-header__btn-container">    <input type="hidden" id="topBarMeta" data-cart_count="0" data-cart_items="[]">

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
                      <p class="c-header__profile-dropdown-user-name">مهدی جلالی</p>
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

                    <div class="c-header__profile-dropdown-account-item">
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
                  <div class="c-header__profile-dropdown-action-container u-hidden">
                    <a href="/profile/favorites/?convert=true" class="c-header__profile-dropdown-action c-header__profile-dropdown-action--favorites">
                      لیست مورد علاقه
                    </a>
                  </div>
                  <div class="c-header__profile-dropdown-action-container">
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
                    <a href="/main/electronic-devices/" class="c-navi-new-list__inner-category c-navi-new-list__inner-category--hovered js-mega-menu-category c-navi-new-list__inner-category--electronics" data-index="1">کالای دیجیتال</a>
                    <a href="/main/vehicles/" class="c-navi-new-list__inner-category  js-mega-menu-category c-navi-new-list__inner-category--tools" data-index="2">خودرو، ابزار و تجهیزات صنعتی</a>
                    <a href="/main/apparel/" class="c-navi-new-list__inner-category  js-mega-menu-category c-navi-new-list__inner-category--fashion" data-index="3">مد و پوشاک</a>
                    <a href="/main/mother-and-child/" class="c-navi-new-list__inner-category  js-mega-menu-category c-navi-new-list__inner-category--mother-and-child" data-index="4">اسباب بازی، کودک و نوزاد</a>
                    <a href="/main/food-beverage/"
                                                                    class="c-navi-new-list__inner-category  js-mega-menu-category c-navi-new-list__inner-category--food-and-beverage"
                                                                    data-index="5">کالاهای سوپرمارکتی</a><a
                      href="/main/personal-appliance/"
                      class="c-navi-new-list__inner-category  js-mega-menu-category c-navi-new-list__inner-category--personal-appliance"
                      data-index="6">زیبایی و سلامت</a><a href="/main/home-and-kitchen/"
                                                          class="c-navi-new-list__inner-category  js-mega-menu-category c-navi-new-list__inner-category--home-and-kitchen"
                                                          data-index="7">خانه و آشپزخانه</a><a
                      href="/main/book-and-media/"
                      class="c-navi-new-list__inner-category  js-mega-menu-category c-navi-new-list__inner-category--book-and-media"
                      data-index="8">کتاب، لوازم تحریر و هنر</a><a href="/main/sport-entertainment/"
                                                                   class="c-navi-new-list__inner-category  js-mega-menu-category c-navi-new-list__inner-category--sport-and-entertainment"
                                                                   data-index="9">ورزش و سفر</a></div>
                  <div class="c-navi-new-list__options-container">
                    <div class="c-navi-new-list__options-list is-active js-mega-menu-category-options"
                         id="categories-1">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/electronic-devices/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های کالای دیجیتال
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: mobile - category_fa: لوازم جانبی گوشی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی گوشی"}'
                            href="/search/category-mobile-accessories/" class=" c-navi-new__big-display-title"><span>لوازم جانبی گوشی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی گوشی"}'
                            href="/search/category-mobile-accessories/" class=" c-navi-new__medium-display-title"><span>لوازم جانبی گوشی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: cell phone pouch cover - category_fa: کیف و کاور گوشی - level: 3">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-item","category_title":"کیف و کاور گوشی"}'
                             href="/search/category-cell-phone-pouch-cover/" class=" c-navi-new__big-display-title">
                            کیف و کاور گوشی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیف و کاور گوشی"}'
                                 href="/search/category-cell-phone-pouch-cover/"
                                 class=" c-navi-new__medium-display-title">
                            کیف و کاور گوشی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پاور بانک (شارژر همراه) - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پاور بانک (شارژر همراه)"}'
                            href="/search/category-power-bank/" class=" c-navi-new__big-display-title">
                            پاور بانک (شارژر همراه)
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پاور بانک (شارژر همراه)"}'
                                 href="/search/category-power-bank/" class=" c-navi-new__medium-display-title">
                            پاور بانک (شارژر همراه)
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پایه نگهدارنده گوشی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پایه نگهدارنده گوشی"}'
                            href="/search/category-cell-phone-holder/" class=" c-navi-new__big-display-title">
                            پایه نگهدارنده گوشی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پایه نگهدارنده گوشی"}'
                                 href="/search/category-cell-phone-holder/" class=" c-navi-new__medium-display-title">
                            پایه نگهدارنده گوشی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: mobile phone - category_fa: گوشی موبایل - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"گوشی موبایل"}'
                            href="/search/category-mobile-phone/" class=" c-navi-new__big-display-title"><span>گوشی موبایل</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"گوشی موبایل"}'
                            href="/search/category-mobile-phone/" class=" c-navi-new__medium-display-title"><span>گوشی موبایل</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Samsung - category_fa: سامسونگ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سامسونگ"}'
                            href="https://www.digikala.com/search/category-mobile-phone/?q=سامسونگ&entry=mm"
                            class=" c-navi-new__big-display-title">
                            سامسونگ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سامسونگ"}'
                                 href="https://www.digikala.com/search/category-mobile-phone/?q=سامسونگ&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            سامسونگ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: هوآوی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"هوآوی"}'
                            href="/search/category-mobile-phone/?q=%d9%87%d9%88%d8%a7%d9%88%db%8c&entry=mm"
                            class=" c-navi-new__big-display-title">
                            هوآوی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"هوآوی"}'
                                 href="/search/category-mobile-phone/?q=%d9%87%d9%88%d8%a7%d9%88%db%8c&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            هوآوی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Apple iPhone - category_fa: اپل - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"اپل"}'
                            href="/search/category-mobile-phone/?q=%d8%a7%d9%be%d9%84&entry=mm"
                            class=" c-navi-new__big-display-title">
                            اپل
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"اپل"}'
                                 href="/search/category-mobile-phone/?q=%d8%a7%d9%be%d9%84&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            اپل
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Xiaomi - category_fa: شیائومی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شیائومی"}'
                            href="https://www.digikala.com/search/category-mobile-phone/?q=شیائومی&entry=mm"
                            class=" c-navi-new__big-display-title">
                            شیائومی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شیائومی"}'
                                 href="https://www.digikala.com/search/category-mobile-phone/?q=شیائومی&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            شیائومی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Honor - category_fa: آنر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آنر"}'
                            href="https://www.digikala.com/search/category-mobile-phone/?q=آنر&entry=mm"
                            class=" c-navi-new__big-display-title">
                            آنر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آنر"}'
                                 href="https://www.digikala.com/search/category-mobile-phone/?q=آنر&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            آنر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Nokia - category_fa: نوکیا - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نوکیا"}'
                            href="https://www.digikala.com/search/category-mobile-phone/?q=نوکیا&entry=mm"
                            class=" c-navi-new__big-display-title">
                            نوکیا
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نوکیا"}'
                                 href="https://www.digikala.com/search/category-mobile-phone/?q=نوکیا&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            نوکیا
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: واقعیت مجازی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"واقعیت مجازی"}'
                            href="/search/category-mobile-accessories/?q=%d9%87%d8%af%d8%b3%d8%aa%20%d9%88%d8%a7%d9%82%d8%b9%db%8c%d8%aa%20%d9%85%d8%ac%d8%a7%d8%b2%db%8c&entry=mm"
                            class=" c-navi-new__big-display-title"><span>واقعیت مجازی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"واقعیت مجازی"}'
                            href="/search/category-mobile-accessories/?q=%d9%87%d8%af%d8%b3%d8%aa%20%d9%88%d8%a7%d9%82%d8%b9%db%8c%d8%aa%20%d9%85%d8%ac%d8%a7%d8%b2%db%8c&entry=mm"
                            class=" c-navi-new__medium-display-title"><span>واقعیت مجازی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مچ‌بند و ساعت هوشمند - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مچ‌بند و ساعت هوشمند"}'
                            href="/search/category-wearable-gadget/" class=" c-navi-new__big-display-title"><span>مچ‌بند و ساعت هوشمند</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مچ‌بند و ساعت هوشمند"}'
                            href="/search/category-wearable-gadget/" class=" c-navi-new__medium-display-title"><span>مچ‌بند و ساعت هوشمند</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: هدفون، هدست، هندزفری - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"هدفون، هدست، هندزفری"}'
                            href="/search/category-headphone-headset-microphone/"
                            class=" c-navi-new__big-display-title"><span>هدفون، هدست، هندزفری</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"هدفون، هدست، هندزفری"}'
                            href="/search/category-headphone-headset-microphone/"
                            class=" c-navi-new__medium-display-title"><span>هدفون، هدست، هندزفری</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اسپیکر بلوتوث و با سیم - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اسپیکر بلوتوث و با سیم"}'
                            href="/search/category-speaker/" class=" c-navi-new__big-display-title"><span>اسپیکر بلوتوث و با سیم</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اسپیکر بلوتوث و با سیم"}'
                            href="/search/category-speaker/" class=" c-navi-new__medium-display-title"><span>اسپیکر بلوتوث و با سیم</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: هارد، فلش و SSD - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"هارد، فلش و SSD"}'
                            href="/search/category-data-storage/" class=" c-navi-new__big-display-title"><span>هارد، فلش و SSD</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"هارد، فلش و SSD"}'
                            href="/search/category-data-storage/" class=" c-navi-new__medium-display-title"><span>هارد، فلش و SSD</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوربین - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دوربین"}'
                            href="/search/category-camera/"
                            class=" c-navi-new__big-display-title"><span>دوربین</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دوربین"}'
                            href="/search/category-camera/"
                            class=" c-navi-new__medium-display-title"><span>دوربین</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوربین عکاسی دیجیتال - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دوربین عکاسی دیجیتال"}'
                            href="/search/category-digital-camera/" class=" c-navi-new__big-display-title">
                            دوربین عکاسی دیجیتال
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دوربین عکاسی دیجیتال"}'
                                 href="/search/category-digital-camera/" class=" c-navi-new__medium-display-title">
                            دوربین عکاسی دیجیتال
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوربین‌ ورزشی و فیلم برداری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دوربین‌ ورزشی و فیلم برداری"}'
                            href="/search/category-camcorder/" class=" c-navi-new__big-display-title">
                            دوربین‌ ورزشی و فیلم برداری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دوربین‌ ورزشی و فیلم برداری"}'
                                 href="/search/category-camcorder/" class=" c-navi-new__medium-display-title">
                            دوربین‌ ورزشی و فیلم برداری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوربین‌ چاپ سریع - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دوربین‌ چاپ سریع"}'
                            href="/search/category-digital-camera/?q=%da%86%d8%a7%d9%be%20%d8%b3%d8%b1%db%8c%d8%b9&entry=mm"
                            class=" c-navi-new__big-display-title">
                            دوربین‌ چاپ سریع
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دوربین‌ چاپ سریع"}'
                                 href="/search/category-digital-camera/?q=%da%86%d8%a7%d9%be%20%d8%b3%d8%b1%db%8c%d8%b9&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            دوربین‌ چاپ سریع
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم جانبی دوربین - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی دوربین"}'
                            href="/search/category-camera-accessories/" class=" c-navi-new__big-display-title"><span>لوازم جانبی دوربین</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی دوربین"}'
                            href="/search/category-camera-accessories/" class=" c-navi-new__medium-display-title"><span>لوازم جانبی دوربین</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لنز - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لنز"}'
                            href="/search/category-camera-lens/" class=" c-navi-new__big-display-title">
                            لنز
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لنز"}'
                                 href="/search/category-camera-lens/" class=" c-navi-new__medium-display-title">
                            لنز
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیف - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیف"}'
                            href="/search/category-camera-bag/" class=" c-navi-new__big-display-title">
                            کیف
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیف"}'
                                 href="/search/category-camera-bag/" class=" c-navi-new__medium-display-title">
                            کیف
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کارت حافظه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کارت حافظه"}'
                            href="/search/category-memory-cards/" class=" c-navi-new__big-display-title">
                            کارت حافظه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کارت حافظه"}'
                                 href="/search/category-memory-cards/" class=" c-navi-new__medium-display-title">
                            کارت حافظه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کاغذ چاپ عکس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کاغذ چاپ عکس"}'
                            href="/search/category-printer-paper/" class=" c-navi-new__big-display-title">
                            کاغذ چاپ عکس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کاغذ چاپ عکس"}'
                                 href="/search/category-printer-paper/" class=" c-navi-new__medium-display-title">
                            کاغذ چاپ عکس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوربین دو چشمی و شکاری - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دوربین دو چشمی و شکاری"}'
                            href="/search/category-binoculars/" class=" c-navi-new__big-display-title"><span>دوربین دو چشمی و شکاری</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دوربین دو چشمی و شکاری"}'
                            href="/search/category-binoculars/" class=" c-navi-new__medium-display-title"><span>دوربین دو چشمی و شکاری</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تلسکوپ - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تلسکوپ"}'
                            href="/search/category-telescope/"
                            class=" c-navi-new__big-display-title"><span>تلسکوپ</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تلسکوپ"}'
                            href="/search/category-telescope/"
                            class=" c-navi-new__medium-display-title"><span>تلسکوپ</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پلی استیشن، ایکس باکس و بازی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پلی استیشن، ایکس باکس و بازی"}'
                            href="/search/category-game-console/" class=" c-navi-new__big-display-title"><span>پلی استیشن، ایکس باکس و بازی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پلی استیشن، ایکس باکس و بازی"}'
                            href="/search/category-game-console/" class=" c-navi-new__medium-display-title"><span>پلی استیشن، ایکس باکس و بازی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Office Electronics - category_fa: کامپیوتر و تجهیزات جانبی - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"کامپیوتر و تجهیزات جانبی"}'
                             href="/search/category-computer-parts/" class=" c-navi-new__big-display-title"><span>کامپیوتر و تجهیزات جانبی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کامپیوتر و تجهیزات جانبی"}'
                            href="/search/category-computer-parts/" class=" c-navi-new__medium-display-title"><span>کامپیوتر و تجهیزات جانبی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تجهیزات مخصوص بازی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تجهیزات مخصوص بازی"}'
                            href="/search/category-gaming-accessories/" class=" c-navi-new__big-display-title">
                            تجهیزات مخصوص بازی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تجهیزات مخصوص بازی"}'
                                 href="/search/category-gaming-accessories/" class=" c-navi-new__medium-display-title">
                            تجهیزات مخصوص بازی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مانیتور - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مانیتور"}'
                            href="/search/category-monitor/" class=" c-navi-new__big-display-title">
                            مانیتور
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مانیتور"}'
                                 href="/search/category-monitor/" class=" c-navi-new__medium-display-title">
                            مانیتور
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیس‌های اسمبل شده - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیس‌های اسمبل شده"}'
                            href="/search/category-assembled-cases/" class=" c-navi-new__big-display-title">
                            کیس‌های اسمبل شده
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیس‌های اسمبل شده"}'
                                 href="/search/category-assembled-cases/" class=" c-navi-new__medium-display-title">
                            کیس‌های اسمبل شده
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: قطعات داخلی کامپیوتر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"قطعات داخلی کامپیوتر"}'
                            href="/search/category-computer-devices/" class=" c-navi-new__big-display-title">
                            قطعات داخلی کامپیوتر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"قطعات داخلی کامپیوتر"}'
                                 href="/search/category-computer-devices/" class=" c-navi-new__medium-display-title">
                            قطعات داخلی کامپیوتر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماوس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماوس"}'
                            href="/search/category-mouse/" class=" c-navi-new__big-display-title">
                            ماوس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماوس"}'
                                 href="/search/category-mouse/" class=" c-navi-new__medium-display-title">
                            ماوس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیبورد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیبورد"}'
                            href="/search//category-keyboard/" class=" c-navi-new__big-display-title">
                            کیبورد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیبورد"}'
                                 href="/search//category-keyboard/" class=" c-navi-new__medium-display-title">
                            کیبورد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Laptop - category_fa: لپ تاپ - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لپ تاپ"}'
                            href="/search/category-notebook-netbook-ultrabook/"
                            class=" c-navi-new__big-display-title"><span>لپ تاپ</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لپ تاپ"}'
                            href="/search/category-notebook-netbook-ultrabook/"
                            class=" c-navi-new__medium-display-title"><span>لپ تاپ</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم جانبی لپ تاپ - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی لپ تاپ"}'
                            href="/search/category-laptop-accessories/" class=" c-navi-new__big-display-title"><span>لوازم جانبی لپ تاپ</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی لپ تاپ"}'
                            href="/search/category-laptop-accessories/" class=" c-navi-new__medium-display-title"><span>لوازم جانبی لپ تاپ</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیف، کوله و کاور - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیف، کوله و کاور"}'
                            href="/search/category-laptop-bag/" class=" c-navi-new__big-display-title">
                            کیف، کوله و کاور
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیف، کوله و کاور"}'
                                 href="/search/category-laptop-bag/" class=" c-navi-new__medium-display-title">
                            کیف، کوله و کاور
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کابل‌ صدا، AUX و HDMI - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کابل‌ صدا، AUX و HDMI"}'
                            href="/search/category-cable-voice-video/" class=" c-navi-new__big-display-title">
                            کابل‌ صدا، AUX و HDMI
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کابل‌ صدا، AUX و HDMI"}'
                                 href="/search/category-cable-voice-video/" class=" c-navi-new__medium-display-title">
                            کابل‌ صدا، AUX و HDMI
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Tablet - category_fa: تبلت - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تبلت"}'
                            href="https://www.digikala.com/search/category-tablet/"
                            class=" c-navi-new__big-display-title"><span>تبلت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تبلت"}'
                            href="https://www.digikala.com/search/category-tablet/"
                            class=" c-navi-new__medium-display-title"><span>تبلت</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شارژر تبلت و موبایل - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"شارژر تبلت و موبایل"}'
                            href="/search/category-car-charger/" class=" c-navi-new__big-display-title"><span>شارژر تبلت و موبایل</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"شارژر تبلت و موبایل"}'
                            href="/search/category-car-charger/" class=" c-navi-new__medium-display-title"><span>شارژر تبلت و موبایل</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Camera & Studio Equipment - category_fa: کیف، کاور، لوازم جانبی تبلت - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"کیف، کاور، لوازم جانبی تبلت"}'
                             href="/search/category-tablet-accessories/" class=" c-navi-new__big-display-title"><span>کیف، کاور، لوازم جانبی تبلت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کیف، کاور، لوازم جانبی تبلت"}'
                            href="/search/category-tablet-accessories/" class=" c-navi-new__medium-display-title"><span>کیف، کاور، لوازم جانبی تبلت</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: باتری - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"باتری"}'
                            href="/search/category-battery-charger-and-accesories/"
                            class=" c-navi-new__big-display-title"><span>باتری</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"باتری"}'
                            href="/search/category-battery-charger-and-accesories/"
                            class=" c-navi-new__medium-display-title"><span>باتری</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوربین‌های تحت شبکه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دوربین‌های تحت شبکه"}'
                            href="/search/category-network-cam/" class=" c-navi-new__big-display-title"><span>دوربین‌های تحت شبکه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دوربین‌های تحت شبکه"}'
                            href="/search/category-network-cam/" class=" c-navi-new__medium-display-title"><span>دوربین‌های تحت شبکه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Accessories - category_fa: مودم و تجهیزات شبکه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مودم و تجهیزات شبکه"}'
                            href="/search/category-network/" class=" c-navi-new__big-display-title"><span>مودم و تجهیزات شبکه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مودم و تجهیزات شبکه"}'
                            href="/search/category-network/" class=" c-navi-new__medium-display-title"><span>مودم و تجهیزات شبکه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماشین های اداری - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ماشین های اداری"}'
                            href="/search/category-office-machines/" class=" c-navi-new__big-display-title"><span>ماشین های اداری</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ماشین های اداری"}'
                            href="/search/category-office-machines/" class=" c-navi-new__medium-display-title"><span>ماشین های اداری</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تلفن، بی سیم و سانترال - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تلفن، بی سیم و سانترال"}'
                            href="/search/category-telephone/" class=" c-navi-new__big-display-title">
                            تلفن، بی سیم و سانترال
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تلفن، بی سیم و سانترال"}'
                                 href="/search/category-telephone/" class=" c-navi-new__medium-display-title">
                            تلفن، بی سیم و سانترال
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فکس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"فکس"}'
                            href="/search/category-fax/" class=" c-navi-new__big-display-title">
                            فکس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"فکس"}'
                                 href="/search/category-fax/" class=" c-navi-new__medium-display-title">
                            فکس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پرینتر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پرینتر"}'
                            href="/search/category-printer/" class=" c-navi-new__big-display-title">
                            پرینتر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پرینتر"}'
                                 href="/search/category-printer/" class=" c-navi-new__medium-display-title">
                            پرینتر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم جانبی اداری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوازم جانبی اداری"}'
                            href="/search/category-office-accessories/" class=" c-navi-new__big-display-title">
                            لوازم جانبی اداری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوازم جانبی اداری"}'
                                 href="/search/category-office-accessories/" class=" c-navi-new__medium-display-title">
                            لوازم جانبی اداری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کتابخوان فیدیبوک - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کتابخوان فیدیبوک"}'
                            href="/search/category-ebook-reader/?q=فیدیبوک&entry=mm"
                            class=" c-navi-new__big-display-title"><span>کتابخوان فیدیبوک</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کتابخوان فیدیبوک"}'
                            href="/search/category-ebook-reader/?q=فیدیبوک&entry=mm"
                            class=" c-navi-new__medium-display-title"><span>کتابخوان فیدیبوک</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کارت هدیه خرید از دیجی‌کالا - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کارت هدیه خرید از دیجی‌کالا"}'
                            href="/main/dk-ds-gift-card/" class=" c-navi-new__big-display-title"><span>کارت هدیه خرید از دیجی‌کالا</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کارت هدیه خرید از دیجی‌کالا"}'
                            href="/main/dk-ds-gift-card/" class=" c-navi-new__medium-display-title"><span>کارت هدیه خرید از دیجی‌کالا</span></a>
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
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options" id="categories-3">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/apparel/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های مد و پوشاک
                        </a><a href="https://www.digistyle.com" target="_blank"
                               class="c-navi-new-list__sublist-top-bar-image"><img
                            src="https://www.digikala.com/static/files/5851ec93.svg"/></a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مردانه"}'
                            href="/search/category-mens-apparel/"
                            class=" c-navi-new__big-display-title"><span>مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مردانه"}'
                            href="/search/category-mens-apparel/"
                            class=" c-navi-new__medium-display-title"><span>مردانه</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لباس مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لباس مردانه"}'
                            href="/search/category-men-clothing/" class=" c-navi-new__big-display-title"><span>لباس مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لباس مردانه"}'
                            href="/search/category-men-clothing/" class=" c-navi-new__medium-display-title"><span>لباس مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تی شرت و پولو شرت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تی شرت و پولو شرت"}'
                            href="/search/category-men-tee-shirts-and-polos/" class=" c-navi-new__big-display-title">
                            تی شرت و پولو شرت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تی شرت و پولو شرت"}'
                                 href="/search/category-men-tee-shirts-and-polos/"
                                 class=" c-navi-new__medium-display-title">
                            تی شرت و پولو شرت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پیراهن - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پیراهن"}'
                            href="/search/category-men-shirts/" class=" c-navi-new__big-display-title">
                            پیراهن
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پیراهن"}'
                                 href="/search/category-men-shirts/" class=" c-navi-new__medium-display-title">
                            پیراهن
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شلوار - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شلوار"}'
                            href="/search/category-men-trousers-jumpsuits/" class=" c-navi-new__big-display-title">
                            شلوار
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شلوار"}'
                                 href="/search/category-men-trousers-jumpsuits/"
                                 class=" c-navi-new__medium-display-title">
                            شلوار
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لباس زیر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لباس زیر"}'
                            href="/search/category-men-underwear/" class=" c-navi-new__big-display-title">
                            لباس زیر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لباس زیر"}'
                                 href="/search/category-men-underwear/" class=" c-navi-new__medium-display-title">
                            لباس زیر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش مردانه"}'
                            href="/search/category-men-shoes/"
                            class=" c-navi-new__big-display-title"><span>کفش مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش مردانه"}'
                            href="/search/category-men-shoes/" class=" c-navi-new__medium-display-title"><span>کفش مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش روزمره - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کفش روزمره"}'
                            href="/search/category-casual-shoes-for-men/" class=" c-navi-new__big-display-title">
                            کفش روزمره
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کفش روزمره"}'
                                 href="/search/category-casual-shoes-for-men/"
                                 class=" c-navi-new__medium-display-title">
                            کفش روزمره
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش رسمی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کفش رسمی"}'
                            href="/search/category-men-formal-shoes/" class=" c-navi-new__big-display-title">
                            کفش رسمی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کفش رسمی"}'
                                 href="/search/category-men-formal-shoes/" class=" c-navi-new__medium-display-title">
                            کفش رسمی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اکسسوری مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اکسسوری مردانه"}'
                            href="/search/category-men-accessories/" class=" c-navi-new__big-display-title"><span>اکسسوری مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اکسسوری مردانه"}'
                            href="/search/category-men-accessories/" class=" c-navi-new__medium-display-title"><span>اکسسوری مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ساعت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ساعت"}'
                            href="/search/category-men-watches/" class=" c-navi-new__big-display-title">
                            ساعت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ساعت"}'
                                 href="/search/category-men-watches/" class=" c-navi-new__medium-display-title">
                            ساعت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیف - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیف"}'
                            href="/search/category-men-bags/" class=" c-navi-new__big-display-title">
                            کیف
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیف"}'
                                 href="/search/category-men-bags/" class=" c-navi-new__medium-display-title">
                            کیف
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کمربند - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کمربند"}'
                            href="/search/category-men-belts/" class=" c-navi-new__big-display-title">
                            کمربند
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کمربند"}'
                                 href="/search/category-men-belts/" class=" c-navi-new__medium-display-title">
                            کمربند
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Women - category_fa: زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زنانه"}'
                            href="/search/category-womens-apparel/"
                            class=" c-navi-new__big-display-title"><span>زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زنانه"}'
                            href="/search/category-womens-apparel/" class=" c-navi-new__medium-display-title"><span>زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لباس زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لباس زنانه"}'
                            href="/search/category-women-clothing/" class=" c-navi-new__big-display-title"><span>لباس زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لباس زنانه"}'
                            href="/search/category-women-clothing/" class=" c-navi-new__medium-display-title"><span>لباس زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشش اسلامی و مانتو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پوشش اسلامی و مانتو"}'
                            href="/search/category-women-islamicwear/" class=" c-navi-new__big-display-title">
                            پوشش اسلامی و مانتو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پوشش اسلامی و مانتو"}'
                                 href="/search/category-women-islamicwear/" class=" c-navi-new__medium-display-title">
                            پوشش اسلامی و مانتو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بلوز و شومیز - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"بلوز و شومیز"}'
                            href="/search/category-women-shirts/" class=" c-navi-new__big-display-title">
                            بلوز و شومیز
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"بلوز و شومیز"}'
                                 href="/search/category-women-shirts/" class=" c-navi-new__medium-display-title">
                            بلوز و شومیز
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تی شرت و پولوشرت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تی شرت و پولوشرت"}'
                            href="/search/category-women-tee-shirts-and-polos/" class=" c-navi-new__big-display-title">
                            تی شرت و پولوشرت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تی شرت و پولوشرت"}'
                                 href="/search/category-women-tee-shirts-and-polos/"
                                 class=" c-navi-new__medium-display-title">
                            تی شرت و پولوشرت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شلوار و سرهمی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شلوار و سرهمی"}'
                            href="/search/category-women-trousers-and-jumpsuits/"
                            class=" c-navi-new__big-display-title">
                            شلوار و سرهمی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شلوار و سرهمی"}'
                                 href="/search/category-women-trousers-and-jumpsuits/"
                                 class=" c-navi-new__medium-display-title">
                            شلوار و سرهمی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لباس زیر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لباس زیر"}'
                            href="/search/category-women-underwear/" class=" c-navi-new__big-display-title">
                            لباس زیر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لباس زیر"}'
                                 href="/search/category-women-underwear/" class=" c-navi-new__medium-display-title">
                            لباس زیر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش زنانه"}'
                            href="/search/category-women-shoes/"
                            class=" c-navi-new__big-display-title"><span>کفش زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش زنانه"}'
                            href="/search/category-women-shoes/" class=" c-navi-new__medium-display-title"><span>کفش زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش روزمره - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کفش روزمره"}'
                            href="/search/category-casual-shoes-for-women/" class=" c-navi-new__big-display-title">
                            کفش روزمره
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کفش روزمره"}'
                                 href="/search/category-casual-shoes-for-women/"
                                 class=" c-navi-new__medium-display-title">
                            کفش روزمره
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش تخت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کفش تخت"}'
                            href="/search/category-women-flat-shoes/" class=" c-navi-new__big-display-title">
                            کفش تخت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کفش تخت"}'
                                 href="/search/category-women-flat-shoes/" class=" c-navi-new__medium-display-title">
                            کفش تخت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اکسسوری زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اکسسوری زنانه"}'
                            href="/search/category-women-accessories/" class=" c-navi-new__big-display-title"><span>اکسسوری زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اکسسوری زنانه"}'
                            href="/search/category-women-accessories/" class=" c-navi-new__medium-display-title"><span>اکسسوری زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ساعت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ساعت"}'
                            href="/search/category-women-watches/" class=" c-navi-new__big-display-title">
                            ساعت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ساعت"}'
                                 href="/search/category-women-watches/" class=" c-navi-new__medium-display-title">
                            ساعت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیف - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیف"}'
                            href="/search/category-women-bags/" class=" c-navi-new__big-display-title">
                            کیف
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیف"}'
                                 href="/search/category-women-bags/" class=" c-navi-new__medium-display-title">
                            کیف
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شال و روسری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شال و روسری"}'
                            href="/search/category-women-scarves/" class=" c-navi-new__big-display-title">
                            شال و روسری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شال و روسری"}'
                                 href="/search/category-women-scarves/" class=" c-navi-new__medium-display-title">
                            شال و روسری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زیورآلات زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زیورآلات زنانه"}'
                            href="/search/category-women-jewelry/" class=" c-navi-new__big-display-title"><span>زیورآلات زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زیورآلات زنانه"}'
                            href="/search/category-women-jewelry/" class=" c-navi-new__medium-display-title"><span>زیورآلات زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دستبند - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دستبند"}'
                            href="/search/category-women-bracelet/" class=" c-navi-new__big-display-title">
                            دستبند
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دستبند"}'
                                 href="/search/category-women-bracelet/" class=" c-navi-new__medium-display-title">
                            دستبند
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گوشواره - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گوشواره"}'
                            href="/search/category-women-earrings/" class=" c-navi-new__big-display-title">
                            گوشواره
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گوشواره"}'
                                 href="/search/category-women-earrings/" class=" c-navi-new__medium-display-title">
                            گوشواره
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گردنبند - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گردنبند"}'
                            href="/search/category-women-necklace/" class=" c-navi-new__big-display-title">
                            گردنبند
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گردنبند"}'
                                 href="/search/category-women-necklace/" class=" c-navi-new__medium-display-title">
                            گردنبند
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زیورآلات طلا زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زیورآلات طلا زنانه"}'
                            href="/search/category-women-gold-jewelry/" class=" c-navi-new__big-display-title"><span>زیورآلات طلا زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زیورآلات طلا زنانه"}'
                            href="/search/category-women-gold-jewelry/" class=" c-navi-new__medium-display-title"><span>زیورآلات طلا زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دستبند - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دستبند"}'
                            href="/search/category-women-gold-bracelet/" class=" c-navi-new__big-display-title">
                            دستبند
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دستبند"}'
                                 href="/search/category-women-gold-bracelet/" class=" c-navi-new__medium-display-title">
                            دستبند
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گوشواره - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گوشواره"}'
                            href="/search/category-women-gold-earrings/" class=" c-navi-new__big-display-title">
                            گوشواره
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گوشواره"}'
                                 href="/search/category-women-gold-earrings/" class=" c-navi-new__medium-display-title">
                            گوشواره
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آویز - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آویز"}'
                            href="/search/category-women-gold-pendants/" class=" c-navi-new__big-display-title">
                            آویز
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آویز"}'
                                 href="/search/category-women-gold-pendants/" class=" c-navi-new__medium-display-title">
                            آویز
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گردنبند - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گردنبند"}'
                            href="/search/category-women-gold-necklace/" class=" c-navi-new__big-display-title">
                            گردنبند
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گردنبند"}'
                                 href="/search/category-women-gold-necklace/" class=" c-navi-new__medium-display-title">
                            گردنبند
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زیورآلات نقره زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زیورآلات نقره زنانه"}'
                            href="/search/category-women-silver-jewelry/" class=" c-navi-new__big-display-title"><span>زیورآلات نقره زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زیورآلات نقره زنانه"}'
                            href="/search/category-women-silver-jewelry/"
                            class=" c-navi-new__medium-display-title"><span>زیورآلات نقره زنانه</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: عینک آفتابی زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"عینک آفتابی زنانه"}'
                            href="/search/category-women-eyewear/" class=" c-navi-new__big-display-title"><span>عینک آفتابی زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"عینک آفتابی زنانه"}'
                            href="/search/category-women-eyewear/" class=" c-navi-new__medium-display-title"><span>عینک آفتابی زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: عینک آفتابی مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"عینک آفتابی مردانه"}'
                            href="/search/category-men-eyewear/" class=" c-navi-new__big-display-title"><span>عینک آفتابی مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"عینک آفتابی مردانه"}'
                            href="/search/category-men-eyewear/" class=" c-navi-new__medium-display-title"><span>عینک آفتابی مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک ورزشی مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی مردانه"}'
                            href="/search/category-men-sportswear/" class=" c-navi-new__big-display-title"><span>پوشاک ورزشی مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی مردانه"}'
                            href="/search/category-men-sportswear/" class=" c-navi-new__medium-display-title"><span>پوشاک ورزشی مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک ورزشی زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی زنانه"}'
                            href="/search/category-women-sportwear/" class=" c-navi-new__big-display-title"><span>پوشاک ورزشی زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی زنانه"}'
                            href="/search/category-women-sportwear/" class=" c-navi-new__medium-display-title"><span>پوشاک ورزشی زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی مردانه"}'
                            href="/search/category-men-sport-shoes-/" class=" c-navi-new__big-display-title"><span>کفش ورزشی مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی مردانه"}'
                            href="/search/category-men-sport-shoes-/" class=" c-navi-new__medium-display-title"><span>کفش ورزشی مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی زنانه"}'
                            href="/search/category-women-sport-shoes-/" class=" c-navi-new__big-display-title"><span>کفش ورزشی زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی زنانه"}'
                            href="/search/category-women-sport-shoes-/" class=" c-navi-new__medium-display-title"><span>کفش ورزشی زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک ورزشی پسرانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی پسرانه"}'
                            href="/search/category-boys-sportswear/" class=" c-navi-new__big-display-title"><span>پوشاک ورزشی پسرانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی پسرانه"}'
                            href="/search/category-boys-sportswear/" class=" c-navi-new__medium-display-title"><span>پوشاک ورزشی پسرانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک ورزشی دخترانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی دخترانه"}'
                            href="/search/category-girls-sportswear/" class=" c-navi-new__big-display-title"><span>پوشاک ورزشی دخترانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی دخترانه"}'
                            href="/search/category-girls-sportswear/" class=" c-navi-new__medium-display-title"><span>پوشاک ورزشی دخترانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی پسرانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی پسرانه"}'
                            href="/search/category-boys-sport-shoes/" class=" c-navi-new__big-display-title"><span>کفش ورزشی پسرانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی پسرانه"}'
                            href="/search/category-boys-sport-shoes/" class=" c-navi-new__medium-display-title"><span>کفش ورزشی پسرانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی دخترانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی دخترانه"}'
                            href="/search/category-girls-sport-shoes/" class=" c-navi-new__big-display-title"><span>کفش ورزشی دخترانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی دخترانه"}'
                            href="/search/category-girls-sport-shoes/" class=" c-navi-new__medium-display-title"><span>کفش ورزشی دخترانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کوله پشتی مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کوله پشتی مردانه"}'
                            href="/search/category-men-backpacks/" class=" c-navi-new__big-display-title"><span>کوله پشتی مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کوله پشتی مردانه"}'
                            href="/search/category-men-backpacks/" class=" c-navi-new__medium-display-title"><span>کوله پشتی مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بچه گانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"بچه گانه"}'
                            href="/search/category-kids-apparel/"
                            class=" c-navi-new__big-display-title"><span>بچه گانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"بچه گانه"}'
                            href="/search/category-kids-apparel/" class=" c-navi-new__medium-display-title"><span>بچه گانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نوزاد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نوزاد"}'
                            href="/search/category-kids-clothes/" class=" c-navi-new__big-display-title">
                            نوزاد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نوزاد"}'
                                 href="/search/category-kids-clothes/" class=" c-navi-new__medium-display-title">
                            نوزاد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پسرانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پسرانه"}'
                            href="/search/category-boys-clothing/" class=" c-navi-new__big-display-title">
                            پسرانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پسرانه"}'
                                 href="/search/category-boys-clothing/" class=" c-navi-new__medium-display-title">
                            پسرانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دخترانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دخترانه"}'
                            href="/search/category-girls-clothing/" class=" c-navi-new__big-display-title">
                            دخترانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دخترانه"}'
                                 href="/search/category-girls-clothing/" class=" c-navi-new__medium-display-title">
                            دخترانه
                          </a></li>
                      </ul>
                    </div>
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options" id="categories-4">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/mother-and-child/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های اسباب بازی و کودک
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Kids Apparel - category_fa: بهداشت و حمام کودک و نوزاد - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"بهداشت و حمام کودک و نوزاد"}'
                             href="/search/category-health-and-bathroom-tools/"
                             class=" c-navi-new__big-display-title"><span>بهداشت و حمام کودک و نوزاد</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"بهداشت و حمام کودک و نوزاد"}'
                            href="/search/category-health-and-bathroom-tools/"
                            class=" c-navi-new__medium-display-title"><span>بهداشت و حمام کودک و نوزاد</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشک - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پوشک"}'
                            href="/search/category-diaper/" class=" c-navi-new__big-display-title">
                            پوشک
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پوشک"}'
                                 href="/search/category-diaper/" class=" c-navi-new__medium-display-title">
                            پوشک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دستمال مرطوب - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دستمال مرطوب"}'
                            href="/search/category-wet-wipes/" class=" c-navi-new__big-display-title">
                            دستمال مرطوب
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دستمال مرطوب"}'
                                 href="/search/category-wet-wipes/" class=" c-navi-new__medium-display-title">
                            دستمال مرطوب
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: حوله - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"حوله"}'
                            href="/search/category-baby-towel/" class=" c-navi-new__big-display-title">
                            حوله
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"حوله"}'
                                 href="/search/category-baby-towel/" class=" c-navi-new__medium-display-title">
                            حوله
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: وان حمام نوزاد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"وان حمام نوزاد"}'
                            href="/search/category-baby-bath-tub/" class=" c-navi-new__big-display-title">
                            وان حمام نوزاد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"وان حمام نوزاد"}'
                                 href="/search/category-baby-bath-tub/" class=" c-navi-new__medium-display-title">
                            وان حمام نوزاد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مینی واش - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مینی واش"}'
                            href="/search/category-diaper-cleaner/" class=" c-navi-new__big-display-title">
                            مینی واش
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مینی واش"}'
                                 href="/search/category-diaper-cleaner/" class=" c-navi-new__medium-display-title">
                            مینی واش
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شامپو کودک و نوزاد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شامپو کودک و نوزاد"}'
                            href="/search/category-baby-shampoo/" class=" c-navi-new__big-display-title">
                            شامپو کودک و نوزاد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شامپو کودک و نوزاد"}'
                                 href="/search/category-baby-shampoo/" class=" c-navi-new__medium-display-title">
                            شامپو کودک و نوزاد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک و کفش کودک و نوزاد - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک و کفش کودک و نوزاد"}'
                            href="/search/category-kids-apparel/" class=" c-navi-new__big-display-title"><span>پوشاک و کفش کودک و نوزاد</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک و کفش کودک و نوزاد"}'
                            href="/search/category-kids-apparel/" class=" c-navi-new__medium-display-title"><span>پوشاک و کفش کودک و نوزاد</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لباس کودک و لباس نوزادی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لباس کودک و لباس نوزادی"}'
                            href="/search/category-children-and-baby-clothes/" class=" c-navi-new__big-display-title">
                            لباس کودک و لباس نوزادی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لباس کودک و لباس نوزادی"}'
                                 href="/search/category-children-and-baby-clothes/"
                                 class=" c-navi-new__medium-display-title">
                            لباس کودک و لباس نوزادی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش  - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کفش "}'
                            href="/search/category-kidsshoes/" class=" c-navi-new__big-display-title">
                            کفش
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کفش "}'
                                 href="/search/category-kidsshoes/" class=" c-navi-new__medium-display-title">
                            کفش
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کفش ورزشی"}'
                            href="/search/category-kids-sport-shoes/" class=" c-navi-new__big-display-title">
                            کفش ورزشی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کفش ورزشی"}'
                                 href="/search/category-kids-sport-shoes/" class=" c-navi-new__medium-display-title">
                            کفش ورزشی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: جوراب و پاپوش کودک و نوزاد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"جوراب و پاپوش کودک و نوزاد"}'
                            href="/search/category-kids-socks-/" class=" c-navi-new__big-display-title">
                            جوراب و پاپوش کودک و نوزاد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"جوراب و پاپوش کودک و نوزاد"}'
                                 href="/search/category-kids-socks-/" class=" c-navi-new__medium-display-title">
                            جوراب و پاپوش کودک و نوزاد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کلاه و پیشبند نوزاد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کلاه و پیشبند نوزاد"}'
                            href="/search/category-hat-and-bib/" class=" c-navi-new__big-display-title">
                            کلاه و پیشبند نوزاد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کلاه و پیشبند نوزاد"}'
                                 href="/search/category-hat-and-bib/" class=" c-navi-new__medium-display-title">
                            کلاه و پیشبند نوزاد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تبلت - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تبلت"}'
                            href="/search/category-tablet/" class=" c-navi-new__big-display-title"><span>تبلت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تبلت"}'
                            href="/search/category-tablet/" class=" c-navi-new__medium-display-title"><span>تبلت</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: XBox, PS4 و بازی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"XBox, PS4 و بازی"}'
                            href="/search/category-game-console/" class=" c-navi-new__big-display-title"><span>XBox, PS4 و بازی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"XBox, PS4 و بازی"}'
                            href="/search/category-game-console/" class=" c-navi-new__medium-display-title"><span>XBox, PS4 و بازی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Dining Accessories - category_fa: اسباب بازی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اسباب بازی"}'
                            href="/search/category-toys/" class=" c-navi-new__big-display-title"><span>اسباب بازی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اسباب بازی"}'
                            href="/search/category-toys/"
                            class=" c-navi-new__medium-display-title"><span>اسباب بازی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فکری و آموزشی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"فکری و آموزشی"}'
                            href="/search/category-intellectual-and-educational/"
                            class=" c-navi-new__big-display-title">
                            فکری و آموزشی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"فکری و آموزشی"}'
                                 href="/search/category-intellectual-and-educational/"
                                 class=" c-navi-new__medium-display-title">
                            فکری و آموزشی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پازل، لگو و ساختنی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پازل، لگو و ساختنی"}'
                            href="/search/category-puzzles-and-building/" class=" c-navi-new__big-display-title">
                            پازل، لگو و ساختنی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پازل، لگو و ساختنی"}'
                                 href="/search/category-puzzles-and-building/"
                                 class=" c-navi-new__medium-display-title">
                            پازل، لگو و ساختنی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: عروسک و فیگور - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"عروسک و فیگور"}'
                            href="/search/category-toy-and-model/" class=" c-navi-new__big-display-title">
                            عروسک و فیگور
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"عروسک و فیگور"}'
                                 href="/search/category-toy-and-model/" class=" c-navi-new__medium-display-title">
                            عروسک و فیگور
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اسپینر، ابزار شوخی و سرگرمی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"اسپینر، ابزار شوخی و سرگرمی"}'
                            href="/search/category-humor-and-entertainment/" class=" c-navi-new__big-display-title">
                            اسپینر، ابزار شوخی و سرگرمی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"اسپینر، ابزار شوخی و سرگرمی"}'
                                 href="/search/category-humor-and-entertainment/"
                                 class=" c-navi-new__medium-display-title">
                            اسپینر، ابزار شوخی و سرگرمی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تفنگ، تیر و لوازم بازی جنگی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تفنگ، تیر و لوازم بازی جنگی"}'
                            href="/search/category-guns-and-combat/" class=" c-navi-new__big-display-title">
                            تفنگ، تیر و لوازم بازی جنگی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تفنگ، تیر و لوازم بازی جنگی"}'
                                 href="/search/category-guns-and-combat/" class=" c-navi-new__medium-display-title">
                            تفنگ، تیر و لوازم بازی جنگی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Educational Equipment  - category_fa: بازی و سرگرمی کودک - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"بازی و سرگرمی کودک"}'
                             href="/search/category-entertainment-and-games-equipment/"
                             class=" c-navi-new__big-display-title"><span>بازی و سرگرمی کودک</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"بازی و سرگرمی کودک"}'
                            href="/search/category-entertainment-and-games-equipment/"
                            class=" c-navi-new__medium-display-title"><span>بازی و سرگرمی کودک</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماشین بازی، موتور، سه چرخه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماشین بازی، موتور، سه چرخه"}'
                            href="/search/category-tricycle-and-motorcycle/" class=" c-navi-new__big-display-title">
                            ماشین بازی، موتور، سه چرخه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماشین بازی، موتور، سه چرخه"}'
                                 href="/search/category-tricycle-and-motorcycle/"
                                 class=" c-navi-new__medium-display-title">
                            ماشین بازی، موتور، سه چرخه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوچرخه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دوچرخه"}'
                            href="/search/category-bicycles/" class=" c-navi-new__big-display-title">
                            دوچرخه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دوچرخه"}'
                                 href="/search/category-bicycles/" class=" c-navi-new__medium-display-title">
                            دوچرخه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تشک بازی و پارک بازی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تشک بازی و پارک بازی"}'
                            href="/search/category-play-gym/" class=" c-navi-new__big-display-title">
                            تشک بازی و پارک بازی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تشک بازی و پارک بازی"}'
                                 href="/search/category-play-gym/" class=" c-navi-new__medium-display-title">
                            تشک بازی و پارک بازی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تاب و سرسره - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تاب و سرسره"}'
                            href="/search/category-swings-and-slides/" class=" c-navi-new__big-display-title">
                            تاب و سرسره
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تاب و سرسره"}'
                                 href="/search/category-swings-and-slides/" class=" c-navi-new__medium-display-title">
                            تاب و سرسره
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سلامت، ایمنی و مراقبت - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"سلامت، ایمنی و مراقبت"}'
                            href="/search/category-safety-and-care/" class=" c-navi-new__big-display-title"><span>سلامت، ایمنی و مراقبت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"سلامت، ایمنی و مراقبت"}'
                            href="/search/category-safety-and-care/" class=" c-navi-new__medium-display-title"><span>سلامت، ایمنی و مراقبت</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تصفیه هوا - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تصفیه هوا"}'
                            href="/search/category-air-purifier/" class=" c-navi-new__big-display-title">
                            تصفیه هوا
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تصفیه هوا"}'
                                 href="/search/category-air-purifier/" class=" c-navi-new__medium-display-title">
                            تصفیه هوا
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ترازو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ترازو"}'
                            href="/search/category-digital-scale/" class=" c-navi-new__big-display-title">
                            ترازو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ترازو"}'
                                 href="/search/category-digital-scale/" class=" c-navi-new__medium-display-title">
                            ترازو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوربین و پیجر اتاق کودک - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دوربین و پیجر اتاق کودک"}'
                            href="/search/category-baby-monitor-and-pager/" class=" c-navi-new__big-display-title">
                            دوربین و پیجر اتاق کودک
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دوربین و پیجر اتاق کودک"}'
                                 href="/search/category-baby-monitor-and-pager/"
                                 class=" c-navi-new__medium-display-title">
                            دوربین و پیجر اتاق کودک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تب سنج و دماسنج - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تب سنج و دماسنج"}'
                            href="/search/category-baby-thermometer/" class=" c-navi-new__big-display-title">
                            تب سنج و دماسنج
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تب سنج و دماسنج"}'
                                 href="/search/category-baby-thermometer/" class=" c-navi-new__medium-display-title">
                            تب سنج و دماسنج
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: محافظ و ابزار ایمنی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"محافظ و ابزار ایمنی"}'
                            href="/search/category-safety-tools-for-children-and-babies/"
                            class=" c-navi-new__big-display-title">
                            محافظ و ابزار ایمنی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"محافظ و ابزار ایمنی"}'
                                 href="/search/category-safety-tools-for-children-and-babies/"
                                 class=" c-navi-new__medium-display-title">
                            محافظ و ابزار ایمنی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Kid bedroom &  - category_fa: خواب کودک - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"خواب کودک"}'
                            href="/search/category-baby-bedding/"
                            class=" c-navi-new__big-display-title"><span>خواب کودک</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"خواب کودک"}'
                            href="/search/category-baby-bedding/" class=" c-navi-new__medium-display-title"><span>خواب کودک</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مبلمان اتاق کودک - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مبلمان اتاق کودک"}'
                            href="/search/category-childrens-bedroom-furniture/" class=" c-navi-new__big-display-title">
                            مبلمان اتاق کودک
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مبلمان اتاق کودک"}'
                                 href="/search/category-childrens-bedroom-furniture/"
                                 class=" c-navi-new__medium-display-title">
                            مبلمان اتاق کودک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چراغ خواب کودک - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چراغ خواب کودک"}'
                            href="/search/category-baby-decorative-lamp/" class=" c-navi-new__big-display-title">
                            چراغ خواب کودک
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چراغ خواب کودک"}'
                                 href="/search/category-baby-decorative-lamp/"
                                 class=" c-navi-new__medium-display-title">
                            چراغ خواب کودک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تشک کودک - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تشک کودک"}'
                            href="/search/category-baby-mat/" class=" c-navi-new__big-display-title">
                            تشک کودک
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تشک کودک"}'
                                 href="/search/category-baby-mat/" class=" c-navi-new__medium-display-title">
                            تشک کودک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سرویس خواب - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سرویس خواب"}'
                            href="/search/category-bed-set/" class=" c-navi-new__big-display-title">
                            سرویس خواب
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سرویس خواب"}'
                                 href="/search/category-bed-set/" class=" c-navi-new__medium-display-title">
                            سرویس خواب
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پتو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پتو"}'
                            href="/search/category-blanket/" class=" c-navi-new__big-display-title">
                            پتو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پتو"}'
                                 href="/search/category-blanket/" class=" c-navi-new__medium-display-title">
                            پتو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بالش شیردهی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"بالش شیردهی"}'
                            href="/search/category-feeding-pillow/" class=" c-navi-new__big-display-title">
                            بالش شیردهی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"بالش شیردهی"}'
                                 href="/search/category-feeding-pillow/" class=" c-navi-new__medium-display-title">
                            بالش شیردهی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Entertainment & Toys - category_fa: ملزومات گردش و سفر - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"ملزومات گردش و سفر"}'
                             href="/search/category-promenade-and-travel-accessories/"
                             class=" c-navi-new__big-display-title"><span>ملزومات گردش و سفر</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ملزومات گردش و سفر"}'
                            href="/search/category-promenade-and-travel-accessories/"
                            class=" c-navi-new__medium-display-title"><span>ملزومات گردش و سفر</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کالسکه و کریر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کالسکه و کریر"}'
                            href="/search/category-stroller-and-carrier/" class=" c-navi-new__big-display-title">
                            کالسکه و کریر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کالسکه و کریر"}'
                                 href="/search/category-stroller-and-carrier/"
                                 class=" c-navi-new__medium-display-title">
                            کالسکه و کریر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: صندلی خودرو کودک و نوزاد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"صندلی خودرو کودک و نوزاد"}'
                            href="/search/category-chair-species/" class=" c-navi-new__big-display-title">
                            صندلی خودرو کودک و نوزاد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"صندلی خودرو کودک و نوزاد"}'
                                 href="/search/category-chair-species/" class=" c-navi-new__medium-display-title">
                            صندلی خودرو کودک و نوزاد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ساک لوازم نوزاد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ساک لوازم نوزاد"}'
                            href="/search/category-diaper-bag/" class=" c-navi-new__big-display-title">
                            ساک لوازم نوزاد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ساک لوازم نوزاد"}'
                                 href="/search/category-diaper-bag/" class=" c-navi-new__medium-display-title">
                            ساک لوازم نوزاد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم جانبی گردش و سفر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوازم جانبی گردش و سفر"}'
                            href="/search/category-children-and-baby-promenade-and-travel-accessories/"
                            class=" c-navi-new__big-display-title">
                            لوازم جانبی گردش و سفر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوازم جانبی گردش و سفر"}'
                                 href="/search/category-children-and-baby-promenade-and-travel-accessories/"
                                 class=" c-navi-new__medium-display-title">
                            لوازم جانبی گردش و سفر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آغوشی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آغوشی"}'
                            href="/search/category-baby-carrier/" class=" c-navi-new__big-display-title">
                            آغوشی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آغوشی"}'
                                 href="/search/category-baby-carrier/" class=" c-navi-new__medium-display-title">
                            آغوشی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم شخصی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم شخصی"}'
                            href="/search/category-personal-accessories/" class=" c-navi-new__big-display-title"><span>لوازم شخصی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم شخصی"}'
                            href="/search/category-personal-accessories/"
                            class=" c-navi-new__medium-display-title"><span>لوازم شخصی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پستانک و ملزومات - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پستانک و ملزومات"}'
                            href="/search/category-pacifier-and-accessories/" class=" c-navi-new__big-display-title">
                            پستانک و ملزومات
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پستانک و ملزومات"}'
                                 href="/search/category-pacifier-and-accessories/"
                                 class=" c-navi-new__medium-display-title">
                            پستانک و ملزومات
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شیردوش - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شیردوش"}'
                            href="/search/category-milking/" class=" c-navi-new__big-display-title">
                            شیردوش
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شیردوش"}'
                                 href="/search/category-milking/" class=" c-navi-new__medium-display-title">
                            شیردوش
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شورت آموزشی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شورت آموزشی"}'
                            href="/search/category-training-short/" class=" c-navi-new__big-display-title">
                            شورت آموزشی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شورت آموزشی"}'
                                 href="/search/category-training-short/" class=" c-navi-new__medium-display-title">
                            شورت آموزشی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: غذاخوری - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"غذاخوری"}'
                            href="/search/category-dining-accessories/" class=" c-navi-new__big-display-title"><span>غذاخوری</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"غذاخوری"}'
                            href="/search/category-dining-accessories/" class=" c-navi-new__medium-display-title"><span>غذاخوری</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: صندلی غذاخوری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"صندلی غذاخوری"}'
                            href="/search/category-booster-seat/" class=" c-navi-new__big-display-title">
                            صندلی غذاخوری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"صندلی غذاخوری"}'
                                 href="/search/category-booster-seat/" class=" c-navi-new__medium-display-title">
                            صندلی غذاخوری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شیشه شیر، سرلاک، داروخوری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شیشه شیر، سرلاک، داروخوری"}'
                            href="/search/category-baby-bottle/" class=" c-navi-new__big-display-title">
                            شیشه شیر، سرلاک، داروخوری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شیشه شیر، سرلاک، داروخوری"}'
                                 href="/search/category-baby-bottle/" class=" c-navi-new__medium-display-title">
                            شیشه شیر، سرلاک، داروخوری
                          </a></li>
                      </ul>
                    </div>
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options" id="categories-5">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/food-beverage/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های کالاهای سوپرمارکتی
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کالای اساسی و خوار و بار - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کالای اساسی و خوار و بار"}'
                            href="/search/category-groceries/" class=" c-navi-new__big-display-title"><span>کالای اساسی و خوار و بار</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کالای اساسی و خوار و بار"}'
                            href="/search/category-groceries/" class=" c-navi-new__medium-display-title"><span>کالای اساسی و خوار و بار</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نان"}'
                            href="/search/category-bread/" class=" c-navi-new__big-display-title">
                            نان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نان"}'
                                 href="/search/category-bread/" class=" c-navi-new__medium-display-title">
                            نان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: برنج - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"برنج"}'
                            href="/search/category-rice/" class=" c-navi-new__big-display-title">
                            برنج
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"برنج"}'
                                 href="/search/category-rice/" class=" c-navi-new__medium-display-title">
                            برنج
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: روغن - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"روغن"}'
                            href="/search/category-oil/" class=" c-navi-new__big-display-title">
                            روغن
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"روغن"}'
                                 href="/search/category-oil/" class=" c-navi-new__medium-display-title">
                            روغن
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: قند - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"قند"}'
                            href="/search/category-sugar-cube/" class=" c-navi-new__big-display-title">
                            قند
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"قند"}'
                                 href="/search/category-sugar-cube/" class=" c-navi-new__medium-display-title">
                            قند
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شکر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شکر"}'
                            href="/search/category-sugar/" class=" c-navi-new__big-display-title">
                            شکر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شکر"}'
                                 href="/search/category-sugar/" class=" c-navi-new__medium-display-title">
                            شکر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سس"}'
                            href="/search/category-sauce-dressing/" class=" c-navi-new__big-display-title">
                            سس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سس"}'
                                 href="/search/category-sauce-dressing/" class=" c-navi-new__medium-display-title">
                            سس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: رب و کنسرو گوجه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"رب و کنسرو گوجه"}'
                            href="/search/category-tomato-paste/" class=" c-navi-new__big-display-title">
                            رب و کنسرو گوجه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"رب و کنسرو گوجه"}'
                                 href="/search/category-tomato-paste/" class=" c-navi-new__medium-display-title">
                            رب و کنسرو گوجه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: خیارشور و ترشیجات - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"خیارشور و ترشیجات"}'
                            href="/search/category-salted-marzipan/" class=" c-navi-new__big-display-title">
                            خیارشور و ترشیجات
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"خیارشور و ترشیجات"}'
                                 href="/search/category-salted-marzipan/" class=" c-navi-new__medium-display-title">
                            خیارشور و ترشیجات
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آبلیمو، آبغوره و سرکه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آبلیمو، آبغوره و سرکه"}'
                            href="/search/category-liquid-condiments/" class=" c-navi-new__big-display-title">
                            آبلیمو، آبغوره و سرکه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آبلیمو، آبغوره و سرکه"}'
                                 href="/search/category-liquid-condiments/" class=" c-navi-new__medium-display-title">
                            آبلیمو، آبغوره و سرکه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماکارونی، پاستا و رشته - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماکارونی، پاستا و رشته"}'
                            href="/search/category-spaghetti-pasta/" class=" c-navi-new__big-display-title">
                            ماکارونی، پاستا و رشته
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماکارونی، پاستا و رشته"}'
                                 href="/search/category-spaghetti-pasta/" class=" c-navi-new__medium-display-title">
                            ماکارونی، پاستا و رشته
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زعفران، زرشک و تزیینات غذا - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"زعفران، زرشک و تزیینات غذا"}'
                            href="/search/category-food-design/" class=" c-navi-new__big-display-title">
                            زعفران، زرشک و تزیینات غذا
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"زعفران، زرشک و تزیینات غذا"}'
                                 href="/search/category-food-design/" class=" c-navi-new__medium-display-title">
                            زعفران، زرشک و تزیینات غذا
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: حبوبات و سویا - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"حبوبات و سویا"}'
                            href="/search/category-beans/" class=" c-navi-new__big-display-title">
                            حبوبات و سویا
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"حبوبات و سویا"}'
                                 href="/search/category-beans/" class=" c-navi-new__medium-display-title">
                            حبوبات و سویا
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: صبحانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"صبحانه"}'
                            href="/search/category-breakfast/"
                            class=" c-navi-new__big-display-title"><span>صبحانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"صبحانه"}'
                            href="/search/category-breakfast/"
                            class=" c-navi-new__medium-display-title"><span>صبحانه</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مربا - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مربا"}'
                            href="/search/category-jams-butter/" class=" c-navi-new__big-display-title">
                            مربا
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مربا"}'
                                 href="/search/category-jams-butter/" class=" c-navi-new__medium-display-title">
                            مربا
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: عسل - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"عسل"}'
                            href="/search/category-honey/" class=" c-navi-new__big-display-title">
                            عسل
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"عسل"}'
                                 href="/search/category-honey/" class=" c-navi-new__medium-display-title">
                            عسل
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: حلواشکری، ارده و کنجد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"حلواشکری، ارده و کنجد"}'
                            href="/search/category-halva-ardeh-sesame/" class=" c-navi-new__big-display-title">
                            حلواشکری، ارده و کنجد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"حلواشکری، ارده و کنجد"}'
                                 href="/search/category-halva-ardeh-sesame/" class=" c-navi-new__medium-display-title">
                            حلواشکری، ارده و کنجد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مواد پروتئینی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مواد پروتئینی"}'
                            href="/search/category-protein-foods/" class=" c-navi-new__big-display-title"><span>مواد پروتئینی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مواد پروتئینی"}'
                            href="/search/category-protein-foods/" class=" c-navi-new__medium-display-title"><span>مواد پروتئینی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سوسیس و کالباس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سوسیس و کالباس"}'
                            href="/search/category-sausages/" class=" c-navi-new__big-display-title">
                            سوسیس و کالباس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سوسیس و کالباس"}'
                                 href="/search/category-sausages/" class=" c-navi-new__medium-display-title">
                            سوسیس و کالباس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گوشت گوسفندی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گوشت گوسفندی"}'
                            href="/search/category-sheep-meat/" class=" c-navi-new__big-display-title">
                            گوشت گوسفندی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گوشت گوسفندی"}'
                                 href="/search/category-sheep-meat/" class=" c-navi-new__medium-display-title">
                            گوشت گوسفندی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گوشت مرغ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گوشت مرغ"}'
                            href="/search/category-chicken/" class=" c-navi-new__big-display-title">
                            گوشت مرغ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گوشت مرغ"}'
                                 href="/search/category-chicken/" class=" c-navi-new__medium-display-title">
                            گوشت مرغ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تخم مرغ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تخم مرغ"}'
                            href="/search/category-eggs/" class=" c-navi-new__big-display-title">
                            تخم مرغ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تخم مرغ"}'
                                 href="/search/category-eggs/" class=" c-navi-new__medium-display-title">
                            تخم مرغ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گوشت گاو و گوساله - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گوشت گاو و گوساله"}'
                            href="/search/category-beaf/" class=" c-navi-new__big-display-title">
                            گوشت گاو و گوساله
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گوشت گاو و گوساله"}'
                                 href="/search/category-beaf/" class=" c-navi-new__medium-display-title">
                            گوشت گاو و گوساله
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: میگو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"میگو"}'
                            href="/search/category-shrimp/" class=" c-navi-new__big-display-title">
                            میگو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"میگو"}'
                                 href="/search/category-shrimp/" class=" c-navi-new__medium-display-title">
                            میگو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماهی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماهی"}'
                            href="/search/category-fish/" class=" c-navi-new__big-display-title">
                            ماهی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماهی"}'
                                 href="/search/category-fish/" class=" c-navi-new__medium-display-title">
                            ماهی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تن ماهی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تن ماهی"}'
                            href="/search/category-tuna-fish/" class=" c-navi-new__big-display-title">
                            تن ماهی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تن ماهی"}'
                                 href="/search/category-tuna-fish/" class=" c-navi-new__medium-display-title">
                            تن ماهی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لبنیات - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لبنیات"}'
                            href="/search/category-dairy/"
                            class=" c-navi-new__big-display-title"><span>لبنیات</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لبنیات"}'
                            href="/search/category-dairy/" class=" c-navi-new__medium-display-title"><span>لبنیات</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شیر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شیر"}'
                            href="/search/category-milk/" class=" c-navi-new__big-display-title">
                            شیر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شیر"}'
                                 href="/search/category-milk/" class=" c-navi-new__medium-display-title">
                            شیر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماست - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماست"}'
                            href="/search/category-yogurt/" class=" c-navi-new__big-display-title">
                            ماست
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماست"}'
                                 href="/search/category-yogurt/" class=" c-navi-new__medium-display-title">
                            ماست
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پنیر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پنیر"}'
                            href="/search/category-cheese/" class=" c-navi-new__big-display-title">
                            پنیر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پنیر"}'
                                 href="/search/category-cheese/" class=" c-navi-new__medium-display-title">
                            پنیر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: خامه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"خامه"}'
                            href="/search/category-cream/" class=" c-navi-new__big-display-title">
                            خامه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"خامه"}'
                                 href="/search/category-cream/" class=" c-navi-new__medium-display-title">
                            خامه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نوشیدنی ها - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"نوشیدنی ها"}'
                            href="/search/category-beverages/"
                            class=" c-navi-new__big-display-title"><span>نوشیدنی ها</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"نوشیدنی ها"}'
                            href="/search/category-beverages/" class=" c-navi-new__medium-display-title"><span>نوشیدنی ها</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چای - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چای"}'
                            href="/search/category-tea/" class=" c-navi-new__big-display-title">
                            چای
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چای"}'
                                 href="/search/category-tea/" class=" c-navi-new__medium-display-title">
                            چای
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دمنوش - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دمنوش"}'
                            href="/search/category-herbal-tea/" class=" c-navi-new__big-display-title">
                            دمنوش
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دمنوش"}'
                                 href="/search/category-herbal-tea/" class=" c-navi-new__medium-display-title">
                            دمنوش
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: قهوه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"قهوه"}'
                            href="/search/category-coffee" class=" c-navi-new__big-display-title">
                            قهوه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"قهوه"}'
                                 href="/search/category-coffee" class=" c-navi-new__medium-display-title">
                            قهوه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آب و آب معدنی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آب و آب معدنی"}'
                            href="/search/category-mineral-water/" class=" c-navi-new__big-display-title">
                            آب و آب معدنی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آب و آب معدنی"}'
                                 href="/search/category-mineral-water/" class=" c-navi-new__medium-display-title">
                            آب و آب معدنی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماءالشعیر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماءالشعیر"}'
                            href="/search/category-non-alcoholic/" class=" c-navi-new__big-display-title">
                            ماءالشعیر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماءالشعیر"}'
                                 href="/search/category-non-alcoholic/" class=" c-navi-new__medium-display-title">
                            ماءالشعیر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نوشابه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نوشابه"}'
                            href="/search/category-soft-drink/" class=" c-navi-new__big-display-title">
                            نوشابه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نوشابه"}'
                                 href="/search/category-soft-drink/" class=" c-navi-new__medium-display-title">
                            نوشابه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شربت و آبمیوه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شربت و آبمیوه"}'
                            href="/search/category-fruit-juice/" class=" c-navi-new__big-display-title">
                            شربت و آبمیوه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شربت و آبمیوه"}'
                                 href="/search/category-fruit-juice/" class=" c-navi-new__medium-display-title">
                            شربت و آبمیوه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: میوه و سبزی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"میوه و سبزی"}'
                            href="/search/category-fruits-and-vegetables/" class=" c-navi-new__big-display-title"><span>میوه و سبزی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"میوه و سبزی"}'
                            href="/search/category-fruits-and-vegetables/"
                            class=" c-navi-new__medium-display-title"><span>میوه و سبزی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: غذای آماده و نودل - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"غذای آماده و نودل"}'
                            href="/search/category-ready-made-canned-food/"
                            class=" c-navi-new__big-display-title"><span>غذای آماده و نودل</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"غذای آماده و نودل"}'
                            href="/search/category-ready-made-canned-food/"
                            class=" c-navi-new__medium-display-title"><span>غذای آماده و نودل</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فرآورده‌های منجمد - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"فرآورده‌های منجمد"}'
                            href="/search/category-frozen-food/" class=" c-navi-new__big-display-title"><span>فرآورده‌های منجمد</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"فرآورده‌های منجمد"}'
                            href="/search/category-frozen-food/" class=" c-navi-new__medium-display-title"><span>فرآورده‌های منجمد</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کنسرو و کمپوت - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کنسرو و کمپوت"}'
                            href="/search/category-canned-food/" class=" c-navi-new__big-display-title"><span>کنسرو و کمپوت</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کنسرو و کمپوت"}'
                            href="/search/category-canned-food/" class=" c-navi-new__medium-display-title"><span>کنسرو و کمپوت</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تنقلات - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تنقلات"}'
                            href="/search/category-snacks/"
                            class=" c-navi-new__big-display-title"><span>تنقلات</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تنقلات"}'
                            href="/search/category-snacks/"
                            class=" c-navi-new__medium-display-title"><span>تنقلات</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شکلات، تافی و آبنبات - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شکلات، تافی و آبنبات"}'
                            href="/search/category-chocolate/" class=" c-navi-new__big-display-title">
                            شکلات، تافی و آبنبات
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شکلات، تافی و آبنبات"}'
                                 href="/search/category-chocolate/" class=" c-navi-new__medium-display-title">
                            شکلات، تافی و آبنبات
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بیسکویت و ویفر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"بیسکویت و ویفر"}'
                            href="/search/category-biscuits-wafers/" class=" c-navi-new__big-display-title">
                            بیسکویت و ویفر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"بیسکویت و ویفر"}'
                                 href="/search/category-biscuits-wafers/" class=" c-navi-new__medium-display-title">
                            بیسکویت و ویفر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مغز طعم‌دار خشکبار - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مغز طعم‌دار خشکبار"}'
                            href="/search/category-nuts-trail-mix/" class=" c-navi-new__big-display-title">
                            مغز طعم‌دار خشکبار
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مغز طعم‌دار خشکبار"}'
                                 href="/search/category-nuts-trail-mix/" class=" c-navi-new__medium-display-title">
                            مغز طعم‌دار خشکبار
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیک و کلوچه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیک و کلوچه"}'
                            href="/search/category-cookies/" class=" c-navi-new__big-display-title">
                            کیک و کلوچه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیک و کلوچه"}'
                                 href="/search/category-cookies/" class=" c-navi-new__medium-display-title">
                            کیک و کلوچه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چیپس و پاپ کورن - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چیپس و پاپ کورن"}'
                            href="/search/category-chips/" class=" c-navi-new__big-display-title">
                            چیپس و پاپ کورن
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چیپس و پاپ کورن"}'
                                 href="/search/category-chips/" class=" c-navi-new__medium-display-title">
                            چیپس و پاپ کورن
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پفک و اسنک - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پفک و اسنک"}'
                            href="/search/category-cheese-puffs/" class=" c-navi-new__big-display-title">
                            پفک و اسنک
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پفک و اسنک"}'
                                 href="/search/category-cheese-puffs/" class=" c-navi-new__medium-display-title">
                            پفک و اسنک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آدامس و خوشبوکننده - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آدامس و خوشبوکننده"}'
                            href="/search/category-chewing-gum-breath-fresheners/"
                            class=" c-navi-new__big-display-title">
                            آدامس و خوشبوکننده
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آدامس و خوشبوکننده"}'
                                 href="/search/category-chewing-gum-breath-fresheners/"
                                 class=" c-navi-new__medium-display-title">
                            آدامس و خوشبوکننده
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: خشکبار و شیرینی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"خشکبار و شیرینی"}'
                            href="/search/category-dried-fruit-nuts/" class=" c-navi-new__big-display-title"><span>خشکبار و شیرینی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"خشکبار و شیرینی"}'
                            href="/search/category-dried-fruit-nuts/" class=" c-navi-new__medium-display-title"><span>خشکبار و شیرینی</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options" id="categories-6">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/personal-appliance/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های آرایشی و بهداشتی
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Accessories  - category_fa: لوازم آرایشی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم آرایشی"}'
                            href="/search/category-beauty/"
                            class=" c-navi-new__big-display-title"><span>لوازم آرایشی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم آرایشی"}'
                            href="/search/category-beauty/"
                            class=" c-navi-new__medium-display-title"><span>لوازم آرایشی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آرایش چشم و ابرو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آرایش چشم و ابرو"}'
                            href="/search/category-eye-and-eyebrow/" class=" c-navi-new__big-display-title">
                            آرایش چشم و ابرو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آرایش چشم و ابرو"}'
                                 href="/search/category-eye-and-eyebrow/" class=" c-navi-new__medium-display-title">
                            آرایش چشم و ابرو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آرایش لب - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آرایش لب"}'
                            href="/search/category-lip/" class=" c-navi-new__big-display-title">
                            آرایش لب
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آرایش لب"}'
                                 href="/search/category-lip/" class=" c-navi-new__medium-display-title">
                            آرایش لب
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آرایش صورت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آرایش صورت"}'
                            href="/search/category-face/" class=" c-navi-new__big-display-title">
                            آرایش صورت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آرایش صورت"}'
                                 href="/search/category-face/" class=" c-navi-new__medium-display-title">
                            آرایش صورت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مواد آرایش مو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مواد آرایش مو"}'
                            href="/search/category-hair-products/" class=" c-navi-new__big-display-title">
                            مواد آرایش مو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مواد آرایش مو"}'
                                 href="/search/category-hair-products/" class=" c-navi-new__medium-display-title">
                            مواد آرایش مو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سنگ پا، بهداشت و زیبایی ناخن - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سنگ پا، بهداشت و زیبایی ناخن"}'
                            href="/search/category-nail-care/" class=" c-navi-new__big-display-title">
                            سنگ پا، بهداشت و زیبایی ناخن
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سنگ پا، بهداشت و زیبایی ناخن"}'
                                 href="/search/category-nail-care/" class=" c-navi-new__medium-display-title">
                            سنگ پا، بهداشت و زیبایی ناخن
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تجهیزات جانبی آرایشی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تجهیزات جانبی آرایشی"}'
                            href="/search/category-beauty-accesories/" class=" c-navi-new__big-display-title">
                            تجهیزات جانبی آرایشی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تجهیزات جانبی آرایشی"}'
                                 href="/search/category-beauty-accesories/" class=" c-navi-new__medium-display-title">
                            تجهیزات جانبی آرایشی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Watches - category_fa: لوازم بهداشتی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم بهداشتی"}'
                            href="/search/category-personal-care/" class=" c-navi-new__big-display-title"><span>لوازم بهداشتی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم بهداشتی"}'
                            href="/search/category-personal-care/" class=" c-navi-new__medium-display-title"><span>لوازم بهداشتی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کرم و مراقبت پوست - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کرم و مراقبت پوست"}'
                            href="/search/category-face-and-body-cream/" class=" c-navi-new__big-display-title">
                            کرم و مراقبت پوست
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کرم و مراقبت پوست"}'
                                 href="/search/category-face-and-body-cream/" class=" c-navi-new__medium-display-title">
                            کرم و مراقبت پوست
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شامپو و مراقبت مو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شامپو و مراقبت مو"}'
                            href="/search/category-hair-care/" class=" c-navi-new__big-display-title">
                            شامپو و مراقبت مو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شامپو و مراقبت مو"}'
                                 href="/search/category-hair-care/" class=" c-navi-new__medium-display-title">
                            شامپو و مراقبت مو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بهداشت دهان و دندان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"بهداشت دهان و دندان"}'
                            href="/search/category-dental-hygienist/" class=" c-navi-new__big-display-title">
                            بهداشت دهان و دندان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"بهداشت دهان و دندان"}'
                                 href="/search/category-dental-hygienist/" class=" c-navi-new__medium-display-title">
                            بهداشت دهان و دندان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بهداشت و مراقبت بدن - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"بهداشت و مراقبت بدن"}'
                            href="/search/category-body-care/" class=" c-navi-new__big-display-title">
                            بهداشت و مراقبت بدن
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"بهداشت و مراقبت بدن"}'
                                 href="/search/category-body-care/" class=" c-navi-new__medium-display-title">
                            بهداشت و مراقبت بدن
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ضد تعریق - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ضد تعریق"}'
                            href="/search/category-anti-sweat/" class=" c-navi-new__big-display-title">
                            ضد تعریق
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ضد تعریق"}'
                                 href="/search/category-anti-sweat/" class=" c-navi-new__medium-display-title">
                            ضد تعریق
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم شخصی برقی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم شخصی برقی"}'
                            href="/search/category-electrical-personal-care/"
                            class=" c-navi-new__big-display-title"><span>لوازم شخصی برقی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم شخصی برقی"}'
                            href="/search/category-electrical-personal-care/" class=" c-navi-new__medium-display-title"><span>لوازم شخصی برقی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماشین اصلاح صورت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماشین اصلاح صورت"}'
                            href="/search/category-shaver/" class=" c-navi-new__big-display-title">
                            ماشین اصلاح صورت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماشین اصلاح صورت"}'
                                 href="/search/category-shaver/" class=" c-navi-new__medium-display-title">
                            ماشین اصلاح صورت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماشین اصلاح سر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماشین اصلاح سر"}'
                            href="/search/category-hair-trimmer/" class=" c-navi-new__big-display-title">
                            ماشین اصلاح سر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماشین اصلاح سر"}'
                                 href="/search/category-hair-trimmer/" class=" c-navi-new__medium-display-title">
                            ماشین اصلاح سر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سشوار - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سشوار"}'
                            href="/search/category-hair-drier/" class=" c-navi-new__big-display-title">
                            سشوار
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سشوار"}'
                                 href="/search/category-hair-drier/" class=" c-navi-new__medium-display-title">
                            سشوار
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اصلاح بدن آقایان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"اصلاح بدن آقایان"}'
                            href="/search/category-body-groom/" class=" c-navi-new__big-display-title">
                            اصلاح بدن آقایان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"اصلاح بدن آقایان"}'
                                 href="/search/category-body-groom/" class=" c-navi-new__medium-display-title">
                            اصلاح بدن آقایان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اصلاح بدن بانوان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"اصلاح بدن بانوان"}'
                            href="/search/category-epilator/" class=" c-navi-new__big-display-title">
                            اصلاح بدن بانوان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"اصلاح بدن بانوان"}'
                                 href="/search/category-epilator/" class=" c-navi-new__medium-display-title">
                            اصلاح بدن بانوان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اصلاح موی گوش، بینی و ابرو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"اصلاح موی گوش، بینی و ابرو"}'
                            href="/search/category-nose-clipping/" class=" c-navi-new__big-display-title">
                            اصلاح موی گوش، بینی و ابرو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"اصلاح موی گوش، بینی و ابرو"}'
                                 href="/search/category-nose-clipping/" class=" c-navi-new__medium-display-title">
                            اصلاح موی گوش، بینی و ابرو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: برس پاک سازی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"برس پاک سازی"}'
                            href="/search/category-skin-care-accessories/" class=" c-navi-new__big-display-title">
                            برس پاک سازی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"برس پاک سازی"}'
                                 href="/search/category-skin-care-accessories/"
                                 class=" c-navi-new__medium-display-title">
                            برس پاک سازی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اتو مو و حالت دهنده - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"اتو مو و حالت دهنده"}'
                            href="/search/category-hair-iron/" class=" c-navi-new__big-display-title">
                            اتو مو و حالت دهنده
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"اتو مو و حالت دهنده"}'
                                 href="/search/category-hair-iron/" class=" c-navi-new__medium-display-title">
                            اتو مو و حالت دهنده
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بیگودی و فر کننده - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"بیگودی و فر کننده"}'
                            href="/search/category-hair-shaping/" class=" c-navi-new__big-display-title">
                            بیگودی و فر کننده
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"بیگودی و فر کننده"}'
                                 href="/search/category-hair-shaping/" class=" c-navi-new__medium-display-title">
                            بیگودی و فر کننده
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Tooth ‌Brush - category_fa: مسواک برقی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مسواک برقی"}'
                            href="/search/category-electric-brusher/" class=" c-navi-new__big-display-title">
                            مسواک برقی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مسواک برقی"}'
                                 href="/search/category-electric-brusher/" class=" c-navi-new__medium-display-title">
                            مسواک برقی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لیزر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لیزر"}'
                            href="/search/category-electrical-personal-care/?q=لیزر&entry=mm"
                            class=" c-navi-new__big-display-title">
                            لیزر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لیزر"}'
                                 href="/search/category-electrical-personal-care/?q=لیزر&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            لیزر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ست هدیه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ست هدیه"}'
                            href="/search/category-gift-set/"
                            class=" c-navi-new__big-display-title"><span>ست هدیه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ست هدیه"}'
                            href="/search/category-gift-set/"
                            class=" c-navi-new__medium-display-title"><span>ست هدیه</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: عطر، ادکلن، اسپری و ست - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"عطر، ادکلن، اسپری و ست"}'
                            href="/search/category-perfume-all/" class=" c-navi-new__big-display-title"><span>عطر، ادکلن، اسپری و ست</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"عطر، ادکلن، اسپری و ست"}'
                            href="/search/category-perfume-all/" class=" c-navi-new__medium-display-title"><span>عطر، ادکلن، اسپری و ست</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مردانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مردانه"}'
                            href="/search/category-perfume/?q=%d9%85%d8%b1%d8%af%d8%a7%d9%86%d9%87&entry=mm"
                            class=" c-navi-new__big-display-title">
                            مردانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مردانه"}'
                                 href="/search/category-perfume/?q=%d9%85%d8%b1%d8%af%d8%a7%d9%86%d9%87&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            مردانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زنانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"زنانه"}'
                            href="/search/category-perfume/?q=%d8%b2%d9%86%d8%a7%d9%86%d9%87&entry=mm"
                            class=" c-navi-new__big-display-title">
                            زنانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"زنانه"}'
                                 href="/search/category-perfume/?q=%d8%b2%d9%86%d8%a7%d9%86%d9%87&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            زنانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: جیبی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"جیبی"}'
                            href="/search/category-pocket-perfumes/" class=" c-navi-new__big-display-title">
                            جیبی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"جیبی"}'
                                 href="/search/category-pocket-perfumes/" class=" c-navi-new__medium-display-title">
                            جیبی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اسپری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"اسپری"}'
                            href="/search/category-spray/" class=" c-navi-new__big-display-title">
                            اسپری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"اسپری"}'
                                 href="/search/category-spray/" class=" c-navi-new__medium-display-title">
                            اسپری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: طلا، نقره و زیورآلات زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"طلا، نقره و زیورآلات زنانه"}'
                            href="/search/category-women-accessories/?q=%d8%b2%db%8c%d9%88%d8%b1%d8%a2%d9%84%d8%a7%d8%aa&entry=mm"
                            class=" c-navi-new__big-display-title"><span>طلا، نقره و زیورآلات زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"طلا، نقره و زیورآلات زنانه"}'
                            href="/search/category-women-accessories/?q=%d8%b2%db%8c%d9%88%d8%b1%d8%a2%d9%84%d8%a7%d8%aa&entry=mm"
                            class=" c-navi-new__medium-display-title"><span>طلا، نقره و زیورآلات زنانه</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زیورآلات نقره زنانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"زیورآلات نقره زنانه"}'
                            href="/search/category-women-silver-jewelry/" class=" c-navi-new__big-display-title">
                            زیورآلات نقره زنانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"زیورآلات نقره زنانه"}'
                                 href="/search/category-women-silver-jewelry/"
                                 class=" c-navi-new__medium-display-title">
                            زیورآلات نقره زنانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زیورآلات طلا زنانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"زیورآلات طلا زنانه"}'
                            href="/search/category-women-gold-jewelry/" class=" c-navi-new__big-display-title">
                            زیورآلات طلا زنانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"زیورآلات طلا زنانه"}'
                                 href="/search/category-women-gold-jewelry/" class=" c-navi-new__medium-display-title">
                            زیورآلات طلا زنانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: حلقه و انگشتر طلای زنانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"حلقه و انگشتر طلای زنانه"}'
                            href="/search/category-women-gold-ring/" class=" c-navi-new__big-display-title">
                            حلقه و انگشتر طلای زنانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"حلقه و انگشتر طلای زنانه"}'
                                 href="/search/category-women-gold-ring/" class=" c-navi-new__medium-display-title">
                            حلقه و انگشتر طلای زنانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دستبند طلا زنانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دستبند طلا زنانه"}'
                            href="/search/category-women-gold-bracelet/" class=" c-navi-new__big-display-title">
                            دستبند طلا زنانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دستبند طلا زنانه"}'
                                 href="/search/category-women-gold-bracelet/" class=" c-navi-new__medium-display-title">
                            دستبند طلا زنانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گردنبند طلا زنانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گردنبند طلا زنانه"}'
                            href="/search/category-women-gold-necklace/" class=" c-navi-new__big-display-title">
                            گردنبند طلا زنانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گردنبند طلا زنانه"}'
                                 href="/search/category-women-gold-necklace/" class=" c-navi-new__medium-display-title">
                            گردنبند طلا زنانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گوشواره طلا زنانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گوشواره طلا زنانه"}'
                            href="/search/category-women-gold-earrings/" class=" c-navi-new__big-display-title">
                            گوشواره طلا زنانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گوشواره طلا زنانه"}'
                                 href="/search/category-women-gold-earrings/" class=" c-navi-new__medium-display-title">
                            گوشواره طلا زنانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زیورآلات نقره مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زیورآلات نقره مردانه"}'
                            href="/search/category-men-silver-jewelry/" class=" c-navi-new__big-display-title"><span>زیورآلات نقره مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"زیورآلات نقره مردانه"}'
                            href="/search/category-men-silver-jewelry/" class=" c-navi-new__medium-display-title"><span>زیورآلات نقره مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ابزار سلامت و طبی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ابزار سلامت و طبی"}'
                            href="/search/category-health-care/" class=" c-navi-new__big-display-title"><span>ابزار سلامت و طبی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ابزار سلامت و طبی"}'
                            href="/search/category-health-care/" class=" c-navi-new__medium-display-title"><span>ابزار سلامت و طبی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مچ بند و ساعت هوشمند - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مچ بند و ساعت هوشمند"}'
                            href="/search/category-wearable-gadget/" class=" c-navi-new__big-display-title">
                            مچ بند و ساعت هوشمند
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مچ بند و ساعت هوشمند"}'
                                 href="/search/category-wearable-gadget/" class=" c-navi-new__medium-display-title">
                            مچ بند و ساعت هوشمند
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ترازو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ترازو"}'
                            href="/search/category-digital-scale/" class=" c-navi-new__big-display-title">
                            ترازو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ترازو"}'
                                 href="/search/category-digital-scale/" class=" c-navi-new__medium-display-title">
                            ترازو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کالای خواب و استراحت طبی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کالای خواب و استراحت طبی"}'
                            href="/search/category-%20sleep-and-rest-medical/" class=" c-navi-new__big-display-title">
                            کالای خواب و استراحت طبی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کالای خواب و استراحت طبی"}'
                                 href="/search/category-%20sleep-and-rest-medical/"
                                 class=" c-navi-new__medium-display-title">
                            کالای خواب و استراحت طبی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تست قند خون - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تست قند خون"}'
                            href="/search/category-blood-sugar-meter/" class=" c-navi-new__big-display-title">
                            تست قند خون
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تست قند خون"}'
                                 href="/search/category-blood-sugar-meter/" class=" c-navi-new__medium-display-title">
                            تست قند خون
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تب سنج - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تب سنج"}'
                            href="/search/category-thermometers/" class=" c-navi-new__big-display-title">
                            تب سنج
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تب سنج"}'
                                 href="/search/category-thermometers/" class=" c-navi-new__medium-display-title">
                            تب سنج
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فشارسنج - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"فشارسنج"}'
                            href="/search/category-digital-sphygmomanometer/" class=" c-navi-new__big-display-title">
                            فشارسنج
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"فشارسنج"}'
                                 href="/search/category-digital-sphygmomanometer/"
                                 class=" c-navi-new__medium-display-title">
                            فشارسنج
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ابزار مراقبت پا - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ابزار مراقبت پا"}'
                            href="/search/category-heel-pads/" class=" c-navi-new__big-display-title">
                            ابزار مراقبت پا
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ابزار مراقبت پا"}'
                                 href="/search/category-heel-pads/" class=" c-navi-new__medium-display-title">
                            ابزار مراقبت پا
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نمایشگر ضربان قلب - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نمایشگر ضربان قلب"}'
                            href="/search/category-heart-monitor-/" class=" c-navi-new__big-display-title">
                            نمایشگر ضربان قلب
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نمایشگر ضربان قلب"}'
                                 href="/search/category-heart-monitor-/" class=" c-navi-new__medium-display-title">
                            نمایشگر ضربان قلب
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماساژور - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماساژور"}'
                            href="/search/category-massager/" class=" c-navi-new__big-display-title">
                            ماساژور
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماساژور"}'
                                 href="/search/category-massager/" class=" c-navi-new__medium-display-title">
                            ماساژور
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تشک و پتوی برقی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تشک و پتوی برقی"}'
                            href="/search/category-electric-underblankets-and-blanket/"
                            class=" c-navi-new__big-display-title">
                            تشک و پتوی برقی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تشک و پتوی برقی"}'
                                 href="/search/category-electric-underblankets-and-blanket/"
                                 class=" c-navi-new__medium-display-title">
                            تشک و پتوی برقی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ویلچر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ویلچر"}'
                            href="/search/category-wheelchair/" class=" c-navi-new__big-display-title">
                            ویلچر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ویلچر"}'
                                 href="/search/category-wheelchair/" class=" c-navi-new__medium-display-title">
                            ویلچر
                          </a></li>
                      </ul>
                    </div>
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options" id="categories-7">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/home-and-kitchen/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های خانه، آشپزخانه و ابزار
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Home Audio & Video - category_fa: صوتی و تصویری - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"صوتی و تصویری"}'
                             href="/search/category-video-audio-entertainment/"
                             class=" c-navi-new__big-display-title"><span>صوتی و تصویری</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"صوتی و تصویری"}'
                            href="/search/category-video-audio-entertainment/"
                            class=" c-navi-new__medium-display-title"><span>صوتی و تصویری</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تلویزیون - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تلویزیون"}'
                            href="/search/category-tv2/" class=" c-navi-new__big-display-title">
                            تلویزیون
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تلویزیون"}'
                                 href="/search/category-tv2/" class=" c-navi-new__medium-display-title">
                            تلویزیون
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سینمای خانگی و ساندبار - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سینمای خانگی و ساندبار"}'
                            href="/search/category-home-theatre/" class=" c-navi-new__big-display-title">
                            سینمای خانگی و ساندبار
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سینمای خانگی و ساندبار"}'
                                 href="/search/category-home-theatre/" class=" c-navi-new__medium-display-title">
                            سینمای خانگی و ساندبار
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گیرنده دیجیتال تلویزیون - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گیرنده دیجیتال تلویزیون"}'
                            href="/search/category-set-top-box/" class=" c-navi-new__big-display-title">
                            گیرنده دیجیتال تلویزیون
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گیرنده دیجیتال تلویزیون"}'
                                 href="/search/category-set-top-box/" class=" c-navi-new__medium-display-title">
                            گیرنده دیجیتال تلویزیون
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دکوراتیو - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دکوراتیو"}'
                            href="/search/category-decorative/"
                            class=" c-navi-new__big-display-title"><span>دکوراتیو</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دکوراتیو"}'
                            href="/search/category-decorative/"
                            class=" c-navi-new__medium-display-title"><span>دکوراتیو</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مبلمان خانگی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مبلمان خانگی"}'
                            href="/search/category-household-furniture/" class=" c-navi-new__big-display-title">
                            مبلمان خانگی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مبلمان خانگی"}'
                                 href="/search/category-household-furniture/" class=" c-navi-new__medium-display-title">
                            مبلمان خانگی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دکوراسیون اداری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دکوراسیون اداری"}'
                            href="/search/category-office-furniture/" class=" c-navi-new__big-display-title">
                            دکوراسیون اداری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دکوراسیون اداری"}'
                                 href="/search/category-office-furniture/" class=" c-navi-new__medium-display-title">
                            دکوراسیون اداری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آینه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آینه"}'
                            href="/search/category-decorative-mirror/" class=" c-navi-new__big-display-title">
                            آینه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آینه"}'
                                 href="/search/category-decorative-mirror/" class=" c-navi-new__medium-display-title">
                            آینه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پرده - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پرده"}'
                            href="/search/category-curtain/" class=" c-navi-new__big-display-title">
                            پرده
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پرده"}'
                                 href="/search/category-curtain/" class=" c-navi-new__medium-display-title">
                            پرده
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تابلو - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تابلو"}'
                            href="/search/category-decorative-board/" class=" c-navi-new__big-display-title">
                            تابلو
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تابلو"}'
                                 href="/search/category-decorative-board/" class=" c-navi-new__medium-display-title">
                            تابلو
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ساعت دیواری و رومیزی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ساعت دیواری و رومیزی"}'
                            href="/search/category-clocks/" class=" c-navi-new__big-display-title">
                            ساعت دیواری و رومیزی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ساعت دیواری و رومیزی"}'
                                 href="/search/category-clocks/" class=" c-navi-new__medium-display-title">
                            ساعت دیواری و رومیزی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شمع، گل و گلدان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شمع، گل و گلدان"}'
                            href="/search/category-decorative-ac/" class=" c-navi-new__big-display-title">
                            شمع، گل و گلدان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شمع، گل و گلدان"}'
                                 href="/search/category-decorative-ac/" class=" c-navi-new__medium-display-title">
                            شمع، گل و گلدان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فرش ماشینی، دستبافت، تابلو - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"فرش ماشینی، دستبافت، تابلو"}'
                            href="/search/category-carpet/" class=" c-navi-new__big-display-title"><span>فرش ماشینی، دستبافت، تابلو</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"فرش ماشینی، دستبافت، تابلو"}'
                            href="/search/category-carpet/" class=" c-navi-new__medium-display-title"><span>فرش ماشینی، دستبافت، تابلو</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Non Electrical Tools - category_fa: لوازم برقی خانگی - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"لوازم برقی خانگی"}'
                             href="/search/category-home-appliance/" class=" c-navi-new__big-display-title"><span>لوازم برقی خانگی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم برقی خانگی"}'
                            href="/search/category-home-appliance/" class=" c-navi-new__medium-display-title"><span>لوازم برقی خانگی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: یخچال و فریزر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"یخچال و فریزر"}'
                            href="/search/category-refrigerator-freezer/" class=" c-navi-new__big-display-title">
                            یخچال و فریزر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"یخچال و فریزر"}'
                                 href="/search/category-refrigerator-freezer/"
                                 class=" c-navi-new__medium-display-title">
                            یخچال و فریزر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماشین لباسشویی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماشین لباسشویی"}'
                            href="/search/category-washing-machines/" class=" c-navi-new__big-display-title">
                            ماشین لباسشویی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماشین لباسشویی"}'
                                 href="/search/category-washing-machines/" class=" c-navi-new__medium-display-title">
                            ماشین لباسشویی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ماشین ظرفشویی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ماشین ظرفشویی"}'
                            href="/search/category-dishwasher/" class=" c-navi-new__big-display-title">
                            ماشین ظرفشویی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ماشین ظرفشویی"}'
                                 href="/search/category-dishwasher/" class=" c-navi-new__medium-display-title">
                            ماشین ظرفشویی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: جاروبرقی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"جاروبرقی"}'
                            href="/search/category-vaccum-cleaner/" class=" c-navi-new__big-display-title">
                            جاروبرقی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"جاروبرقی"}'
                                 href="/search/category-vaccum-cleaner/" class=" c-navi-new__medium-display-title">
                            جاروبرقی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: جارو شارژی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"جارو شارژی"}'
                            href="/search/category-handheld-vaccum/" class=" c-navi-new__big-display-title">
                            جارو شارژی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"جارو شارژی"}'
                                 href="/search/category-handheld-vaccum/" class=" c-navi-new__medium-display-title">
                            جارو شارژی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تلفن، بی سیم و سانترال - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تلفن، بی سیم و سانترال"}'
                            href="/search/category-telephone/" class=" c-navi-new__big-display-title">
                            تلفن، بی سیم و سانترال
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تلفن، بی سیم و سانترال"}'
                                 href="/search/category-telephone/" class=" c-navi-new__medium-display-title">
                            تلفن، بی سیم و سانترال
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کولر، پنکه، تصفیه هوا - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کولر، پنکه، تصفیه هوا"}'
                            href="/search/category-airtreatment/" class=" c-navi-new__big-display-title">
                            کولر، پنکه، تصفیه هوا
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کولر، پنکه، تصفیه هوا"}'
                                 href="/search/category-airtreatment/" class=" c-navi-new__medium-display-title">
                            کولر، پنکه، تصفیه هوا
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: قهوه و چای ساز، آب میوه گیر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"قهوه و چای ساز، آب میوه گیر"}'
                            href="/search/category-drink-maker/" class=" c-navi-new__big-display-title">
                            قهوه و چای ساز، آب میوه گیر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"قهوه و چای ساز، آب میوه گیر"}'
                                 href="/search/category-drink-maker/" class=" c-navi-new__medium-display-title">
                            قهوه و چای ساز، آب میوه گیر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ترازوی آشپزخانه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ترازوی آشپزخانه"}'
                            href="/search/category-kitchen-weighing-scale/" class=" c-navi-new__big-display-title">
                            ترازوی آشپزخانه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ترازوی آشپزخانه"}'
                                 href="/search/category-kitchen-weighing-scale/"
                                 class=" c-navi-new__medium-display-title">
                            ترازوی آشپزخانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اتو بخار و پرسی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"اتو بخار و پرسی"}'
                            href="/search/category-iron/" class=" c-navi-new__big-display-title">
                            اتو بخار و پرسی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"اتو بخار و پرسی"}'
                                 href="/search/category-iron/" class=" c-navi-new__medium-display-title">
                            اتو بخار و پرسی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: حیوانات خانگی، غذا و لوازم - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"حیوانات خانگی، غذا و لوازم"}'
                            href="/search/category-pet/" class=" c-navi-new__big-display-title"><span>حیوانات خانگی، غذا و لوازم</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"حیوانات خانگی، غذا و لوازم"}'
                            href="/search/category-pet/" class=" c-navi-new__medium-display-title"><span>حیوانات خانگی، غذا و لوازم</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آکواریوم، غذا و لوازم آبزیان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آکواریوم، غذا و لوازم آبزیان"}'
                            href="/search/category-aquaculture-equipment/" class=" c-navi-new__big-display-title">
                            آکواریوم، غذا و لوازم آبزیان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آکواریوم، غذا و لوازم آبزیان"}'
                                 href="/search/category-aquaculture-equipment/"
                                 class=" c-navi-new__medium-display-title">
                            آکواریوم، غذا و لوازم آبزیان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Home & kitchen Appliances - category_fa: سرو و پذیرایی - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"سرو و پذیرایی"}'
                             href="/search/category-serving/"
                             class=" c-navi-new__big-display-title"><span>سرو و پذیرایی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"سرو و پذیرایی"}'
                            href="/search/category-serving/" class=" c-navi-new__medium-display-title"><span>سرو و پذیرایی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سرویس غذاخوری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سرویس غذاخوری"}'
                            href="/search/category-dinnerware-sets/" class=" c-navi-new__big-display-title">
                            سرویس غذاخوری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سرویس غذاخوری"}'
                                 href="/search/category-dinnerware-sets/" class=" c-navi-new__medium-display-title">
                            سرویس غذاخوری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: قاشق، چنگال و کارد - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"قاشق، چنگال و کارد"}'
                            href="/search/category-forkandspoonnandknife/" class=" c-navi-new__big-display-title">
                            قاشق، چنگال و کارد
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"قاشق، چنگال و کارد"}'
                                 href="/search/category-forkandspoonnandknife/"
                                 class=" c-navi-new__medium-display-title">
                            قاشق، چنگال و کارد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پارچ، بطری، لیوان و ماگ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پارچ، بطری، لیوان و ماگ"}'
                            href="/search/category-mugandjugset/" class=" c-navi-new__big-display-title">
                            پارچ، بطری، لیوان و ماگ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پارچ، بطری، لیوان و ماگ"}'
                                 href="/search/category-mugandjugset/" class=" c-navi-new__medium-display-title">
                            پارچ، بطری، لیوان و ماگ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ظروف پذیرایی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ظروف پذیرایی"}'
                            href="/search/category-servingware/" class=" c-navi-new__big-display-title">
                            ظروف پذیرایی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ظروف پذیرایی"}'
                                 href="/search/category-servingware/" class=" c-navi-new__medium-display-title">
                            ظروف پذیرایی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Home Appliance - category_fa: نور و روشنایی - level: 2"><a
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
                            data-event-label="category_en:  - category_fa: لامپ، چراغ و ریسه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لامپ، چراغ و ریسه"}'
                            href="/search/category-lamp/" class=" c-navi-new__big-display-title">
                            لامپ، چراغ و ریسه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لامپ، چراغ و ریسه"}'
                                 href="/search/category-lamp/" class=" c-navi-new__medium-display-title">
                            لامپ، چراغ و ریسه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوستر و چراغ تزیینی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوستر و چراغ تزیینی"}'
                            href="/search/category-hanging-lamps/" class=" c-navi-new__big-display-title">
                            لوستر و چراغ تزیینی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوستر و چراغ تزیینی"}'
                                 href="/search/category-hanging-lamps/" class=" c-navi-new__medium-display-title">
                            لوستر و چراغ تزیینی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آشپزخانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"آشپزخانه"}'
                            href="/search/category-home-kitchen-appliances/"
                            class=" c-navi-new__big-display-title"><span>آشپزخانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"آشپزخانه"}'
                            href="/search/category-home-kitchen-appliances/"
                            class=" c-navi-new__medium-display-title"><span>آشپزخانه</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سرویس و ظروف پخت و پز - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سرویس و ظروف پخت و پز"}'
                            href="/search/category-kitchen-appliances/" class=" c-navi-new__big-display-title">
                            سرویس و ظروف پخت و پز
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سرویس و ظروف پخت و پز"}'
                                 href="/search/category-kitchen-appliances/" class=" c-navi-new__medium-display-title">
                            سرویس و ظروف پخت و پز
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فلاسک و کلمن - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"فلاسک و کلمن"}'
                            href="/search/category-flasks/" class=" c-navi-new__big-display-title">
                            فلاسک و کلمن
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"فلاسک و کلمن"}'
                                 href="/search/category-flasks/" class=" c-navi-new__medium-display-title">
                            فلاسک و کلمن
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کتری، قوری، لوازم سرو چای - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کتری، قوری، لوازم سرو چای"}'
                            href="/search/category-kettleandteapot/" class=" c-navi-new__big-display-title">
                            کتری، قوری، لوازم سرو چای
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کتری، قوری، لوازم سرو چای"}'
                                 href="/search/category-kettleandteapot/" class=" c-navi-new__medium-display-title">
                            کتری، قوری، لوازم سرو چای
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ظروف یکبار مصرف - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ظروف یکبار مصرف"}'
                            href="/search/category-disposablecontainer/" class=" c-navi-new__big-display-title">
                            ظروف یکبار مصرف
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ظروف یکبار مصرف"}'
                                 href="/search/category-disposablecontainer/" class=" c-navi-new__medium-display-title">
                            ظروف یکبار مصرف
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مواد شوینده - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مواد شوینده"}'
                            href="/search/category-detergents/"
                            class=" c-navi-new__big-display-title"><span>مواد شوینده</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"مواد شوینده"}'
                            href="/search/category-detergents/" class=" c-navi-new__medium-display-title"><span>مواد شوینده</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شوینده ظروف - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شوینده ظروف"}'
                            href="/search/category-dishes-detergents/" class=" c-navi-new__big-display-title">
                            شوینده ظروف
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شوینده ظروف"}'
                                 href="/search/category-dishes-detergents/" class=" c-navi-new__medium-display-title">
                            شوینده ظروف
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: شوینده لباس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"شوینده لباس"}'
                            href="/search/category-clothes-detergents/" class=" c-navi-new__big-display-title">
                            شوینده لباس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"شوینده لباس"}'
                                 href="/search/category-clothes-detergents/" class=" c-navi-new__medium-display-title">
                            شوینده لباس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تمیزکننده سطوح - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تمیزکننده سطوح"}'
                            href="/search/category-surface-cleaner/" class=" c-navi-new__big-display-title">
                            تمیزکننده سطوح
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تمیزکننده سطوح"}'
                                 href="/search/category-surface-cleaner/" class=" c-navi-new__medium-display-title">
                            تمیزکننده سطوح
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دستمال کاغذی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دستمال کاغذی"}'
                            href="/search/category-tissue-paper/" class=" c-navi-new__big-display-title"><span>دستمال کاغذی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دستمال کاغذی"}'
                            href="/search/category-tissue-paper/" class=" c-navi-new__medium-display-title"><span>دستمال کاغذی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ملحفه، سرویس، لوازم خواب - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ملحفه، سرویس، لوازم خواب"}'
                            href="/search/category-sleeping/" class=" c-navi-new__big-display-title"><span>ملحفه، سرویس، لوازم خواب</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ملحفه، سرویس، لوازم خواب"}'
                            href="/search/category-sleeping/" class=" c-navi-new__medium-display-title"><span>ملحفه، سرویس، لوازم خواب</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: حوله و وسایل حمام - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"حوله و وسایل حمام"}'
                            href="/search/category-bath/"
                            class=" c-navi-new__big-display-title"><span>حوله و وسایل حمام</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"حوله و وسایل حمام"}'
                            href="/search/category-bath/" class=" c-navi-new__medium-display-title"><span>حوله و وسایل حمام</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پادری، کمد، لوازم اتاق خواب - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پادری، کمد، لوازم اتاق خواب"}'
                            href="/search/category-bedroom/" class=" c-navi-new__big-display-title"><span>پادری، کمد، لوازم اتاق خواب</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پادری، کمد، لوازم اتاق خواب"}'
                            href="/search/category-bedroom/" class=" c-navi-new__medium-display-title"><span>پادری، کمد، لوازم اتاق خواب</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم دستشویی و روشویی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم دستشویی و روشویی"}'
                            href="/search/category-watercloset/" class=" c-navi-new__big-display-title"><span>لوازم دستشویی و روشویی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم دستشویی و روشویی"}'
                            href="/search/category-watercloset/" class=" c-navi-new__medium-display-title"><span>لوازم دستشویی و روشویی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فندک و لوازم جانبی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"فندک و لوازم جانبی"}'
                            href="/search/category-pesonal-appliance-accessories/"
                            class=" c-navi-new__big-display-title"><span>فندک و لوازم جانبی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"فندک و لوازم جانبی"}'
                            href="/search/category-pesonal-appliance-accessories/"
                            class=" c-navi-new__medium-display-title"><span>فندک و لوازم جانبی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Dinnerware - category_fa: گُل، خاک، کود، لوازم باغبانی - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"گُل، خاک، کود، لوازم باغبانی"}'
                             href="/search/category-gardening-tools/" class=" c-navi-new__big-display-title"><span>گُل، خاک، کود، لوازم باغبانی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"گُل، خاک، کود، لوازم باغبانی"}'
                            href="/search/category-gardening-tools/" class=" c-navi-new__medium-display-title"><span>گُل، خاک، کود، لوازم باغبانی</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options" id="categories-8">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/book-and-media/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های کتاب، لوازم تحریر و هنر
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Book & Magazine - category_fa: کتاب و مجله - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کتاب و مجله"}'
                            href="/search/book-and-media/publication/" class=" c-navi-new__big-display-title"><span>کتاب و مجله</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کتاب و مجله"}'
                            href="/search/book-and-media/publication/" class=" c-navi-new__medium-display-title"><span>کتاب و مجله</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کتاب چاپی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کتاب چاپی"}'
                            href="/search/category-book/" class=" c-navi-new__big-display-title">
                            کتاب چاپی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کتاب چاپی"}'
                                 href="/search/category-book/" class=" c-navi-new__medium-display-title">
                            کتاب چاپی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مجلات خارجی و داخلی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مجلات خارجی و داخلی"}'
                            href="/search/category-magazines/" class=" c-navi-new__big-display-title">
                            مجلات خارجی و داخلی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مجلات خارجی و داخلی"}'
                                 href="/search/category-magazines/" class=" c-navi-new__medium-display-title">
                            مجلات خارجی و داخلی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کتاب صوتی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کتاب صوتی"}'
                            href="/search/category-audio-book/"
                            class=" c-navi-new__big-display-title"><span>کتاب صوتی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کتاب صوتی"}'
                            href="/search/category-audio-book/" class=" c-navi-new__medium-display-title"><span>کتاب صوتی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Software & Educational Content - category_fa: محتوای آموزشی - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"محتوای آموزشی"}'
                             href="/search/category-multimedia-training-pack/"
                             class=" c-navi-new__big-display-title"><span>محتوای آموزشی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"محتوای آموزشی"}'
                            href="/search/category-multimedia-training-pack/" class=" c-navi-new__medium-display-title"><span>محتوای آموزشی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آموزش موسیقی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آموزش موسیقی"}'
                            href="/search/category-music-training/" class=" c-navi-new__big-display-title">
                            آموزش موسیقی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آموزش موسیقی"}'
                                 href="/search/category-music-training/" class=" c-navi-new__medium-display-title">
                            آموزش موسیقی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آموزش ورزش و سرگرمی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آموزش ورزش و سرگرمی"}'
                            href="/search/category-sport-and-entertainment/" class=" c-navi-new__big-display-title">
                            آموزش ورزش و سرگرمی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آموزش ورزش و سرگرمی"}'
                                 href="/search/category-sport-and-entertainment/"
                                 class=" c-navi-new__medium-display-title">
                            آموزش ورزش و سرگرمی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آموزش زبان - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آموزش زبان"}'
                            href="/search/category-language-learning-software/" class=" c-navi-new__big-display-title">
                            آموزش زبان
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آموزش زبان"}'
                                 href="/search/category-language-learning-software/"
                                 class=" c-navi-new__medium-display-title">
                            آموزش زبان
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آموزش نرم افزار و کامپیوتر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آموزش نرم افزار و کامپیوتر"}'
                            href="/search/category-software-computer/" class=" c-navi-new__big-display-title">
                            آموزش نرم افزار و کامپیوتر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آموزش نرم افزار و کامپیوتر"}'
                                 href="/search/category-software-computer/" class=" c-navi-new__medium-display-title">
                            آموزش نرم افزار و کامپیوتر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نرم افزار - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"نرم افزار"}'
                            href="/search/category-software/"
                            class=" c-navi-new__big-display-title"><span>نرم افزار</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"نرم افزار"}'
                            href="/search/category-software/"
                            class=" c-navi-new__medium-display-title"><span>نرم افزار</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Video Game - category_fa: بازی کنسول و کامپیوتر - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"بازی کنسول و کامپیوتر"}'
                             href="/search/category-game/" class=" c-navi-new__big-display-title"><span>بازی کنسول و کامپیوتر</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"بازی کنسول و کامپیوتر"}'
                            href="/search/category-game/" class=" c-navi-new__medium-display-title"><span>بازی کنسول و کامپیوتر</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Music & Audio Content - category_fa: فیلم سینمایی، سریال و مستند - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"فیلم سینمایی، سریال و مستند"}'
                             href="/search/category-film-video-content/" class=" c-navi-new__big-display-title"><span>فیلم سینمایی، سریال و مستند</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"فیلم سینمایی، سریال و مستند"}'
                            href="/search/category-film-video-content/" class=" c-navi-new__medium-display-title"><span>فیلم سینمایی، سریال و مستند</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Musical Instruments - category_fa: آلبوم موسیقی - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"آلبوم موسیقی"}'
                             href="/search/category-music-audio-content/" class=" c-navi-new__big-display-title"><span>آلبوم موسیقی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"آلبوم موسیقی"}'
                            href="/search/category-music-audio-content/"
                            class=" c-navi-new__medium-display-title"><span>آلبوم موسیقی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Stationery - category_fa: لوازم التحریر - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم التحریر"}'
                            href="/search/category-stationery/" class=" c-navi-new__big-display-title"><span>لوازم التحریر</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم التحریر"}'
                            href="/search/category-stationery/" class=" c-navi-new__medium-display-title"><span>لوازم التحریر</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم اداری و اقلام مصرفی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوازم اداری و اقلام مصرفی"}'
                            href="/search/category-office-supplies/" class=" c-navi-new__big-display-title">
                            لوازم اداری و اقلام مصرفی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوازم اداری و اقلام مصرفی"}'
                                 href="/search/category-office-supplies/" class=" c-navi-new__medium-display-title">
                            لوازم اداری و اقلام مصرفی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیف، کوله پشتی و جامدادی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیف، کوله پشتی و جامدادی"}'
                            href="/search/category-bags-backpacks/" class=" c-navi-new__big-display-title">
                            کیف، کوله پشتی و جامدادی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیف، کوله پشتی و جامدادی"}'
                                 href="/search/category-bags-backpacks/" class=" c-navi-new__medium-display-title">
                            کیف، کوله پشتی و جامدادی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چراغ مطالعه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چراغ مطالعه"}'
                            href="/search/category-light/" class=" c-navi-new__big-display-title">
                            چراغ مطالعه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چراغ مطالعه"}'
                                 href="/search/category-light/" class=" c-navi-new__medium-display-title">
                            چراغ مطالعه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کاغذ کادو، پاکت و کارت هدیه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کاغذ کادو، پاکت و کارت هدیه"}'
                            href="/search/category-gift-tools/" class=" c-navi-new__big-display-title">
                            کاغذ کادو، پاکت و کارت هدیه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کاغذ کادو، پاکت و کارت هدیه"}'
                                 href="/search/category-gift-tools/" class=" c-navi-new__medium-display-title">
                            کاغذ کادو، پاکت و کارت هدیه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: نوشت افزار - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"نوشت افزار"}'
                            href="/search/category-stationery-sub/" class=" c-navi-new__big-display-title">
                            نوشت افزار
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"نوشت افزار"}'
                                 href="/search/category-stationery-sub/" class=" c-navi-new__medium-display-title">
                            نوشت افزار
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دفتر و کاغذ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دفتر و کاغذ"}'
                            href="/search/category-paper-notebook/" class=" c-navi-new__big-display-title">
                            دفتر و کاغذ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دفتر و کاغذ"}'
                                 href="/search/category-paper-notebook/" class=" c-navi-new__medium-display-title">
                            دفتر و کاغذ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: خودکار و روان نویس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"خودکار و روان نویس"}'
                            href="/search/category-pen/" class=" c-navi-new__big-display-title">
                            خودکار و روان نویس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"خودکار و روان نویس"}'
                                 href="/search/category-pen/" class=" c-navi-new__medium-display-title">
                            خودکار و روان نویس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ابزار نقاشی و رنگ آمیزی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ابزار نقاشی و رنگ آمیزی"}'
                            href="/search/category-drawing-painting-tools/" class=" c-navi-new__big-display-title">
                            ابزار نقاشی و رنگ آمیزی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ابزار نقاشی و رنگ آمیزی"}'
                                 href="/search/category-drawing-painting-tools/"
                                 class=" c-navi-new__medium-display-title">
                            ابزار نقاشی و رنگ آمیزی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: میز تحریر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"میز تحریر"}'
                            href="/search/category-writing-desk/" class=" c-navi-new__big-display-title">
                            میز تحریر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"میز تحریر"}'
                                 href="/search/category-writing-desk/" class=" c-navi-new__medium-display-title">
                            میز تحریر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آلبوم عکس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"آلبوم عکس"}'
                            href="/search/category-photo-box/" class=" c-navi-new__big-display-title">
                            آلبوم عکس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"آلبوم عکس"}'
                                 href="/search/category-photo-box/" class=" c-navi-new__medium-display-title">
                            آلبوم عکس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کاغذ چاپ و پرینتر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کاغذ چاپ و پرینتر"}'
                            href="/search/category-paper/?type[0]=5072&pageno=1&last_filter=type&last_value=5072&sortby=4&entry=mm"
                            class=" c-navi-new__big-display-title">
                            کاغذ چاپ و پرینتر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کاغذ چاپ و پرینتر"}'
                                 href="/search/category-paper/?type[0]=5072&pageno=1&last_filter=type&last_value=5072&sortby=4&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            کاغذ چاپ و پرینتر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: مداد و مداد رنگی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"مداد و مداد رنگی"}'
                            href="/search/category-pencil/" class=" c-navi-new__big-display-title">
                            مداد و مداد رنگی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"مداد و مداد رنگی"}'
                                 href="/search/category-pencil/" class=" c-navi-new__medium-display-title">
                            مداد و مداد رنگی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: آلات موسیقی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"آلات موسیقی"}'
                            href="/search/category-musicalinstruments/" class=" c-navi-new__big-display-title"><span>آلات موسیقی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"آلات موسیقی"}'
                            href="/search/category-musicalinstruments/" class=" c-navi-new__medium-display-title"><span>آلات موسیقی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم جانبی ادوات موسیقی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوازم جانبی ادوات موسیقی"}'
                            href="/search/category-musicinstrumentsaccessories/" class=" c-navi-new__big-display-title">
                            لوازم جانبی ادوات موسیقی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوازم جانبی ادوات موسیقی"}'
                                 href="/search/category-musicinstrumentsaccessories/"
                                 class=" c-navi-new__medium-display-title">
                            لوازم جانبی ادوات موسیقی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: گیتار - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"گیتار"}'
                            href="/search/category-guitar/" class=" c-navi-new__big-display-title">
                            گیتار
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"گیتار"}'
                                 href="/search/category-guitar/" class=" c-navi-new__medium-display-title">
                            گیتار
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیبورد و ارگ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیبورد و ارگ"}'
                            href="/search/category-keybord-organ/" class=" c-navi-new__big-display-title">
                            کیبورد و ارگ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیبورد و ارگ"}'
                                 href="/search/category-keybord-organ/" class=" c-navi-new__medium-display-title">
                            کیبورد و ارگ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پیانو دیجیتال - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"پیانو دیجیتال"}'
                            href="/search/category-pianos/" class=" c-navi-new__big-display-title">
                            پیانو دیجیتال
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"پیانو دیجیتال"}'
                                 href="/search/category-pianos/" class=" c-navi-new__medium-display-title">
                            پیانو دیجیتال
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: درام، پرکاشن و دف - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"درام، پرکاشن و دف"}'
                            href="/search/category-percussion-instruments/" class=" c-navi-new__big-display-title">
                            درام، پرکاشن و دف
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"درام، پرکاشن و دف"}'
                                 href="/search/category-percussion-instruments/"
                                 class=" c-navi-new__medium-display-title">
                            درام، پرکاشن و دف
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تجهیزات استودیویی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تجهیزات استودیویی"}'
                            href="/search/category-studio-equipment/" class=" c-navi-new__big-display-title">
                            تجهیزات استودیویی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تجهیزات استودیویی"}'
                                 href="/search/category-studio-equipment/" class=" c-navi-new__medium-display-title">
                            تجهیزات استودیویی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ویولن - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ویولن"}'
                            href="/search/category-violin/" class=" c-navi-new__big-display-title">
                            ویولن
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ویولن"}'
                                 href="/search/category-violin/" class=" c-navi-new__medium-display-title">
                            ویولن
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سازهای ایرانی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سازهای ایرانی"}'
                            href="/search/category-iranian-instruments/" class=" c-navi-new__big-display-title">
                            سازهای ایرانی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سازهای ایرانی"}'
                                 href="/search/category-iranian-instruments/" class=" c-navi-new__medium-display-title">
                            سازهای ایرانی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Carpet - category_fa: فرش ماشینی، دستبافت، تابلو - level: 2">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-title","category_title":"فرش ماشینی، دستبافت، تابلو"}'
                             href="/search/category-carpet/" class=" c-navi-new__big-display-title"><span>فرش ماشینی، دستبافت، تابلو</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"فرش ماشینی، دستبافت، تابلو"}'
                            href="/search/category-carpet/" class=" c-navi-new__medium-display-title"><span>فرش ماشینی، دستبافت، تابلو</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فرش ماشینی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"فرش ماشینی"}'
                            href="/search/category-machine-made-carpet/" class=" c-navi-new__big-display-title">
                            فرش ماشینی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"فرش ماشینی"}'
                                 href="/search/category-machine-made-carpet/" class=" c-navi-new__medium-display-title">
                            فرش ماشینی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فرش دستباف - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"فرش دستباف"}'
                            href="/search/category-handmade-carpet/" class=" c-navi-new__big-display-title">
                            فرش دستباف
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"فرش دستباف"}'
                                 href="/search/category-handmade-carpet/" class=" c-navi-new__medium-display-title">
                            فرش دستباف
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تابلو فرش - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تابلو فرش"}'
                            href="/search/category-pictorial-carpet/" class=" c-navi-new__big-display-title">
                            تابلو فرش
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تابلو فرش"}'
                                 href="/search/category-pictorial-carpet/" class=" c-navi-new__medium-display-title">
                            تابلو فرش
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en: Handicraft & - category_fa: صنایع دستی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"صنایع دستی"}'
                            href="/search/category-handicraft/"
                            class=" c-navi-new__big-display-title"><span>صنایع دستی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"صنایع دستی"}'
                            href="/search/category-handicraft/" class=" c-navi-new__medium-display-title"><span>صنایع دستی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کالاهای مسی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کالاهای مسی"}'
                            href="/search/category-copper-products/" class=" c-navi-new__big-display-title">
                            کالاهای مسی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کالاهای مسی"}'
                                 href="/search/category-copper-products/" class=" c-navi-new__medium-display-title">
                            کالاهای مسی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سفال، سرامیک و چینی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سفال، سرامیک و چینی"}'
                            href="/search/category-clay-and-ceramic/" class=" c-navi-new__big-display-title">
                            سفال، سرامیک و چینی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سفال، سرامیک و چینی"}'
                                 href="/search/category-clay-and-ceramic/" class=" c-navi-new__medium-display-title">
                            سفال، سرامیک و چینی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیف چرمی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیف چرمی"}'
                            href="/search/category-leatherbag/" class=" c-navi-new__big-display-title">
                            کیف چرمی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیف چرمی"}'
                                 href="/search/category-leatherbag/" class=" c-navi-new__medium-display-title">
                            کیف چرمی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ترمه،‌ قلمکار و دستبافت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"ترمه،‌ قلمکار و دستبافت"}'
                            href="/search/category-textile-industry/" class=" c-navi-new__big-display-title">
                            ترمه،‌ قلمکار و دستبافت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"ترمه،‌ قلمکار و دستبافت"}'
                                 href="/search/category-textile-industry/" class=" c-navi-new__medium-display-title">
                            ترمه،‌ قلمکار و دستبافت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: خاتم، منبت، حصیری و چوبی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"خاتم، منبت، حصیری و چوبی"}'
                            href="/search/category-woodcraft/" class=" c-navi-new__big-display-title">
                            خاتم، منبت، حصیری و چوبی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"خاتم، منبت، حصیری و چوبی"}'
                                 href="/search/category-woodcraft/" class=" c-navi-new__medium-display-title">
                            خاتم، منبت، حصیری و چوبی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تابلو و ساعت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تابلو و ساعت"}'
                            href="/search/category-panel/" class=" c-navi-new__big-display-title">
                            تابلو و ساعت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تابلو و ساعت"}'
                                 href="/search/category-panel/" class=" c-navi-new__medium-display-title">
                            تابلو و ساعت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: میناکاری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"میناکاری"}'
                            href="/search/category-enamels/" class=" c-navi-new__big-display-title">
                            میناکاری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"میناکاری"}'
                                 href="/search/category-enamels/" class=" c-navi-new__medium-display-title">
                            میناکاری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: فیروزه کوبی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"فیروزه کوبی"}'
                            href="/search/category-turquoise-tattoo/" class=" c-navi-new__big-display-title">
                            فیروزه کوبی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"فیروزه کوبی"}'
                                 href="/search/category-turquoise-tattoo/" class=" c-navi-new__medium-display-title">
                            فیروزه کوبی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: سوزن دوزی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"سوزن دوزی"}'
                            href="/search/category-traditional-sewing/" class=" c-navi-new__big-display-title">
                            سوزن دوزی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"سوزن دوزی"}'
                                 href="/search/category-traditional-sewing/" class=" c-navi-new__medium-display-title">
                            سوزن دوزی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: محصولات استخوانی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"محصولات استخوانی"}'
                            href="/search/category-bone-product/" class=" c-navi-new__big-display-title">
                            محصولات استخوانی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"محصولات استخوانی"}'
                                 href="/search/category-bone-product/" class=" c-navi-new__medium-display-title">
                            محصولات استخوانی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: جعبه و دست سازه های هنری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"جعبه و دست سازه های هنری"}'
                            href="/search/category-art-structures/" class=" c-navi-new__big-display-title">
                            جعبه و دست سازه های هنری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"جعبه و دست سازه های هنری"}'
                                 href="/search/category-art-structures/" class=" c-navi-new__medium-display-title">
                            جعبه و دست سازه های هنری
                          </a></li>
                      </ul>
                    </div>
                    <div class="c-navi-new-list__options-list  js-mega-menu-category-options" id="categories-9">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/main/sport-entertainment/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          همه دسته‌بندی‌های ورزش و سفر
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک ورزشی مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی مردانه"}'
                            href="/search/category-men-sportswear/" class=" c-navi-new__big-display-title"><span>پوشاک ورزشی مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی مردانه"}'
                            href="/search/category-men-sportswear/" class=" c-navi-new__medium-display-title"><span>پوشاک ورزشی مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک ورزشی زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی زنانه"}'
                            href="/search/category-women-sportwear/" class=" c-navi-new__big-display-title"><span>پوشاک ورزشی زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی زنانه"}'
                            href="/search/category-women-sportwear/" class=" c-navi-new__medium-display-title"><span>پوشاک ورزشی زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی مردانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی مردانه"}'
                            href="/search/category-men-sport-shoes-/" class=" c-navi-new__big-display-title"><span>کفش ورزشی مردانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی مردانه"}'
                            href="/search/category-men-sport-shoes-/" class=" c-navi-new__medium-display-title"><span>کفش ورزشی مردانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی زنانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی زنانه"}'
                            href="/search/category-women-sport-shoes-/" class=" c-navi-new__big-display-title"><span>کفش ورزشی زنانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی زنانه"}'
                            href="/search/category-women-sport-shoes-/" class=" c-navi-new__medium-display-title"><span>کفش ورزشی زنانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک ورزشی پسرانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی پسرانه"}'
                            href="/search/category-boys-sportswear/" class=" c-navi-new__big-display-title"><span>پوشاک ورزشی پسرانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی پسرانه"}'
                            href="/search/category-boys-sportswear/" class=" c-navi-new__medium-display-title"><span>پوشاک ورزشی پسرانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: پوشاک ورزشی دخترانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی دخترانه"}'
                            href="/search/category-girls-sportswear/" class=" c-navi-new__big-display-title"><span>پوشاک ورزشی دخترانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"پوشاک ورزشی دخترانه"}'
                            href="/search/category-girls-sportswear/" class=" c-navi-new__medium-display-title"><span>پوشاک ورزشی دخترانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی پسرانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی پسرانه"}'
                            href="/search/category-boys-sport-shoes/" class=" c-navi-new__big-display-title"><span>کفش ورزشی پسرانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی پسرانه"}'
                            href="/search/category-boys-sport-shoes/" class=" c-navi-new__medium-display-title"><span>کفش ورزشی پسرانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش ورزشی دخترانه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی دخترانه"}'
                            href="/search/category-girls-sport-shoes/" class=" c-navi-new__big-display-title"><span>کفش ورزشی دخترانه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کفش ورزشی دخترانه"}'
                            href="/search/category-girls-sport-shoes/" class=" c-navi-new__medium-display-title"><span>کفش ورزشی دخترانه</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تجهیزات سفر - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تجهیزات سفر"}'
                            href="/search/category-traveling-equipment/" class=" c-navi-new__big-display-title"><span>تجهیزات سفر</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"تجهیزات سفر"}'
                            href="/search/category-traveling-equipment/"
                            class=" c-navi-new__medium-display-title"><span>تجهیزات سفر</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چمدان و ساک - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چمدان و ساک"}'
                            href="/search/category-trolley-case-and-luggage/" class=" c-navi-new__big-display-title">
                            چمدان و ساک
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چمدان و ساک"}'
                                 href="/search/category-trolley-case-and-luggage/"
                                 class=" c-navi-new__medium-display-title">
                            چمدان و ساک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیف و کوله پشتی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیف و کوله پشتی"}'
                            href="/search/category-bag-and-backpack/" class=" c-navi-new__big-display-title">
                            کیف و کوله پشتی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیف و کوله پشتی"}'
                                 href="/search/category-bag-and-backpack/" class=" c-navi-new__medium-display-title">
                            کیف و کوله پشتی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دوچرخه - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دوچرخه"}'
                            href="/search/category-bicycle/" class=" c-navi-new__big-display-title"><span>دوچرخه</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"دوچرخه"}'
                            href="/search/category-bicycle/"
                            class=" c-navi-new__medium-display-title"><span>دوچرخه</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم جانبی دوچرخه - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوازم جانبی دوچرخه"}'
                            href="/search/category-bicycles-accessories/" class=" c-navi-new__big-display-title">
                            لوازم جانبی دوچرخه
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوازم جانبی دوچرخه"}'
                                 href="/search/category-bicycles-accessories/"
                                 class=" c-navi-new__medium-display-title">
                            لوازم جانبی دوچرخه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کوهنوردی و کمپینگ - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کوهنوردی و کمپینگ"}'
                            href="/search/category-hiking-and-camping/" class=" c-navi-new__big-display-title"><span>کوهنوردی و کمپینگ</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"کوهنوردی و کمپینگ"}'
                            href="/search/category-hiking-and-camping/" class=" c-navi-new__medium-display-title"><span>کوهنوردی و کمپینگ</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کفش کوهنوردی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کفش کوهنوردی"}'
                            href="/search/category-apparel/?q=%da%a9%d9%81%d8%b4%20%da%a9%d9%88%d9%87%d9%86%d9%88%d8%b1%d8%af%db%8c&entry=mm"
                            class=" c-navi-new__big-display-title">
                            کفش کوهنوردی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کفش کوهنوردی"}'
                                 href="/search/category-apparel/?q=%da%a9%d9%81%d8%b4%20%da%a9%d9%88%d9%87%d9%86%d9%88%d8%b1%d8%af%db%8c&entry=mm"
                                 class=" c-navi-new__medium-display-title">
                            کفش کوهنوردی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: عصای کوهنوردی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"عصای کوهنوردی"}'
                            href="/search/category-staff/" class=" c-navi-new__big-display-title">
                            عصای کوهنوردی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"عصای کوهنوردی"}'
                                 href="/search/category-staff/" class=" c-navi-new__medium-display-title">
                            عصای کوهنوردی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چراغ قوه و چراغ پیشانی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چراغ قوه و چراغ پیشانی"}'
                            href="/search/category-flashlight/" class=" c-navi-new__big-display-title">
                            چراغ قوه و چراغ پیشانی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چراغ قوه و چراغ پیشانی"}'
                                 href="/search/category-flashlight/" class=" c-navi-new__medium-display-title">
                            چراغ قوه و چراغ پیشانی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چاقو و ابزار چند کاره - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چاقو و ابزار چند کاره"}'
                            href="/search/category-camping-knife/" class=" c-navi-new__big-display-title">
                            چاقو و ابزار چند کاره
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چاقو و ابزار چند کاره"}'
                                 href="/search/category-camping-knife/" class=" c-navi-new__medium-display-title">
                            چاقو و ابزار چند کاره
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: قمقمه و فلاسک - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"قمقمه و فلاسک"}'
                            href="/search/category-flask/" class=" c-navi-new__big-display-title">
                            قمقمه و فلاسک
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"قمقمه و فلاسک"}'
                                 href="/search/category-flask/" class=" c-navi-new__medium-display-title">
                            قمقمه و فلاسک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چادر - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"چادر"}'
                            href="/search/category-tent/" class=" c-navi-new__big-display-title">
                            چادر
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"چادر"}'
                                 href="/search/category-tent/" class=" c-navi-new__medium-display-title">
                            چادر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: کیسه خواب - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"کیسه خواب"}'
                            href="/search/category-sleeping-bag/" class=" c-navi-new__big-display-title">
                            کیسه خواب
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"کیسه خواب"}'
                                 href="/search/category-sleeping-bag/" class=" c-navi-new__medium-display-title">
                            کیسه خواب
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: زیرانداز سفری - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"زیرانداز سفری"}'
                            href="/search/category-mat/" class=" c-navi-new__big-display-title">
                            زیرانداز سفری
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"زیرانداز سفری"}'
                                 href="/search/category-mat/" class=" c-navi-new__medium-display-title">
                            زیرانداز سفری
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم جانبی کوهنوردی و سفر - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی کوهنوردی و سفر"}'
                            href="/search/category-travel-accessories/" class=" c-navi-new__big-display-title"><span>لوازم جانبی کوهنوردی و سفر</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم جانبی کوهنوردی و سفر"}'
                            href="/search/category-travel-accessories/" class=" c-navi-new__medium-display-title"><span>لوازم جانبی کوهنوردی و سفر</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: چتر - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"چتر"}'
                            href="/search/category-umbrella-1/" class=" c-navi-new__big-display-title"><span>چتر</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"چتر"}'
                            href="/search/category-umbrella-1/"
                            class=" c-navi-new__medium-display-title"><span>چتر</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ساک ورزشی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ساک ورزشی"}'
                            href="/search/category-trolley-case-and-luggage/?q=%d8%b3%d8%a7%da%a9%20%d9%88%d8%b1%d8%b2%d8%b4%db%8c&entry=mm"
                            class=" c-navi-new__big-display-title"><span>ساک ورزشی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ساک ورزشی"}'
                            href="/search/category-trolley-case-and-luggage/?q=%d8%b3%d8%a7%da%a9%20%d9%88%d8%b1%d8%b2%d8%b4%db%8c&entry=mm"
                            class=" c-navi-new__medium-display-title"><span>ساک ورزشی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: قمقمه و شیکر - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"قمقمه و شیکر"}'
                            href="/search/category-sport-entertainment/?q=%d8%b4%db%8c%da%a9%d8%b1&entry=mm"
                            class=" c-navi-new__big-display-title"><span>قمقمه و شیکر</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"قمقمه و شیکر"}'
                            href="/search/category-sport-entertainment/?q=%d8%b4%db%8c%da%a9%d8%b1&entry=mm"
                            class=" c-navi-new__medium-display-title"><span>قمقمه و شیکر</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم ورزشی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم ورزشی"}'
                            href="/search/category-sport/"
                            class=" c-navi-new__big-display-title"><span>لوازم ورزشی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"لوازم ورزشی"}'
                            href="/search/category-sport/"
                            class=" c-navi-new__medium-display-title"><span>لوازم ورزشی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ورزش های هوازی و بدنسازی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ورزش های هوازی و بدنسازی"}'
                            href="/search/category-aerobic/" class=" c-navi-new__big-display-title"><span>ورزش های هوازی و بدنسازی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ورزش های هوازی و بدنسازی"}'
                            href="/search/category-aerobic/" class=" c-navi-new__medium-display-title"><span>ورزش های هوازی و بدنسازی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تجهیزات جانبی ایروبیک و تناسب اندام - level: 3">
                          <a data-snt-event="dkMegaMenuClick"
                             data-snt-params='{"type":"option-item","category_title":"تجهیزات جانبی ایروبیک و تناسب اندام"}'
                             href="/search/category-stretching-tools/" class=" c-navi-new__big-display-title">
                            تجهیزات جانبی ایروبیک و تناسب اندام
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تجهیزات جانبی ایروبیک و تناسب اندام"}'
                                 href="/search/category-stretching-tools/" class=" c-navi-new__medium-display-title">
                            تجهیزات جانبی ایروبیک و تناسب اندام
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: دمبل - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"دمبل"}'
                            href="/search/category-dumbbell/" class=" c-navi-new__big-display-title">
                            دمبل
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"دمبل"}'
                                 href="/search/category-dumbbell/" class=" c-navi-new__medium-display-title">
                            دمبل
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: طناب - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"طناب"}'
                            href="/search/category-rope/" class=" c-navi-new__big-display-title">
                            طناب
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"طناب"}'
                                 href="/search/category-rope/" class=" c-navi-new__medium-display-title">
                            طناب
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: بارفیکس - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"بارفیکس"}'
                            href="/search/category-pullup/" class=" c-navi-new__big-display-title">
                            بارفیکس
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"بارفیکس"}'
                                 href="/search/category-pullup/" class=" c-navi-new__medium-display-title">
                            بارفیکس
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: تردمیل - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"تردمیل"}'
                            href="/search/category-treadmill/" class=" c-navi-new__big-display-title">
                            تردمیل
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"تردمیل"}'
                                 href="/search/category-treadmill/" class=" c-navi-new__medium-display-title">
                            تردمیل
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: لوازم پوششی و محافظتی ورزشی - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"لوازم پوششی و محافظتی ورزشی"}'
                            href="/search/category-cover-and-safety-equipment/" class=" c-navi-new__big-display-title">
                            لوازم پوششی و محافظتی ورزشی
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"لوازم پوششی و محافظتی ورزشی"}'
                                 href="/search/category-cover-and-safety-equipment/"
                                 class=" c-navi-new__medium-display-title">
                            لوازم پوششی و محافظتی ورزشی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ورزش های توپی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ورزش های توپی"}'
                            href="/search/category-ball-sports/" class=" c-navi-new__big-display-title"><span>ورزش های توپی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ورزش های توپی"}'
                            href="/search/category-ball-sports/" class=" c-navi-new__medium-display-title"><span>ورزش های توپی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: توپ - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"توپ"}'
                            href="/search/category-ball/" class=" c-navi-new__big-display-title">
                            توپ
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"توپ"}'
                                 href="/search/category-ball/" class=" c-navi-new__medium-display-title">
                            توپ
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: راکت - level: 3"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-item","category_title":"راکت"}'
                            href="/search/category-racquet/" class=" c-navi-new__big-display-title">
                            راکت
                          </a><a data-snt-event="dkMegaMenuClick"
                                 data-snt-params='{"type":"option-item","category_title":"راکت"}'
                                 href="/search/category-racquet/" class=" c-navi-new__medium-display-title">
                            راکت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ورزش‌های آبی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ورزش‌های آبی"}'
                            href="/search/category-water-games/" class=" c-navi-new__big-display-title"><span>ورزش‌های آبی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ورزش‌های آبی"}'
                            href="/search/category-water-games/" class=" c-navi-new__medium-display-title"><span>ورزش‌های آبی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: ورزش‌های رزمی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ورزش‌های رزمی"}'
                            href="/search/category-martial-arts/" class=" c-navi-new__big-display-title"><span>ورزش‌های رزمی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"ورزش‌های رزمی"}'
                            href="/search/category-martial-arts/" class=" c-navi-new__medium-display-title"><span>ورزش‌های رزمی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اسکوتر برقی - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اسکوتر برقی"}'
                            href="/search/category-sports-hoverboard/" class=" c-navi-new__big-display-title"><span>اسکوتر برقی</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اسکوتر برقی"}'
                            href="/search/category-sports-hoverboard/" class=" c-navi-new__medium-display-title"><span>اسکوتر برقی</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"
                            data-event="megamenu_click" data-event-category="header_section"
                            data-event-label="category_en:  - category_fa: اسکیت و اسکوتر - level: 2"><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اسکیت و اسکوتر"}'
                            href="/search/category-skate/"
                            class=" c-navi-new__big-display-title"><span>اسکیت و اسکوتر</span></a><a
                            data-snt-event="dkMegaMenuClick"
                            data-snt-params='{"type":"option-title","category_title":"اسکیت و اسکوتر"}'
                            href="/search/category-skate/" class=" c-navi-new__medium-display-title"><span>اسکیت و اسکوتر</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="c-navi-new__ads js-categories-ad ad-is-active" id="categories-ad-1">
                    <div class="c-navi-new__ads--banners"><a data-id="66229" class="js-menu-top-banner"
                                                             href="https://www.digikala.com/product/dkp-3940558/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%B4%D8%A7%D8%AA%D9%84&promo_position=sponsored_menu_top&promo_creative=66229&bCode=66229">
                        <div class="banner-item"><img
                            src="https://dkstatics-public.digikala.com/digikala-adservice-banners/2663e785f54221746ff1fb34e7311690116e7544_1615879104.jpg?x-oss-process=image/quality,q_80"
                            alt="پارتنرشیپ - شاتل 1"/>
                          <div class="c-adplacement__badge
        banner-item-ad"
                          >
                            <div class="c-adplacement__badge-container ">
                              <div class="c-adplacement__badge-container--img"><img
                                  src="https://www.digikala.com/static/files/52672319.svg"><span
                                  class="c-adplacement__badge-container--txt">Ad</span></div>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="c-navi-new__ads--brand-holder"><h3>برند های ویژه</h3>
                      <div class="c-navi-new__ads--brands"><a data-id="52844" class="js-menu-ad-brands"
                                                              href="https://www.digikala.com/brand-landing/huawei/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%87%D9%88%D8%A2%D9%88%DB%8C&promo_position=sponsored_menu_brand&promo_creative=52844&bCode=52844">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6828b3f1b07bb71b1d44be139f0dd2afe4b6c880_1606296019.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - هوآوی 1"/></div>
                        </a><a data-id="52845" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand-landing/honor/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A2%D9%86%D8%B1&promo_position=sponsored_menu_brand&promo_creative=52845&bCode=52845">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/9c27e99bd196637bfdaf8752469f8a8b23e8649b_1606296394.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - آنر 2"/></div>
                        </a><a data-id="52846" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/samsung/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%B3%D8%A7%D9%85%D8%B3%D9%88%D9%86%DA%AF&promo_position=sponsored_menu_brand&promo_creative=52846&bCode=52846">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/f8adce2255e477573595bc1d98712d9f7bed8ff9_1606296448.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - سامسونگ 3"/></div>
                        </a></div>
                    </div>
                  </div>
                  <div class="c-navi-new__ads js-categories-ad " id="categories-ad-3">
                    <div class="c-navi-new__ads--banners"><a data-id="53253" class="js-menu-top-banner"
                                                             href="https://www.digikala.com/brand/arian-nakh-baf/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%B2%DB%8C&promo_position=sponsored_menu_top&promo_creative=53253&bCode=53253">
                        <div class="banner-item"><img
                            src="https://dkstatics-public.digikala.com/digikala-adservice-banners/a715177eb6da9aa0e088718fa9caa726bbf7922c_1614437089.jpg?x-oss-process=image/quality,q_80"
                            alt="پارتنرشیپ - زی 1"/>
                          <div class="c-adplacement__badge
        banner-item-ad"
                          >
                            <div class="c-adplacement__badge-container ">
                              <div class="c-adplacement__badge-container--img"><img
                                  src="https://www.digikala.com/static/files/52672319.svg"><span
                                  class="c-adplacement__badge-container--txt">Ad</span></div>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="c-navi-new__ads--brand-holder"><h3>برند های ویژه</h3>
                      <div class="c-navi-new__ads--brands"><a data-id="52853" class="js-menu-ad-brands"
                                                              href="https://www.digikala.com/brand/arian-nakh-baf/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A2%D8%B1%DB%8C%D8%A7%D9%86+%D9%86%D8%AE+%D8%A8%D8%A7%D9%81&promo_position=sponsored_menu_brand&promo_creative=52853&bCode=52853">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/5d33994d86b4ff67cac866d02037591609fc68d6_1606297569.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - آریان نخ باف 1"/></div>
                        </a><a data-id="52854" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand-landing/charmara/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%DA%86%D8%B1%D9%85+%D8%A2%D8%B1%D8%A7&promo_position=sponsored_menu_brand&promo_creative=52854&bCode=52854">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/e1b981e0d708d93a0df7f67ed57ee5063be159f2_1606297664.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - چرم آرا 2"/></div>
                        </a><a data-id="52855" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/maya-maahak/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%85%D8%A7%DB%8C%D8%A7+%D9%85%D8%A7%D9%87%DA%A9&promo_position=sponsored_menu_brand&promo_creative=52855&bCode=52855">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/7ffbacec116ffe825fa1d9aaf588248241713cdd_1606297831.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - مایا ماهک 3"/></div>
                        </a></div>
                    </div>
                  </div>
                  <div class="c-navi-new__ads js-categories-ad " id="categories-ad-4">
                    <div class="c-navi-new__ads--banners"><a data-id="52868" class="js-menu-top-banner"
                                                             href="https://www.digikala.com/brand/molfix/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%85%D9%88%D9%84%D9%81%DB%8C%DA%A9%D8%B3&promo_position=sponsored_menu_top&promo_creative=52868&bCode=52868">
                        <div class="banner-item"><img
                            src="https://dkstatics-public.digikala.com/digikala-adservice-banners/a65784083736a7280f2a4cf85a30090ed1d962e5_1606300149.jpg?x-oss-process=image/quality,q_80"
                            alt="پارتنرشیپ - مولفیکس 1"/>
                          <div class="c-adplacement__badge
        banner-item-ad"
                          >
                            <div class="c-adplacement__badge-container ">
                              <div class="c-adplacement__badge-container--img"><img
                                  src="https://www.digikala.com/static/files/52672319.svg"><span
                                  class="c-adplacement__badge-container--txt">Ad</span></div>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="c-navi-new__ads--brand-holder"><h3>برند های ویژه</h3>
                      <div class="c-navi-new__ads--brands"><a data-id="52869" class="js-menu-ad-brands"
                                                              href="https://www.digikala.com/brand/cross/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%DA%A9%D8%B1%D8%A7%D8%B3&promo_position=sponsored_menu_brand&promo_creative=52869&bCode=52869">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/3679d1a2d4ada50bacfb3171a6ec36f8f8ba15a2_1606300210.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - کراس 1"/></div>
                        </a><a data-id="52870" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/panberes/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%BE%D9%86%D8%A8%D9%87+%D8%B1%DB%8C%D8%B2&promo_position=sponsored_menu_brand&promo_creative=52870&bCode=52870">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/f2703315d28026a5a3c67de1fc4761d2cef9cc86_1606300286.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - پنبه ریز 2"/></div>
                        </a><a data-id="52871" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/firooz/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%81%DB%8C%D8%B1%D9%88%D8%B2&promo_position=sponsored_menu_brand&promo_creative=52871&bCode=52871">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/c4fe81d9ee7e6edacd5024f29588b61aed9db29a_1606300327.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - فیروز 3"/></div>
                        </a></div>
                    </div>
                  </div>
                  <div class="c-navi-new__ads js-categories-ad " id="categories-ad-5">
                    <div class="c-navi-new__ads--banners"><a data-id="64974" class="js-menu-top-banner"
                                                             href="https://www.digikala.com/search/category-coffee/?q=sharan&sortby=4&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%B4%D8%A7%D8%B1%D8%A7%D9%86&promo_position=sponsored_menu_top&promo_creative=64974&bCode=64974">
                        <div class="banner-item"><img
                            src="https://dkstatics-public.digikala.com/digikala-adservice-banners/e4d39ae4b47cd438d7114d4ab476bd7329e094ef_1615037772.jpg?x-oss-process=image/quality,q_80"
                            alt="پارتنرشیپ - شاران 1"/>
                          <div class="c-adplacement__badge
        banner-item-ad"
                          >
                            <div class="c-adplacement__badge-container ">
                              <div class="c-adplacement__badge-container--img"><img
                                  src="https://www.digikala.com/static/files/52672319.svg"><span
                                  class="c-adplacement__badge-container--txt">Ad</span></div>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="c-navi-new__ads--brand-holder"><h3>برند های ویژه</h3>
                      <div class="c-navi-new__ads--brands"><a data-id="52876" class="js-menu-ad-brands"
                                                              href="https://www.digikala.com/brand/do-ghazal/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%DA%AF%D9%84%D8%B3%D8%AA%D8%A7%D9%86&promo_position=sponsored_menu_brand&promo_creative=52876&bCode=52876">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/cf90ea4228d3a2cd44289db2bca2180aa2cd4a59_1608642353.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - دو غزال 1"/></div>
                        </a><a data-id="52877" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand-landing/multicafe/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%85%D9%88%D9%84%D8%AA%DB%8C+%DA%A9%D8%A7%D9%81%D9%87&promo_position=sponsored_menu_brand&promo_creative=52877&bCode=52877">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/95e6c84461387256316f29e374e7352e29c58f33_1606300890.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - مولتی کافه 2"/></div>
                        </a><a data-id="52878" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/mostafavi/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%85%D8%B5%D8%B7%D9%81%D9%88%DB%8C&promo_position=sponsored_menu_brand&promo_creative=52878&bCode=52878">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/12cbf8d8a6214a8d3e42853ded01b2394ee8b178_1606300963.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - مصطفوی 3"/></div>
                        </a></div>
                    </div>
                  </div>
                  <div class="c-navi-new__ads js-categories-ad " id="categories-ad-6">
                    <div class="c-navi-new__ads--banners"><a data-id="64903" class="js-menu-top-banner"
                                                             href="https://www.digikala.com/brand/rossmax/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%B1%D8%B2%D9%85%DA%A9%D8%B3+-+%D9%85%D9%86%D9%88&promo_position=sponsored_menu_top&promo_creative=64903&bCode=64903">
                        <div class="banner-item"><img
                            src="https://dkstatics-public.digikala.com/digikala-adservice-banners/e30a3c32b8e0184d8679c4fecacb7c1356981ab0_1615614044.jpg?x-oss-process=image/quality,q_80"
                            alt="پارتنرشیپ - رزمکس - منو 1"/>
                          <div class="c-adplacement__badge
        banner-item-ad"
                          >
                            <div class="c-adplacement__badge-container ">
                              <div class="c-adplacement__badge-container--img"><img
                                  src="https://www.digikala.com/static/files/52672319.svg"><span
                                  class="c-adplacement__badge-container--txt">Ad</span></div>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="c-navi-new__ads--brand-holder"><h3>برند های ویژه</h3>
                      <div class="c-navi-new__ads--brands"><a data-id="52857" class="js-menu-ad-brands"
                                                              href="https://www.digikala.com/brand-landing/zi-moi/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%B2%DB%8C+%D9%85%D9%88%DB%8C&promo_position=sponsored_menu_brand&promo_creative=52857&bCode=52857">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/7215bb9fcf5145026e177da8d05bfc49a0e5f300_1606298030.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - زی موی 1"/></div>
                        </a><a data-id="52858" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/philips/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%81%DB%8C%D9%84%DB%8C%D9%BE%D8%B3&promo_position=sponsored_menu_brand&promo_creative=52858&bCode=52858">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/9de2b6fbd596c7d08d747ea5ef12bcc9f258b76d_1606298110.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - فیلیپس 2"/></div>
                        </a><a data-id="52859" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/beurer/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A8%DB%8C%D9%88%D8%B1%D8%B1&promo_position=sponsored_menu_brand&promo_creative=52859&bCode=52859">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/94a37bc92c585ee4d37b984549305868761f9156_1606298230.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - بیورر 3"/></div>
                        </a></div>
                    </div>
                  </div>
                  <div class="c-navi-new__ads js-categories-ad " id="categories-ad-7">
                    <div class="c-navi-new__ads--banners"><a data-id="52860" class="js-menu-top-banner"
                                                             href="https://www.digikala.com/brand/candy/?has_selling_stock=1&pageno=1&sortby=4&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%DA%A9%D9%86%D8%AF%DB%8C&promo_position=sponsored_menu_top&promo_creative=52860&bCode=52860">
                        <div class="banner-item"><img
                            src="https://dkstatics-public.digikala.com/digikala-adservice-banners/1f8226c4f32b961075ae267fc15e46e6b7a65839_1610266709.jpg?x-oss-process=image/quality,q_80"
                            alt="پارتنرشیپ - کندی 1"/>
                          <div class="c-adplacement__badge
        banner-item-ad"
                          >
                            <div class="c-adplacement__badge-container ">
                              <div class="c-adplacement__badge-container--img"><img
                                  src="https://www.digikala.com/static/files/52672319.svg"><span
                                  class="c-adplacement__badge-container--txt">Ad</span></div>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="c-navi-new__ads--brand-holder"><h3>برند های ویژه</h3>
                      <div class="c-navi-new__ads--brands"><a data-id="52861" class="js-menu-ad-brands"
                                                              href="https://www.digikala.com/brand-landing/snowa/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A7%D8%B3%D9%86%D9%88%D8%A7&promo_position=sponsored_menu_brand&promo_creative=52861&bCode=52861">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/f721789402217de68e882b77a8d946e77e6670a2_1609320835.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - اسنوا 1"/></div>
                        </a><a data-id="52862" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand-landing/x-vision/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A7%DB%8C%DA%A9%D8%B3+%D9%88%DB%8C%DA%98%D9%86&promo_position=sponsored_menu_brand&promo_creative=52862&bCode=52862">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/25d075d92539ab59bc28d75ed6211b0b5bbd21d7_1606299369.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - ایکس ویژن 2"/></div>
                        </a><a data-id="52863" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/emersun/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A7%D9%85%D8%B1%D8%B3%D8%A7%D9%86&promo_position=sponsored_menu_brand&promo_creative=52863&bCode=52863">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/7b345f7dfc552acf8e23e60f8fa10e0a55b74f89_1606299447.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - امرسان 3"/></div>
                        </a></div>
                    </div>
                  </div>
                  <div class="c-navi-new__ads js-categories-ad " id="categories-ad-8">
                    <div class="c-navi-new__ads--banners"><a data-id="52864" class="js-menu-top-banner"
                                                             href="https://www.digikala.com/brand-landing/panter/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%BE%D9%86%D8%AA%D8%B1&promo_position=sponsored_menu_top&promo_creative=52864&bCode=52864">
                        <div class="banner-item"><img
                            src="https://dkstatics-public.digikala.com/digikala-adservice-banners/12aedd877929e0cf205dac8f549fed2713249532_1606299615.jpg?x-oss-process=image/quality,q_80"
                            alt="پارتنرشیپ - پنتر 1"/>
                          <div class="c-adplacement__badge
        banner-item-ad"
                          >
                            <div class="c-adplacement__badge-container ">
                              <div class="c-adplacement__badge-container--img"><img
                                  src="https://www.digikala.com/static/files/52672319.svg"><span
                                  class="c-adplacement__badge-container--txt">Ad</span></div>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="c-navi-new__ads--brand-holder"><h3>برند های ویژه</h3>
                      <div class="c-navi-new__ads--brands"><a data-id="52865" class="js-menu-ad-brands"
                                                              href="https://www.digikala.com/brand/faber-castell/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%81%D8%A7%D8%A8%D8%B1+%DA%A9%D8%A7%D8%B3%D8%AA%D9%84&promo_position=sponsored_menu_brand&promo_creative=52865&bCode=52865">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6142d028fe8ef083c545d819e4a6c8c17ee9bf70_1606299711.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - فابر کاستل 1"/></div>
                        </a><a data-id="52866" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/staedtler/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A7%D8%B3%D8%AA%D8%AF%D9%84%D8%B1&promo_position=sponsored_menu_brand&promo_creative=52866&bCode=52866">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/f7269661f943c9279682b2c448dcc3c8699e6b9d_1606299775.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - استدلر 2"/></div>
                        </a><a data-id="52867" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/mohtasham/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%85%D8%AD%D8%AA%D8%B4%D9%85&promo_position=sponsored_menu_brand&promo_creative=52867&bCode=52867">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/e058c0446b164b690a6b1441a425dba2fd3945e0_1606299993.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - محتشم 3"/></div>
                        </a></div>
                    </div>
                  </div>
                  <div class="c-navi-new__ads js-categories-ad " id="categories-ad-9">
                    <div class="c-navi-new__ads--banners"><a data-id="55137" class="js-menu-top-banner"
                                                             href="https://www.digikala.com/brand-landing/mel-and-moj/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%85%D9%84+%D8%A7%D9%86%D8%AF+%D9%85%D9%88%DA%98&promo_position=sponsored_menu_top&promo_creative=55137&bCode=55137">
                        <div class="banner-item"><img
                            src="https://dkstatics-public.digikala.com/digikala-adservice-banners/b93182c1b48aab1a872cb6f0b3b57d19719f0f5d_1607779988.jpg?x-oss-process=image/quality,q_80"
                            alt="پارتنرشیپ - مل اند موژ 1"/>
                          <div class="c-adplacement__badge
        banner-item-ad"
                          >
                            <div class="c-adplacement__badge-container ">
                              <div class="c-adplacement__badge-container--img"><img
                                  src="https://www.digikala.com/static/files/52672319.svg"><span
                                  class="c-adplacement__badge-container--txt">Ad</span></div>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="c-navi-new__ads--brand-holder"><h3>برند های ویژه</h3>
                      <div class="c-navi-new__ads--brands"><a data-id="55138" class="js-menu-ad-brands"
                                                              href="https://www.digikala.com/brand/firo-plus/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%81%DB%8C%D8%B1%D9%88+%D9%BE%D9%84%D8%A7%D8%B3&promo_position=sponsored_menu_brand&promo_creative=55138&bCode=55138">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/7d38b4b96db3fb57c1d19c30ea0ea9e10c1b8ba1_1607780060.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - فیرو پلاس 1"/></div>
                        </a><a data-id="55139" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/delsey/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%AF%D9%84%D8%B3%DB%8C&promo_position=sponsored_menu_brand&promo_creative=55139&bCode=55139">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/ffcfa28ec1b8bf6dc316d587113862d2ec8d05c6_1607780114.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - دلسی 2"/></div>
                        </a><a data-id="55140" class="js-menu-ad-brands"
                               href="https://www.digikala.com/brand/holiday/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%87%D8%A7%D9%84%DB%8C%D8%AF%DB%8C&promo_position=sponsored_menu_brand&promo_creative=55140&bCode=55140">
                          <div class="brand-item"><img
                              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/c36c68649e35eb7edd6bfb97b582d8584f296daa_1607780180.jpg?x-oss-process=image/quality,q_80"
                              alt="پارتنرشیپ - هالیدی 3"/></div>
                        </a></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="js-categories-bar-item"><a href="/main/food-beverage/"
                                                    class="c-navi-new-list__category-link c-navi-new-list__category-link--fresh c-navi-new-list__category-link--bold">سوپرمارکت</a>
              </li>
              <li class="js-categories-bar-item js-mega-menu-main-item"><a href="/promotion-center/"
                                                                           class="c-navi-new-list__category-link c-navi-new-list__category-link--amazing c-navi-new-list__category-link--bold">تخفیف‌ها
                  و پیشنهادها</a>
                <div
                  class="c-navi-new-list__sublist c-navi-new-list__sublist--promotion js-mega-menu-categories-options">
                  <div class="c-navi-new-list__options-container">
                    <div class="c-navi-new-list__options-list is-active">
                      <div class="c-navi-new-list__sublist-top-bar"><a href="/promotion-center/"
                                                                       class="c-navi-new-list__sublist-see-all-cats">
                          مشاهده همه تخفیف‌ها و پیشنهادها
                        </a></div>
                      <ul>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"><a
                            href="/incredible-offers/"
                            class=" c-navi-new__big-display-title"><span>کالاهای شگفت‌انگیز</span></a><a
                            href="/incredible-offers/" class=" c-navi-new__medium-display-title"><span>کالاهای شگفت‌انگیز</span></a>
                        </li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"><a
                            href="/fresh-offers/"
                            class=" c-navi-new__big-display-title"><span>شگفت‌انگیز سوپرمارکتی</span></a><a
                            href="/fresh-offers/"
                            class=" c-navi-new__medium-display-title"><span>شگفت‌انگیز سوپرمارکتی</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title"><a
                            href="/landing-page/?promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title"><span>فروش ویژه</span></a><a
                            href="/landing-page/?promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title"><span>فروش ویژه</span></a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=5966&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            کالای دیجیتال
                          </a><a
                            href="/landing-page/?category%5B0%5D=5966&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            کالای دیجیتال
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=8450&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            خودرو، ابزار و تجهیزات صنعتی
                          </a><a
                            href="/landing-page/?category%5B0%5D=8450&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            خودرو، ابزار و تجهیزات صنعتی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=8749&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            مد و پوشاک
                          </a><a
                            href="/landing-page/?category%5B0%5D=8749&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            مد و پوشاک
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=6741&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            اسباب بازی، کودک و نوزاد
                          </a><a
                            href="/landing-page/?category%5B0%5D=6741&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            اسباب بازی، کودک و نوزاد
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=8895&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            کالاهای سوپرمارکتی
                          </a><a
                            href="/landing-page/?category%5B0%5D=8895&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            کالاهای سوپرمارکتی
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=5968&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            زیبایی و سلامت
                          </a><a
                            href="/landing-page/?category%5B0%5D=5968&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            زیبایی و سلامت
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=5967&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            خانه و آشپزخانه
                          </a><a
                            href="/landing-page/?category%5B0%5D=5967&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            خانه و آشپزخانه
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=8&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            کتاب، لوازم تحریر و هنر
                          </a><a
                            href="/landing-page/?category%5B0%5D=8&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            کتاب، لوازم تحریر و هنر
                          </a></li>
                        <li class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item"><a
                            href="/landing-page/?category%5B0%5D=6124&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__big-display-title">
                            ورزش و سفر
                          </a><a
                            href="/landing-page/?category%5B0%5D=6124&promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active"
                            class=" c-navi-new__medium-display-title">
                            ورزش و سفر
                          </a></li>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item c-navi-new-list__sublist-option--has-circle">
                          <a href="/promotion-center/category-based-products/22/"
                             class=" c-navi-new__big-display-title">
                            ساک و چمدان کمتر از ۱۰۰ هزار تومان
                          </a><a href="/promotion-center/category-based-products/22/"
                                 class=" c-navi-new__medium-display-title">
                            ساک و چمدان کمتر از ۱۰۰ هزار تومان
                          </a></li>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item c-navi-new-list__sublist-option--has-circle">
                          <a href="/promotion-center/category-based-products/21/"
                             class=" c-navi-new__big-display-title">
                            ماسک تنفسی کمتر از ۵۰ هزار تومان
                          </a><a href="/promotion-center/category-based-products/21/"
                                 class=" c-navi-new__medium-display-title">
                            ماسک تنفسی کمتر از ۵۰ هزار تومان
                          </a></li>
                        <div class="c-navi-new-list__sublist-divider"></div>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--has-icon c-navi-new-list__sublist-option--new-customer">
                          <a href="/landings/new-customer/" class=" c-navi-new__big-display-title">
                            مشتریان جدید
                          </a><a href="/landings/new-customer/" class=" c-navi-new__medium-display-title">
                            مشتریان جدید
                          </a></li>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--has-icon c-navi-new-list__sublist-option--best-selling">
                          <a href="/best-selling/" class=" c-navi-new__big-display-title">
                            پرفروش‌ترین‌ کالاها
                          </a><a href="/best-selling/" class=" c-navi-new__medium-display-title">
                            پرفروش‌ترین‌ کالاها
                          </a></li>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--has-icon c-navi-new-list__sublist-option--gift">
                          <a href="/promotion-center/products-with-gifts/" class=" c-navi-new__big-display-title">
                            با هر خرید هدیه بگیرید!
                          </a><a href="/promotion-center/products-with-gifts/"
                                 class=" c-navi-new__medium-display-title">
                            با هر خرید هدیه بگیرید!
                          </a></li>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--has-icon c-navi-new-list__sublist-option--last-season">
                          <a href="/promotion-page/cmp_109599/" class=" c-navi-new__big-display-title">
                            تخفیف پایان فصل
                          </a><a href="/promotion-page/cmp_109599/" class=" c-navi-new__medium-display-title">
                            تخفیف پایان فصل
                          </a></li>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--has-icon c-navi-new-list__sublist-option--gift-card">
                          <a href="/search/category-dk-ds-gift-card/" class=" c-navi-new__big-display-title">
                            کارت هدیه خرید از دیجی‌کالا
                          </a><a href="/search/category-dk-ds-gift-card/" class=" c-navi-new__medium-display-title">
                            کارت هدیه خرید از دیجی‌کالا
                          </a></li>
                        <li
                          class="c-navi-new-list__sublist-option c-navi-new-list__sublist-option--has-icon c-navi-new-list__sublist-option--new-seller-product">
                          <a href="/promotion-center/new-sellers-products/" class=" c-navi-new__big-display-title">
                            تازه‌های فروشنده‌های جدید
                          </a><a href="/promotion-center/new-sellers-products/"
                                 class=" c-navi-new__medium-display-title">
                            تازه‌های فروشنده‌های جدید
                          </a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="c-navi-new-list__main-banner"><a
                      href="https://www.digikala.com/landings/new-customer/?&promo_name=%DA%AF%D8%B1%D8%AF%D9%88%D9%86%D9%87+%D9%85%D8%B4%D8%AA%D8%B1%DB%8C%D8%A7%D9%86+%D8%AC%D8%AF%DB%8C%D8%AF&promo_position=promotion_center_mega_menu&promo_creative=62788&bCode=62788"><img
                        src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6e3a0619c2be053183dd813b45bbfd503a392075_1613543695.jpg?x-oss-process=image/quality,q_80"/></a>
                  </div>
                </div>
              </li>
              <li class="js-categories-bar-item"><a
                  class="c-navi-new-list__category-link c-navi-new-list__category-link--my-digikala c-navi-new-list__category-link--bold"
                  href="/my-digikala/">
                  دیجی‌کالای من
                </a></li>
              <li class="js-categories-bar-item js-mega-menu-main-item">
                <a
                  class="c-navi-new-list__category-link c-navi-new-list__category-link--bold c-navi-new-list__category-link--plus c-digiplus-sign--before"
                  href="/plus/landing/">
                  دیجی‌پلاس
                </a>
                <div
                  class="c-navi-new-list__sublist c-navi-new-list__sublist--digiplus js-mega-menu-categories-options">


                  <div class="c-dp-header-submenu">
                    <div class="c-dp-header-submenu__content">
                      <div class="c-dp-header-submenu__head-title">
                        خدمات ویژه کاربران <img src="https://www.digikala.com/static/files/4a2895fc.svg" alt="Digiplus">
                      </div>
                      <div class="c-dp-header-submenu__head-subtitle">
                        ارسال رایگان بدون محدودیت قیمت، هدیه نقدی و بازگشت کالا تا ۳۰ روز پس از تحویل
                      </div>
                      <ul class="c-dp-header-submenu__nav">
                        <li class="c-dp-header-submenu__nav-item c-dp-header-submenu__nav-item--register">
                          <a class="c-dp-header-submenu__register o-btn o-btn--link-blue-md"
                             href="/plus/landing/">
                            اطلاعات بیشتر و عضویت
                          </a>
                        </li>
                        <li class="c-dp-header-submenu__nav-item c-dp-header-submenu__nav-item--plus-products">
                          <a class="c-dp-header-submenu__nav-link"
                             href="/search/?only_plus=1&digiplus%5B0%5D=has_plus_cash_back">
                            کالاهای <img src="https://www.digikala.com/static/files/4a2895fc.svg" alt="Digiplus">
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="c-dp-header-submenu__banner-link"
                       href="/plus/landing/">
                      <img class="c-dp-header-submenu__banner-img"
                           src="https://www.digikala.com/static/files/38492329.jpg"
                           alt="Banner"
                      >
                    </a>
                  </div>
                </div>
              </li>
              <li class="js-categories-bar-item js-mega-menu-main-item"><a href="/digiclub/"
                                                                           class="c-navi-new-list__category-link c-navi-new-list__category-link--digiclub c-navi-new-list__category-link--bold">دیجی‌کلاب</a>
                <div
                  class="c-navi-new-list__sublist c-navi-new-list__sublist--digiclub js-mega-menu-categories-options">
                  <div class="c-dc-header-submenu">
                    <div class="c-dc-header-submenu__content">
                      <img class="c-dc-header-submenu__logo-img"
                           src="https://www.digikala.com/static/files/1c93eb76.svg"
                           alt="Digiclub"
                      >
                      <ul class="c-dc-header-submenu__nav">
                        <li class="c-dc-header-submenu__nav-item">
                          <a class="c-dc-header-submenu__nav-link c-dc-header-submenu__nav-link--main"
                             href="/digiclub/"
                          >
                            صفحه اصلی دیجی‌کلاب
                          </a>
                        </li>
                        <li class="c-dc-header-submenu__nav-item">
                          <a class="c-dc-header-submenu__nav-link c-dc-header-submenu__nav-link--rewards"
                             href="/digiclub/rewards/"
                          >
                            جوایز دیجی‌کلاب
                          </a>
                        </li>
                        <li class="c-dc-header-submenu__nav-item">
                                    <span
                                      class="c-dc-header-submenu__nav-link c-dc-header-submenu__nav-link--history c-dc-header-submenu__nav-link--disabled"
                                    >
                        تاریخچه امتیازات دیجی‌کلاب
                    </span>
                        </li>
                        <li class="c-dc-header-submenu__nav-item">
                          <a class="c-dc-header-submenu__nav-link c-dc-header-submenu__nav-link--missions"
                             href="/digiclub/missions/"
                          >
                            ماموریت‌های دیجی‌کلابی
                          </a>
                        </li>
                        <li class="c-dc-header-submenu__nav-item">
                          <a class="c-dc-header-submenu__nav-link c-dc-header-submenu__nav-link--luckydraw"
                             href="/digiclub/luckydraw/"
                          >
                            قرعه‌کشی
                            <div class="c-dc-lucky-counter c-dc-lucky-counter--header js-dc-counter u-hidden">
                              <div
                                class="c-dc-lucky-counter__time c-dc-lucky-counter__time--header c-dc-lucky-counter__time--first-child js-dc-counter-days"></div>
                              <div
                                class="c-dc-lucky-counter__time c-dc-lucky-counter__time--header js-dc-counter-hours"></div>
                              <div
                                class="c-dc-lucky-counter__time c-dc-lucky-counter__time--header js-dc-counter-minutes"></div>
                              <div
                                class="c-dc-lucky-counter__time c-dc-lucky-counter__time--header js-dc-counter-seconds"></div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="c-dc-header-submenu__banner-link"
                       href="https://dgka.la/dcdkhomepaege"
                    >
                      <img class="c-dc-header-submenu__banner-img"
                           src="https://dkstatics-public.digikala.com/digiclub/53aa31f81138fd588df842086e152102979a00d7_1601458094.jpg"
                           alt=""
                      >
                    </a>
                  </div>
                </div>
              </li>
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
          <li class="c-navi-new-list__categories">
            <ul class="c-navi-new-list__category-item">
              <li class="c-navi-new-list__category c-navi-new-list__category--location  js-general-location-bar">
                <span class="c-navi-new-list__category-send-to">ارسال به </span>
                <span class="c-navi-new-list__category-location">تهران، صفادشت</span>
              </li>
            </ul>
          </li>
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

          <input type="hidden"
                 id="ESILogged" data-logged=0/>

        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="c-navi-categories__overlay js-navi-overlay"></div>
<main id="main">
  <div id="HomePageTopBanner"></div>
  <div id="content">

{{--    <script type="text/html" id="emarsys-template"><![CDATA[--}}

{{--      {{ if (SC.page.products.length) { }}--}}
{{--      <div class="swiper-container swiper-container-horizontal js-swiper-emarsys js-snt-carousel"--}}
{{--           data-snt-carousel-length="{{= SC.page.products.length }}">--}}
{{--        <div class="swiper-wrapper">--}}
{{--          {{ for (var loopIndex=0; loopIndex< SC.page.products.length; loopIndex++) { }}--}}
{{--          {{ var p = SC.page.products[loopIndex]; }}--}}
{{--          <div class="swiper-slide" data-carousel="{{= SC.recommender.container.id}}" data-id="{{= p.id }}"><a--}}
{{--              data-snt-event="dkRecommendationClick"--}}
{{--              data-snt-params='{"type":"carousel","item":"product-click","item_option":"{{= p.id }}"}'--}}
{{--              class="c-product-box js-url js-snt-carousel_product" data-scarabitem="{{= p.id }}"--}}
{{--              data-snt-position="{{= loopIndex+1 }}" title="{{=  p.title}}"--}}
{{--              href="{{= p.link.replace('http://www.digikala.com/', '/').replace('https://www.digikala.com/', '/').toLowerCase() }}"><span--}}
{{--                class="c-product-box__img"><img alt="{{=  p.title }}" width="350"--}}
{{--                                                src="{{= p.image.replace('http://', '//').replace('/120/', '/220/') }}"--}}
{{--                                                class="swiper-lazy">--}}
{{--                                    {{if(p.c_fast_shopping_badge){}}--}}
{{--                                        <img class="c-product-box__fmcg-symbol js-fresh-badge" src="/fresh-badge.svg">--}}
{{--                                    {{ } }}--}}
{{--                                </span><span--}}
{{--                class="c-product-box__title">{{= p.title.substr(0, 50) + (p.title.length > 50 ? '...' : '') }}</span>--}}
{{--              <div class="c-product-box__price-row">--}}
{{--                <div class="c-product-box__price-item">--}}
{{--                  <div class="c-new-price">--}}
{{--                    <div class="c-new-price__old-value">--}}
{{--                      {{ if (p.msrp  > p.price) { }}--}}
{{--                      <del>{{= Emarsys.convertToFaDigit(Emarsys.formatCurrency(p.msrp, false, '' ))}}</del>--}}
{{--                      <span class="c-new-price__discount">{{= Emarsys.convertToFaDigit(Math.round((p.msrp - p.price) / p.msrp * 100) + '') }}٪</span>--}}
{{--                      {{ } }}--}}
{{--                    </div>--}}
{{--                    <div class="c-new-price__value">--}}
{{--                      {{= Emarsys.convertToFaDigit(Emarsys.formatCurrency(p.price, false, '' ))}}--}}
{{--                      <span class="c-new-price__currency">تومان</span></div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </a></div>--}}
{{--          {{ } }}--}}
{{--        </div>--}}
{{--        <div data-snt-event="dkRecommendationClick"--}}
{{--             data-snt-params='{"type":"carousel","item":"nav-click","item_option":"right"}'--}}
{{--             class="swiper-button-prev js-swiper-button-prev"></div>--}}
{{--        <div data-snt-event="dkRecommendationClick"--}}
{{--             data-snt-params='{"type":"carousel","item":"nav-click","item_option":"right"}'--}}
{{--             class="swiper-button-next js-swiper-button-next"></div>--}}
{{--      </div>--}}
{{--      {{ } }}--}}

{{--      ]]></script>--}}

    <article class="container container--home">
      <div class="o-page">
        <div class="o-page__row o-page__row--main-top">
          <aside class="c-adplacement c-adplacement__margin-bottom"><a
              href="https://www.digikala.com/main/food-beverage/?&promo_name=%D8%B3%DB%8C%D9%86+%D9%85%D8%AB%D9%84+%D8%B3%D9%88%D9%BE%D8%B1%D9%85%D8%A7%D8%B1%DA%A9%D8%AA&promo_position=home_top_slider&promo_creative=65895&bCode=65895"
              class="c-adplacement__item"
              data-id="65895"
              target="_blank"
              title="سین مثل سوپرمارکت"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/f0945e8dce44e8e5ccc03e76f9a8c9335ba594f9_1615705561.jpg?x-oss-process=image/quality,q_80"
                alt="سین مثل سوپرمارکت" loading="lazy"/></a></aside>
          <div class="o-page__two-thirds o-page__two-thirds--right">
            <section class="c-adplacement-head-slider c-adplacement-head-slider--home">
              <div class="c-swiper c-swiper--promo-box c-main-slider-container ">
                <div class="swiper-container swiper-container-horizontal js-main-page-slider">
                  <div class="swiper-wrapper dkms-placement-slider c-adplacement" data-dkms="1"><a
                      href="https://www.digikala.com/?ref=nav_logo&promo_name=%D8%AA%D8%A8%D8%B1%DB%8C%DA%A9+%D8%B3%D8%A7%D9%84+%D9%86%D9%88&promo_position=home_slider_new&promo_creative=66475&bCode=66475"
                      class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                      title="تبریک سال نو"
                      data-id="66475"
                      data-is-trackable=""
                      target="_blank"
                      style="background-image: url('https://dkstatics-public.digikala.com/digikala-adservice-banners/52640feb5c611727f7bd6aeab8843ed39825edb3_1616094457.jpg?x-oss-process=image/quality,q_80')"></a><a
                      href="https://www.digikala.com/product-list/plp_4077788/?has_ship_by_seller=1&pageno=1&sortby=4&promo_name=%DA%A9%D8%AF+%D8%AA%D8%AE%D9%81%DB%8C%D9%81+%D8%A7%D8%B1%D8%B3%D8%A7%D9%84+%D8%AA%D9%88%D8%B3%D8%B7+%D9%81%D8%B1%D9%88%D8%B4%D9%86%D8%AF%D9%87&promo_position=home_slider_new&promo_creative=61210&bCode=61210"
                      class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                      title="کد تخفیف ارسال توسط فروشنده"
                      data-id="61210"
                      data-is-trackable=""
                      target="_blank"
                      style="background-image: url('https://dkstatics-public.digikala.com/digikala-adservice-banners/2a97987d206ff5d27414b28a2e69a593e97d4a3f_1616015161.jpg?x-oss-process=image/quality,q_80')"></a><a
                      href="https://www.digikala.com/landings/stock-clearance/?&promo_name=%D8%A7%D9%86%D8%A8%D8%A7%D8%B1%D8%AA%DA%A9%D8%A7%D9%86%DB%8C&promo_position=home_slider_new&promo_creative=65528&bCode=65528"
                      class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                      title="انبارتکانی"
                      data-id="65528"
                      data-is-trackable=""
                      target="_blank"
                      style="background-image: url('https://dkstatics-public.digikala.com/digikala-adservice-banners/374b1f4091eb6f61a5bee8f2cd98564a8bd80737_1615896748.jpg?x-oss-process=image/quality,q_80')"></a><a
                      href="https://www.digikala.com/users/referral/?&promo_name=%D8%AF%D8%B9%D9%88%D8%AA+%D9%BE%D8%B1+%D8%AC%D8%A7%DB%8C%D8%B2%D9%87&promo_position=home_top_slider&promo_creative=60843&bCode=60843"
                      class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                      title="دعوت پر جایزه"
                      data-id="60843"
                      data-is-trackable=""
                      target="_blank"
                      style="background-image: url('https://dkstatics-public.digikala.com/digikala-adservice-banners/3288a90d81389270095e95c992fc13ed08fc61e2_1614148977.jpg?x-oss-process=image/quality,q_80')"></a><a
                      href="https://www.digikala.com/search/category-digikala-gift-card/?price[min]=20000&price[max]=557001&pageno=1&sortby=4&promo_name=%DA%A9%D8%A7%D8%B1%D8%AA+%D9%87%D8%AF%DB%8C%D9%87&promo_position=home_slider_new&promo_creative=65927&bCode=65927"
                      class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                      title="کارت هدیه"
                      data-id="65927"
                      data-is-trackable=""
                      target="_blank"
                      style="background-image: url('https://dkstatics-public.digikala.com/digikala-adservice-banners/d5390395972a5ed826cdc34cf799b663ae581859_1615738577.jpg?x-oss-process=image/quality,q_80')"></a><a
                      href="https://www.digikala.com/product/dkp-3940558/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%B4%D8%A7%D8%AA%D9%84&promo_position=home_slider_new&promo_creative=66000&bCode=66000"
                      class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                      title="پارتنرشیپ - شاتل"
                      data-id="66000"
                      data-is-trackable=""
                      target="_blank"
                      style="background-image: url('https://dkstatics-public.digikala.com/digikala-adservice-banners/520a49df9a41a7da2e718f1566f2cb55d0c394f1_1615726035.jpg?x-oss-process=image/quality,q_80')"></a><a
                      href="https://www.digikala.com/brand/pril/?category[0]=6920&has_selling_stock=1&seller_condition[0]=digikala&pageno=1&last_filter=seller_condition&last_value=digikala&sortby=1&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%BE%D8%B1%DB%8C%D9%84&promo_position=home_slider_new&promo_creative=66089&bCode=66089"
                      class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                      title="پارتنرشیپ - پریل"
                      data-id="66089"
                      data-is-trackable=""
                      target="_blank"
                      style="background-image: url('https://dkstatics-public.digikala.com/digikala-adservice-banners/4380509862f69c20c2c968dd1d28418cb6a34f5e_1615743314.jpg?x-oss-process=image/quality,q_80')"></a><a
                      href="https://www.digikala.com/product-list/plp_3735666/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%B4%D8%A7%D9%88%D9%85%D8%A7&promo_position=home_slider_new&promo_creative=66180&bCode=66180"
                      class="c-main-slider__slide swiper-slide js-main-page-slider-image"
                      title="پارتنرشیپ - شاوما"
                      data-id="66180"
                      data-is-trackable=""
                      target="_blank"
                      style="background-image: url('https://dkstatics-public.digikala.com/digikala-adservice-banners/6c43546b54ca1b271c16d5aae1cec93dae3592ec_1615807848.jpg?x-oss-process=image/quality,q_80')"></a>
                  </div>
                  <div class="swiper-pagination c-main-slider__actions"></div>
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>
                </div>
              </div>
            </section>
          </div>
          <div class="o-page__one-thirds o-page__one-thirds--left">
            <aside class="c-adplacement c-adplacement__container-column"><a
                href="https://www.digikala.com/product-list/plp_4108772/?&promo_name=%D8%A8%D9%87+%D8%B5%D8%B1%D9%81%D9%87+%D8%AA%D8%B1%DB%8C%D9%86+%D8%B3%D9%88%D9%BE%D8%B1%D9%85%D8%A7%D8%B1%DA%A9%D8%AA+%D8%B4%D9%87%D8%B1&promo_position=home_left_banner_top&promo_creative=66415&bCode=66415"
                class="c-adplacement__item c-adplacement__item--column js-banner-impression-adro"
                data-id="66415"
                data-observed="0"
                target="_blank"
                data-is-trackable=""
                title="به صرفه ترین سوپرمارکت شهر">
                <div class="c-adplacement__sponsored_box"><img
                    src="https://dkstatics-public.digikala.com/digikala-adservice-banners/d5abf2b03dd36e8bf2084365e64d2d2820865028_1616019548.jpg?x-oss-process=image/quality,q_80"
                    alt="به صرفه ترین سوپرمارکت شهر" loading="lazy"/></div>
              </a><a
                href="https://www.digistyle.com/landings/nowruz/?utm_source=DIGIKALA&utm_medium=LftBnr&utm_campaign=Sale%20no%20%2C%20Style%20no&utm_content=Weekly%2023Esfand&promo_name=%D8%B3%D8%A7%D9%84+%D9%86%D9%88%D8%8C%D8%A7%D8%B3%D8%AA%D8%A7%DB%8C%D9%84+%D9%86%D9%88&promo_position=home_left_banner_bottom&promo_creative=65630&bCode=65630"
                class="c-adplacement__item c-adplacement__item--column js-banner-impression-adro"
                data-id="65630"
                data-observed="0"
                target="_blank"
                data-is-trackable=""
                title="سال نو،استایل نو">
                <div class="c-adplacement__sponsored_box"><img
                    src="https://dkstatics-public.digikala.com/digikala-adservice-banners/c88809ee50a6939350959308b882efeaa7e5d463_1615493439.jpg?x-oss-process=image/quality,q_80"
                    alt="سال نو،استایل نو" loading="lazy"/></div>
              </a></aside>
          </div>
        </div>
      </div>
    </article>
    <script>
      var carouselDataTracker = {
        "carouselPosition": "INCREDIBLE-OFFER",
        "id": "sn-carousels-incredible-offer",
        "title": "\u067e\u06cc\u0634\u0646\u0647\u0627\u062f \u0634\u06af\u0641\u062a\u200c\u0627\u0646\u06af\u06cc\u0632",
        "title_en": "incredible offer",
        "products": [{
          "id": 3945007,
          "name": "\u0627\u062a\u0648 \u0628\u062e\u0627\u0631 \u06a9\u0648\u067e\u06a9\u0633 \u0645\u062f\u0644 CS-7570",
          "price": 9980000,
          "category": "\u0627\u062a\u0648",
          "brand": "\u06a9\u0648\u067e\u06a9\u0633",
          "position": 1,
          "status": "marketable"
        }, {
          "id": 4654078,
          "name": "\u06a9\u06cc\u0641 \u0631\u0648\u062f\u0648\u0634\u06cc \u0632\u0646\u0627\u0646\u0647 \u0628\u0631\u062a\u0648\u0646\u06cc\u06a9\u0633 \u0645\u062f\u0644 443",
          "price": 2470000,
          "category": "Women Bags",
          "brand": "\u0628\u0631\u062a\u0648\u0646\u06cc\u06a9\u0633",
          "position": 2,
          "status": "marketable"
        }, {
          "id": 3350088,
          "name": "\u06a9\u0641\u0634 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 \u0628\u06cc\u062a\u0627 \u06a9\u062f 7751",
          "price": 990000,
          "category": "WOMEN FLAT SHOES",
          "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
          "position": 3,
          "status": "marketable"
        }, {
          "id": 4214771,
          "name": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u06cc\u06a9\u0633 \u0627\u0648 \u0645\u062f\u0644 PR102 \u0638\u0631\u0641\u06cc\u062a 10000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
          "price": 2490000,
          "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
          "brand": "XO",
          "position": 4,
          "status": "marketable"
        }, {
          "id": 2540229,
          "name": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f \u0645\u062f\u0644 TD28",
          "price": 5990000,
          "category": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f",
          "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
          "position": 5,
          "status": "marketable"
        }, {
          "id": 3124551,
          "name": "\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647 \u0648\u06cc\u0646\u0633\u06cc\u06a9 \u0645\u062f\u0644 STUDY",
          "price": 2890000,
          "category": "\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647",
          "brand": "Vinsic",
          "position": 6,
          "status": "marketable"
        }, {
          "id": 2650819,
          "name": "\u0633\u0627\u0639\u062a \u0645\u0686\u06cc \u0639\u0642\u0631\u0628\u0647 \u0627\u06cc \u0633\u0648\u067e\u0631\u062f\u0631\u0627\u06cc \u0645\u062f\u0644 SYG198UO",
          "price": 5090000,
          "category": "UNI Analouge Watches",
          "brand": "Superdry",
          "position": 7,
          "status": "marketable"
        }, {
          "id": 3872197,
          "name": "\u0633\u062a \u0633\u0648\u06cc\u0634\u0631\u062a \u0648 \u0634\u0644\u0648\u0627\u0631 \u067e\u0633\u0631\u0627\u0646\u0647 \u0645\u062f\u0644 SH-5K",
          "price": 1150000,
          "category": "BOYS Homewear Sets",
          "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
          "position": 8,
          "status": "marketable"
        }, {
          "id": 4583889,
          "name": "\u062a\u06cc \u0634\u0631\u062a \u0632\u0646\u0627\u0646\u0647 \u0627\u0633\u067e\u06cc\u0648\u0631 \u0645\u062f\u0644 2W03M-01",
          "price": 890000,
          "category": "WOMEN TEE-SHIRTS & POLOS",
          "brand": "\u0627\u0633\u067e\u06cc\u0648\u0631",
          "position": 9,
          "status": "marketable"
        }, {
          "id": 3951143,
          "name": " \u0645\u0627\u0634\u06cc\u0646 \u0628\u0627\u0632\u06cc \u0633\u06af\u0647\u0627\u06cc \u0646\u06af\u0647\u0628\u0627\u0646 \u0645\u062f\u0644 99C  \u0645\u062c\u0645\u0648\u0639\u0647 9 \u0639\u062f\u062f\u06cc",
          "price": 2993000,
          "category": "\u0645\u0627\u0634\u06cc\u0646",
          "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
          "position": 10,
          "status": "marketable"
        }, {
          "id": 3501805,
          "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b \u0631\u06cc\u0645\u06a9\u0633 \u0645\u062f\u0644 RB-S28",
          "price": 4200000,
          "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
          "brand": "\u0631\u06cc\u0645\u06a9\u0633",
          "position": 11,
          "status": "marketable"
        }, {
          "id": 2759019,
          "name": "\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646 \u06a9\u06cc\u0648\u0644\u062f \u0647\u0648\u0634\u0645\u0646\u062f \u067e\u0627\u0646\u0648\u0631\u0627\u0645\u06cc\u06a9 \u0645\u062f\u0644 PA-50SA3657 \u0633\u0627\u06cc\u0632 50 \u0627\u06cc\u0646\u0686",
          "price": 99190000,
          "category": "\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646",
          "brand": "\u067e\u0627\u0646\u0648\u0631\u0627\u0645\u06cc\u06a9",
          "position": 12,
          "status": "marketable"
        }]
      };
      if (carouselDataTracker) {
        if (!window.carouselData)
          window.carouselData = [carouselDataTracker];
        else
          window.carouselData.push(carouselDataTracker);
      }
    </script>
    <script>
      window.dataLayer.push({
        "event": "eec.productImpression", "ecommerce": {
          "currencyCode": "EUR",
          "impressions": [{
            "name": "\u0627\u062a\u0648 \u0628\u062e\u0627\u0631 \u06a9\u0648\u067e\u06a9\u0633 \u0645\u062f\u0644 CS-7570",
            "id": 3945007,
            "price": 9980000,
            "brand": "\u06a9\u0648\u067e\u06a9\u0633",
            "category": "\u0627\u062a\u0648",
            "list": "category-\u0627\u062a\u0648",
            "position": 1,
            "dimension6": 1,
            "dimension2": 31,
            "dimension9": 0,
            "metric6": 0,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u06a9\u06cc\u0641 \u0631\u0648\u062f\u0648\u0634\u06cc \u0632\u0646\u0627\u0646\u0647 \u0628\u0631\u062a\u0648\u0646\u06cc\u06a9\u0633 \u0645\u062f\u0644 443",
            "id": 4654078,
            "price": 2470000,
            "brand": "\u0628\u0631\u062a\u0648\u0646\u06cc\u06a9\u0633",
            "category": "\u06a9\u06cc\u0641 \u0632\u0646\u0627\u0646\u0647",
            "list": "category-\u06a9\u06cc\u0641 \u0632\u0646\u0627\u0646\u0647",
            "position": 2,
            "dimension6": 1,
            "dimension2": 47,
            "dimension9": 0,
            "metric6": 0,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u06a9\u0641\u0634 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 \u0628\u06cc\u062a\u0627 \u06a9\u062f 7751",
            "id": 3350088,
            "price": 990000,
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u06a9\u0641\u0634 \u062a\u062e\u062a \u0632\u0646\u0627\u0646\u0647",
            "list": "category-\u06a9\u0641\u0634 \u062a\u062e\u062a \u0632\u0646\u0627\u0646\u0647",
            "position": 3,
            "dimension6": 1,
            "dimension2": 25,
            "dimension9": 4,
            "metric6": 40,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u06cc\u06a9\u0633 \u0627\u0648 \u0645\u062f\u0644 PR102 \u0638\u0631\u0641\u06cc\u062a 10000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
            "id": 4214771,
            "price": 2490000,
            "brand": "\u0627\u06cc\u06a9\u0633 \u0627\u0648",
            "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
            "list": "category-\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
            "position": 4,
            "dimension6": 1,
            "dimension2": 60,
            "dimension9": 0,
            "metric6": 0,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f \u0645\u062f\u0644 TD28",
            "id": 2540229,
            "price": 5990000,
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f",
            "list": "category-\u0633\u0627\u0639\u062a \u0647\u0648\u0634\u0645\u0646\u062f",
            "position": 5,
            "dimension6": 1,
            "dimension2": 36,
            "dimension9": 3.6,
            "metric6": 16,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647 \u0648\u06cc\u0646\u0633\u06cc\u06a9 \u0645\u062f\u0644 STUDY",
            "id": 3124551,
            "price": 2890000,
            "brand": "\u0648\u06cc\u0646\u0633\u06cc\u06a9",
            "category": "\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647",
            "list": "category-\u0686\u0631\u0627\u063a \u0645\u0637\u0627\u0644\u0639\u0647",
            "position": 6,
            "dimension6": 1,
            "dimension2": 39,
            "dimension9": 4.4,
            "metric6": 33,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u0633\u0627\u0639\u062a \u0645\u0686\u06cc \u0639\u0642\u0631\u0628\u0647 \u0627\u06cc \u0633\u0648\u067e\u0631\u062f\u0631\u0627\u06cc \u0645\u062f\u0644 SYG198UO",
            "id": 2650819,
            "price": 5090000,
            "brand": "\u0633\u0648\u067e\u0631\u062f\u0631\u0627\u06cc",
            "category": "\u0633\u0627\u0639\u062a \u0639\u0642\u0631\u0628\u0647 \u0627\u06cc \u0632\u0646\u0627\u0646\u0647 \u0648 \u0645\u0631\u062f\u0627\u0646\u0647",
            "list": "category-\u0633\u0627\u0639\u062a \u0639\u0642\u0631\u0628\u0647 \u0627\u06cc \u0632\u0646\u0627\u0646\u0647 \u0648 \u0645\u0631\u062f\u0627\u0646\u0647",
            "position": 7,
            "dimension6": 1,
            "dimension2": 42,
            "dimension9": 0,
            "metric6": 0,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u0633\u062a \u0633\u0648\u06cc\u0634\u0631\u062a \u0648 \u0634\u0644\u0648\u0627\u0631 \u067e\u0633\u0631\u0627\u0646\u0647 \u0645\u062f\u0644 SH-5K",
            "id": 3872197,
            "price": 1150000,
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u067e\u0633\u0631\u0627\u0646\u0647",
            "list": "category-\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u067e\u0633\u0631\u0627\u0646\u0647",
            "position": 8,
            "dimension6": 1,
            "dimension2": 32,
            "dimension9": 3.5,
            "metric6": 4,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u062a\u06cc \u0634\u0631\u062a \u0632\u0646\u0627\u0646\u0647 \u0627\u0633\u067e\u06cc\u0648\u0631 \u0645\u062f\u0644 2W03M-01",
            "id": 4583889,
            "price": 890000,
            "brand": "\u0627\u0633\u067e\u06cc\u0648\u0631",
            "category": "\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0632\u0646\u0627\u0646\u0647",
            "list": "category-\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0632\u0646\u0627\u0646\u0647",
            "position": 9,
            "dimension6": 1,
            "dimension2": 53,
            "dimension9": 0,
            "metric6": 0,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": " \u0645\u0627\u0634\u06cc\u0646 \u0628\u0627\u0632\u06cc \u0633\u06af\u0647\u0627\u06cc \u0646\u06af\u0647\u0628\u0627\u0646 \u0645\u062f\u0644 99C  \u0645\u062c\u0645\u0648\u0639\u0647 9 \u0639\u062f\u062f\u06cc",
            "id": 3951143,
            "price": 2993000,
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "category": "\u0645\u0627\u0634\u06cc\u0646",
            "list": "category-\u0645\u0627\u0634\u06cc\u0646",
            "position": 10,
            "dimension6": 1,
            "dimension2": 12,
            "dimension9": 0,
            "metric6": 0,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b \u0631\u06cc\u0645\u06a9\u0633 \u0645\u062f\u0644 RB-S28",
            "id": 3501805,
            "price": 4200000,
            "brand": "\u0631\u06cc\u0645\u06a9\u0633",
            "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
            "list": "category-\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
            "position": 11,
            "dimension6": 1,
            "dimension2": 31,
            "dimension9": 4,
            "metric6": 2,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }, {
            "name": "\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646 \u06a9\u06cc\u0648\u0644\u062f \u0647\u0648\u0634\u0645\u0646\u062f \u067e\u0627\u0646\u0648\u0631\u0627\u0645\u06cc\u06a9 \u0645\u062f\u0644 PA-50SA3657 \u0633\u0627\u06cc\u0632 50 \u0627\u06cc\u0646\u0686",
            "id": 2759019,
            "price": 99190000,
            "brand": "\u067e\u0627\u0646\u0648\u0631\u0627\u0645\u06cc\u06a9",
            "category": "\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646",
            "list": "category-\u062a\u0644\u0648\u06cc\u0632\u06cc\u0648\u0646",
            "position": 12,
            "dimension6": 1,
            "dimension2": 7,
            "dimension9": 3.9,
            "metric6": 44,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "carousel-top-incredible",
            "dimension7": "incredible"
          }]
        }
      });
    </script>
    <div class="c-swiper-specials c-swiper-specials--incredible">
      <section class="container container--home" id="sn-carousels-incredible-offer"><a href="/incredible-offers/"
                                                                                       class="c-swiper-specials__title c-swiper-specials__title--incredible"
                                                                                       title="پیشنهاد شگفت‌انگیز"><img
            src="https://www.digikala.com/static/files/b6c724a0.png" alt="پیشنهاد شگفت‌انگیز">
          <div class="o-btn c-swiper-specials__btn">مشاهده همه</div>
        </a>
        <div class="c-swiper c-swiper--products c-swiper--specials">
          <div class="c-box">
            <div class="swiper-container swiper-container-horizontal js-swiper-specials">
              <div class="swiper-wrapper">
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3945007">
                  <li><a href="/product/dkp-3945007/اتو-بخار-کوپکس-مدل-cs-7570" data-id="3945007"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product" title="اتو بخار کوپکس مدل CS-7570">
                        <img alt="اتو بخار کوپکس مدل CS-7570"
                             src="https://dkstatics-public.digikala.com/digikala-products/9bb7afa4d3db0e651b089beb83419dbb9a215c2c_1607436770.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                             class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                      <div class="c-product-box__title">
                        اتو بخار کوپکس مدل CS-7570

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱,۴۵۰,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۱٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۹۹۸,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="4654078">
                  <li><a href="/product/dkp-4654078/کیف-رودوشی-زنانه-برتونیکس-مدل-443-016" data-id="4654078"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="کیف رودوشی زنانه برتونیکس مدل 443"><img alt="کیف رودوشی زنانه برتونیکس مدل 443"
                                                                          src="https://dkstatics-public.digikala.com/digikala-products/282dae330c3a6ddf1a8d523bcb77e24f71c11748_1615296302.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                          class="swiper-lazy swiper-lazy-loaded"
                                                                          loading="lazy"/></div>
                      <div class="c-product-box__title">
                        کیف رودوشی زنانه برتونیکس مدل 443

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۴۷۰,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۷٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۲۴۷,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3350088">
                  <li><a href="/product/dkp-3350088/کفش-زنانه-مدل-بیتا-کد-7751" data-id="3350088"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product" title="کفش زنانه مدل بیتا کد 7751">
                        <img alt="کفش زنانه مدل بیتا کد 7751"
                             src="https://dkstatics-public.digikala.com/digikala-products/3b4cf590f9a2a70ab4f138ad9a3d54459fdd0bc0_1599829793.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                             class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                      <div class="c-product-box__title">
                        کفش زنانه مدل بیتا کد 7751

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱۳۱,۲۰۰</del>
                            <div class="c-price__discount-oval"><span>۲۵٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۹۹,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="4214771">
                  <li><a href="/product/dkp-4214771/شارژر-همراه-ایکس-او-مدل-pr102-ظرفیت-10000-میلی-آمپر-ساعت"
                         data-id="4214771"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="شارژر همراه ایکس او مدل PR102 ظرفیت 10000 میلی آمپر ساعت"><img
                          alt="شارژر همراه ایکس او مدل PR102 ظرفیت 10000 میلی آمپر ساعت"
                          src="https://dkstatics-public.digikala.com/digikala-products/a54de9a284756532c412e621cf5c15af5557d7ff_1610372987.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                      <div class="c-product-box__title">
                        شارژر همراه ایکس او مدل PR102 ظرفیت 10000 میلی آمپر ساعت

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۶۲۳,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۶۰٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۲۴۹,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="2540229">
                  <li><a href="/product/dkp-2540229/ساعت-هوشمند-مدل-td28" data-id="2540229"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product" title="ساعت هوشمند مدل TD28"><img
                          alt="ساعت هوشمند مدل TD28"
                          src="https://dkstatics-public.digikala.com/digikala-products/119698091.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                      <div class="c-product-box__title">
                        ساعت هوشمند مدل TD28

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۹۳۰,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۶٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۵۹۹,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3124551">
                  <li><a href="/product/dkp-3124551/چراغ-مطالعه-وینسیک-مدل-study" data-id="3124551"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="چراغ مطالعه وینسیک مدل STUDY"><img alt="چراغ مطالعه وینسیک مدل STUDY"
                                                                     src="https://dkstatics-public.digikala.com/digikala-products/5801079c14877123bc6548ce1f337088426eb8a1_1595411059.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                     class="swiper-lazy swiper-lazy-loaded"
                                                                     loading="lazy"/></div>
                      <div class="c-product-box__title">
                        چراغ مطالعه وینسیک مدل STUDY

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۴۷۵,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۹٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۲۸۹,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="2650819">
                  <li><a href="/product/dkp-2650819/ساعت-مچی-عقربه-ای-سوپردرای-مدل-syg198uo" data-id="2650819"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="ساعت مچی عقربه ای سوپردرای مدل SYG198UO"><img
                          alt="ساعت مچی عقربه ای سوپردرای مدل SYG198UO"
                          src="https://dkstatics-public.digikala.com/digikala-products/120282463.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                      <div class="c-product-box__title">
                        ساعت مچی عقربه ای سوپردرای مدل SYG198UO

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۸۸۰,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۲٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۵۰۹,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3872197">
                  <li><a href="/product/dkp-3872197/ست-سویشرت-و-شلوار-پسرانه-مدل-sh-5k" data-id="3872197"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="ست سویشرت و شلوار پسرانه مدل SH-5K"><img alt="ست سویشرت و شلوار پسرانه مدل SH-5K"
                                                                           src="https://dkstatics-public.digikala.com/digikala-products/d3fc05c382dce794c365450225e06efad98d2fb5_1607498600.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                           class="swiper-lazy swiper-lazy-loaded"
                                                                           loading="lazy"/></div>
                      <div class="c-product-box__title">
                        ست سویشرت و شلوار پسرانه مدل SH-5K

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱۷۰,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۲٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۱۱۵,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="4583889">
                  <li><a href="/product/dkp-4583889/تی-شرت-زنانه-اسپیور-مدل-2w03m-01" data-id="4583889"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="تی شرت زنانه اسپیور مدل 2W03M-01"><img alt="تی شرت زنانه اسپیور مدل 2W03M-01"
                                                                         src="https://dkstatics-public.digikala.com/digikala-products/16fe3b6b13fe6f97d282e8c30d2152878a076764_1614759613.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                         class="swiper-lazy swiper-lazy-loaded"
                                                                         loading="lazy"/></div>
                      <div class="c-product-box__title">
                        تی شرت زنانه اسپیور مدل 2W03M-01

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱۸۹,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۵۳٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۸۹,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3951143">
                  <li><a href="/product/dkp-3951143/ماشین-بازی-سگهای-نگهبان-مدل-99c-مجموعه-9-عددی" data-id="3951143"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title=" ماشین بازی سگهای نگهبان مدل 99C  مجموعه 9 عددی"><img
                          alt=" ماشین بازی سگهای نگهبان مدل 99C  مجموعه 9 عددی"
                          src="https://dkstatics-public.digikala.com/digikala-products/ea2aadce02e12f135e4bcb66d3976453c2f16195_1607503601.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                      <div class="c-product-box__title">
                        ماشین بازی سگهای نگهبان مدل 99C مجموعه 9 عددی

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۳۴۰,۲۰۰</del>
                            <div class="c-price__discount-oval"><span>۱۲٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۲۹۹,۳۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="3501805">
                  <li><a href="/product/dkp-3501805/هندزفری-بلوتوث-ریمکس-مدل-rb-s28" data-id="3501805"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="هندزفری بلوتوث ریمکس مدل RB-S28"><img alt="هندزفری بلوتوث ریمکس مدل RB-S28"
                                                                        src="https://dkstatics-public.digikala.com/digikala-products/ec828c92dfc151b9665d57913586a1996409ce8e_1601839150.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                        class="swiper-lazy swiper-lazy-loaded"
                                                                        loading="lazy"/></div>
                      <div class="c-product-box__title">
                        هندزفری بلوتوث ریمکس مدل RB-S28

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۶۱۰,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۱٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۴۲۰,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-incredible-offer" data-id="2759019">
                  <li><a href="/product/dkp-2759019/تلویزیون-کیولد-هوشمند-پانورامیک-مدل-pa-50sa3657-سایز-50-اینچ"
                         data-id="2759019"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="تلویزیون کیولد هوشمند پانورامیک مدل PA-50SA3657 سایز 50 اینچ"><img
                          alt="تلویزیون کیولد هوشمند پانورامیک مدل PA-50SA3657 سایز 50 اینچ"
                          src="https://dkstatics-public.digikala.com/digikala-products/120824915.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/></div>
                      <div class="c-product-box__title">
                        تلویزیون کیولد هوشمند پانورامیک مدل PA-50SA3657 سایز 50 اینچ

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱۰,۶۷۰,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۷٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۹,۹۱۹,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide c-swiper__show-more-cart--auto-height"><a href="/incredible-offers/"
                                                                                   class="c-swiper__show-more-cart"><span></span>
                    <p>
                      مشاهده همه
                    </p></a></div>
              </div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <article class="container container--home">
      <div class="o-page">
        <div class="o-page__row"></div>
        <aside class="c-adplacement c-adplacement__container-row"><a
            href="https://www.digistyle.com/plp/plp_4050380/?sortby=26&utm_source=DIGIKALA&utm_medium=TypeA&utm_campaign=Foroush%20vije&promo_name=%D8%A8%DB%8C%D8%B4%D8%AA%D8%B1%DB%8C%D9%86+%D8%AA%D8%AE%D9%81%DB%8C%D9%81+%D9%87%D8%A7%DB%8C+%D8%A8%D9%87%D8%A7%D8%B1%DB%8C+%D8%AF%DB%8C%D8%AC%DB%8C+%D8%A7%D8%B3%D8%AA%D8%A7%DB%8C%D9%84&promo_position=home_top&promo_creative=66005&bCode=66005"
            class="c-adplacement__item js-banner-impression-adro"
            data-id="66005"
            data-observed="0"
            target="_blank"
            data-is-trackable=""
            title="بیشترین تخفیف های بهاری دیجی استایل">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/4d63d2f3a2d3580ff9b7250614a63948c4998192_1615731689.gif"
                alt="بیشترین تخفیف های بهاری دیجی استایل" loading="lazy"/></div>
          </a><a
            href="https://fidibo.com/landings/goodmood2?utm_source=site&utm_medium=digikala&utm_campaign=goodmood&promo_name=%D8%AE%D9%88%D8%B4%D8%AD%D8%A7%D9%84+%D8%A8%D8%A7+%DA%A9%D8%AA%D8%A7%D8%A8&promo_position=home_middle&promo_creative=66397&bCode=66397"
            class="c-adplacement__item js-banner-impression-adro"
            data-id="66397"
            data-observed="0"
            target="_blank"
            data-is-trackable=""
            title="خوشحال با کتاب">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/171049bba987ce52378d49324864e1b815e48332_1616014923.jpg?x-oss-process=image/quality,q_80"
                alt="خوشحال با کتاب" loading="lazy"/></div>
          </a><a
            href="https://www.digikala.com/brand-landing/molfix/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D9%85%D9%88%D9%84%D9%81%DB%8C%DA%A9%D8%B3&promo_position=home_top&promo_creative=65531&bCode=65531"
            class="c-adplacement__item js-banner-impression-adro"
            data-id="65531"
            data-observed="0"
            target="_blank"
            data-is-trackable=""
            title="پارتنرشیپ - مولفیکس">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6a477ddfff3258987c3bc76da36313229ec9ec7c_1615388874.jpg?x-oss-process=image/quality,q_80"
                alt="پارتنرشیپ - مولفیکس" loading="lazy"/></div>
          </a><a
            href="https://www.digikala.com/brand-landing/jacsaf/?&promo_name=%DA%98%DA%A9+%D8%B3%D8%A7%D9%81+%D9%BE%D8%A7%D8%B1%D8%B3&promo_position=home_top&promo_creative=65842&bCode=65842"
            class="c-adplacement__item js-banner-impression-adro"
            data-id="65842"
            data-observed="0"
            target="_blank"
            data-is-trackable=""
            title="ژک ساف پارس">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6fa2a9afb2cbf0518d6b6b3538625b69538fcaf9_1615630556.jpg?x-oss-process=image/quality,q_80"
                alt="ژک ساف پارس" loading="lazy"/></div>
          </a></aside>
      </div>
    </article>
    <script>
      var carouselDataTracker = {
        "carouselPosition": "FRESH-INCREDIBLE-OFFER",
        "id": "sn-carousels-fresh-incredible-offer",
        "title": "\u067e\u06cc\u0634\u0646\u0647\u0627\u062f \u0634\u06af\u0641\u062a \u0627\u0646\u06af\u06cc\u0632 \u0633\u0648\u067e\u0631\u0645\u0627\u0631\u06a9\u062a\u06cc",
        "title_en": "fresh incredible offer",
        "products": [{
          "id": 858014,
          "name": "\u067e\u0648\u062f\u0631 \u06a9\u06cc\u06a9 \u0631\u0648\u06cc\u0627\u0644 \u0686\u0627\u06a9\u0644\u062a \u0631\u0634\u062f \u0645\u0642\u062f\u0627\u0631 580 \u06af\u0631\u0645",
          "price": 249000,
          "category": "\u063a\u0644\u0627\u062a",
          "brand": "Roshd",
          "position": 1,
          "status": "marketable"
        }, {
          "id": 303828,
          "name": "\u0634\u0627\u0645\u067e\u0648 \u0628\u062f\u0646 \u06a9\u0631\u0645\u06cc \u0627\u06a9\u062a\u06cc\u0648 \u0645\u062f\u0644 Vanilla And Honey \u0645\u0642\u062f\u0627\u0631 400 \u06af\u0631\u0645",
          "price": 189000,
          "category": "\u0634\u0627\u0645\u067e\u0648\u06cc \u0628\u062f\u0646",
          "brand": "\u0627\u06a9\u062a\u06cc\u0648",
          "position": 2,
          "status": "marketable"
        }, {
          "id": 873438,
          "name": "\u0633\u0648\u0633\u06cc\u0633 \u0647\u0627\u062a \u062f\u0627\u06af \u0637\u0644\u0627\u06cc\u06cc 80% \u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc\u0627\u0646 \u0645\u0642\u062f\u0627\u0631 600 \u06af\u0631\u0645",
          "price": 590000,
          "category": "Sausages",
          "brand": "\u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc\u0627\u0646",
          "position": 3,
          "status": "marketable"
        }, {
          "id": 841410,
          "name": "\u0641\u0631\u0622\u0648\u0631\u062f\u0647 \u06a9\u0627\u06a9\u0627\u0626\u0648\u06cc\u06cc \u0645\u063a\u0632 \u062f\u0627\u0631 \u0634\u06cc\u0631\u06cc \u0628\u0627\u0631\u0627\u06a9\u0627 \u0645\u0642\u062f\u0627\u0631 450 \u06af\u0631\u0645",
          "price": 455000,
          "category": "\u0634\u06a9\u0644\u0627\u062a\u060c \u062a\u0627\u0641\u06cc \u0648 \u0622\u0628\u0646\u0628\u0627\u062a",
          "brand": "\u0628\u0627\u0631\u0627\u06a9\u0627",
          "position": 4,
          "status": "marketable"
        }, {
          "id": 1481847,
          "name": "\u0633\u0633 \u06af\u0648\u062c\u0647 \u0641\u0631\u0646\u06af\u06cc \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 550 \u06af\u0631\u0645",
          "price": 95000,
          "category": "\u0633\u0633",
          "brand": "Bijan",
          "position": 5,
          "status": "marketable"
        }, {
          "id": 3779682,
          "name": "\u067e\u0648\u062f\u0631 \u0645\u0627\u0634\u06cc\u0646\u06cc \u067e\u0631\u0633\u06cc\u0644 Deep Clean \u0628\u0627 \u0631\u0627\u06cc\u062d\u0647 \u0644\u0648\u0646\u062f\u0631 \u0645\u0642\u062f\u0627\u0631 4.2 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
          "price": 861000,
          "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0631\u062e\u062a",
          "brand": "Persil",
          "position": 6,
          "status": "marketable"
        }, {
          "id": 2957841,
          "name": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc 100 \u0628\u0631\u06af \u0648\u06cc\u0633\u0644 \u06a9\u062f 001 \u0628\u0633\u062a\u0647 10 \u0639\u062f\u062f\u06cc",
          "price": 409000,
          "category": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
          "brand": "Whistle",
          "position": 7,
          "status": "marketable"
        }, {
          "id": 2324736,
          "name": "\u062f\u0633\u062a\u0645\u0627\u0644 \u062d\u0648\u0644\u0647 \u0627\u06cc \u0633\u0627\u062d\u0644 \u0645\u062f\u0644 001 \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
          "price": 288000,
          "category": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
          "brand": "\u0633\u0627\u062d\u0644",
          "position": 8,
          "status": "marketable"
        }, {
          "id": 770239,
          "name": "\u0633\u0628\u0632\u06cc \u0642\u0648\u0631\u0645\u0647 \u0633\u0631\u062e \u0634\u062f\u0647 \u0645\u0646\u062c\u0645\u062f \u0646\u0648\u0628\u0631 \u0633\u0628\u0632 \u0645\u0642\u062f\u0627\u0631 400 \u06af\u0631\u0645",
          "price": 189000,
          "category": "Frozen food",
          "brand": "\u0646\u0648\u0628\u0631 \u0633\u0628\u0632",
          "position": 9,
          "status": "marketable"
        }, {
          "id": 1817056,
          "name": "\u067e\u0648\u0634\u06a9 \u0628\u0627\u0631\u0644\u06cc \u0633\u0627\u06cc\u0632 5 \u0628\u0633\u062a\u0647 34 \u0639\u062f\u062f\u06cc \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u062f\u0633\u062a\u0645\u0627\u0644 \u0645\u0631\u0637\u0648\u0628",
          "price": 1052000,
          "category": "\u067e\u0648\u0634\u06a9 \u06a9\u0648\u062f\u06a9 \u0648 \u0646\u0648\u0632\u0627\u062f",
          "brand": "\u0628\u0627\u0631\u0644\u06cc",
          "position": 10,
          "status": "marketable"
        }, {
          "id": 2522021,
          "name": "\u06a9\u0631\u0648\u0633\u0627\u0646 \u06a9\u0627\u06a9\u0627\u0626\u0648 \u067e\u0686 \u067e\u0686  \u0628\u0633\u062a\u0647 6 \u0639\u062f\u062f\u06cc",
          "price": 195000,
          "category": "\u06a9\u06cc\u06a9 \u0648 \u06a9\u0644\u0648\u0686\u0647",
          "brand": "Pech Pech",
          "position": 11,
          "status": "marketable"
        }, {
          "id": 1916402,
          "name": "\u067e\u0646\u06cc\u0631 \u067e\u06cc\u062a\u0632\u0627 \u0645\u0648\u0632\u0627\u0631\u0644\u0627 202 \u0648\u0632\u0646 500 \u06af\u0631\u0645",
          "price": 300000,
          "category": "Pizza Cheese",
          "brand": "202",
          "position": 12,
          "status": "marketable"
        }, {
          "id": 2951236,
          "name": "\u0647\u0627\u062a\u06cc \u0646\u0648\u062f\u0644 \u0628\u0627 \u0639\u0635\u0627\u0631\u0647 \u06af\u0648\u0634\u062a \u0647\u0627\u062a\u06cc \u06a9\u0627\u0631\u0627 - 77 \u06af\u0631\u0645 \u0628\u0633\u062a\u0647 5 \u0639\u062f\u062f\u06cc",
          "price": 189000,
          "category": "\u063a\u0630\u0627\u06cc \u0622\u0645\u0627\u062f\u0647 \u0648 \u0646\u06cc\u0645\u0647 \u0622\u0645\u0627\u062f\u0647",
          "brand": "Hotty Kara",
          "position": 13,
          "status": "marketable"
        }, {
          "id": 876594,
          "name": "\u06a9\u0628\u0627\u0628 \u0644\u0642\u0645\u0647 70 \u062f\u0631\u0635\u062f \u0645\u0647\u06cc\u0627 \u067e\u0631\u0648\u062a\u0626\u06cc\u0646 - 450 \u06af\u0631\u0645",
          "price": 309900,
          "category": "Frozen food",
          "brand": "Mahya Protein",
          "position": 14,
          "status": "marketable"
        }, {
          "id": 2119346,
          "name": "\u0645\u0627\u06cc\u0639 \u0633\u0641\u06cc\u062f \u06a9\u0646\u0646\u062f\u0647 \u0633\u0637\u0648\u062d \u0646\u06cc\u0627\u0631\u0648 \u0645\u062f\u0644 \u0645\u0639\u0637\u0631 \u062d\u062c\u0645 4000 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
          "price": 149000,
          "category": "\u062a\u0645\u06cc\u0632\u06a9\u0646\u0646\u062f\u0647 \u0633\u0637\u0648\u062d",
          "brand": "Niaro",
          "position": 15,
          "status": "marketable"
        }, {
          "id": 2192285,
          "name": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc \u062f\u0627\u0648 \u0645\u062f\u0644 Deeply \u062d\u062c\u0645 500 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
          "price": 371000,
          "category": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
          "brand": "Dove",
          "position": 16,
          "status": "marketable"
        }, {
          "id": 1907805,
          "name": "\u0686\u0627\u06cc \u0633\u06cc\u0627\u0647 \u06af\u0644\u0633\u062a\u0627\u0646 \u0645\u062f\u0644 \u0645\u0645\u062a\u0627\u0632 \u0647\u0646\u062f\u0648\u0633\u062a\u0627\u0646 \u0645\u0642\u062f\u0627\u0631 225 \u06af\u0631\u0645",
          "price": 499000,
          "category": "Tea",
          "brand": "Golestan",
          "position": 17,
          "status": "marketable"
        }, {
          "id": 1102745,
          "name": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc \u0627\u06a9\u062a\u06cc\u0648 \u0645\u062f\u0644 Orchid &amp; Cinnamon \u0645\u0642\u062f\u0627\u0631 3.75 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
          "price": 535000,
          "category": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
          "brand": "\u0627\u06a9\u062a\u06cc\u0648",
          "position": 18,
          "status": "marketable"
        }, {
          "id": 1792500,
          "name": "\u0632\u06cc\u062a\u0648\u0646 \u0634\u0648\u0631 \u0628\u0627 \u0647\u0633\u062a\u0647 \u062f\u0631\u0634\u062a \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 680 \u06af\u0631\u0645",
          "price": 239000,
          "category": "Salted and Marzipan",
          "brand": "Bijan",
          "position": 19,
          "status": "marketable"
        }, {
          "id": 1785409,
          "name": "\u0645\u0627\u0633\u062a \u0686\u06a9\u06cc\u062f\u0647 \u0645\u0648\u0633\u06cc\u0631 \u0647\u0631\u0627\u0632 \u0648\u0632\u0646 900 \u06af\u0631\u0645",
          "price": 215000,
          "category": "Yogurt",
          "brand": "\u0647\u0631\u0627\u0632",
          "position": 20,
          "status": "marketable"
        }]
      };
      if (carouselDataTracker) {
        if (!window.carouselData)
          window.carouselData = [carouselDataTracker];
        else
          window.carouselData.push(carouselDataTracker);
      }
    </script>
    <script>
      window.dataLayer.push({
        "event": "eec.productImpression", "ecommerce": {
          "currencyCode": "EUR",
          "impressions": [{
            "name": "\u067e\u0648\u062f\u0631 \u06a9\u06cc\u06a9 \u0631\u0648\u06cc\u0627\u0644 \u0686\u0627\u06a9\u0644\u062a \u0631\u0634\u062f \u0645\u0642\u062f\u0627\u0631 580 \u06af\u0631\u0645",
            "id": 858014,
            "price": 249000,
            "brand": "\u0631\u0634\u062f",
            "category": "\u063a\u0644\u0627\u062a",
            "list": "category-\u063a\u0644\u0627\u062a",
            "position": 1,
            "dimension6": 1,
            "dimension2": 38,
            "dimension9": 4.5,
            "metric6": 610,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0634\u0627\u0645\u067e\u0648 \u0628\u062f\u0646 \u06a9\u0631\u0645\u06cc \u0627\u06a9\u062a\u06cc\u0648 \u0645\u062f\u0644 Vanilla And Honey \u0645\u0642\u062f\u0627\u0631 400 \u06af\u0631\u0645",
            "id": 303828,
            "price": 189000,
            "brand": "\u0627\u06a9\u062a\u06cc\u0648",
            "category": "\u0634\u0627\u0645\u067e\u0648\u06cc \u0628\u062f\u0646",
            "list": "category-\u0634\u0627\u0645\u067e\u0648\u06cc \u0628\u062f\u0646",
            "position": 2,
            "dimension6": 1,
            "dimension2": 17,
            "dimension9": 4.3,
            "metric6": 1546,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0633\u0648\u0633\u06cc\u0633 \u0647\u0627\u062a \u062f\u0627\u06af \u0637\u0644\u0627\u06cc\u06cc 80% \u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc\u0627\u0646 \u0645\u0642\u062f\u0627\u0631 600 \u06af\u0631\u0645",
            "id": 873438,
            "price": 590000,
            "brand": "\u0645\u06cc\u06a9\u0627\u0626\u06cc\u0644\u06cc\u0627\u0646",
            "category": "\u0633\u0648\u0633\u06cc\u0633 \u0648 \u06a9\u0627\u0644\u0628\u0627\u0633",
            "list": "category-\u0633\u0648\u0633\u06cc\u0633 \u0648 \u06a9\u0627\u0644\u0628\u0627\u0633",
            "position": 3,
            "dimension6": 1,
            "dimension2": 43,
            "dimension9": 4.2,
            "metric6": 198,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0641\u0631\u0622\u0648\u0631\u062f\u0647 \u06a9\u0627\u06a9\u0627\u0626\u0648\u06cc\u06cc \u0645\u063a\u0632 \u062f\u0627\u0631 \u0634\u06cc\u0631\u06cc \u0628\u0627\u0631\u0627\u06a9\u0627 \u0645\u0642\u062f\u0627\u0631 450 \u06af\u0631\u0645",
            "id": 841410,
            "price": 455000,
            "brand": "\u0628\u0627\u0631\u0627\u06a9\u0627",
            "category": "\u0634\u06a9\u0644\u0627\u062a\u060c \u062a\u0627\u0641\u06cc \u0648 \u0622\u0628\u0646\u0628\u0627\u062a",
            "list": "category-\u0634\u06a9\u0644\u0627\u062a\u060c \u062a\u0627\u0641\u06cc \u0648 \u0622\u0628\u0646\u0628\u0627\u062a",
            "position": 4,
            "dimension6": 1,
            "dimension2": 27,
            "dimension9": 4.4,
            "metric6": 459,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0633\u0633 \u06af\u0648\u062c\u0647 \u0641\u0631\u0646\u06af\u06cc \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 550 \u06af\u0631\u0645",
            "id": 1481847,
            "price": 95000,
            "brand": "\u0628\u06cc\u0698\u0646",
            "category": "\u0633\u0633",
            "list": "category-\u0633\u0633",
            "position": 5,
            "dimension6": 1,
            "dimension2": 30,
            "dimension9": 4.4,
            "metric6": 4354,
            "dimension11": 0,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u067e\u0648\u062f\u0631 \u0645\u0627\u0634\u06cc\u0646\u06cc \u067e\u0631\u0633\u06cc\u0644 Deep Clean \u0628\u0627 \u0631\u0627\u06cc\u062d\u0647 \u0644\u0648\u0646\u062f\u0631 \u0645\u0642\u062f\u0627\u0631 4.2 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
            "id": 3779682,
            "price": 861000,
            "brand": "\u067e\u0631\u0633\u06cc\u0644",
            "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0644\u0628\u0627\u0633",
            "list": "category-\u0634\u0648\u06cc\u0646\u062f\u0647 \u0644\u0628\u0627\u0633",
            "position": 6,
            "dimension6": 1,
            "dimension2": 15,
            "dimension9": 4.4,
            "metric6": 264,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc 100 \u0628\u0631\u06af \u0648\u06cc\u0633\u0644 \u06a9\u062f 001 \u0628\u0633\u062a\u0647 10 \u0639\u062f\u062f\u06cc",
            "id": 2957841,
            "price": 409000,
            "brand": "\u0648\u06cc\u0633\u0644",
            "category": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
            "list": "category-\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
            "position": 7,
            "dimension6": 1,
            "dimension2": 45,
            "dimension9": 3.9,
            "metric6": 661,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u062f\u0633\u062a\u0645\u0627\u0644 \u062d\u0648\u0644\u0647 \u0627\u06cc \u0633\u0627\u062d\u0644 \u0645\u062f\u0644 001 \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
            "id": 2324736,
            "price": 288000,
            "brand": "\u0633\u0627\u062d\u0644",
            "category": "\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
            "list": "category-\u062f\u0633\u062a\u0645\u0627\u0644 \u06a9\u0627\u063a\u0630\u06cc",
            "position": 8,
            "dimension6": 1,
            "dimension2": 35,
            "dimension9": 3.9,
            "metric6": 1167,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0633\u0628\u0632\u06cc \u0642\u0648\u0631\u0645\u0647 \u0633\u0631\u062e \u0634\u062f\u0647 \u0645\u0646\u062c\u0645\u062f \u0646\u0648\u0628\u0631 \u0633\u0628\u0632 \u0645\u0642\u062f\u0627\u0631 400 \u06af\u0631\u0645",
            "id": 770239,
            "price": 189000,
            "brand": "\u0646\u0648\u0628\u0631 \u0633\u0628\u0632",
            "category": "\u0641\u0631\u0622\u0648\u0631\u062f\u0647\u200c\u0647\u0627\u06cc \u0645\u0646\u062c\u0645\u062f \u0648 \u06cc\u062e\u0686\u0627\u0644\u06cc",
            "list": "category-\u0641\u0631\u0622\u0648\u0631\u062f\u0647\u200c\u0647\u0627\u06cc \u0645\u0646\u062c\u0645\u062f \u0648 \u06cc\u062e\u0686\u0627\u0644\u06cc",
            "position": 9,
            "dimension6": 1,
            "dimension2": 45,
            "dimension9": 4.3,
            "metric6": 698,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u067e\u0648\u0634\u06a9 \u0628\u0627\u0631\u0644\u06cc \u0633\u0627\u06cc\u0632 5 \u0628\u0633\u062a\u0647 34 \u0639\u062f\u062f\u06cc \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u062f\u0633\u062a\u0645\u0627\u0644 \u0645\u0631\u0637\u0648\u0628",
            "id": 1817056,
            "price": 1052000,
            "brand": "\u0628\u0627\u0631\u0644\u06cc",
            "category": "\u067e\u0648\u0634\u06a9 \u06a9\u0648\u062f\u06a9 \u0648 \u0646\u0648\u0632\u0627\u062f",
            "list": "category-\u067e\u0648\u0634\u06a9 \u06a9\u0648\u062f\u06a9 \u0648 \u0646\u0648\u0632\u0627\u062f",
            "position": 10,
            "dimension6": 1,
            "dimension2": 22,
            "dimension9": 4.4,
            "metric6": 1644,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u06a9\u0631\u0648\u0633\u0627\u0646 \u06a9\u0627\u06a9\u0627\u0626\u0648 \u067e\u0686 \u067e\u0686  \u0628\u0633\u062a\u0647 6 \u0639\u062f\u062f\u06cc",
            "id": 2522021,
            "price": 195000,
            "brand": "\u067e\u0686 \u067e\u0686",
            "category": "\u06a9\u06cc\u06a9 \u0648 \u06a9\u0644\u0648\u0686\u0647",
            "list": "category-\u06a9\u06cc\u06a9 \u0648 \u06a9\u0644\u0648\u0686\u0647",
            "position": 11,
            "dimension6": 1,
            "dimension2": 30,
            "dimension9": 4.5,
            "metric6": 3191,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u067e\u0646\u06cc\u0631 \u067e\u06cc\u062a\u0632\u0627 \u0645\u0648\u0632\u0627\u0631\u0644\u0627 202 \u0648\u0632\u0646 500 \u06af\u0631\u0645",
            "id": 1916402,
            "price": 300000,
            "brand": "202",
            "category": "\u067e\u0646\u06cc\u0631",
            "list": "category-\u067e\u0646\u06cc\u0631",
            "position": 12,
            "dimension6": 1,
            "dimension2": 38,
            "dimension9": 4.4,
            "metric6": 480,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0647\u0627\u062a\u06cc \u0646\u0648\u062f\u0644 \u0628\u0627 \u0639\u0635\u0627\u0631\u0647 \u06af\u0648\u0634\u062a \u0647\u0627\u062a\u06cc \u06a9\u0627\u0631\u0627 - 77 \u06af\u0631\u0645 \u0628\u0633\u062a\u0647 5 \u0639\u062f\u062f\u06cc",
            "id": 2951236,
            "price": 189000,
            "brand": "\u0647\u0627\u062a\u06cc \u06a9\u0627\u0631\u0627",
            "category": "\u063a\u0630\u0627\u06cc \u0622\u0645\u0627\u062f\u0647 \u0648 \u0646\u06cc\u0645\u0647 \u0622\u0645\u0627\u062f\u0647",
            "list": "category-\u063a\u0630\u0627\u06cc \u0622\u0645\u0627\u062f\u0647 \u0648 \u0646\u06cc\u0645\u0647 \u0622\u0645\u0627\u062f\u0647",
            "position": 13,
            "dimension6": 1,
            "dimension2": 37,
            "dimension9": 4.3,
            "metric6": 647,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u06a9\u0628\u0627\u0628 \u0644\u0642\u0645\u0647 70 \u062f\u0631\u0635\u062f \u0645\u0647\u06cc\u0627 \u067e\u0631\u0648\u062a\u0626\u06cc\u0646 - 450 \u06af\u0631\u0645",
            "id": 876594,
            "price": 309900,
            "brand": "\u0645\u0647\u06cc\u0627 \u067e\u0631\u0648\u062a\u0626\u06cc\u0646",
            "category": "\u0641\u0631\u0622\u0648\u0631\u062f\u0647\u200c\u0647\u0627\u06cc \u0645\u0646\u062c\u0645\u062f \u0648 \u06cc\u062e\u0686\u0627\u0644\u06cc",
            "list": "category-\u0641\u0631\u0622\u0648\u0631\u062f\u0647\u200c\u0647\u0627\u06cc \u0645\u0646\u062c\u0645\u062f \u0648 \u06cc\u062e\u0686\u0627\u0644\u06cc",
            "position": 14,
            "dimension6": 1,
            "dimension2": 35,
            "dimension9": 4.2,
            "metric6": 991,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0645\u0627\u06cc\u0639 \u0633\u0641\u06cc\u062f \u06a9\u0646\u0646\u062f\u0647 \u0633\u0637\u0648\u062d \u0646\u06cc\u0627\u0631\u0648 \u0645\u062f\u0644 \u0645\u0639\u0637\u0631 \u062d\u062c\u0645 4000 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
            "id": 2119346,
            "price": 149000,
            "brand": "\u0646\u06cc\u0627\u0631\u0648",
            "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0633\u0637\u0648\u062d",
            "list": "category-\u0634\u0648\u06cc\u0646\u062f\u0647 \u0633\u0637\u0648\u062d",
            "position": 15,
            "dimension6": 1,
            "dimension2": 40,
            "dimension9": 4.3,
            "metric6": 489,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc \u062f\u0627\u0648 \u0645\u062f\u0644 Deeply \u062d\u062c\u0645 500 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
            "id": 2192285,
            "price": 371000,
            "brand": "\u062f\u0627\u0648",
            "category": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
            "list": "category-\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
            "position": 16,
            "dimension6": 1,
            "dimension2": 15,
            "dimension9": 4.3,
            "metric6": 432,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0686\u0627\u06cc \u0633\u06cc\u0627\u0647 \u06af\u0644\u0633\u062a\u0627\u0646 \u0645\u062f\u0644 \u0645\u0645\u062a\u0627\u0632 \u0647\u0646\u062f\u0648\u0633\u062a\u0627\u0646 \u0645\u0642\u062f\u0627\u0631 225 \u06af\u0631\u0645",
            "id": 1907805,
            "price": 499000,
            "brand": "\u06af\u0644\u0633\u062a\u0627\u0646",
            "category": "\u0686\u0627\u06cc",
            "list": "category-\u0686\u0627\u06cc",
            "position": 17,
            "dimension6": 1,
            "dimension2": 18,
            "dimension9": 4.3,
            "metric6": 290,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc \u0627\u06a9\u062a\u06cc\u0648 \u0645\u062f\u0644 Orchid &amp; Cinnamon \u0645\u0642\u062f\u0627\u0631 3.75 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
            "id": 1102745,
            "price": 535000,
            "brand": "\u0627\u06a9\u062a\u06cc\u0648",
            "category": "\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
            "list": "category-\u0645\u0627\u06cc\u0639 \u062f\u0633\u062a\u0634\u0648\u06cc\u06cc",
            "position": 18,
            "dimension6": 1,
            "dimension2": 21,
            "dimension9": 4.3,
            "metric6": 1888,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0632\u06cc\u062a\u0648\u0646 \u0634\u0648\u0631 \u0628\u0627 \u0647\u0633\u062a\u0647 \u062f\u0631\u0634\u062a \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 680 \u06af\u0631\u0645",
            "id": 1792500,
            "price": 239000,
            "brand": "\u0628\u06cc\u0698\u0646",
            "category": "\u062e\u06cc\u0627\u0631\u0634\u0648\u0631 \u0648 \u062a\u0631\u0634\u06cc\u062c\u0627\u062a",
            "list": "category-\u062e\u06cc\u0627\u0631\u0634\u0648\u0631 \u0648 \u062a\u0631\u0634\u06cc\u062c\u0627\u062a",
            "position": 19,
            "dimension6": 1,
            "dimension2": 34,
            "dimension9": 4.3,
            "metric6": 1406,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }, {
            "name": "\u0645\u0627\u0633\u062a \u0686\u06a9\u06cc\u062f\u0647 \u0645\u0648\u0633\u06cc\u0631 \u0647\u0631\u0627\u0632 \u0648\u0632\u0646 900 \u06af\u0631\u0645",
            "id": 1785409,
            "price": 215000,
            "brand": "\u0647\u0631\u0627\u0632",
            "category": "\u0645\u0627\u0633\u062a",
            "list": "category-\u0645\u0627\u0633\u062a",
            "position": 20,
            "dimension6": 1,
            "dimension2": 28,
            "dimension9": 4.5,
            "metric6": 1101,
            "dimension11": 1,
            "dimension20": "marketable",
            "dimension18": "most-viewed",
            "dimension19": "top-fresh-incredibles",
            "dimension7": "incredible"
          }]
        }
      });
    </script>
    <div class="c-swiper-specials c-swiper-specials--fresh">
      <section class="container container--home" id="sn-carousels-fresh-incredible-offer"><a href="/fresh-offers/"
                                                                                             class="c-swiper-specials__title c-swiper-specials__title--fresh"
                                                                                             title="شگفت‌انگیز سوپرمارکتی"><img
            src="https://www.digikala.com/static/files/93723234.png" alt="شگفت‌انگیز سوپرمارکتی">
          <div class="o-btn c-swiper-specials__btn">مشاهده همه</div>
        </a>
        <div class="c-swiper c-swiper--products c-swiper--specials">
          <div class="c-box">
            <div class="swiper-container swiper-container-horizontal js-swiper-specials">
              <div class="swiper-wrapper">
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="858014">
                  <li><a href="/product/dkp-858014/پودر-کیک-رویال-چاکلت-رشد-مقدار-580-گرم" data-id="858014"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="پودر کیک رویال چاکلت رشد مقدار 580 گرم"><img
                          alt="پودر کیک رویال چاکلت رشد مقدار 580 گرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/30d90c4fcfe47e9cc61ff7d5509c99572ae5c0d9_1615622345.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        پودر کیک رویال چاکلت رشد مقدار 580 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۳۹,۹۵۰</del>
                            <div class="c-price__discount-oval"><span>۳۸٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۲۴,۹۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="1680412"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="1680412"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="303828">
                  <li><a href="/product/dkp-303828/شامپو-بدن-کرمی-اکتیو-مدل-vanilla-and-honey-مقدار-400-گرم"
                         data-id="303828" class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="شامپو بدن کرمی اکتیو مدل Vanilla And Honey مقدار 400 گرم"><img
                          alt="شامپو بدن کرمی اکتیو مدل Vanilla And Honey مقدار 400 گرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/1604973.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        شامپو بدن کرمی اکتیو مدل Vanilla And Honey مقدار 400 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۲۲,۸۸۰</del>
                            <div class="c-price__discount-oval"><span>۱۷٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۱۸,۹۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="438875"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="438875"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="873438">
                  <li><a href="/product/dkp-873438/سوسیس-هات-داگ-طلایی-80-میکائیلیان-مقدار-600-گرم" data-id="873438"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="سوسیس هات داگ طلایی 80% میکائیلیان مقدار 600 گرم"><img
                          alt="سوسیس هات داگ طلایی 80% میکائیلیان مقدار 600 گرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/4079830.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        سوسیس هات داگ طلایی 80% میکائیلیان مقدار 600 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱۰۲,۸۵۰</del>
                            <div class="c-price__discount-oval"><span>۴۳٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۵۹,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="1738062"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="1738062"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="841410">
                  <li><a href="/product/dkp-841410/فرآورده-کاکائویی-مغز-دار-شیری-باراکا-مقدار-450-گرم" data-id="841410"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="فرآورده کاکائویی مغز دار شیری باراکا مقدار 450 گرم"><img
                          alt="فرآورده کاکائویی مغز دار شیری باراکا مقدار 450 گرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/119967803.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        فرآورده کاکائویی مغز دار شیری باراکا مقدار 450 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۶۲,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۲۷٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۴۵,۵۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="3691257"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="3691257"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1481847">
                  <li><a href="/product/dkp-1481847/سس-گوجه-فرنگی-بیژن-وزن-550-گرم" data-id="1481847"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="سس گوجه فرنگی بیژن وزن 550 گرم"><img alt="سس گوجه فرنگی بیژن وزن 550 گرم"
                                                                       src="https://dkstatics-public.digikala.com/digikala-products/110428654.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                       class="swiper-lazy swiper-lazy-loaded"
                                                                       loading="lazy"/></div>
                      <div class="c-product-box__title">
                        سس گوجه فرنگی بیژن وزن 550 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱۳,۵۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۹,۵۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="4085750"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="4085750"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="3779682">
                  <li><a href="/product/dkp-3779682/پودر-ماشینی-پرسیل-deep-clean-با-رایحه-لوندر-مقدار-42-کیلوگرم"
                         data-id="3779682"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="پودر ماشینی پرسیل Deep Clean با رایحه لوندر مقدار 4.2 کیلوگرم"><img
                          alt="پودر ماشینی پرسیل Deep Clean با رایحه لوندر مقدار 4.2 کیلوگرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/988e81fa96cdfd0bcd8529f994a55e687ce7e46c_1605596786.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        پودر ماشینی پرسیل Deep Clean با رایحه لوندر مقدار 4.2 کیلوگرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱۰۰,۸۰۰</del>
                            <div class="c-price__discount-oval"><span>۱۵٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۸۶,۱۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="12614202"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="12614202"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2957841">
                  <li><a href="/product/dkp-2957841/دستمال-کاغذی-100-برگ-ویسل-کد-001-بسته-10-عددی" data-id="2957841"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="دستمال کاغذی 100 برگ ویسل کد 001 بسته 10 عددی"><img
                          alt="دستمال کاغذی 100 برگ ویسل کد 001 بسته 10 عددی"
                          src="https://dkstatics-public.digikala.com/digikala-products/121804765.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        دستمال کاغذی 100 برگ ویسل کد 001 بسته 10 عددی

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۷۵,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۵٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۴۰,۹۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="9846376"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="9846376"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2324736">
                  <li><a href="/product/dkp-2324736/دستمال-حوله-ای-ساحل-مدل-001-بسته-4-عددی" data-id="2324736"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="دستمال حوله ای ساحل مدل 001 بسته 4 عددی"><img
                          alt="دستمال حوله ای ساحل مدل 001 بسته 4 عددی"
                          src="https://dkstatics-public.digikala.com/digikala-products/3918fdf97b87cf4ae15a7cf054b1e5fd650d8248_1614683640.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        دستمال حوله ای ساحل مدل 001 بسته 4 عددی

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۴۴,۴۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۵٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۲۸,۸۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="6783956"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="6783956"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="770239">
                  <li><a href="/product/dkp-770239/سبزی-قورمه-سرخ-شده-منجمد-نوبر-سبز-مقدار-400-گرم" data-id="770239"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="سبزی قورمه سرخ شده منجمد نوبر سبز مقدار 400 گرم"><img
                          alt="سبزی قورمه سرخ شده منجمد نوبر سبز مقدار 400 گرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/a57d45ca8cd75baefe08865304c2c742049aa9bc_1603693888.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        سبزی قورمه سرخ شده منجمد نوبر سبز مقدار 400 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۳۴,۵۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۵٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۱۸,۹۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="1649547"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="1649547"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1817056">
                  <li><a href="/product/dkp-1817056/پوشک-بارلی-سایز-5-بسته-34-عددی-به-همراه-دستمال-مرطوب"
                         data-id="1817056"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="پوشک بارلی سایز 5 بسته 34 عددی به همراه دستمال مرطوب"><img
                          alt="پوشک بارلی سایز 5 بسته 34 عددی به همراه دستمال مرطوب"
                          src="https://dkstatics-public.digikala.com/digikala-products/7723207cc716bd70769c9a1459f96483ae5351aa_1612354669.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        پوشک بارلی سایز 5 بسته 34 عددی به همراه دستمال مرطوب

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۱۳۴,۱۵۰</del>
                            <div class="c-price__discount-oval"><span>۲۲٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۱۰۵,۲۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="4873796"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="4873796"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2522021">
                  <li><a href="/product/dkp-2522021/کروسان-کاکائو-پچ-پچ-بسته-6-عددی" data-id="2522021"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="کروسان کاکائو پچ پچ  بسته 6 عددی"><img alt="کروسان کاکائو پچ پچ  بسته 6 عددی"
                                                                         src="https://dkstatics-public.digikala.com/digikala-products/119588861.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                         class="swiper-lazy swiper-lazy-loaded"
                                                                         loading="lazy"/><img
                          class="c-product-box__fmcg-symbol" loading="lazy"
                          src="https://www.digikala.com/static/files/31a78819.svg"/></div>
                      <div class="c-product-box__title">
                        کروسان کاکائو پچ پچ بسته 6 عددی

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۲۸,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۰٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۱۹,۵۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="7590640"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="7590640"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1916402">
                  <li><a href="/product/dkp-1916402/پنیر-پیتزا-موزارلا-202-وزن-500-گرم" data-id="1916402"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="پنیر پیتزا موزارلا 202 وزن 500 گرم"><img alt="پنیر پیتزا موزارلا 202 وزن 500 گرم"
                                                                           src="https://dkstatics-public.digikala.com/digikala-products/112773099.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                           class="swiper-lazy swiper-lazy-loaded"
                                                                           loading="lazy"/><img
                          class="c-product-box__fmcg-symbol" loading="lazy"
                          src="https://www.digikala.com/static/files/31a78819.svg"/></div>
                      <div class="c-product-box__title">
                        پنیر پیتزا موزارلا 202 وزن 500 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۴۸,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۸٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۳۰,۰۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="6010087"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="6010087"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2951236">
                  <li><a href="/product/dkp-2951236/هاتی-نودل-با-عصاره-گوشت-هاتی-کارا-77-گرم-بسته-5-عددی"
                         data-id="2951236"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="هاتی نودل با عصاره گوشت هاتی کارا - 77 گرم بسته 5 عددی"><img
                          alt="هاتی نودل با عصاره گوشت هاتی کارا - 77 گرم بسته 5 عددی"
                          src="https://dkstatics-public.digikala.com/digikala-products/121796681.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        هاتی نودل با عصاره گوشت هاتی کارا - 77 گرم بسته 5 عددی

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۳۰,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۷٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۱۸,۹۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="9965696"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="9965696"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="876594">
                  <li><a href="/product/dkp-876594/کباب-لقمه-70-درصد-مهیا-پروتئین-450-گرم" data-id="876594"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="کباب لقمه 70 درصد مهیا پروتئین - 450 گرم"><img
                          alt="کباب لقمه 70 درصد مهیا پروتئین - 450 گرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/4079615.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        کباب لقمه 70 درصد مهیا پروتئین - 450 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۴۷,۷۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۵٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۳۰,۹۹۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="1746825"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="1746825"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2119346">
                  <li><a href="/product/dkp-2119346/مایع-سفید-کننده-سطوح-نیارو-مدل-معطر-حجم-4000-میلی-لیتر"
                         data-id="2119346"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="مایع سفید کننده سطوح نیارو مدل معطر حجم 4000 میلی لیتر"><img
                          alt="مایع سفید کننده سطوح نیارو مدل معطر حجم 4000 میلی لیتر"
                          src="https://dkstatics-public.digikala.com/digikala-products/c7ea1f4a7f0bbacab43fe5f6c439cf05529bd2ea_1603110000.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        مایع سفید کننده سطوح نیارو مدل معطر حجم 4000 میلی لیتر

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۲۴,۸۰۰</del>
                            <div class="c-price__discount-oval"><span>۴۰٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۱۴,۹۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="8662483"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="8662483"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="2192285">
                  <li><a href="/product/dkp-2192285/مایع-دستشویی-داو-مدل-deeply-حجم-500-میلی-لیتر" data-id="2192285"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="مایع دستشویی داو مدل Deeply حجم 500 میلی لیتر"><img
                          alt="مایع دستشویی داو مدل Deeply حجم 500 میلی لیتر"
                          src="https://dkstatics-public.digikala.com/digikala-products/114339458.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        مایع دستشویی داو مدل Deeply حجم 500 میلی لیتر

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۴۳,۵۰۰</del>
                            <div class="c-price__discount-oval"><span>۱۵٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۳۷,۱۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="6257603"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="6257603"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1907805">
                  <li><a href="/product/dkp-1907805/چای-سیاه-گلستان-مدل-ممتاز-هندوستان-مقدار-225-گرم" data-id="1907805"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="چای سیاه گلستان مدل ممتاز هندوستان مقدار 225 گرم"><img
                          alt="چای سیاه گلستان مدل ممتاز هندوستان مقدار 225 گرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/112723893.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        چای سیاه گلستان مدل ممتاز هندوستان مقدار 225 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۶۰,۹۰۰</del>
                            <div class="c-price__discount-oval"><span>۱۸٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۴۹,۹۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="5162612"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="5162612"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1102745">
                  <li><a href="/product/dkp-1102745/مایع-دستشویی-اکتیو-مدل-orchid-amp-cinnamon-مقدار-375-کیلوگرم"
                         data-id="1102745"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="مایع دستشویی اکتیو مدل Orchid &amp; Cinnamon مقدار 3.75 کیلوگرم"><img
                          alt="مایع دستشویی اکتیو مدل Orchid &amp; Cinnamon مقدار 3.75 کیلوگرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/6dd6229fb12e2235bd7fba6d6a21c1aeff8cafd8_1607156733.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        مایع دستشویی اکتیو مدل Orchid &amp; Cinnamon مقدار 3.75 کیلوگرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۶۷,۷۳۷</del>
                            <div class="c-price__discount-oval"><span>۲۱٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۵۳,۵۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="2407689"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="2407689"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1792500">
                  <li><a href="/product/dkp-1792500/زیتون-شور-با-هسته-درشت-بیژن-وزن-680-گرم" data-id="1792500"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="زیتون شور با هسته درشت بیژن وزن 680 گرم"><img
                          alt="زیتون شور با هسته درشت بیژن وزن 680 گرم"
                          src="https://dkstatics-public.digikala.com/digikala-products/112114549.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                          class="swiper-lazy swiper-lazy-loaded" loading="lazy"/><img class="c-product-box__fmcg-symbol"
                                                                                      loading="lazy"
                                                                                      src="https://www.digikala.com/static/files/31a78819.svg"/>
                      </div>
                      <div class="c-product-box__title">
                        زیتون شور با هسته درشت بیژن وزن 680 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۳۶,۰۰۰</del>
                            <div class="c-price__discount-oval"><span>۳۴٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۲۳,۹۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="5092531"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="5092531"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                  <option value="3">۳ عدد</option>
                                  <option value="4">۴ عدد</option>
                                  <option value="5">۵ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide" data-carousel="sn-carousels-fresh-incredible-offer" data-id="1785409">
                  <li><a href="/product/dkp-1785409/ماست-چکیده-موسیر-هراز-وزن-900-گرم" data-id="1785409"
                         class="c-product-box__box-link js-product-url js-carousel-ga-product-box"></a>
                    <div
                      class="js-product-cart c-product-box c-product-box--product-card c-product-box--has-overflow c-product-box--card-macro c-product-box--plus-badge "
                      title="">
                      <div class="c-product-box__img js-url js-snt-carousel_product"
                           title="ماست چکیده موسیر هراز وزن 900 گرم"><img alt="ماست چکیده موسیر هراز وزن 900 گرم"
                                                                          src="https://dkstatics-public.digikala.com/digikala-products/112076793.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                                                          class="swiper-lazy swiper-lazy-loaded"
                                                                          loading="lazy"/><img
                          class="c-product-box__fmcg-symbol" loading="lazy"
                          src="https://www.digikala.com/static/files/31a78819.svg"/></div>
                      <div class="c-product-box__title">
                        ماست چکیده موسیر هراز وزن 900 گرم

                      </div>
                      <div class="c-product-box__digiplus c-product-box__digiplus--full u-invisible"><span
                          class="c-product-box__digiplus-data c-digiplus-sign--before">
                    ۰ تومان هدیه نقدی
                </span></div>
                      <div class="c-product-box__row c-product-box__row--price">
                        <div class="c-price">
                          <div class="c-price__value c-price__value--plp js-price-complete-details">
                            <del>۲۹,۸۰۰</del>
                            <div class="c-price__discount-oval"><span>۲۸٪</span></div>
                            <div class="c-price__value-wrapper">
                              ۲۱,۵۰۰ <span
                                class="c-price__currency">تومان</span></div>
                          </div>
                        </div>
                        <div class="c-product-box__add-to-cart-section">
                          <div class="c-product__add-container js-fresh-add-container"><a
                              class=" btn-add-to-cart-mini js-fresh-add-to-cart" data-cart-item=""
                              data-variant="4786746"></a>
                            <div class="js-fresh-select-counter u-hidden">
                              <div class="js-quick-carousel-add-to-cart"
                                   data-variant="4786746"
                                   data-cart-item=""
                                   data-mode="add"
                                   data-enhanced-ecommerce='null'
                              ><select class="c-ui-select js-ui-select js-order-amount" name="order[amount]">
                                  <option value="0" class="c-product__add-cancel">حذف</option>
                                  <option value="1">۱ عدد</option>
                                  <option value="2">۲ عدد</option>
                                </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="c-product-box__amazing">
                        <div class="c-product-box__timer   js-counter"
                             data-countdown="2021-03-21 00:00:00"></div>
                        <div class="c-product-box__remained"></div>
                      </div>
                    </div>
                  </li>
                </div>
                <div class="swiper-slide c-swiper__show-more-cart--auto-height"><a href="/fresh-offers/"
                                                                                   class="c-swiper__show-more-cart"><span></span>
                    <p>
                      مشاهده همه
                    </p></a></div>
              </div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <article class="container container--home">
      <div class="o-page">
        <aside class="c-adplacement"><a
            href="https://www.digikala.com/brand/sharin/?&promo_name=%D8%B4%D8%A7%D8%B1%DB%8C%D9%86&promo_position=home_top_advertisement&promo_creative=65238&bCode=65238"
            class="js-banner-impression-adro c-adplacement__item c-adplacement__item--b"
            data-id="65238"
            data-observed="0"
            target="_blank"
            title="شارین"
            data-is-trackable="">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/306e552efa99862216fcd26eddf7f491f95f3fc6_1615205565.jpg?x-oss-process=image/quality,q_80"
                alt="شارین" loading="lazy"/></div>
          </a><a
            href="https://www.digikala.com/seller/%DB%B5adkp/?&promo_name=%D9%BE%D8%A7%D9%85%D8%A7&promo_position=home_top_advertisement&promo_creative=65845&bCode=65845"
            class="js-banner-impression-adro c-adplacement__item c-adplacement__item--b"
            data-id="65845"
            data-observed="0"
            target="_blank"
            title="پاما"
            data-is-trackable="1">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/3f9813fbc415925c060967a95f9ec83726029b2b_1615630923.jpg?x-oss-process=image/quality,q_80"
                alt="پاما" loading="lazy"/>
              <div class="c-adplacement__badge
         js-adro-badge-view
        "
              >
                <div class="c-adplacement__badge-container ">
                  <div class="c-adplacement__badge-container--img"><img
                      src="https://www.digikala.com/static/files/52672319.svg"><span
                      class="c-adplacement__badge-container--txt">Ad</span></div>
                </div>
              </div>
            </div>
          </a></aside>
        <div class="o-page__row o-grid o-page__row--main-page js-recommendation-home_1-row">
          <div class="col-9">
            <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper  js-sntracker-carousel"
                     id="recommendation-home_1">
              <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_1 u-hidden"><p>این پیشنهاد به
                  شما نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
                <button class="js-cancel-swiper-mask" data-id="recommendation-home_1"><i></i>
                  بازگرداندن
                </button>
              </div>
              <div class="o-headline"><span></span></div>
              <div class="c-box">
                <div class="swiper-container swiper-container-horizontal">
                  <div class="swiper-wrapper js-products-container"></div>
                  <div class="swiper-button-prev js-swiper-button-prev"></div>
                  <div class="swiper-button-next js-swiper-button-next"></div>
                </div>
              </div>
            </section>
          </div>
          <div class="col-3">
            <aside class="c-box c-box--promo-single">
              <div class="c-promo-single js-promo-single" id="promo-single">
                <div class="c-promo-single__headline js-promo-single-bar">پیشنهادهای لحظه‌ای برای شما</div>
                <div class="swiper-container swiper-container-horizontal js-promo-single-box">
                  <div class="swiper-wrapper js-promo-single-wrapper">
                    <div class="c-remodal-loader__icon c-promo-single__loader js-promo-single-loader">
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--1"></div>
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--2"></div>
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--3"></div>
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--4"></div>
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--5"></div>
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--6"></div>
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--7"></div>
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--8"></div>
                      <div class="c-remodal-loader__cube c-remodal-loader__cube--9"></div>
                    </div>
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
      <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper  js-sntracker-carousel"
               id="recommendation-home_2">
        <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_2 u-hidden"><p>این پیشنهاد به شما
            نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
          <button class="js-cancel-swiper-mask" data-id="recommendation-home_2"><i></i>
            بازگرداندن
          </button>
        </div>
        <div class="o-headline"><span></span></div>
        <div class="c-box">
          <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper js-products-container"></div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>
      <aside class="c-about-digikala-items">
        <aside class="c-adplacement c-adplacement__container-row"><a
            href="https://www.digikala.com/landings/seller-introduction//?&promo_name=%D9%81%D8%B1%D9%88%D8%B4%D9%86%D8%AF%D9%87+%D8%B4%D9%88%DB%8C%D8%AF&promo_position=home_static_image&promo_creative=14789&bCode=14789"
            class="c-adplacement__item js-banner-impression-adro"
            data-id="14789"
            data-observed="0"
            target="_blank"
            data-is-trackable=""
            title="فروشنده شوید">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/76998daf25428efd1a62130b631abfe65b2ceea8_1612288934.jpg?x-oss-process=image/quality,q_80"
                alt="فروشنده شوید" loading="lazy"/></div>
          </a><a
            href="https://www.digikala.com/landings/village-businesses/?&promo_name=%DA%A9%D8%B3%D8%A8+%D9%88+%DA%A9%D8%A7%D8%B1%D9%87%D8%A7%DB%8C+%D8%B1%D9%88%D8%B3%D8%AA%D8%A7%DB%8C%DB%8C&promo_position=home_static_image&promo_creative=61663&bCode=61663"
            class="c-adplacement__item js-banner-impression-adro"
            data-id="61663"
            data-observed="0"
            target="_blank"
            data-is-trackable=""
            title="کسب و کارهای روستایی">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/956cd52f1f18f11284016c86561d53bcdcfdeedd_1612606849.jpg?x-oss-process=image/quality,q_80"
                alt="کسب و کارهای روستایی" loading="lazy"/></div>
          </a><a
            href="https://www.digikala.com/landings/nahal/?&promo_name=%D9%86%D9%87%D8%A7%D9%84+-+CSR&promo_position=home_static_image&promo_creative=63754&bCode=63754"
            class="c-adplacement__item js-banner-impression-adro"
            data-id="63754"
            data-observed="0"
            target="_blank"
            data-is-trackable=""
            title="نهال - CSR">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/c824ada57b41ca448fa17bd4b5fa11840aaecee5_1614243750.jpg?x-oss-process=image/quality,q_80"
                alt="نهال - CSR" loading="lazy"/></div>
          </a><a
            href="https://www.digikala.com/landings/giftcard-customers/?&promo_name=%DA%A9%D8%A7%D8%B1%D8%AA+%D9%87%D8%AF%DB%8C%D9%87&promo_position=home_static_image&promo_creative=19022&bCode=19022"
            class="c-adplacement__item js-banner-impression-adro"
            data-id="19022"
            data-observed="0"
            target="_blank"
            data-is-trackable=""
            title="کارت هدیه">
            <div class="c-adplacement__sponsored_box"><img
                src="https://dkstatics-public.digikala.com/digikala-adservice-banners/4733b740d15e74f00d50ac92fb126911632b8053_1599385682.jpg?x-oss-process=image/quality,q_80"
                alt="کارت هدیه" loading="lazy"/></div>
          </a></aside>
      </aside>
      <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
               id="recommendation-home_3">
        <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_3 u-hidden"><p>این پیشنهاد به شما
            نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
          <button class="js-cancel-swiper-mask" data-id="recommendation-home_3"><i></i>
            بازگرداندن
          </button>
        </div>
        <div class="o-headline"><span></span></div>
        <div class="c-box">
          <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper js-products-container"></div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>
      <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
               id="recommendation-home_4">
        <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_4 u-hidden"><p>این پیشنهاد به شما
            نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
          <button class="js-cancel-swiper-mask" data-id="recommendation-home_4"><i></i>
            بازگرداندن
          </button>
        </div>
        <div class="o-headline"><span></span></div>
        <div class="c-box">
          <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper js-products-container"></div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>
      <aside class="c-adplacement c-adplacement__container-row"><a
          href="https://www.digikala.com/brand/arian-nakh-baf/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%A2%D8%B1%DB%8C%D8%A7%D9%86+%D9%86%D8%AE+%D8%A8%D8%A7%D9%81&promo_position=home_middle&promo_creative=64905&bCode=64905"
          class="c-adplacement__item js-banner-impression-adro"
          data-id="64905"
          data-observed="0"
          target="_blank"
          data-is-trackable=""
          title="پارتنرشیپ - آریان نخ باف">
          <div class="c-adplacement__sponsored_box"><img
              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/9ba8fa23a193e5218d0782580f959e55d1514089_1615015933.jpg?x-oss-process=image/quality,q_80"
              alt="پارتنرشیپ - آریان نخ باف" loading="lazy"/></div>
        </a><a
          href="https://www.digikala.com/brand/madar/?&promo_name=%D9%85%D8%A7%D8%AF%D8%B1&promo_position=home_middle&promo_creative=65995&bCode=65995"
          class="c-adplacement__item js-banner-impression-adro"
          data-id="65995"
          data-observed="0"
          target="_blank"
          data-is-trackable=""
          title="مادر">
          <div class="c-adplacement__sponsored_box"><img
              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/fe7df8c48164f69b69e9fe5e979c126545abc2ff_1615724049.jpg?x-oss-process=image/quality,q_80"
              alt="مادر" loading="lazy"/></div>
        </a></aside>
      <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
               id="recommendation-home_5">
        <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_5 u-hidden"><p>این پیشنهاد به شما
            نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
          <button class="js-cancel-swiper-mask" data-id="recommendation-home_5"><i></i>
            بازگرداندن
          </button>
        </div>
        <div class="o-headline"><span></span></div>
        <div class="c-box">
          <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper js-products-container"></div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>
      <section class="c-swiper c-swiper--products has-placeholder recommendation-swiper u-hidden js-sntracker-carousel"
               id="recommendation-home_6">
        <div class="recommendation-swiper__mask js-swiper-mask-recommendation-home_6 u-hidden"><p>این پیشنهاد به شما
            نشان داده نخواهد شد با تشکر از باز‌خورد شما</p>
          <button class="js-cancel-swiper-mask" data-id="recommendation-home_6"><i></i>
            بازگرداندن
          </button>
        </div>
        <div class="o-headline"><span></span></div>
        <div class="c-box">
          <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper js-products-container"></div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>
      <script>
        var carouselDataTracker = {
          "carouselPosition": "HOME_6",
          "id": "sn-carousels-1",
          "title": "\u0645\u062d\u0635\u0648\u0644\u0627\u062a \u067e\u0631\u0628\u0627\u0632\u062f\u06cc\u062f \u0627\u062e\u06cc\u0631",
          "title_en": "latest most visited",
          "products": [{
            "id": 3754319,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 68890000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 1,
            "status": "marketable"
          }, {
            "id": 2071360,
            "name": "\u0631\u0648\u063a\u0646 \u0646\u06cc\u0645\u0647 \u062c\u0627\u0645\u062f \u0632\u06cc\u0631\u0648 \u062a\u0631\u0627\u0646\u0633 \u0637\u0628\u06cc\u0639\u062a - 5  \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
            "price": 700000,
            "category": "\u0631\u0648\u063a\u0646",
            "brand": "\u0637\u0628\u06cc\u0639\u062a",
            "position": 2,
            "status": "marketable"
          }, {
            "id": 4122136,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 41390000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 3,
            "status": "marketable"
          }, {
            "id": 2677898,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A71 SM-A715F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u0631\u0645 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 92490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 4,
            "status": "marketable"
          }, {
            "id": 2910269,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 55390000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 5,
            "status": "marketable"
          }, {
            "id": 3048126,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
            "price": 46490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 6,
            "status": "marketable"
          }, {
            "id": 3105612,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 9 Pro M2003J6B2G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 72990000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 7,
            "status": "marketable"
          }, {
            "id": 3151747,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 35990000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 8,
            "status": "marketable"
          }, {
            "id": 4149037,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 45490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 9,
            "status": "marketable"
          }, {
            "id": 4008192,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S20 FE SM-G780F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 126490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 10,
            "status": "marketable"
          }, {
            "id": 4175973,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A51 SM-A515F\/DSN \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 87000000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 11,
            "status": "marketable"
          }, {
            "id": 3893718,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 389000000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Apple",
            "position": 12,
            "status": "marketable"
          }, {
            "id": 4330247,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S21 Ultra 5G SM-G998B\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 12 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 283990000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 13,
            "status": "marketable"
          }, {
            "id": 3183082,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 32700000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 14,
            "status": "marketable"
          }, {
            "id": 4244447,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 NFC M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 6 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 59100000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 15,
            "status": "marketable"
          }, {
            "id": 3532969,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Y8p AQM-LX1 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 41990000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Huawei",
            "position": 16,
            "status": "marketable"
          }, {
            "id": 3246506,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9A M2006C3LG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
            "price": 32000000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 17,
            "status": "marketable"
          }, {
            "id": 2066213,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 31190000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 18,
            "status": "marketable"
          }, {
            "id": 4230579,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 43490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 19,
            "status": "marketable"
          }, {
            "id": 3266410,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 20190000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 20,
            "status": "marketable"
          }, {
            "id": 2961837,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Nova 7i JNY-LX1 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
            "price": 61800000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Huawei",
            "position": 21,
            "status": "marketable"
          }]
        };
        if (carouselDataTracker) {
          if (!window.carouselData)
            window.carouselData = [carouselDataTracker];
          else
            window.carouselData.push(carouselDataTracker);
        }

        var carouselDataTracker = null;
        if (carouselDataTracker) {
          if (!window.carouselData)
            window.carouselData = [carouselDataTracker];
          else
            window.carouselData.push(carouselDataTracker);
        }
      </script>
      <script>
        window.dataLayer.push({
          "event": "eec.productImpression", "ecommerce": {
            "currencyCode": "EUR",
            "impressions": [{
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3754319,
              "price": 68890000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 1,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 740,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u0631\u0648\u063a\u0646 \u0646\u06cc\u0645\u0647 \u062c\u0627\u0645\u062f \u0632\u06cc\u0631\u0648 \u062a\u0631\u0627\u0646\u0633 \u0637\u0628\u06cc\u0639\u062a - 5  \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
              "id": 2071360,
              "price": 700000,
              "brand": "\u0637\u0628\u06cc\u0639\u062a",
              "category": "\u0631\u0648\u063a\u0646",
              "list": "category-\u0631\u0648\u063a\u0646",
              "position": 2,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.6,
              "metric6": 2195,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4122136,
              "price": 41390000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 3,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.5,
              "metric6": 1094,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A71 SM-A715F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u0631\u0645 8 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 2677898,
              "price": 92490000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 4,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.3,
              "metric6": 1366,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 2910269,
              "price": 55390000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 5,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 2810,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
              "id": 3048126,
              "price": 46490000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 6,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 3183,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi Note 9 Pro M2003J6B2G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3105612,
              "price": 72990000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 7,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 1497,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3151747,
              "price": 35990000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 8,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 1102,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4149037,
              "price": 45490000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 9,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.2,
              "metric6": 176,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S20 FE SM-G780F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4008192,
              "price": 126490000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 10,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.3,
              "metric6": 209,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A51 SM-A515F\/DSN \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256\u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4175973,
              "price": 87000000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 11,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.3,
              "metric6": 24,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3893718,
              "price": 389000000,
              "brand": "\u0627\u067e\u0644",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 12,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.5,
              "metric6": 220,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy S21 Ultra 5G SM-G998B\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 12 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4330247,
              "price": 283990000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 13,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 105,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3183082,
              "price": 32700000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 14,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.5,
              "metric6": 1010,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO X3 NFC M2007J20CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 6 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4244447,
              "price": 59100000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 15,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.5,
              "metric6": 289,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Y8p AQM-LX1 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3532969,
              "price": 41990000,
              "brand": "\u0647\u0648\u0622\u0648\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 16,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.3,
              "metric6": 682,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9A M2006C3LG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
              "id": 3246506,
              "price": 32000000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 17,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.3,
              "metric6": 586,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 2066213,
              "price": 31190000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 18,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 4368,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4230579,
              "price": 43490000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 19,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.3,
              "metric6": 102,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3266410,
              "price": 20190000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 20,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.1,
              "metric6": 1898,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0647\u0648\u0622\u0648\u06cc \u0645\u062f\u0644 Nova 7i JNY-LX1 \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
              "id": 2961837,
              "price": 61800000,
              "brand": "\u0647\u0648\u0622\u0648\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 21,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 239,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-recently-most-viewed",
              "dimension7": "none"
            }]
          }
        });
      </script>
      <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-1">
        <div class="o-headline
                    "><span>


                                                                    محصولات پربازدید اخیر

                            </span></div>
        <div class="c-box"
             id="sn-carousels-1"
        >
          <div class="swiper-container swiper-container-horizontal js-swiper-products">
            <div class="swiper-wrapper">
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3754319"
                   data-position="1">
                <div class="c-product-box"><a data-id="3754319"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3754319/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/a1981f054f980e183cb23ff39799bd37ac983ae4_1605350003.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت ظرفیت 128 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3754319"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3754319/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                      گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3754319"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3754319/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۶,۸۸۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2071360"
                   data-position="2">
                <div class="c-product-box"><a data-id="2071360"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/113619953.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="روغن نیمه جامد زیرو ترانس طبیعت - 5  کیلوگرم"
                      class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                               src="https://www.digikala.com/static/files/31a78819.svg"></a>
                  <div class="c-product-box__title"><a data-id="2071360"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم">
                      روغن نیمه جامد زیرو ترانس طبیعت - 5 کیلوگرم
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__fast-shopping">
                      <div class="c-product-box__add-to-cart-section">
                        <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                            class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                            href="/cart/add/5780149/1/"
                            data-event="add_to_cart" data-event-category="ecommerce"
                            data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                          <div
                            class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                            data-variant="5780149"
                            data-cart-item=""
                            data-mode="add"
                            data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                   name="order[amount]">
                              <option value="0" class="c-product__add-cancel">حذف</option>
                              <option value="1">۱ عدد</option>
                            </select></div>
                        </div>
                      </div>
                    </div>
                    <div class="c-product-box__price-item"><a data-id="2071360"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۷۰,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4122136"
                   data-position="3">
                <div class="c-product-box"><a data-id="4122136"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4122136/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-a217fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-4031737"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/6207b3bf015d7fff97e9e04868497ac6a30474a3_1609308062.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="4122136"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4122136/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-a217fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-4031737">
                      گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="4122136"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-4122136/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-a217fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-4031737">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۴,۱۳۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2677898"
                   data-position="4">
                <div class="c-product-box"><a data-id="2677898"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2677898/گوشی-موبایل-سامسونگ-مدل-galaxy-a71-sm-a715fds-دو-سیمکارت-ظرفیت-128-گیگابایت-همراه-با-رم-8-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/120415904.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy A71 SM-A715F/DS دو سیم‌کارت ظرفیت 128 گیگابایت همراه با رم 8 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="2677898"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2677898/گوشی-موبایل-سامسونگ-مدل-galaxy-a71-sm-a715fds-دو-سیمکارت-ظرفیت-128-گیگابایت-همراه-با-رم-8-گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy A71 SM-A715F/DS دو ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="2677898"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2677898/گوشی-موبایل-سامسونگ-مدل-galaxy-a71-sm-a715fds-دو-سیمکارت-ظرفیت-128-گیگابایت-همراه-با-رم-8-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۹,۲۴۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2910269"
                   data-position="5">
                <div class="c-product-box"><a data-id="2910269"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2910269/گوشی-موبایل-سامسونگ-مدل-galaxy-a31-sm-a315fds-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/121560275.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy A31 SM-A315F/DS دو سیم کارت ظرفیت 128 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="2910269"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2910269/گوشی-موبایل-سامسونگ-مدل-galaxy-a31-sm-a315fds-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy A31 SM-A315F/DS دو ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="2910269"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2910269/گوشی-موبایل-سامسونگ-مدل-galaxy-a31-sm-a315fds-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۵,۵۳۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3048126"
                   data-position="6">
                <div class="c-product-box"><a data-id="3048126"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3048126/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-sm-a217fds-دو-سیمکارت-ظرفیت-64-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/89e7f2abac447a018242a954f03f8a6926344f8b_1594023235.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو سیم‌کارت ظرفیت 64 گیگابایت	"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3048126"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3048126/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-sm-a217fds-دو-سیمکارت-ظرفیت-64-گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3048126"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3048126/گوشی-موبایل-سامسونگ-مدل-galaxy-a21s-sm-a217fds-دو-سیمکارت-ظرفیت-64-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۴,۶۴۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3105612"
                   data-position="7">
                <div class="c-product-box"><a data-id="3105612"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3105612/گوشی-موبایل-شیائومی-مدل-redmi-note-9-pro-m2003j6b2g-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/9236d53437d221c908f3ea53a0ae4d5f165ea8e9_1595064824.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل شیائومی مدل Redmi Note 9 Pro M2003J6B2G دو سیم‌ کارت ظرفیت 128 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3105612"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3105612/گوشی-موبایل-شیائومی-مدل-redmi-note-9-pro-m2003j6b2g-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                      گوشی موبایل شیائومی مدل Redmi Note 9 Pro M2003J6B2...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3105612"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3105612/گوشی-موبایل-شیائومی-مدل-redmi-note-9-pro-m2003j6b2g-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۷,۲۹۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3151747"
                   data-position="8">
                <div class="c-product-box"><a data-id="3151747"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3151747/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-64-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/dda06bfb7f4df20d01f58bdcdee0d91625c96797_1595839574.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل شیائومی مدل Redmi 9 M2004J19G دو سیم‌ کارت ظرفیت 64 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3151747"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3151747/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-64-گیگابایت">
                      گوشی موبایل شیائومی مدل Redmi 9 M2004J19G دو سیم‌ ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3151747"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3151747/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-64-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۳,۵۹۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4149037"
                   data-position="9">
                <div class="c-product-box"><a data-id="4149037"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4149037/گوشی-موبایل-شیائومی-مدل-poco-m3-m2010j19cg-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/219163a48b85831190b1aa4983a71565a19434c2_1609659342.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="4149037"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4149037/گوشی-موبایل-شیائومی-مدل-poco-m3-m2010j19cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                      گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="4149037"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-4149037/گوشی-موبایل-شیائومی-مدل-poco-m3-m2010j19cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۴,۵۴۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4008192"
                   data-position="10">
                <div class="c-product-box"><a data-id="4008192"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4008192/گوشی-موبایل-سامسونگ-مدل-galaxy-s20-fe-sm-g780fds-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/2e16bad7f6ea176ae6502406d7342afe9982fbf7_1608030120.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy S20 FE SM-G780F/DS دو سیم کارت ظرفیت 128 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="4008192"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4008192/گوشی-موبایل-سامسونگ-مدل-galaxy-s20-fe-sm-g780fds-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy S20 FE SM-G780F/DS ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="4008192"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-4008192/گوشی-موبایل-سامسونگ-مدل-galaxy-s20-fe-sm-g780fds-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۱۲,۶۴۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4175973"
                   data-position="11">
                <div class="c-product-box"><a data-id="4175973"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4175973/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-256گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/b94fc21a67b4e43a4b4c7539129ee4b45303c71b_1609922105.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو سیم کارت ظرفیت 256گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="4175973"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4175973/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-256گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy A51 SM-A515F/DSN دو...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="4175973"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-4175973/گوشی-موبایل-سامسونگ-مدل-galaxy-a51-sm-a515fdsn-دو-سیم-کارت-ظرفیت-256گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۸,۷۰۰,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3893718"
                   data-position="12">
                <div class="c-product-box"><a data-id="3893718"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3893718/گوشی-موبایل-اپل-مدل-iphone-12-pro-max-a2412-دو-سیم-کارت-ظرفیت-256-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433995.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 256 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3893718"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3893718/گوشی-موبایل-اپل-مدل-iphone-12-pro-max-a2412-دو-سیم-کارت-ظرفیت-256-گیگابایت">
                      گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3893718"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3893718/گوشی-موبایل-اپل-مدل-iphone-12-pro-max-a2412-دو-سیم-کارت-ظرفیت-256-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۳۸,۹۰۰,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4330247"
                   data-position="13">
                <div class="c-product-box"><a data-id="4330247"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4330247/گوشی-موبایل-سامسونگ-مدل-galaxy-s21-ultra-5g-sm-g998bds-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/62c8a2c6d57dce6efbde8bbd348490c2f10a55e1_1611742799.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy S21 Ultra 5G SM-G998B/DS دو سیم کارت ظرفیت 256 گیگابایت و رم 12 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="4330247"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4330247/گوشی-موبایل-سامسونگ-مدل-galaxy-s21-ultra-5g-sm-g998bds-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy S21 Ultra 5G SM-G99...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="4330247"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-4330247/گوشی-موبایل-سامسونگ-مدل-galaxy-s21-ultra-5g-sm-g998bds-دو-سیم-کارت-ظرفیت-256-گیگابایت-و-رم-12-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۲۸,۳۹۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3183082"
                   data-position="14">
                <div class="c-product-box"><a data-id="3183082"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3183082/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-32-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/dda06bfb7f4df20d01f58bdcdee0d91625c96797_1596431171.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل شیائومی مدل Redmi 9 M2004J19G دو سیم‌ کارت ظرفیت 32 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3183082"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3183082/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                      گوشی موبایل شیائومی مدل Redmi 9 M2004J19G دو سیم‌ ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3183082"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3183082/گوشی-موبایل-شیائومی-مدل-redmi-9-m2004j19g-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۳,۲۷۰,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4244447"
                   data-position="15">
                <div class="c-product-box"><a data-id="4244447"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4244447/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-3754319"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/a1981f054f980e183cb23ff39799bd37ac983ae4_1610788090.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل شیائومی مدل POCO X3 NFC M2007J20CG دو سیم‌ کارت ظرفیت 64 گیگابایت و رم 6 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="4244447"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4244447/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-3754319">
                      گوشی موبایل شیائومی مدل POCO X3 NFC M2007J20CG دو ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="4244447"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-4244447/گوشی-موبایل-شیائومی-مدل-poco-x3-m2007j20cg-دو-سیم-کارت-ظرفیت-128-گیگابایت-clone-1-of-3754319">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۵,۹۱۰,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3532969"
                   data-position="16">
                <div class="c-product-box"><a data-id="3532969"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3532969/گوشی-موبایل-هوآوی-مدل-y8p-aqm-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/7ed37a46aceaefc032c405304049e34cd7dfc91c_1602333633.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل هوآوی مدل Y8p AQM-LX1 دو سیم کارت ظرفیت 128 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3532969"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3532969/گوشی-موبایل-هوآوی-مدل-y8p-aqm-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                      گوشی موبایل هوآوی مدل Y8p AQM-LX1 دو سیم کارت ظرفی...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3532969"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3532969/گوشی-موبایل-هوآوی-مدل-y8p-aqm-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۴,۱۹۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3246506"
                   data-position="17">
                <div class="c-product-box"><a data-id="3246506"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3246506/گوشی-موبایل-شیائومی-مدل-redmi-9a-m2006c3lg-دو-سیم-کارت-ظرفیت-32-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/2f5cbd1996ddd89464afeed70d4def6529cb4ed8_1597575940.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت	"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3246506"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3246506/گوشی-موبایل-شیائومی-مدل-redmi-9a-m2006c3lg-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                      گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3246506"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3246506/گوشی-موبایل-شیائومی-مدل-redmi-9a-m2006c3lg-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۳,۲۰۰,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2066213"
                   data-position="18">
                <div class="c-product-box"><a data-id="2066213"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2066213/گوشی-موبایل-سامسونگ-مدل-galaxy-a10s-sm-a107fds-دو-سیم-کارت-ظرفیت-32-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/113562469.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy A10s SM-A107F/DS دو سیم کارت ظرفیت 32 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="2066213"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2066213/گوشی-موبایل-سامسونگ-مدل-galaxy-a10s-sm-a107fds-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy A10s SM-A107F/DS دو...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="2066213"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2066213/گوشی-موبایل-سامسونگ-مدل-galaxy-a10s-sm-a107fds-دو-سیم-کارت-ظرفیت-32-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۳,۱۱۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="4230579"
                   data-position="19">
                <div class="c-product-box"><a data-id="4230579"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4230579/گوشی-موبایل-سامسونگ-مدل-galaxy-a12-sm-a125fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-4-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/6207b3bf015d7fff97e9e04868497ac6a30474a3_1610543495.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 128 گیگابایت و رم 4 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="4230579"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4230579/گوشی-موبایل-سامسونگ-مدل-galaxy-a12-sm-a125fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-4-گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="4230579"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-4230579/گوشی-موبایل-سامسونگ-مدل-galaxy-a12-sm-a125fds-دو-سیم-کارت-ظرفیت-128-گیگابایت-و-رم-4-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۴,۳۴۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="3266410"
                   data-position="20">
                <div class="c-product-box"><a data-id="3266410"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3266410/گوشی-موبایل-سامسونگ-مدل-galaxy-a01-core-sm-a013gds-دو-سیم-کارت-ظرفیت-16-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/d0287df2f6aa331ed66926d9d30684ad1ca018ab_1597834727.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل سامسونگ مدل Galaxy A01 Core SM-A013G/DS دو سیم کارت ظرفیت 16 گیگابایت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3266410"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3266410/گوشی-موبایل-سامسونگ-مدل-galaxy-a01-core-sm-a013gds-دو-سیم-کارت-ظرفیت-16-گیگابایت">
                      گوشی موبایل سامسونگ مدل Galaxy A01 Core SM-A013G/D...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3266410"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3266410/گوشی-موبایل-سامسونگ-مدل-galaxy-a01-core-sm-a013gds-دو-سیم-کارت-ظرفیت-16-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۲,۰۱۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-1" data-id="2961837"
                   data-position="21">
                <div class="c-product-box"><a data-id="2961837"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2961837/گوشی-موبایل-هوآوی-مدل-nova-7i-jny-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/121811757.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="گوشی موبایل هوآوی مدل Nova 7i JNY-LX1 دو سیم کارت ظرفیت 128 گیگابایت	"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="2961837"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2961837/گوشی-موبایل-هوآوی-مدل-nova-7i-jny-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                      گوشی موبایل هوآوی مدل Nova 7i JNY-LX1 دو سیم کارت ...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="2961837"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2961837/گوشی-موبایل-هوآوی-مدل-nova-7i-jny-lx1-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۶,۱۸۰,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>
      <aside class="c-adplacement c-adplacement--main-page-inner c-adplacement__container-row"><a
          href="https://www.digikala.com/product-list/plp_2172148/?&promo_name=%D9%BE%D8%A7%D8%B1%D8%AA%D9%86%D8%B1%D8%B4%DB%8C%D9%BE+-+%D8%AF%DB%8C%D8%A7%DA%A9%D9%88&promo_position=home_bottom&promo_creative=65848&bCode=65848"
          class="c-adplacement__item js-banner-impression-adro"
          data-id="65848"
          data-observed="0"
          target="_blank"
          data-is-trackable=""
          title="پارتنرشیپ - دیاکو">
          <div class="c-adplacement__sponsored_box"><img
              src="https://dkstatics-public.digikala.com/digikala-adservice-banners/92afb0f51f4fc434ae230b5457b14622a397abcb_1615636191.jpg?x-oss-process=image/quality,q_80"
              alt="پارتنرشیپ - دیاکو" loading="lazy"/></div>
        </a></aside>
      <div class="swiper-products-container" data-type="homepagelatest">
        <script>
          var carouselDataTracker = {
            "carouselPosition": "HOME_7",
            "id": "sn-carousels-2",
            "title": "\u0645\u0646\u062a\u062e\u0628 \u062c\u062f\u06cc\u062f\u062a\u0631\u06cc\u0646 \u06a9\u0627\u0644\u0627\u0647\u0627",
            "title_en": "Newest",
            "products": [{
              "id": 4504443,
              "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 04",
              "price": 389000,
              "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 1,
              "status": "marketable"
            }, {
              "id": 4504481,
              "name": "\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0633\u06cc\u062d\u0627\u0646 \u0645\u062f\u0644 GLP \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc POCO F2 Pro",
              "price": 157500,
              "category": "Mobile Lens Screen Protector",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 2,
              "status": "marketable"
            }, {
              "id": 4504456,
              "name": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u062f\u06cc\u0648\u0627\u06cc\u0632 \u0645\u062f\u0644 \u0644\u062c\u0646\u062f \u062d\u062c\u0645 45 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
              "price": 520000,
              "category": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
              "brand": "Diviz",
              "position": 3,
              "status": "marketable"
            }, {
              "id": 4504570,
              "name": " \u0633\u062a \u0633\u0648\u06cc\u0634\u0631\u062a  \u0648 \u0634\u0644\u0648\u0627\u0631 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 \u0641\u06cc\u0644 brfp-327 \u0631\u0646\u06af \u0635\u0648\u0631\u062a\u06cc \u0631\u0648\u0634\u0646",
              "price": 1090000,
              "category": "WOMEN Homewear Sets",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 4,
              "status": "marketable"
            }, {
              "id": 4504516,
              "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 612",
              "price": 2400000,
              "category": "WOMEN Homewear Sets",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 5,
              "status": "marketable"
            }, {
              "id": 4609196,
              "name": "\u062c\u0627\u062f\u0633\u062a\u0645\u0627\u0644 \u0645\u062f\u0644 SD 1008",
              "price": 1280000,
              "category": "Tissue Holder",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 6,
              "status": "marketable"
            }, {
              "id": 4504578,
              "name": "\u0634\u0627\u0644 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 3",
              "price": 950000,
              "category": "WOMEN SCARVES",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 7,
              "status": "marketable"
            }, {
              "id": 4504577,
              "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0646\u0648\u0632\u0627\u062f\u06cc \u0645\u062f\u0644 \u0646\u0648\u0627",
              "price": 1990000,
              "category": "KIDS DRESSES",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 8,
              "status": "marketable"
            }, {
              "id": 4504587,
              "name": "\u06a9\u062a\u0627\u0628 \u0639\u0645\u0627\u0631 \u062d\u0644\u0628 \u0627\u062b\u0631 \u0645\u062d\u0645\u062f \u0639\u0644\u06cc \u062c\u0639\u0641\u0631\u06cc \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0631\u0648\u0627\u06cc\u062a \u0641\u062a\u062d",
              "price": 270000,
              "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
              "brand": "Revayat e Fath Publications",
              "position": 9,
              "status": "marketable"
            }, {
              "id": 4504649,
              "name": "\u0631\u0648\u063a\u0646 \u0644\u062d\u06cc\u0645 \u0644\u0627\u062a\u0641\u062a \u0645\u062f\u0644 aria solder \u0648\u0632\u0646 50 \u06af\u0631\u0645",
              "price": 450000,
              "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0647\u0648\u06cc\u0647",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 10,
              "status": "marketable"
            }, {
              "id": 4504450,
              "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 05",
              "price": 389000,
              "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 11,
              "status": "marketable"
            }, {
              "id": 4504672,
              "name": "\u0645\u0644\u062e \u06a9\u0648\u0627\u062f\u06a9\u0648\u067e\u062a\u0631 \u0645\u062f\u0644 1001 \u0628\u0633\u062a\u0647 6 \u0639\u062f\u062f\u06cc",
              "price": 70000,
              "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u062c\u062a",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 12,
              "status": "marketable"
            }, {
              "id": 4504521,
              "name": "\u0634\u0627\u0644 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 AMN302",
              "price": 1020000,
              "category": "WOMEN SCARVES",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 13,
              "status": "marketable"
            }, {
              "id": 4504459,
              "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 06",
              "price": 389000,
              "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 14,
              "status": "marketable"
            }, {
              "id": 4504518,
              "name": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u062f\u06cc\u0648\u0627\u06cc\u0632 \u0645\u062f\u0644 \u0633\u0627\u0648\u0627\u062c \u062d\u062c\u0645 45 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
              "price": 510000,
              "category": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
              "brand": "Diviz",
              "position": 15,
              "status": "marketable"
            }, {
              "id": 4504453,
              "name": "\u0642\u0631\u0635 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647 \u062f\u0647\u0627\u0646 \u0646\u0626\u0648\u0646 \u0628\u0627 \u0637\u0639\u0645 \u0647\u0644\u0648  - 15 \u06af\u0631\u0645",
              "price": 85000,
              "category": "\u0622\u062f\u0627\u0645\u0633 \u0648 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647\u200c\u06cc \u062f\u0647\u0627\u0646",
              "brand": "\u0646\u0626\u0648\u0646",
              "position": 16,
              "status": "marketable"
            }, {
              "id": 4504523,
              "name": "    \u06a9\u0627\u0648\u0631 \u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0646\u06af  \u0645\u062f\u0644VICTORIA \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af Galaxy A70\/A70s",
              "price": 693000,
              "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 17,
              "status": "marketable"
            }, {
              "id": 4504588,
              "name": "\u0645\u062c\u0645\u0648\u0639\u0647 \u06f1\u06f0\u06f4 \u0639\u062f\u062f\u06cc \u0627\u0628\u0632\u0627\u0631 \u0622\u067e \u0627\u0633\u067e\u0631\u06cc\u062a \u0645\u062f\u0644 kit",
              "price": 22000000,
              "category": "Tools Set",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 18,
              "status": "marketable"
            }, {
              "id": 4504473,
              "name": "\u062c\u0627 \u06a9\u0644\u06cc\u062f\u06cc \u0632\u0646\u0627\u0646\u0647 \u0645\u0631\u062f\u0627\u0646\u0647 \u062a\u0631\u0645\u0647 1 \u0637\u0631\u062d \u0645\u062d\u0645\u062f \u06a9\u062f jms 7002",
              "price": 960000,
              "category": "UNI Keyring & keyChain",
              "brand": "\u062a\u0631\u0645\u0647 \u06f1",
              "position": 19,
              "status": "marketable"
            }, {
              "id": 4504445,
              "name": "\u06af\u0644\u062f\u0627\u0646 \u062f\u06a9\u0648\u0631\u06cc \u0645\u062f\u0644 \u0631\u0648\u06cc\u0627\u0644 \u06a9\u062f Shahrad_2535",
              "price": 215000,
              "category": "\u06af\u0644 \u0648 \u06af\u0644\u062f\u0627\u0646",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 20,
              "status": "marketable"
            }, {
              "id": 4504485,
              "name": "    \u06a9\u0627\u0648\u0631 \u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0646\u06af  \u0645\u062f\u0644VICTORIA \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af Galaxy A50\/A50s\/A30s",
              "price": 693000,
              "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 21,
              "status": "marketable"
            }, {
              "id": 4504496,
              "name": "\u062c\u0627 \u0634\u0645\u0639\u06cc \u0686\u0648\u0628\u06cc \u06a9\u062f 88",
              "price": 350000,
              "category": "\u062c\u0627\u0634\u0645\u0639\u06cc\u060c \u062c\u0627\u0639\u0648\u062f\u06cc \u0648 \u0622\u0628\u0627\u0698\u0648\u0631",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 22,
              "status": "marketable"
            }, {
              "id": 4504673,
              "name": "\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628 \u0644\u0648\u06a9\u0633\u06cc\u0646\u0648 \u0645\u062f\u0644 \u0633\u06cc\u0628\u06cc\u0644 \u0631\u0648\u06cc\u0627\u0644 \u0645\u062c\u0645\u0648\u0639\u0647 2 \u0639\u062f\u062f\u06cc",
              "price": 139500,
              "category": "\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628",
              "brand": "\u0644\u0648\u06a9\u0633\u06cc\u0646\u0648",
              "position": 23,
              "status": "marketable"
            }, {
              "id": 4504507,
              "name": "\u0686\u0645\u062f\u0627\u0646 \u0645\u062f\u0644 JPK \u0633\u0627\u06cc\u0632 \u0645\u062a\u0648\u0633\u0637",
              "price": 5400000,
              "category": "\u0633\u0627\u06a9 \u0648 \u0686\u0645\u062f\u0627\u0646",
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "position": 24,
              "status": "marketable"
            }]
          };
          if (carouselDataTracker) {
            if (!window.carouselData)
              window.carouselData = [carouselDataTracker];
            else
              window.carouselData.push(carouselDataTracker);
          }

          var carouselDataTracker = null;
          if (carouselDataTracker) {
            if (!window.carouselData)
              window.carouselData = [carouselDataTracker];
            else
              window.carouselData.push(carouselDataTracker);
          }
        </script>
        <script>
          window.dataLayer.push({
            "event": "eec.productImpression", "ecommerce": {
              "currencyCode": "EUR",
              "impressions": [{
                "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 04",
                "id": 4504443,
                "price": 389000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "list": "category-\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "position": 1,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 5,
                "metric6": 1,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u062f\u0648\u0631\u0628\u06cc\u0646 \u0633\u06cc\u062d\u0627\u0646 \u0645\u062f\u0644 GLP \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc POCO F2 Pro",
                "id": 4504481,
                "price": 157500,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "list": "category-\u0645\u062d\u0627\u0641\u0638 \u0644\u0646\u0632 \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                "position": 2,
                "dimension6": 1,
                "dimension2": 37,
                "dimension9": 5,
                "metric6": 1,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "special-offer"
              }, {
                "name": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u062f\u06cc\u0648\u0627\u06cc\u0632 \u0645\u062f\u0644 \u0644\u062c\u0646\u062f \u062d\u062c\u0645 45 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
                "id": 4504456,
                "price": 520000,
                "brand": "\u062f\u06cc\u0648\u0627\u06cc\u0632",
                "category": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                "list": "category-\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                "position": 3,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": " \u0633\u062a \u0633\u0648\u06cc\u0634\u0631\u062a  \u0648 \u0634\u0644\u0648\u0627\u0631 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 \u0641\u06cc\u0644 brfp-327 \u0631\u0646\u06af \u0635\u0648\u0631\u062a\u06cc \u0631\u0648\u0634\u0646",
                "id": 4504570,
                "price": 1090000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u0632\u0646\u0627\u0646\u0647",
                "list": "category-\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u0632\u0646\u0627\u0646\u0647",
                "position": 4,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 612",
                "id": 4504516,
                "price": 2400000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u0632\u0646\u0627\u0646\u0647",
                "list": "category-\u0633\u062a \u0644\u0628\u0627\u0633 \u0631\u0627\u062d\u062a\u06cc \u0632\u0646\u0627\u0646\u0647",
                "position": 5,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u062c\u0627\u062f\u0633\u062a\u0645\u0627\u0644 \u0645\u062f\u0644 SD 1008",
                "id": 4609196,
                "price": 1280000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u062c\u0627\u062f\u0633\u062a\u0645\u0627\u0644\u06cc",
                "list": "category-\u062c\u0627\u062f\u0633\u062a\u0645\u0627\u0644\u06cc",
                "position": 6,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u0634\u0627\u0644 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 3",
                "id": 4504578,
                "price": 950000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0634\u0627\u0644 \u0648 \u0631\u0648\u0633\u0631\u06cc \u0632\u0646\u0627\u0646\u0647",
                "list": "category-\u0634\u0627\u0644 \u0648 \u0631\u0648\u0633\u0631\u06cc \u0632\u0646\u0627\u0646\u0647",
                "position": 7,
                "dimension6": 0,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0646\u0648\u0632\u0627\u062f\u06cc \u0645\u062f\u0644 \u0646\u0648\u0627",
                "id": 4504577,
                "price": 1990000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0648 \u0633\u0627\u0631\u0627\u0641\u0648\u0646 \u0646\u0648\u0632\u0627\u062f",
                "list": "category-\u067e\u06cc\u0631\u0627\u0647\u0646 \u0648 \u0633\u0627\u0631\u0627\u0641\u0648\u0646 \u0646\u0648\u0632\u0627\u062f",
                "position": 8,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u06a9\u062a\u0627\u0628 \u0639\u0645\u0627\u0631 \u062d\u0644\u0628 \u0627\u062b\u0631 \u0645\u062d\u0645\u062f \u0639\u0644\u06cc \u062c\u0639\u0641\u0631\u06cc \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0631\u0648\u0627\u06cc\u062a \u0641\u062a\u062d",
                "id": 4504587,
                "price": 270000,
                "brand": "\u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0631\u0648\u0627\u06cc\u062a \u0641\u062a\u062d",
                "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                "list": "category-\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
                "position": 9,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u0631\u0648\u063a\u0646 \u0644\u062d\u06cc\u0645 \u0644\u0627\u062a\u0641\u062a \u0645\u062f\u0644 aria solder \u0648\u0632\u0646 50 \u06af\u0631\u0645",
                "id": 4504649,
                "price": 450000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0647\u0648\u06cc\u0647",
                "list": "category-\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u0647\u0648\u06cc\u0647",
                "position": 10,
                "dimension6": 1,
                "dimension2": 18,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "special-offer"
              }, {
                "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 05",
                "id": 4504450,
                "price": 389000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "list": "category-\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "position": 11,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u0645\u0644\u062e \u06a9\u0648\u0627\u062f\u06a9\u0648\u067e\u062a\u0631 \u0645\u062f\u0644 1001 \u0628\u0633\u062a\u0647 6 \u0639\u062f\u062f\u06cc",
                "id": 4504672,
                "price": 70000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u062c\u062a",
                "list": "category-\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06af\u062c\u062a",
                "position": 12,
                "dimension6": 1,
                "dimension2": 30,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "special-offer"
              }, {
                "name": "\u0634\u0627\u0644 \u0632\u0646\u0627\u0646\u0647 \u0645\u062f\u0644 AMN302",
                "id": 4504521,
                "price": 1020000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0634\u0627\u0644 \u0648 \u0631\u0648\u0633\u0631\u06cc \u0632\u0646\u0627\u0646\u0647",
                "list": "category-\u0634\u0627\u0644 \u0648 \u0631\u0648\u0633\u0631\u06cc \u0632\u0646\u0627\u0646\u0647",
                "position": 13,
                "dimension6": 0,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u0645\u0627\u06af \u0645\u062f\u0644 \u0631\u0648\u0632 \u067e\u062f\u0631 \u06a9\u062f 06",
                "id": 4504459,
                "price": 389000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "list": "category-\u0645\u0627\u06af\u060c \u0644\u06cc\u0648\u0627\u0646 \u0648 \u0641\u0646\u062c\u0627\u0646",
                "position": 14,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u062f\u06cc\u0648\u0627\u06cc\u0632 \u0645\u062f\u0644 \u0633\u0627\u0648\u0627\u062c \u062d\u062c\u0645 45 \u0645\u06cc\u0644\u06cc \u0644\u06cc\u062a\u0631",
                "id": 4504518,
                "price": 510000,
                "brand": "\u062f\u06cc\u0648\u0627\u06cc\u0632",
                "category": "\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                "list": "category-\u0639\u0637\u0631 \u062c\u06cc\u0628\u06cc",
                "position": 15,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u0642\u0631\u0635 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647 \u062f\u0647\u0627\u0646 \u0646\u0626\u0648\u0646 \u0628\u0627 \u0637\u0639\u0645 \u0647\u0644\u0648  - 15 \u06af\u0631\u0645",
                "id": 4504453,
                "price": 85000,
                "brand": "\u0646\u0626\u0648\u0646",
                "category": "\u0622\u062f\u0627\u0645\u0633 \u0648 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647\u200c\u06cc \u062f\u0647\u0627\u0646",
                "list": "category-\u0622\u062f\u0627\u0645\u0633 \u0648 \u062e\u0648\u0634\u0628\u0648 \u06a9\u0646\u0646\u062f\u0647\u200c\u06cc \u062f\u0647\u0627\u0646",
                "position": 16,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 3,
                "metric6": 3,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "    \u06a9\u0627\u0648\u0631 \u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0646\u06af  \u0645\u062f\u0644VICTORIA \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af Galaxy A70\/A70s",
                "id": 4504523,
                "price": 693000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                "list": "category-\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                "position": 17,
                "dimension6": 0,
                "dimension2": 30,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "special-offer"
              }, {
                "name": "\u0645\u062c\u0645\u0648\u0639\u0647 \u06f1\u06f0\u06f4 \u0639\u062f\u062f\u06cc \u0627\u0628\u0632\u0627\u0631 \u0622\u067e \u0627\u0633\u067e\u0631\u06cc\u062a \u0645\u062f\u0644 kit",
                "id": 4504588,
                "price": 22000000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0645\u062c\u0645\u0648\u0639\u0647 \u0627\u0628\u0632\u0627\u0631",
                "list": "category-\u0645\u062c\u0645\u0648\u0639\u0647 \u0627\u0628\u0632\u0627\u0631",
                "position": 18,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u062c\u0627 \u06a9\u0644\u06cc\u062f\u06cc \u0632\u0646\u0627\u0646\u0647 \u0645\u0631\u062f\u0627\u0646\u0647 \u062a\u0631\u0645\u0647 1 \u0637\u0631\u062d \u0645\u062d\u0645\u062f \u06a9\u062f jms 7002",
                "id": 4504473,
                "price": 960000,
                "brand": "\u062a\u0631\u0645\u0647 \u06f1",
                "category": "\u062c\u0627\u06a9\u0644\u06cc\u062f\u06cc \u0632\u0646\u0627\u0646\u0647 \u0648 \u0645\u0631\u062f\u0627\u0646\u0647",
                "list": "category-\u062c\u0627\u06a9\u0644\u06cc\u062f\u06cc \u0632\u0646\u0627\u0646\u0647 \u0648 \u0645\u0631\u062f\u0627\u0646\u0647",
                "position": 19,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u06af\u0644\u062f\u0627\u0646 \u062f\u06a9\u0648\u0631\u06cc \u0645\u062f\u0644 \u0631\u0648\u06cc\u0627\u0644 \u06a9\u062f Shahrad_2535",
                "id": 4504445,
                "price": 215000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u06af\u0644 \u0648 \u06af\u0644\u062f\u0627\u0646",
                "list": "category-\u06af\u0644 \u0648 \u06af\u0644\u062f\u0627\u0646",
                "position": 20,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 3,
                "metric6": 2,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "    \u06a9\u0627\u0648\u0631 \u0644\u0627\u06cc\u0646 \u06a9\u06cc\u0646\u06af  \u0645\u062f\u0644VICTORIA \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af Galaxy A50\/A50s\/A30s",
                "id": 4504485,
                "price": 693000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                "list": "category-\u06a9\u06cc\u0641 \u0648 \u06a9\u0627\u0648\u0631 \u06af\u0648\u0634\u06cc",
                "position": 21,
                "dimension6": 0,
                "dimension2": 30,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "special-offer"
              }, {
                "name": "\u062c\u0627 \u0634\u0645\u0639\u06cc \u0686\u0648\u0628\u06cc \u06a9\u062f 88",
                "id": 4504496,
                "price": 350000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u062c\u0627\u0634\u0645\u0639\u06cc\u060c \u062c\u0627\u0639\u0648\u062f\u06cc \u0648 \u0622\u0628\u0627\u0698\u0648\u0631",
                "list": "category-\u062c\u0627\u0634\u0645\u0639\u06cc\u060c \u062c\u0627\u0639\u0648\u062f\u06cc \u0648 \u0622\u0628\u0627\u0698\u0648\u0631",
                "position": 22,
                "dimension6": 1,
                "dimension2": 0,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "none"
              }, {
                "name": "\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628 \u0644\u0648\u06a9\u0633\u06cc\u0646\u0648 \u0645\u062f\u0644 \u0633\u06cc\u0628\u06cc\u0644 \u0631\u0648\u06cc\u0627\u0644 \u0645\u062c\u0645\u0648\u0639\u0647 2 \u0639\u062f\u062f\u06cc",
                "id": 4504673,
                "price": 139500,
                "brand": "\u0644\u0648\u06a9\u0633\u06cc\u0646\u0648",
                "category": "\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628",
                "list": "category-\u0646\u0634\u0627\u0646\u06af\u0631 \u06a9\u062a\u0627\u0628",
                "position": 23,
                "dimension6": 1,
                "dimension2": 10,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "special-offer"
              }, {
                "name": "\u0686\u0645\u062f\u0627\u0646 \u0645\u062f\u0644 JPK \u0633\u0627\u06cc\u0632 \u0645\u062a\u0648\u0633\u0637",
                "id": 4504507,
                "price": 5400000,
                "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                "category": "\u0633\u0627\u06a9 \u0648 \u0686\u0645\u062f\u0627\u0646",
                "list": "category-\u0633\u0627\u06a9 \u0648 \u0686\u0645\u062f\u0627\u0646",
                "position": 24,
                "dimension6": 0,
                "dimension2": 45,
                "dimension9": 0,
                "metric6": 0,
                "dimension11": 0,
                "dimension20": "marketable",
                "dimension18": "most-viewed",
                "dimension19": "carousel-top-new",
                "dimension7": "special-offer"
              }]
            }
          });
        </script>
        <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-2">
          <div class="o-headline">
            <span>منتخب جدیدترین کالاها</span>
            <a href="/search/?has_selling_stock=1&sortby=1" class="c-swiper__show-more">مشاهده همه</a>
          </div>
          <div class="c-box" id="sn-carousels-2">
            <div class="swiper-container swiper-container-horizontal js-swiper-products">
              <div class="swiper-wrapper">
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-2" data-id="4504443"
                     data-position="1">
                  <div class="c-product-box"><a data-id="4504443"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4504443/ماگ-مدل-روز-پدر-کد-04"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/5aeb596f74357163c4d3cd3a4ef597bea78e7e92_1613770982.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="ماگ مدل روز پدر کد 04"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4504443"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4504443/ماگ-مدل-روز-پدر-کد-04">
                        ماگ مدل روز پدر کد 04
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4504443"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4504443/ماگ-مدل-روز-پدر-کد-04">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value"></div>
                            <div class="c-new-price__value">
                              ۳۸,۹۰۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-2" data-id="4504481"
                     data-position="2">
                  <div class="c-product-box"><a data-id="4504481"
                                                class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                                href="/product/dkp-4504481/محافظ-لنز-دوربین-سیحان-مدل-glp-مناسب-برای-گوشی-موبایل-شیائومی-poco-f2-pro"><img
                        data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/3d6d40d79813bf59d85ad9178c5f76a409b2fee9_1613771406.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                        alt="محافظ لنز دوربین سیحان مدل GLP مناسب برای گوشی موبایل شیائومی POCO F2 Pro"
                        class="swiper-lazy"></a>
                    <div class="c-product-box__title"><a data-id="4504481"
                                                         class="js-product-url js-carousel-ga-product-box"
                                                         href="/product/dkp-4504481/محافظ-لنز-دوربین-سیحان-مدل-glp-مناسب-برای-گوشی-موبایل-شیائومی-poco-f2-pro">
                        محافظ لنز دوربین سیحان مدل GLP مناسب برای گوشی موب...
                      </a></div>
                    <div class="c-product-box__price-row">
                      <div class="c-product-box__price-item"><a data-id="4504481"
                                                                class="js-product-url js-carousel-ga-product-box"
                                                                href="/product/dkp-4504481/محافظ-لنز-دوربین-سیحان-مدل-glp-مناسب-برای-گوشی-موبایل-شیائومی-poco-f2-pro">
                          <div class="c-new-price">
                            <div class="c-new-price__old-value">
                              <del>۲۵,۰۰۰</del>
                              <span class="c-new-price__discount">۳۷٪</span></div>
                            <div class="c-new-price__value">
                              ۱۵,۷۵۰
                              <span class="c-new-price__currency">تومان</span></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
                <!-- count: 24 -->
              </div>
              <div class="swiper-button-prev js-swiper-button-prev"></div>
              <div class="swiper-button-next js-swiper-button-next"></div>
            </div>
          </div>
        </section>
      </div>

      <script>
        var carouselDataTracker = {
          "carouselPosition": "HOME_8",
          "id": "sn-carousels-3",
          "title": "\u0645\u062d\u0635\u0648\u0644\u0627\u062a \u067e\u0631\u0641\u0631\u0648\u0634 \u0627\u062e\u06cc\u0631",
          "title_en": "Most sold trends product",
          "products": [{
            "id": 2071360,
            "name": "\u0631\u0648\u063a\u0646 \u0646\u06cc\u0645\u0647 \u062c\u0627\u0645\u062f \u0632\u06cc\u0631\u0648 \u062a\u0631\u0627\u0646\u0633 \u0637\u0628\u06cc\u0639\u062a - 5  \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
            "price": 700000,
            "category": "\u0631\u0648\u063a\u0646",
            "brand": "\u0637\u0628\u06cc\u0639\u062a",
            "position": 1,
            "status": "marketable"
          }, {
            "id": 3501717,
            "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 \u0645\u0644\u062a \u0628\u0644\u0648\u0646 \u0628\u0633\u062a\u0647 51 \u0639\u062f\u062f\u06cc",
            "price": 217100,
            "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 2,
            "status": "marketable"
          }, {
            "id": 2066213,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 31190000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 3,
            "status": "marketable"
          }, {
            "id": 1492772,
            "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b \u0645\u062f\u0644 SP01",
            "price": 367000,
            "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 4,
            "status": "marketable"
          }, {
            "id": 4122136,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 41390000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 5,
            "status": "marketable"
          }, {
            "id": 888728,
            "name": "\u0631\u06cc\u0633\u0647 \u0627\u0644 \u0627\u06cc \u062f\u06cc \u06a9\u062f 100-LED \u0637\u0648\u0644 10 \u0645\u062a\u0631 ",
            "price": 381800,
            "category": "\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 6,
            "status": "marketable"
          }, {
            "id": 4264171,
            "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 3270 \u0628\u0633\u062a\u0647 50 \u0639\u062f\u062f\u06cc",
            "price": 245000,
            "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 7,
            "status": "marketable"
          }, {
            "id": 4230198,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 \u06f4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 32490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 8,
            "status": "marketable"
          }, {
            "id": 3048126,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
            "price": 46490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 9,
            "status": "marketable"
          }, {
            "id": 2910269,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 55390000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 10,
            "status": "marketable"
          }, {
            "id": 3366444,
            "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 SB1 \u0628\u0633\u062a\u0647 50 \u0639\u062f\u062f\u06cc",
            "price": 214000,
            "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 11,
            "status": "marketable"
          }, {
            "id": 4177353,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 29990000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 12,
            "status": "marketable"
          }, {
            "id": 4230579,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 43490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 13,
            "status": "marketable"
          }, {
            "id": 1818621,
            "name": "\u0644\u0627\u0645\u067e \u0627\u0644 \u0627\u06cc \u062f\u06cc 20 \u0648\u0627\u062a \u067e\u0648\u06a9\u0644\u0627 \u06a9\u062f SH_0202 ",
            "price": 290000,
            "category": "\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 14,
            "status": "marketable"
          }, {
            "id": 3151747,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 35990000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 15,
            "status": "marketable"
          }, {
            "id": 4149037,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 45490000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Xiaomi",
            "position": 16,
            "status": "marketable"
          }, {
            "id": 3266410,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 20190000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 17,
            "status": "marketable"
          }, {
            "id": 4453371,
            "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02 SM-A022F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 3 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
            "price": 27790000,
            "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
            "brand": "Samsung",
            "position": 18,
            "status": "marketable"
          }, {
            "id": 799702,
            "name": "\u062a\u06cc \u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647 \u0637\u0631\u062d \u0644\u06cc\u0648\u0631\u067e\u0648\u0644 \u06a9\u062f 7A1",
            "price": 298000,
            "category": "MEN TEE-SHIRTS & POLOS",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 19,
            "status": "marketable"
          }, {
            "id": 1505513,
            "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 RK-12",
            "price": 420000,
            "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 20,
            "status": "marketable"
          }]
        };
        if (carouselDataTracker) {
          if (!window.carouselData)
            window.carouselData = [carouselDataTracker];
          else
            window.carouselData.push(carouselDataTracker);
        }

        var carouselDataTracker = null;
        if (carouselDataTracker) {
          if (!window.carouselData)
            window.carouselData = [carouselDataTracker];
          else
            window.carouselData.push(carouselDataTracker);
        }
      </script>

      <script>
        window.dataLayer.push({
          "event": "eec.productImpression", "ecommerce": {
            "currencyCode": "EUR",
            "impressions": [{
              "name": "\u0631\u0648\u063a\u0646 \u0646\u06cc\u0645\u0647 \u062c\u0627\u0645\u062f \u0632\u06cc\u0631\u0648 \u062a\u0631\u0627\u0646\u0633 \u0637\u0628\u06cc\u0639\u062a - 5  \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
              "id": 2071360,
              "price": 700000,
              "brand": "\u0637\u0628\u06cc\u0639\u062a",
              "category": "\u0631\u0648\u063a\u0646",
              "list": "category-\u0631\u0648\u063a\u0646",
              "position": 1,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.6,
              "metric6": 2190,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 \u0645\u0644\u062a \u0628\u0644\u0648\u0646 \u0628\u0633\u062a\u0647 51 \u0639\u062f\u062f\u06cc",
              "id": 3501717,
              "price": 217100,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "list": "category-\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "position": 2,
              "dimension6": 1,
              "dimension2": 57,
              "dimension9": 3.8,
              "metric6": 7676,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A10s SM-A107F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 2066213,
              "price": 31190000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 3,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 4368,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0628\u0644\u0648\u062a\u0648\u062b \u0645\u062f\u0644 SP01",
              "id": 1492772,
              "price": 367000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
              "list": "category-\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
              "position": 4,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 3.7,
              "metric6": 7514,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4122136,
              "price": 41390000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 5,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.5,
              "metric6": 1094,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u0631\u06cc\u0633\u0647 \u0627\u0644 \u0627\u06cc \u062f\u06cc \u06a9\u062f 100-LED \u0637\u0648\u0644 10 \u0645\u062a\u0631 ",
              "id": 888728,
              "price": 381800,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
              "list": "category-\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
              "position": 6,
              "dimension6": 1,
              "dimension2": 4,
              "dimension9": 4.4,
              "metric6": 4342,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "special-offer"
            }, {
              "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 3270 \u0628\u0633\u062a\u0647 50 \u0639\u062f\u062f\u06cc",
              "id": 4264171,
              "price": 245000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "list": "category-\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "position": 7,
              "dimension6": 1,
              "dimension2": 51,
              "dimension9": 4.3,
              "metric6": 261,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 \u06f4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4230198,
              "price": 32490000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 8,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.1,
              "metric6": 20,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A21S SM-A217F\/DS \u062f\u0648 \u0633\u06cc\u0645\u200c\u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a\t",
              "id": 3048126,
              "price": 46490000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 9,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 3183,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A31 SM-A315F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 2910269,
              "price": 55390000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 10,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 2810,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u062f\u0644 SB1 \u0628\u0633\u062a\u0647 50 \u0639\u062f\u062f\u06cc",
              "id": 3366444,
              "price": 214000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "list": "category-\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "position": 11,
              "dimension6": 1,
              "dimension2": 57,
              "dimension9": 4,
              "metric6": 2740,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02s SM-A025F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 32 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4177353,
              "price": 29990000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 12,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 79,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 4 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4230579,
              "price": 43490000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 13,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.3,
              "metric6": 102,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u0644\u0627\u0645\u067e \u0627\u0644 \u0627\u06cc \u062f\u06cc 20 \u0648\u0627\u062a \u067e\u0648\u06a9\u0644\u0627 \u06a9\u062f SH_0202 ",
              "id": 1818621,
              "price": 290000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
              "list": "category-\u0644\u0627\u0645\u067e \u0648 \u0686\u0631\u0627\u063a",
              "position": 14,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.1,
              "metric6": 1047,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 Redmi 9 M2004J19G \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3151747,
              "price": 35990000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 15,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.4,
              "metric6": 1102,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4149037,
              "price": 45490000,
              "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 16,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.2,
              "metric6": 176,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A01 Core SM-A013G\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 16 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 3266410,
              "price": 20190000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 17,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.1,
              "metric6": 1898,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A02 SM-A022F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a \u0648 \u0631\u0645 3 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
              "id": 4453371,
              "price": 27790000,
              "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
              "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
              "position": 18,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.6,
              "metric6": 7,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u062a\u06cc \u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647 \u0637\u0631\u062d \u0644\u06cc\u0648\u0631\u067e\u0648\u0644 \u06a9\u062f 7A1",
              "id": 799702,
              "price": 298000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
              "list": "category-\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
              "position": 19,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 3.5,
              "metric6": 1270,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }, {
              "name": "\u0631\u06cc\u0646\u06af \u0644\u0627\u06cc\u062a \u0645\u062f\u0644 RK-12",
              "id": 1505513,
              "price": 420000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "position": 20,
              "dimension6": 1,
              "dimension2": 0,
              "dimension9": 4.1,
              "metric6": 1451,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "home-sell-trends",
              "dimension7": "none"
            }]
          }
        });
      </script>

      <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-3">
        <div class="o-headline ">
          <span>محصولات پرفروش اخیر</span>
        </div>
        <div class="c-box" id="sn-carousels-3">
          <div class="swiper-container swiper-container-horizontal js-swiper-products">
            <div class="swiper-wrapper">
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-3" data-id="2071360"
                   data-position="1">
                <div class="c-product-box"><a data-id="2071360"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/113619953.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="روغن نیمه جامد زیرو ترانس طبیعت - 5  کیلوگرم"
                      class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                               src="https://www.digikala.com/static/files/31a78819.svg"></a>
                  <div class="c-product-box__title"><a data-id="2071360"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم">
                      روغن نیمه جامد زیرو ترانس طبیعت - 5 کیلوگرم
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__fast-shopping">
                      <div class="c-product-box__add-to-cart-section">
                        <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                            class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                            href="/cart/add/5780149/1/"
                            data-event="add_to_cart" data-event-category="ecommerce"
                            data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                          <div
                            class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                            data-variant="5780149"
                            data-cart-item=""
                            data-mode="add"
                            data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                   name="order[amount]">
                              <option value="0" class="c-product__add-cancel">حذف</option>
                              <option value="1">۱ عدد</option>
                            </select></div>
                        </div>
                      </div>
                    </div>
                    <div class="c-product-box__price-item"><a data-id="2071360"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2071360/روغن-نیمه-جامد-زیرو-ترانس-طبیعت-5-کیلوگرم">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۷۰,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-3" data-id="3501717"
                   data-position="2">
                <div class="c-product-box"><a data-id="3501717"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3501717/ماسک-تنفسی-مدل-ملت-بلون-بسته-51-عددی"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/8466ef4c6363a8ef19b41ff43813b2bfc8eec17f_1605071646.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="ماسک تنفسی مدل ملت بلون بسته 51 عددی"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3501717"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3501717/ماسک-تنفسی-مدل-ملت-بلون-بسته-51-عددی">
                      ماسک تنفسی مدل ملت بلون بسته 51 عددی
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3501717"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3501717/ماسک-تنفسی-مدل-ملت-بلون-بسته-51-عددی">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value"></div>
                          <div class="c-new-price__value">
                            ۲۱,۷۱۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <!-- count: 20 -->
            </div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>

      <section class="c-swiper c-swiper--brands">
        <div class="o-headline">
          <span>برندهای ویژه</span>
        </div>
        <div class="c-box">
          <div class="swiper-container swiper-container-horizontal js-swiper-brands">
            <div class="swiper-wrapper c-adplacement" data-dkms="5">
              <div class="swiper-slide swiper-brands-image-container">
                <a class="js-snt-banner-brand"  href="https://www.digikala.com/brand-landing/huawei/?&promo_name=%D8%A8%D8%B1%D9%86%D8%AF+%D9%87%D9%88%D8%A2%D9%88%DB%8C&promo_position=home_brand&promo_creative=16827&bCode=16827" title="برند هوآوی" data-id="16827" target="_blank">
                  <img data-src="https://dkstatics-public.digikala.com/digikala-adservice-banners/1000018250.jpg?x-oss-process=image/quality,q_80" alt="برند هوآوی"/>
                </a>
              </div>
              <div class="swiper-slide swiper-brands-image-container">
                <a class="js-snt-banner-brand" href="https://www.digikala.com/brand/x-vision/?&promo_name=Xvision&promo_position=home_brand&promo_creative=420&bCode=420" title="Xvision" data-id="420" target="_blank">
                  <img data-src="https://dkstatics-public.digikala.com/digikala-adservice-banners/2315.png?x-oss-process=image/quality,q_80" alt="Xvision"/>
                </a>
              </div>
            </div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>
      <script>
        var carouselDataTracker = {
          "carouselPosition": "HOME_9",
          "id": "sn-carousels-4",
          "title": "\u0645\u0646\u062a\u062e\u0628 \u0645\u062d\u0635\u0648\u0644\u0627\u062a \u062a\u062e\u0641\u06cc\u0641 \u0648 \u062d\u0631\u0627\u062c",
          "title_en": "Selling and sales products",
          "products": [{
            "id": 1481812,
            "name": "\u0633\u0633 \u0647\u0632\u0627\u0631 \u062c\u0632\u06cc\u0631\u0647 \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 510 \u06af\u0631\u0645",
            "price": 104000,
            "category": "\u0633\u0633",
            "brand": "Bijan",
            "position": 1,
            "status": "marketable"
          }, {
            "id": 3499448,
            "name": " \u0628\u0631\u0686\u0633\u0628 \u067e\u0644\u0627\u06a9 \u062e\u0648\u062f\u0631\u0648 \u0645\u0633\u062a\u0631 \u0631\u0627\u062f \u0637\u0631\u062d \u067e\u0631\u0686\u0645 \u0627\u06cc\u0631\u0627\u0646 \u0645\u062f\u0644 1221\u0628\u0633\u062a\u0647 \u062f\u0648\u0639\u062f\u062f\u06cc",
            "price": 50000,
            "category": "\u0633\u0627\u06cc\u0631 \u0644\u0648\u0627\u0632\u0645 \u062e\u0648\u062f\u0631\u0648",
            "brand": "Mr Rad",
            "position": 2,
            "status": "marketable"
          }, {
            "id": 2157237,
            "name": "\u0645\u0627\u0698\u06cc\u06a9 \u0648\u0627\u06cc\u062a \u0628\u0631\u062f \u06a9\u062f x-828 M \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
            "price": 107000,
            "category": "\u0645\u0627\u0698\u06cc\u06a9",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 3,
            "status": "marketable"
          }, {
            "id": 3112239,
            "name": "\u06a9\u062a\u0627\u0628 \u0628\u062e\u0648\u0627\u0647\u06cc\u062f \u062a\u0627 \u0628\u0647 \u0634\u0645\u0627 \u062f\u0627\u062f\u0647 \u0634\u0648\u062f \u0627\u062b\u0631 \u0627\u0633\u062a\u0631 \u0647\u06cc\u06a9\u0633 \u0648 \u062c\u0631\u06cc \u0647\u06cc\u06a9\u0633 \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0622\u062a\u06cc\u0633\u0627",
            "price": 210800,
            "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
            "brand": "Atisa Publishers",
            "position": 4,
            "status": "marketable"
          }, {
            "id": 911070,
            "name": "\u0622\u06cc\u0646\u0647 \u067e\u0644\u06a9\u0633\u06cc \u06af\u0644\u0633  \u0628\u0646\u06cc \u062f\u06a9\u0648 \u0645\u062f\u0644 m06",
            "price": 144000,
            "category": "\u0622\u06cc\u0646\u0647",
            "brand": "benideco",
            "position": 5,
            "status": "marketable"
          }, {
            "id": 3429171,
            "name": "\u06a9\u062a\u0627\u0628 \u0634\u0627\u0632\u062f\u0647 \u06a9\u0648\u0686\u0648\u0644\u0648 \u0627\u062b\u0631 \u0622\u0646\u062a\u0648\u0627\u0646 \u062f\u0648\u0633\u0646\u062a \u0627\u06af\u0632\u0648\u067e\u0631\u06cc \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0646\u06af\u06cc\u0646 \u0627\u06cc\u0631\u0627\u0646",
            "price": 79000,
            "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
            "brand": "entesharat negin iran",
            "position": 6,
            "status": "marketable"
          }, {
            "id": 4104459,
            "name": "\u067e\u0648\u062f\u0631 \u0645\u0627\u0634\u06cc\u0646 \u0644\u0628\u0627\u0633\u0634\u0648\u06cc\u06cc \u067e\u0631\u0633\u06cc\u0644 \u0628\u0627 \u0631\u0627\u06cc\u062d\u0647 \u0644\u0627\u0648\u0646\u062f\u0631 \u0645\u0642\u062f\u0627\u0631 4000 \u06af\u0631\u0645 \u0628\u0627 \u0633\u0637\u0644 \u0648 \u067e\u06cc\u0645\u0627\u0646\u0647 \u0647\u062f\u06cc\u0647 \u0648 200 \u06af\u0631\u0645 \u067e\u0648\u062f\u0631 \u0628\u06cc\u0634\u062a\u0631 ",
            "price": 897000,
            "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0631\u062e\u062a",
            "brand": "Persil",
            "position": 7,
            "status": "marketable"
          }, {
            "id": 2311836,
            "name": "\u0645\u062c\u0645\u0648\u0639\u0647 7 \u0639\u062f\u062f\u06cc \u0633\u0647 \u0646\u0638\u0627\u0645  \u06a9\u062fvb5 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u06a9\u0648\u0644\u062a \u0645\u06cc\u0646\u06cc\u0627\u062a\u0648\u0631\u06cc",
            "price": 199900,
            "category": "\u0645\u062a\u0647 \u0648 \u0633\u0631\u06cc",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 8,
            "status": "marketable"
          }, {
            "id": 3745212,
            "name": "\u0641\u0646\u062f\u06a9 \u0645\u062f\u0644 \u06a9\u0628\u0631\u06cc\u062a\u06cc \u0633\u0631\u06cc NZ1598",
            "price": 169000,
            "category": "\u0641\u0646\u062f\u06a9",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 9,
            "status": "marketable"
          }, {
            "id": 2325910,
            "name": "\u0628\u0631\u0633 \u067e\u0627\u06a9\u200c\u0633\u0627\u0632\u06cc \u06a9\u062f 02",
            "price": 227700,
            "category": "\u0627\u0628\u0632\u0627\u0631 \u0645\u0631\u0627\u0642\u0628\u062a \u0627\u0632 \u067e\u0648\u0633\u062a",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 10,
            "status": "marketable"
          }, {
            "id": 595821,
            "name": "\u0645\u0627\u0633\u06a9 \u0646\u0642\u0627\u0628\u06cc \u0622\u0646\u06cc\u067e\u06a9 \u0645\u062f\u0644 \u0627\u0646\u0627\u0631",
            "price": 179000,
            "category": "\u0645\u0627\u0633\u06a9 \u0635\u0648\u0631\u062a \u0648 \u0628\u062f\u0646",
            "brand": "Anypack",
            "position": 11,
            "status": "marketable"
          }, {
            "id": 1056808,
            "name": "\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647  12 \u067e\u0627\u0631\u0686\u0647 \u0646\u0648\u0631\u06cc\u0646\u0648 \u0645\u062f\u0644 \u0622\u06cc\u0631\u06cc\u0646\u0627",
            "price": 580000,
            "category": "\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647",
            "brand": "noorino",
            "position": 12,
            "status": "marketable"
          }, {
            "id": 2959368,
            "name": " \u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u0646\u0631\u062c\u0627\u06cc\u0632\u0631 \u0645\u062f\u0644 UE20009  \u0638\u0631\u0641\u06cc\u062a 20000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
            "price": 3590000,
            "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
            "brand": "\u0627\u0646\u0631\u062c\u0627\u06cc\u0632\u0631",
            "position": 13,
            "status": "marketable"
          }, {
            "id": 1742756,
            "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 \u0645\u062f\u0644 IP02 - Collapsing \u0645\u062c\u0645\u0648\u0639\u0647 4 \u0639\u062f\u062f\u06cc \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af",
            "price": 14900,
            "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 14,
            "status": "marketable"
          }, {
            "id": 3824898,
            "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u06cc \u0645\u0627\u0633\u06a9 \u0645\u062f\u0644 6020 \u0628\u0633\u062a\u0647 \u06f5\u06f0 \u0639\u062f\u062f\u06cc",
            "price": 307000,
            "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 15,
            "status": "marketable"
          }, {
            "id": 1135818,
            "name": "\u0647\u062f\u0641\u0648\u0646 \u0628\u0644\u0648\u062a\u0648\u062b \u0645\u062f\u0644 i7",
            "price": 389000,
            "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 16,
            "status": "marketable"
          }, {
            "id": 3027164,
            "name": "\u062f\u0633\u062a\u0647 \u0628\u0627\u0632\u06cc \u067e\u0644\u06cc \u0627\u0633\u062a\u06cc\u0634\u0646 \u06f4 \u0645\u062f\u0644 DUALSHOCK CUH-ZCT2E",
            "price": 3190000,
            "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 17,
            "status": "marketable"
          }, {
            "id": 939299,
            "name": "\u06a9\u0631\u0647 \u062d\u06cc\u0648\u0627\u0646\u06cc \u067e\u0627\u0633\u062a\u0648\u0631\u06cc\u0632\u0647 \u0645\u06cc\u0647\u0646 50 \u06af\u0631\u0645",
            "price": 48600,
            "category": "Butter",
            "brand": "\u0645\u06cc\u0647\u0646",
            "position": 18,
            "status": "marketable"
          }, {
            "id": 4528544,
            "name": "\u0622\u06cc\u0646\u0647 \u0627\u0650\u0644\u0650\u0646\u0633\u06cc \u0645\u062f\u0644 AM-090",
            "price": 29000,
            "category": "\u0622\u06cc\u0646\u0647",
            "brand": "\u0627\u0650\u0644\u0650\u0646\u0633\u06cc",
            "position": 19,
            "status": "marketable"
          }, {
            "id": 726457,
            "name": "\u06a9\u06cc\u0641 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 circle",
            "price": 80000,
            "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
            "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
            "position": 20,
            "status": "marketable"
          }]
        };
        if (carouselDataTracker) {
          if (!window.carouselData)
            window.carouselData = [carouselDataTracker];
          else
            window.carouselData.push(carouselDataTracker);
        }

        var carouselDataTracker = null;
        if (carouselDataTracker) {
          if (!window.carouselData)
            window.carouselData = [carouselDataTracker];
          else
            window.carouselData.push(carouselDataTracker);
        }
      </script>
      <script>
        window.dataLayer.push({
          "event": "eec.productImpression", "ecommerce": {
            "currencyCode": "EUR",
            "impressions": [{
              "name": "\u0633\u0633 \u0647\u0632\u0627\u0631 \u062c\u0632\u06cc\u0631\u0647 \u0628\u06cc\u0698\u0646 \u0648\u0632\u0646 510 \u06af\u0631\u0645",
              "id": 1481812,
              "price": 104000,
              "brand": "\u0628\u06cc\u0698\u0646",
              "category": "\u0633\u0633",
              "list": "category-\u0633\u0633",
              "position": 1,
              "dimension6": 1,
              "dimension2": 19,
              "dimension9": 4.4,
              "metric6": 1076,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": " \u0628\u0631\u0686\u0633\u0628 \u067e\u0644\u0627\u06a9 \u062e\u0648\u062f\u0631\u0648 \u0645\u0633\u062a\u0631 \u0631\u0627\u062f \u0637\u0631\u062d \u067e\u0631\u0686\u0645 \u0627\u06cc\u0631\u0627\u0646 \u0645\u062f\u0644 1221\u0628\u0633\u062a\u0647 \u062f\u0648\u0639\u062f\u062f\u06cc",
              "id": 3499448,
              "price": 50000,
              "brand": "\u0645\u0633\u062a\u0631 \u0631\u0627\u062f",
              "category": "\u0633\u0627\u06cc\u0631 \u0644\u0648\u0627\u0632\u0645 \u062e\u0648\u062f\u0631\u0648",
              "list": "category-\u0633\u0627\u06cc\u0631 \u0644\u0648\u0627\u0632\u0645 \u062e\u0648\u062f\u0631\u0648",
              "position": 2,
              "dimension6": 1,
              "dimension2": 22,
              "dimension9": 4.5,
              "metric6": 887,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0645\u0627\u0698\u06cc\u06a9 \u0648\u0627\u06cc\u062a \u0628\u0631\u062f \u06a9\u062f x-828 M \u0628\u0633\u062a\u0647 4 \u0639\u062f\u062f\u06cc",
              "id": 2157237,
              "price": 107000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0645\u0627\u0698\u06cc\u06a9",
              "list": "category-\u0645\u0627\u0698\u06cc\u06a9",
              "position": 3,
              "dimension6": 1,
              "dimension2": 16,
              "dimension9": 4,
              "metric6": 4550,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u06a9\u062a\u0627\u0628 \u0628\u062e\u0648\u0627\u0647\u06cc\u062f \u062a\u0627 \u0628\u0647 \u0634\u0645\u0627 \u062f\u0627\u062f\u0647 \u0634\u0648\u062f \u0627\u062b\u0631 \u0627\u0633\u062a\u0631 \u0647\u06cc\u06a9\u0633 \u0648 \u062c\u0631\u06cc \u0647\u06cc\u06a9\u0633 \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0622\u062a\u06cc\u0633\u0627",
              "id": 3112239,
              "price": 210800,
              "brand": "\u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0622\u062a\u06cc\u0633\u0627",
              "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
              "list": "category-\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
              "position": 4,
              "dimension6": 1,
              "dimension2": 66,
              "dimension9": 4.6,
              "metric6": 328,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0622\u06cc\u0646\u0647 \u067e\u0644\u06a9\u0633\u06cc \u06af\u0644\u0633  \u0628\u0646\u06cc \u062f\u06a9\u0648 \u0645\u062f\u0644 m06",
              "id": 911070,
              "price": 144000,
              "brand": "\u0628\u0646\u06cc \u062f\u06a9\u0648",
              "category": "\u0622\u06cc\u0646\u0647 \u062f\u06a9\u0648\u0631\u0627\u062a\u06cc\u0648",
              "list": "category-\u0622\u06cc\u0646\u0647 \u062f\u06a9\u0648\u0631\u0627\u062a\u06cc\u0648",
              "position": 5,
              "dimension6": 1,
              "dimension2": 28,
              "dimension9": 3.9,
              "metric6": 858,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u06a9\u062a\u0627\u0628 \u0634\u0627\u0632\u062f\u0647 \u06a9\u0648\u0686\u0648\u0644\u0648 \u0627\u062b\u0631 \u0622\u0646\u062a\u0648\u0627\u0646 \u062f\u0648\u0633\u0646\u062a \u0627\u06af\u0632\u0648\u067e\u0631\u06cc \u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0646\u06af\u06cc\u0646 \u0627\u06cc\u0631\u0627\u0646",
              "id": 3429171,
              "price": 79000,
              "brand": "\u0627\u0646\u062a\u0634\u0627\u0631\u0627\u062a \u0646\u06af\u06cc\u0646 \u0627\u06cc\u0631\u0627\u0646",
              "category": "\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
              "list": "category-\u06a9\u062a\u0627\u0628 \u0686\u0627\u067e\u06cc",
              "position": 6,
              "dimension6": 1,
              "dimension2": 77,
              "dimension9": 4.5,
              "metric6": 1055,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u067e\u0648\u062f\u0631 \u0645\u0627\u0634\u06cc\u0646 \u0644\u0628\u0627\u0633\u0634\u0648\u06cc\u06cc \u067e\u0631\u0633\u06cc\u0644 \u0628\u0627 \u0631\u0627\u06cc\u062d\u0647 \u0644\u0627\u0648\u0646\u062f\u0631 \u0645\u0642\u062f\u0627\u0631 4000 \u06af\u0631\u0645 \u0628\u0627 \u0633\u0637\u0644 \u0648 \u067e\u06cc\u0645\u0627\u0646\u0647 \u0647\u062f\u06cc\u0647 \u0648 200 \u06af\u0631\u0645 \u067e\u0648\u062f\u0631 \u0628\u06cc\u0634\u062a\u0631 ",
              "id": 4104459,
              "price": 897000,
              "brand": "\u067e\u0631\u0633\u06cc\u0644",
              "category": "\u0634\u0648\u06cc\u0646\u062f\u0647 \u0644\u0628\u0627\u0633",
              "list": "category-\u0634\u0648\u06cc\u0646\u062f\u0647 \u0644\u0628\u0627\u0633",
              "position": 7,
              "dimension6": 1,
              "dimension2": 11,
              "dimension9": 4.4,
              "metric6": 220,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0645\u062c\u0645\u0648\u0639\u0647 7 \u0639\u062f\u062f\u06cc \u0633\u0647 \u0646\u0638\u0627\u0645  \u06a9\u062fvb5 \u0628\u0647 \u0647\u0645\u0631\u0627\u0647 \u06a9\u0648\u0644\u062a \u0645\u06cc\u0646\u06cc\u0627\u062a\u0648\u0631\u06cc",
              "id": 2311836,
              "price": 199900,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0645\u062a\u0647 \u0648 \u0633\u0631\u06cc",
              "list": "category-\u0645\u062a\u0647 \u0648 \u0633\u0631\u06cc",
              "position": 8,
              "dimension6": 1,
              "dimension2": 38,
              "dimension9": 4,
              "metric6": 612,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0641\u0646\u062f\u06a9 \u0645\u062f\u0644 \u06a9\u0628\u0631\u06cc\u062a\u06cc \u0633\u0631\u06cc NZ1598",
              "id": 3745212,
              "price": 169000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0641\u0646\u062f\u06a9",
              "list": "category-\u0641\u0646\u062f\u06a9",
              "position": 9,
              "dimension6": 1,
              "dimension2": 49,
              "dimension9": 2.8,
              "metric6": 96,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0628\u0631\u0633 \u067e\u0627\u06a9\u200c\u0633\u0627\u0632\u06cc \u06a9\u062f 02",
              "id": 2325910,
              "price": 227700,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0627\u0628\u0632\u0627\u0631 \u0645\u0631\u0627\u0642\u0628\u062a \u0627\u0632 \u067e\u0648\u0633\u062a",
              "list": "category-\u0627\u0628\u0632\u0627\u0631 \u0645\u0631\u0627\u0642\u0628\u062a \u0627\u0632 \u067e\u0648\u0633\u062a",
              "position": 10,
              "dimension6": 1,
              "dimension2": 31,
              "dimension9": 4.1,
              "metric6": 1537,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0645\u0627\u0633\u06a9 \u0646\u0642\u0627\u0628\u06cc \u0622\u0646\u06cc\u067e\u06a9 \u0645\u062f\u0644 \u0627\u0646\u0627\u0631",
              "id": 595821,
              "price": 179000,
              "brand": "\u0622\u0646\u06cc\u067e\u06a9",
              "category": "\u0645\u0627\u0633\u06a9 \u0635\u0648\u0631\u062a \u0648 \u0628\u062f\u0646",
              "list": "category-\u0645\u0627\u0633\u06a9 \u0635\u0648\u0631\u062a \u0648 \u0628\u062f\u0646",
              "position": 11,
              "dimension6": 1,
              "dimension2": 10,
              "dimension9": 4.2,
              "metric6": 2169,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647  12 \u067e\u0627\u0631\u0686\u0647 \u0646\u0648\u0631\u06cc\u0646\u0648 \u0645\u062f\u0644 \u0622\u06cc\u0631\u06cc\u0646\u0627",
              "id": 1056808,
              "price": 580000,
              "brand": "\u0646\u0648\u0631\u06cc\u0646\u0648",
              "category": "\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647",
              "list": "category-\u0638\u0631\u0648\u0641 \u0646\u06af\u0647\u062f\u0627\u0631\u0646\u062f\u0647",
              "position": 12,
              "dimension6": 1,
              "dimension2": 42,
              "dimension9": 4.3,
              "metric6": 5150,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": " \u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647 \u0627\u0646\u0631\u062c\u0627\u06cc\u0632\u0631 \u0645\u062f\u0644 UE20009  \u0638\u0631\u0641\u06cc\u062a 20000 \u0645\u06cc\u0644\u06cc \u0622\u0645\u067e\u0631 \u0633\u0627\u0639\u062a",
              "id": 2959368,
              "price": 3590000,
              "brand": "\u0627\u0646\u0631\u062c\u0627\u06cc\u0632\u0631",
              "category": "\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
              "list": "category-\u067e\u0627\u0648\u0631\u0628\u0627\u0646\u06a9 (\u0634\u0627\u0631\u0698\u0631 \u0647\u0645\u0631\u0627\u0647)",
              "position": 13,
              "dimension6": 1,
              "dimension2": 15,
              "dimension9": 4.2,
              "metric6": 438,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0634\u0627\u0631\u0698 \u0645\u062f\u0644 IP02 - Collapsing \u0645\u062c\u0645\u0648\u0639\u0647 4 \u0639\u062f\u062f\u06cc \u0645\u0646\u0627\u0633\u0628 \u0628\u0631\u0627\u06cc \u06a9\u0627\u0628\u0644 \u062a\u0628\u062f\u06cc\u0644 \u0644\u0627\u06cc\u062a\u0646\u06cc\u0646\u06af",
              "id": 1742756,
              "price": 14900,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "position": 14,
              "dimension6": 1,
              "dimension2": 3,
              "dimension9": 3.3,
              "metric6": 2180,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc \u0645\u06cc \u0645\u0627\u0633\u06a9 \u0645\u062f\u0644 6020 \u0628\u0633\u062a\u0647 \u06f5\u06f0 \u0639\u062f\u062f\u06cc",
              "id": 3824898,
              "price": 307000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "list": "category-\u0645\u0627\u0633\u06a9 \u062a\u0646\u0641\u0633\u06cc",
              "position": 15,
              "dimension6": 1,
              "dimension2": 39,
              "dimension9": 4,
              "metric6": 396,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0647\u062f\u0641\u0648\u0646 \u0628\u0644\u0648\u062a\u0648\u062b \u0645\u062f\u0644 i7",
              "id": 1135818,
              "price": 389000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
              "list": "category-\u0647\u062f\u0641\u0648\u0646\u060c \u0647\u062f\u0633\u062a \u0648 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc",
              "position": 16,
              "dimension6": 1,
              "dimension2": 12,
              "dimension9": 3.6,
              "metric6": 2151,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u062f\u0633\u062a\u0647 \u0628\u0627\u0632\u06cc \u067e\u0644\u06cc \u0627\u0633\u062a\u06cc\u0634\u0646 \u06f4 \u0645\u062f\u0644 DUALSHOCK CUH-ZCT2E",
              "id": 3027164,
              "price": 3190000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc",
              "list": "category-\u0644\u0648\u0627\u0632\u0645 \u062c\u0627\u0646\u0628\u06cc \u06a9\u0646\u0633\u0648\u0644 \u0628\u0627\u0632\u06cc",
              "position": 17,
              "dimension6": 0,
              "dimension2": 37,
              "dimension9": 3.9,
              "metric6": 371,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u06a9\u0631\u0647 \u062d\u06cc\u0648\u0627\u0646\u06cc \u067e\u0627\u0633\u062a\u0648\u0631\u06cc\u0632\u0647 \u0645\u06cc\u0647\u0646 50 \u06af\u0631\u0645",
              "id": 939299,
              "price": 48600,
              "brand": "\u0645\u06cc\u0647\u0646",
              "category": "\u06a9\u0631\u0647 \u062d\u06cc\u0648\u0627\u0646\u06cc \u0648 \u06af\u06cc\u0627\u0647\u06cc",
              "list": "category-\u06a9\u0631\u0647 \u062d\u06cc\u0648\u0627\u0646\u06cc \u0648 \u06af\u06cc\u0627\u0647\u06cc",
              "position": 18,
              "dimension6": 1,
              "dimension2": 10,
              "dimension9": 4.4,
              "metric6": 3538,
              "dimension11": 1,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u0622\u06cc\u0646\u0647 \u0627\u0650\u0644\u0650\u0646\u0633\u06cc \u0645\u062f\u0644 AM-090",
              "id": 4528544,
              "price": 29000,
              "brand": "\u0627\u0650\u0644\u0650\u0646\u0633\u06cc",
              "category": "\u0622\u06cc\u0646\u0647 \u062f\u06a9\u0648\u0631\u0627\u062a\u06cc\u0648",
              "list": "category-\u0622\u06cc\u0646\u0647 \u062f\u06a9\u0648\u0631\u0627\u062a\u06cc\u0648",
              "position": 19,
              "dimension6": 1,
              "dimension2": 71,
              "dimension9": 4.1,
              "metric6": 59,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }, {
              "name": "\u06a9\u06cc\u0641 \u0647\u0646\u062f\u0632\u0641\u0631\u06cc \u0645\u062f\u0644 circle",
              "id": 726457,
              "price": 80000,
              "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
              "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
              "position": 20,
              "dimension6": 1,
              "dimension2": 10,
              "dimension9": 4.2,
              "metric6": 6048,
              "dimension11": 0,
              "dimension20": "marketable",
              "dimension18": "most-viewed",
              "dimension19": "carousel-top-promotions",
              "dimension7": "special-offer"
            }]
          }
        });
      </script>
      <section class="c-swiper c-swiper--products js-sntracker-carousel " id="sn-carousels-4">
        <div class="o-headline">
          <span>منتخب محصولات تخفیف و حراج</span>
          <a href="/landing-page/?promotion_types%5B0%5D=incredible_offer&promotion_types%5B1%5D=promotion&promotion_times%5B0%5D=active" class="c-swiper__show-more">مشاهده همه</a>
        </div>
        <div class="c-box" id="sn-carousels-4">
          <div class="swiper-container swiper-container-horizontal js-swiper-products">
            <div class="swiper-wrapper">
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="1481812"
                   data-position="1">
                <div class="c-product-box"><a data-id="1481812"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-1481812/سس-هزار-جزیره-بیژن-وزن-510-گرم"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/110428446.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="سس هزار جزیره بیژن وزن 510 گرم"
                      class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                               src="https://www.digikala.com/static/files/31a78819.svg"></a>
                  <div class="c-product-box__title"><a data-id="1481812"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-1481812/سس-هزار-جزیره-بیژن-وزن-510-گرم">
                      سس هزار جزیره بیژن وزن 510 گرم
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__fast-shopping">
                      <div class="c-product-box__add-to-cart-section">
                        <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                            class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                            href="/cart/add/4085767/1/"
                            data-event="add_to_cart" data-event-category="ecommerce"
                            data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                          <div
                            class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                            data-variant="4085767"
                            data-cart-item=""
                            data-mode="add"
                            data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                   name="order[amount]">
                              <option value="0" class="c-product__add-cancel">حذف</option>
                              <option value="1">۱ عدد</option>
                              <option value="2">۲ عدد</option>
                              <option value="3">۳ عدد</option>
                              <option value="4">۴ عدد</option>
                              <option value="5">۵ عدد</option>
                              <option value="6">۶ عدد</option>
                              <option value="7">۷ عدد</option>
                              <option value="8">۸ عدد</option>
                              <option value="9">۹ عدد</option>
                              <option value="10">۱۰ عدد</option>
                              <option value="11">۱۱ عدد</option>
                              <option value="12">۱۲ عدد</option>
                              <option value="13">۱۳ عدد</option>
                              <option value="14">۱۴ عدد</option>
                              <option value="15">۱۵ عدد</option>
                            </select></div>
                        </div>
                      </div>
                    </div>
                    <div class="c-product-box__price-item"><a data-id="1481812"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-1481812/سس-هزار-جزیره-بیژن-وزن-510-گرم">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۱۲,۹۰۰</del>
                            <span class="c-new-price__discount">۱۹٪</span></div>
                          <div class="c-new-price__value">
                            ۱۰,۴۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3499448"
                   data-position="2">
                <div class="c-product-box"><a data-id="3499448"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3499448/برچسب-پلاک-خودرو-مستر-راد-طرح-پرچم-ایران-مدل-1221بسته-دوعددی"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/dd522fb560d38e83c5379f1af1cb0712c6b0d02b_1601813806.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt=" برچسب پلاک خودرو مستر راد طرح پرچم ایران مدل 1221بسته دوعددی"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3499448"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3499448/برچسب-پلاک-خودرو-مستر-راد-طرح-پرچم-ایران-مدل-1221بسته-دوعددی">
                      برچسب پلاک خودرو مستر راد طرح پرچم ایران مدل 1221...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3499448"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3499448/برچسب-پلاک-خودرو-مستر-راد-طرح-پرچم-ایران-مدل-1221بسته-دوعددی">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۶,۴۰۰</del>
                            <span class="c-new-price__discount">۲۲٪</span></div>
                          <div class="c-new-price__value">
                            ۵,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="2157237"
                   data-position="3">
                <div class="c-product-box"><a data-id="2157237"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2157237/ماژیک-وایت-برد-کد-x-828-m-بسته-4-عددی"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/114062863.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="ماژیک وایت برد کد x-828 M بسته 4 عددی"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="2157237"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2157237/ماژیک-وایت-برد-کد-x-828-m-بسته-4-عددی">
                      ماژیک وایت برد کد x-828 M بسته 4 عددی
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="2157237"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2157237/ماژیک-وایت-برد-کد-x-828-m-بسته-4-عددی">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۱۲,۸۰۰</del>
                            <span class="c-new-price__discount">۱۶٪</span></div>
                          <div class="c-new-price__value">
                            ۱۰,۷۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3112239"
                   data-position="4">
                <div class="c-product-box"><a data-id="3112239"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3112239/کتاب-بخواهید-تا-به-شما-داده-شود-اثر-استر-هیکس-و-جری-هیکس-انتشارات-آتیسا"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/9bd0cf2e63b11ca3683a6f165410ad164272431b_1595447901.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="کتاب بخواهید تا به شما داده شود اثر استر هیکس و جری هیکس انتشارات آتیسا"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3112239"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3112239/کتاب-بخواهید-تا-به-شما-داده-شود-اثر-استر-هیکس-و-جری-هیکس-انتشارات-آتیسا">
                      کتاب بخواهید تا به شما داده شود اثر استر هیکس و جر...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3112239"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3112239/کتاب-بخواهید-تا-به-شما-داده-شود-اثر-استر-هیکس-و-جری-هیکس-انتشارات-آتیسا">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۶۲,۰۰۰</del>
                            <span class="c-new-price__discount">۶۶٪</span></div>
                          <div class="c-new-price__value">
                            ۲۱,۰۸۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="911070"
                   data-position="5">
                <div class="c-product-box"><a data-id="911070"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-911070/آینه-پلکسی-گلس-بنی-دکو-مدل-m06"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4244382.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="آینه پلکسی گلس  بنی دکو مدل m06"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="911070"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-911070/آینه-پلکسی-گلس-بنی-دکو-مدل-m06">
                      آینه پلکسی گلس بنی دکو مدل m06
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="911070"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-911070/آینه-پلکسی-گلس-بنی-دکو-مدل-m06">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۲۰,۰۰۰</del>
                            <span class="c-new-price__discount">۲۸٪</span></div>
                          <div class="c-new-price__value">
                            ۱۴,۴۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3429171"
                   data-position="6">
                <div class="c-product-box"><a data-id="3429171"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3429171/کتاب-شازده-کوچولو-اثر-آنتوان-دوسنت-اگزوپری-انتشارات-نگین-ایران"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/6a7c6ae40d46aa4f47c7824f6dc66004b61f591a_1600630714.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3429171"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3429171/کتاب-شازده-کوچولو-اثر-آنتوان-دوسنت-اگزوپری-انتشارات-نگین-ایران">
                      کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارا...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3429171"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3429171/کتاب-شازده-کوچولو-اثر-آنتوان-دوسنت-اگزوپری-انتشارات-نگین-ایران">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۳۵,۰۰۰</del>
                            <span class="c-new-price__discount">۷۷٪</span></div>
                          <div class="c-new-price__value">
                            ۷,۹۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="4104459"
                   data-position="7">
                <div class="c-product-box"><a data-id="4104459"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4104459/پودر-ماشين-لباسشويي-پرسیل-مدل-لاوندر-مقدار-42-کیلوگرم"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4641ed290431bbd18adc9fa1a8f4cfd8af27f9ae_1609143244.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="پودر ماشین لباسشویی پرسیل با رایحه لاوندر مقدار 4000 گرم با سطل و پیمانه هدیه و 200 گرم پودر بیشتر "
                      class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                               src="https://www.digikala.com/static/files/31a78819.svg"></a>
                  <div class="c-product-box__title"><a data-id="4104459"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4104459/پودر-ماشين-لباسشويي-پرسیل-مدل-لاوندر-مقدار-42-کیلوگرم">
                      پودر ماشین لباسشویی پرسیل با رایحه لاوندر مقدار 40...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__fast-shopping">
                      <div class="c-product-box__add-to-cart-section">
                        <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                            class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                            href="/cart/add/13216796/1/"
                            data-event="add_to_cart" data-event-category="ecommerce"
                            data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                          <div
                            class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                            data-variant="13216796"
                            data-cart-item=""
                            data-mode="add"
                            data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                   name="order[amount]">
                              <option value="0" class="c-product__add-cancel">حذف</option>
                              <option value="1">۱ عدد</option>
                              <option value="2">۲ عدد</option>
                              <option value="3">۳ عدد</option>
                              <option value="4">۴ عدد</option>
                              <option value="5">۵ عدد</option>
                            </select></div>
                        </div>
                      </div>
                    </div>
                    <div class="c-product-box__price-item"><a data-id="4104459"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-4104459/پودر-ماشين-لباسشويي-پرسیل-مدل-لاوندر-مقدار-42-کیلوگرم">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۱۰۰,۸۰۰</del>
                            <span class="c-new-price__discount">۱۱٪</span></div>
                          <div class="c-new-price__value">
                            ۸۹,۷۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="2311836"
                   data-position="8">
                <div class="c-product-box"><a data-id="2311836"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2311836/مجموعه-7-عددی-سه-نظام-کدvb5-به-همراه-کولت-مینیاتوری"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/114968731.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="مجموعه 7 عددی سه نظام  کدvb5 به همراه کولت مینیاتوری"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="2311836"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2311836/مجموعه-7-عددی-سه-نظام-کدvb5-به-همراه-کولت-مینیاتوری">
                      مجموعه 7 عددی سه نظام کدvb5 به همراه کولت مینیاتو...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="2311836"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2311836/مجموعه-7-عددی-سه-نظام-کدvb5-به-همراه-کولت-مینیاتوری">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۳۲,۲۵۰</del>
                            <span class="c-new-price__discount">۳۸٪</span></div>
                          <div class="c-new-price__value">
                            ۱۹,۹۹۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3745212"
                   data-position="9">
                <div class="c-product-box"><a data-id="3745212"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3745212/فندک-مدل-کبریتی-سری-nz1598"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/64dec48c1b7ff5bbbd95b97ffdf216371839e102_1605181006.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="فندک مدل کبریتی سری NZ1598"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3745212"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3745212/فندک-مدل-کبریتی-سری-nz1598">
                      فندک مدل کبریتی سری NZ1598
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3745212"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3745212/فندک-مدل-کبریتی-سری-nz1598">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۳۳,۰۰۰</del>
                            <span class="c-new-price__discount">۴۹٪</span></div>
                          <div class="c-new-price__value">
                            ۱۶,۹۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="2325910"
                   data-position="10">
                <div class="c-product-box"><a data-id="2325910"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2325910/برس-پاکسازی-کد-02"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/114983712.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="برس پاک‌سازی کد 02"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="2325910"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2325910/برس-پاکسازی-کد-02">
                      برس پاک‌سازی کد 02
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="2325910"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2325910/برس-پاکسازی-کد-02">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۳۳,۰۰۰</del>
                            <span class="c-new-price__discount">۳۱٪</span></div>
                          <div class="c-new-price__value">
                            ۲۲,۷۷۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="595821"
                   data-position="11">
                <div class="c-product-box"><a data-id="595821"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-595821/ماسک-نقابی-آنیپک-مدل-انار"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/3096372.png?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="ماسک نقابی آنیپک مدل انار"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="595821"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-595821/ماسک-نقابی-آنیپک-مدل-انار">
                      ماسک نقابی آنیپک مدل انار
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="595821"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-595821/ماسک-نقابی-آنیپک-مدل-انار">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۱۹,۹۰۰</del>
                            <span class="c-new-price__discount">۱۰٪</span></div>
                          <div class="c-new-price__value">
                            ۱۷,۹۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="1056808"
                   data-position="12">
                <div class="c-product-box"><a data-id="1056808"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-1056808/ظروف-نگهدارنده-12-پارچه-نورینو-مدل-آیرینا"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/5221222.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="ظروف نگهدارنده  12 پارچه نورینو مدل آیرینا"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="1056808"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-1056808/ظروف-نگهدارنده-12-پارچه-نورینو-مدل-آیرینا">
                      ظروف نگهدارنده 12 پارچه نورینو مدل آیرینا
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="1056808"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-1056808/ظروف-نگهدارنده-12-پارچه-نورینو-مدل-آیرینا">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۱۰۰,۰۰۰</del>
                            <span class="c-new-price__discount">۴۲٪</span></div>
                          <div class="c-new-price__value">
                            ۵۸,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="2959368"
                   data-position="13">
                <div class="c-product-box"><a data-id="2959368"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-2959368/شارژر-همراه-انرجایزر-مدل-ue20009-ظرفیت-20000-میلی-آمپر-ساعت"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/121795599.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt=" شارژر همراه انرجایزر مدل UE20009  ظرفیت 20000 میلی آمپر ساعت"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="2959368"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-2959368/شارژر-همراه-انرجایزر-مدل-ue20009-ظرفیت-20000-میلی-آمپر-ساعت">
                      شارژر همراه انرجایزر مدل UE20009 ظرفیت 20000 میل...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="2959368"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-2959368/شارژر-همراه-انرجایزر-مدل-ue20009-ظرفیت-20000-میلی-آمپر-ساعت">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۴۲۰,۰۰۰</del>
                            <span class="c-new-price__discount">۱۵٪</span></div>
                          <div class="c-new-price__value">
                            ۳۵۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="1742756"
                   data-position="14">
                <div class="c-product-box"><a data-id="1742756"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-1742756/محافظ-کابل-شارژ-مدل-ip02-collapsing-مجموعه-4-عددی-مناسب-برای-کابل-تبدیل-لایتنینگ"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/111832542.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="محافظ کابل شارژ مدل IP02 - Collapsing مجموعه 4 عددی مناسب برای کابل تبدیل لایتنینگ"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="1742756"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-1742756/محافظ-کابل-شارژ-مدل-ip02-collapsing-مجموعه-4-عددی-مناسب-برای-کابل-تبدیل-لایتنینگ">
                      محافظ کابل شارژ مدل IP02 - Collapsing مجموعه 4 عدد...
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="1742756"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-1742756/محافظ-کابل-شارژ-مدل-ip02-collapsing-مجموعه-4-عددی-مناسب-برای-کابل-تبدیل-لایتنینگ">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۱,۵۴۰</del>
                            <span class="c-new-price__discount">۳٪</span></div>
                          <div class="c-new-price__value">
                            ۱,۴۹۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3824898"
                   data-position="15">
                <div class="c-product-box"><a data-id="3824898"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3824898/ماسک-تنفسی-مدل-می-ماسک-بسته-۵۰-عددی"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4f9c6366a34b1912d93957b5e4b41a12d0642177_1606051131.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="ماسک تنفسی می ماسک مدل 6020 بسته ۵۰ عددی"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3824898"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3824898/ماسک-تنفسی-مدل-می-ماسک-بسته-۵۰-عددی">
                      ماسک تنفسی می ماسک مدل 6020 بسته ۵۰ عددی
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3824898"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3824898/ماسک-تنفسی-مدل-می-ماسک-بسته-۵۰-عددی">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۵۰,۰۰۰</del>
                            <span class="c-new-price__discount">۳۹٪</span></div>
                          <div class="c-new-price__value">
                            ۳۰,۷۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="1135818"
                   data-position="16">
                <div class="c-product-box"><a data-id="1135818"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-1135818/هدفون-بلوتوث-مدل-i7"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/5415532.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="هدفون بلوتوث مدل i7"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="1135818"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-1135818/هدفون-بلوتوث-مدل-i7">
                      هدفون بلوتوث مدل i7
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="1135818"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-1135818/هدفون-بلوتوث-مدل-i7">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۴۴,۱۰۰</del>
                            <span class="c-new-price__discount">۱۲٪</span></div>
                          <div class="c-new-price__value">
                            ۳۸,۹۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="3027164"
                   data-position="17">
                <div class="c-product-box"><a data-id="3027164"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-3027164/دسته-بازی-پلی-استیشن-۴-سونی-مدل-dualshock-cuh-zct2e"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/7f2bcbd32cb564dc813cb34b9aec7c9e92647134_1593546441.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="دسته بازی پلی استیشن ۴ مدل DUALSHOCK CUH-ZCT2E"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="3027164"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-3027164/دسته-بازی-پلی-استیشن-۴-سونی-مدل-dualshock-cuh-zct2e">
                      دسته بازی پلی استیشن ۴ مدل DUALSHOCK CUH-ZCT2E
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item"><a data-id="3027164"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-3027164/دسته-بازی-پلی-استیشن-۴-سونی-مدل-dualshock-cuh-zct2e">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۵۰۹,۰۰۰</del>
                            <span class="c-new-price__discount">۳۷٪</span></div>
                          <div class="c-new-price__value">
                            ۳۱۹,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="939299"
                   data-position="18">
                <div class="c-product-box"><a data-id="939299"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-939299/کره-حیوانی-پاستوریزه-میهن-50-گرم"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4966662.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="کره حیوانی پاستوریزه میهن 50 گرم"
                      class="swiper-lazy"><img class="c-product-box__fmcg-symbol"
                                               src="https://www.digikala.com/static/files/31a78819.svg"></a>
                  <div class="c-product-box__title"><a data-id="939299"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-939299/کره-حیوانی-پاستوریزه-میهن-50-گرم">
                      کره حیوانی پاستوریزه میهن 50 گرم
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__fast-shopping">
                      <div class="c-product-box__add-to-cart-section">
                        <div class="c-product__add-container js-add-to-cart-container
                            js-fast-shopping-confirm"><a
                            class="btn-add-to-cart-mini js-add-to-cart js-product-add-to-card js-fast-shopping-confirm"
                            href="/cart/add/1954439/1/"
                            data-event="add_to_cart" data-event-category="ecommerce"
                            data-event-label="price:  - seller: marketplace - seller_name:  - seller_rating:  - multiple_configs: False - position: 0"></a>
                          <div
                            class="c-product__add-substitute c-product__add-substitute--item js-quick-carousel-add-to-cart"
                            data-variant="1954439"
                            data-cart-item=""
                            data-mode="add"
                            data-enhanced-ecommerce='null'><select class="c-ui-select js-ui-select-above"
                                                                   name="order[amount]">
                              <option value="0" class="c-product__add-cancel">حذف</option>
                              <option value="1">۱ عدد</option>
                              <option value="2">۲ عدد</option>
                              <option value="3">۳ عدد</option>
                              <option value="4">۴ عدد</option>
                            </select></div>
                        </div>
                      </div>
                    </div>
                    <div class="c-product-box__price-item"><a data-id="939299"
                                                              class="js-product-url js-carousel-ga-product-box"
                                                              href="/product/dkp-939299/کره-حیوانی-پاستوریزه-میهن-50-گرم">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۵,۴۰۰</del>
                            <span class="c-new-price__discount">۱۰٪</span></div>
                          <div class="c-new-price__value">
                            ۴,۸۶۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="4528544"
                   data-position="19">
                <div class="c-product-box"><a data-id="4528544"
                                              class="c-product-box__img js-url js-product-url js-carousel-ga-product-box"
                                              href="/product/dkp-4528544/آینه-النسی-مدل-am-090"><img
                      data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/fb872bd8c449389dbae04e52c0ca7ac8bc25ecbe_1614014170.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                      alt="آینه اِلِنسی مدل AM-090"
                      class="swiper-lazy"></a>
                  <div class="c-product-box__title"><a data-id="4528544"
                                                       class="js-product-url js-carousel-ga-product-box"
                                                       href="/product/dkp-4528544/آینه-النسی-مدل-am-090">
                      آینه اِلِنسی مدل AM-090
                    </a></div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item">
                      <a data-id="4528544" class="js-product-url js-carousel-ga-product-box" href="/product/dkp-4528544/آینه-النسی-مدل-am-090">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۱۰,۰۰۰</del>
                            <span class="c-new-price__discount">۷۱٪</span></div>
                          <div class="c-new-price__value">
                            ۲,۹۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide js-sntracker-carousel-item" data-carousel="sn-carousels-4" data-id="726457" data-position="20">
                <div class="c-product-box">
                  <a data-id="726457" class="c-product-box__img js-url js-product-url js-carousel-ga-product-box" href="/product/dkp-726457/کیف-هندزفری-مدل-circle">
                    <img data-src-swiper="https://dkstatics-public.digikala.com/digikala-products/4446319.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60" alt="کیف هندزفری مدل circle" class="swiper-lazy"></a>
                  <div class="c-product-box__title">
                    <a data-id="726457" class="js-product-url js-carousel-ga-product-box" href="/product/dkp-726457/کیف-هندزفری-مدل-circle">
                      کیف هندزفری مدل circle
                    </a>
                  </div>
                  <div class="c-product-box__price-row">
                    <div class="c-product-box__price-item">
                      <a data-id="726457" class="js-product-url js-carousel-ga-product-box" href="/product/dkp-726457/کیف-هندزفری-مدل-circle">
                        <div class="c-new-price">
                          <div class="c-new-price__old-value">
                            <del>۸,۹۰۰</del>
                            <span class="c-new-price__discount">۱۰٪</span></div>
                          <div class="c-new-price__value">
                            ۸,۰۰۰
                            <span class="c-new-price__currency">تومان</span></div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev js-swiper-button-prev"></div>
            <div class="swiper-button-next js-swiper-button-next"></div>
          </div>
        </div>
      </section>

      <div id="product-template" style="display: none">
        <div class="swiper-slide js-sntracker-carousel-item" data-id="{id}">
          <div class="c-product-box">
            <a class="c-product-box__img js-url js-carousel-ga-product-box" data-id="{id}" href="{url}">
              <img data-img="{image}" alt="{title}" class="swiper-lazy js-template-img" loading="lazy">
              <img class="c-product-box__fmcg-symbol {isFMCG}" loading="lazy" src="https://www.digikala.com/static/files/31a78819.svg">
            </a>
            <div class="c-product-box__title">
              <a href="{url}" data-id="{id}" class="js-carousel-ga-product-box">{title}</a>
            </div>
            <div class="c-product-box__price-row">
              <div class="c-product-box__price-item">
                <div class="c-new-price">
                  <div class="c-new-price__old-value {hasDiscount}">
                    <del>{oldValue}</del>
                    <span class="c-new-price__discount">٪{discount}</span>
                  </div>
                  <div class="c-new-price__value">
                    {price}
                    <span class="c-new-price__currency">تومان</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </article>
  </div>
  <div id="sidebar">
    <aside></aside>
  </div>
</main>

<div class="c-fmcg-voucher-box c-fmcg-voucher-box--bf u-hidden js-wheel-floating-box">
  <a href="/search/?q=%20&sortby=7">
    <img class="c-fmcg-voucher-box__img" src="https://www.digikala.com/static/files/9252b9fc.png"/>
  </a>
  <button class="c-fmcg-voucher-box__close-button js-wheel-floating-box-close" style="top: 10px;"></button>
</div>

<div class="remodal c-remodal-account" data-remodal-id="login" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div class="c-remodal-account__headline">ورود به دیجی‌کالا</div>
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
          <button class="btn-login login-button-js">ورود به دیجی‌کالا</button>
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
      ثبت‌نام در دیجی‌کالا
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
              <a data-snt-event="dkFooterClick" data-snt-params='{"item":"index-title","item_option":"راهنمای خرید از دیجی‌کالا"}' href="#">راهنمای خرید از دیجی‌کالا</a>
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
                    data-snt-params='{"item":"index-title","item_option":"با دیجی‌کالا"}'
                    href="/page/about/">با دیجی‌کالا</a></div>
          </div>
          <ul class="c-footer__links-ul">
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"اتاق خبر"}'
                   href="https://www.digikala.com/mag/newsroom/" target="_blank">اتاق خبر دیجی‌کالا</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"فروش در دیجی‌کالا"}'
                   href="https://www.digikala.com/landings/seller-introduction/" target="_blank">فروش در دیجی‌کالا</a>
            </li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"فرصت‌های شغلی"}'
                   href="http://careers.digikala.com/" target="_blank">فرصت‌های شغلی</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"تماس با دیجی‌کالا"}'
                   href="/page/contact-us/">تماس با دیجی‌کالا</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"درباره دیجی‌کالا"}'
                   href="/page/about/">درباره دیجی‌کالا</a></li>
            <li><a data-snt-event="dkFooterClick"
                   data-snt-params='{"item":"index-item","item_option":"راهنمای هویت بصری"}'
                   href="/branding/">راهنمای هویت بصری</a></li>
          </ul>
        </nav>
      </div>
      <nav class="c-footer__form">
        <form id="SubscribeNewsletter" class="c-form-newsletter" action="/newsletter/"
              method="post">
          <fieldset>
            <legend class="c-form-newsletter__title">از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر
              شوید:
            </legend>
            <div class="c-form-newsletter__row"><input class="c-ui-input__field c-ui-input__field--right-placeholder"
                                                       type="text"
                                                       name="subscribe[email]"
                                                       placeholder="آدرس ایمیل خود را وارد کنید"/>
              <button type="submit" class="btn-secondary"
                      id="btnSubmitNewsletterSubscription"
                      data-snt-event="dkFooterClick"
                      data-snt-params='{"item":"send-email","item_option":null}'
                      data-event="newsletter_subscription"
                      data-event-category="footer_section"
                      data-event-label="logged_in: False - current-page: /">
                ارسال
              </button>
            </div>
          </fieldset>
        </form>
        <div class="c-footer__community">
          <div class="c-footer__social"><span>دیجی‌کالا را در شبکه‌های اجتماعی دنبال کنید:</span>
            <div class="c-footer__social-images">
              <div class="c-footer__social-links"><a href="https://www.linkedin.com/company/digikala/"
                                                     class="c-footer__social-link c-footer__social-link--linkedin"
                                                     target="_blank"></a><a
                  href="https://www.aparat.com/digikala/%D8%AF%DB%8C%D8%AC%DB%8C_%DA%A9%D8%A7%D9%84%D8%A7"
                  class="c-footer__social-link c-footer__social-link--aparat"
                  target="_blank"></a><a href="https://twitter.com/digikalacom"
                                         class="c-footer__social-link c-footer__social-link--twitter"
                                         target="_blank"></a><a href="https://www.instagram.com/digikalacom/"
                                                                class="c-footer__social-link c-footer__social-link--instagram"
                                                                target="_blank"></a></div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <hr/>
    <nav class="c-footer__address">
      <ul class="c-footer__contact">
        <li>
          هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم
        </li>
        <li>
          شماره تماس :
          <a data-snt-event="dkFooterClick"
             data-snt-params='{"item":"call","item_option":null}'
             href="/faq/question/80/">۶۱۹۳۰۰۰۰ - ۰۲۱</a></li>
        <li>
          آدرس ایمیل :
          <a data-snt-event="dkFooterClick"
             data-snt-params='{"item":"mail","item_option":null}'
             href="mailto:info@digikala.com">info@digikala.com</a></li>
      </ul>
    </nav>
  </div>
  <div class="c-footer__more-info">
    <div class="container">
      <div class="c-footer__description-content">
        <div class="c-footer__content">
          <article class="c-footer__seo"><h1>فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین</h1>
            <p><span class="c-footer__seo--content" id="seo-main-content">دیجی&zwnj;کالا به عنوان یکی از قدیمی&zwnj;ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل&zwnj;بودن کالا موفق شده تا همگام با فروشگاه&zwnj;های معتبر جهان، به بزرگ&zwnj;ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی&zwnj;کالا با دنیایی از کالا رو به رو می&zwnj;شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می&zwnj;کند در اینجا پیدا خواهید کرد.</span><span
                class="c-footer__seo-readmore" id="js-footer-readmore-content"
                style="font-weight: 400;"><span> دیجی&zwnj;کالا مثل یک ویترین پر زرق و برق است که با انواع و اقسام برندهایی نظیر</span><a
                  href="https://www.digikala.com/brand/samsung/"><span
                    style="font-weight: 400;">سامسونگ (Samsung)</span></a><span
                  style="font-weight: 400;">، </span><a href="https://www.digikala.com/brand/lg/"><span
                    style="font-weight: 400;">ال جی (LG)</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/brand/apple/"><span
                    style="font-weight: 400;">اپل (Apple)</span></a><span
                  style="font-weight: 400;">، </span><a href="https://www.digikala.com/brand/nokia/"><span
                    style="font-weight: 400;">نوکیا (Nokia)</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/brand/xiaomi/"><span
                    style="font-weight: 400;">شیائومی (Xiaomi)</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/brand/huawei/"><span
                    style="font-weight: 400;">هواوی (Huawei)</span></a><span style="font-weight: 400;"> و همچنین محصولاتی که هر فرد در زندگی شخصی، تحصیلی و کاری خود به آنها احتیاج پیدا می&zwnj;کند، چیده شده است. اینجا مرجع متنوع&zwnj;ترین کالاهای دیجیتال از </span><a
                  href="https://www.digikala.com/search/category-mobile-phone/"><span
                    style="font-weight: 400;">گوشی موبایل</span></a><span style="font-weight: 400;"> اندروید و iOS (آیفون) گرفته تا </span><a
                  href="https://www.digikala.com/search/category-tablet/"><span
                    style="font-weight: 400;">تبلت</span></a><span style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-notebook-netbook-ultrabook/"><span
                    style="font-weight: 400;">لپ تاپ</span></a><span style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-external-hard-disk/"><span
                    style="font-weight: 400;">هارد اکسترنال</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-speaker/"><span
                    style="font-weight: 400;">اسپیکر</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-headphone/"><span
                    style="font-weight: 400;">هدفون</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-handsfree/"><span
                    style="font-weight: 400;">هندزفری</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://www.digikala.com/search/category-power-bank/"><span
                    style="font-weight: 400;">پاور بانک</span></a><span
                  style="font-weight: 400;"> است. دیجی&zwnj;کالا همچنین یک بازار آنلاین برای خرید جدیدترین و ضروری&zwnj;ترین لوازم خانگی همانند </span><a
                  href="https://www.digikala.com/search/category-carpet/"><span
                    style="font-weight: 400;">فرش</span></a><span style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-curtain/"><span
                    style="font-weight: 400;">پرده</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-wallpaper/"><span
                    style="font-weight: 400;">کاغذ دیواری</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-household-furniture/"><span
                    style="font-weight: 400;">مبلمان</span></a><span style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-tv-tables/"><span
                    style="font-weight: 400;">میز تلویزیون</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://www.digikala.com/search/category-dishwasher/"><span
                    style="font-weight: 400;">ماشین ظرفشویی</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://www.digikala.com/search/category-washing-machines/"><span
                    style="font-weight: 400;">لباسشویی</span></a><span style="font-weight: 400;"> است تا هر فرد بتواند مطابق با سلیقه شخصی خود، خانه رویاهایش را بسازد. حتی می&zwnj;توانید محیط کار خود را با بهترین </span><a
                  href="https://www.digikala.com/search/category-office-machines/"><span
                    style="font-weight: 400;">ماشین های اداری</span></a><span style="font-weight: 400;"> نظیر پرینتر، اسکنر و </span><a
                  href="https://www.digikala.com/search/category-stationery/"><span
                    style="font-weight: 400;">لوازم التحریر</span></a><span
                  style="font-weight: 400;"> تجهیز کنید. علاوه بر این، می&zwnj;توانید با سر زدن به شبکه های اجتماعی دیجی کالا نظیر </span><a
                  href="https://www.facebook.com/DigiKalaPortal/"><span
                    style="font-weight: 400;">فیس بوک</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://telegram.me/digikala"><span
                    style="font-weight: 400;">تلگرام</span></a><span
                  style="font-weight: 400;"> از جدیدترین مدل&zwnj;های </span><a
                  href="https://www.digikala.com/main/apparel/"><span
                    style="font-weight: 400;">لباس</span></a><span
                  style="font-weight: 400;">، اکسسوری، </span><a
                  href="https://www.digikala.com/search/category-women-bags/"><span
                    style="font-weight: 400;">کیف</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://www.digikala.com/search/category-women-shoes/"><span
                    style="font-weight: 400;">کفش</span></a><span style="font-weight: 400;"> زنانه، مردانه، بچه گانه، دخترانه، پسرانه و نوزاد مطلع شوید و از مشهورترین برندهای دنیا نظیر </span><a
                  href="https://www.digikala.com/brand/nike/"><span style="font-weight: 400;">نایکی</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/brand/adidas/"><span
                    style="font-weight: 400;">آدیداس</span></a><span style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/brand/reebok/"><span
                    style="font-weight: 400;">ریباک</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/brand/columbia/"><span
                    style="font-weight: 400;">کلمبیا</span></a><span style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/brand/hugo-boss/"><span
                    style="font-weight: 400;">باس</span></a><span
                  style="font-weight: 400;">، </span><a href="https://www.digikala.com/brand/gucci/"><span
                    style="font-weight: 400;">گوچی</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://www.digikala.com/brand/mango/"><span
                    style="font-weight: 400;">مانگو</span></a><span style="font-weight: 400;"> اجناس اصل و باکیفیت خریداری نمایید. همچنین با سر زدن به محصولات آرایشی و بهداشتی، لوازم شخصی برقی و انواع </span><a
                  href="https://www.digikala.com/search/category-perfume/"><span
                    style="font-weight: 400;">عطر و ادکلن اصل</span></a><span
                  style="font-weight: 400;"> تجربه&zwnj;ای جدید از خرید آنلاین کسب کنید و برای خرید انواع </span><a
                  href="https://www.digikala.com/main/sport-entertainment/traveling-equipment/"><span
                    style="font-weight: 400;">لوازم سفر</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-bicycles/"><span
                    style="font-weight: 400;">دوچرخه</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://www.digikala.com/main/book-and-media/musicalinstruments/"><span
                    style="font-weight: 400;">آلات موسیقی</span></a><span style="font-weight: 400;"> با مقایسه دقیق محصولات دیگر دچار سردرگمی نشوید. این روزها با اضافه شدن </span><a
                  href="https://www.digikala.com/main/food-beverage/"><span
                    style="font-weight: 400;">محصولات سوپرمارکت</span></a><span
                  style="font-weight: 400;"> (دیجی کالا فرش)، انواع خواربار، </span><a
                  href="https://www.digikala.com/search/category-fruits-and-vegetables/"><span
                    style="font-weight: 400;">میوه و سبزیجات</span></a><span
                  style="font-weight: 400;">، </span><a
                  href="https://www.digikala.com/search/category-protein-foods/"><span
                    style="font-weight: 400;">مواد پروتئینی</span></a><span style="font-weight: 400;"> اعم از گوشت، مرغ و ماهی و انواع </span><a
                  href="https://www.digikala.com/search/category-beverages/"><span
                    style="font-weight: 400;">نوشیدنی</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://www.digikala.com/search/category-snacks/"><span style="font-weight: 400;">تنقلات</span></a><span
                  style="font-weight: 400;"> و </span><a
                  href="https://www.digikala.com/landings/attari/"><span
                    style="font-weight: 400;">عطاری آنلاین</span></a><span
                  style="font-weight: 400;"> می توانید کلیه نیازهای خود را تنها با چند کلیک سفارش داده و در کمترین زمان ممکن درب منزل تحویل بگیرید. مناسب&zwnj;ترین جمله درباره دیجی&zwnj;کالا ،بازار بزرگ اینترنتی، است؛ چرا که با قدم گذاشتن در آن می&zwnj;توانید، یک خرید اینترنتی لذت بخش، با قیمت مناسب و ارزان به همراه تخفیف ویژه در حراج ها را تجربه کنید.</span></span><a
                data-snt-event="dkFooterClick"
                data-snt-params='{"item":"read-more","item_option":null}'
                href="#" id="js-footer-readmore">مشاهده بیشتر</a><br/>

            </p>
          </article>
        </div>
        <aside>
          <ul class="c-footer__safety-partner">
            <li>
              <img src="https://www.digikala.com/static/files/1e5dab5a.png"
                     class="c-footer__safety-partner-3" width="90" alt=""
                     onclick="window.open('https://www.ecunion.ir/verify/digikala.com?token=35858775acf0232a8063', 'Popup','toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30')"
                     data-snt-event="dkFooterClick"
                     loading="lazy"
                     data-snt-params='{"item":"varification","item_option":"samandehi"}'
                     style="cursor:pointer">
            </li>
            <li class="c-footer__safety-partner-2">
              <img src="https://trustseal.enamad.ir/logo.aspx?id=19077&amp;p=fFt0HzOPfbIzeRkW" alt=""
                onclick="window.open(&quot;https://trustseal.enamad.ir/?id=19077&amp;Code=sScdOJOzhFxtcEqkjP7P&quot;)"
                data-snt-event="dkFooterClick"
                loading="lazy"
                data-snt-params='{"item":"varification","item_option":"enamad"}'
                style="cursor:pointer" id="sScdOJOzhFxtcEqkjP7P">
            </li>

            <li class="c-footer__safety-partner-3">
              <img id='nbqeoeukjxlzjzpejzpe' style='cursor:pointer' onclick='window.open("https://logo.samandehi.ir/Verify.aspx?id=28177&p=uiwkmcsirfthjyoejyoe", "Popup","toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30")' alt='logo-samandehi'
                                                        loading="lazy"
                                                        src='https://logo.samandehi.ir/logo.aspx?id=28177&p=odrfaqgwnbpdyndtyndt'/>
            </li>
          </ul>
        </aside>
      </div>

      <div class="c-footer__copyright">
        <div class="c-footer__copyright--text">
          استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع
          بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.
        </div>
      </div>
    </div>
  </div>
</footer>
<div class="js-chat-box u-hidden">
  <div class="c-cro--faq-access js-chat-box-container-btn">
    <div class="c-cro__inside"></div>
  </div>
  <div class="c-cro--faq-questions-container js-chat-box-container u-hidden">
    <div class="c-cro--questions-container">
      <div class="js-chat-box-faq">
        <div class="c-cro--questions-container__welecomming">
          <div class="js-chat-box-welcoming"><span class="c-cro--questions-container__welecomming--hi">سلام</span><br>
            جواب سوال&zwnj;هاتون رو می&zwnj;تونید در زیر پیدا کنید.
            در غیر اینصورت از ما بپرسید، ما همیشه به سوالاتتون جواب می&zwnj;دهیم.
          </div>
        </div>
        <div class="c-cro--questions js-chat-box-questions"></div>
      </div>
      <div class="c-cro__bot-wrapper js-chat-box-user-data u-hidden">
        <div class="c-cro__bot-header">
          پشتیبانی آنلاین
        </div>
        <form id="chatbotForm" class="c-cro__bot-form"><p>
            برای راهنمایی بهتر لطفا اطلاعات زیر را وارد کنید:
          </p><label class="o-form__field-container">
            <div class="o-form__field-label">نام*</div>
            <div class="o-form__field-frame"><input name="chatbot[name]" type="" placeholder=""
                                                    value="" class="o-form__field js-input-field "/></div>
          </label><label class="o-form__field-container">
            <div class="o-form__field-label">شماره موبایل*</div>
            <div class="o-form__field-frame"><input name="chatbot[phone]" type="" placeholder=""
                                                    value="" class="o-form__field js-input-field "/></div>
          </label><label class="o-form__field-container">
            <div class="o-form__field-label">ایمیل*</div>
            <div class="o-form__field-frame"><input name="chatbot[email]" type="" placeholder=""
                                                    value="" class="o-form__field js-input-field "/></div>
          </label>
          <button type="submit" class="o-btn o-btn--full-width o-btn--outlined-red-lg">
            شروع گفتگو
          </button>
        </form>
      </div>
      <div class="c-cro__bot-wrapper c-cro__bot-wrapper--with-pattern js-chat-bot u-hidden">
        <div class="c-cro__bot-header">
          پشتیبانی آنلاین
        </div>
        <div class="c-cro__support-status-bar"><p>
            پیشتیبان هوش مصنوعی دیجی‌کالا
          </p><a class="c-wiki__trigger c-wiki c-wiki__holder js-dk-wiki-trigger">
            <div class="c-wiki__container js-dk-wiki is-right">
              <div class="c-wiki__arrow"></div>
              <p class="c-wiki__text">
                من ربات هوشمند گفت و گوی آنلاین دیجی‌کالا هستم و در حال حاضر در حال آموزش دیدن برای پاسخگویی بهتر و
                انتقال پیام شما به پاسخگوی مرتبط با مشکلتان هستم.
              </p></div>
          </a></div>
        <div class="c-cro__chat-body">
          <div class="js-chatbot-body">
            <div class="c-cro__chat-message c-cro__chat-message--dk"><p>
                به پشتیبانی هوشمند دیجی‌کالا خوش آمدید. لطفا سوال خود را بپرسید.
              </p><span>
                                    پشتیبان هوش مصنوعی
                                </span></div>
          </div>
          <div class="c-cro__feedback-section js-chatbot-feedback u-hidden"><p data-icon="Icon-Action-Question">آیا
              پاسخی که گرفتید مناسب بود؟</p>
            <button type="button" class="js-chatbot-feedback-button" data-rate="1">بله</button>
            <button type="button" class="js-chatbot-feedback-button" data-rate="-1">خیر</button>
          </div>
        </div>
        <div class="c-cro__send-message"><textarea rows="2" class="js-chat-bot-text-area"
                                                   placeholder="متن پیام خود را بنویسید ..."></textarea>
          <button type="button" class="js-chat-bot-send-msg disabled">
            ارسال
          </button>
        </div>
      </div>
      <div class="js-chat-center-iframe u-w-full u-hidden"></div>
      <div class="c-cro__loader-container js-chat-box-loader">
        <div class="c-remodal-loader__icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="115" height="30" viewBox="0 0 115 30">
            <path fill="#EE384E" fill-rule="evenodd"
                  d="M76.916 19.024h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zm26.883 0h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zM88.117 6.951v15.366c0 .484-.625 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm26.883 0v15.366c0 .484-.624 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm-74.675 3.293h-6.721c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78zm4.48-3.293V23.78c0 3.523-3.117 6.22-6.72 6.22H34.62c-.515 0-1-.236-1.311-.638l-1.972-2.55c-.327-.424-.144-1.202.399-1.202h6.347c1.16 0 2.24-.696 2.24-1.83v-.365h-6.72c-3.604 0-6.72-3.063-6.72-6.586v-4.39c0-3.523 3.116-6.585 6.72-6.585h4.107c.514 0 1.074.405 1.437.731l1.177 1.098V6.95c0-.483.625-1.097 1.12-1.097h2.24c.496 0 1.12.613 1.12 1.097zM4.481 16.83c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39zM16.8 0c.497 0 1.121.613 1.121 1.098v21.22c0 .483-.624 1.097-1.12 1.097h-2.24c-.496 0-1.12-.613-1.12-1.098v-.732l-1.175 1.232c-.318.346-.932.598-1.44.598H6.722C3.117 23.415 0 20.352 0 16.829v-4.356c0-3.523 3.117-6.62 6.72-6.62h6.722V1.099c0-.485.624-1.098 1.12-1.098h2.24zm46.3 14.634L69.336 6.9c.347-.421.04-1.048-.513-1.048h-3.566c-.27 0-.525.119-.696.323l-6.314 7.727V1.098c0-.485-.625-1.098-1.12-1.098h-2.24c-.496 0-1.12.613-1.12 1.098v21.22c0 .483.624 1.097 1.12 1.097h2.24c.495 0 1.12-.614 1.12-1.098v-6.951l6.317 7.744c.17.207.428.328.7.328h3.562c.554 0 .86-.627.514-1.048l-6.24-7.756zM48.166 0c-.496 0-1.12.613-1.12 1.098v2.195c0 .484.624 1.097 1.12 1.097h2.24c.495 0 1.12-.613 1.12-1.097V1.098c0-.485-.625-1.098-1.12-1.098h-2.24zm0 5.854c-.496 0-1.12.613-1.12 1.097v15.366c0 .484.8 1.12 1.295 1.12l2.065-.022c.495 0 1.12-.614 1.12-1.098V6.951c0-.484-.625-1.097-1.12-1.097h-2.24zM21.282 0c-.495 0-1.12.613-1.12 1.098v2.195c0 .484.625 1.097 1.12 1.097h2.24c.496 0 1.12-.613 1.12-1.097V1.098c0-.485-.624-1.098-1.12-1.098h-2.24zm0 5.854c-.495 0-1.12.613-1.12 1.097v15.366c0 .484.625 1.098 1.12 1.098h2.24c.496 0 1.12-.614 1.12-1.098V6.951c0-.484-.624-1.097-1.12-1.097h-2.24zm73.556-4.756v21.22c0 .483-.625 1.097-1.12 1.097h-2.24c-.496 0-1.12-.614-1.12-1.098V1.097c0-.484.624-1.097 1.12-1.097h2.24c.495 0 1.12.613 1.12 1.098z"/>
          </svg>
        </div>
        <div class="c-remodal-loader__bullets">
          <div class="c-remodal-loader__bullet c-remodal-loader__bullet--1"></div>
          <div class="c-remodal-loader__bullet c-remodal-loader__bullet--2"></div>
          <div class="c-remodal-loader__bullet c-remodal-loader__bullet--3"></div>
          <div class="c-remodal-loader__bullet c-remodal-loader__bullet--4"></div>
        </div>
      </div>
    </div>
  </div>
</div>
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
