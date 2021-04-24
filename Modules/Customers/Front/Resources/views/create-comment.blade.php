<?php

$store_email = \Modules\Staff\Setting\Models\Setting::where('name', 'store_email')->first()->value;
$banner2 = \Modules\Staff\Slider\Models\Slider::find(2);

$category = $product->category->first();

do {
  $product_categories[] = $category;
  $category = $category->parent;
} while (isset($category->parent));

$product_categories[] = $category;
$product_categories = array_reverse($product_categories, true);


$customer = auth()->guard('customer')->user();

$is_buyed = is_buyed($product);


?>

@extends('layouts.front.master')

@section('head')
  <title></title>
  <!-- SEO -->
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <link rel="canonical" href=""/>

  {{--  <script>--}}
  {{--    var supernova_mode = "production";--}}
  {{--    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";--}}
  {{--    var ratings = [];--}}
  {{--    // rations options--}}
  {{--    --}}{{--var factors = {--}}
  {{--    --}}{{--  @foreach($product_categories as $key => $item)--}}
  {{--    --}}{{--  "{{ $item->id }}":"{{ $item->name }}",--}}
  {{--    --}}{{--  @endforeach--}}
  {{--    --}}{{--};--}}
  {{--    var productId = {{ $product->product_code }};--}}
  {{--    var nowTimeInUTC = "2021-04-22 13:44:04";--}}
  {{--    var productPageUrl = "https:\/\/www.digikala.com\/product\/dkp-{{ $product->product_code }}";--}}
  {{--    var userId = {{ auth()->guard('customer')->user()->id }};--}}
  {{--    var adroRCActivation = true;--}}
  {{--    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/product\/comment\/dkp-{{ $product->product_code }}";--}}
  {{--    var isNewCustomer = false;--}}
  {{--    var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";--}}
  {{--    var activateUrl = "\/digiclub\/activate\/";--}}
  {{--  </script>--}}


  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var ratings = [];
    // var factors = {"234":"\u0627\u0631\u0632\u0634 \u062e\u0631\u06cc\u062f \u0628\u0647 \u0646\u0633\u0628\u062a \u0642\u06cc\u0645\u062a","235":"\u0639\u0645\u0644\u06a9\u0631\u062f","236":"\u06a9\u06cc\u0641\u06cc\u062a"};
    var factors = {
      @foreach($product->categories()->first()->ratings as $key => $item)"{{ $item->id }}": "{{ $item->name }}"
      {{ (count($product->categories()->first()->ratings) !== $key+1)? ',' : '' }} @endforeach
    };
    var productId = {{ $product->product_code }};
    var nowTimeInUTC = "2021-04-23 07:21:29";
    var productPageUrl = "{{ route('front.productPage', [$product->product_code]) }}";
    var userId = {{ $customer->id }};
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/product\/comment\/dkp-{{ $product->product_code }}";
    var isNewCustomer = false;
  </script>

  <script src="{{ asset('assets/js/sentry.js') }} "></script>
  <script src="{{ asset('assets/new/js/AddCommentAction.js') }} "></script>

@endsection

@section('content')
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

  <main id="main">
    <div id="HomePageTopBanner"></div>
    <div id="content">
      <div class="container">
        <section class="o-page">
          <nav class="js-breadcrumb ">
            <ul vocab="https://schema.org/" typeof="BreadcrumbList" class="c-breadcrumb">
              <li property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" href="https://www.digikala.com">
                  <span property="name">{{ $fa_store_name }}</span>
                </a>
                <meta property="position" content="1">
              </li>

              @foreach($product_categories as $key => $item)
                <li property="itemListElement" typeof="ListItem">
                  <a property="item" typeof="WebPage" href="{{ route('category', ['slug' => $item->slug]) }}">
                    <span property="name">{{ $item->name }}</span>
                  </a>
                  <meta property="position" content="{{ $key+1 }}">
                </li>
              @endforeach

              <li><span property="name">ارسال نظر</span></li>
            </ul>
          </nav>
          <form id="addCommentForm" method="post" novalidate="novalidate"><input type="hidden" name="rc"
                                                                                 value="SVB5L3VRb0laVDh2ZldzUDg5K3BZZz09"><input
              type="hidden" name="rd"
              value="aVF2UU1YVW90cVVkQWFBbEVyYlN3Q2pVTG5MQWtKcUZNUEhJb1pQRTI3ZjdqS0lKeHlEOVVyUUF6Zi8yY3lTdw~~">
            <div class="c-box">
              <div class="c-comments-product">
                <div class="c-comments-product__row js-valid-row">
                  <div class="c-comments-product__col c-comments-product__col--gallery">
                    <img src="" title="" alt="">
                    @foreach($product->media as $image)
                      @if($product->media && ($image->pivot->is_main == 1))
                        <a href="">
                          <img src="{{ $site_url . '/' .$image->path . '/' . $image->name }}">
                        </a>
                      @endif
                    @endforeach
                  </div>
                  <div class="c-comments-product__col c-comments-product__col--info">
                    <div class="c-comments-product__headline">
                      <h3 class="c-comments-product__title">
                        {{ $product->title_fa }}
                        <span>{{ $product->title_fa }}</span>
                      </h3>
                    </div>
                    <div class="c-comments-product__attributes">


                      <div class="c-comments-product__attributes-row">

                        @foreach ($product->categories()->first()->ratings as $item)
                          <div class="c-comments-product__attributes-col  js-valid-row" style="margin-bottom: 35px;">
                            <div class="c-comments-product__attributes-title">
                              {{ $item->name }}
                            </div>
                            <div id="rating-bar-{{ $item->id }}" data-factor-id="{{ $item->id }}"
                                 class="c-slider c-slider--one js-rating noUi-target noUi-rtl noUi-horizontal"
                                 data-rate-digit="(3)" data-rate-title="معمولی">
                              <span class="c-slider__step c-slider__step--two js-slider-step" data-rate-title="خیلی بد"
                                    data-rate-value="20"></span>
                              <span class="c-slider__step c-slider__step--three js-slider-step" data-rate-title="بد"
                                    data-rate-value="40"></span>
                              <span class="c-slider__step c-slider__step--four js-slider-step active"
                                    data-rate-title="معمولی" data-rate-value="60"></span>
                              <span class="c-slider__step c-slider__step--five js-slider-step" data-rate-title="خوب"
                                    data-rate-value="80"></span>
                              <span class="c-slider__step c-slider__step--six js-slider-step" data-rate-title="عالی"
                                    data-rate-value="100"></span>
                              <input class="c-ui-hidden-input js-rate-input" type="text" value="0"
                                     id="rating-{{ $item->id }}" name="rating[{{ $item->id }}]">
                              <div class="noUi-base">
                                <div class="noUi-connect" style="right: 0%; left: 50%;"></div>
                                <div class="noUi-origin" style="right: 50%;"></div>
                              </div>
                            </div>
                          </div>
                        @endforeach

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="c-box">
              <div class="c-comments-add">
                <div class="c-comments-add__row">
                  <div class="c-comments-add__col c-comments-add__col--form">
                    <div class="c-form-comment">
                      <div class="c-form-comment__row">
                        <div class="c-form-comment__col ">
                          <div class="c-form-comment__title">عنوان نظر شما</div>
                          <label class="c-ui-input">
                            <input class="c-ui-input__field" type="text" name="title" value=""
                                   placeholder="عنوان نظر خود را بنویسید">
                          </label>
                        </div>
                      </div>
                      <div class="c-form-comment__row">
                        <div id="advantages" class="c-form-comment__col c-form-comment__col--point">
                          <div class="c-form-comment__title c-form-comment__title--positive">
                            نقاط قوت
                          </div>
                          <div class="c-ui-input c-ui-input--add-point">
                            <input title="advantages" class="c-ui-input__field" type="text" id="advantage-input"
                                   value="">
                            <button class="c-ui-input__point js-icon-form-add" type="button"
                                    style="display: none;"></button>
                          </div>
                          <div class="c-form-comment__dynamic-labels js-advantages-list"></div>
                        </div>
                        <div id="disadvantages" class="c-form-comment__col c-form-comment__col--point">
                          <div class="c-form-comment__title c-form-comment__title--negative">نقاط
                            ضعف
                          </div>
                          <div class="c-ui-input c-ui-input--add-point">
                            <input title="disadvantages" class="c-ui-input__field" type="text" id="disadvantage-input"
                                   value="">
                            <button class="c-ui-input__point js-icon-form-add" type="button"
                                    style="display: none;"></button>
                          </div>
                          <div class="c-form-comment__dynamic-labels js-disadvantages-list"></div>
                        </div>
                      </div>
                      <div class="c-form-comment__row js-valid-row">
                        <div class="c-form-comment__col">
                          <div class="c-form-comment__title">متن نظر شما (اجباری)</div>
                          <label class="c-ui-textarea js-comment">
                            <textarea class="c-ui-textarea__field" name="text"
                                      placeholder="متن نظر خود را بنویسید"></textarea>
                          </label>
                        </div>
                      </div>
                      @if($is_buyed == true)
                        <div class="c-form-comment__row">
                          <div class="c-form-comment__col">
                            <div class="c-form-comment__questions"><p>آیا خرید این محصول را به دوستانتان پیشنهاد می
                                کنید؟</p>
                              <ul>
                                <li>
                                  <label for="add-comment_question_1">پیشنهاد می‌کنم</label>
                                  <label class="c-ui-radio">
                                    <input type="radio" name="recommend" value="recommended"
                                           id="add-comment_question_1">
                                    <span class="c-ui-radio__check"></span>
                                  </label>
                                </li>
                                <li>
                                  <label for="add-comment_question_2">خیر ، پیشنهاد نمی‌کنم</label>
                                  <label class="c-ui-radio">
                                    <input type="radio" name="recommend" value="not_recommended"
                                           id="add-comment_question_2">
                                    <span class="c-ui-radio__check"></span>
                                  </label>
                                </li>
                                <li>
                                  <label for="add-comment_question_3">نظری ندارم</label>
                                  <label class="c-ui-radio">
                                    <input type="radio" name="recommend" value="no_idea" id="add-comment_question_3">
                                    <span class="c-ui-radio__check"></span>
                                  </label>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      @endif
                      <div class="c-form-comment__row">
                        <div class="c-form-comment__col c-comments-anonymous">
                          <label class="c-ui-checkbox">
                            <input type="checkbox" name="is_anonymous" value="" id="add_comment_anonymous">
                            <span class="c-ui-checkbox__check"></span>
                          </label>
                          <label for="add_comment_anonymous">
                            ارسال دیدگاه به صورت ناشناس
                          </label>
                        </div>
                      </div>
                      <div class="c-form-comment__row">
                        <div class="c-form-comment__col c-form-comment__col--half-width">
                          <button data-id="{{ $product->id }}" class="btn-default js-comment-submit-button"
                                  type="submit">
                            ثبت نظر
                          </button>
                        </div>
                      </div>
                      <div class="c-form-comment__row c-form-comment__row--space-between">
                        <div class="c-form-comment__col c-form-comment__col--agreement">
                          <p>با “ثبت نظر” موافقت خود را با
                            <a href="/page/comments-rules/" class="btn-link-spoiler" target="_blank">
                              قوانین انتشار نظرات</a> در
                            {{ $fa_store_name }} اعلام می‌کنم.</p></div>
                        <div class="c-form-comment__col c-form-comment__col--cancellation">
                          <a href="" class="btn-link-spoiler">انصراف و بازگشت »</a>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="c-comments-add__col c-comments-add__col--content"><h3>دیگران را با نوشتن نظرات خود، برای
                      انتخاب این محصول راهنمایی کنید.</h3>
                    <p><span
                        style="color:#2980b9"><strong>لطفا پیش از ارسال نظر، خلاصه قوانین زیر را مطالعه کنید:</strong></span>
                    </p>
                    <ul>
                      <li>لازم است محتوای ارسالی منطبق برعرف و شئونات جامعه و با بیانی رسمی و عاری از لحن تند، تمسخرو
                        توهین باشد.
                      </li>
                      <li>از ارسال لینک‌های سایت‌های دیگر و ارایه‌ی اطلاعات شخصی خودتان مثل شماره تماس، ایمیل و آی‌دی
                        شبکه‌های اجتماعی پرهیز کنید.
                      </li>
                      <li>
                        <strong>در نظر داشته باشید هدف نهایی از ارائه‌ی نظر درباره‌ی کالا ارائه‌ی اطلاعات مشخص و دقیق
                          برای راهنمایی سایر کاربران در فرآیند خرید یک محصول توسط ایشان است.</strong>
                      </li>
                    </ul>


                    <p><strong><span style="color:#2980b9">پیشنهاد می‌شود قوانین کامل ثبت نظر را در </span><u><a
                            href="https://www.digikala.com/page/comments-rules/"><span
                              style="color:#2980b9">این صفحه</span></a></u><span
                          style="color:#2980b9"> مطالعه کنید.</span></strong></p>
                    <p>هرگونه نقد و نظر در خصوص سایت {{ $fa_store_name }}،&nbsp;مشکلات&nbsp;دریافت خدمات و درخواست کالا&nbsp;و
                      نیز
                      گزارش تخلف فروش (نظیر گزارش کالای غیراصل یا مغایر)&nbsp;را با ایمیل&nbsp;&nbsp;
                      <a href="mailto:{{ $store_email }}">{{ $store_email }}&nbsp;</a>&nbsp;

                      &nbsp;در میان بگذارید و از نوشتن آن‌ها در بخش
                      نظرات خودداری کنید.</p></div>
                </div>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </main>

@endsection

@section('source')
  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-u-minicart__modal u-hidden js-minicart-modal remodal-is-initialized remodal-is-closed"
         data-remodal-id="universal-mini-cart" role="dialog" aria-labelledby="modalTitle" tabindex="-1"
         aria-describedby="modalDesc" data-remodal-options="">
      <div class="c-modal__top-bar  ">
        <div>
          <div class="c-u-minicart__quantity">
            سبد خرید
            <span>۰ کالا</span>
          </div>
          <a href="/cart/" class="o-link o-link--has-arrow o-link--no-border o-link--sm">مشاهده سبد خرید</a>
        </div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <div class="c-u-minicart"></div>
      <div class="c-modal__footer">
        <div class="c-header__cart-info-total">
          <span class="c-header__cart-info-total-text">مبلغ قابل پرداخت</span>
          <p class="c-header__cart-info-total-amount">
            <span class="c-header__cart-info-total-amount-number"> ۰</span>
            <span> تومان</span>
          </p>
        </div>

        <div>
          <a data-snt-event="dkHeaderClick"
             data-snt-params="{&quot;item&quot;:&quot;mini-cart&quot;,&quot;item_option&quot;:&quot;confirm-cart&quot;}"
             href="/shipping/" class="o-btn o-btn--contained-red-md">ثبت سفارش</a>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-modal--sm remodal-is-initialized remodal-is-closed" data-remodal-id="share"
         role="dialog" aria-labelledby="modalTitle" tabindex="-1" aria-describedby="modalDesc" data-remodal-options="">
      <div class="c-modal__top-bar  c-modal__top-bar--has-line">
        <div class="c-modal__title ">اشتراک‌گذاری</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <form class="c-share" id="sendToFriend" novalidate="novalidate">
        <div class="c-share__title">
          با استفاده از روش‌های زیر می‌توانید این صفحه را با دوستان خود به اشتراک بگذارید.
        </div>
        <div class="c-share__options">
          <div class="c-share__social-buttons"><a
              href="https://twitter.com/intent/tweet?url=https://www.digikala.com/product/dkp-3814476/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-iphone-12-pro-a2408-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA"
              rel="nofollow" class="o-btn c-share__social c-share__social--twitter" target="_blank"></a><a
              href="https://www.facebook.com/sharer/sharer.php?m2w&amp;s=100&amp;p[url]=https://www.digikala.com/product/dkp-3814476/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-iphone-12-pro-a2408-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA"
              rel="nofollow" class="o-btn c-share__social c-share__social--fb" target="_blank"></a><a
              href="https://wa.me?text=https://www.digikala.com/product/dkp-3814476/%DA%AF%D9%88%D8%B4%DB%8C-%D9%85%D9%88%D8%A8%D8%A7%DB%8C%D9%84-%D8%A7%D9%BE%D9%84-%D9%85%D8%AF%D9%84-iphone-12-pro-a2408-%D8%AF%D9%88-%D8%B3%DB%8C%D9%85-%DA%A9%D8%A7%D8%B1%D8%AA-%D8%B8%D8%B1%D9%81%DB%8C%D8%AA-128-%DA%AF%DB%8C%DA%AF%D8%A7%D8%A8%D8%A7%DB%8C%D8%AA"
              rel="nofollow" class="o-btn c-share__social c-share__social--whatsapp" target="_blank"></a>
            <div class="o-btn c-share__social c-share__social--email js-email-btn"></div>
          </div>
          <div class="o-btn o-btn--outlined-gray-sm o-btn--copy c-share__link-btn js-copy-url"
               data-copy="https://www.digikala.com/product/dkp-3814476">
            کپی لینک
          </div>
        </div>
        <div class="js-email-row u-hidden">
          <div class="c-share__email-row">
            <div class="c-share__email"><label class="o-form__field-container">
                <div class="o-form__field-frame"><input name="send_to_friend[email]" type="email"
                                                        placeholder="آدرس ایمیل را وارد نمایید" value=""
                                                        class="o-form__field js-input-field "></div>
              </label><input type="hidden" name="send_to_friend[product_id]" value="3814476"></div>
            <button type="submit" class="o-btn o-btn--contained-red-sm">ارسال</button>
          </div>
        </div>
        <div class="c-share__referral">
          <div class="c-share__referral-content">
            <div class="c-share__referral-title">جایزه شما</div>
            <div class="c-share__referral-desc">با دعوت دوستانتان، پس از اولین خریدشان، کدتخفیف و امتیاز هدیه بگیرید.
            </div>
            <div
              class="o-btn o-btn--outlined-gray-sm o-btn--copy o-btn--full-width c-share__referral-code js-copy-referral-code"
              data-copy="">REFW6HTLLNCDA
            </div>
            <div
              class="o-btn o-btn--outlined-red-sm o-btn--full-width o-btn--r-voucher c-share__referral-code js-get-referral-code u-hidden">
              دریافت کد تخفیف
            </div>
          </div>
          <div class="c-share__referral-img"><img src="https://www.digikala.com/static/files/84182fb2.svg"></div>
        </div>
      </form>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-price-chart remodal-is-initialized remodal-is-closed" data-remodal-id="price-chart"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-price-chart__main">
        <div class="c-remodal-am-price-chart__header">
          <div class="c-remodal-am-price-chart__title">
            نمودار قیمت فروش
          </div>
          <button data-remodal-action="close" class="c-remodal-am-price-chart__close" aria-label="Close"></button>
        </div>
        <div class="c-remodal-am-price-chart__product-title">
          گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت
        </div>
        <div class="c-remodal-price-chart__content c-remodal-am-price-chart__content">
          <div id="productPriceChart" class="c-remodal-am-price-chart__base"></div>
          <div class="c-remodal-am-price-chart__row">
            <div class="c-am-chart-legend">
              <div class="c-am-chart-legend__row"><span
                  class="c-am-chart-legend__line c-am-chart-legend--marketable"></span><span
                  class="c-am-chart-legend__circle c-am-chart-legend--marketable"></span><label>موجود</label></div>
              <div class="c-am-chart-legend__row"><span
                  class="c-am-chart-legend__line c-am-chart-legend--not-marketable"></span><span
                  class="c-am-chart-legend__circle c-am-chart-legend--not-marketable"></span><label>ناموجود</label>
              </div>
              <div class="c-am-chart-legend__row"><span
                  class="c-am-chart-legend__line c-am-chart-legend--pure-price"></span><label>قیمت بدون تخفیف</label>
              </div>
            </div>
          </div>
          <div class="c-am-chart-varient"><label class="c-am-chart-varient__label js-am-chart-varient-label"></label>
            <ul class="c-am-chart-varient__list js-price-chart-varient-list"></ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-notification remodal-is-initialized remodal-is-closed" data-remodal-id="observed"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-notification__main">
        <div class="c-remodal-notification__aside">
          <div class="c-remodal-notification__title-ilu">به من اطلاع بده</div>
          <div class="c-remodal-notification__ilu"></div>
        </div>
        <div class="c-remodal-notification__content">
          <form class="c-form-notification" id="observed-form">
            <div class="c-form-notification__title">اطلاع به من در زمان:</div>
            <div class="c-form-notification__row">
              <div class="c-form-notification__col">
                <div class="c-form-notification__status">
                  موجود شدن
                </div>
              </div>
            </div>
            <div class="c-form-notification__row js-observe-modal-errors u-hidden-visually">
              <div class="c-form-notification__col">
                <div class="c-message-light c-message-light--error js-form-error-items"></div>
              </div>
            </div>
            <div class="c-form-notification__title">از طریق:</div>
            <div class="c-form-notification__row">
              <div class="c-form-notification__col">
                <ul class="c-form-notification__params">
                  <li><label class="c-form-notification__label" for="notification-param-1">ایمیل به <span
                        class="js-observed-user-email"></span></label><label class="c-ui-checkbox"><input
                        type="checkbox" value="1" name="observed[email]" id="notification-param-1"><span
                        class="c-ui-checkbox__check"></span></label></li>
                  <li><label class="c-form-notification__label" for="notification-param-2">پیامک به <span
                        class="js-observed-user-number"></span></label><label class="c-ui-checkbox"><input
                        type="checkbox" value="1" name="observed[sms]" checked="" id="notification-param-2"><span
                        class="c-ui-checkbox__check"></span></label></li>
                  <li><label class="c-form-notification__label" for="notification-param-3">سیستم پیام شخصی
                      {{ $fa_store_name }}</label><label class="c-ui-checkbox"><input type="checkbox" value="1"
                                                                                      name="observed[notification]"
                                                                                      checked=""
                                                                                      id="notification-param-3"><span
                        class="c-ui-checkbox__check"></span></label></li>
                </ul>
              </div>
            </div>
            <div class="c-form-notification__row c-form-notification__row--submit">
              <div class="c-form-notification__col">
                <button type="button" id="add-to-observed" class="btn-remodal-primary">ثبت</button>
                <button data-remodal-action="cancel" class="btn-remodal-secondary">بازگشت</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-modal--xs remodal-is-initialized remodal-is-closed" data-remodal-id="auto-buy"
         role="dialog" aria-labelledby="modalTitle" tabindex="-1" aria-describedby="modalDesc" data-remodal-options="">
      <div class="c-modal__top-bar  ">
        <div class="c-modal__title ">رزرو کالا در زمان موجود شدن</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <div class="c-product-auto-buy o-text-right"><p class="c-product-auto-buy__dsc">
          این کالا پس از موجود شدن به مدت یک ساعت برای شما رززو می‌گردد
          و می‌توانید با پرداخت هزینه سفارش آن را خریداری نمایید.
        </p><h4 class="c-product-auto-buy__notic-header">اطلاع از طریق:</h4>
        <form id="auto-buy-form">
          <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                class="o-form__check-box-input js-auto-buy-user-email" name="autoBuy[email]" value="1"
                type="checkbox"><span class="o-form__check-box-sign"></span><span class="js-ui-checkbox-label">
            ایمیل به user@digikala.com
        </span></label></div>
          <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                class="o-form__check-box-input js-auto-buy-user-phone" name="autoBuy[sms]" value="1" type="checkbox"
                checked=""><span class="o-form__check-box-sign"></span><span class="js-ui-checkbox-label">
            پیامک به ۰۹۱۲۳۴۵۶۷۸۹
        </span></label></div>
          <div class="c-product-auto-buy__notic-row"><label class="o-form__check-box"><input
                class="o-form__check-box-input js-auto-buy-dk-notification" name="autoBuy[notification]" value="1"
                type="checkbox" checked=""><span class="o-form__check-box-sign"></span><span
                class="js-ui-checkbox-label">
            پیام شخصی {{ $fa_store_name }}
        </span></label></div>
        </form>
        <div class="c-product-auto-buy__footer"><p class="c-product-auto-buy__plus-dsc" data-icon="Brand-Digiplus-Sign">
            تنها برای کاربران دیجی‌پلاس
          </p><a href="/plus/landing/" class="o-btn o-btn--outlined-purple-lg o-btn--full-width"
                 data-after-icon="Icon-Navigation-Chevron-Left">
            عضویت در دیجی‌پلاس
          </a></div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-notification remodal-is-initialized remodal-is-closed"
         data-remodal-id="incredible-observed" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-notification__main">
        <div class="c-remodal-notification__aside">
          <div class="c-remodal-notification__title-ilu">به من اطلاع بده</div>
          <div class="c-remodal-notification__ilu"></div>
        </div>
        <div class="c-remodal-notification__content">
          <form class="c-form-notification" id="incredible-observed-form">
            <div class="c-form-notification__title">اطلاع به من در زمان:</div>
            <div class="c-form-notification__row">
              <div class="c-form-notification__col">
                <div class="c-form-notification__status">
                  پیشنهاد شگفت‌انگیز
                </div>
              </div>
            </div>
            <div class="c-form-notification__row js-observe-modal-errors u-hidden-visually">
              <div class="c-form-notification__col">
                <div class="c-message-light c-message-light--error js-form-error-items"></div>
              </div>
            </div>
            <div class="c-form-notification__title">از طریق:</div>
            <div class="c-form-notification__row">
              <div class="c-form-notification__col">
                <ul class="c-form-notification__params">
                  <li><label class="c-form-notification__label" for="incredible-notification-param-1">ایمیل به <span
                        class="js-observed-user-email"></span></label><label class="c-ui-checkbox"><input
                        type="checkbox" value="1" name="observed[email]" id="incredible-notification-param-1"><span
                        class="c-ui-checkbox__check"></span></label></li>
                  <li><label class="c-form-notification__label" for="incredible-notification-param-2">پیامک به <span
                        class="js-observed-user-number"></span></label><label class="c-ui-checkbox"><input
                        type="checkbox" value="1" name="observed[sms]" checked=""
                        id="incredible-notification-param-2"><span class="c-ui-checkbox__check"></span></label></li>
                  <li><label class="c-form-notification__label" for="incredible-notification-param-3">سیستم پیام شخصی
                      {{ $fa_store_name }}</label><label class="c-ui-checkbox"><input type="checkbox" value="1"
                                                                                      name="observed[notification]"
                                                                                      checked=""
                                                                                      id="incredible-notification-param-3"><span
                        class="c-ui-checkbox__check"></span></label></li>
                </ul>
              </div>
            </div>
            <div class="c-form-notification__row c-form-notification__row--submit">
              <div class="c-form-notification__col">
                <button type="button" id="add-to-incredible-observed" class="btn-remodal-primary">ثبت</button>
                <button data-remodal-action="cancel" class="btn-remodal-secondary">بازگشت</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-gallery remodal-is-initialized remodal-is-closed" data-remodal-id="gallery"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-gallery__main js-level-one-gallery">
        <div class="c-remodal-gallery__top-bar">
          <div class="c-remodal-gallery__tabs js-top-bar-tabs">
            <div class="c-remodal-gallery__tab c-remodal-gallery__tab--selected js-gallery-tab" data-id="1">تصاویر
              رسمی
            </div>
          </div>
          <button data-remodal-action="close" class="c-remodal-gallery__close" aria-label="Close"></button>
        </div>
        <div class="c-remodal-gallery__content is-active js-gallery-tab-content" id="gallery-content-1">
          <div class="c-remodal-gallery__main-img js-gallery-main-img js-video-container">
            <div
              class="video-js vjs-default-skin vjs-big-play-centered vjs-paused vjs-fluid pdp-video-container-dimensions vjs-controls-enabled vjs-workinghover vjs-v7 vjs-user-active"
              id="pdp-video-container" tabindex="-1" role="region" aria-label="Video Player" lang="en-us">
              <video id="pdp-video-container_html5_api" class="vjs-tech" tabindex="-1" preload="none"></video>
              <div class="vjs-poster vjs-hidden" tabindex="-1" aria-disabled="false"></div>
              <div class="vjs-text-track-display" aria-live="off" aria-atomic="true"></div>
              <div class="vjs-loading-spinner" dir="ltr"><span class="vjs-control-text">Video Player is loading.</span>
              </div>
              <button class="vjs-big-play-button" type="button" title="Play Video" aria-disabled="false"><span
                  aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                               aria-live="polite">Play Video</span>
              </button>
              <div class="vjs-control-bar" dir="ltr">
                <button class="vjs-play-control vjs-control vjs-button" type="button" title="Play"
                        aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Play</span></button>
                <div class="vjs-volume-panel vjs-control vjs-volume-panel-horizontal">
                  <button class="vjs-mute-control vjs-control vjs-button" type="button" title="Mute"
                          aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                      class="vjs-control-text" aria-live="polite">Mute</span></button>
                  <div class="vjs-volume-control vjs-control vjs-volume-horizontal">
                    <div tabindex="0" class="vjs-volume-bar vjs-slider-bar vjs-slider vjs-slider-horizontal"
                         role="slider" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                         aria-label="Volume Level" aria-live="polite" aria-valuetext="100%">
                      <div class="vjs-volume-level"><span class="vjs-control-text"></span></div>
                    </div>
                  </div>
                </div>
                <div class="vjs-current-time vjs-time-control vjs-control"><span class="vjs-control-text"
                                                                                 role="presentation">Current Time </span><span
                    class="vjs-current-time-display" aria-live="off" role="presentation">0:00</span></div>
                <div class="vjs-time-control vjs-time-divider" aria-hidden="true">
                  <div><span>/</span></div>
                </div>
                <div class="vjs-duration vjs-time-control vjs-control"><span class="vjs-control-text"
                                                                             role="presentation">Duration </span><span
                    class="vjs-duration-display" aria-live="off" role="presentation">0:00</span></div>
                <div class="vjs-progress-control vjs-control">
                  <div tabindex="0" class="vjs-progress-holder vjs-slider vjs-slider-horizontal" role="slider"
                       aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-label="Progress Bar">
                    <div class="vjs-load-progress"><span class="vjs-control-text"><span>Loaded</span>: <span
                          class="vjs-control-text-loaded-percentage">0%</span></span></div>
                    <div class="vjs-mouse-display">
                      <div class="vjs-time-tooltip" aria-hidden="true"></div>
                    </div>
                    <div class="vjs-play-progress vjs-slider-bar" aria-hidden="true">
                      <div class="vjs-time-tooltip" aria-hidden="true"></div>
                    </div>
                  </div>
                </div>
                <div class="vjs-live-control vjs-control vjs-hidden">
                  <div class="vjs-live-display" aria-live="off"><span class="vjs-control-text">Stream Type </span>LIVE
                  </div>
                </div>
                <button class="vjs-seek-to-live-control vjs-control vjs-at-live-edge" type="button"
                        title="Seek to live, currently playing live" aria-disabled="true"><span aria-hidden="true"
                                                                                                class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Seek to live, currently playing live</span><span
                    class="vjs-seek-to-live-text" aria-hidden="true">LIVE</span></button>
                <div class="vjs-remaining-time vjs-time-control vjs-control"><span class="vjs-control-text"
                                                                                   role="presentation">Remaining Time </span><span
                    aria-hidden="true">-</span><span class="vjs-remaining-time-display" aria-live="off"
                                                     role="presentation">0:00</span></div>
                <div class="vjs-custom-control-spacer vjs-spacer "></div>
                <div class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-playback-rate vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Playback Rate" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Playback Rate</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu"></ul>
                  </div>
                  <div class="vjs-playback-rate-value">1x</div>
                </div>
                <div
                  class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-chapters-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Chapters" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Chapters</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li class="vjs-menu-title" tabindex="-1">Chapters</li>
                    </ul>
                  </div>
                </div>
                <div
                  class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-descriptions-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Descriptions" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Descriptions</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemradio" aria-disabled="false"
                          aria-checked="true"><span class="vjs-menu-item-text">descriptions off</span><span
                          class="vjs-control-text" aria-live="polite">, selected</span></li>
                    </ul>
                  </div>
                </div>
                <div
                  class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-subs-caps-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Captions" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Captions</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu">
                      <li class="vjs-menu-item vjs-texttrack-settings" tabindex="-1" role="menuitem"
                          aria-disabled="false"><span class="vjs-menu-item-text">captions settings</span><span
                          class="vjs-control-text" aria-live="polite">, opens captions settings dialog</span></li>
                      <li class="vjs-menu-item vjs-selected" tabindex="-1" role="menuitemradio" aria-disabled="false"
                          aria-checked="true"><span class="vjs-menu-item-text">captions off</span><span
                          class="vjs-control-text" aria-live="polite">, selected</span></li>
                    </ul>
                  </div>
                </div>
                <div class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-control vjs-button vjs-hidden">
                  <button class="vjs-audio-button vjs-menu-button vjs-menu-button-popup vjs-button" type="button"
                          aria-disabled="false" title="Audio Track" aria-haspopup="true" aria-expanded="false"><span
                      aria-hidden="true" class="vjs-icon-placeholder"></span><span class="vjs-control-text"
                                                                                   aria-live="polite">Audio Track</span>
                  </button>
                  <div class="vjs-menu">
                    <ul class="vjs-menu-content" role="menu"></ul>
                  </div>
                </div>
                <button class="vjs-fullscreen-control vjs-control vjs-button" type="button" title="Fullscreen"
                        aria-disabled="false"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Fullscreen</span></button>
              </div>
              <div class="vjs-error-display vjs-modal-dialog vjs-hidden " tabindex="-1"
                   aria-describedby="pdp-video-container_component_415_description" aria-hidden="true"
                   aria-label="Modal Window" role="dialog"><p class="vjs-modal-dialog-description vjs-control-text"
                                                              id="pdp-video-container_component_415_description">This is
                  a modal window.</p>
                <div class="vjs-modal-dialog-content" role="document"></div>
              </div>
              <div class="vjs-modal-dialog vjs-hidden  vjs-text-track-settings" tabindex="-1"
                   aria-describedby="pdp-video-container_component_420_description" aria-hidden="true"
                   aria-label="Caption Settings Dialog" role="dialog"><p
                  class="vjs-modal-dialog-description vjs-control-text"
                  id="pdp-video-container_component_420_description">Beginning of dialog window. Escape will cancel and
                  close the window.</p>
                <div class="vjs-modal-dialog-content" role="document">
                  <div class="vjs-track-settings-colors">
                    <fieldset class="vjs-fg-color vjs-track-setting">
                      <legend id="captions-text-legend-pdp-video-container_component_420">Text</legend>
                      <label id="captions-foreground-color-pdp-video-container_component_420"
                             class="vjs-label">Color</label><select
                        aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420">
                        <option id="captions-foreground-color-pdp-video-container_component_420-White" value="#FFF"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420-White">
                          White
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_420-Black" value="#000"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420-Black">
                          Black
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_420-Red" value="#F00"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420-Red">
                          Red
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_420-Green" value="#0F0"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420-Green">
                          Green
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_420-Blue" value="#00F"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420-Blue">
                          Blue
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_420-Yellow" value="#FF0"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420-Yellow">
                          Yellow
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_420-Magenta" value="#F0F"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420-Magenta">
                          Magenta
                        </option>
                        <option id="captions-foreground-color-pdp-video-container_component_420-Cyan" value="#0FF"
                                aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420 captions-foreground-color-pdp-video-container_component_420-Cyan">
                          Cyan
                        </option>
                      </select><span class="vjs-text-opacity vjs-opacity"><label
                          id="captions-foreground-opacity-pdp-video-container_component_420" class="vjs-label">Transparency</label><select
                          aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-opacity-pdp-video-container_component_420"><option
                            id="captions-foreground-opacity-pdp-video-container_component_420-Opaque" value="1"
                            aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-opacity-pdp-video-container_component_420 captions-foreground-opacity-pdp-video-container_component_420-Opaque">Opaque</option><option
                            id="captions-foreground-opacity-pdp-video-container_component_420-SemiTransparent"
                            value="0.5"
                            aria-labelledby="captions-text-legend-pdp-video-container_component_420 captions-foreground-opacity-pdp-video-container_component_420 captions-foreground-opacity-pdp-video-container_component_420-SemiTransparent">Semi-Transparent</option></select></span>
                    </fieldset>
                    <fieldset class="vjs-bg-color vjs-track-setting">
                      <legend id="captions-background-pdp-video-container_component_420">Background</legend>
                      <label id="captions-background-color-pdp-video-container_component_420"
                             class="vjs-label">Color</label><select
                        aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420">
                        <option id="captions-background-color-pdp-video-container_component_420-Black" value="#000"
                                aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420-Black">
                          Black
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_420-White" value="#FFF"
                                aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420-White">
                          White
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_420-Red" value="#F00"
                                aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420-Red">
                          Red
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_420-Green" value="#0F0"
                                aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420-Green">
                          Green
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_420-Blue" value="#00F"
                                aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420-Blue">
                          Blue
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_420-Yellow" value="#FF0"
                                aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420-Yellow">
                          Yellow
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_420-Magenta" value="#F0F"
                                aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420-Magenta">
                          Magenta
                        </option>
                        <option id="captions-background-color-pdp-video-container_component_420-Cyan" value="#0FF"
                                aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420 captions-background-color-pdp-video-container_component_420-Cyan">
                          Cyan
                        </option>
                      </select><span class="vjs-bg-opacity vjs-opacity"><label
                          id="captions-background-opacity-pdp-video-container_component_420" class="vjs-label">Transparency</label><select
                          aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-opacity-pdp-video-container_component_420"><option
                            id="captions-background-opacity-pdp-video-container_component_420-Opaque" value="1"
                            aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-opacity-pdp-video-container_component_420 captions-background-opacity-pdp-video-container_component_420-Opaque">Opaque</option><option
                            id="captions-background-opacity-pdp-video-container_component_420-SemiTransparent"
                            value="0.5"
                            aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-opacity-pdp-video-container_component_420 captions-background-opacity-pdp-video-container_component_420-SemiTransparent">Semi-Transparent</option><option
                            id="captions-background-opacity-pdp-video-container_component_420-Transparent" value="0"
                            aria-labelledby="captions-background-pdp-video-container_component_420 captions-background-opacity-pdp-video-container_component_420 captions-background-opacity-pdp-video-container_component_420-Transparent">Transparent</option></select></span>
                    </fieldset>
                    <fieldset class="vjs-window-color vjs-track-setting">
                      <legend id="captions-window-pdp-video-container_component_420">Window</legend>
                      <label id="captions-window-color-pdp-video-container_component_420"
                             class="vjs-label">Color</label><select
                        aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420">
                        <option id="captions-window-color-pdp-video-container_component_420-Black" value="#000"
                                aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420-Black">
                          Black
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_420-White" value="#FFF"
                                aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420-White">
                          White
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_420-Red" value="#F00"
                                aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420-Red">
                          Red
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_420-Green" value="#0F0"
                                aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420-Green">
                          Green
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_420-Blue" value="#00F"
                                aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420-Blue">
                          Blue
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_420-Yellow" value="#FF0"
                                aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420-Yellow">
                          Yellow
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_420-Magenta" value="#F0F"
                                aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420-Magenta">
                          Magenta
                        </option>
                        <option id="captions-window-color-pdp-video-container_component_420-Cyan" value="#0FF"
                                aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420 captions-window-color-pdp-video-container_component_420-Cyan">
                          Cyan
                        </option>
                      </select><span class="vjs-window-opacity vjs-opacity"><label
                          id="captions-window-opacity-pdp-video-container_component_420"
                          class="vjs-label">Transparency</label><select
                          aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-opacity-pdp-video-container_component_420"><option
                            id="captions-window-opacity-pdp-video-container_component_420-Transparent" value="0"
                            aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-opacity-pdp-video-container_component_420 captions-window-opacity-pdp-video-container_component_420-Transparent">Transparent</option><option
                            id="captions-window-opacity-pdp-video-container_component_420-SemiTransparent" value="0.5"
                            aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-opacity-pdp-video-container_component_420 captions-window-opacity-pdp-video-container_component_420-SemiTransparent">Semi-Transparent</option><option
                            id="captions-window-opacity-pdp-video-container_component_420-Opaque" value="1"
                            aria-labelledby="captions-window-pdp-video-container_component_420 captions-window-opacity-pdp-video-container_component_420 captions-window-opacity-pdp-video-container_component_420-Opaque">Opaque</option></select></span>
                    </fieldset>
                  </div>
                  <div class="vjs-track-settings-font">
                    <fieldset class="vjs-font-percent vjs-track-setting">
                      <legend id="captions-font-size-pdp-video-container_component_420" class="">Font Size</legend>
                      <select aria-labelledby="captions-font-size-pdp-video-container_component_420">
                        <option id="captions-font-size-pdp-video-container_component_420-50" value="0.50"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-50">
                          50%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_420-75" value="0.75"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-75">
                          75%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_420-100" value="1.00"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-100">
                          100%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_420-125" value="1.25"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-125">
                          125%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_420-150" value="1.50"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-150">
                          150%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_420-175" value="1.75"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-175">
                          175%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_420-200" value="2.00"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-200">
                          200%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_420-300" value="3.00"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-300">
                          300%
                        </option>
                        <option id="captions-font-size-pdp-video-container_component_420-400" value="4.00"
                                aria-labelledby="captions-font-size-pdp-video-container_component_420 captions-font-size-pdp-video-container_component_420-400">
                          400%
                        </option>
                      </select></fieldset>
                    <fieldset class="vjs-edge-style vjs-track-setting">
                      <legend id="pdp-video-container_component_420" class="">Text Edge Style</legend>
                      <select aria-labelledby="pdp-video-container_component_420">
                        <option id="pdp-video-container_component_420-None" value="none"
                                aria-labelledby="pdp-video-container_component_420 pdp-video-container_component_420-None">
                          None
                        </option>
                        <option id="pdp-video-container_component_420-Raised" value="raised"
                                aria-labelledby="pdp-video-container_component_420 pdp-video-container_component_420-Raised">
                          Raised
                        </option>
                        <option id="pdp-video-container_component_420-Depressed" value="depressed"
                                aria-labelledby="pdp-video-container_component_420 pdp-video-container_component_420-Depressed">
                          Depressed
                        </option>
                        <option id="pdp-video-container_component_420-Uniform" value="uniform"
                                aria-labelledby="pdp-video-container_component_420 pdp-video-container_component_420-Uniform">
                          Uniform
                        </option>
                        <option id="pdp-video-container_component_420-Dropshadow" value="dropshadow"
                                aria-labelledby="pdp-video-container_component_420 pdp-video-container_component_420-Dropshadow">
                          Dropshadow
                        </option>
                      </select></fieldset>
                    <fieldset class="vjs-font-family vjs-track-setting">
                      <legend id="captions-font-family-pdp-video-container_component_420" class="">Font Family</legend>
                      <select aria-labelledby="captions-font-family-pdp-video-container_component_420">
                        <option id="captions-font-family-pdp-video-container_component_420-ProportionalSansSerif"
                                value="proportionalSansSerif"
                                aria-labelledby="captions-font-family-pdp-video-container_component_420 captions-font-family-pdp-video-container_component_420-ProportionalSansSerif">
                          Proportional Sans-Serif
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_420-MonospaceSansSerif"
                                value="monospaceSansSerif"
                                aria-labelledby="captions-font-family-pdp-video-container_component_420 captions-font-family-pdp-video-container_component_420-MonospaceSansSerif">
                          Monospace Sans-Serif
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_420-ProportionalSerif"
                                value="proportionalSerif"
                                aria-labelledby="captions-font-family-pdp-video-container_component_420 captions-font-family-pdp-video-container_component_420-ProportionalSerif">
                          Proportional Serif
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_420-MonospaceSerif"
                                value="monospaceSerif"
                                aria-labelledby="captions-font-family-pdp-video-container_component_420 captions-font-family-pdp-video-container_component_420-MonospaceSerif">
                          Monospace Serif
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_420-Casual" value="casual"
                                aria-labelledby="captions-font-family-pdp-video-container_component_420 captions-font-family-pdp-video-container_component_420-Casual">
                          Casual
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_420-Script" value="script"
                                aria-labelledby="captions-font-family-pdp-video-container_component_420 captions-font-family-pdp-video-container_component_420-Script">
                          Script
                        </option>
                        <option id="captions-font-family-pdp-video-container_component_420-SmallCaps" value="small-caps"
                                aria-labelledby="captions-font-family-pdp-video-container_component_420 captions-font-family-pdp-video-container_component_420-SmallCaps">
                          Small Caps
                        </option>
                      </select></fieldset>
                  </div>
                  <div class="vjs-track-settings-controls">
                    <button type="button" class="vjs-default-button" title="restore all settings to the default values">
                      Reset<span class="vjs-control-text"> restore all settings to the default values</span></button>
                    <button type="button" class="vjs-done-button">Done</button>
                  </div>
                </div>
                <button class="vjs-close-button vjs-control vjs-button" type="button" aria-disabled="false"
                        title="Close Modal Dialog"><span aria-hidden="true" class="vjs-icon-placeholder"></span><span
                    class="vjs-control-text" aria-live="polite">Close Modal Dialog</span></button>
                <p class="vjs-control-text">End of dialog window.</p></div>
            </div>
          </div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img is-active js-img-main-1"
               data-slide-title="Slide "><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1605962207.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1605962207.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 1" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1605962207.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-2" data-slide-title="Slide 1"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/96af446464f66a4a3b8ef89816247bee3b6b5c3f_1606734443.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/96af446464f66a4a3b8ef89816247bee3b6b5c3f_1606734443.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 2" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/96af446464f66a4a3b8ef89816247bee3b6b5c3f_1606734443.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-3" data-slide-title="Slide 2"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606734448.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606734448.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 3" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606734448.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-4" data-slide-title="Slide 3"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606734451.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606734451.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 4" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606734451.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-5" data-slide-title="Slide 4"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606734455.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606734455.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 5" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606734455.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-6" data-slide-title="Slide 5"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606734461.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606734461.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 6" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606734461.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-7" data-slide-title="Slide 6"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606734463.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606734463.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 7" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606734463.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-8" data-slide-title="Slide 7"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/40ec3ab83192168dacab014ba357aa5443161272_1606734466.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/40ec3ab83192168dacab014ba357aa5443161272_1606734466.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 8" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/40ec3ab83192168dacab014ba357aa5443161272_1606734466.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-9" data-slide-title="Slide 8"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/fb30f30fcbaabab5b32e64f356e5e7c3067b650e_1606737247.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/fb30f30fcbaabab5b32e64f356e5e7c3067b650e_1606737247.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 9" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/fb30f30fcbaabab5b32e64f356e5e7c3067b650e_1606737247.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-10" data-slide-title="Slide 9"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/78b197cd81506ed5d0705f89f9a33c629308a5b6_1607421941.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/78b197cd81506ed5d0705f89f9a33c629308a5b6_1607421941.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 10" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/78b197cd81506ed5d0705f89f9a33c629308a5b6_1607421941.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-11" data-slide-title="Slide 10"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/6b377c218097818f671734ad181fc1e8563bc1bc_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/6b377c218097818f671734ad181fc1e8563bc1bc_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 11" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/6b377c218097818f671734ad181fc1e8563bc1bc_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-12" data-slide-title="Slide 11"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/c942b751655757c0dbcc6bc3cd3ba7bca82456fd_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/c942b751655757c0dbcc6bc3cd3ba7bca82456fd_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 12" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/c942b751655757c0dbcc6bc3cd3ba7bca82456fd_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-13" data-slide-title="Slide 12"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/48c5a02abc05ec142e3906ff4e2c78479bb8a966_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/48c5a02abc05ec142e3906ff4e2c78479bb8a966_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 13" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/48c5a02abc05ec142e3906ff4e2c78479bb8a966_1607421940.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-14" data-slide-title="Slide 13"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/9ab0c8e192bd0ab7560d58cd2670d31ee431dd35_1607421942.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/9ab0c8e192bd0ab7560d58cd2670d31ee431dd35_1607421942.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 14" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/9ab0c8e192bd0ab7560d58cd2670d31ee431dd35_1607421942.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-15" data-slide-title="Slide 14"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/5b4a4e70a95927e559bc35b8a9ace99b9a7e1619_1607434937.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/5b4a4e70a95927e559bc35b8a9ace99b9a7e1619_1607434937.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 15" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/5b4a4e70a95927e559bc35b8a9ace99b9a7e1619_1607434937.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-16" data-slide-title="Slide 15"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012983.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012983.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 16" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012983.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__main-img js-gallery-main-img  js-img-main-17" data-slide-title="Slide 16"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/631794f601e6660c40b6f5ea92c2e61181e71dec_1618046836.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              data-high-res-src="https://dkstatics-public.digikala.com/digikala-products/631794f601e6660c40b6f5ea92c2e61181e71dec_1618046836.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              class="pannable-image" title=""
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت main 1 17" data-type=""
              src="https://dkstatics-public.digikala.com/digikala-products/631794f601e6660c40b6f5ea92c2e61181e71dec_1618046836.jpg?x-oss-process=image/resize,h_1600/quality,q_80/watermark,image_ZGstdy8xLnBuZw==,t_90,g_nw,x_15,y_15"
              loading="lazy"></div>
          <div class="c-remodal-gallery__info">
            <div class="c-remodal-gallery__title">گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128
              گیگابایت
            </div>
            <div class="c-remodal-gallery__thumbs js-official-thumbs">
              <div class="c-remodal-gallery__thumb is-video js-image-thumb"
                   data-video-cover="https://dkstatics-public.digikala.com/digikala-video-cover/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image/resize,w_600/quality,q_80"
                   data-video-src="https://dkstatics-public.digikala.com/digikala-video-playlist/65a9742d046a76387e9514dfea87b2de0594e0e2_1606734556.m3u8"
                   data-product-id="3814476" data-id="1"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-video-cover/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image/resize,m_fill,h_115,w_115"
                  alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت video"
                  src="https://dkstatics-public.digikala.com/digikala-video-cover/2088368572727bc4faca00bc828ca8196a65d3a8_1606733831.jpg?x-oss-process=image/resize,m_fill,h_115,w_115"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb is-video js-image-thumb"
                   data-video-cover="https://dkstatics-public.digikala.com/digikala-video-cover/d6de72ae3ddd09e9e8d6216126829835a4e2b63e_1611476974.jpg?x-oss-process=image/resize,w_600/quality,q_80"
                   data-video-src="https://dkstatics-public.digikala.com/digikala-video-playlist/02d4f393e60643ded22761d47eff4e73c191721d_1611477095.m3u8"
                   data-product-id="3814476" data-id="2"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-video-cover/d6de72ae3ddd09e9e8d6216126829835a4e2b63e_1611476974.jpg?x-oss-process=image/resize,m_fill,h_115,w_115"
                  alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت video"
                  src="https://dkstatics-public.digikala.com/digikala-video-cover/d6de72ae3ddd09e9e8d6216126829835a4e2b63e_1611476974.jpg?x-oss-process=image/resize,m_fill,h_115,w_115"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb is-video js-image-thumb"
                   data-video-cover="https://dkstatics-public.digikala.com/digikala-video-cover/950fa3c93aeaa2ba6800cde148515d4813c7395c_1611477895.jpg?x-oss-process=image/resize,w_600/quality,q_80"
                   data-video-src="https://dkstatics-public.digikala.com/digikala-video-playlist/656bc0c66b80046e0c88d9268dd4eda86f04fe08_1611477972.m3u8"
                   data-product-id="3814476" data-id="3"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-video-cover/950fa3c93aeaa2ba6800cde148515d4813c7395c_1611477895.jpg?x-oss-process=image/resize,m_fill,h_115,w_115"
                  alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت video"
                  src="https://dkstatics-public.digikala.com/digikala-video-cover/950fa3c93aeaa2ba6800cde148515d4813c7395c_1611477895.jpg?x-oss-process=image/resize,m_fill,h_115,w_115"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="1"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1605962207.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 1"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/b8e8c96afe990d290e525567c591fd4bd57d50bf_1605962207.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="2"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/96af446464f66a4a3b8ef89816247bee3b6b5c3f_1606734443.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 2"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/96af446464f66a4a3b8ef89816247bee3b6b5c3f_1606734443.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="3"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606734448.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 3"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/a174e64b5cbc60b66de6a373c5b5c1166d713af3_1606734448.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="4"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606734451.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 4"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/7542028fdec96803415f4f43a469d06fe8c4b962_1606734451.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="5"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606734455.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 5"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/cafe874fb584fd25b1f20e805fec0a36384a5058_1606734455.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="6"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606734461.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 6"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/805d888f53a7afee44a300ce282f74ebea5ba642_1606734461.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="7"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606734463.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 7"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/cdbf1b502e9928190990ce5b75562a9ccea0b234_1606734463.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="8"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/40ec3ab83192168dacab014ba357aa5443161272_1606734466.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 8"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/40ec3ab83192168dacab014ba357aa5443161272_1606734466.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="9"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/fb30f30fcbaabab5b32e64f356e5e7c3067b650e_1606737247.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 9"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/fb30f30fcbaabab5b32e64f356e5e7c3067b650e_1606737247.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="10"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/78b197cd81506ed5d0705f89f9a33c629308a5b6_1607421941.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 10"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/78b197cd81506ed5d0705f89f9a33c629308a5b6_1607421941.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="11"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/6b377c218097818f671734ad181fc1e8563bc1bc_1607421940.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 11"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/6b377c218097818f671734ad181fc1e8563bc1bc_1607421940.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="12"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/c942b751655757c0dbcc6bc3cd3ba7bca82456fd_1607421940.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 12"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/c942b751655757c0dbcc6bc3cd3ba7bca82456fd_1607421940.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="13"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/48c5a02abc05ec142e3906ff4e2c78479bb8a966_1607421940.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 13"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/48c5a02abc05ec142e3906ff4e2c78479bb8a966_1607421940.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="14"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/9ab0c8e192bd0ab7560d58cd2670d31ee431dd35_1607421942.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 14"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/9ab0c8e192bd0ab7560d58cd2670d31ee431dd35_1607421942.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="15"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/5b4a4e70a95927e559bc35b8a9ace99b9a7e1619_1607434937.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 15"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/5b4a4e70a95927e559bc35b8a9ace99b9a7e1619_1607434937.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="16"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012983.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 16"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/0a9abd01d5c46f9f949de07c0517042145ca1eb8_1608012983.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
              <div class="c-remodal-gallery__thumb js-image-thumb" data-order="17"><img
                  data-src="https://dkstatics-public.digikala.com/digikala-products/631794f601e6660c40b6f5ea92c2e61181e71dec_1618046836.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  title="" alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت thumb 2 17"
                  data-type=""
                  src="https://dkstatics-public.digikala.com/digikala-products/631794f601e6660c40b6f5ea92c2e61181e71dec_1618046836.jpg?x-oss-process=image/resize,m_lfit,h_115,w_115/quality,q_60"
                  loading="lazy"></div>
            </div>
            <div class="c-remodal-gallery__other-imgs js-comments-files-thumbnails-summary js-see-more-imgs"></div>
          </div>
        </div>
        <div
          class="c-remodal-gallery__content c-remodal-gallery__content--comments js-gallery-tab-content js-comments-with-thumbnails"
          id="gallery-content-2"></div>
      </div>
      <div class="c-remodal-gallery__main js-level-two-gallery js-comments"></div>
      <div class="c-remodal-gallery__main js-answers">
        <div class="c-remodal-gallery__top-bar">
          <div class="c-remodal-gallery__head-title">
            پاسخ فروشنده
          </div>
          <button data-remodal-action="close" class="c-remodal-gallery__close" aria-label="Close"></button>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-pricing remodal-is-initialized remodal-is-closed" data-remodal-id="unfair-pricing"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-pricing__main">
        <div class="c-remodal-pricing__aside">
          <div class="c-remodal-pricing__title-img">گزارش قیمت مناسب‌تر این کالا</div>
          <div class="c-remodal-pricing__img"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت"
              src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
              loading="lazy"></div>
        </div>
        <div class="c-remodal-pricing__content">
          <form class="c-form-pricing js-pricing-form" id="unfairPricingForm" novalidate="novalidate"><input
              type="hidden" name="unfair_pricing[is_price_competitive]" id="is-price-competitive" value="0"><input
              type="hidden" name="unfair_pricing[product_id]" value="3814476"><input type="hidden"
                                                                                     name="unfair_pricing[observed_price]"
                                                                                     id="pricing-observed-price">
            <div class="c-form-pricing__title">این کالا را با چه قیمتی دیده‌اید؟</div>
            <div
              class="c-message-light c-message-light--margined-vertically c-message-light--success js-unfair-pricing-message u-hidden-visually">
              <span></span></div>
            <div
              class="c-message-light c-message-light--margined-vertically c-message-light--error js-unfair-pricing-error u-hidden-visually"></div>
            <div class="c-form-pricing__row js-valid-row">
              <div class="c-form-pricing__col"><label class="c-ui-input"><input
                    class="c-ui-input__field c-ui-input__field--has-currency js-price-delimiter" type="text"
                    autocomplete="off" name="unfair_pricing[claimed_price]" placeholder="مثلا ۳۵۰۰۰">
                  <div class="c-ui-input__currency">تومان</div>
                </label></div>
            </div>
            <div class="c-form-pricing__row js-valid-row">
              <div class="c-form-pricing__col"><label class="c-ui-switch c-ui-switch--primary"><input
                    class="c-ui-switch__checkbox js-toggle-price-survey-options" type="checkbox" value="1" checked=""
                    name="unfair_pricing[is_claimed_store_online]"><span
                    class="c-ui-switch__slider c-ui-switch__slider--round"></span></label><span
                  class="c-form-pricing__label-text">در فروشگاه اینترنتی دیده‌ام</span></div>
            </div>
            <div class="c-form-pricing__additional js-price-survey-store-container">
              <div class="c-form-pricing__title">
                نام فروشگاه
              </div>
              <div class="c-form-pricing__row js-valid-row">
                <div class="c-form-pricing__col"><label class="c-ui-input"><input class="c-ui-input__field" type="text"
                                                                                  name="unfair_pricing[store]"
                                                                                  placeholder=""></label></div>
              </div>
              <div class="c-form-pricing__title">مکان فروشگاه</div>
              <div class="c-form-pricing__row js-valid-row">
                <div class="c-form-pricing__col"><label class="c-ui-input">
                    <div class="selectric-wrapper selectric-js-ui-select">
                      <div class="selectric-hide-select"><select class="js-ui-select" name="unfair_pricing[store_state]"
                                                                 tabindex="-1">
                          <option value="0">انتخاب استان</option>
                          <option value="9">تهران</option>
                          <option value="6">البرز</option>
                          <option value="5">اصفهان</option>
                          <option value="12">خراسان رضوی</option>
                          <option value="14">خوزستان</option>
                          <option value="28">مازندران</option>
                          <option value="18">فارس</option>
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
                        </select></div>
                      <div class="selectric"><span class="label">انتخاب استان</span><b class="button">▾</b></div>
                      <div class="selectric-items" tabindex="-1">
                        <div class="selectric-scroll">
                          <ul>
                            <li data-index="0" class="selected">انتخاب استان</li>
                            <li data-index="1" class="">تهران</li>
                            <li data-index="2" class="">البرز</li>
                            <li data-index="3" class="">اصفهان</li>
                            <li data-index="4" class="">خراسان رضوی</li>
                            <li data-index="5" class="">خوزستان</li>
                            <li data-index="6" class="">مازندران</li>
                            <li data-index="7" class="">فارس</li>
                            <li data-index="8" class="">آذربایجان شرقی</li>
                            <li data-index="9" class="">آذربایجان غربی</li>
                            <li data-index="10" class="">اردبیل</li>
                            <li data-index="11" class="">ایلام</li>
                            <li data-index="12" class="">بوشهر</li>
                            <li data-index="13" class="">چهار محال و بختیاری</li>
                            <li data-index="14" class="">خراسان جنوبی</li>
                            <li data-index="15" class="">خراسان شمالی</li>
                            <li data-index="16" class="">زنجان</li>
                            <li data-index="17" class="">سمنان</li>
                            <li data-index="18" class="">سیستان و بلوچستان</li>
                            <li data-index="19" class="">قزوین</li>
                            <li data-index="20" class="">قم</li>
                            <li data-index="21" class="">کردستان</li>
                            <li data-index="22" class="">کرمان</li>
                            <li data-index="23" class="">کرمانشاه</li>
                            <li data-index="24" class="">کهگیلویه و بویراحمد</li>
                            <li data-index="25" class="">گلستان</li>
                            <li data-index="26" class="">گیلان</li>
                            <li data-index="27" class="">لرستان</li>
                            <li data-index="28" class="">مرکزی</li>
                            <li data-index="29" class="">هرمزگان</li>
                            <li data-index="30" class="">همدان</li>
                            <li data-index="31" class="last">یزد</li>
                          </ul>
                        </div>
                      </div>
                      <input class="u-hidden" tabindex="0"></div>
                  </label></div>
              </div>
            </div>
            <div class="c-form-pricing__additional js-price-survey-online-container">
              <div class="c-form-pricing__title">آدرس اینترنتی فروشگاه</div>
              <div class="c-form-pricing__row js-valid-row">
                <div class="c-form-pricing__col"><label class="c-ui-input"><input
                      class="c-ui-input__field c-ui-input__field--left-placeholder" type="text"
                      name="unfair_pricing[online_store_url]" placeholder="www.example.com"></label></div>
              </div>
            </div>
            <div class="c-form-pricing__row c-form-pricing__row--submit">
              <div class="c-form-pricing__col">
                <button type="submit" class="btn-primary js-unfair-price-submit">ثبت اطلاعات</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-feedback js-feedback-modal remodal-is-initialized remodal-is-closed"
         data-remodal-id="feedback-survey" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-feedback__main">
        <div class="c-remodal-feedback__aside">
          <div class="c-remodal-feedback__title-img">بازخورد در مورد این کالا</div>
          <div class="c-remodal-feedback__img"><img
              data-src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
              alt="گوشی موبایل اپل مدل iPhone 12 Pro A2408 دو سیم‌ کارت ظرفیت 128 گیگابایت"
              src="https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,m_lfit,h_350,w_350/quality,q_60"
              loading="lazy"></div>
        </div>
        <div class="c-remodal-feedback__content">
          <form class="c-form-feedback" id="feedbackSurveyForm" novalidate="novalidate"><input type="hidden"
                                                                                               name="feedback-survey[product_id]"
                                                                                               value="3814476">
            <div
              class="c-message-light c-message-light--margined-vertically c-message-light--success js-feedback-message u-hidden-visually">
              <span></span></div>
            <div
              class="c-message-light c-message-light--margined-vertically c-message-light--error js-feedback-error u-hidden-visually"></div>
            <div class="c-form-feedback__row js-valid-row" data-question="1" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[1]" value="1"
                                                                    data-question="1"><span
                    class="c-ui-checkbox__check"></span></label><span
                  class="c-ui-checkbox__text">نام کالا صحیح نیست</span></div>
            </div>
            <div class="c-form-feedback__row js-valid-row" data-question="2" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[2]" value="1"
                                                                    data-question="2"><span
                    class="c-ui-checkbox__check"></span></label><span class="c-ui-checkbox__text">عکس‌های کالا مناسب نیست</span>
              </div>
            </div>
            <div class="c-form-feedback__row js-valid-row" data-question="3" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[3]" value="1"
                                                                    data-question="3"><span
                    class="c-ui-checkbox__check"></span></label><span class="c-ui-checkbox__text">مشخصات فنی کالا صحیح نیست</span>
              </div>
            </div>
            <div class="c-form-feedback__row js-valid-row" data-question="4" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[4]" value="1"
                                                                    data-question="4"><span
                    class="c-ui-checkbox__check"></span></label><span
                  class="c-ui-checkbox__text">توضیحات کالا صحیح نیست</span></div>
            </div>
            <div class="c-form-feedback__row js-valid-row" data-question="8" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[8]" value="1"
                                                                    data-question="8"><span
                    class="c-ui-checkbox__check"></span></label><span
                  class="c-ui-checkbox__text">این کالا غیراصل است</span></div>
            </div>
            <div class="c-form-feedback__row js-valid-row js-has-related-question" data-question="5" data-parent="">
              <div class="c-form-feedback__col c-form-feedback__col--v-center"><label
                  class="c-ui-checkbox c-ui-checkbox--green"><input type="checkbox" class="input-checkbox"
                                                                    name="feedback_survey[5]" value="1"
                                                                    data-question="5"><span
                    class="c-ui-checkbox__check"></span></label><span class="c-ui-checkbox__text">کالا تکراری است</span>
              </div>
            </div>
            <div class="u-hidden " data-question="6" data-parent="5">
              <div class="c-form-feedback__title">آدرس کالای مشابه در {{ $fa_store_name }}</div>
              <div class="c-form-feedback__row js-valid-row">
                <div class="c-form-feedback__col"><label class="c-ui-input"><input
                      class="c-ui-input__field c-ui-input__field--left-placeholder" type="text"
                      name="feedback_survey[6]" placeholder="https://www.digikala.com/product/dkp-313420/"
                      data-question="6"></label></div>
              </div>
            </div>
            <div class=" " data-question="7" data-parent="">
              <div class="c-form-feedback__title">توضیحات</div>
              <div class="c-form-feedback__row js-valid-row">
                <div class="c-form-feedback__col"><label class="c-ui-textarea"><textarea class="c-ui-textarea__field"
                                                                                         placeholder="توضیحات"
                                                                                         name="feedback_survey[7]"
                                                                                         data-question="7"></textarea></label>
                </div>
              </div>
            </div>
            <div class="c-form-feedback__row c-form-feedback__row--submit">
              <div class="c-form-feedback__col">
                <button type="submit" class="btn-primary js-feedback-survey-submit disabled">ثبت اطلاعات</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-modal c-remodal-seller-rate-info remodal-is-initialized remodal-is-closed"
         data-remodal-id="seller-rate-info" role="dialog" aria-labelledby="modalTitle" tabindex="-1"
         aria-describedby="modalDesc" data-remodal-options="">
      <div class="c-modal__top-bar  ">
        <div class="c-modal__title c-remodal-seller-rate-info__modal-title">عملکرد فروشنده</div>
        <div class="c-modal__close" data-remodal-action="close"></div>
      </div>
      <div class="c-remodal-seller-rate-info__container">
        <div class="c-remodal-seller-rate-info__title">
          تامین به موقع:
        </div>
        <p class="c-remodal-seller-rate-info__text">
          این معیار نمایانگر آن است که فروشنده در بازه‌ی زمانی اعلام شده بدون هیچ تاخیری، کالا را تامین و ارسال کرده
          است.
        </p>
        <div class="c-remodal-seller-rate-info__title">
          تعهد ارسال:
        </div>
        <p class="c-remodal-seller-rate-info__text">
          این معیار نمایانگر آن است که فروشنده سفارشات ثبت شده‌ی مشتریان را بدون کنسلی (لغو سفارش) ارسال کرده است.
        </p>
        <div class="c-remodal-seller-rate-info__title">
          بدون مرجوعی:
        </div>
        <p class="c-remodal-seller-rate-info__text">
          این معیار نمایانگر درصد کالاهای مرجوع شده
          از سوی مشتری است که به علت تخلفات فروشنده و با دلایل قابل قبول از طرف مشتری مرجوع شده است.
        </p></div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-account remodal-is-initialized remodal-is-closed" data-remodal-id="login"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-account__headline">ورود به {{ $fa_store_name }}</div>
      <div class="c-remodal-account__content">
        <form class="c-form-account" id="loginFormModal" novalidate="novalidate">
          <div class="c-message-light c-message-light--info" id="login-form-msg"></div>
          <div class="c-form-account__title">پست الکترونیک یا شماره موبایل</div>
          <div class="c-form-account__row">
            <div class="c-form-account__col"><label class="c-ui-input c-ui-input--account-login"><input
                  class="c-ui-input__field" type="text" name="login[email_phone]" autocomplete="current-email"
                  placeholder="{{ $store_email }}"></label></div>
          </div>
          <div class="c-form-account__title">کلمه عبور</div>
          <div class="c-form-account__row">
            <div class="c-form-account__col"><label class="c-ui-input c-ui-input--account-password"><input
                  class="c-ui-input__field" name="login[password]" type="password" autocomplete="current-password"
                  placeholder=""></label></div>
          </div>
          <div class="c-form-account__agree"><label class="c-ui-checkbox c-ui-checkbox--primary"><input type="checkbox"
                                                                                                        value="1"
                                                                                                        name="login[remember]"
                                                                                                        id="accountAutoLogin"><span
                class="c-ui-checkbox__check"></span></label><label for="accountAutoLogin">مرا به خاطر داشته باش</label>
          </div>
          <div class="c-form-account__row c-form-account__row--submit">
            <div class="c-form-account__col">
              <button class="btn-login login-button-js">ورود به {{ $fa_store_name }}</button>
            </div>
          </div>
          <div class="c-form-account__link"><a data-snt-event="dkLoginClick"
                                               data-snt-params="{&quot;type&quot;:&quot;forgetPassword&quot;,&quot;site&quot;:&quot;login-modal&quot;}"
                                               href="/users/password/forgot/" class="btn-link-spoiler">رمز عبور خود را
              فراموش کرده ام</a></div>
          <div class="c-message-light c-message-light--error has-oneline" id="loginFormError">نام کاربری
            یا کلمه عبور اشتباه است.
          </div>
        </form>
      </div>
      <div class="c-remodal-account__footer is-highlighted"><span>کاربر جدید هستید؟</span><a
          data-snt-event="dkLoginClick"
          data-snt-params="{&quot;type&quot;:&quot;signup&quot;,&quot;site&quot;:&quot;login-modal&quot;}"
          href="/users/login-register/?_back=https://www.digikala.com/product/dkp-3814476/%25DA%25AF%25D9%2588%25D8%25B4%25DB%258C-%25D9%2585%25D9%2588%25D8%25A8%25D8%25A7%25DB%258C%25D9%2584-%25D8%25A7%25D9%25BE%25D9%2584-%25D9%2585%25D8%25AF%25D9%2584-iphone-12-pro-a2408-%25D8%25AF%25D9%2588-%25D8%25B3%25DB%258C%25D9%2585-%25DA%25A9%25D8%25A7%25D8%25B1%25D8%25AA-%25D8%25B8%25D8%25B1%25D9%2581%25DB%258C%25D8%25AA-128-%25DA%25AF%25DB%258C%25DA%25AF%25D8%25A7%25D8%25A8%25D8%25A7%25DB%258C%25D8%25AA"
          class="btn-link-spoiler">ثبت‌نام در {{ $fa_store_name }}</a></div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-loader remodal-is-initialized remodal-is-closed" data-remodal-id="loader"
         data-remodal-options="hashTracking: false, closeOnOutsideClick: false" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-loader__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="115" height="30" viewBox="0 0 115 30">
          <path fill="#EE384E" fill-rule="evenodd"
                d="M76.916 19.024h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zm26.883 0h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195zM88.117 6.951v15.366c0 .484-.625 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm26.883 0v15.366c0 .484-.624 1.098-1.12 1.098l-2.24.023c-.496 0-1.12-.637-1.12-1.12v-.733l-1.017 1.196c-.31.413-1.074.634-1.597.634h-4.107c-3.604 0-6.721-3.063-6.721-6.586v-4.39c0-3.523 3.117-6.585 6.72-6.585h10.082c.495 0 1.12.613 1.12 1.097zm-74.675 3.293h-6.721c-1.16 0-2.24 1.061-2.24 2.195v4.39c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78zm4.48-3.293V23.78c0 3.523-3.117 6.22-6.72 6.22H34.62c-.515 0-1-.236-1.311-.638l-1.972-2.55c-.327-.424-.144-1.202.399-1.202h6.347c1.16 0 2.24-.696 2.24-1.83v-.365h-6.72c-3.604 0-6.72-3.063-6.72-6.586v-4.39c0-3.523 3.116-6.585 6.72-6.585h4.107c.514 0 1.074.405 1.437.731l1.177 1.098V6.95c0-.483.625-1.097 1.12-1.097h2.24c.496 0 1.12.613 1.12 1.097zM4.481 16.83c0 1.134 1.08 2.195 2.24 2.195h6.72v-8.78h-6.72c-1.16 0-2.24 1.061-2.24 2.195v4.39zM16.8 0c.497 0 1.121.613 1.121 1.098v21.22c0 .483-.624 1.097-1.12 1.097h-2.24c-.496 0-1.12-.613-1.12-1.098v-.732l-1.175 1.232c-.318.346-.932.598-1.44.598H6.722C3.117 23.415 0 20.352 0 16.829v-4.356c0-3.523 3.117-6.62 6.72-6.62h6.722V1.099c0-.485.624-1.098 1.12-1.098h2.24zm46.3 14.634L69.336 6.9c.347-.421.04-1.048-.513-1.048h-3.566c-.27 0-.525.119-.696.323l-6.314 7.727V1.098c0-.485-.625-1.098-1.12-1.098h-2.24c-.496 0-1.12.613-1.12 1.098v21.22c0 .483.624 1.097 1.12 1.097h2.24c.495 0 1.12-.614 1.12-1.098v-6.951l6.317 7.744c.17.207.428.328.7.328h3.562c.554 0 .86-.627.514-1.048l-6.24-7.756zM48.166 0c-.496 0-1.12.613-1.12 1.098v2.195c0 .484.624 1.097 1.12 1.097h2.24c.495 0 1.12-.613 1.12-1.097V1.098c0-.485-.625-1.098-1.12-1.098h-2.24zm0 5.854c-.496 0-1.12.613-1.12 1.097v15.366c0 .484.8 1.12 1.295 1.12l2.065-.022c.495 0 1.12-.614 1.12-1.098V6.951c0-.484-.625-1.097-1.12-1.097h-2.24zM21.282 0c-.495 0-1.12.613-1.12 1.098v2.195c0 .484.625 1.097 1.12 1.097h2.24c.496 0 1.12-.613 1.12-1.097V1.098c0-.485-.624-1.098-1.12-1.098h-2.24zm0 5.854c-.495 0-1.12.613-1.12 1.097v15.366c0 .484.625 1.098 1.12 1.098h2.24c.496 0 1.12-.614 1.12-1.098V6.951c0-.484-.624-1.097-1.12-1.097h-2.24zm73.556-4.756v21.22c0 .483-.625 1.097-1.12 1.097h-2.24c-.496 0-1.12-.614-1.12-1.098V1.097c0-.484.624-1.097 1.12-1.097h2.24c.495 0 1.12.613 1.12 1.098z"></path>
        </svg>
      </div>
      <div class="c-remodal-loader__bullets"><i class="c-remodal-loader__bullet c-remodal-loader__bullet--1"></i><i
          class="c-remodal-loader__bullet c-remodal-loader__bullet--2"></i><i
          class="c-remodal-loader__bullet c-remodal-loader__bullet--3"></i><i
          class="c-remodal-loader__bullet c-remodal-loader__bullet--4"></i></div>
    </div>
  </div>


  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-general-alert remodal-is-initialized remodal-is-closed" data-remodal-id="alert"
         role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" tabindex="-1">
      <div class="c-remodal-general-alert__main">
        <div class="c-remodal-general-alert__content"><p class="js-remodal-general-alert__text"></p>
          <p class="c-remodal-general-alert__description js-remodal-general-alert__description"></p></div>
        <div class="c-remodal-general-alert__actions">
          <button
            class="c-remodal-general-alert__button c-remodal-general-alert__button--approve js-remodal-general-alert__button--approve"></button>
          <button
            class="c-remodal-general-alert__button c-remodal-general-alert__button--cancel js-remodal-general-alert__button--cancel"></button>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-general-information remodal-is-initialized remodal-is-closed"
         data-remodal-id="information" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <div class="c-remodal-general-information__main">
        <div class="c-remodal-general-information__content"><p class="js-remodal-general-information__text"></p></div>
        <div class="c-remodal-general-information__actions">
          <button
            class="c-remodal-general-information__button c-remodal-general-information__button--approve js-remodal-general-information__button--approve"></button>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal c-remodal-quick-view remodal-is-initialized remodal-is-closed"
         data-remodal-id="quick-view" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <button data-remodal-action="close" class="remodal-close c-remodal__close" aria-label="Close"></button>
      <div class="c-quick-view__content js-quick-view-section"></div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-fmcg remodal-is-initialized remodal-is-closed" data-remodal-id="fmcg-modal"
         data-remodal-options="hashTracking: false, closeOnOutsideClick: false" role="dialog" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-fmcg__container"><img src="https://www.digikala.com/static/files/cbaed462.png"
                                                  class="c-remodal-fmcg__logo">
        <div class="c-remodal-fmcg__content"><p class="c-remodal-fmcg__head-text">ارسال سریع کالای
            <span> سوپر مارکتی </span> فقط در تهران و کرج امکان پذیر است.</p>
          <p class="c-remodal-fmcg__question">با توجه به محدودیت ارسال، آیا مایل هستید این کالا به سبد خرید شما افزوده
            شود؟</p>
          <div class="c-remodal-fmcg__actions">
            <button class="c-remodal-fmcg__button c-remodal-fmcg__button--reject js-fmcg-modal-reject">خیر</button>
            <button class="c-remodal-fmcg__button c-remodal-fmcg__button--approve js-fmcg-modal-approve">بله</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-location js-general-location remodal-is-initialized remodal-is-closed"
         data-remodal-id="general-location" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
         tabindex="-1">
      <div class="c-remodal-location__header"><span class="js-general-location-title">انتخاب استان</span>
        <div class="c-remodal-location__close js-close-modal"></div>
      </div>
      <div class="c-remodal-location__content js-states-container">
        <div class="c-general-location__row c-general-location__row--your-location js-your-location">
          مکان‌یابی خودکار
        </div>
      </div>
      <div class="c-remodal-location__content js-cities-container" style="display: none;">
        <div class="c-general-location__row c-general-location__row--back js-back-to-states">
          بازگشت به لیست استان‌ها
        </div>
      </div>
    </div>
  </div>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div
      class="remodal c-remodal-location c-remodal-location--addresses js-general-location-addresses remodal-is-initialized remodal-is-closed"
      data-remodal-id="general-location" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"
      tabindex="-1">
      <div class="c-remodal-location__header"><span class="js-general-location-title">انتخاب آدرس</span>
        <div class="c-remodal-location__close js-close-modal"></div>
      </div>
      <div class="c-remodal-location__content js-addresses-container">
        <div class="c-ui-radio-wrapper c-ui-radio--general-location js-sample-address u-hidden"><label
            class="c-filter__label " for="generalLocationAddress"></label><label class="c-ui-radio"><input type="radio"
                                                                                                           value=""
                                                                                                           name="generalLocationAddress"
                                                                                                           class=""
                                                                                                           id="generalLocationAddress"
                                                                                                           data-title=""><span
              class="c-ui-radio__check"></span></label></div>
        <a href="/addresses/add/" class="c-general-location__add-address js-general-location-add-address">
          افزودن آدرس جدید
        </a></div>
    </div>
  </div>


  <div id="iv-container" class="">
    <div class="iv-loader"></div>
    <div class="iv-snap-view">
      <div class="iv-snap-image-wrap">
        <div class="iv-snap-handle"></div>
      </div>
      <div class="iv-zoom-slider">
        <div class="iv-zoom-handle"></div>
      </div>
    </div>
    <div class="iv-image-view-container"
    <div
    ="">
    <div class="iv-image-wrap"></div>
  </div>       </div>

  <div class="iv-close"></div>

  <div></div>

  <style id="ins-free-style" innerhtml=""></style>

  <div class="zoomContainer"
       style="-webkit-transform: translateZ(0);position:absolute;left:934.1500244140625px;top:203.98333740234375px;height:341.7px;width:341.7px;">
    <div class="zoomLens"
         style="background-position: 0px 0px; float: right; overflow: hidden; z-index: 999; transform: translateZ(0px); opacity: 0.4; width: 227.444px; height: 144.155px; background-color: rgba(239, 57, 78, 0.1); cursor: crosshair; border: 2.5px solid rgb(239, 86, 97); background-repeat: no-repeat; position: absolute; left: 113.25px; top: 0px; display: none;">
      &nbsp;
    </div>
  </div>

  <div class="zoomWindowContainer" style="width: 852px;">
    <div
      style="overflow: hidden; background-position: -428px 0px; text-align: center; background-color: rgb(255, 255, 255); width: 852px; height: 540px; float: left; background-size: 1280px 1280px; z-index: 100; border: 0px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;https://dkstatics-public.digikala.com/digikala-products/be7a0e9bf7866759fa3cea7648b149f589a01040_1607433891.jpg?x-oss-process=image/resize,w_1280/quality,q_80&quot;); top: 226.833px; left: 24px; display: none;"
      class="zoomWindow">&nbsp;
    </div>
  </div>

  <script>
    // توکن csrf
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>

  <div class="remodal-wrapper remodal-is-closed" style="display: none;">
    <div class="remodal c-remodal-confirm remodal-is-initialized remodal-is-closed"
         data-remodal-id="add-comment-success-modal" role="dialog" aria-labelledby="modal1Title"
         aria-describedby="modal1Desc" tabindex="-1">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div class="c-remodal-confirm__icon c-remodal-confirm__icon--comment-success"></div>
      <div class="c-remodal-confirm__title">نظر شما ثبت گردید و پس از تایید، نمایش داده خواهد شد</div>
    </div>
  </div>
@endsection

