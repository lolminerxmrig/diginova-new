@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);
@endphp

@extends('layouts.front.master')

@section('head')
  <title></title>
  <!-- SEO -->
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <link rel="canonical" href=""/>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var hasUpdatedPriceItem = false;
    var checkoutStep = 1;
    var enhanced_ecommerce = {
      "15477082": {
        "id": 4826524,
        "name": "\u062f\u0631\u0632\u06af\u06cc\u0631 \u062a\u0631\u06a9 \u0633\u0637\u0648\u062d \u0646\u06cc\u067e\u0648\u0646 \u0645\u062f\u0644 S100 \u0648\u0632\u0646 1 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
        "category": "TC",
        "category_id": 8265,
        "brand": "nippon-paint",
        "variant": 15477082,
        "price": 415000,
        "discount_percent": 0,
        "quantity": 1
      }
    };
    var userRecommendationSidebar = [];
    var userRecommendationCarousel = [];
    var faqPageTitle = "cart_section";
    var nextPurchaseList = [{
      "brand": "Apple",
      "category": "\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9",
      "id": 98927658,
      "name": "\u0644\u067e \u062a\u0627\u067e 16 \u0627\u06cc\u0646\u0686\u06cc \u0627\u067e\u0644 \u0645\u062f\u0644 MacBook Pro MVVM2 2019 \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u062a\u0627\u0686 \u0628\u0627\u0631",
      "position": 1,
      "price": 666990000,
      "status": "marketable"
    }, {
      "brand": "Apple",
      "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
      "id": 61292167,
      "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 256 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
      "position": 2,
      "price": 470000000,
      "status": "marketable"
    }];
    var userId = 9735394;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/cart\/";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";
    var activateUrl = "\/digiclub\/activate\/";
  </script>

  <script src="{{ asset('assets/js/sentry.js') }}"></script>
  <script src="{{ asset('assets/new/js/CartIndexAction.js') }}"></script>

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
    <div id="content">
      <section class="o-page c-cart-page">
        <div class="container">

          <div class="c-checkout__tab">
            <div class="c-checkout__tab-pill c-checkout__tab-pill--main-cart c-checkout__tab-pill--active js-cart-tab"
                 data-type="main">
              سبد خرید
              <span class="c-checkout__tab-counter">
{{--                {{ persianNum($carts->where('type', 'first')->count()) }}--}}
              </span>
            </div>
            <div class="c-checkout__tab-pill c-checkout__tab-pill--sfl  js-cart-tab" data-type="sfl">
              لیست خرید بعدی
              <span class="c-checkout__tab-counter">
{{--                {{ persianNum($carts->where('type', 'second')->count()) }}--}}
            </span>
            </div>
          </div>

          <div id="cart-data" class="o-page__row">

            <div class="js-cart-tab-main c-checkout__tab-container--full-width ">
              <div class="c-checkout__tab-container">
{{--                @if (!is_null($carts) && count($carts))--}}
                @if (!is_null($carts))
                  <section class=" {{ (auth()->guard('customer')->check())? 'c-checkout-empty__container' : 'o-page__content    ' }}  ">
                    <div class="c-message-light-small c-message-light-small--info c-message-light-small--cart">
                      <h6>توجه : قیمت یا موجودی بعضی از کالاهای سبد خرید شما تغییر کرده است:</h6>
                      <ul>
                        <li>قیمت کابل تبدیل USB به لایتنینگ یوسمز مدل US-SJ097 طول 1 متر
                          به ۵۷,۰۰۰ تومان تغییر کرده
                          است.
                        </li>
                        <li>قیمت گوشی موبایل سامسونگ مدل A52 SM-A525F/DS دو سیم‌کارت ظرفیت 256 گیگابایت و رم 8 گیگابایت
                          به ۹,۸۲۰,۰۰۰ تومان تغییر کرده
                          است.
                        </li>
                      </ul>
                    </div>
                    <div class="c-checkout js-checkout">
                      <div class="c-checkout__group">
                        <ul class="c-checkout__items">
                          @foreach($first_carts as $cart)
                            <?php
                              $product = $cart->product_variant()->first()->product;
                              $product_variant = $cart->product_variant()->first();
                              $has_count = ($cart->product_variant()->first()->stock_count) ? true : false;
                            ?>
                            <li class="c-checkout__item">
                              <div class="c-cart-item" data-price-change="0" data-min-price-badge="">
                                <div class="c-cart-item__thumb">
                                  <a class="c-cart-item__thumb-img {{ (!$has_count)? 'c-cart-item__thumb--inactive' : '' }}" href="{{ route('front.productPage', $product->product_code) }}" target="_blank">
                                    @foreach($product->media as $image)
                                      @if($product->media && ($image->pivot->is_main == 1))
                                        <img alt="{{ $product->title_fa }}" src="{{ $site_url . '/' .$image->path . '/' . $image->name }}?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"></a>
                                      @endif
                                    @endforeach
                                </div>
                                <div class="c-cart-item__data">

                                  <?php
                                    $defualt_old_price = defualtCartOldPrice($cart);
                                    $defualt_new_price = defualtCartNewPrice($cart);
//                                    \Illuminate\Support\Facades\Log::info('old ' . $defualt_old_price);
//                                    \Illuminate\Support\Facades\Log::info('new ' . $defualt_new_price);
                                  ?>

                                  @if ($has_count && ($defualt_old_price !== $defualt_old_price))
                                    @if ($defualt_old_price > $defualt_new_price)
                                      <div class="c-cart-notification c-cart-notification--success c-cart-notification--arrow-down">
                                        قیمت این کالا {{ persianNum(number_format(toman($defualt_old_price - $defualt_new_price))) }} تومان کاهش یافته است.
                                      </div>
                                    @else
                                      <div class="c-cart-notification c-cart-notification--warning c-cart-notification--arrow-up">
                                        قیمت این کالا {{ persianNum(number_format(toman($defualt_new_price - $defualt_old_price))) }} تومان افزایش یافته است.
                                      </div>
                                    @endif
                                  @endif

                                  @if (!$has_count)
                                    <div class="c-cart-item__product-notice-container">
                                      <div
                                        class="c-cart-notification c-cart-notification--error c-cart-notification--info">
                                        کالا ناموجود شده و به صورت خودکار از سبد حذف می‌شود.
                                      </div>
                                    </div>
                                  @endif

                                  <div
                                    class="c-cart-item__title {{ (!$has_count)? 'c-cart-item__title--inactive' : '' }}">
                                    {{ $product->title_fa }}
                                  </div>

                                  @if (!is_null($cart->product_variant()->first()->variant->value))
                                    <div
                                      class="c-cart-item__product-data c-cart-item__product-data--color {{ (!$has_count)? 'c-cart-item__product-data--inactive' : '' }}">
                                    <span
                                      style="background-color:{{ $cart->product_variant()->first()->variant->value }};"></span>
                                      {{ $cart->product_variant()->first()->variant->name }}
                                    </div>
                                  @else
                                    <div
                                      class="c-cart-item__product-data c-cart-item__product-data--size {{ (!$has_count)? 'c-cart-item__product-data--inactive' : '' }}">
                                      {{ $cart->product_variant()->first()->variant->name }}
                                    </div>
                                  @endif

                                  <div
                                    class="c-cart-item__product-data c-cart-item__product-data--warranty {{ (!$has_count)? 'c-cart-item__product-data--inactive' : '' }}">
                                    {{ $cart->product_variant()->first()->warranty->name }}
                                  </div>

                                  @if ($has_count)
                                    <div class="c-cart-item__product-data c-cart-item__product-data--no-lead-time">
                                      موجود در انبار {{ $fa_store_name }}
                                      <span class="c-cart-item__product-sender-row">
                                        <span
                                          class="c-cart-item__product-sender-item c-cart-item__product-sender-item--digikala-no-leadtime">
                                            ارسال {{ $fa_store_name }} از {{ persianNum($cart->product_variant()->first()->post_time) }} روز کاری دیگر
                                        </span>
                                      </span>
                                    </div>
                                  @endif


                                  @if (!is_null($cart->new_promotion_price) && (($cart->new_new_sale_price - $cart->new_promotion_price) > 0) && $has_count)
                                    <div class="c-cart-item__discount">
                                      تخفیف
                                      <span>
                                        {{ persianNum(number_format(toman($cart->new_new_sale_price - $cart->new_promotion_price))) }}
                                    </span>
                                      تومان
                                    </div>
                                  @endif

                                  <div class="c-cart-item__spacer"></div>
                                  @if ($has_count)
                                    <div class="c-cart-item__price-row">
                                      <div class="c-cart-item__quantity-row">
                                        <div class="c-quantity-selector ">
                                          <button type="button"
                                                  class="c-quantity-selector__add js-quantity-selector-add "></button>
                                          <div class="c-quantity-selector__number js-quantity-selector-count"
                                               data-max="{{ $cart->product_variant()->first()->max_order_count }}"
                                               data-id="{{ $cart->product_variant()->first()->variant_code }}">
                                            {{ persianNum($cart->count) }}
                                          </div>
                                          <button type="button" class="c-quantity-selector__remove c-quantity-selector__add--disabled js-quantity-selector-remove"></button>
                                        </div>
                                        <a class="c-cart-item__delete js-remove-from-cart"
                                           href="/cart/remove/{{ $cart->product_variant()->first()->variant_code }}/"
                                           data-id="{{ $cart->product_variant()->first()->variant_code }}"
                                           data-product="4826524"
                                           data-variant="{{ $cart->product_variant()->first()->variant_code }}"
                                           data-event="remove_from_cart" data-evnet-category="funnel"
                                           data-enhanced-ecommerce="{&quot;id&quot;:4826524,&quot;name&quot;:&quot;درزگیر ترک سطوح نیپون مدل S100 وزن 1 کیلوگرم&quot;,&quot;category&quot;:&quot;TC&quot;,&quot;category_id&quot;:8265,&quot;brand&quot;:&quot;nippon-paint&quot;,&quot;variant&quot;:{{ $cart->product_variant()->first()->variant_code }},&quot;price&quot;:415000,&quot;discount_percent&quot;:0,&quot;quantity&quot;:1}"
                                           data-event-label="price: 415000, category: رنگ, items: 0"
                                           data-gtm-vis-first-on-screen-9070001_346="2524"
                                           data-gtm-vis-total-visible-time-9070001_346="100"
                                           data-gtm-vis-has-fired-9070001_346="1">
                                          حذف
                                        </a>
                                        <a class="c-cart-item__save-for-later js-add-to-sfl"
                                           data-id="{{ $cart->product_variant()->first()->variant_code }}"
                                           data-product="4826524"
                                           data-variant="{{ $cart->product_variant()->first()->variant_code }}"
                                           data-gtm-vis-first-on-screen-9070001_346="2532"
                                           data-gtm-vis-total-visible-time-9070001_346="100"
                                           data-gtm-vis-has-fired-9070001_346="1">
                                          ذخیره در لیست خرید بعدی
                                        </a>
                                      </div>
                                      <div class="c-cart-item__product-price">
                                        {{ !is_null($cart->new_promotion_price)? persianNum(number_format(toman($cart->new_promotion_price))) : persianNum(number_format(toman($cart->new_new_sale_price))) }}
                                        <span>
                                      تومان
                                      </span>
                                      </div>
                                    </div>
                                  @endif

                                  @if (!$has_count)
                                    <div class="c-cart-item__price-row">
                                      <div class="c-cart-item__inactive-text">
                                        ناموجود
                                      </div>
                                    </div>
                                  @endif

                                  @if ($product_variant->stock_count == 1)
                                    <div class="c-cart-item__price-row">
                                      <div>
                                        <div class="c-cart-item__stock-info js-product-warehouse-stock">
                                          <span>
                                              ۱                                           عدد در انبار باقیست - پیش از اتمام بخرید
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  @endif


                                </div>
                              </div>
                            </li>
                          @endforeach

                        </ul>
                      </div>
                    </div>
                  </section>
                  <aside class="o-page__aside">
                    <div class="c-checkout-aside js-checkout-aside ">
                      <div class="c-checkout-bill">
                        <ul class="c-checkout-bill__summary">

                          <li>
                            <span class="c-checkout-bill__item-title">
                                قیمت کالاها({{ persianNum($firstCarts->count()) }})
                            </span>
                            <span class="c-checkout-bill__price">
                            {{ persianNum(number_format(toman($firstCarts->sum('new_sale_price')))) }}
                            <span class="c-checkout-bill__currency">
                              تومان
                            </span>
                          </span>
                          </li>

                          @if($firstCarts->sum('promotion_price') > 0)
                            <li>
                              <span class="c-checkout-bill__item-title">
                                  تخفیف کالاها
                              </span>
                              <span class="c-checkout-bill__price c-checkout-bill__price--discount">
                                <span>
                                  ({{ persianNum(number_format(toman($firstCarts->sum('new_sale_price') / $firstCarts->sum('promotion_price')) * 100)) }}٪)
                                </span>
                                 {{ persianNum(number_format(toman($firstCarts->sum('new_sale_price') - $firstCarts->sum('promotion_price')))) }}
                                <span class="c-checkout-bill__currency">
                                   تومان
                                </span>
                              </span>
                            </li>
                          @endif

                          <li class="c-checkout-bill__sum-price">
                          <span class="c-checkout-bill__item-title">
                              جمع سبد خرید
                          </span>
                            <span class="c-checkout-bill__price">
                              ۴۱,۵۰۰
                            <span class="c-checkout-bill__currency">
                                تومان
                            </span>
                          </span>
                          </li>

                          <li class="c-checkout-bill__additional-shipping-cost">
                            هزینه‌ی ارسال در ادامه بر اساس آدرس، زمان و
                            نحوه‌ی ارسال انتخابی شما‌ محاسبه و به این مبلغ اضافه خواهد شد
                          </li>
                          <li class="c-checkout-bill__to-forward-button">
                            <a href="/shipping/"
                               class="o-btn o-btn--full-width o-btn--contained-red-lg selenium-next-step-shipping">
                              ادامه فرآیند خرید
                            </a>
                          </li>
                        </ul>
                      </div>
                      <p class="c-checkout-bill__reserve-note">
                        کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.
                      </p>
                    </div>
                  </aside>
                @else
                  <div class="c-tab-checkout-empty">
                    <div class="c-tab-checkout-empty__cart">
                      <section class="{{ (auth()->guard('customer')->check())? 'c-checkout-empty__container' : 'o-page__content    ' }}">
                        <div class="c-checkout-empty">
                          <div class="c-checkout-empty__empty-cart-icon"></div>
                          <div class="c-checkout-empty__title">
                            سبد خرید شما خالی است!
                          </div>
                          <div class="c-checkout-empty__links"><p>
                              می‌توانید برای مشاهده محصولات بیشتر به صفحه زیر بروید
                            </p>
                            <div class="c-checkout-empty__link-urls">
                              <a href="{{ route('front.indexPage') }}">
                                صفحه اصلی
                              </a>
                            </div>
                          </div>
                        </div>
                      </section>

                      @if (!auth()->guard('customer')->check())
                        <aside class="o-page__aside">
                          <a href="{{ route('customer.regLoginPage') }}">
                            <div class="c-checkout-aside c-checkout-aside--login">
                              <div class="c-checkout-aside__login-header">
                                ورود به حساب کاربری
                              </div>
                              <div class="c-checkout-aside__login-dsc">
                                برای مشاهده محصولاتی که پیش‌تر به سبد خود اضافه کرده‌اید لطفا وارد شوید.
                              </div>
                            </div>
                          </a>
                        </aside>
                      @endif


                    </div>


                  </div>
                @endif

              </div>
              <div class="js-cart-recommendation-carousel"></div>
              <div class="js-cart-fmcg-recommendation-carousel u-hidden"></div>
              <div class="js-cart-user-history u-hidden">
                <script>
                  window.dataLayer.push({
                    "event": "eec.productImpression", "ecommerce": {
                      "currencyCode": "EUR",
                      "impressions": [{
                        "name": "\u0644\u067e \u062a\u0627\u067e 16 \u0627\u06cc\u0646\u0686\u06cc \u0627\u067e\u0644 \u0645\u062f\u0644 MacBook Pro MVVM2 2019 \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u062a\u0627\u0686 \u0628\u0627\u0631",
                        "id": 2217851,
                        "price": 666990000,
                        "brand": "\u0627\u067e\u0644",
                        "category": "\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9",
                        "list": "category-\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9",
                        "position": 1,
                        "dimension6": 1,
                        "dimension2": 0,
                        "dimension9": 0,
                        "metric6": 0,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u062f\u0631\u0632\u06af\u06cc\u0631 \u062a\u0631\u06a9 \u0633\u0637\u0648\u062d \u0646\u06cc\u067e\u0648\u0646 \u0645\u062f\u0644 S100 \u0648\u0632\u0646 1 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
                        "id": 4826524,
                        "price": 415000,
                        "brand": "\u0631\u0646\u06af \u0646\u06cc\u067e\u0648\u0646",
                        "category": "\u0631\u0646\u06af",
                        "list": "category-\u0631\u0646\u06af",
                        "position": 2,
                        "dimension6": 1,
                        "dimension2": 0,
                        "dimension9": 5,
                        "metric6": 1,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u0634\u0644\u0648\u0627\u0631 \u0645\u0631\u062f\u0627\u0646\u0647 \u0645\u062f\u0644 rr-40723",
                        "id": 4121973,
                        "price": 1030000,
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "category": "\u0634\u0644\u0648\u0627\u0631 \u0648 \u0633\u0631\u0647\u0645\u06cc \u0645\u0631\u062f\u0627\u0646\u0647",
                        "list": "category-\u0634\u0644\u0648\u0627\u0631 \u0648 \u0633\u0631\u0647\u0645\u06cc \u0645\u0631\u062f\u0627\u0646\u0647",
                        "position": 3,
                        "dimension6": 1,
                        "dimension2": 34,
                        "dimension9": 3.6,
                        "metric6": 142,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "special-offer"
                      }, {
                        "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                        "id": 4122136,
                        "price": 36950000,
                        "brand": "\u0633\u0627\u0645\u0633\u0648\u0646\u06af",
                        "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "position": 4,
                        "dimension6": 1,
                        "dimension2": 0,
                        "dimension9": 4.4,
                        "metric6": 1860,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0645\u0631\u062f\u0627\u0646\u0647 \u0645\u062f\u0644 bn9999",
                        "id": 3244777,
                        "price": 777000,
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "category": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0645\u0631\u062f\u0627\u0646\u0647",
                        "list": "category-\u067e\u06cc\u0631\u0627\u0647\u0646 \u0645\u0631\u062f\u0627\u0646\u0647",
                        "position": 5,
                        "dimension6": 0,
                        "dimension2": 0,
                        "dimension9": 4,
                        "metric6": 396,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                        "id": 3555626,
                        "price": 450000000,
                        "brand": "\u0627\u067e\u0644",
                        "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "position": 6,
                        "dimension6": 1,
                        "dimension2": 16,
                        "dimension9": 0,
                        "metric6": 0,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "special-offer"
                      }, {
                        "name": "\u0634\u0644\u0648\u0627\u0631 \u0645\u0631\u062f\u0627\u0646\u0647 \u06a9\u062f 222",
                        "id": 1968870,
                        "price": 1490000,
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "category": "\u0634\u0644\u0648\u0627\u0631 \u062c\u06cc\u0646 \u0645\u0631\u062f\u0627\u0646\u0647",
                        "list": "category-\u0634\u0644\u0648\u0627\u0631 \u062c\u06cc\u0646 \u0645\u0631\u062f\u0627\u0646\u0647",
                        "position": 7,
                        "dimension6": 1,
                        "dimension2": 0,
                        "dimension9": 4.2,
                        "metric6": 259,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u0634\u0644\u0648\u0627\u0631 \u0648\u0631\u0632\u0634\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u0645\u062f\u0644  SH-277",
                        "id": 3067568,
                        "price": 680000,
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "category": "\u0634\u0644\u0648\u0627\u0631 \u0648\u0631\u0632\u0634\u06cc \u0645\u0631\u062f\u0627\u0646\u0647",
                        "list": "category-\u0634\u0644\u0648\u0627\u0631 \u0648\u0631\u0632\u0634\u06cc \u0645\u0631\u062f\u0627\u0646\u0647",
                        "position": 8,
                        "dimension6": 0,
                        "dimension2": 20,
                        "dimension9": 3.9,
                        "metric6": 146,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "special-offer"
                      }, {
                        "name": "\u062a\u06cc\u0634\u0631\u062a \u0622\u0633\u062a\u06cc\u0646 \u0628\u0644\u0646\u062f \u0645\u0631\u062f\u0627\u0646\u0647 \u06a9\u062f 3BL",
                        "id": 1062119,
                        "price": 410000,
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "category": "\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                        "list": "category-\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                        "position": 9,
                        "dimension6": 1,
                        "dimension2": 0,
                        "dimension9": 3.6,
                        "metric6": 1218,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u062a\u06cc \u0634\u0631\u062a \u0622\u0633\u062a\u06cc\u0646 \u06a9\u0648\u062a\u0627\u0647 \u0645\u0631\u062f\u0627\u0646\u0647 \u0637\u0631\u062d \u0646\u0634\u0646\u0627\u0644 \u062c\u0626\u0648\u06af\u0631\u0627\u0641\u06cc\u06a9 \u06a9\u062f BWY13345",
                        "id": 1124653,
                        "price": 359000,
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "category": "\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                        "list": "category-\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                        "position": 10,
                        "dimension6": 0,
                        "dimension2": 0,
                        "dimension9": 3.6,
                        "metric6": 633,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u062a\u06cc \u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647 \u06af\u0627\u0644\u0631\u06cc \u0648\u0627\u0648 \u0637\u0631\u062d Vikings \u06a9\u062fCT10217z",
                        "id": 551258,
                        "price": 318000,
                        "brand": "\u06af\u0627\u0644\u0631\u06cc \u0648\u0627\u0648",
                        "category": "\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                        "list": "category-\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                        "position": 11,
                        "dimension6": 1,
                        "dimension2": 0,
                        "dimension9": 3.2,
                        "metric6": 755,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u062a\u06cc \u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647 \u0641\u0644\u0648\u0631\u06cc\u0632\u0627 \u0637\u0631\u062d \u06af\u0631\u0648\u0647 \u0645\u0648\u0632\u06cc\u06a9 \u0644\u06cc\u0646\u06a9\u06cc\u0646 \u067e\u0627\u0631\u06a9 \u06a9\u062f Linnkin park 001M",
                        "id": 885069,
                        "price": 339000,
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "category": "\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                        "list": "category-\u062a\u06cc \u0634\u0631\u062a \u0648 \u067e\u0648\u0644\u0648\u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647",
                        "position": 12,
                        "dimension6": 1,
                        "dimension2": 0,
                        "dimension9": 3.7,
                        "metric6": 1037,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }, {
                        "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0645\u062f\u0644 Silicone Spring \u0628\u0633\u062a\u0647 2 \u0639\u062f\u062f\u06cc",
                        "id": 3461617,
                        "price": 18900,
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                        "list": "category-\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                        "position": 13,
                        "dimension6": 1,
                        "dimension2": 52,
                        "dimension9": 4.2,
                        "metric6": 2891,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "special-offer"
                      }, {
                        "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                        "id": 4149037,
                        "price": 46490000,
                        "brand": "\u0634\u06cc\u0627\u0626\u0648\u0645\u06cc",
                        "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "list": "category-\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "position": 14,
                        "dimension6": 1,
                        "dimension2": 0,
                        "dimension9": 4.4,
                        "metric6": 503,
                        "dimension11": 0,
                        "dimension20": "marketable",
                        "dimension18": "most-viewed",
                        "dimension19": "recent-visited-products",
                        "dimension7": "none"
                      }]
                    }
                  });
                </script>

                <script>
                  try {
                    var carouselDataTracker = {
                      "carouselPosition": "USER_PRODUCTS_HISTORY",
                      "id": "sn-carousels-user-history",
                      "title": "\u0628\u0627\u0632\u062f\u06cc\u062f\u0647\u0627\u06cc \u0627\u062e\u06cc\u0631 \u0634\u0645\u0627",
                      "title_en": "user visited products",
                      "products": [{
                        "id": 2217851,
                        "name": "\u0644\u067e \u062a\u0627\u067e 16 \u0627\u06cc\u0646\u0686\u06cc \u0627\u067e\u0644 \u0645\u062f\u0644 MacBook Pro MVVM2 2019 \u0647\u0645\u0631\u0627\u0647 \u0628\u0627 \u062a\u0627\u0686 \u0628\u0627\u0631",
                        "price": 666990000,
                        "category": "\u0644\u067e \u062a\u0627\u067e \u0648 \u0627\u0644\u062a\u0631\u0627\u0628\u0648\u06a9",
                        "brand": "Apple",
                        "position": 1,
                        "status": "marketable"
                      }, {
                        "id": 4826524,
                        "name": "\u062f\u0631\u0632\u06af\u06cc\u0631 \u062a\u0631\u06a9 \u0633\u0637\u0648\u062d \u0646\u06cc\u067e\u0648\u0646 \u0645\u062f\u0644 S100 \u0648\u0632\u0646 1 \u06a9\u06cc\u0644\u0648\u06af\u0631\u0645",
                        "price": 415000,
                        "category": "\u0631\u0646\u06af",
                        "brand": "\u0631\u0646\u06af \u0646\u06cc\u067e\u0648\u0646",
                        "position": 2,
                        "status": "marketable"
                      }, {
                        "id": 4121973,
                        "name": "\u0634\u0644\u0648\u0627\u0631 \u0645\u0631\u062f\u0627\u0646\u0647 \u0645\u062f\u0644 rr-40723",
                        "price": 1030000,
                        "category": "MEN TROUSERS & JUMPSUITS",
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "position": 3,
                        "status": "marketable"
                      }, {
                        "id": 4122136,
                        "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0633\u0627\u0645\u0633\u0648\u0646\u06af \u0645\u062f\u0644 Galaxy A12 SM-A125F\/DS \u062f\u0648 \u0633\u06cc\u0645 \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 64 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                        "price": 36950000,
                        "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "brand": "Samsung",
                        "position": 4,
                        "status": "marketable"
                      }, {
                        "id": 3244777,
                        "name": "\u067e\u06cc\u0631\u0627\u0647\u0646 \u0645\u0631\u062f\u0627\u0646\u0647 \u0645\u062f\u0644 bn9999",
                        "price": 777000,
                        "category": "Mens shirt",
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "position": 5,
                        "status": "marketable"
                      }, {
                        "id": 3555626,
                        "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0627\u067e\u0644 \u0645\u062f\u0644 iPhone 12 Pro Max A2412 \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 512 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                        "price": 450000000,
                        "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "brand": "Apple",
                        "position": 6,
                        "status": "marketable"
                      }, {
                        "id": 1968870,
                        "name": "\u0634\u0644\u0648\u0627\u0631 \u0645\u0631\u062f\u0627\u0646\u0647 \u06a9\u062f 222",
                        "price": 1490000,
                        "category": "MEN Jean Pants",
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "position": 7,
                        "status": "marketable"
                      }, {
                        "id": 3067568,
                        "name": "\u0634\u0644\u0648\u0627\u0631 \u0648\u0631\u0632\u0634\u06cc \u0645\u0631\u062f\u0627\u0646\u0647 \u0645\u062f\u0644  SH-277",
                        "price": 680000,
                        "category": "MEN Sport Trousers & Jumpsuits",
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "position": 8,
                        "status": "marketable"
                      }, {
                        "id": 1062119,
                        "name": "\u062a\u06cc\u0634\u0631\u062a \u0622\u0633\u062a\u06cc\u0646 \u0628\u0644\u0646\u062f \u0645\u0631\u062f\u0627\u0646\u0647 \u06a9\u062f 3BL",
                        "price": 410000,
                        "category": "MEN TEE-SHIRTS & POLOS",
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "position": 9,
                        "status": "marketable"
                      }, {
                        "id": 1124653,
                        "name": "\u062a\u06cc \u0634\u0631\u062a \u0622\u0633\u062a\u06cc\u0646 \u06a9\u0648\u062a\u0627\u0647 \u0645\u0631\u062f\u0627\u0646\u0647 \u0637\u0631\u062d \u0646\u0634\u0646\u0627\u0644 \u062c\u0626\u0648\u06af\u0631\u0627\u0641\u06cc\u06a9 \u06a9\u062f BWY13345",
                        "price": 359000,
                        "category": "MEN TEE-SHIRTS & POLOS",
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "position": 10,
                        "status": "marketable"
                      }, {
                        "id": 551258,
                        "name": "\u062a\u06cc \u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647 \u06af\u0627\u0644\u0631\u06cc \u0648\u0627\u0648 \u0637\u0631\u062d Vikings \u06a9\u062fCT10217z",
                        "price": 318000,
                        "category": "MEN TEE-SHIRTS & POLOS",
                        "brand": "\u06af\u0627\u0644\u0631\u06cc \u0648\u0627\u0648",
                        "position": 11,
                        "status": "marketable"
                      }, {
                        "id": 885069,
                        "name": "\u062a\u06cc \u0634\u0631\u062a \u0645\u0631\u062f\u0627\u0646\u0647 \u0641\u0644\u0648\u0631\u06cc\u0632\u0627 \u0637\u0631\u062d \u06af\u0631\u0648\u0647 \u0645\u0648\u0632\u06cc\u06a9 \u0644\u06cc\u0646\u06a9\u06cc\u0646 \u067e\u0627\u0631\u06a9 \u06a9\u062f Linnkin park 001M",
                        "price": 339000,
                        "category": "MEN TEE-SHIRTS & POLOS",
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "position": 12,
                        "status": "marketable"
                      }, {
                        "id": 3461617,
                        "name": "\u0645\u062d\u0627\u0641\u0638 \u06a9\u0627\u0628\u0644 \u0645\u062f\u0644 Silicone Spring \u0628\u0633\u062a\u0647 2 \u0639\u062f\u062f\u06cc",
                        "price": 18900,
                        "category": "\u0642\u0637\u0639\u0627\u062a \u062c\u0627\u0646\u0628\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0648 \u062a\u0628\u0644\u062a",
                        "brand": "\u0645\u062a\u0641\u0631\u0642\u0647",
                        "position": 13,
                        "status": "marketable"
                      }, {
                        "id": 4149037,
                        "name": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644 \u0634\u06cc\u0627\u0626\u0648\u0645\u06cc \u0645\u062f\u0644 POCO M3 M2010J19CG \u062f\u0648 \u0633\u06cc\u0645\u200c \u06a9\u0627\u0631\u062a \u0638\u0631\u0641\u06cc\u062a 128 \u06af\u06cc\u06af\u0627\u0628\u0627\u06cc\u062a",
                        "price": 46490000,
                        "category": "\u06af\u0648\u0634\u06cc \u0645\u0648\u0628\u0627\u06cc\u0644",
                        "brand": "Xiaomi",
                        "position": 14,
                        "status": "marketable"
                      }]
                    };
                    if (carouselDataTracker) {
                      if (!window.carouselData)
                        window.carouselData = [carouselDataTracker];
                      else
                        window.carouselData.push(carouselDataTracker);
                    }
                  } catch (e) {
                    console.log("carouselData problem for userHistory");
                  }
                </script>

                <section class="c-swiper c-swiper--products">

                  <div class="o-headline">
                    <span>بازدیدهای اخیر شما</span>
                    <a class="c-product-box__edit-link" href="/profile/user-history/">
                      مشاهده همه
                    </a>
                  </div>

                  <div class="c-box" id="user-history">
                    <div
                      class="swiper-container swiper-container-horizontal swiper-container-rtl js-swiper-user-history-products">
                      <div class="swiper-wrapper" style="transition-duration: 0ms;">

                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="2217851">
                            <a title="لپ تاپ 16 اینچی اپل مدل MacBook Pro MVVM2 2019 همراه با تاچ بار"
                               href="/product/dkp-2217851/لپ-تاپ-16-اینچی-اپل-مدل-macbook-pro-mvvm2-2019-همراه-با-تاچ-بار">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="لپ تاپ 16 اینچی اپل مدل MacBook Pro MVVM2 2019 همراه با تاچ بار"
                                             src="https://dkstatics-public.digikala.com/digikala-products/114391682.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۶۶,۶۹۹,۰۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="2217851">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="4826524">
                            <a title="درزگیر ترک سطوح نیپون مدل S100 وزن 1 کیلوگرم"
                               href="/product/dkp-4826524/درزگیر-ترک-سطوح-نیپون-مدل-s100-وزن-1-کیلوگرم">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="درزگیر ترک سطوح نیپون مدل S100 وزن 1 کیلوگرم"
                                             src="https://dkstatics-public.digikala.com/digikala-products/6cae8819a71e3d41e56612c0de87cd2c5ad293ff_1617526029.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۴۱,۵۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="4826524">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="4121973">
                            <a title="شلوار مردانه مدل rr-40723" href="/product/dkp-4121973/شلوار-مردانه-مدل-شش-جیب">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="شلوار مردانه مدل rr-40723"
                                             src="https://dkstatics-public.digikala.com/digikala-products/2cd3793490159a7a659b400c8dc15f306855de63_1610443723.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۱۵۵,۰۰۰</del>
                                <span class="c-new-price__discount">۳۴٪</span>
                              </div>
                              <div class="c-new-price__value">
                                ۱۰۳,۰۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="4121973">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="4122136">
                            <a title="گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64 گیگابایت"
                               href="/product/dkp-4122136/گوشی-موبایل-سامسونگ-مدل-galaxy-a12-sm-a125fds-دو-سیم-کارت-ظرفیت-64-گیگابایت">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img
                                          alt="گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو سیم کارت ظرفیت 64 گیگابایت"
                                          src="https://dkstatics-public.digikala.com/digikala-products/6207b3bf015d7fff97e9e04868497ac6a30474a3_1609308062.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                          loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۳,۶۹۵,۰۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="4122136">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="3244777">
                            <a title="پیراهن مردانه مدل bn9999" href="/product/dkp-3244777/پیراهن-مردانه-مدل-bn9999">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="پیراهن مردانه مدل bn9999"
                                             src="https://dkstatics-public.digikala.com/digikala-products/7b1e774827fd4dc4efea62fb1f25345cebb229af_1597527801.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۷۷,۷۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="3244777">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="3555626">
                            <a title="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت"
                               href="/product/dkp-3555626/گوشی-موبایل-اپل-مدل-iphone-12-pro-max-a2412-دو-سیم-کارت-ظرفیت-512-گیگابایت">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img
                                          alt="گوشی موبایل اپل مدل iPhone 12 Pro Max A2412 دو سیم‌ کارت ظرفیت 512 گیگابایت"
                                          src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607438980.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                          loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۵۳,۳۹۰,۰۰۰</del>
                                <span class="c-new-price__discount">۱۶٪</span>
                              </div>
                              <div class="c-new-price__value">
                                ۴۵,۰۰۰,۰۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="3555626">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="1968870">
                            <a title="شلوار مردانه کد 222" href="/product/dkp-1968870/شلوار-مردانه-کد-222">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="شلوار مردانه کد 222"
                                             src="https://dkstatics-public.digikala.com/digikala-products/113060973.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۱۴۹,۰۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="1968870">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="3067568">
                            <a title="شلوار ورزشی مردانه مدل  SH-277"
                               href="/product/dkp-3067568/شلوار-ورزشی-مردانه-مدل-sh-277">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="شلوار ورزشی مردانه مدل  SH-277"
                                             src="https://dkstatics-public.digikala.com/digikala-products/a936ff0c48caaa6987813f5b41a66783ed8c9c72_1610569374.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۸۵,۰۰۰</del>
                                <span class="c-new-price__discount">۲۰٪</span>
                              </div>
                              <div class="c-new-price__value">
                                ۶۸,۰۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="3067568">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="1062119">
                            <a title="تیشرت آستین بلند مردانه کد 3BL"
                               href="/product/dkp-1062119/تیشرت-آستین-بلند-مردانه-کد-3bl">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="تیشرت آستین بلند مردانه کد 3BL"
                                             src="https://dkstatics-public.digikala.com/digikala-products/116904076.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۴۱,۰۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="1062119">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="1124653">
                            <a title="تی شرت آستین کوتاه مردانه طرح نشنال جئوگرافیک کد BWY13345"
                               href="/product/dkp-1124653/تی-شرت-آستین-کوتاه-مردانه-طرح-نشنال-جئوگرافیک-کد-bwy13345">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="تی شرت آستین کوتاه مردانه طرح نشنال جئوگرافیک کد BWY13345"
                                             src="https://dkstatics-public.digikala.com/digikala-products/116931919.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۳۵,۹۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="1124653">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="551258">
                            <a title="تی شرت مردانه گالری واو طرح Vikings کدCT10217z"
                               href="/product/dkp-551258/تی-شرت-مردانه-گالری-واو-طرح-vikings-کدct10217z">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="تی شرت مردانه گالری واو طرح Vikings کدCT10217z"
                                             src="https://dkstatics-public.digikala.com/digikala-products/116690198.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۳۱,۸۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="551258">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="885069">
                            <a title="تی شرت مردانه فلوریزا طرح گروه موزیک لینکین پارک کد Linnkin park 001M"
                               href="/product/dkp-885069/تی-شرت-مردانه-فلوریزا-طرح-گروه-موزیک-لینکین-پارک-کد-linnkin-park-001m">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="تی شرت مردانه فلوریزا طرح گروه موزیک لینکین پارک کد Linnkin park 001M"
                                             src="https://dkstatics-public.digikala.com/digikala-products/116827044.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۳۳,۹۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="885069">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="3461617">
                            <a title="محافظ کابل مدل Silicone Spring بسته 2 عددی"
                               href="/product/dkp-3461617/محافظ-کابل-مدل-silicone-spring-بسته-2-عددی">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="محافظ کابل مدل Silicone Spring بسته 2 عددی"
                                             src="https://dkstatics-public.digikala.com/digikala-products/fecb1d6ae3d7dce12c106fa06a5ccc487a6c8bfa_1601193546.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                             loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                                <del>۳,۹۰۰</del>
                                <span class="c-new-price__discount">۵۲٪</span>
                              </div>
                              <div class="c-new-price__value">
                                ۱,۸۹۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="3461617">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>
                        <div class="swiper-slide swiper-slide-active" style="max-width: 250px"
                             data-carousel="sn-carousels-user-history">

                          <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box"
                               data-id="4149037">
                            <a title="گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت"
                               href="/product/dkp-4149037/گوشی-موبایل-شیائومی-مدل-poco-m3-m2010j19cg-دو-سیم-کارت-ظرفیت-128-گیگابایت">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img
                                          alt="گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌ کارت ظرفیت 128 گیگابایت"
                                          src="https://dkstatics-public.digikala.com/digikala-products/219163a48b85831190b1aa4983a71565a19434c2_1609659342.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
                                          loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                            </a>

                            <div class="c-new-price">
                              <div class="c-new-price__old-value">
                              </div>
                              <div class="c-new-price__value">
                                ۴,۶۴۹,۰۰۰
                                <span class="c-new-price__currency">تومان</span>
                              </div>
                            </div>


                            <button type="button" class="c-product-box__same-product-link js-history-same-product-modal"
                                    data-product-id="4149037">
                              کالاهای مشابه
                            </button>
                          </div>

                        </div>

                      </div>
                      <div class="swiper-button-prev js-swiper-button-prev"></div>
                      <div class="swiper-button-next js-swiper-button-next"></div>
                    </div>
                  </div>
                </section>

              </div>
            </div>

            <div class="c-checkout__tab-container js-cart-tab-sfl u-hidden">
              <section class="{{ (auth()->guard('customer')->check())? 'c-checkout-empty__container' : 'o-page__content    ' }}">
                <div class="c-checkout-empty">
                  <div class="c-checkout-empty__empty-sfl-icon"></div>
                  <div class="c-checkout-empty__title">
                    لیست خرید بعدی شما خالی است!
                  </div>قی
                  <p class="c-checkout-empty__sfl-content">
                    شما می‌توانید محصولاتی که به سبد خرید خود افزوده‌اید
                    و فعلا قصد خرید آن‌ها را ندارید، در لیست خرید بعدی قرار داده
                    و هر زمان مایل بودید آن‌ها را به سبد خرید اضافه کرده و خرید آن‌ها را تکمیل کنید.
                  </p>
                </div>
              </section>

              @if (!auth()->guard('customer')->check())
                <aside class="o-page__aside">
                  <a href="{{ route('customer.regLoginPage') }}">
                    <div class="c-checkout-aside c-checkout-aside--login">
                      <div class="c-checkout-aside__login-header">
                        ورود به حساب کاربری
                      </div>
                      <div class="c-checkout-aside__login-dsc">
                        برای مشاهده محصولاتی که پیش‌تر به سبد خود اضافه کرده‌اید لطفا وارد شوید.
                      </div>
                    </div>
                  </a>
                </aside>
              @endif

            </div>

          </div>

        </div>

      </section>
    </div>
    <div id="sidebar">
      <aside></aside>
    </div>
  </main>

@endsection

@section('source')
  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-general-alert remodal-is-initialized remodal-is-closed" data-remodal-id="alert" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-general-alert__main">
        <div class="c-remodal-general-alert__content">
          <p class="js-remodal-general-alert__text">آیا مایل به حذف این کالا هستید؟</p>
          <p class="c-remodal-general-alert__description js-remodal-general-alert__description" style="display: none;"></p>
        </div>
        <div class="c-remodal-general-alert__actions">
          <button class="c-remodal-general-alert__button c-remodal-general-alert__button--approve js-remodal-general-alert__button--approve">
            انتقال به لیست خرید بعدی
          </button>
          <button class="c-remodal-general-alert__button c-remodal-general-alert__button--cancel js-remodal-general-alert__button--cancel">
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

