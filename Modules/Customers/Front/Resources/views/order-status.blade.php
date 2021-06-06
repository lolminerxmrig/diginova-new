@php
  $banner2 = \Modules\Staff\Slider\Models\Slider::find(2);
@endphp

@extends('layouts.front.master')

@section('head')
  <title>سفارش {{ ($order->status->en_name == 'accepted')? 'موفق' : 'ناموفق' }} | {{ $fa_store_name }}</title>
  <meta name="robots" content="noindex, nofollow">
  <script>
    var supernova_mode = "production";
    var supernova_tracker_url = "https:\/\/etrackerd.digikala.com\/tracker\/events\/";
    var payablePrice = 353000;
    var cashInDailyLimit = 10000000;
    var userOrderType = "Non Fresh";
    var skipWalletRequest = true;
    var emarsys_order_data = [];
    var nowTimeInUTC = "2021-06-04 13:22:40";
    var userId = 9735394;
    var adroRCActivation = true;
    var loginRegisterUrlWithBack = "\/users\/login-register\/?_back=https:\/\/www.digikala.com\/payment\/cash-on-delivery\/109291486\/";
    var isNewCustomer = false;
    var digiclubLuckyDrawEndTime = "2021-06-23 15:30:28";
    var activateUrl = "\/digiclub\/activate\/";
  </script>
  <script src="{{ asset('assets/js/sentry.js') }}"></script>
  <script src="{{ asset('assets/new/js/paymentResponseAction.js') }}"></script>

@endsection

@section('content')
<main id="main">
    <div id="HomePageTopBanner"></div>
    <div id="content">
      <div class="container">
        <section class="c-thank-you__main-container">
          <div class="c-thank-you__container c-thank-you__container--general">
            <div class="c-thank-you__row">
              <div class="c-thank-you__order-data">
                @if ($order->status->en_name == 'accepted')
                  <div class="c-thank-you__order-result-title js-thank-you-payment-status c-thank-you__order-result-title--success" data-status="success">
                    سفارش شما با موفقیت ثبت گردید.
                  </div>
                @elseif($order->status->en_name == 'unsuccessfulـpayment')
                  <div class="c-thank-you__order-result-title js-thank-you-payment-status c-thank-you__order-result-title--error" data-status="error">
                    متاسفانه پرداخت شما ناموفق بود!
                  </div>
                @endif
                <div class="c-thank-you__order-result-data">
                  <span>شماره سفارش:</span>
                  DKC-{{ $order->order_code }}
                </div>

                @if($order->status->en_name !== 'unsuccessfulـpayment')
                  <div class="c-thank-you__order-result-data">
                    <span>شیوه پرداخت:</span>
                    @if ($order->peyment_records()->where('method_type', 'PeymentMethod')->first()->peymentMethod->en_name == 'cod')
                      پرداخت در محل (با کارت بانکی)
                    @else
                      پرداخت اینترنتی
                    @endif
                  </div>
                @else
                  <p class="c-thank-you__failed-payment-text c-thank-you__failed-payment-text--error">
                    برای جلوگیری از حذف خودکار سفارش، لطفا مبلغ آن را تا ۵۹ دقیقه آینده پرداخت نمایید.
                  </p>
                @endif


              </div>
              <div class="c-thank-you__order-status-image">
                @if($order->status->en_name !== 'unsuccessfulـpayment')
                  <img src="{{ asset('assets/images/png/order-success.png') }}">
                @else
                  <img src="{{ asset('assets/images/png/order-error.png') }}">
                @endif
              </div>
            </div>
            <div class="c-thank-you__row">
              <div class="c-thank-you__order-status-actions">
                @if($order->status->en_name !== 'unsuccessfulـpayment')
                  <a class="o-btn o-btn--contained-red-lg" href="{{ route('front.profileOrders', $order->order_code) }}">پیگیری سفارش</a>
                  <a class="o-btn o-btn--link-red-lg" href="{{ $site_url }}">بازگشت به صفحه اصلی سایت</a>
                @else
                  <form method="post">
                    <input type="hidden" name="payment_method" value="online">
                    <input type="hidden" name="bank_id" value="304" checked="checked">
                    <button type="submit" class="o-btn o-btn--contained-red-lg">
                      پرداخت مجدد
                    </button>
                  </form>
                  <a class="o-btn o-btn--link-red-lg" href="{{ route('front.repaymentOrder', $order->order_code) }}">تغییر روش پرداخت</a>
                @endif
              </div>
            </div>


            @if ($order->peyment_records()->where('method_type', 'PeymentMethod')->first()->peymentMethod->en_name == 'cod')
              <p class="c-thank-you__online-payment-dsc">
                مبلغ {{ persianNum(number_format(toman($order->cost))) }} تومان در هنگام تحویل سفارش دریافت می‌گردد.
                <br>
                چنانچه مایل هستید همچنان میتوانید مبلغ سفارش را هم‌اکنون به‌صورت اینترنتی پرداخت نمایید.
              </p>
              <a class="o-btn o-btn--outlined-red-lg" href="{{ route('front.repaymentOrder', $order->order_code) }}">پرداخت اینترنتی</a>
            @endif


{{--            <div class="c-thank-you__row--border-top">--}}
{{--              <div class="c-thank-you__order-point c-thank-you__order-point--digiclub"><span>--}}
{{--                        ۳--}}
{{--                    </span>--}}
{{--                امتیاز دیجی‌کلاب، ۷ روز پس از دریافت سفارش به حساب شما تعلق می‌گیرد.--}}
{{--              </div>--}}
{{--              <a class="c-thank-you__digiclub-link" href="https://www.digikala.com/digiclub/rewards/" target="_blank">--}}
{{--                مشاهده جوایز دیجی‌کلاب--}}
{{--              </a></div>--}}


          </div>


          <section class="c-swiper c-swiper--products">

            <div class="o-headline">
              <span>بازدیدهای اخیر شما</span>
              <a class="c-product-box__edit-link" href="https://www.digikala.com/profile/user-history/">
                مشاهده همه
              </a>
            </div>

            <div class="c-box" id="user-history">
              <div class="swiper-container swiper-container-horizontal swiper-container-rtl js-swiper-user-history-products">
                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                  <div class="swiper-slide swiper-slide-active" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="1805504" data-gtm-vis-first-on-screen-9070001_346="39079" data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">
                      <a title="کتاب هنر ظریف رهایی از دغدغه ها اثر مارک منسن" href="https://www.digikala.com/product/dkp-1805504/%DA%A9%D8%AA%D8%A7%D8%A8-%D9%87%D9%86%D8%B1-%D8%B8%D8%B1%DB%8C%D9%81-%D8%B1%D9%87%D8%A7%DB%8C%DB%8C-%D8%A7%D8%B2-%D8%AF%D8%BA%D8%AF%D8%BA%D9%87-%D9%87%D8%A7-%D8%A7%D8%AB%D8%B1-%D9%85%D8%A7%D8%B1%DA%A9-%D9%85%D9%86%D8%B3%D9%86">
                        <span class="c-product-box__img c-product-box__history-img">
                            <img alt="کتاب هنر ظریف رهایی از دغدغه ها اثر مارک منسن" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/113109974.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                        </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۳۸,۷۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="1805504">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide swiper-slide-next" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="4998908" data-gtm-vis-first-on-screen-9070001_346="39083" data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">
                      <a title="کوله پشتی لپ تاپ فوروارد کد 6633 مناسب برای لپ تاپ 16.4 اینچی" href="https://www.digikala.com/product/dkp-4998908/%DA%A9%D9%88%D9%84%D9%87-%D9%BE%D8%B4%D8%AA%DB%8C-%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-%D9%81%D9%88%D8%B1%D9%88%D8%A7%D8%B1%D8%AF-%DA%A9%D8%AF-6633-%D9%85%D9%86%D8%A7%D8%B3%D8%A8-%D8%A8%D8%B1%D8%A7%DB%8C-%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-164-%D8%A7%DB%8C%D9%86%DA%86%DB%8C">
                        <span class="c-product-box__img c-product-box__history-img">
                            <img alt="کوله پشتی لپ تاپ فوروارد کد 6633 مناسب برای لپ تاپ 16.4 اینچی" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/335a1355a1e1f8d380a038ff8cd615f77d83d410_1619340007.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                        </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                          <del>۶۵۹,۰۰۰ </del>
                          <span class="c-new-price__discount">۵۵٪</span>
                        </div>
                        <div class="c-new-price__value">
                          ۲۹۵,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>

                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="4998908">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="5086754" data-gtm-vis-first-on-screen-9070001_346="39087" data-gtm-vis-total-visible-time-9070001_346="100" data-gtm-vis-has-fired-9070001_346="1">
                      <a title="تیشرت مردانه طرح فرندز 1 کد ART-0718-S  رنگ طوسی" href="https://www.digikala.com/product/dkp-5086754/%D8%AA%DB%8C%D8%B4%D8%B1%D8%AA-%D9%85%D8%B1%D8%AF%D8%A7%D9%86%D9%87-%D8%B7%D8%B1%D8%AD-%D9%81%D8%B1%D9%86%D8%AF%D8%B2-1-%DA%A9%D8%AF-art-0718-s-%D8%B1%D9%86%DA%AF-%D8%B7%D9%88%D8%B3%DB%8C">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="تیشرت مردانه طرح فرندز 1 کد ART-0718-S  رنگ طوسی" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/68a1a0b7b01be43674e1bad75dee0d2a16092190_1620202481.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                          <del>۱۸۹,۰۰۰ </del>
                          <span class="c-new-price__discount">۱۱٪</span>
                        </div>
                        <div class="c-new-price__value">
                          ۱۶۹,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="5086754">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="2200726">
                      <a title="پیکسل مدل فرندز pf1005 مجموعه سه عددی" href="https://www.digikala.com/product/dkp-2200726/%D9%BE%DB%8C%DA%A9%D8%B3%D9%84-%D9%85%D8%AF%D9%84-%D9%81%D8%B1%D9%86%D8%AF%D8%B2-pf1005-%D9%85%D8%AC%D9%85%D9%88%D8%B9%D9%87-%D8%B3%D9%87-%D8%B9%D8%AF%D8%AF%DB%8C">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="پیکسل مدل فرندز pf1005 مجموعه سه عددی" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/114298545.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۴,۴۸۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="2200726">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="1772600">
                      <a title="کتاب تکه هایی از یک کل منسجم اثر پونه مقیمی نشر بینش نو" href="https://www.digikala.com/product/dkp-1772600/%DA%A9%D8%AA%D8%A7%D8%A8-%D8%AA%DA%A9%D9%87-%D9%87%D8%A7%DB%8C%DB%8C-%D8%A7%D8%B2-%DB%8C%DA%A9-%DA%A9%D9%84-%D9%85%D9%86%D8%B3%D8%AC%D9%85-%D8%A7%D8%AB%D8%B1-%D9%BE%D9%88%D9%86%D9%87-%D9%85%D9%82%DB%8C%D9%85%DB%8C-%D9%86%D8%B4%D8%B1-%D8%A8%DB%8C%D9%86%D8%B4-%D9%86%D9%88">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="کتاب تکه هایی از یک کل منسجم اثر پونه مقیمی نشر بینش نو" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/111992971.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۸۵,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="1772600">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="3824485">
                      <a title="ظرف پودر رختشویی طرح ماشین لباس شویی مدل W23" href="https://www.digikala.com/product/dkp-3824485/%D8%B8%D8%B1%D9%81-%D9%BE%D9%88%D8%AF%D8%B1-%D8%B1%D8%AE%D8%AA%D8%B4%D9%88%DB%8C%DB%8C-%D8%B7%D8%B1%D8%AD-%D9%85%D8%A7%D8%B4%DB%8C%D9%86-%D9%84%D8%A8%D8%A7%D8%B3-%D8%B4%D9%88%DB%8C%DB%8C-%D9%85%D8%AF%D9%84-w23">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="ظرف پودر رختشویی طرح ماشین لباس شویی مدل W23" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/054e9141e62cb5e052a64991df2aecfa651f5a04_1606049057.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۴۷,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="3824485">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="3027936">
                      <a title="یخچال و فریزر امرسان مدلBFN20D321" href="https://www.digikala.com/product/dkp-3027936/%DB%8C%D8%AE%DA%86%D8%A7%D9%84-%D9%88-%D9%81%D8%B1%DB%8C%D8%B2%D8%B1-%D8%A7%D9%85%D8%B1%D8%B3%D8%A7%D9%86-%D9%85%D8%AF%D9%84bfn20d321">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="یخچال و فریزر امرسان مدلBFN20D321" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/d0d7d3b8675a649d9f0fea8a05bfd173e182c036_1593933390.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۹,۸۰۰,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="3027936">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="4052467">
                      <a title="تلویزیون ال ای دی هوشمند جی پلاس مدل GTV-50LU722S سایز 50 اینچ" href="https://www.digikala.com/product/dkp-4052467/%D8%AA%D9%84%D9%88%DB%8C%D8%B2%DB%8C%D9%88%D9%86-%D8%A7%D9%84-%D8%A7%DB%8C-%D8%AF%DB%8C-%D9%87%D9%88%D8%B4%D9%85%D9%86%D8%AF-%D8%AC%DB%8C-%D9%BE%D9%84%D8%A7%D8%B3-%D9%85%D8%AF%D9%84-gtv-50lu722s-%D8%B3%D8%A7%DB%8C%D8%B2-50-%D8%A7%DB%8C%D9%86%DA%86">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="تلویزیون ال ای دی هوشمند جی پلاس مدل GTV-50LU722S سایز 50 اینچ" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/263ded325772a4e5bbd3d2f0333614a075ea2fee_1608722999.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۱۰,۰۲۹,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="4052467">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="904246">
                      <a title="لپ تاپ 15 اینچی لنوو مدل Ideapad 330 - E" href="https://www.digikala.com/product/dkp-904246/%D9%84%D9%BE-%D8%AA%D8%A7%D9%BE-15-%D8%A7%DB%8C%D9%86%DA%86%DB%8C-%D9%84%D9%86%D9%88%D9%88-%D9%85%D8%AF%D9%84-ideapad-330-e">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="لپ تاپ 15 اینچی لنوو مدل Ideapad 330 - E" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/4209444.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۸,۷۰۰,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="904246">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="330734">
                      <a title="میز تحریر تاشو پارس مدل 50" href="https://www.digikala.com/product/dkp-330734/%D9%85%DB%8C%D8%B2-%D8%AA%D8%AD%D8%B1%DB%8C%D8%B1-%D8%AA%D8%A7%D8%B4%D9%88-%D9%BE%D8%A7%D8%B1%D8%B3-%D9%85%D8%AF%D9%84-50">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="میز تحریر تاشو پارس مدل 50" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/2177485.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                          <del>۲۱۴,۵۰۰ </del>
                          <span class="c-new-price__discount">۷٪</span>
                        </div>
                        <div class="c-new-price__value">
                          ۱۹۹,۹۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="330734">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="343484">
                      <a title="میز تحریر تاشو پارس مدل 70" href="https://www.digikala.com/product/dkp-343484/%D9%85%DB%8C%D8%B2-%D8%AA%D8%AD%D8%B1%DB%8C%D8%B1-%D8%AA%D8%A7%D8%B4%D9%88-%D9%BE%D8%A7%D8%B1%D8%B3-%D9%85%D8%AF%D9%84-70">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="میز تحریر تاشو پارس مدل 70" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/1751064.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۲۲۹,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="343484">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="4416847">
                      <a title="میز تحریر دینا&nbsp;مدل 01" href="https://www.digikala.com/product/dkp-4416847/%D9%85%DB%8C%D8%B2-%D8%AA%D8%AD%D8%B1%DB%8C%D8%B1-%D8%AF%DB%8C%D9%86%D8%A7-%D9%85%D8%AF%D9%84-01">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="میز تحریر دینا&nbsp;مدل 01" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/a3bb1adf8f06055909709de4c4d407de617b5f82_1612786826.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                        </div>
                        <div class="c-new-price__value">
                          ۲۲۰,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="4416847">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="3177566">
                      <a title="میز تحریر میزیمو کد 73" href="https://www.digikala.com/product/dkp-3177566/%D9%85%DB%8C%D8%B2-%D8%AA%D8%AD%D8%B1%DB%8C%D8%B1-%D9%85%DB%8C%D8%B2%DB%8C%D9%85%D9%88-%DA%A9%D8%AF-73">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="میز تحریر میزیمو کد 73" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/c1e9f1f7f4bfcc7715fca044f6f5a0e728daebf1_1596611928.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                          <del>۳۶۳,۰۰۰ </del>
                          <span class="c-new-price__discount">۱۲٪</span>
                        </div>
                        <div class="c-new-price__value">
                          ۳۲۰,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="3177566">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="4267929">
                      <a title="میز تحریر میزیمو مدل تاشو کد 3703" href="https://www.digikala.com/product/dkp-4267929/%D9%85%DB%8C%D8%B2-%D8%AA%D8%AD%D8%B1%DB%8C%D8%B1-%D9%85%DB%8C%D8%B2%DB%8C%D9%85%D9%88-%D9%85%D8%AF%D9%84-%D8%A8%D8%A7%DA%A9%D8%B3%D8%AF%D8%A7%D8%B1-%D8%AA%D8%A7%D8%B4%D9%88-%DA%A9%D8%AF-3703">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="میز تحریر میزیمو مدل تاشو کد 3703" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/e092c618d1609009fd0fa86e326d879e3e1429e1_1611056603.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                          <del>۶۰۵,۰۰۰ </del>
                          <span class="c-new-price__discount">۴۵٪</span>
                        </div>
                        <div class="c-new-price__value">
                          ۳۳۰,۰۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="4267929">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>
                  <div class="swiper-slide" style="max-width: 250px; width: 223px;" data-carousel="sn-carousels-user-history">

                    <div class="c-product-box c-product-box--history js-product-url js-carousel-ga-product-box" data-id="623454">
                      <a title="میز تحریر تاشوو تنظیم شو میلاد سفید 70" href="https://www.digikala.com/product/dkp-623454/%D9%85%DB%8C%D8%B2-%D8%AA%D8%AD%D8%B1%DB%8C%D8%B1-%D8%AA%D8%A7%D8%B4%D9%88%D9%88-%D8%AA%D9%86%D8%B8%DB%8C%D9%85-%D8%B4%D9%88-%D9%85%DB%8C%D9%84%D8%A7%D8%AF-%D8%B3%D9%81%DB%8C%D8%AF-70">
                                    <span class="c-product-box__img c-product-box__history-img">
                                        <img alt="میز تحریر تاشوو تنظیم شو میلاد سفید 70" src="./پرداخت موفق _ فروشگاه اینترنتی دیجی_کالا_files/2691865.jpg" loading="lazy" class="swiper-lazy swiper-lazy-loaded">
                                    </span>
                      </a>

                      <div class="c-new-price">
                        <div class="c-new-price__old-value">
                          <del>۲۱۶,۰۰۰ </del>
                          <span class="c-new-price__discount">۴۰٪</span>
                        </div>
                        <div class="c-new-price__value">
                          ۱۲۹,۴۰۰
                          <span class="c-new-price__currency">تومان</span>
                        </div>
                      </div>


                      <button type="button" class="c-product-box__same-product-link js-history-same-product-modal" data-product-id="623454">
                        کالاهای مشابه
                      </button>
                    </div>

                  </div>

                </div>
                <div class="swiper-button-prev js-swiper-button-prev swiper-button-disabled"></div>
                <div class="swiper-button-next js-swiper-button-next"></div>
              </div>
            </div>
          </section>


        </section>
      </div>
    </div>
</main>
@endsection
