<?php
$settings = \Modules\Staff\Setting\Models\Setting::all();
$store_email = $settings->where('name', 'store_email')->first()->value;
$whatsapp_link = $settings->where('name', 'whatsapp_link')->first()->value;
$telegram_link = $settings->where('name', 'telegram_link')->first()->value;
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    @include('layouts.front.ModulesScript')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ !is_null($favicon_image) ? $site_url . '/' . $favicon_image->path . '/' . $favicon_image->name : '' }}"type="image/icon">
    <link rel="icon" type="image/png" href="{{ !is_null($favicon_image) ? $site_url . '/' . $favicon_image->path . '/' . $favicon_image->name : '' }}">
    <meta name="robots" content="index, {{ $site_index_status == 'true' ? 'follow' : 'nofollow' }}" />

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#fb3449">
    <meta name="msapplication-navbutton-color" content="#fb3449">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fb3449">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('assets/new/css/app.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/new/css/max-height1184px.css') }} "
        media="screen and (max-height: 1184px)">
    <link rel="stylesheet" href="{{ asset('assets/new/css/max-width1365px.css') }} "
        media="screen and (max-width: 1365px)">
    <link rel="stylesheet" href="{{ asset('assets/new/css/min-width1025px.css') }} "
        media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="{{ asset('assets/new/css/min-width1366px.css') }} "
        media="screen and (min-width: 1366px)">
    <link rel="stylesheet" href="{{ asset('assets/new/css/min-width1680px.css') }} "
        media="screen and (min-width: 1680px)">

    {!! $settings->where('name', 'custom_header_code')->first()->value ?? '' !!}

    @yield('head')

    <style> {!! $settings->where('name', 'custom_css_code')->first()->value ?? '' !!} </style>

</head>

<?php
    $banner1 = \Modules\Staff\Slider\Models\Slider::find(1);
    $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);
?>
<body class="t-index {{ $banner1 && $banner1->status  == 'active' && $banner1->images()->exists() ? 'has-top-banner' : '' }}" style="">
    <header class="c-header js-header">
        @if ($banner1 && $banner1->status  == 'active' && $banner1->images()->exists() && $banner1->images()->first()->media()->exists())
            <aside class="c-adplacement c-adplacement__placeholder c-adplacement__container-row c-adplacement__container-row--top">
                <a href="#" class="c-adplacement__item" target="_blank" style="background-image: url({{ $banner1->images()->first()->media()->exists()
                    ? $site_url . '/' . $banner1->images()->first()->media->first()->path . '/' . $banner1->images()->first()->media->first()->name
                    : ''
                 }})"
                    title="{{ $banner2->images()->first()->media()->exists() ? $banner2->images()->first()->alt : '' }}">
                    </a>
            </aside>
        @endif

        <div class="container">
            <div class="c-header__row js-header-sticky">
                <div class="c-header__right-side">
                    <div class="c-header__logo ">
                        <a href="{{ route('front.indexPage') }}" class="c-header__logo-img"
                            style="background: {{ !is_null($header_logo) ? 'url(' . $site_url . '/' . $header_logo->path . '/' . $header_logo->name . ')' : '' }}
                            {{ is_null($header_logo) ? 'unset !important;' : 'no-repeat 50%;' }} !important; background-size: contain !important;">
                            Diginova
                        </a>
                    </div>
                    <div class="c-header__search">
                        <div class="c-search js-search" data-event="using_search_box" data-event-category="header_section">
                            <span class="c-search__reset u-hidden js-search-reset"></span>
                            <input type="text" name="q" placeholder="جستجو در دیجی‌کالا …" class="js-search-input" autocomplete="off" value="">
                            <div class="c-search__results js-search-results">
                                <div class="js-ab-search-box-product-suggestions swiper-container
                                     swiper-container-horizontal js-swiper-product-suggestions
                                     c-search__product-suggestions-list-container swiper-container-rtl" style="display: none;">
                                    <ul class="js-product-suggestions-list swiper-wrapper"
                                        style="transition-duration: 0ms; display: none;"></ul>
                                    <div class="js-swiper-button-prev swiper-butsston-prev c-search__swiper-button-prev-circle"></div>
                                    <div class="js-swiper-button-next swiper-buttossn-next c-search__swiper-button-next-circle"></div>
                                </div>
                                <ul class="c-search__results-last-searches-container js-last-searches"
                                    style="display: none;">
                                    <div class="c-search__label-container">
                                        <span class="c-search__searches-label-icon c-search__searches-label-icon--last-searches"></span>
                                        <span class="c-search__searches-label">تاریخچه جستجوهای شما</span>
                                        <span class="c-search__last-searches-trash-icon js-last-searches-trash-icon"></span>
                                    </div>
                                    <div class="c-search__results-last-searches-items js-last-searches-items"
                                        style="display: none;"></div>
                                </ul>
                                <div style="display: none;">
                                    <div class="c-search__label-container">
                                        <span class="c-search__searches-label-icon c-search__searches-label-icon--trend"></span>
                                        <span class="c-search__searches-label">بیشترین جستجوهای اخیر</span></div>
                                    <ul class="c-search__results-trends js-trends-results" style="display: none;"></ul>
                                </div>
                                <ul class="js-autosuggest-results-list c-search__results-list c-search__results-list--autosuggest" style="display: none;"></ul>
                                <ul class="js-results-list c-search__results-list" style="display: none;"></ul>
                                <ul class="js-autosuggest-empty-list c-search__results-list">
                                    <li>
                                        <a class="js-search-keyword-link" href="javascript:">
                                            <span class="c-search__result-item c-search__result-icon c-search__result-icon--group">
                                                نمایش همه نتایج برای
                                            </span>
                                            <span class="c-search__result-item--category js-search-keyword"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" c-header__action">
                    @if (auth()->guard('customer')->check())
                        <?php $customer = auth()
                            ->guard('customer')
                            ->user(); ?>
                        <div class="c-header__btn-container">
                            <input type="hidden" id="topBarMeta" data-cart_count="0" data-cart_items="[]">
                            <input type="hidden" id="ESILogged" data-logged="1" data-user_id="{{ $customer->id }}"
                                data-email="{{ $customer->email }}" data-default_phone="{{ $customer->mobile }}"
                                data-login_phone="{{ auth()->guard('customer')->user()->mobile }}"
                                data-mobile_phone="{{ auth()->guard('customer')->user()->mobile }}"
                                data-first_name="{{ $customer->first_name }}"
                                data-last_name="{{ $customer->last_name }}">
                            <div class="c-header__btn-user-container c-header__btn-profile-container js-dropdown-container">
                                <a data-snt-event="dkHeaderClick"
                                    data-snt-params="{&quot;item&quot;:&quot;account&quot;,&quot;item_option&quot;:null}"
                                    class="c-header__btn-profile js-dropdown-toggle">
                                </a>
                                <div class="c-header__profile-dropdown js-dropdown-menu">
                                    <div class="c-header__profile-dropdown-account-container">
                                        <div class="c-header__profile-dropdown-user">
                                            <div class="c-header__profile-dropdown-user-img">
                                                <img src="{{ asset('mehdi/public/images/user.svg') }}">
                                            </div>
                                            <div class="c-header__profile-dropdown-user-info">
                                                <p class="c-header__profile-dropdown-user-name">
                                                    {{ customerFullName() }}
                                                </p>
                                                <span class="c-header__profile-dropdown-user-profile-link">
                                                    مشاهده حساب کاربری
                                                </span>
                                            </div>
                                        </div>
                                        <div class="c-header__profile-dropdown-account">
                                            <div class="c-header__profile-dropdown-account-item u-hidden js-user-dropdown-wallet-has-amount">
                                                <span class="c-header__profile-dropdown-account-item-title">
                                                    کیف پول
                                                </span>
                                                <div class="c-header__profile-dropdown-account-item-amount">
                                                    <span class="c-header__profile-dropdown-account-item-amount-number
                                                     js-user-drop-down-wallet-amount"></span>
                                                    تومان
                                                </div>
                                            </div>
                                            <div
                                                class="c-header__profile-dropdown-account-item u-hidden js-user-dropdown-wallet-has-url">
                                                <a class="c-header__profile-dropdown-account-item-title c-header__profile-dropdown-account-item-title--link  js-wallet-activation-url"
                                                    href="">فعال سازی کیف پول</a>
                                            </div>
                                        </div>
                                        <a href="/profile/" data-snt-event="dkHeaderClick"
                                            data-snt-params="{&quot;item&quot;:&quot;account&quot;,&quot;item_option&quot;:&quot;profile&quot;}"
                                            data-event="profile_click" data-event-category="header_section"
                                            data-event-label="logged_in: True - digiclub_score: 87000"
                                            class="c-header__profile-dropdown-user-profile-full-link"></a>
                                    </div>

                                    <div class="c-header__profile-dropdown-actions">  
                                        <li>
                                            <a href="{{ route('customer.panel.myOrders') }}" class="c-profile-menu__item c-profile-menu__item--orders {{ (request()->routeIs('customer.panel.myOrders'))? 'is-active' : '' }}">
                                                سفارش‌های من
                                            </a>
                                        </li>
                                        <div class="c-header__profile-dropdown-action-container">
                                            <a href="/profile/favorites/?convert=true"
                                                class="c-header__profile-dropdown-action c-header__profile-dropdown-action--favorites">
                                                لیست مورد علاقه
                                            </a>
                                        </div>
                                        <div class="c-header__profile-dropdown-action-container">
                                            <a href="/users/logout/" data-snt-event="dkHeaderClick"
                                                data-snt-params="{&quot;item&quot;:&quot;account&quot;,&quot;item_option&quot;:&quot;sign-out&quot;}"
                                                class="c-header__profile-dropdown-action c-header__profile-dropdown-action--logout js-logout-button">
                                                خروج از حساب کاربری
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="c-header__btn-container">
                            <div class="c-header__btn">
                                <a data-snt-event="dkHeaderClick"
                                    data-snt-params='{"item":"account","item_option":null}'
                                    class="c-header__btn-login o-tooltip"
                                    href="/users/login-register/">
                                    ورود به حساب کاربری
                                </a>
                            </div>
                        </div>
                    @endif

                    <div id="mini-cart" class="c-header__btn-container">
                        <div class="c-header__btn-cart-container ">
                            <a id="cart-button" class="c-header__btn-cart c-header__btn-adding--no-drop-down"
                                data-snt-event="dkHeaderClick" data-snt-params='{"item":"mini-cart","item_option":null}'
                                data-counter="۰" href="/cart/" data-event="mini_cart_click"
                                data-event-category="header_section" data-event-label="items: 0 - total price: ">
                            </a>
                            <div class="c-header__cart-info js-mini-cart-dropdown">
                                <div class="c-header__cart-info-header">
                                    <div class="c-header__cart-info-count">
                                        ۰ کالا
                                    </div>
                                    <a data-snt-event="dkHeaderClick"
                                        data-snt-params='{"item":"mini-cart","item_option":"cart-page"}' href="/cart/"
                                        class="c-header__cart-info-link">
                                        <span>مشاهده سبد خرید</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="remodal c-modal c-u-minicart__modal u-hidden js-minicart-modal"
                            data-remodal-id="universal-mini-cart" role="dialog" aria-labelledby="modalTitle"
                            tabindex="-1z" aria-describedby="modalDesc" data-remodal-options="">
                            <div class="c-modal__top-bar ">
                                <div>
                                    <div class="c-u-minicart__quantity">
                                        سبد خرید
                                        <span>۰ کالا</span>
                                    </div>
                                    <a href="/cart/" class="o-link o-link--has-arrow o-link--no-border o-link--sm">
                                        مشاهده سبد خرید
                                    </a>
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
                                    <a data-snt-event="dkHeaderClick"
                                        data-snt-params='{"item":"mini-cart","item_option":"confirm-cart"}' href=""
                                        class="o-btn o-btn--contained-red-md">ورود و ثبت سفارش</a>
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
                                <?php
                                    $nav = \Modules\Staff\Nav\Models\NavLocation::where('id', 1)->first();
                                    $header_navs = $nav && $nav->navs()->exists() ? $nav->navs : null;
                                ?>
                                @if (!is_null($header_navs) && $header_navs->where('parent_id', null)->count())
                                    @foreach ($header_navs->where('parent_id', null) as $nav)
                                        @if ($nav->type == 'megamenu')
                                            <li
                                                class="js-categories-bar-item js-mega-menu-main-item js-categories-item c-navi-new-list__category-container-main">
                                                <div class="c-navi-new-list__category c-navi-new-list__category--main">
                                                    <span class="menu-icons"
                                                        style="background: url({{ $nav->media()->exists() ? $site_url . '/' . $nav->media()->first()->path . '/' . $nav->media()->first()->name : '' }}) no-repeat !important; background-size: 20px !important;"></span>
                                                    {{ persianNum($nav->name) }}
                                                </div>
                                                <div
                                                    class="c-navi-new-list__sublist js-mega-menu-categories-options c-navi-new__ads-holder">
                                                    <div class="c-navi-new-list__inner-categories">
                                                        @if ($nav->children()->exists())
                                                            @foreach ($nav->children as $key => $megamenu)
                                                                <a href="{{ $megamenu->link }}"
                                                                    class="c-navi-new-list__inner-category js-mega-menu-category {{ $key == 0 ? 'c-navi-new-list__inner-category--hovered ' : '' }}"
                                                                    data-index="{{ $key }}">
                                                                    @if ($megamenu->media()->exists())
                                                                        <span class="menu-icons"
                                                                            style="background: url({{ $megamenu->media()->exists() ? $site_url . '/' . $megamenu->media()->first()->path . '/' . $megamenu->media()->first()->name : '' }}) no-repeat !important; background-size: 20px !important;"></span>
                                                                    @endif
                                                                    {{ persianNum($megamenu->name) }}
                                                                </a>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="c-navi-new-list__options-container">
                                                        @if ($nav->children()->exists())
                                                            @foreach ($nav->children as $i => $menu)
                                                                <div class="c-navi-new-list__options-list js-mega-menu-category-options {{ $i == 0 ? 'is-active' : '' }}"
                                                                    id="categories-{{ $i }}">
                                                                    <div class="c-navi-new-list__sublist-top-bar">
                                                                        <a href="{{ $menu->link }}"
                                                                            class="c-navi-new-list__sublist-see-all-cats">
                                                                            همه دسته‌بندی‌های
                                                                            {{ persianNum($menu->name) }}
                                                                        </a>
                                                                    </div>
                                                                    <ul>
                                                                        @foreach ($menu->children as $menu)
                                                                            <li class="{{ $menu->style == 'bold' ? 'c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title' : 'c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item' }}"
                                                                                data-event="megamenu_click"
                                                                                data-event-category="header_section">
                                                                                <a href="{{ $menu->link }}"
                                                                                    class="c-navi-new__big-display-title">
                                                                                    {{ persianNum($menu->name) }}
                                                                                </a>
                                                                                <a href="{{ $menu->link }}"
                                                                                    class="c-navi-new__medium-display-title">
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
                                                <a href="{{ $nav->link }}" class="c-navi-new-list__category-link c-navi-new-list__category-link--amazing
                                                     c-navi-new-list__category-link--bold">
                                                     {{ persianNum($nav->name) }}
                                                </a>
                                                <div class="c-navi-new-list__sublist c-navi-new-list__sublist--promotion js-mega-menu-categories-options"
                                                    style="display: none;">
                                                    <div class="c-navi-new-list__options-container">
                                                        <div class="c-navi-new-list__options-list is-active">
                                                            <div class="c-navi-new-list__sublist-top-bar">
                                                                <a href="{{ $nav->link }}"
                                                                    class="c-navi-new-list__sublist-see-all-cats">
                                                                    مشاهده همه {{ persianNum($nav->name) }}
                                                                </a>
                                                            </div>
                                                            <ul>
                                                                @if ($nav->children()->exists())
                                                                    @foreach ($nav->children as $key => $item)
                                                                        <li class="{{ $item->style == 'bold' ? 'c-navi-new-list__sublist-option c-navi-new-list__sublist-option--title' : 'c-navi-new-list__sublist-option c-navi-new-list__sublist-option--item' }}">
                                                                            <a href="{{ $item->link }}" class="c-navi-new__big-display-title">
                                                                                <span>
                                                                                    {{ persianNum($item->name) }}
                                                                                </span>
                                                                            </a>
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
                                                <a href="{{ $megamenu->link }}" class="c-navi-new-list__category-link
                                                    c-navi-new-list__category-link--fresh c-navi-new-list__category-link--bold">
                                                    {{ persianNum($megamenu->name) }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        <input type="hidden" id="ESILogged" data-logged="{{ auth()->guard('customer')->check() ? 1 : 0 }}" />

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="c-navi-categories__overlay js-navi-overlay"></div>

    @yield('content')

    @yield('source')

    <div id="footer-data-ux"></div>

    <div class="c-new-footer__container">
        <footer class="c-new-footer container c-new-footer--home-page">
            <div class="u-flex u-justify-between u-items-center items-center">
                <div class="c-new-footer__logo"></div>
                <div id="js-jump-to-top" class="c-new-footer__jump-to-top-container">
                    <span class="c-new-footer__jump-to-top-label">
                        بازگشت به بالا
                    </span>
                    <span class="c-new-footer__jump-to-top-icon"></span>
                </div>
            </div>
            <?php
                $store_phone = $settings->where('name', 'store_phone')->first()->value;
                $footer_slogan = $settings->where('name', 'footer_slogan')->first()->value;
            ?>
            @if ($store_phone || $footer_slogan)
                <div class="c-new-footer__contact-info-container">
                    @if ($store_phone)
                        <span>تلفن پشتیبانی:</span>
                        <a class="c-new-footer__phone-number">
                            {{ persianNum($settings->where('name', 'store_phone')->first()->value) }}
                        </a>
                    @endif

                    @if ($footer_slogan)
                        @if ($store_phone)
                            <span class="c-new-footer__phone-number-separator">|</span>
                        @endif
                        <span>
                            {{ $settings->where('name', 'footer_slogan')->first()->value }}
                        </span>
                    @endif
                </div>
            @endif
            <div class="c-new-footer__feature-inner-box-container"></div>
            <div class="c-new-footer__column-container">
                @if (\Modules\Staff\Nav\Models\NavLocation::where('id', 2)->count() &&
                    \Modules\Staff\Nav\Models\NavLocation::find(2)->navs->where('parent_id', null)->count())
                    @foreach (\Modules\Staff\Nav\Models\NavLocation::find(2)->navs->where('parent_id', null) as $nav)
                        <nav class="c-new-footer__column-link">
                            <a class="c-new-footer__column-label" href="{{ $nav->link }}">
                                {{ persianNum($nav->name) }}
                            </a>
                            <ul>
                                @foreach ($nav->children as $item)
                                    <li>
                                        <a href="{{ $item->link }}">
                                            {{ $item->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    @endforeach
                @endif
                <?php
                    $linkedin_link = $settings->where('name', 'linkedin_link')->first()->value;
                    $aparat_link = $settings->where('name', 'aparat_link')->first()->value;
                    $twitter_link = $settings->where('name', 'twitter_link')->first()->value;
                    $instagram_link = $settings->where('name', 'instagram_link')->first()->value;
                ?>
                @if ($linkedin_link ||$aparat_link || $twitter_link || $instagram_link)
                    <nav class="c-new-footer__column-social-media">
                        <div class="c-new-footer__column-label">
                            با ما همراه باشید
                        </div>
                        <div class="c-new-footer__social-links">
                            @if (!is_null($linkedin_link))
                                <a href="{{ $linkedin_link }}"
                                    class="c-footer__social-link c-footer__social-link--linkedin" target="_blank"></a>
                            @endif
                            @if (! is_null($aparat_link))
                                <a href="{{ $aparat_link }}" class="c-footer__social-link c-footer__social-link--aparat"
                                    target="_blank"></a>
                            @endif
                            @if (!is_null($twitter_link))
                                <a href="{{ $twitter_link }}"
                                    class="c-footer__social-link c-footer__social-link--twitter" target="_blank"></a>
                            @endif
                            @if (!is_null($instagram_link))
                                <a href="{{ $instagram_link }}"
                                    class="c-footer__social-link c-footer__social-link--instagram" target="_blank"></a>
                            @endif
                        </div>
                    </nav>
                @endif
            </div>
            <?php
                $googleplay_link = $settings->where('name', 'googleplay_link')->first()->value;
                $cafebazaar_link = $settings->where('name', 'cafebazaar_link')->first()->value;
                $myket_link = $settings->where('name', 'myket_link')->first()->value;
                $sibapp_link = $settings->where('name', 'sibapp_link')->first()->value;
            ?>
            @if ($googleplay_link || $cafebazaar_link || $myket_link || $sibapp_link)
                <div class="c-new-footer__app-links-container">
                    <a class="u-flex u-items-center">
                        <div class="c-new-footer__app-links-label">
                            دانلود اپلیکیشن
                            <label>{{ $fa_store_name }}</label>
                        </div>
                    </a>
                    <div class="c-new-footer__app-images-container">
                        @if ($googleplay_link)
                            <a class="store-link" href="{{ $googleplay_link }}" target="_blank">
                                <img alt="دریافت از گوگل پلی" width="150px" height="44px" loading="lazy"
                                    src="{{ asset('mehdi/public/images/googleplay.svg') }}">
                            </a>
                        @endif
                        @if ($cafebazaar_link)
                            <a class="store-link" href="{{ $cafebazaar_link }}" target="_blank">
                                <img data-src="{{ asset('mehdi/public/images/cafebazaar.svg') }}"
                                    width="150px" height="44px" loading="lazy" alt="دریافت از بازار"
                                    src="{{ asset('mehdi/public/images/cafebazaar.svg') }}">
                            </a>
                        @endif
                        @if ($myket_link)
                            <a class="store-link" href="{{ $myket_link }}" target="_blank">
                                <img data-src="{{ asset('mehdi/public/images/myket.png') }}"
                                    width="150px" height="44px" loading="lazy" alt="دریافت از مایکت"
                                    src="{{ asset('mehdi/public/images/myket.png') }}">
                            </a>
                        @endif
                        @if ($sibapp_link)
                            <a class="store-link" href="{{ $sibapp_link }}" target="_blank">
                                <img data-src="{{ asset('mehdi/public/images/sibapp.svg') }}"
                                    width="150px" height="44px" loading="lazy" alt="دریافت از سیبچه"
                                    src="{{ asset('mehdi/public/images/sibapp.svg') }}">
                            </a>
                        @endif
                    </div>
                </div>
            @endif
            <div class="u-flex u-justify-between">
                <div>
                    <article class="c-new-footer__seo-container">
                        <h1 class="c-new-footer__seo-title">
                            {{ persianNum($settings->where('name', 'footer_desc_title')->first()->value ?? '') }}
                        </h1>
                        <p style="text-align: justify">
                            <span class="c-new-footer__seo-content" id="seo-main-content">
                                {{ persianNum($settings->where('name', 'footer_description')->first()->value) }}
                            </span>
                        </p>
                    </article>
                </div>
                <div class="u-flex">
                    @if ($samandehi = $settings->where('name', 'samandehi_link')->first()->value)
                        <div class="c-new-footer__trust-symbol">
                            {{ $samandehi }}
                        </div>
                    @endif
                    @if ($ecunion = $settings->where('name', 'ecunion_link')->first()->value)
                        <div class="c-new-footer__trust-symbol">
                            {{ $ecunion }}
                        </div>
                    @endif
                    @if ($enamad = $settings->where('name', 'enamad_link')->first()->value)
                        <div class="c-new-footer__trust-symbol">
                            {{ $enamad }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="c-new-footer__copyright u-text-center">
                {{ persianNum($settings->where('name', 'copyright_text')->first()->value) }}
            </div>
        </footer>
    </div>
</body>

{!! $settings->where('name', 'custom_footer_code')->first()->value ?? '' !!}

</html>
