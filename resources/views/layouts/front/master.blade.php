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

  $header_navs = \Modules\Staff\Nav\Models\NavLocation::find(1)->navs;
?>
<!DOCTYPE html>
<html dir="rtl">

<head>

  @include('layouts.front.ModulesScript')

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, {{ ($site_index_status == 'true')? 'follow' : 'nofollow' }}"/>
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#fb3449">
  <meta name="msapplication-navbutton-color" content="#fb3449">
  <meta name="apple-mobile-web-app-status-bar-style" content="#fb3449">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="canonical" href="{{ $site_url }}"/>

  <link rel="shortcut icon" href="{{ !is_null($favicon_image)? $site_url . '/' . $favicon_image->path . '/'. $favicon_image->name : '' }}" type="image/icon">
  <link rel="icon" type="image/png" href="{{ !is_null($favicon_image)? $site_url . '/' . $favicon_image->path . '/'. $favicon_image->name : '' }}">

  <link rel="stylesheet" href="{{ asset('assets/css/customize.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/new/css/app.css') }} ">
  <link rel="stylesheet" href="{{ asset('assets/new/css/max-height1184px.css') }} " media="screen and (max-height: 1184px)">
  <link rel="stylesheet" href="{{ asset('assets/new/css/max-width1365px.css') }} " media="screen and (max-width: 1365px)">
  <link rel="stylesheet" href="{{ asset('assets/new/css/min-width1025px.css') }} " media="screen and (min-width: 1025px)">
  <link rel="stylesheet" href="{{ asset('assets/new/css/min-width1366px.css') }} " media="screen and (min-width: 1366px)">
  <link rel="stylesheet" href="{{ asset('assets/new/css/min-width1680px.css') }} " media="screen and (min-width: 1680px)">


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

  @yield('head')

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
          <?php $customer = auth()->guard('customer')->user(); ?>
          <div class="c-header__btn-container">
            <input type="hidden" id="topBarMeta" data-cart_count="0" data-cart_items="[]">

            <input type="hidden" id="ESILogged" data-logged="1" data-user_id="{{ $customer->id }}" data-email="{{ $customer->email }}" data-default_phone="{{ $customer->mobile }}" data-login_phone="{{ auth()->guard('customer')->user()->mobile }}" data-mobile_phone="{{ auth()->guard('customer')->user()->mobile }}" data-first_name="{{ $customer->first_name }}" data-last_name="{{ $customer->last_name }}">

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

              @foreach($header_navs->where('parent_id', null) as $nav)
                @if($nav->type == 'megamenu')
                  <li class="js-categories-bar-item js-mega-menu-main-item js-categories-item c-navi-new-list__category-container-main">
                  <div class="c-navi-new-list__category c-navi-new-list__category--main">
                    <span class="menu-icons" style="background: url({{ ($nav->media()->exists())? $site_url . '/' . $nav->media()->first()->path . '/' . $nav->media()->first()->name : '' }}) no-repeat !important; background-size: 20px !important;"></span>
                    {{ persianNum($nav->name) }}
                  </div>
                    <div class="c-navi-new-list__sublist js-mega-menu-categories-options c-navi-new__ads-holder">
                      <div class="c-navi-new-list__inner-categories">
                        @if($nav->children()->exists())
                          @foreach($nav->children as $key => $megamenu)
                            <a href="{{ $megamenu->link }}" class="c-navi-new-list__inner-category js-mega-menu-category {{ ($key == 0)? 'c-navi-new-list__inner-category--hovered ' : '' }}" data-index="{{ $key }}">
                              @if($megamenu->media()->exists())
                                <span class="menu-icons" style="background: url({{ ($megamenu->media()->exists())? $site_url . '/' . $megamenu->media()->first()->path . '/' . $megamenu->media()->first()->name : '' }}) no-repeat !important; background-size: 20px !important;"></span>
                              @endif
                              {{ persianNum($megamenu->name) }}
                            </a>
                          @endforeach
                        @endif
                      </div>
                      <div class="c-navi-new-list__options-container">
                        @if($nav->children()->exists())
                          @foreach($nav->children as $i => $menu)
                            <div class="c-navi-new-list__options-list js-mega-menu-category-options {{ ($i == 0)? 'is-active' : '' }}" id="categories-{{ $i }}">
                              <div class="c-navi-new-list__sublist-top-bar">
                                <a href="{{ $menu->link }}" class="c-navi-new-list__sublist-see-all-cats">
                                  همه دسته‌بندی‌های {{ persianNum($menu->name) }}
                                </a>
                              </div>
                              <ul>
                                @foreach($menu->children as $menu)
                                  <li class="{{ ($menu->style == 'bold')? 'c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title' : 'c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item' }}" data-event="megamenu_click" data-event-category="header_section">
                                    <a href="{{ $menu->link }}" class="c-navi-new__big-display-title">
                                      {{ persianNum($menu->name) }}
                                    </a>
                                    <a href="{{ $menu->link }}" class="c-navi-new__medium-display-title">
                                      {{ persianNum($menu->name) }}
                                    </a>
                                  </li>
                                @endforeach



                              </ul>
                            </div>
                          @endforeach
                        @endif
                      </div>
                    </div>
                  </li>
                @elseif($nav->children()->exists())

                  <li class="js-categories-bar-item js-mega-menu-main-item js-promotion-mega-menu">
                    <a href="{{ $nav->link }}" class="c-navi-new-list__category-link c-navi-new-list__category-link--amazing c-navi-new-list__category-link--bold">{{ persianNum($nav->name) }}</a>
                    <div class="c-navi-new-list__sublist c-navi-new-list__sublist--promotion js-mega-menu-categories-options" style="display: none;">
                      <div class="c-navi-new-list__options-container">
                        <div class="c-navi-new-list__options-list is-active">
                          <div class="c-navi-new-list__sublist-top-bar">
                            <a href="{{ $nav->link }}" class="c-navi-new-list__sublist-see-all-cats">
                              مشاهده همه {{ persianNum($nav->name) }}
                            </a>
                          </div>
                          <ul>
                            @if($nav->children()->exists())
                              @foreach($nav->children as $key => $item)
                                <li class="{{ ($item->style == 'bold')? 'c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title' : 'c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item' }}">
                                  <a href="{{ $item->link }}" class="c-navi-new__big-display-title"><span>{{ persianNum($item->name) }}</span></a>
                                </li>
                              @endforeach
                            @endif
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>

                @else
                  <li class="js-categories-bar-item">
                    <a href="{{ $megamenu->link }}" class="c-navi-new-list__category-link c-navi-new-list__category-link--fresh c-navi-new-list__category-link--bold">{{ persianNum($megamenu->name) }}</a>
                  </li>
                @endif
              @endforeach









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

          <input type="hidden"  id="ESILogged" data-logged={{ (auth()->guard('customer')->check())? 1 : 0 }}/>

        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="c-navi-categories__overlay js-navi-overlay"></div>

@yield('content')

@yield('source')

<div id="footer-data-ux"></div>
<footer class="c-footer">
  <div class="container">
    <div class="c-footer__jumpup">
      <span id="js-jump-to-top" class="c-footer__jumpup-container">
        <span class="c-footer__jumpup-angle"></span>
            برگشت به بالا
        </span>
    </div>

    <div class="c-footer__middlebar">
      <div class="c-footer__links">
        @foreach(\Modules\Staff\Nav\Models\NavLocation::find(2)->navs->where('parent_id', null) as $nav)
          <nav class="c-footer__links--col">
            <div class="o-headline-links">
              <div>
                <a href="{{ $nav->link }}">{{ persianNum($nav->name) }}</a>
              </div>
            </div>
            <ul class="c-footer__links-ul">
              @foreach($nav->children as $item)
                <li>
                  <a href="{{ $item->link }}">{{ $item->name }}</a>
                </li>
              @endforeach
            </ul>
          </nav>
        @endforeach
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
